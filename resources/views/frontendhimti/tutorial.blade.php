@extends('frontendhimti.template')

@section('content')
    
<header id="header-section">
  <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="template-frontend/assets/images/HIMTI.png" alt="" eight="h75" width="75">
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
            <a class="nav-link" href="/tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sharing">Sharing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Tutorial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dtacara">Acara</a>
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
<div class="content-wrapper">
  <div class="container">
    <section id="team" class="team">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>HIMTI</h2>
          <p>Tutorial Youtube</p>
        </div>
        <div class="features-row section-bg" id="advanced-features">
          <div class="container" id="bg">
            <div class="row">
              <div class="col-12">
                <iframe class="advanced-feature-img-right wow fadeInRight" width="555" height="371"
                  src="https://www.youtube.com/embed/iYG29Ng91Bc" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <div class="wow fadeInLeft">
                  <h2>Form Element dan Input Element Type Text (Textbox)</h2>
                  <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
                  <p class="wow fadeInLeft" data-wow-duration="0.5s">Penjelasan singkat maksud dari video</p>
                  <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s"
                    data-wow-duration="0.5s"></i>
                  <p class="wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="0.5s">Tools apa saja yang
                    digunakan</p>
                  <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4"
                    data-wow-duration="0.5s"></i>
                  <p class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.5s">Links pembelajaran yang
                    berhubungan dengan video.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="features-row mt-5" id="advanced-features">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <iframe class="advanced-feature-img-left" width="555" height="371"
                  src="https://www.youtube.com/embed/rnxiWZRRKB0" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <div class="wow fadeInRight">
                  <h2>Acak Angka Doorprize dengan HTML Dan jQuery</h2>
                  <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
                  <p class="wow fadeInRight" data-wow-duration="0.5s">Penjelasan singkat maksud dari video</p>
                  <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s"
                    data-wow-duration="0.5s"></i>
                  <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s">Tools apa saja yang digunakan</p>
                  <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4"
                    data-wow-duration="0.5s"></i>
                  <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Links pembelajaran yang berhubungan dengan video</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="features-row section-bg mt-5" id="advanced-features">
          <div class="container" id="bg">
            <div class="row">
              <div class="col-12">
                <iframe class="advanced-feature-img-right wow fadeInRight" width="555" height="371"
                  src="https://www.youtube.com/embed/vt6x8t_mY9A" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <div class="wow fadeInLeft">
                  <h2>Alur System React Js dan Membuat Component</h2>
                  <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
                  <p class="wow fadeInLeft" data-wow-duration="0.5s">Penjelasan singkat maksud dari video</p>
                  <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s"
                    data-wow-duration="0.5s"></i>
                  <p class="wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="0.5s">Tools apa saja yang
                    digunakan</p>
                  <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4"
                    data-wow-duration="0.5s"></i>
                  <p class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.5s">Links pembelajaran yang
                    berhubungan dengan video</p>
                </div>
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
  