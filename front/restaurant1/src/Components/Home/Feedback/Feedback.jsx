import React from 'react'
import './Feedback.css'
import img1 from '../../../Images/Ellipse 19.png'
import img2 from '../../../Images/Image (1).png'
import img3 from '../../../Images/Image (2).png'

export const Feedback = () => {
  return (
    <div style={{marginTop:"200px"}}>
        <h1 className='HFBtitle'>What Our Customers Say</h1>

        <div className='HFBcontainer'>

<div className='HFBcomment'>
<h3>"The best restaurant"</h3>
<p>Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.</p>
<div className='HFBinner1'>
    <img src={img1} height={70}></img>
    <div className='HFBinner2'>
        <h5>Sophire Robson</h5>
        <p>Los Angeles, CA</p>
    </div>
</div>
</div>


<div className='HFBcomment'>
<h3>"Simply delicious"</h3>
<p>Place exceeded my expectations on all fronts. The ambiance was cozy and relaxed, making it a perfect venue for our anniversary dinner. Each dish was prepared and beautifully presented.</p>
<div className='HFBinner1'>
    <img src={img2} height={70}></img>
    <div className='HFBinner2'>
        <h5>Matt Cannon</h5>
        <p>San Diego, CA</p>
    </div>
</div>
</div>


<div className='HFBcomment'>
<h3 >"One of a kind restaurant"</h3>
<p>The culinary experience at place is first to none. The atmosphere is vibrant, the food - nothing short of extraordinary. The food was the highlight of our evening. Highly recommended.</p>
<div className='HFBinner1'>
    <img src={img3} height={70}></img>
    <div className='HFBinner2'>
        <h5>Andy Smith</h5>
        <p>San Francisco, CA</p>
    </div>
</div>
</div>

        </div>
    </div>
  )
}
