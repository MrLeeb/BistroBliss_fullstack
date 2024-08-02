import React from 'react'
import { Log } from '../Components/Login/Login/Log'
import Header from '../Components/Header/Header'
import NavPar from '../Components/Navbar/NavPar'
import { Footer } from '../Components/Footer/Footer'


export const Login = () => {
  return (
    <div>
      <Header></Header>
      <NavPar></NavPar>
        <Log></Log>
        <Footer></Footer>
    </div>
  )
}
