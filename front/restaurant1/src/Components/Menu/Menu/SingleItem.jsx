import React, { useEffect, useState } from 'react'
import Header from '../../Header/Header'
import Nav from '../../Navbar/Nav'
import axios from 'axios';
import { NavLink, useParams } from 'react-router-dom';

export const SingleItem = () => {
    const [categories, setCategories] = useState([]);
    const [items, setItems] = useState([]);

    
    useEffect(() => {
        axios.get('http://127.0.0.1:8000/api/category').then((res) => setCategories(res.data.categories))
          .catch(err => console.log(err));
      }, [])
      
      const cat= useParams()
      useEffect(() => {
        axios.get('http://127.0.0.1:8000/api/menu').then((res) => setItems(res.data.items))
          .catch(err => console.log(err));
      }, [categories])
const allitems=items;
       
       const catid = categories.find(category =>  
        category.name === cat.name)?.id

        
        // useEffect(() => {
        const filteredItems = items.filter(item => item.category === catid) 
        // setItems(filteredItems)
    //   }, [catid]) 

// console.log(catid[0].id)
// console.log(items[1].category)
   
   
// if(!catid){
// return (<div></div>)
// }
  return (
    <div>
        <Header></Header>
        <Nav></Nav>   
        <h1>Our Menu</h1>
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
          filteredItems.map((el) => (
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
