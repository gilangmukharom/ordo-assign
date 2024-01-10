<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>Homepage</title>
</head>

<body>
  @include('include.navbar-home')
  <section class="home-banner">
    <div class="banner-content">
      <p class="btn-scroll">Scroll <i class="fas fa-arrow-down"></i></p>
      <img src="{{asset('assets/image/animation-1-home.png')}}" alt="">
      <div class="banner-box">
        <div class="banner-title">
          <p>HOTEL OPERATOR</p>
          <h1>Membantu Menjalankan
            Operasi Bisnis Pariwisata Anda</h1>
        </div>
        <div class="banner-desc">
          <p>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
        </div>
        <div class="banner-button">
          <button>
            <h1>Konsultasikan Bisnis Saya</h1>
          </button>
        </div>
      </div>
    </div>
    <div class="banner-image">
      <img src="{{asset('assets/image/banner-home-image.png')}}" alt="">
    </div>
  </section>

  <section class="workflow">
    <div class="workflow-title">
      <p>OUR WORKFLOW</p>
      <h1>Proses Kerja Kami dalam Meningkatkan Kualitas Properti</h1>
    </div>
    <div class="workflow-content">
      <img src="{{asset('assets/image/home-workflow.png')}}" alt="">
    </div>
  </section>

  <section class="services">
    <div class="services-title">
      <p>OUR SERVICES</p>
      <h1>Apa Saja yang Kami Bantu ?</h1>
    </div>
    <div class="services-content">

      <div class="card">
        <div class="card-header">
          <img src="{{ asset('assets/image/card-home-1.png') }}" alt="">
          <h1>01</h1>
        </div>
        <div class="card-title">
          <h1>Revenue Management Service</h1>
        </div>
        <div class="card-body">
          <button>
            <p>Saya Tertarik <i class="fas fa-arrow-right"></i></p>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <img src="{{ asset('assets/image/card-home-2.png') }}" alt="">
          <h1>02</h1>
        </div>
        <div class="card-title">
          <h1>Full Manage
            Service</h1>
        </div>
        <div class="card-body">
          <button>
            <p>Saya Tertarik <i class="fas fa-arrow-right"></i></p>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <img src="{{ asset('assets/image/card-home-3.png') }}" alt="">
          <h1>03</h1>
        </div>
        <div class="card-title">
          <h1>Asset Monetize
            Service</h1>
        </div>
        <div class="card-body">
          <button>
            <p>Saya Tertarik <i class="fas fa-arrow-right"></i></p>
          </button>
        </div>
      </div>
    </div>

    <div class="animation-services">
      <img src="{{asset('assets/image/animation-2-home.png')}}" alt="">
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
              <a href="">
                <p><i class="fas fa-circle-arrow-right"></i> Lihat Detail</p>
              </a>
            </div>
          </div>
        </div>
        <div class="custom-carousel-item">
          <img src="{{ asset('assets/image/carousel-image.png') }}" alt="Image 1">
          <div class="carousel-caption">
            <div class="caption-desc">
              <p class="progress">1/4 OPERATIONAL PROJECT</p>
              <h1>Townhouse Oak</h1>
              <p class="category">Brand Tertinggi di OYO</p>
            </div>
            <div class="caption-button">
              <a href="">
                <p><i class="fas fa-circle-arrow-right"></i> Lihat Detail</p>
              </a>
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
              <a href="">
                <p><i class="fas fa-circle-arrow-right"></i> Lihat Detail</p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <button class="custom-carousel-control prev" onclick="changeSlide(-1)">&lt;</button>
      <button class="custom-carousel-control next" onclick="changeSlide(1)">&gt;</button>
    </div>

  </section>

  <section class="testimoni">
    <div class="testimoni-box">
      <div class="testimoni-title">
        <p>OUR TESTIMONIALS</p>
        <h1>Yang Klien Kami Katakan</h1>
      </div>
      <div class="testimoni-carousel">
        <div class="carousel-testimoni" id="TestimoniCarousel">
          <div class="carousel-testimoni-inner">

            <div class="carousel-testimoni-item active">
              <div class="testimoni-text">
                <div class="text-desc">
                  <div class="text-animation">
                    <img src="{{asset('assets/image/animation-3-home.png')}}" alt="">
                  </div>
                  <p>GWA Group membantu hotel
                    saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                </div>
                <div class="testimoni-profile">
                  <div class="profile-icon">
                    <img src="{{asset('assets/image/profile-image.png')}}" alt="">
                  </div>
                  <div class="profile-name">
                    <p class="name">Chaim Desmond</p>
                    <p>CEO of Yellow Hotel</p>
                  </div>
                </div>
              </div>
              <img src="{{ asset('assets/image/image-carousel-home.png') }}" alt="Image 1">
            </div>
            <div class="carousel-testimoni-item active">
              <div class="testimoni-text">
                <div class="text-desc">
                  <div class="text-animation">
                    <img src="{{asset('assets/image/animation-3-home.png')}}" alt="">
                  </div>
                  <p>GWA Group membantu hotel
                    saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                </div>
                <div class="testimoni-profile">
                  <div class="profile-icon">
                    <img src="{{asset('assets/image/profile-image.png')}}" alt="">
                  </div>
                  <div class="profile-name">
                    <p class="name">Chaim Desmond</p>
                    <p>CEO of Yellow Hotel</p>
                  </div>
                </div>
              </div>
              <img src="{{ asset('assets/image/image-carousel-home.png') }}" alt="Image 1">
            </div>
          </div>
          <button class="carousel-testimoni-control prev" onclick="gantiSlide(-1)">&lt;</button>
          <button class="carousel-testimoni-control next" onclick="gantiSlide(1)">&gt;</button>
        </div>
      </div>
    </div>
  </section>

  <section class="konsultasi">
    <div class="konsultasi-text">
      <div class="title-konsultasi">
        <p>HUBUNGI KAMI</p>
        <h1>Ingin Mendiskusikan Bisnis Pariwisata Anda?</h1>
      </div>
      <hr>
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