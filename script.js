let cart = [];
let total = 0;
let activeCategory = 'all';

function addToCart(title, price){
  cart.push({title, price});
  total += price;
  displayCart();
}

function displayCart(){
  const cartItems = document.getElementById('cartItems');
  const totalEl = document.getElementById('total');
  cartItems.innerHTML = '';

  if(cart.length === 0){
    const empty = document.createElement('p');
    empty.className = 'empty-cart';
    empty.textContent = 'Your cart is empty. Add a book to begin.';
    cartItems.appendChild(empty);
  } else {
    cart.forEach(item => {
      const li = document.createElement('li');
      li.textContent = `${item.title} - ₹${item.price}`;
      cartItems.appendChild(li);
    });
  }

  totalEl.textContent = total;
}

function searchBooks(){
  const searchValue = document.getElementById('searchBox').value.toLowerCase();
  filterBooks(activeCategory, searchValue);
}

function filterBooks(category, searchValue = ''){
  activeCategory = category;
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.classList.toggle('active', btn.dataset.cat === category);
  });

  const query = searchValue.toLowerCase();
  const cards = document.querySelectorAll('.book-card');

  cards.forEach(card => {
    const categoryText = card.querySelector('.category').textContent.toLowerCase();
    const title = card.querySelector('h3').textContent.toLowerCase();
    const author = card.querySelector('p').textContent.toLowerCase();
    const matchesSearch = !query || title.includes(query) || author.includes(query) || categoryText.includes(query);
    const matchesCategory = category === 'all' || categoryText === category;
    card.style.display = matchesSearch && matchesCategory ? 'grid' : 'none';
  });
}

function validateForm(){
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const message = document.getElementById('message').value.trim();

  if(name === '' || email === '' || phone === '' || message === ''){
    alert('Please fill all fields before submitting.');
    return false;
  }

  return true;
}

function toggleMenu(){
  document.getElementById('navLinks').classList.toggle('active');
}

window.addEventListener('load', () => displayCart());
