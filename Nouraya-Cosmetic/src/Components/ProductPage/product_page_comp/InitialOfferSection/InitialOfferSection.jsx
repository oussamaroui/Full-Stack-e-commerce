import React, { useEffect, useState } from 'react';
import '../../shop.css';
import { Swiper, SwiperSlide } from "swiper/react";
import './produit.css';
import "swiper/css";
import "swiper/css/navigation";
import { Navigation } from "swiper";
import img1 from '../../sliderImg/slider1.avif';
import img2 from '../../sliderImg/slider2.avif';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faAngleRight, faShoppingCart } from '@fortawesome/free-solid-svg-icons';
import axios from 'axios';

function InitialOfferSection() {
  const [cart, setCart] = useState([]);
  const [products, setProducts] = useState([]);

  useEffect(() => {
    axios.get('http://localhost:8000/api/products')
      .then(response => {
        setProducts(response.data);
      })
      .catch(error => {
        console.error('Error fetching products:', error);
      });
  }, []);

  const addToCart = (product) => {
    axios.post('http://localhost:8000/api/baskets', {
      image: product.image,
      name: product.name,
      price: product.price
    })
      .then(response => {
        console.log(response.data.message);
        setCart([...cart, product]);
      })
      .catch(error => {
        console.error('Error adding to basket:', error);
      });
  };

  return (
    <>
      <div className="shop_outer">
        <p className='location'>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Shop <FontAwesomeIcon icon={faAngleRight} /></b>&nbsp; All Products
        </p>

        <div className="slider_Section_shop">
          <Swiper navigation={true} modules={[Navigation]} className="mySwiper">
            <SwiperSlide><img src={img2} alt="Not Found" /></SwiperSlide>
            <SwiperSlide><img src={img1} alt="Not Found" /></SwiperSlide>
          </Swiper>
        </div>

        <div className="shop_heading">
          <h1>Explore Our All Products</h1>
          <p>Our products play a key role during early life. From supporting healthy growth and development to providing the medical nutrition necessary when health is.</p>
        </div>

        <div className="products_grid">
          {products.map((product) => (
            <div key={product.id} className="product_card">
              <img
                src={`http://localhost:8000/storage/${product.image}`}
                alt={product.name}
                className="product_image"
              />
              <h2 className="product_name">{product.name}</h2>
              <p className="product_price">{product.price} MAD</p>
              <button className="add_to_cart_button" onClick={() => addToCart(product)}>
                <FontAwesomeIcon icon={faShoppingCart} /> Add to Cart
              </button>
            </div>
          ))}
        </div>
      </div>
    </>
  );
}

export default InitialOfferSection;
