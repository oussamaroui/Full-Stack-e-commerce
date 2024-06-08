import React from 'react';
import Navbar from '../LandingPage/TopSection/Navbar/Navbar';
import InitialOfferSection from './product_page_comp/InitialOfferSection/InitialOfferSection';
import {motion as m } from 'framer-motion';
import ShoppingOfferSection  from './product_page_comp/InitialOfferSection/ShoppingOfferSection';
import {Footer} from '../Footer/footer';
import OfferBanner from './product_page_comp/OfferBanner';
import PopularCategorySection from './product_page_comp/PopularCategorySection';
function ProductPage() {
    return (
        <>

    

    <m.div initial={{opacity:0}}
            animate={{opacity:1}}
            exit={{opacity:1}}
            
            >
            <Navbar />

            <InitialOfferSection />


            <OfferBanner />


<PopularCategorySection />
                <ShoppingOfferSection />


                <Footer />
            
    </m.div>
                        

            </>
    );
}

export default ProductPage;