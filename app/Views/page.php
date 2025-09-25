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
      padding-top: 70px; /* supaya konten tidak ketutup navbar */
    }

    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

    /* Navbar */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
      background: #5c4033;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      animation: slideDown 1s ease;
      transition: background 0.3s ease;
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
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      padding: 20px;
      position: relative;
      background-size: cover;
      background-position: center;
      transition: background 1s ease-in-out;
    }

    .hero > div {
      position: relative;
      z-index: 1;
      background: rgba(60, 40, 20, 0.45);
      padding: 32px 24px;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(60,40,20,0.08);
      animation: fadeInUp 1s ease forwards;
    }

    .hero h2 {
      font-size: 48px;
      margin-bottom: 15px;
      animation: fadeInUp 1s ease forwards;
      animation-delay: 0.3s;
    }

    .hero p {
      font-size: 20px;
      margin-bottom: 25px;
      animation: fadeInUp 1s ease forwards;
      animation-delay: 0.6s;
    }

    .hero button {
      padding: 12px 25px;
      background: #d4a373;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      animation: fadeInUp 1s ease forwards;
      animation-delay: 0.9s;
    }

    .hero button:hover {
      background: #c0895d;
      animation: pulse 0.6s infinite;
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
      opacity: 0;
      transform: translateY(40px);
      transition: all 0.8s ease;
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

    .card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .card:hover {
      transform: scale(1.05);
      transition: transform 0.3s ease;
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

    /* Animasi umum */
    @keyframes fadeInUp {
      0% {opacity: 0; transform: translateY(40px);}
      100% {opacity: 1; transform: translateY(0);}
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.08); }
      100% { transform: scale(1); }
    }

    @keyframes slideDown {
      0% {opacity: 0; transform: translateY(-60px);}
      100% {opacity: 1; transform: translateY(0);}
    }

    .asya {
      color: #d4a373;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    <h1>Salad Bites <span class="asya">by Asya</span> <small><em>since 2025</small></em></h1>
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
        <p>Kombinasi sayur, buah, oat, madu, dan kacang pilihan.</p>
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" alt="Granola Choco">
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
    <p><strong> Salad Bites </strong> adalah salad yang menggunakan bahan preminum, segar dengan perpaduan yang membuat rasa yang enak.<strong> Salad Bites </strong> dibuat dengan penuh cinta menciptakan <strong> Salad Bites </strong> menjadi makanan sehat yang amat disuka.</p>
    <p1><strong>Kami percaya makanan sehat bisa tetap enak. Salad Bites dibuat dengan bahan alami, tanpa pengawet, dan cocok untuk teman kerja, olahraga, maupun santai.</strong></p1>
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

  <!-- JavaScript -->
  <script>
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href"))
          .scrollIntoView({ behavior: "smooth" });
      });
    });

    // Animasi muncul saat scroll
    const revealElements = document.querySelectorAll(".card, .about, .contact");
    function revealOnScroll() {
      const windowHeight = window.innerHeight;
      revealElements.forEach(el => {
        const elementTop = el.getBoundingClientRect().top;
        if (elementTop < windowHeight - 100) {
          el.classList.add("visible");
        }
      });
    }
    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll();

    // Navbar ganti warna saat scroll
    const header = document.querySelector("header");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        header.style.background = "#3a2b22";
      } else {
        header.style.background = "#5c4033";
      }
    });

    // Slideshow hero background
    const heroSection = document.querySelector('.hero');
    const images = [
      'https://images.unsplash.com/photo-1504674900247-0877df9cc836',
      'https://images.unsplash.com/photo-1512621776951-a57141f2eefd',
      'https://1.bp.blogspot.com/-9Q0PhMD6l0E/XDVhAggdNWI/AAAAAAABFII/AWTo3w1_oF0PJLQ4jMv9wope-UXCM4t3wCLcBGAs/s1600/aIMG_8200.jpg',
      'https://www.primalkitchen.com/cdn/shop/articles/20240905221054-pk-greek-salad-0214-min.jpg?v=1725643684',
      'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4EkloJlvBMpQabC7FkJQQCC9C1syzqmqhMg&s', 
      'https://www.unileverfoodsolutions.co.id/dam/global-ufs/mcos/SEA/calcmenu/recipes/ID-recipes/salads/asian-salad/main-header.jpg'
     
    ];
    let current = 0;
    function changeHeroBg() {
      heroSection.style.background =
        `linear-gradient(rgba(92,64,51,0.6), rgba(92,64,51,0.6)), url('${images[current]}') no-repeat center/cover`;
      current = (current + 1) % images.length;
    }
    setInterval(changeHeroBg, 2000); // ganti gambar tiap 2 detik
    changeHeroBg(); // set gambar awal
  </script>
</body>
</html>