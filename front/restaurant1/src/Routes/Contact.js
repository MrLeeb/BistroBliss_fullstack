import React from 'react'
import Contactus from '../Components/Contact/Contactus'
import Header from '../Components/Header/Header'
import NavPar from '../Components/Navbar/NavPar'
import { Footer } from '../Components/Footer/Footer'

export const Contact = () => {
  return (
    <div>
      <Header></Header>
      <NavPar></NavPar>
      <Contactus></Contactus>
      <Footer></Footer>
    </div>
  )
}
