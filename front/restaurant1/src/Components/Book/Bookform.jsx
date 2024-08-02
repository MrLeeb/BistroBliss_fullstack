import axios from 'axios'
import React, { useEffect, useState } from 'react'
import './Bookform.css'
import img1 from '../../Images/Mapbg.png'
import { useNavigate } from 'react-router-dom'
export const Bookform = () => {
  
  const [date,setDate]=useState();
  const [time,setTime]=useState();
  const [name,setName]=useState('');
  const [phone,setPhone]=useState();
  const [persons,setPersons]=useState();
  // const [post,setPost]=useState({});
  // const handleinput =(event) =>{
    // setPost({...post, [event.target.name]: event.target.value})
  // }
  const handlesubmit = async (event) =>{
    const token = localStorage.getItem('token');
    console.log(token)
    axios.defaults.headers.common = {
      'X-Requested-With': 'XMLHttpRequest',
      'X-CSRF-TOKEN': window.csrf_token
    }
     axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
    // console.log(post);
event.preventDefault()

const persons1= persons.charAt(0);
console.log(persons1)
// await axios.get("/sanctum/csrf-cookie").then((response)=>{
  // console.log("sanct:")
  // console.log(response)
// axios.post('https://fakestoreapi.com/products', {post})
console.log(date);
try {

  
// const test= await axios.get('http://127.0.0.1:8000/api/user')
// console.log(test)
const vari= await axios.post('http://127.0.0.1:8000/api/book', {date,time,name,phone,persons1,token})
console.log(vari);

}
catch (e){
  console.log(e)
}
  
  // }
  // )


}
  // axios.postForm
  return (
    <div className='bookcont'>
      <meta name="csrf-token" content="{{ csrf_token() }}"></meta>
      <h1 className='booktitle'>Book A Table</h1>
      {/* <div className='booktext1'> */}
      <p className='booktext'>We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
      {/* </div> */}
      {/* <div className='bookcontainer'> */}
        <form  onSubmit={handlesubmit} className='bookform'>

{/* <div className='inprow'> */}
<div className='inp'>
<label>Date</label>
{/* <input type='date' value={date} onChange={e => setDate(e.target.value)}></input> */}
<input type='date' value={date} onChange={e => setDate(e.target.value)} className='field1'></input>
</div>
<div className='inp'>
<label>Time</label>
<select value={time} onChange={e => setTime(e.target.value)} className='field1 sel'>
 <option>02:00 PM</option>
 <option>03:30 PM</option>
 <option>05:00 PM</option>
 <option>06:30 PM</option>
 <option>07:00 PM</option>
 <option>08:30 PM</option>
 <option>10:00 PM</option>
  </select>
  </div>
  {/* </div> */}

  {/* <div className='inprow'> */}
  <div className='inp'>
  <label>Name</label>
<input type='text' value={name} onChange={e => setName(e.target.value)} className='field1' placeholder=' Enter Your Name'></input>
</div>
<div className='inp'>
  <label>Phone</label>
<input type='number' value={phone} onChange={e => setPhone(e.target.value)} className='field1' placeholder=' x-xxx-xxx-xxxx'></input>
</div>
{/* </div> */}
<div className='inp fullrow'>
<label>Total Persons</label>
<select onChange={e => {setPersons(e.target.value); console.log(persons)}} value={persons} className='field2'>
 <option>1 Person</option>
 <option>2 Persons</option>
 <option>3 Persons</option>
 <option>4 Persons</option>
  </select>
  </div>
<input type='submit' value="Book A Table" className='booksubmit fullrow'></input>
        </form>
        <img src={img1} width={1510} className='bookimg'></img>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>


</div>
    // </div>

)
  }
