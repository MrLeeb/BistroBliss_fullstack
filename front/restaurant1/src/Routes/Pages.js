import React from 'react'
import NavPar from '../Components/Navbar/NavPar'
import Header from '../Components/Header/Header'
import { Footer } from '../Components/Footer/Footer'
import MyBookings from '../Components/Bookings/MyBookings'
import Blogs from '../Components/Pages/Blogs'

export const Pages = () => {
  return (
    <div>
      <Header></Header>
      <NavPar></NavPar>
      <Blogs></Blogs>
      <Footer></Footer>
    </div>
  )
}