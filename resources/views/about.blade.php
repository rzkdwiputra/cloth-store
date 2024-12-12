@extends('layouts.app')
@section('content')
<style>
    #header {
      padding-top: 8px;
      padding-bottom: 8px;
    }

    .logo__image {
      max-width: 220px;
    }
  </style>
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
      <div class="mw-930">
        <h2 class="page-title">About US</h2>
      </div>

      <div class="about-us__content pb-5 mb-5">
        <p class="mb-5">
          <img loading="lazy" class="w-100 h-auto d-block" src="assets/images/about/about-1.jpg" alt="" />
        </p>
        <div class="mw-930">
          <h3 class="mb-4">OUR STORY</h3>
          <p class="fs-6 fw-medium mb-4">Kami merupakan team yang menggerakan market place untuk menjual barang-barang yang bergerak dalam bidang fashion, kami menjual barang retail dari berbagai brand fashion. </p>
          <p class="mb-4">Kami menyediakan barang fashion seperti baju,jaket,celana,blazer dan mmasih banyak lagi dari berbagai style fashion dari berbagai brand.</p>
          <div class="row mb-3">
            <div class="col-md-6">
              <h5 class="mb-3">Our Mission</h5>
              <p class="mb-3">Kami berusaha memenuhi keinginan konsumen dan menyediakan service yang sangat ramah untuk konsumen. Kami berusaha mungkin menyediakan barang-barang yang langka dari brand terkenal</p>
            </div>
            <div class="col-md-6">
              <h5 class="mb-3">Our Vision</h5>
              <p class="mb-3">Visi kami pelanggan puas dan bisa mencari barang fashion impian mereka dengan bantuan dan pelayanan yang sangat memuaskan</p>
            </div>
          </div>
        </div>
        <div class="mw-930 d-lg-flex align-items-lg-center">
          <div class="image-wrapper col-lg-6">
            <img class="h-auto" loading="lazy" src="assets/images/about/about-1.jpg" width="450" height="500" alt="">
          </div>
          <div class="content-wrapper col-lg-6 px-lg-4">
            <h5 class="mb-3">The Company</h5>
            <p>Perusahaan kami bergerak dalam bidang fashion. Kami lebih mengutamakan brand-brand yang terkenal dan barang yang langka. Perusahaan kami bergerak dalam bidang retail dimana kami menjual barang oiriginal dalam kualitas baik yang kami dapatkan dari berbagai negara dan kami masukan ke dalam negeri</p>
          </div>
        </div>
      </div>
    </section>


  </main>
@endsection