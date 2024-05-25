import React from 'react'
import Nav from '../Components/Navbar/Nav'
import Header from '../Components/Header/Header'
import { HAbout } from '../Components/Home/About/HAbout'
import { Taste } from '../Components/About/Taste/Taste'
import { Information } from '../Components/About/Information/Information'
import { Feedback } from '../Components/Home/Feedback/Feedback'
import { Footer } from '../Components/Footer/Footer'


export const About = () => {
  return (
    <div>
    <Header></Header>
    <Nav></Nav>
    <HAbout></HAbout>
    <Taste></Taste>
    <Information></Information>
    <Feedback></Feedback>
     <Footer></Footer>
  </div>
  )
}
