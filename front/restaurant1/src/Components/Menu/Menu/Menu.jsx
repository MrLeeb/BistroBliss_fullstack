import React, { useEffect, useState } from 'react'
import './Menu.css'
import axios from 'axios';
import { NavLink } from 'react-router-dom';

export const Menuitems = () => {
  const [categories, setCategories] = useState([]);
  const [items, setItems] = useState([]);
  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/category').then((res) => setCategories(res.data.categories))
      .catch(err => console.log(err));
  }, [])
  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/menu').then((res) => setItems(res.data.items))
      .catch(err => console.log(err));
  }, [])

  return (
    <div>
      <h1 className='bgtext1'>Our Menu</h1>
      <p>We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
      <ul className='menunavb'>
        <NavLink to={"/menu"}>All</NavLink>
        {
          categories.map((el) => (
            // <div className='Hcategory' key={idx}>
            <NavLink to={"/menu/"+el.name}>{el.name}</NavLink>
            // </div>
          )
          )
        }

      </ul>
      <div className='menuitemscontainer'>
        {
          items.map((el) => (
            <div className='menuitem'>
<img src={el.image}></img>
<h2>${el.price}</h2>
<h2>{el.title}</h2>
<p>{el.description}</p>
            </div>
                   ))}
            </div>
    </div>
      )
}
