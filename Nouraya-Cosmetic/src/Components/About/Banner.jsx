import React from 'react';
import banner from './img/banner.png';
import { motion as m } from 'framer-motion';

function Banner() {
    return (
        <>
            <div className="banner_outer">
                <m.div
                    initial={{ x: "-100%" }}
                    animate={{ x: "0%" }}
                    transition={{ duration: 0.55, ease: "easeOut" }}
                    exit={{ opacity: 1 }}
                >
                    <img src={banner} alt="Not found" />
                </m.div>

                <m.div
                    className='second_div_about'
                    initial={{ x: "100%" }}
                    animate={{ x: "0%" }}
                    transition={{ duration: 0.55, ease: "easeOut" }}
                    exit={{ opacity: 1 }}
                >
                    <div><h2>About Us</h2></div>
                    <p><q className='testingQuote'>Nouraya is a one-stop shop for all your fashion and lifestyle needs. As Morocco's largest e-commerce store for fashion and lifestyle products, Nouraya aims to provide a hassle-free and enjoyable shopping experience to shoppers across the country with the widest range of brands and products on its portal. The brand is making a conscious effort to bring the power of fashion to shoppers with an array of the latest and trendiest products available in the country.</q></p>
                </m.div>
            </div>

            <div className="welcomeSection">
                <h2>Welcome to Nouraya.</h2>
                <p>We don't take ourselves too seriously, but we're serious about the right thing. 
                That's why so many shoppers have fallen in love with us.</p>
            </div>

            <div className="aboutMesection">
                <div>
                    <img src="makeup.jpg" alt="Not found" />
                </div>
                <div>
                    <h3>Our story.</h3> <br />
                    <p>Several years ago in a coffee shop, two friends had a drink and an idea: to create a unique e-commerce store for fashion and lifestyle products. Our mission was to bring a fresh perspective to the industry and make shopping enjoyable and accessible. So we founded Nouraya, and since then, we've been dedicated to providing the latest and trendiest products to shoppers across Morocco.
                    That simple, that good.</p>
                </div>
            </div>
        </>
    );
}

export default Banner;
