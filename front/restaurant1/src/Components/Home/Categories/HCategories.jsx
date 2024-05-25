import axios from 'axios'
import React from 'react'
import { useState } from 'react'
import { useEffect } from 'react'
import { Link } from 'react-router-dom'
import './HCategories.css'
const HCategories = () => {
    const [categories , setCategories]= useState([]);
  useEffect(()=>{
    axios.get('http://127.0.0.1:8000/api/category').then((res)=> setCategories(res.data.categories))
    .catch(err => console.log(err));
  },[])
// console.log(categories)
    return (
    <div className=''>
        <h1>Browse Our Menu</h1>
        <div className='Hcategories'>
        {
            
            categories.map((el,idx)=> (
              
                <div className='Hcategory' key={idx}>
                  <img src={el.icon} ></img>
        <h2>{el.name}</h2>
        <p>In the new era of technology we look in the future with certainty and pride for our life</p>
        <Link className='Link'>Explore Menu</Link>
                    </div>
            )

            )
        }
</div>
    </div>
  )
}

export default HCategories