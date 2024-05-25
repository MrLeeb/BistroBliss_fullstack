import React from 'react'
import bg from '../../../Images/home_bg.png'
import './homebg.css'
import { Link } from 'react-router-dom'


const Homebg = () => {
    return (
        <div>
            <div className='container1'></div>
            <img src={bg} alt='' width={1519}></img>
            <div className='bgtext'>
                <h1 className='bgtext1'>Best food for your taste</h1>
                <h2 className='bgtext2'>Discover delectable cuisine and unforgettable moments in our welcoming, culinary haven.</h2>
                <div className='bgbuttons'>
                    <Link className='bookb bgb' to="/book">Book A Table</Link>  
                    <Link className='exploreb bgb' to="/menu">Explore Menu</Link>
                </div>
            </div>
        </div>
    )
}
export default Homebg