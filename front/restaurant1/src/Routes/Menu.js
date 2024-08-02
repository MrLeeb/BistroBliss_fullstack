import React from 'react'
import Nav from '../Components/Navbar/Nav'
import Header from '../Components/Header/Header'
import { Menuitems } from '../Components/Menu/Menu/Menu'
import {Apps} from '../Components/Menu/Apps/Apps'
import NavPar from '../Components/Navbar/NavPar'

export const Menu = () => {
  return (
    <div>
      <Header></Header>
      <NavPar></NavPar>     
      <Menuitems></Menuitems>
      <Apps></Apps>
    </div>
  )
}
