import React, { useState, useEffect } from 'react';
import axios from 'axios';
import '../../shop.css';
import Navbar from '../../../LandingPage/TopSection/Navbar/Navbar';

const Basket = () => {
    const [products, setProducts] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        const fetchBasketProducts = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/baskets');
                setProducts(response.data);
            } catch (err) {
                setError(err.message);
            } finally {
                setLoading(false);
            }
        };

        fetchBasketProducts();
    }, []);

    const removeProduct = async (productId) => {
        try {
            await axios.delete(`http://localhost:8000/api/baskets/${productId}`);
            // After successful deletion, update the products state to remove the deleted product
            setProducts(products.filter(product => product.id !== productId));
        } catch (err) {
            console.error('Error removing product:', err);
        }
    };

    if (loading) {
        return <p className="loading">Loading...</p>;
    }

    if (error) {
        return <p className="error">Error: {error}</p>;
    }

    return (
        <>
            <Navbar />

            <div className="basket-container" style={{ paddingTop: '100px' }}>
                <h1 className="basket-title">Panier</h1>
                {products.length === 0 ? (
                    <p className="empty">Your basket is empty.</p>
                ) : (
                    <ul className="basket-list">
                        {products.map((product, index) => (
                            <li key={index} className="basket-item">
                                <img src={`http://localhost:8000/storage/${product.image}`} alt={product.name} />
                                <div className="basket-item-content">
                                    <span className="basket-item-name">{product.name}</span>
                                    <span className="basket-item-price">${product.price}</span>
                                    <button onClick={() => removeProduct(product.id)} className="remove-button">Supprimer</button>
                                </div>
                            </li>
                        ))}
                    </ul>
                )}
            </div>
        </>
    );
};

export default Basket;
