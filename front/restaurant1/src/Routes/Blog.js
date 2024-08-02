import React from 'react'
import SingleBlog from '../Components/Pages/SingleBlog & Others/SingleBlog'
import OtherBlogs from '../Components/Pages/SingleBlog & Others/OtherBlogs'
import Header from '../Components/Header/Header'
import NavPar from '../Components/Navbar/NavPar'
import { Footer } from '../Components/Footer/Footer'

const Blog = () => {
  return (
    <div>
        <Header></Header>
    <NavPar></NavPar>     
    <SingleBlog></SingleBlog>
    <OtherBlogs></OtherBlogs>
    <Footer></Footer>
    </div>
  )
}

export default Blog