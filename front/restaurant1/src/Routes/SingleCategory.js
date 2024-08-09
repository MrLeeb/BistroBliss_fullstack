import React from 'react'
import Nav from '../Components/Navbar/Nav'
import Header from '../Components/Header/Header'
import { Menuitems } from '../Components/Menu/Menu/Menu'
import {Apps} from '../Components/Menu/Apps/Apps'
import NavPar from '../Components/Navbar/NavPar'
import { Footer } from '../Components/Footer/Footer'
import { SingleItem } from '../Components/Menu/Menu/SingleItem'

export const SingleMenu = () => {
  return (
    <div>
      <Header></Header>
      <NavPar></NavPar>     
      <SingleItem></SingleItem>
      <Apps></Apps>
      <Footer></Footer>
    </div>
  )
}
