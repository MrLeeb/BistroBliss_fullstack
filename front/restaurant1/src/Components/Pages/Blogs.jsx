import axios from 'axios';
import React, { useEffect, useState } from 'react'
import './Blogs.css'
import { NavLink } from 'react-router-dom';

const Blogs = () => {
    const [blogs, setBlogs] = useState([]);
    useEffect(() => {
      axios.get('http://127.0.0.1:8000/api/blogs').then((res) => 
      setBlogs(res.data.items)
    //   console.log(res)
      )
        .catch(err => console.log(err));
    }, [])
    console.log(blogs);
    
    
 
    return (
    <div>
    <h1 className='bgtext1'>Our Blogs & Articles</h1>
      <p>We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
      <ul className=' blogs'>
        {/* <NavLink to={"/menu"}>All</NavLink> */}
        {
          blogs.map((el) => (
            // <div className='Hcategory' key={idx}>
            // <div className='blogitem'>
              <a href={"/blogs/" + el.id} className={'bloglink'}>
<img src={"http://localhost:8000/storage/images/"+el.imagetop} width={210}></img>
<h6 className='blogd'>{el.date}</h6>
<h5 className='blogt'>{el.title}</h5>
</a>
            //  </div>
            // </div>
          )
          )
        }

      </ul>
      {/* <div className='menuitemscontainer'>
        {
          items.map((el) => (
            

<h2>${el.price}</h2>
<h2>{el.title}</h2>
<p>{el.description}</p>
            </div>
                   ))}
            </div>     */}
        

        
    </div>
  )
}

export default Blogs