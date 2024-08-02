import axios from 'axios'
import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'


const OtherBlogs = () => {
const [blogs,setBlogs] = useState([])
const excludedId= useParams().name
useEffect(()=> {axios.post('http://127.0.0.1:8000/api/blogsrandom', excludedId).then(
  t=>  setBlogs(t.data)
)
.catch(err => console.log(err));
},[])


  return (
    <div>
    <h1 className='bgtext1'>Our Menu</h1>
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
     
        

        
    </div>
  )
}

export default OtherBlogs