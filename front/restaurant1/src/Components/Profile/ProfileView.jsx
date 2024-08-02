import axios from 'axios';
import React, { useEffect, useState } from 'react'
import './ProfileView.css'
import { Link, NavLink } from 'react-router-dom';

const ProfileView = () => {
  const [user,setUser]=useState();
  const token = localStorage.getItem('token');
  axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
  useEffect(()=>{
    axios.get('http://127.0.0.1:8000/api/user').then((res)=> setUser(res.data))
    .catch(err => console.log(err));
  },[])
  console.log(user)
  return (
    <div>
<h1 className='booktitle'>My Profile</h1>
      <p className='booktext'>We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
      
<div className='profilev'>
  <div className='profdata'>
      <label>Username:</label>
      <p>{user?.name}</p>
</div>
      <div className='profdata'>
      <label>Email:</label>
      <p>{user?.email}</p>
</div>
</div>
<NavLink to={'/Editprofile'} className='bookt profeditb'>Edit</NavLink>
    </div>
  )
}

export default ProfileView