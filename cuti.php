<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Red Stream - connect the donors</title>

  <!-- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">
  
  <!-- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    /* Form Styles */
    .form-title {
        color: var(--oxford-blue-1);
        font-family: var(--ff-poppins);
        font-size: 3.4rem;
        font-weight: var(--fw-800);
        text-align: center;
        margin-bottom: 20px;
    }

    .form-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .form-field {
      flex: 0 0 48%;
      margin-bottom: 20px;
    }

    .form-field label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-field input,
    .form-field select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-field input[type="submit"] {
      background-color: #216aca;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .form-field input[type="submit"]:hover {
      background-color: #060952;
    }
  </style>

</head>

<body id="top">
  <!-- HEADER-->
  <header class="header">
    <div class="header-top">
      <div class="container">
        <ul class="contact-list">
          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>
            <a href="mailto:redstream001@gmail.com" class="contact-link">resimencorpscadet@gmail.com</a>
          </li>
          <li class="contact-item">
            <ion-icon name="call-outline"></ion-icon>
            <a href="tel:+917558951351" class="contact-link">+91-7558-951-351</a>
          </li>
        </ul>
        <ul class="social-list">
          <li>
            <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/Annabel07785340" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://youtu.be/Af0gk_kiGac" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="header-bottom" data-header>
      <div class="container">
        <a href="index.html" class="logo" style="display: flex;"><img src="assets/images/logo_inf.png" alt="ICON" width="40" height="40">‏‏‎ ‎ ‏‏‎ ‎Surat Izin Cuti</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="#cuti" class="navbar-link" data-nav-link>Cuti</a>
            </li>
            <li>
              <a href="#izin-bermalam" class="navbar-link" data-nav-link>Izin Bermalam</a>
            </li>
            <li>
              <a href="#dinas-luar" class="navbar-link" data-nav-link>Dinas Luar</a>
            </li>
            <li>
              <a href="#pesiar" class="navbar-link" data-nav-link>Pesiar</a>
            </li>
          </ul>
        </nav>
        <!-- <a href="register.php" class="btn">Login / Register</a> -->
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>
      </div>
    </div>
  </header>

  <main>
    <article>
        <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png'); margin: 0%; height: 100vh; justify-content: center; display:flex;" aria-label="hero">
            <!-- Login and Registration Form -->
            <div class="container">
              <div class="form-container">
                <form action="#" method="POST">
                  <!-- Login Information -->
                  <div class="form-section">
                    <div class="form-field">
                      <label for="full-name">NAMA</label>
                      <input type="text" id="full-name" name="nama" required>
                    </div>
                    <div class="form-field">
                      <label for="mobile">NOMOR INDUK MAHASISWA</label>
                      <input type="text" id="mobile" name="nim" required>
                    </div>
                  </div>
                  <!-- Donor Information -->
                  <div class="form-section">
                    <div class="form-field">
                      <label for="gender">PANGKAT</label>
                      <select id="gender" name="gender" required>
                        <option value="" disabled selected hidden></option>
                        <option value="prajurit">Prajurit Kadet</option>
                        <option value="kopral">Kopral Kadet</option>
                        <option value="sersan">Sersan Kadet</option>
                        <option value="mayor_dua">Sersan Mayor Dua Kadet</option>
                        <option value="mayor_satu">Sersan Mayor Satu Kadet</option>
                      </select>
                    </div>
                    <div class="form-field">
                      <label for="gender">FAKULTAS</label>
                      <select id="gender" name="gender" required>
                        <option value="" disabled selected hidden></option>
                        <option value="fkm">Fakultas Kedokteran Militer</option>
                        <option value="ffm">Fakultas Farmasi Militer</option>
                        <option value="fmipa">Fakultas MIPA Militer</option>
                        <option value="fstp">Fakultas Sains dan Teknologi Pertahanan</option>
                      </select>
                    </div>
                    <div class="form-field">
                      <label for="mobile">PROGRAM STUDI</label>
                      <input type="text" id="mobile" name="nim" required>
                    </div>
                    
                    
                    <div class="form-field">
                      <label for="weight">KENDARAAN</label>
                      <input type="text" id="weight" name="weight" required>
                    </div>
                  </div>
                  <!-- Contact Information -->
                  <div class="form-section">
                    <div class="form-field">
                      <label for="state">NAMA ORANG TUA</label>
                      <input type="text" id="state" name="state" required>
                    </div>
                    <div class="form-field">
                      <label for="district">NOMOR HP ORANG TUA</label>
                      <input type="text" id="district" name="district" required>
                    </div>
                    
                  </div>
                  <div class="form-field">
                      <label for="area">ALAMAT</label>
                      <input type="text" id="landmarks" name="landmarks" required>
                    </div>
                    <button class="custom-btn btn-5" onclick="window.location.href='cuti.php'"><span>Daftar</span></button>
                </form>
              </div>
              <figure class="hero-banner">
                <img src="./assets/images/bg.svg" width="587" height="839" alt="hero banner" class="w-100">
              </figure>
            </div>
          </section>

  <!--BACK TO TOP-->
  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
  </a>

  <!--custom js link-->
  <script src="./assets/js/script.js" defer></script>
  <!--ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>