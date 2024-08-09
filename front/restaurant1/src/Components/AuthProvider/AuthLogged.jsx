import { Navigate} from "react-router-dom";
import React from 'react'


export const AuthLogged =({children})=> {
    const t= localStorage.getItem('token')
    if(t){
    return <Navigate to="/" />
    }
    return <>{children}</>
  }
  
  