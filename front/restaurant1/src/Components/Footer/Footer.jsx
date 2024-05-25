import React from 'react'
import './Footer.css'
import img1 from '../../Images/pexels-steve-3789885 1.png'
import img2 from '../../Images/eiliv-aceron-d5PbKQJ0Lu8-unsplash 1.png'
import img3 from '../../Images/pexels-ella-olsson-1640772 1.png'
import img4 from '../../Images/pexels-ash-376464 1.png'
// import img4 from '../../../Images/.png
import { LuPhone } from "react-icons/lu";
import { MdMailOutline } from "react-icons/md";
import { FaTwitter, FaGithub } from "react-icons/fa";
import { RiFacebookFill } from "react-icons/ri";
import { IoLogoInstagram } from "react-icons/io5";
import logo from '../../Images/japanese-food.png'
import { Link } from 'react-router-dom'

export const Footer = () => {
    return (
        <div className='Footer'>
            <div className='footercontainer'>

                <div className='footercol1'>
                    <div className='logo'>
                        <img src={logo} alt='' width={60} height={57}></img>
                        <h2 className='logot'>Bistro Bliss</h2>
                    </div>
                    <p>In the new era of technology we look a in the future with certainty and pride to for our company and.</p>
                    <div className='footersocials'>
                        <div className='socialsi'><FaTwitter ></FaTwitter></div>
                        <div className='socialsi'><RiFacebookFill ></RiFacebookFill></div>
                        <div className='socialsi'><IoLogoInstagram ></IoLogoInstagram></div>
                        <div className='socialsi'><FaGithub ></FaGithub></div>





                    </div>
                </div>

                <div className='footercol2'>
                    <div className='footercol21'>
<h5>Pages</h5>
<Link className='link'>Home</Link>
<Link className='link'>About</Link>
<Link className='link'>Menu</Link>
<Link className='link'>Pricing</Link>
<Link className='link'>Blog</Link>
<Link className='link'>Contact</Link>
<Link className='link'>Delivery</Link>
                    </div>
                    <div className='footercol21'>
                    <h5>Utility Pages</h5>
<Link className='link'>Start Here</Link>
<Link className='link'>Styleguide</Link>
<Link className='link'>Password Protected</Link>
<Link className='link'>404 Not Found</Link>
<Link className='link'>Lisences</Link>
<Link className='link'>Changelog</Link>
<Link className='link'>View More</Link>

                    </div>
                    </div>
                    <div className='footercol3'>
<h5>Follow Us On Instagram</h5>
<div className='footercol3img'>
<img src={img1}></img>
<img src={img2}></img>
<img src={img3}></img>
<img src={img4}></img>
                    </div>
                </div>


            </div>
<p className='FooterCR'>Copyright © 2023 Hashtag Developer. All Rights Reserved</p>
        </div>
    )
}
