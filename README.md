# Laravel Marketplace

A full-stack e-commerce marketplace built with Laravel 12, where buyers can browse products, place orders, manage wishlists, and leave reviews. Sellers can manage products, track stock, and update order statuses.

## Screenshots

### Products Page
![Products](screenshots/products.png)

### Product Details
![Product Details](screenshots/product-details.png)

### Shopping Cart
![Shopping Cart](screenshots/cart.png)

### Seller Dashboard
![Seller Dashboard](screenshots/seller-dashboard.png)

## Features

### Buyer Features
- Browse and search products
- Sort products by price
- View product details
- Add products to cart and update quantities
- Checkout and place orders
- View order history and track order status
- Add and remove products from wishlist
- Leave product reviews and ratings

### Seller Features
- Seller dashboard
- Create, edit, and delete products
- Upload product images
- Manage product stock
- View customer orders
- Update order statuses

### Security & Authorization
- User authentication
- Buyer and seller roles
- Product ownership authorization
- Seller-only product and order management
- Buyers can access only their own orders
- Stock availability validation
- Protected routes and controller authorization

## Order Workflow

1. Buyer selects a product and adds it to the cart.
2. Buyer checks out and creates an order.
3. Order items are saved in the database.
4. Product stock is reduced according to purchased quantities.
5. Seller views the order and updates its status.
6. Buyer can track the updated order status.

## Technologies

- PHP 8.2+
- Laravel 12
- MySQL
- Blade
- Bootstrap 5
- Tailwind CSS
- Alpine.js
- JavaScript
- Vite
- HTML and CSS
- Pest

## Installation

Clone the repository:

```bash
git clone https://github.com/davomkhitaryan/laravel-marketplace.git
cd laravel-marketplace
```

Install dependencies:

```bash
composer install
npm install
```

Create the environment file:

```powershell
Copy-Item .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database credentials in `.env`, then run:

```bash
php artisan migrate --seed
```

Start the Laravel development server:

```bash
php artisan serve
```

In another terminal, start Vite:

```bash
npm run dev
```

## Testing

Run automated tests using Pest and Laravel's testing framework:

```bash
php artisan test
```

GitHub Actions workflows are configured to automate project checks.

## Project Information

**Payment gateway:** Not currently integrated. Payment integration can be added in a future stage.

## Author

**Davit Mkhitaryan**

GitHub: https://github.com/davomkhitaryan