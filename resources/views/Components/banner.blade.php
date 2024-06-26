<style>
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
      height: 320px; /* Sesuaikan tinggi gambar */
      background-size: cover;
      background-position: center;
    }

    /* Custom styles for left image */
    .image-floader {
      width: 50%;
      float: left;
    }
  </style>
  <div class="image-wrapper">
    <div class="image-overlay"></div>
    <div class="image image-floader" style="background-image: url({{asset('assets/images/backgrounds/backgroud_1.jpg')}});"></div>
    <div class="image image-floader" style="background-image: url({{asset('assets/images/backgrounds/backgroud_2.jpg')}});"></div>
  </div>