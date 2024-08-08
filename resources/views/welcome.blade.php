@extends('layout')

@section('title', 'Selamat Datang di GradWork')

@section('additional_styles')
<style>
    .hero {
        background: linear-gradient(90deg, rgba(0,123,255,1) 0%, rgba(72,202,228,1) 100%);
        color: white;
        padding: 90px 0;
        text-align: center;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .hero img {
        max-width: 400px;
        border-radius: 15px;
        margin-right: 30px;
    }
    .hero h1 {
        font-size: 2.0rem;
        margin-bottom: 50px; 
        color: yellow;
        font-weight: bold;
        text-align: left;
    }
    .hero h1 span {
        font-weight: bold;
        display: block;
        text-align: left;
    }
    .hero p {
        font-size: 1.2rem;
        margin-bottom: 30px; 
        text-align: left;
    }
    .partners {
        padding: 50px 0;
        text-align: center;
        background-color: #052055;
        color: white;
        font-weight:bold;
    }
    .partners h2 {
        margin-bottom: 30px;
        font-weight: bold;
    }
    .partner-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        color: white;
    }
    .partner-logo svg {
        width: 24px; 
    }
    .partner-logo-text {
        color: white; 
    }
    .partner-logos {
        display: flex;
        justify-content: center;
        gap: 30px;
    }
    .join-us, .find-worker {
        padding: 50px 0;
    }
    .join-us img, .find-worker img {
        width: 100%;
        max-width: 350px;
        border-radius: 15px;
    }
    .join-us .text-container, .find-worker .text-container {
        text-align: left;
    }
    .join-us .text-container h2, .find-worker .text-container h2 {
        font-weight: bold;
    }
    .join-us .btn, .find-worker .btn {
        display: block;
        width: 100%;
        max-width: 200px;
        margin-top: 20px;
    }
    .testimonials {
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: center;
    }
    .testimonials h2 {
        font-weight: bold;
    }
    .testimonial-list {
        display: flex;
        justify-content: center;
        gap: 20px;
        overflow-x: auto;
        padding: 10px;
    }
    .testimonial {
        width: 200px;
        text-align: center;
        flex: 0 0 auto;
    }
    .testimonial img {
        width: 100%;
        border-radius: 50%;
        margin-bottom: 10px;
    }
    .stars {
        color: #ffc107;
    }
</style>
@endsection

@section('content')
    <section class="hero d-flex flex-column align-items-center">
        <div class="container d-flex flex-row align-items-center justify-content-center">
            <div class="col-md-6">
                <div>
                    <h1>Hi! Selamat Datang Di GradWork</h1>
                    <p>Website penyedia pekerja dari mahasiswa/i terbaik kampus yang ada di Kota Cirebon. Juga website penyedia lapangan pekerjaan bagi Mahasiswa/i Kampus yang ada di Kota Cirebon.</p>
                    <div class="d-flex justify-content-start align-items-center">
                    <a href="#" class="btn btn-primary me-2">Daftar sebagai mahasiswa</a>
                    <a href="#" class="btn btn-secondary">Daftar sebagai Klien</a>


                    </div>
                </div>
            </div>
            <div class="col-md-6 align-self-end text-end">
                <img src="{{ asset('asset/images/gambar1.png') }}" alt="Welcome Image" style="max-width: 70%; height: auto;">
            </div>
        </div>
    </section>

    <section class="partners text-center">
        <div class="container">
            <h2>Our Partner</h2>
            <div class="partner-logos d-flex justify-content-center">
                <div class="partner-logo mx-3">
                    <i data-feather="smile" class="icon-smile"></i>
                    <span class="partner-logo-text">Logo Kampus</span>
                </div>
                <div class="partner-logo mx-3">
                    <i data-feather="smile" class="icon-smile"></i>
                    <span class="partner-logo-text">Logo Perusahaan</span>
                </div>
                <div class="partner-logo mx-3">
                    <i data-feather="smile" class="icon-smile"></i>
                    <span class="partner-logo-text">Logo Kampus</span>
                </div>
            </div>
        </div>
    </section>

    <section class="join-us text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('asset/images/gambar2.jpg') }}" alt="Person Image">
                </div>
                <div class="col-md-6 text-container">
                    <h2>Gabung Bersama Kami!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. In ut accumsan sed facilisis sit commodo amet. Elementum id non viverra magna eleifend at metus lacus nunc</p>
                    <a href="#" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="find-worker text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-container">
                    <h2>Cari Pekerja Profesional</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. In ut accumsan sed facilisis sit commodo amet. Elementum id non viverra magna eleifend at metus lacus nunc</p>
                    <a href="#"class="btn btn-primary">Cari</a>
                </div>
                <div class="col-md-6">
                <img src="{{ asset('asset/images/gambar3.jpg') }}" alt="Person Image">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials text-center">
        <div class="container">
            <h2>Testimoni Pengguna GradWork</h2>
            <div class="testimonial-list d-flex justify-content-start">
                <div class="testimonial">
                    <img src="path/to/image.jpg" alt="Person Image">
                    <h3>Sahbana</h3>
                    <p>"Pengerjaan cepat, saya suka saya suka"</p>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial">
                    <img src="path/to/image.jpg" alt="Person Image">
                    <h3>Victoria</h3>
                    <p>"Pengerjaan cepat, saya suka saya suka"</p>
                    <div class="stars">★★★★☆</div>
                </div>
                <div class="testimonial">
                    <img src="path/to/image.jpg" alt="Person Image">
                    <h3>Hanabi</h3>
                    <p>"Pengerjaan cepat, saya suka saya suka"</p>
                    <div class="stars">★★★★☆</div>
                </div>
                <div class="testimonial">
                    <img src="path/to/image.jpg" alt="Person Image">
                    <h3>Alucard</h3>
                    <p>"Pengerjaan cepat, saya suka saya suka"</p>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial">
                    <img src="path/to/image.jpg" alt="Person Image">
                    <h3>Angela</h3>
                    <p>"Sangat membantu dalam mencari pekerja"</p>
                    <div class="stars">★★★★☆</div>
                </div>
                <div class="testimonial">
                    <img src="path/to/image.jpg" alt="Person Image">
                    <h3>Johnson</h3>
                    <p>"Rekomendasi terbaik untuk mahasiswa"</p>
                    <div class="stars">★★★★★</div>
                </div>
            </div>
        </div>
    </section>
@endsection
