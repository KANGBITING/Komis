<?php
session_start();
$user = $_SESSION['username'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>vistART🎨</title>
  <link rel="stylesheet" href="Home.css">
</head>
<body>
  <!-- Popup Hover (gambar + teks muncul saat kursor diarahkan) -->
<div class="hover-preview" id="hoverPreview">
  <img src="" alt="Preview">
  <div class="hover-text"></div>
</div>

  <header>
    <div class="logo">vistART🎨</div>
    <nav>
      <a href="Home.php" class="active">Home</a>
      <a href="About.html" class="active">About</a>
    </nav>
    <div class="search-bar">
      <input type="text" placeholder="Cari...">
    </div>
    <?php 
    echo $user;
    ?>
    
    <div class="profile">
  <?php if ($user): ?>
    <a href="Galerry.html"><!-- arahkan ke halaman lain -->
      <img src="Maskot kang biting.jpeg" alt="Profile">
    </a>
  <?php else: ?>
    <a href="login.php" class="login-btn">Login</a>
  <?php endif; ?>
</div>

  </header>

  <!-- Slider -->
  <div class="slider">
    <div class="list">
      <div class="item"><img src="Akajart.jpeg" alt=""></div>
      <div class="item"><img src="Fyu.jpeg" alt=""></div>
      <div class="item"><img src="Pincox.jpeg" alt=""></div>
      <div class="item"><img src="Collab.jpeg" alt=""></div>
      <div class="item"><img src="Kraken clorscape.jpeg" alt=""></div>
    </div>

    <!-- Dots -->
    <ul class="dots">
      <li class="active"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>

<!-- Cards Section -->

  <section class="card-section">
    <h2>Featured Artists</h2>

    <div class="card-container">
      <div class="hover-preview" id="hoverPreview"></div>
      <div class="card">
        <img src="Jart.jpeg" alt="Preview">
        <div class="hover-text"></div>
        <h3>Akajart</h3>
        <p>Digital artist focusing on vibrant and futuristic designs.</p>
        <a href="Akajart.html" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Niru.jpeg" alt="Card 2">
        <h3>Fyu's Niruwasen Project</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Kepincox.jpeg" alt="Card 3">
        <h3>kepincox</h3>
        <p>Visual storyteller combining abstract art with realism.</p>
        <a href="#" class="btn">Read More</a>
      </div>

     <div class="card">
  <img src="Collab.jpeg" alt="Card 4">
  <h3>Kang Biting ON MY WAY</h3>
  <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
  <a href="Profile.html" class="btn">Read More</a>
</div>

      <div class="card">
        <img src="Fwuu.jpeg" alt="Card 5">
        <h3>Fwuu miiko</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Gwem.jpeg" alt="Card 6">
        <h3>Gwem Aqmu</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Hibernasi.jpeg" alt="Card 7">
        <h3>Hibernasi Fungi</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Az.jpeg" alt="Card 8">
        <h3>Az/Zuri's Dump</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Neptune.jpeg" alt="Card 8">
        <h3>Neptune</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Pir.jpeg" alt="Card 8">
        <h3>Buah Pir</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Solariekki.jpeg" alt="Card 8">
        <h3>Solariekki</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="card">
        <img src="Pinxiebii.jpeg" alt="Card 8">
        <h3>Pinxiebbi</h3>
        <p>Painter and illustrator with a dreamy pastel aesthetic.</p>
        <a href="#" class="btn">Read More</a>
      </div>

    </div>
  </section>

  <section class="card-section">
    <h2>Suggested Communities For You!</h2>

    <div class="card-container">
      <div class="card">
        <img src="Gambar1.jpg" alt="Card 1">
        <h3>SEMI REALISM ARTIST</h3>
        <p>Semi-Realism and realism artist are welcome to join this community to simplify communication with other artists.</p>
        <a href="#" class="btn">Open</a>
      </div>

      <div class="card">
        <img src="Gambar2.jpg" alt="Card 2">
        <h3>ANIME STYLE</h3>
        <p>Anime style combines expressive characters, dynamic poses, and vibrant storytelling. With its signature big eyes, dramatic emotions, and cinematic atmosphere, this art form brings fantasy, action, and emotion to life in a visually captivating way.</p>
        <a href="#" class="btn">Open</a>
      </div>

      <div class="card">
        <img src="Gambar3.jpg" alt="Card 3">
        <h3>CHIBI STYLE</h3>
        <p>Chibi style features adorable, small-bodied characters with oversized heads and big expressive eyes. It emphasizes cuteness, humor, and playful emotion, making every character look sweet, tiny, and irresistibly charming.</p>
        <a href="#" class="btn">Open</a>
      </div>
    </div>
  </section>

  <section class="card-section">
    <h2>Digital Commission</h2>

    <div class="card-container">
      <div class="card">
        <img src="Komis 1.jpeg" alt="Card 1">
        <h3>OPEN COMISSION! #</h3>
        <p>fOR EVERY COUNTRY.</p>
        <a href="#" class="btn">Open</a>
      </div>

      <div class="card">
        <img src="Komis 2.jpeg" alt="Card 2">
        <h3>OPEN KOMIS!</h3>
        <p>Dengan harga terjangkau!.</p>
        <a href="#" class="btn">Open</a>
      </div>

      <div class="card">
        <img src="Komis 3.jpeg" alt="Card 3">
        <h3>KOMIS LEE!!! 🗣️🔥🔥</h3>
        <p>Beli disini dijamin hasilnya jadi wangi wangi 🤪🤫.</p>
        <a href="#" class="btn">Open</a>
      </div>
    </div>
  </section>


  <script src="Slider.js"></script>
</body>
</html>
