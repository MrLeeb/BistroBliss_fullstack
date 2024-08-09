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
import { AuthNotLogged} from './Components/AuthProvider/AuthNotLogged';
import { Login } from './Routes/Login';
import {Bookings} from './Routes/Bookings';
import { SignUp } from './Routes/Reg';
import { Pages } from './Routes/Pages';
import SingleBlog from './Components/Pages/SingleBlog & Others/SingleBlog';
import Blog from './Routes/Blog';
import { ProfileEdit } from './Routes/ProfileEdit';
import { AuthLogged } from './Components/AuthProvider/AuthLogged';
import { SingleMenu } from './Routes/SingleCategory';



function App() {
  return (
    <div className="App">

  <Routes>
    <Route path='/' element={<Home/>}/>
    <Route path='/home' element={<Home/>}/> 
    <Route path='/book' element={
      <AuthNotLogged>
    <Book/>
    </AuthNotLogged>
    }/>
    <Route path='/bookings' element={<AuthNotLogged>
    <Bookings/>
    </AuthNotLogged>}/>
    <Route path='/menu' element={<Menu/>}/>
    <Route path='/menu/:name' element={<SingleMenu/>}/>
    <Route path='/about' element={<About/>}/>
    <Route path='/login' element={<AuthLogged>
    <Login/>
    </AuthLogged>}/>
    <Route path='/signup' element={<AuthLogged>
    <SignUp/>
    </AuthLogged>}/>
    <Route path='/blogs' element={<Pages/>}/> 
    <Route path='/blogs/:name' element={<Blog/>}/>
    <Route path='/contactus' element={<Contact/>}/>
    <Route path='/profile' element={<AuthNotLogged>
    <Profile/>
    </AuthNotLogged>}/>
    <Route path='/Editprofile' element={<AuthNotLogged>
    <ProfileEdit/>
    </AuthNotLogged>}/>
  </Routes>

  
    </div>
  );
}

export default App;
