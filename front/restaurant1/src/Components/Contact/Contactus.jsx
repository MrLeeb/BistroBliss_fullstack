import React, { useState } from 'react'
import './Contactus.css'

const Contactus = () => {
const [name,setName]= useState()
const [email,setEmail]= useState()
const [subject,setSubject]= useState()
const [message,setMessage]= useState()

  return (
    <div>
         <h1 className='booktitle'>Contact Us</h1>
      <p className='booktext'>We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
      
        <form  
        // onSubmit={handlesubmit} 
        className='bookform contactform'>

<div className='inp'>
<h5>Name</h5>
{/* <input type='date' value={date} onChange={e => setDate(e.target.value)}></input> */}
<input type='text' value={name} onChange={e => setName(e.target.value)} className='field1' placeholder=' Enter your name'></input>
</div>
<div className='inp'>
<h5>Email</h5>
<input type='text' value={email} onChange={e => setEmail(e.target.value)} className='field1' placeholder='Enter email address'></input>
  </div>
  <div className='inp fullrow'>
  <h5>Subject</h5>
<input type='text' value={subject} onChange={e => setSubject(e.target.value)} className='field2 contsubj' placeholder=' Write a Subject'></input>
</div>
<div className='inp fullrow '>
  <h5>Message</h5>
<textarea value={message} onChange={e => setMessage(e.target.value)} className='field2 contsubj contmess' placeholder='Write your message'></textarea>
</div>

<input type='submit' value="Send" className='booksubmit fullrow'></input>
        </form>
       
        <div className='contactcont'>
            <div className='contactitem'>
                <h3></h3>
                <label>Call Us:</label>
                <h3>+1-234-567-8900</h3>
            </div>
            <div className='contactitem'>
                <h3></h3>
                <label>Hours:</label>
                <p>Mon-Fri: 11am - 8pm Sat, Sun: 9am - 10pm</p>
            </div>
            <div className='contactitem'>
                <h3></h3>
                <label>Our Location:</label>
                <p>123 Bridge Street             Nowhere Land, LA 12345 United States</p>
            </div>
        </div>
    </div>
  )
}

export default Contactus