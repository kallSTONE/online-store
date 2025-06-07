<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - E-Shop</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="nav-brand">
                <h1><a href="index.php">E-Shop</a></h1>
            </div>
            <nav class="nav-menu">
                <a href="index.php">Home</a>
                <a href="cart.php" class="active">Cart (<span id="cart-count">0</span>)</a>
                <a href="#" id="wishlist-link">Wishlist (<span id="wishlist-count">0</span>)</a>
                <?php if (isLoggedIn()): ?>
                    <?php if (isAdmin()): ?>
                        <a href="admin.php">Admin</a>
                    <?php endif; ?>
                    <a href="login.php?action=logout">Logout</a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                <?php endif; ?>
            </nav>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <h1>Shopping Cart</h1>
            
            <div class="cart-container">
                <div class="cart-items">
                    <div id="cart-content">
                        <div class="empty-cart">
                            <p>Your cart is empty</p>
                            <a href="index.php" class="btn btn-primary">Continue Shopping</a>
                        </div>
                    </div>
                </div>

                <div class="cart-sidebar">
                    <div class="cart-summary">
                        <h3>Order Summary</h3>
                        <div class="summary-row">
                            <span>Subtotal:</span>
                            <span id="subtotal">$0.00</span>
                        </div>
                        <div class="summary-row">
                            <span>Shipping:</span>
                            <span id="shipping">$0.00</span>
                        </div>
                        <div class="summary-row discount-section" style="display: none;">
                            <span>Discount:</span>
                            <span id="discount">-$0.00</span>
                        </div>
                        <div class="summary-row total">
                            <span>Total:</span>
                            <span id="total">$0.00</span>
                        </div>
                        
                        <div class="discount-code">
                            <input type="text" id="discount-input" placeholder="Enter discount code">
                            <button id="apply-discount" class="btn btn-secondary">Apply</button>
                        </div>
                        
                        <div class="cart-actions">
                            <a href="index.php" class="btn btn-outline">Continue Shopping</a>
                            <a href="checkout.php" class="btn btn-primary" id="checkout-btn" style="display: none;">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 E-Shop. All rights reserved. | Practice Project for XAMPP</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>