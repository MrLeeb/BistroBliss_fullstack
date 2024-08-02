import React from 'react'
import NavPar from '../Components/Navbar/NavPar'
import Header from '../Components/Header/Header'
import Homebg from '../Components/Home/HomeBg/Homebg'
import HCategories from '../Components/Home/Categories/HCategories'
import { HAbout } from '../Components/Home/About/HAbout'
import { Events } from '../Components/Home/Events/Events'
import { Delivery } from '../Components/Home/Delivery/Delivery'
import { Feedback } from '../Components/Home/Feedback/Feedback'
import { Footer } from '../Components/Footer/Footer'


export const Home = () => {
  return (
    <div>
      <Header></Header>
 <NavPar></NavPar>
      <Homebg></Homebg>
      <HCategories></HCategories>
      <HAbout></HAbout>
      <Events></Events>
      <Delivery></Delivery>
     <Feedback></Feedback>
     <Footer></Footer>
    </div>
  )
}
