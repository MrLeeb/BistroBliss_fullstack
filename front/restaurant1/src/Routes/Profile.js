import React from 'react'
import ProfileView from '../Components/Profile/ProfileView'
import Header from '../Components/Header/Header'
import NavPar from '../Components/Navbar/NavPar'
import { Footer } from '../Components/Footer/Footer'

export const Profile = () => {
  return (
    <div>
    <Header></Header>
      <NavPar></NavPar>
    <ProfileView></ProfileView>
    <Footer></Footer>
    </div>
  )
}
