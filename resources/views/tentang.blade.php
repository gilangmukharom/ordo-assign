<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>Tentang Kami</title>
</head>

<body>
    @include('include.navbar')

  <section class="banner">
    <div class="banner-text">
      <h1>Kenalan Lebih Dekat dengan Graha Wisata Kita dan Sejarahnya</h1>
    </div>
    <div class="banner-animation">
      <img src="{{ asset('assets/image/animation-1-tentang.png') }}" alt="">
    </div>

    <div class="banner-animation-2">
      <img src="{{ asset('assets/image/animation-2-tentang.png') }}" alt="">
    </div>

    <div class="banner-card">
      <div class="card-box">
        <div class="card-1">
          <div class="card-header">
            <p>Visi Kami</p>
          </div>
          <div class="card-body">
            <p>Visi kami adalah memberikan layanan terbaik bagi para mitra serta meningkatkan nilai standar dalam industri hospitality khususnya pada segmentasi low budget hotel.</p>
          </div>
        </div>
        <div class="card-2">
          <div class="card-header">
            <p>Misi Kami</p>
          </div>
          <div class="card-body">
            <p>Sesuai dengan visi kami GWA akan terus memberikan layanan yang terintegrasi, transparan, serta independen dalam pelayanan kami kepada para mitra.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tentang-text">
    <img src="{{ asset('assets/image/animation-3-tentang.png') }}" alt="">
    <div class="tentang-text-content">
      <p>PT Graha Wisata Kita didirikan pada Oktober 2021. Didasari dari pesatnya industri perhotelan di Indonesia serta impact besar dari pandemi Covid-19 di dunia menjadikan semangat GWA untuk membangkitkan gairah industri perhotelan khususnya melalui jejaring kerjasama dengan OYO Indonesia selaku mitra strategis.</p>
    </div>
  </section>

  <section class="our-goals">
    <div class="our-goals-title">
      <p>OUR GOALS</p>
      <h1>Tujuan yang Berusaha Kami Capai</h1>
    </div>
    <div class="our-goals-card">
      <div class="card">
        <div class="card-header">
          <img src="{{ asset('assets/image/card-goals-1.png') }}" alt="">
          <h1>Peningkatan SDM</h1>
        </div>
        <div class="card-body">
          <p>SDM itu hal utama pada semua bisnis, karenanya kami memastikan peningkatan kinerja SDM Mitra dengan SDM terpilih dari kami</p>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <img src="{{ asset('assets/image/card-goals-2.png') }}" alt="">
          <h1>Peningkatan Kualitas</h1>
        </div>
        <div class="card-body">
          <p>Dengan peningkatan kualitas
            SDM yang dimiliki mitra tentunya kualitas layanan akan menjadi lebih baik dan terstruktur.</p>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <img src="{{ asset('assets/image/card-goals-3.png') }}" alt="">
          <h1>Peningkatan Revenue</h1>
        </div>
        <div class="card-body">
          <p>Yang pada akhirnya memberikan nilai positif pada pendapatan mitra melalui fase-fase peningkatan yang telah dijalankan</p>
        </div>
      </div>
    </div>
  </section>

  <section class="our-milestone">
    <div class="our-milestone-title">
      <p>OUR MILESTONE</p>
      <h1>Milestone & Timeline</h1>
    </div>

    <div class="timeline">
      <div class="timeline-item">
        <div class="timestamp">2010</div>
        <div class="line"></div>
        <img src="{{ asset('assets/image/img-milestone-1.png') }}" alt="">
        <div class="content">20 ojek, 1 call center, dan 1 misi untuk menyelesaikan masalah masyarakat Indonesia. Gojek membuat jalanan Jakarta menjadi sebuah lautan hijau.</div>
      </div>
      <div class="timeline-item">
        <div class="timestamp">2010</div>
        <div class="line"></div>
        <img src="{{ asset('assets/image/img-milestone-2.png') }}" alt="">
        <div class="content">Aplikasi Gojek dibuat. Ada kenaikan pesanan dari 3,000 per hari jadi 10,000 per hari. Ekspansi ke luar kota. Lalu, kami melihat kesempatan untuk ekspansi ke ranah pesan antar makanan, penjualan tiket, dll.</div>
      </div>
      <div class="timeline-item">
        <div class="timestamp">2011</div>
        <div class="line"></div>
        <img src="{{ asset('assets/image/img-milestone-1.png') }}" alt="">
        <div class="content">20 ojek, 1 call center, dan 1 misi untuk menyelesaikan masalah masyarakat Indonesia. Gojek membuat jalanan Jakarta menjadi sebuah lautan hijau.</div>
      </div>
      <div class="timeline-item">
        <div class="timestamp">2011</div>
        <div class="line"></div>
        <img src="{{ asset('assets/image/img-milestone-2.png') }}" alt="">
        <div class="content">Aplikasi Gojek dibuat. Ada kenaikan pesanan dari 3,000 per hari jadi 10,000 per hari. Ekspansi ke luar kota. Lalu, kami melihat kesempatan untuk ekspansi ke ranah pesan antar makanan, penjualan tiket, dll.</div>
      </div>

      <div class="background-blur"></div>

      <div class="show-more-btn">Lihat Semua Milestone</div>
      <div class="hide-btn">Hide</div>
    </div>
  </section>

  <section class="our-project">
    <div class="our-project-title">
      <p>OUR LATEST PROJECT</p>
      <h1>Project Terbaru Kami</h1>
    </div>

    <div class="custom-carousel" id="myCustomCarousel">
      <div class="custom-carousel-inner">
        <div class="custom-carousel-item active">
          <img src="{{ asset('assets/image/carousel-image.png') }}" alt="Image 1">
          <div class="carousel-caption">
            <div class="caption-desc">
              <p class="progress">1/4 OPERATIONAL PROJECT</p>
              <h1>Townhouse Oak</h1>
              <p class="category">Brand Tertinggi di OYO</p>
            </div>
            <div class="caption-button">
              <a href=""><p><i class="fas fa-circle-arrow-right"></i> Lihat Detail</p></a>
            </div>
          </div>
        </div>
        <div class="custom-carousel-item active">
          <img src="{{ asset('assets/image/carousel-image.png') }}" alt="Image 1">
          <div class="carousel-caption">
            <div class="caption-desc">
              <p class="progress">1/4 OPERATIONAL PROJECT</p>
              <h1>Townhouse Oak</h1>
              <p class="category">Brand Tertinggi di OYO</p>
            </div>
            <div class="caption-button">
              <a href=""><p><i class="fas fa-circle-arrow-right"></i> Lihat Detail</p></a>
            </div>
          </div>
        </div>
        <div class="custom-carousel-item active">
          <img src="{{ asset('assets/image/carousel-image.png') }}" alt="Image 1">
          <div class="carousel-caption">
            <div class="caption-desc">
              <p class="progress">1/4 OPERATIONAL PROJECT</p>
              <h1>Townhouse Oak</h1>
              <p class="category">Brand Tertinggi di OYO</p>
            </div>
            <div class="caption-button">
              <a href=""><p><i class="fas fa-circle-arrow-right"></i> Lihat Detail</p></a>
            </div>
          </div>
        </div>
      </div>
      <button class="custom-carousel-control prev" onclick="changeSlide(-1)">&lt;</button>
      <button class="custom-carousel-control next" onclick="changeSlide(1)">&gt;</button>
    </div>

  </section>

  <section class="konsultasi">
    <div class="konsultasi-text">
      <div class="title-konsultasi">
        <p>HUBUNGI KAMI</p>
        <h1>Ingin Mendiskusikan Bisnis Pariwisata Anda?</h1>
      </div>
      <div class="desc-konsultasi">
        <p>Ada kepentingan bisnismu yang ingin didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !</p>
      </div>
    </div>
    <div class="konsultasi-form">
      <form action="">
        <label for="nama">Nama Lengkap</label>
        <input type="text" placeholder="Masukan Nama Lengkap">
        <label for="perusahaan">Nama Perushaan</label>
        <input type="text" placeholder="Masukan Nama Perusahaan">
        <label for="whatsapp">Nomor Whatsapp Aktif</label>
        <input type="number" placeholder="Masukan Nomor Whatsapp">

       <button type="submit">Jadwalkan Konsultasi <i class="fas fa-arrow-right"></i></button>
      </form>
    </div>
  </section>

  @include('include.footer')

</body>

</html>