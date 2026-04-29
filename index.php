<?php
// XAMPP par run karne ke liye is folder ko xampp/htdocs mein rakhen
$books = [
  ["title"=>"The Silent Patient", "author"=>"Alex Michaelides", "price"=>399, "cat"=>"Thriller", "img"=>"https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=500"],
  ["title"=>"Atomic Habits", "author"=>"James Clear", "price"=>499, "cat"=>"Self Help", "img"=>"https://images.unsplash.com/photo-1512820790803-83ca734da794?w=500"],
  ["title"=>"Clean Code", "author"=>"Robert C. Martin", "price"=>899, "cat"=>"Programming", "img"=>"https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=500"],
  ["title"=>"Harry Potter", "author"=>"J. K. Rowling", "price"=>599, "cat"=>"Fantasy", "img"=>"https://images.unsplash.com/photo-1516979187457-637abb4f9353?w=500"],
  ["title"=>"Rich Dad Poor Dad", "author"=>"Robert Kiyosaki", "price"=>350, "cat"=>"Finance", "img"=>"https://images.unsplash.com/photo-1526243741027-444d633d7365?w=500"],
  ["title"=>"HTML & CSS Guide", "author"=>"Jon Duckett", "price"=>650, "cat"=>"Web", "img"=>"https://images.unsplash.com/photo-1532012197267-da84d127e765?w=500"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookNest Online Book Store</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
  <nav class="navbar">
    <h1 class="logo">BookNest</h1>
    <button class="menu-btn" onclick="toggleMenu()">☰</button>
    <ul id="navLinks">
      <li><a href="#home">Home</a></li>
      <li><a href="#books">Books</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
</header>

<section id="home" class="hero">
  <div>
    <h2>Discover Your Next Favourite Book</h2>
    <p>Buy best-selling fiction, academic, programming, finance, and self-help books online.</p>
    <a href="#books" class="btn">Shop Now</a>
  </div>
</section>

<section class="features">
  <div><h3>Fast Delivery</h3><p>Quick doorstep delivery across India.</p></div>
  <div><h3>Affordable Prices</h3><p>Exciting discounts on popular books.</p></div>
  <div><h3>Secure Checkout</h3><p>Simple and safe order form.</p></div>
</section>

<section id="books" class="container">
  <h2 class="section-title">Available Books</h2>
  <p class="section-subtitle">Explore trending categories and discover books with a faster, cleaner shopping experience.</p>
  <div class="filters">
    <button type="button" class="filter-btn active" data-cat="all" onclick="filterBooks('all')">All</button>
    <button type="button" class="filter-btn" data-cat="thriller" onclick="filterBooks('thriller')">Thriller</button>
    <button type="button" class="filter-btn" data-cat="self help" onclick="filterBooks('self help')">Self Help</button>
    <button type="button" class="filter-btn" data-cat="programming" onclick="filterBooks('programming')">Programming</button>
    <button type="button" class="filter-btn" data-cat="fantasy" onclick="filterBooks('fantasy')">Fantasy</button>
    <button type="button" class="filter-btn" data-cat="finance" onclick="filterBooks('finance')">Finance</button>
    <button type="button" class="filter-btn" data-cat="web" onclick="filterBooks('web')">Web</button>
  </div>
  <input type="text" id="searchBox" placeholder="Search books by title, author or category..." onkeyup="searchBooks()">
  <div class="book-grid" id="bookGrid">
    <?php foreach($books as $book): ?>
      <div class="book-card">
        <img src="<?= $book['img']; ?>" alt="<?= $book['title']; ?>">
        <div class="book-info">
          <span class="category"><?= $book['cat']; ?></span>
          <h3><?= $book['title']; ?></h3>
          <p>Author: <?= $book['author']; ?></p>
          <strong>₹<?= $book['price']; ?></strong>
          <button onclick="addToCart('<?= $book['title']; ?>', <?= $book['price']; ?>)">Add to Cart</button>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="container cart-box">
  <h2>Your Cart</h2>
  <ul id="cartItems"></ul>
  <h3>Total: ₹<span id="total">0</span></h3>
</section>

<section id="about" class="about">
  <h2>About BookNest</h2>
  <p>BookNest is a fictional online book store designed as a minor project using HTML, CSS, JavaScript and PHP. It displays books dynamically, provides search functionality, and allows users to add books to a cart.</p>
</section>

<section id="contact" class="container contact">
  <h2>Place Order / Contact Us</h2>
  <form action="order.php" method="POST" onsubmit="return validateForm()">
    <input type="text" name="name" id="name" placeholder="Your Name">
    <input type="email" name="email" id="email" placeholder="Your Email">
    <input type="text" name="phone" id="phone" placeholder="Phone Number">
    <textarea name="message" id="message" placeholder="Enter book name or message"></textarea>
    <button type="submit">Submit Order</button>
  </form>
</section>

<footer>
  <p>© 2026 BookNest Online Book Store | MCA Minor Project</p>
</footer>
<script src="js/script.js"></script>
</body>
</html>
