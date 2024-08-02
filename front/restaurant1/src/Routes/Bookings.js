import React from 'react'
import NavPar from '../Components/Navbar/NavPar'
import Header from '../Components/Header/Header'
import { Footer } from '../Components/Footer/Footer'
import MyBookings from '../Components/Bookings/MyBookings'

export const Bookings = () => {
  return (
    <div>
      <Header></Header>
      <NavPar></NavPar>
      <MyBookings></MyBookings>
      <Footer></Footer>
    </div>
  )
}
