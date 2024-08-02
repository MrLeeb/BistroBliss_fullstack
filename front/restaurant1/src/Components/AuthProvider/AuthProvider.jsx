import { Navigate} from "react-router-dom";
import React from 'react'


export const AuthProvider =({children})=> {
    const t= localStorage.getItem('token')
    if(!t){
    return <Navigate to="/login" />
    }
    return <>{children}</>
  }
  
  