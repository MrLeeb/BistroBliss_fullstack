import React from 'react'
import Nav from '../Navbar/Nav'
import Navout from '../Navbar/Navout'
import axios from 'axios';

const NavPar = () => {
    const token = localStorage.getItem('token');
    if(token){
        // if(validateToken(token)){
        return(
<Nav></Nav>
        )
    }
    return (
        <Navout></Navout>
  )

}
    
      

async function validateToken(token) {
    try {
      await axios.post('/validate-token', {token});  
      return true;
    } catch {
      return false;
    }
   }

export default NavPar