import React from 'react'
import './Taste.css'
import img1 from '../../../Images/BG.png'
import img2 from '../../../Images/Play.png'
import img3 from '../../../Images/Group.png'
import img4 from '../../../Images/Group (1).png'
import img5 from '../../../Images/Group (2).png'
export const Taste = () => {
  return (
    <div style={{marginTop:"200px"}}>
        
        <img src={img1} className='Tasteimg' alt='' width={1519}></img>
        <div className='Tasteinimage'>
            <img src={img2}></img>
        <h1 className='Tastetext'>Feel the authentic & original taste from us</h1>
        </div>
        
<div className='Tastecontainer'>
    
<div className='Tastefeat'>
    <img src={img3}  alt='' height={44}></img>
    <div className='Tastefeattext'>
    <h4>Multi Cuisine</h4>
    <p>In the new era of technology we look in the future with certainty life.</p>
    </div>
    </div>
    
<div className='Tastefeat'>
    <img src={img4} alt='' height={44}></img>
    <div className='Tastefeattext'>
    <h4>Easy To Order</h4>
    <p>In the new era of technology we look in the future with certainty life.</p>
    </div>
    </div>
<div className='Tastefeat'>
    <img src={img5} alt='' height={44}></img>
    <div className='Tastefeattext'>
    <h4>Fast Delivery</h4>
    <p>In the new era of technology we look in the future with certainty life.</p>
    </div>

</div>

    </div>        

    </div>
  )
}
