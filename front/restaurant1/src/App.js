import logo from './logo.svg';
import './App.css';
import { Route, Routes } from 'react-router-dom';
import { Home } from './Routes/Home';
import { Book } from './Routes/Book';
import { Contact } from './Routes/Contact';
import { Menu } from './Routes/Menu';
import { Profile } from './Routes/Profile';
import { About } from './Routes/About';
import { SingleItem } from './Components/Menu/Menu/SingleItem';
import { AuthProvider } from './Components/AuthProvider/AuthProvider';
import { Login } from './Routes/Login';
import {Bookings} from './Routes/Bookings';
import { SignUp } from './Routes/Reg';
import { Pages } from './Routes/Pages';
import SingleBlog from './Components/Pages/SingleBlog & Others/SingleBlog';
import Blog from './Routes/Blog';
import { ProfileEdit } from './Routes/ProfileEdit';



function App() {
  return (
    <div className="App">

  <Routes>
    <Route path='/' element={<Home/>}/>
    <Route path='/home' element={<Home/>}/> 
    <Route path='/book' element={
      <AuthProvider>
    <Book/>
    </AuthProvider>
    }/>
    <Route path='/bookings' element={<Bookings/>}/>
    <Route path='/menu' element={<Menu/>}/>
    <Route path='/menu/:name' element={<SingleItem/>}/>
    <Route path='/profile' element={<Profile/>}/>
    <Route path='/about' element={<About/>}/>
    <Route path='/login' element={<Login/>}/>
    <Route path='/signup' element={<SignUp/>}/>
    <Route path='/blogs' element={<Pages/>}/> 
    <Route path='/blogs/:name' element={<Blog/>}/>
    <Route path='/contactus' element={<Contact/>}/>
    <Route path='/profile' element={<Profile/>}/>
    <Route path='/Editprofile' element={<ProfileEdit/>}/>
  </Routes>

  
    </div>
  );
}

export default App;
