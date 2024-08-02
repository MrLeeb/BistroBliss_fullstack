import axios from 'axios';
import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom';
import './SingleBlog.css'

const SingleBlog = () => {
    const [blogs, setBlogs] = useState([]);
    useEffect(() => {
      axios.get('http://127.0.0.1:8000/api/blogs').then((res) => 
      setBlogs(res.data.items)
    //   console.log(res)
      )
      .catch(err => console.log(err));
    }, [])

    const blog= useParams()

console.log(blog.name)
    const filteredBlog = blogs.filter(bl =>
        bl.id == blog.name
    )
    console.log(filteredBlog)
const bl= filteredBlog[0]
console.log(bl)
  return (
    <div className='bl'>
        <h1 className='bgtext1'>{bl?.title}</h1>
       <img src={"http://localhost:8000/storage/images/"+bl?.imagetop} alt="" /> 
       <p dangerouslySetInnerHTML={{__html:bl?.content}} className='blogcontent'></p>
    
       <img src={"http://localhost:8000/storage/images/"+bl?.imagebottom} alt="" /> 
    </div>
  )
}

export default SingleBlog