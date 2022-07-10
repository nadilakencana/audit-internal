@extends('frontendhimti.template')

@section('content')
<header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
      <div class="container">
        <div class="navbar-brand-wrapper d-flex w-100">
          <img src="assets/images/HIMTI.png" alt="" eight="h75" width="75">
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
                <img src="images/Group2.svg" alt="">
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
              <a class="nav-link" href="/dtacara">Acara</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#header-section">Klinik</a>
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
      <section id="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Klinik Komputer HIMTI</h3>
              <h6 class="cta-text">Klinik Komputer HIMTI merupakan UMKM yang bergerak dibidang jasa, mulai dari
                service laptop sampai pembuatan website.</h6><br>
              <p class="cta-text"><b>Jika anda membutuhkan jasa kami, silahkan isi form yang sudah disediakan.</b></p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#contact">Jelaskan yang Anda Butuhkan</a>
            </div>
          </div>
        </div>
      </section>
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>HIMTI</h2>
            <p>Klinik Komputer</p>
          </div>
          <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="info">
                <div class="">
                  <i class=""></i>
                  <h4>Service</h4>
                  <p>Laptop</p>
                </div>
                <div class="">
                  <i class=""></i>
                  <h4>Upgrade</h4>
                  <p>Software dan Hardware</p>
                </div>
                <div class="">
                  <i class=""></i>
                  <h4>Pembuatan</h4>
                  <p>Website, Mobile App dan CV</p>
                </div>
                <img src="template-frontend/assets/images/himti-klinik.png" alt="" width=100%; height=200px;>
              </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Merek Laptop</label>
                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Type Laptop</label>
                    <input type="email" class="form-control" name="email" id="email" data-rule="email"
                      data-msg="Please enter a valid email" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">No. HP</label>
                  <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                    data-msg="Please enter at least 8 chars of subject" />
                </div>
                <div class="form-group">
                  <label for="name">Detail Kerusakan</label>
                  <textarea class="form-control" name="message" rows="10" data-rule="required"
                    data-msg="Please write something for us"></textarea>
                </div>
                <div class="form-group">
                  <label for="name" style="color: blue;">Dengan keterbatasan SDM yang kami miliki, mohon tunggu 1x24
                    jam, team kami akan menguhubungi anda kembali!</label>
                </div>
                <div class="text-center"><button type="submit">Kirim</button></div>
              </form>
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