import axios from 'axios';
import React, { useEffect, useState } from 'react'
import './EditProfile.css'
import { Link, NavLink } from 'react-router-dom';

const EditProfile = () => {
  const [user, setUser] = useState();
  const [username, setUsername] = useState()
  const [email, setEmail] = useState()
  const token = localStorage.getItem('token');
  axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/user').then((res) => { setUser(res.data); setUsername(res.data.name); setEmail(res.data.email) })
      .catch(err => console.log(err));
  }, [])

  const handlesubmit= async (event)=>{
    event.preventDefault();
    const token = localStorage.getItem('token');
    try {
       const response= await axios.post('http://127.0.0.1:8000/api/editprofile', {email,username,token})
       console.log(response)
         if(response.status === 200) {
       
      }
      }
      catch (e){
        console.log(e)
      }
    }


  return (
    <div>
      <div className='message'></div>
      <h1 className='booktitle'>Edit Profile</h1>
      <p className='booktext'>We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
      {/* <div className='profilev'> */}
        <form className='bookform contactform profeditform' onSubmit={handlesubmit}>

          <div className='profdata'>
            <label>Username:</label>
            <input type='text' className='field1' value={username} onChange={(e) => setUsername(e.target.value)}></input>
          </div>
          <div className='profdata'>
            <label>Email:</label>
            <input type='text' className='field1' value={email} onChange={(e) => setEmail(e.target.value)}></input>
          </div>
      
      <input type='submit' className='booksubmit fullrow' value={'Edit'} ></input>
    </form>
</div>
    // </div >
  )
}

export default EditProfile