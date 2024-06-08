import React from 'react';
import TopSection from "./TopSection/TopSection";
import { motion as m } from 'framer-motion';
import Maximise from "./MiddleSection/Maximise";
import LimitedTimeDeal from "./MiddleSection/LimitedTimeDeal";
import BrandSection from "./MiddleSection/BrandSection";
import b2 from './Images/bottom-2.webp';
import b3 from './Images/bottom-3.webp';

import bfi1 from './Images/buttfrominsta/bfi1.webp';
import bfi2 from './Images/buttfrominsta/bfi2.webp';
import bfi3 from './Images/buttfrominsta/bfi3.webp';
import bfi4 from './Images/buttfrominsta/bfi4.webp';
import bannerI1 from './Images/bannerI1.webp';
import { Footer } from "../Footer/footer";

import './LandingPage.css'; 

function LandingPage() {
    return (
        <>
            <m.div 
                initial={{ opacity: 0 }}
                animate={{ opacity: 1 }}
                transition={{ duration: 0.35, ease: "easeOut" }}
                exit={{ opacity: 1 }}
            >
                <TopSection />
                <Maximise />
                <LimitedTimeDeal />
                <BrandSection />

                <div id="dreamBanner">
                    <h2>You've been in my dreams, babe...</h2>
                    <p>Time for me to get into yours</p>
                    <button className="dreamBannerBtn">
                        <a href="/shop" className="aya">Shop now at Nouraya Cosmetics</a>
                    </button>
                </div>
                
                <div id="buttFromInstagram">
                    <div className="buttFromInstagramImagContainer">
                        <div className="alignBFI">
                            <img src={bfi1} className="bFICRound" alt="Instagram Image 1" />
                        </div>
                        <div className="alignBFI">
                            <img src={bfi2} className="bFICRound" alt="Instagram Image 2" />
                        </div>
                        <div className="alignBFI">
                            <img src={bfi3} className="bFICRound" alt="Instagram Image 3" />
                        </div>
                        <div className="alignBFI">
                            <img src={bfi4} className="bFICRound" alt="Instagram Image 4" />
                        </div>
                    </div>
                </div>
                
                <div id="bannerShowCase">
                    <a href="" className="bannerI1Link">
                        <img src={bannerI1} className="fullsizeB" alt="Banner" />
                        <div className="ImageOverText">
                        <h2>Nouraya's <br /> cosmetics<br /> by 2024</h2>
                            {/* <button>Read More</button> */}
                        </div>
                    </a>
                </div>
                
                <div id="bottom_features">
                    <div className="bottom_features_container">
                        <img src={b2} className="bf_img" alt="Feature 2" />
                        <img src={b3} className="bf_img" alt="Feature 3" />
                    </div>
                </div>
                
                <Footer />
            </m.div>
        </>
    );
}

export default LandingPage;
