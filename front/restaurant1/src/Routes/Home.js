import React from 'react'
import Nav from '../Components/Navbar/Nav'
import Navout from '../Components/Navbar/Navout'
import Header from '../Components/Header/Header'
import Homebg from '../Components/Home/HomeBg/Homebg'
import HCategories from '../Components/Home/Categories/HCategories'
import { HAbout } from '../Components/Home/About/HAbout'
import { Events } from '../Components/Home/Events/Events'
import { Delivery } from '../Components/Home/Delivery/Delivery'
import { Feedback } from '../Components/Home/Feedback/Feedback'
import { Footer } from '../Components/Footer/Footer'


const Na = Navout;

export const Home = () => {
  return (
    <div>
      <Header></Header>
      {/* <Nav></Nav> */}
 <Na></Na>
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
