import React from 'react'
import './Header.css'
import { LuPhone } from "react-icons/lu";
import { MdMailOutline } from "react-icons/md";
import { FaTwitter,FaGithub } from "react-icons/fa";
import { RiFacebookFill } from "react-icons/ri";
import { IoLogoInstagram } from "react-icons/io5";


const Header = () => {
    return (
        <div id='header'>
            <div className='contacts'>
                <div className='phone'>
                    <LuPhone className='phonei' />
                    <p>(414)857 - 0107</p>
                </div>
                <div className='mail'>
                    <MdMailOutline className='maili' />
                    <p>yummy@bistrobliss</p>
                </div>
            </div>
<div className='socials'>
    <div className='socialsi'>
<FaTwitter />
</div>
<div className='socialsi'>
<RiFacebookFill />
</div>
<div className='socialsi'>
<IoLogoInstagram />
</div>
<div className='socialsi'>
<FaGithub /></div>
</div>


        </div>
    )
}

export default Header