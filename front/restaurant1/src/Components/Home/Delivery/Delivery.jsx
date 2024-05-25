import React from 'react'
import './Delivery.css'
import img1 from '../../../Images/mid-shot-chef-holding-plate-with-pasta-making-ok-sign 1.png'
import img2 from '../../../Images/sadj-iron-pot-with-various-salads 1.png'
import img3 from '../../../Images/sour-curry-with-snakehead-fish-spicy-garden-hot-pot-thai-food 1.png'
import img4 from '../../../Images/Icon.png'
import img5 from '../../../Images/Icon (1).png'
import img6 from '../../../Images/Icon (2).png'

export const Delivery = () => {
  return (
    <div className='HdeliveryC'>
      <div className='HdeliveryLeft'>
        <img src={img1} width={500}></img>
        <div className='HdeliveryLeft1'>
        <img src={img3}></img>
        <img src={img2}></img>
</div>
      </div>
      <div className='HdeliveryRight'>
<h1>Fastest Food Delivery in City</h1>
<p>Our visual designer lets you quickly and of drag a down your way to customapps for both keep desktop. </p>
<div className='HdeliveryRicon'>
<img src={img4} height={20}></img>
<h5>Delivery within 30 minutes</h5>
</div>
<div className='HdeliveryRicon'>
<img src={img5} height={20}></img>
<h5>Best Offer & Prices</h5>
</div>
<div className='HdeliveryRicon'>
<img src={img6} height={20}></img>
<h5>Online Services Available</h5>
</div>
      </div>
    </div>
  )
}
