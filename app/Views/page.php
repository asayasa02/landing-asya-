<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salad Bites</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #fdfaf7;
      color: #3e2f26;
    }

    /* Navbar */
    header {
      background: #5c4033;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      color: #fff;
      font-size: 22px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    nav ul li a:hover {
      color: #d4a373;
    }

    /* Hero */
    .hero {
      background: linear-gradient(rgba(92,64,51,0.6), rgba(92,64,51,0.6)),
                  url('https://images.unsplash.com/photo-1504674900247-0877df9cc836') no-repeat center/cover;
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      padding: 20px;
    }

    .hero h2 {
      font-size: 48px;
      margin-bottom: 15px;
    }

    .hero p {
      font-size: 20px;
      margin-bottom: 25px;
    }

    .hero button {
      padding: 12px 25px;
      background: #d4a373;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    .hero button:hover {
      background: #c0895d;
    }

    /* Menu Section */
    .menu {
      padding: 60px 40px;
      text-align: center;
    }

    .menu h2 {
      font-size: 32px;
      margin-bottom: 30px;
    }

    .menu-items {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 20px;
    }

    .card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .card h3 {
      margin-bottom: 10px;
      font-size: 20px;
    }

    .card p {
      font-size: 14px;
      color: #555;
    }

    .fruity-img {
      width: 70%;
      max-width: 160px;
      display: block;
      margin: 0 auto 15px auto;
    }

    /* About */
    .about {
      padding: 60px 40px;
      background: #f0e0d6;
      text-align: center;
    }

    .about h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .about p {
      max-width: 700px;
      margin: auto;
      line-height: 1.6;
    }

    /* Contact */
    .contact {
      padding: 60px 40px;
      text-align: center;
    }

    .contact h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .contact p {
      margin-bottom: 10px;
    }

    footer {
      background: #5c4033;
      color: #fff;
      text-align: center;
      padding: 15px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    <h1>Salad Bites by Asya</h1>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero" id="home">
    <div>
      <h2>Healthy & Tasty Food</h2>
      <p>Salad bites penuh energi, cocok untuk gaya hidup sehat dan kerenmu.</p>
      <button>Order Now</button>
    </div>
  </section>

  <!-- Menu -->
  <section class="menu" id="menu">
    <h2>Our Menu</h2>
    <div class="menu-items">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd" alt="Granola Classic">
        <h3>Salad Classic</h3>
        <p>Kombinasi  sayur, buah, oat, madu, dan kacang pilihan.</p>
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1505253716362-afaea1d3d6bf" alt="Granola Choco" onerror="this.src='https://images.unsplash.com/photo-1504674900247-0877df9cc836';">
        <h3>Salad Spice</h3>
        <p>Rasa salad pedas dengan bahan bahan premium.</p>
      </div>
      <div class="card">
        <img src="https://1.bp.blogspot.com/-9Q0PhMD6l0E/XDVhAggdNWI/AAAAAAABFII/AWTo3w1_oF0PJLQ4jMv9wope-UXCM4t3wCLcBGAs/s1600/aIMG_8200.jpg" alt="Granola Fruity">
        <h3>Salad Sweet</h3>
        <p>Segar dengan campuran buah kering alami dan tambahan manis alami.</p>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="about" id="about">
    <h2>About Us</h2>
    <p>Kami percaya makanan sehat bisa tetap enak. Salad Bites dibuat dengan bahan alami, tanpa pengawet, dan cocok untuk teman kerja, olahraga, maupun santai.</p>
  </section>

  <!-- Contact -->
  <section class="contact" id="contact">
    <h2>Contact Us</h2>
    <p>Email: saladbites@example.com</p>
    <p>Instagram: @salad.bites</p>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Salad Bites. All rights reserved.</p>
  </footer>

</body>
</html>