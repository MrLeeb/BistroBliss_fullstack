import React from 'react'
import './Events.css'
import img1 from '../../../Images/kebab-set-table 1.png'
import img2 from '../../../Images/charming-female-blowing-candles-birthday-cake-after-making-her-wish-party 1.png'
import img3 from '../../../Images/happy-man-wife-sunny-day 1.png'
import img4 from '../../../Images/group-friends-eating-restaurant 1.png'
export const Events = () => {
  return (

    <div className='Heventshead'>
<h1>We also offer unique services for your events</h1>

<div className='HeventsContainer'>

<div className='HeventsEvent'>
<img src={img1} alt=''></img>
<h4>Caterings</h4>
<p>In the new era of technology we look in the future with certainty for life.</p>
</div>
<div className='HeventsEvent'>
<img src={img2}></img>
<h4>Birthdays</h4>
<p>In the new era of technology we look in the future with certainty for life.</p>
</div>
<div className='HeventsEvent'>
<img src={img3}></img>
<h4>Weddings</h4>
<p>In the new era of technology we look in the future with certainty for life.</p>
</div>
<div className='HeventsEvent'>
<img src={img4}></img>
<h4>Events</h4>
<p>In the new era of technology we look in the future with certainty for life.</p>
</div>

</div>

    </div>
  )
}
