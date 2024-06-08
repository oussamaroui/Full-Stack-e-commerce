import React from 'react';
import './navbar.css';
import { NavLink } from 'react-router-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMagnifyingGlass, faUser, faCartShopping, faHome, faShoppingBag, faInfoCircle, faEnvelope, faShoppingCart } from '@fortawesome/free-solid-svg-icons';
import { useNavigate } from 'react-router-dom';
import { useSelector } from 'react-redux';

function Navbar() {
    const cartitem = useSelector((store) => store.cart);
    const navigate = useNavigate();

    function logoClick() {
        navigate('/');
    }

    return (
        <div className="navbar_outer">
            {/* Uncomment and use this if you have a logo */}
            {/* <div className='logodiv'>
                <img src={logo} alt="Not found" onClick={logoClick} className="logo"/>
            </div> */}
            <div className='navbar_name'>
                <span className="navbar_name">Nouraya</span>
            </div>
            <div className='navList'>
                <ul>
                    <li>
                        <NavLink to='/'>
                            <FontAwesomeIcon icon={faHome} className="nav_icon" /> Home
                        </NavLink>
                    </li>
                    <li>
                        <NavLink to='/shop'>
                            <FontAwesomeIcon icon={faShoppingBag} className="nav_icon" /> Shop
                        </NavLink>
                    </li>
                    <li>
                        <NavLink to='/basket'>
                            <FontAwesomeIcon icon={faShoppingCart} className="nav_icon" /> Panier
                        </NavLink>
                    </li>
                    <li className="res_m">
                        <NavLink to='/about'>
                            <FontAwesomeIcon icon={faInfoCircle} className="nav_icon" /> About
                        </NavLink>
                    </li>
                    {/* <li className="res_m">
                        <NavLink to='/contact'>
                            <FontAwesomeIcon icon={faEnvelope} className="nav_icon" /> Contact
                        </NavLink>
                    </li> */}
                </ul>
            </div>
            <div className='navbar_icons'>
                <NavLink to='/search' className="res_m">
                    <FontAwesomeIcon icon={faMagnifyingGlass} className="cart_logo" />
                </NavLink>
                <NavLink to='/profile'>
                    <FontAwesomeIcon icon={faUser} className="cart_logo" />
                </NavLink>
                <NavLink to='/cart' className="res_m">
                    <div className='cartLogo_div'>
                        <FontAwesomeIcon icon={faCartShopping} className="cart_logo" />
                        {cartitem.length > 0 && <p className='cartQuant'>{cartitem.length}</p>}
                    </div>
                </NavLink>
            </div>
        </div>
    );
}

export default Navbar;
