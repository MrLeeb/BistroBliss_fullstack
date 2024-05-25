import React from 'react'
import './Information.css'
import img1 from '../../../Images/pexels-cottonbro-studio-4252139 1.png'


export const Information = () => {
    return (
        <div style={{ marginTop: "200px" }} className='Info'>
            <div className='Infotext'>
                <h1>A little information for our valuable guest</h1>
                <p>At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, strives to make every visit an unforgettable event.</p>
                <div className='Infocontainer1'>

                    <div className='Infostat'>
                        <h1>3</h1>
                        <p>Locations</p>
                    </div>
                    <div className='Infostat'>
                        <h1>1995</h1>
                        <p>Founded</p>
                    </div>

</div>
                    <div className='Infocontainer2'>

                        <div className='Infostat'>
                            <h1>65+</h1>
                            <p>Staff Members</p>
                        </div>
                        <div className='Infostat'>
                            <h1>100%</h1>
                            <p>Satisfied Customers</p>
                        </div>

                    </div>


                

            </div>

            <img src={img1} alt=''></img>

        </div>
    )
}
