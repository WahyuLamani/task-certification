<style>
    /* Navbar styles */
    nav {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    /* Custom styles for image wrapper */
    .image-wrapper {
      position: relative;
      overflow: hidden;
    }

    /* Custom styles for image overlay */
    .image-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 50%; /* Menyatu pada setengah lebar */
      height: 100%;
      background: rgba(0, 0, 0, 0.5); /* Overlay transparan */
    }

    /* Custom styles for images */
    .image {
      height: 250px; /* Sesuaikan tinggi gambar */
      background-size: cover;
      background-position: center;
    }

    /* Custom styles for left image */
    .image1 {
      width: 50%;
      float: left;
    }

    /* Custom styles for right image */
    .image2 {
      width: 50%;
      float: left;
    }
  </style>
  <div class="image-wrapper">
    <div class="image-overlay"></div>
    <div class="image image1" style="background-image: url({{asset('assets/images/backgrounds/backgroud_1.jpg')}});"></div>
    <div class="image image2" style="background-image: url({{asset('assets/images/backgrounds/backgroud_2.jpg')}});"></div>
  </div>s