import React from 'react';
import {Routes , Route , Navigate} from 'react-router-dom';
import LandingPage from '../Components/LandingPage/LandingPage';
import ProductPage from '../Components/ProductPage/ProductPage';
import About from '../Components/About/About';
import ProductDescription from '../Components/ProductDescription/ProductDescription';
import { useSelector } from 'react-redux';
import Basket from '../Components/ProductPage/product_page_comp/InitialOfferSection/Basket';

function AllRoutes() {

    const cartLen = useSelector((store) => store.cart.length);

    console.log(cartLen);



    return (
        <>


                    <Routes>
                        <Route path='/' element={<LandingPage />} />
                        <Route path='/shop' element={<ProductPage />} />
                        <Route path='/basket' element={<Basket />} />
                        <Route path='/about' element={<About />} />
                        <Route path='/details/:id' element={<ProductDescription />} />
                    </Routes>  
        </>
    );
}

export default AllRoutes;