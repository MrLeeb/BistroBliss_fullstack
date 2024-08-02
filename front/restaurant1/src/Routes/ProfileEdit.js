import React from 'react'
import Header from '../Components/Header/Header'
import NavPar from '../Components/Navbar/NavPar'
import { Footer } from '../Components/Footer/Footer'
import EditProfile from '../Components/Profile/EditProfile'

export const ProfileEdit = () => {
  return (
    <div>
    <Header></Header>
      <NavPar></NavPar>
    <EditProfile></EditProfile>
    <Footer></Footer>
    </div>
  )
}
