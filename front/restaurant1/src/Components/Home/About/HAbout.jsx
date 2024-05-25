import React from 'react'
import './HAbout.css'
import bg from '../../../Images/home-about.png'
import { LuPhone } from "react-icons/lu";
import { MdMailOutline } from "react-icons/md";
import { TiLocationOutline } from "react-icons/ti";


export const HAbout = () => {
    return (
        <div className='HaboutContainer'>
            <div className='HaboutLeft'>
                <img src={bg} alt='' width={500}></img>
                <div className='Haboutblackbox'>
                    <h1>Come and visit us</h1>
{/* <div className='Haboutblacksocials'>
<div className='Haboutblackicons'>
<LuPhone/>
<MdMailOutline/>
<TiLocationOutline className='addressi'/>
</div>
<div className='Haboutblacktext'>
<p>(414) 857 - 0107</p>
<p>happytummy@restaurant.com</p>
<p>837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles</p>
</div>
</div> */}

                    <div className='Haboutphone'>
                    <LuPhone className='Habouti'/>
                    <p>(414) 857 - 0107</p>
                    </div>
                    <div className='Haboutmail'>
                    <MdMailOutline className='Habouti'/>
                    <p>happytummy@restaurant.com</p>
                    </div>
                    <div className='Haboutaddress'>
                    <TiLocationOutline className='addressi'/>
                    <p>837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles</p>
                    </div>

                </div>
            </div>
            <div className='HaboutRight'>
                <h1>We provide healthy food for your family</h1>
                <h5>Our story began with a vision to create a unique dining experience that merges fine dining, exceptional service, and a vibrant ambience.Rooted in city's rich culinary culture, we aim to honor our local roots while infusing a global palete.</h5>
                <p>At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, strives to make every visit an unforgettable event.</p>
                <button className='moreaboutb'>More About Us</button>
            </div>


        </div>
    )
}
