import React from 'react'
import './Apps.css'
import img1 from '../../../Images/UberEats.png'
import img2 from '../../../Images/Grubhub.png'
import img3 from '../../../Images/Postmates.png'
import img4 from '../../../Images/DoorDash.png'
import img5 from '../../../Images/FoodPanda.png'
import img6 from '../../../Images/Deliveroo.png'
import img7 from '../../../Images/InstaCart.png'
import img8 from '../../../Images/JustEat.png'
import img9 from '../../../Images/DidiFoods.png'


export const Apps = () => {
  return (
    <div className='Apps'>
        <div className='Appsdetails'>
        <h1>You can order through apps</h1>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit enim bibendum sed et aliquet aliquet risus tempor semper.</p>
</div>
<div className='Appscontainer'>

<div className='Appi'>
    <img src={img1}></img>
</div>
<div className='Appi'>
    <img src={img2}></img>
</div>
<div className='Appi'>
    <img src={img3}></img>
</div>
<div className='Appi'>
    <img src={img4}></img>
</div>
<div className='Appi'>
    <img src={img5}></img>
</div>
<div className='Appi'>
    <img src={img6}></img>
</div>
<div className='Appi'>
    <img src={img7}></img>
</div>
<div className='Appi'>
    <img src={img8}></img>
</div>
<div className='Appi'>
    <img src={img9}></img>
</div>
</div>
        </div>
  )
}
