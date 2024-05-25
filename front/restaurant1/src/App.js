import logo from './logo.svg';
import './App.css';
import { Route, Routes } from 'react-router-dom';
import { Home } from './Routes/Home';
import { Book } from './Routes/Book';
import { ContactUs } from './Routes/ContactUs';
import { Menu } from './Routes/Menu';
import { Profile } from './Routes/Profile';
import { About } from './Routes/About';
import { SingleItem } from './Components/Menu/Menu/SingleItem';
import { Login } from './Routes/Login';

function App() {
  return (
    <div className="App">

  <Routes>
    <Route path='/' element={<Home/>}/>
    <Route path='/home' element={<Home/>}/> 
     <Route path='/book' element={<Book/>}/>
    <Route path='/contactus' element={<ContactUs/>}/>
    <Route path='/menu' element={<Menu/>}/>
    <Route path='/menu/:name' element={<SingleItem/>}/>
    <Route path='/profile' element={<Profile/>}/>
    <Route path='/about' element={<About/>}/>
    <Route path='/login' element={<Login/>}/>

  </Routes>

    
  
    </div>
  );
}

export default App;
