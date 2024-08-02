import React, { useEffect, useState } from 'react'
import './Register.css'
import axios from 'axios'
import { useDispatch } from 'react-redux';
import { Link, Navigate, useNavigate } from 'react-router-dom';
// import { restaurantSlice } from '../../../restaurantSlice';

export const Reg = () => {
axios.defaults.headers.common = {
  'X-Requested-With': 'XMLHttpRequest',
  'X-CSRF-TOKEN': window.csrf_token
};
  const [email,setEmail]=useState();
  const [username,setUsername]=useState();
  const [password,setPass]=useState();
  const [passc,setPassc]=useState();



const dispatch = useDispatch()
const navigate = useNavigate();
const handlesubmit= async (event)=>{
event.preventDefault();
try {

//   axios.defaults.withCredentials = true;
// axios.defaults.withXSRFToken = true;
//   await axios.get('http://127.0.0.1:8000/sanctum/csrf-cookie').then(
//      axios.post('http://127.0.0.1:8000/login', {email,password})
//      .then(response => {
//       console.log(response)
//   })
//   )
  // console.log(head)
  
  // axios.defaults.headers.common['Authorization'] = 'Bearer ' + head;
  if(password!=passc){
const msgs=document.getElementsByClassName("passerrms")
const conflag=document.getElementsByClassName("conflag")[0]

msgs[0].style.display="block"  
conflag.style.display="none"  
}
  else{
    const msgs=document.getElementsByClassName("passerrms")
msgs[0].style.display="none"  

   const response= await axios.post('http://127.0.0.1:8000/api/reg', {email,username,password})
   console.log(response)
     if(response.status === 200) {
      const login= await axios.post('http://127.0.0.1:8000/api/log', {email,password})
   
      if(login.status === 200) {
     const token = response.data.token;
     localStorage.setItem('token', token);

     axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

    navigate('/')
   }

  }
  
  
 
  // console.log(response);

  
  }
}
  catch (e){
    console.log(e)
  }
}
  return (
    <div>
            {/* <meta name="csrf-token" content="{{ csrf_token() }}"></meta> */}
<h1 className='booktitle'>Sign Up</h1>
        <form onSubmit={handlesubmit} className='logform regform'>
        <div className='laberr'>
<label>Email</label>
<p className='emerrms errms'>Passwords do not match.</p>
<p className='emflag flg'></p>
</div>
<input type='text' name='email' value={email} onChange={(e)=>setEmail(e.target.value)} className='logfield'></input>
<div className='laberr'>
<label>Username</label>
<p className='usrerrms errms'>Passwords do not match.</p>
<p className='usrflag flg'></p>
</div>
<input type='text' name='username' value={username} onChange={(e)=>setUsername(e.target.value)} className='logfield'></input>
{/* <div className='passerr'> */}
<div className='laberr'>
<label>Password</label>
<p className='pass1errms errms'>Passwords do not match.</p>
<p className='passflag flg'></p>
</div>
{/* <p className='passerrms'>passwords do not match</p> */}
{/* </div> */}
<input type='password' name='password' value={password} onChange={(e)=>setPass(e.target.value)}  className='logfield'></input>
<div className='laberr'>
<label>Confirm Password</label>
<p className='errms passerrms'>Passwords do not match.</p>
<p className='conflag flg'></p>
</div>
<input type='password' name='password' value={passc} onChange={(e)=>setPassc(e.target.value)}  className='logfield conf'></input>
<input type='submit' className='booksubmit'></input>
        </form>
{/* <div className="logab"> */}
<div className='anan'>
  <p className='alrm'>Already have an account?</p>
  <Link to={"/login"} className='logab1 reglog'> Sign in </Link>
  </div>
  {/* </div> */}


    </div>
  )
  }