import React from 'react'
import { Bookform } from '../Components/Book/Bookform'
import NavPar from '../Components/Navbar/NavPar'
import Header from '../Components/Header/Header'
import { Footer } from '../Components/Footer/Footer'

export const Book = () => {
  return (
    <div>
      <Header></Header>
      <NavPar></NavPar>
      <Bookform></Bookform>
      <Footer></Footer>
    </div>
  )
}
