import React, { useEffect, useState } from 'react'
import { Fragment } from 'react'
import { Link, NavLink } from 'react-router-dom'
import logo from '../../Images/Logo.png'
import './Nav.css'
import axios from 'axios'

const Nav = () => {
  const [name,setName]=useState();
  const token = localStorage.getItem('token');
  axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
  useEffect(()=>{
    axios.get('http://127.0.0.1:8000/api/user').then((res)=> setName(res.data.name))
    .catch(err => console.log(err));
  },[])
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
            <NavLink to={"/blogs"}>Pages</NavLink>
            <NavLink to={"/contactus"}>Contact</NavLink>
          </ul>
        </nav>
        
        <Link to={"/book"} className='bookt'>Book a Table</Link>
      <div className="profile">
      <NavLink to={"/profile"} className='profname'>{name}</NavLink>
      <Link to={"/bookings"} className='bookt'>My Bookings</Link>
      <button  className='bookt' onClick={signout}>Sign Out</button>
      </div>
      </header>

    </Fragment>
    </div>
  )
}
function signout(){
  localStorage.removeItem('token');
  // document.cookie.
window.location.reload()

}

async function getuser() {
  const token = localStorage.getItem('token');
  console.log(token)
  axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
  try {
     const response= await axios.get('http://127.0.0.1:8000/api/user');  
      console.log(response);
      console.log("we may have got user")
      return response.data.name
    } catch (e){
      console.log(e)
      console.log("we may not have got user")
    }
   }

export default Nav