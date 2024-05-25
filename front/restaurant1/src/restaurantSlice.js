import { createSlice } from "@reduxjs/toolkit";

const initialState = {
isLogged:false,
user:'',
}
export const restaurantSlice =createSlice({
    name:'restaurant',
    initialState,
    reducers:{
        login :(state,action)=>{
// state.user=action.payload
// state.isLogged=true
console.log("user should have logged")
console.log(action.payload)
        }
    }
})