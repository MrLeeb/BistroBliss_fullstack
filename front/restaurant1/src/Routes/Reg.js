import React from 'react'
import { Log } from '../Components/Login/Login/Log'
import Header from '../Components/Header/Header'
import NavPar from '../Components/Navbar/NavPar'
import { Footer } from '../Components/Footer/Footer'
import { Reg } from '../Components/Registeration/Register'


export const SignUp = () => {
  return (
    <div>
      <Header></Header>
      <NavPar></NavPar>
        <Reg></Reg>
        <Footer></Footer>
    </div>
  )
}
