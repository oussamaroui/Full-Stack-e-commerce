import React from 'react';
import './brandSection.css';
function BrandSection() {
    return (
        <>
            <div className="brandSection">
                <h2> Our Brand</h2>


                <div className='brandCategory_outer'>

                    <div>
                        <div>
                          <img src="huda.png" alt="" />
                        </div>
                        <h3>Huda beauty</h3>

                    </div>




                    <div>
                    <div>
                      <img src="mayb.png" alt="" />
                        </div>
                        <h3>MAYBELLINE</h3>
                    </div>




                    <div>




                    
                    <div>
                      <img src="ess.png" alt="" />
                        </div>
                        <h3>Essence</h3>
                    </div> 


                    
                    <div className='tab_res'>

                    
                    <div>
                      <img src="sheglam.png" alt="" />
                        </div>
                        <h3>Sheglam</h3>
                    
                    </div>
                    
                </div>
            </div>
        </>
    );
}

export default BrandSection;