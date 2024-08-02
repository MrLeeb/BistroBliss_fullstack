import axios from 'axios'
import React, { useEffect, useState } from 'react'
import './Bookings.css'

const MyBookings = () => {
  const token = localStorage.getItem('token')
  axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
    const [bookings,setBookings]= useState([])
    
    useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/bookings').then( (res)=>setBookings(res.data.bookings))
    .catch((err)=> console.log(err))
    },[])
        // console.log(bookings)
  return (
    <div className='bookings'>
      <h1 className='bgtext1'>Bookings History:</h1>
    <div className='bookscontainer'>
       <div className='btitle'>
<h2 className='bfield'>Name</h2>
<h2 className='bfield'>Phone</h2>
<h2 className='bfield'>Date</h2>
<h2 className='bfield'>Time</h2>
<h2 className='bfield'>Persons</h2>
<h2 className='bfield'>Status</h2>
    </div>
        {bookings?.map((b)=>(
    <div className='booking'>
<h2 className='bfield'>{b.name}</h2>
<h2 className='bfield'>{b.phone}</h2>
<h2 className='bfield'>{b.date}</h2>
<h2 className='bfield'>{b.time}</h2>
<h2 className='bfield'>{b.persons}</h2>
<h2 className='bfield bstat'  style={{
        backgroundColor: b.status === 'PENDING' ? 'blue' : 
                          b.status === 'ACCEPTED' ? 'green' :  
                          b.status === 'REJECTED' ? 'red' :
                          'defaultColor'
      }}>{b.status}</h2>
    </div>
        ))}
    </div>
    </div>
  )
}
async function bgcolor () {
const bstats = await document.getElementsByClassName('bstat');
if (bstats) console.log(bstats[0].value)
}

export default MyBookings