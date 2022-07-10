@extends('frontendhimti.template')

@section('content')
<header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
      <div class="container">
        <div class="navbar-brand-wrapper d-flex w-100">
          <img src="template-frontend/assets/images/HIMTI.png" alt="" width="75" height="75">
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="mdi mdi-menu navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
            <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
              <div class="navbar-collapse-logo">
                <img src="template-frontend/images/Group2.svg" alt="">
              </div>
              <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
              </button>
            </li>
              <li class="nav-item">             
                <a class="nav-link" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/sharing">Sharing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tutorial">Tutorial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#header-section">Acara</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/klinik">Klinik</a>
              </li>

            <li class="nav-item btn-contact-us pl-4 pl-lg-0">
              <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="container">
    <section id="speakers">
      
      <div class="section-title" data-aos="fade-up">
        <h2>HIMTI</h2>
        <p>Acara</p>
      </div>
      <div class="col-12 text-center pb-2">
        <p>Beberapa Acara kami dalam acara HIMTI FESTIVAL</p>
      </div>
      @foreach ($acara as $row)
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6" style="margin: auto">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src={{ asset ('fotokategori/'.$row->image)}} alt="Speaker 3" height="500" width="500" class="img-fluid">
              <div class="details">
                <h3><a href="/detailacara">{{ $row->title }}</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="detail-acara" style="text-align: center">
        <a href="/detailacara" class="btn btn-info" >Detail Acara</a>
    </div>
    </section>
    <br>
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-title" data-aos="fade-up">
          <h2>HIMTI</h2>
          <p>Pembicara</p>
        </div>
        <div class="col-12 text-center pb-2">
          <p>Beberapa Pembicara kami dalam acara HIMTI FESTIVAL</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="template-frontend/assets/images/pakono.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="#">Onno Widodo Purbo</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="template-frontend/assets/images/rajif.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="#">Rajif Mahendra</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="template-frontend/assets/images/erry.jpeg" alt="Speaker 3" height="500" width="500" class="img-fluid">
              <div class="details">
                <h3><a href="#">Ery Ricardo</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <br>
              <img src="template-frontend/assets/images/pakoskar.jpeg" alt="Speaker 4" height="500" width="800" class="img-fluid">
              <div class="details">
                <h3><a href="#">Oskar Riandi</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="template-frontend/assets/images/beno.jpg" alt="Speaker 5" width="350" class="img-fluid">
              <div class="details">
                <h3><a href="#">Beno Kunto Pradekso</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="template-frontend/assets/images/yudho.jpg" alt="Speaker 6" width="400" class="img-fluid">
              <div class="details">
                <h3><a href="#">Yudho Giri Sucahyo</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="customer-feedback" id="feedback-section">
      <div class="section-title" data-aos="fade-up">
        <h2>HIMTI</h2>
        <p>Partnership</p>
      </div>
      <div class="row">
        <div class="owl-carousel owl-theme grid-margin">
          <div class="card customer-cards">
            <div class="card-body">
              <div class="text-center">
                <img src="template-frontend/assets/images/permikomnas.png" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted">Perhimpunan Mahasiswa Informatika Dan Komputer Nasional</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">PERMIKOMNAS</h6>
              </div>
            </div>
          </div>
          <div class="card customer-cards">
            <div class="card-body">
              <div class="text-center">
                <img src="template-frontend/assets/images/bangkukelas_ig-02.png" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted"><br>bangkukelas.id</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Bangku[KELAS]</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-details" id="contact-details-section">
      <div class="col-12 col-md-12 col-lg-12 grid-margin text-center">
        <img src="template-frontend/assets/images/HIMTI.png" height="75" width="75" alt="" class="pb-2">
        <p class="text-muted">himti.umt11@gmail.com</p>
        <p class="text-muted">Nanda Aulia Utama +62888-1488-721</p>
        <a href="https://www.facebook.com/HIMTI-UMT-487475981358484"><span class="mdi mdi-facebook"></span></a>
        <a href="https://twitter.com/adiiwinarnoo"><span class="mdi mdi-twitter"></span></a>
        <a href="https://www.instagram.com/himti.umt/"><span class="mdi mdi-instagram"></span></a>
        <a href="https://www.linkedin.com/in/adi-winarno-8b2332217/"><span class="mdi mdi-linkedin"></span></a>
      </div>
    </section>
    <footer class="border-top">
      <p class="text-center text-muted pt-4">Copyright © 2021<a href="#" class="px-1">Kelompok Belajar Web Development HIMTI-UMT</a>.
      </p>
    </footer>
  </div>
  </div>
@endsection