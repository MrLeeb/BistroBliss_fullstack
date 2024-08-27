import React, { useEffect, useState } from 'react'
import './Login.css'
import axios from 'axios'
import { useDispatch } from 'react-redux';
import { Link, Navigate, useNavigate } from 'react-router-dom';
import { restaurantSlice } from '../../../restaurantSlice';


export const Log = () => {
axios.defaults.headers.common = {
  'X-Requested-With': 'XMLHttpRequest',
  'X-CSRF-TOKEN': window.csrf_token
};
  const [email,setEmail]=useState();
  const [password,setPass]=useState();
  const [head,setHead]=useState();


  // useEffect(()=>{
  //   axios.get('http://127.0.0.1:8000/api/users')
  // .then(
  //   (res) => setUsers(res.data.users)
  //   ).catch((e)=>console.log(e))
    
  // },[])
const dispatch = useDispatch()
const navigate = useNavigate();
const handlesubmit= async (event)=>{
event.preventDefault();
try {

   const response= await axios.post('http://127.0.0.1:8000/api/log', {email,password})
  
     if(response.status === 200) {
    const token = response.data.token;
   await console.log(token)
    localStorage.setItem('token', token);
    // document.cookie = "token=" + token;
    // axios.defaults.headers.common['X-XSRF-TOKEN'] = token;
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
    // const response1= await axios.post('http://127.0.0.1:8000/api/log1', {email,password})
  //  return <Navigate to='/home' />
   navigate('/')
  }
  // document.cookie = "token=" + token;
  
  
  
 
  // console.log(response);

  
  }
  catch (e){
    console.log(e)
  }
}
  return (
    <div>
            {/* <meta name="csrf-token" content="{{ csrf_token() }}"></meta> */}
<h1 className='booktitle'>Login As Guest</h1>
        <form onSubmit={handlesubmit} className='logform'>
<label>Email</label>
<input type='text' name='email' value={email} onChange={(e)=>setEmail(e.target.value)} className='logfield'></input>
<label>Password</label>
<input type='password' name='password' value={password} onChange={(e)=>setPass(e.target.value)}  className='logfield'></input>
<input type='submit' className='booksubmit'></input>
        </form>
<div className="logab"><Link to={"http://127.0.0.1:8000/testlog"} className='logab1'>Login as Admin</Link></div>
    {/* <Image source={{}}></Image> */}

    </div>
  )

  }