import React, { useEffect, useState } from 'react'
import './Login.css'
import axios from 'axios'
import { useDispatch } from 'react-redux';
import { Link, useNavigate } from 'react-router-dom';
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

  axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;
  await axios.get('http://127.0.0.1:8000/sanctum/csrf-cookie').then(
     axios.post('http://127.0.0.1:8000/login', {email,password})
     .then(response => {
      console.log(response)
  })
  )
  // console.log(head)
  
  // axios.defaults.headers.common['Authorization'] = 'Bearer ' + head;
  //  const response= await axios.post('http://127.0.0.1:8000/api/log', {email,password})
   
  //    if(response.status === 200) {
  //   const token = response.data.token;
  //  await console.log(token)
  //   // localStorage.setItem('token', token);
  //   // document.cookie = "token=" + token;
  //   // axios.defaults.headers.common['X-XSRF-TOKEN'] = token;
  //   axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
  //   const response1= await axios.post('http://127.0.0.1:8000/api/log1', {email,password})
  //   console.log(response1) 
  //  //  window.location.href = 'http://127.0.0.1:8000/dashboard';
  // }
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

        <form onSubmit={handlesubmit}>
<label>Email</label>
<input type='text' name='email' value={email} onChange={(e)=>setEmail(e.target.value)}></input>
<label>Password</label>
<input type='password' name='password' value={password} onChange={(e)=>setPass(e.target.value)}></input>
<input 
type='submit' 
></input>
        </form>

<Link to={"http://127.0.0.1:8000/testlog"}>Log2</Link>

    </div>
  )
  }