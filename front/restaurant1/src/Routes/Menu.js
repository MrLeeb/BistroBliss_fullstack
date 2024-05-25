import React from 'react'
import Nav from '../Components/Navbar/Nav'
import Header from '../Components/Header/Header'
import { Menuitems } from '../Components/Menu/Menu/Menu'
import {Apps} from '../Components/Menu/Apps/Apps'

export const Menu = () => {
  return (
    <div>
      <Header></Header>
      <Nav></Nav>     
      <Menuitems></Menuitems>
      <Apps></Apps>
    </div>
  )
}
