import React from 'react'
import { Fragment } from 'react'
import { Link, NavLink } from 'react-router-dom'
import logo from '../../Images/Logo.png'
import './Nav.css'

const Nav = () => {
  return (
    <div>
      <Fragment>
      <header>
        <div className='logo'>
        <img src={logo} alt='' width={60} height={57}></img>
        <h2 className='logot'>Bistro Bliss</h2>
        </div>
        <nav>
          <ul className='navb'>
            <NavLink to={"/home"}>Home</NavLink>
            <NavLink to={"/about"}>About</NavLink>
            <NavLink to={"/menu"}>Menu</NavLink>
            <NavLink to={"/pages"}>Pages</NavLink>
            <NavLink to={"/contactus"}>Contact</NavLink>
          </ul>
        </nav>
        
        <Link to={"/login"} className='bookt'>Sign In</Link>
      
      </header>

    </Fragment>
    </div>
  )
}


export default Nav