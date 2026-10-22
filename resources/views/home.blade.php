@extends('layouts.app')

@section('title', 'Home | DYNARA')

@section('styles')
<style>
    .home-hero {
        background: linear-gradient(135deg, #2A0001, #581C24);
        color: white;
        border-radius: 24px;
        padding: 70px 35px;
    }

    .home-hero p {
        color: #F3E0E3;
    }

    .home-label {
        color: #D9A6AD;
        letter-spacing: 3px;
        font-size: 13px;
        font-weight: bold;
    }

    .home-button {
        background: #D9A6AD;
        color: #2A0001;
        border: none;
        padding: 12px 25px;
        font-weight: bold;
        border-radius: 8px;
        text-decoration: none;
        display: inline-block;
    }

    .home-button:hover {
        background: #F7F1ED;
        color: #2A0001;
    }

    .feature-card {
        border: none;
        border-radius: 16px;
        background: white;
        height: 100%;
    }
</style>
@endsection

@section('content')
<div class="container py-4 py-md-5">

    <section class="home-hero mb-5">
        <p class="home-label">WELCOME TO DYNARA</p>

        <h1 class="display-3 fw-bold mb-3">
            Technology Meets Your Style.
        </h1>

        <p class="fs-5 mb-4">
            Temukan perangkat elektronik yang cocok dengan gaya
            dan kebutuhan sehari-harimu.
        </p>

        <a href="{{ route('electronics.index') }}" class="home-button">
            Jelajahi Koleksi &rarr;
        </a>
    </section>

    <section class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="feature-card shadow-sm p-4">
                <h4 class="fw-bold">Curated Collection</h4>
                <p class="text-secondary mb-0">
                    Pilihan produk elektronik dengan beragam desain
                    untuk melengkapi keseharian.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card shadow-sm p-4">
                <h4 class="fw-bold">Style & Function</h4>
                <p class="text-secondary mb-0">
                    Perpaduan tampilan menarik dan fungsi dalam
                    satu pengalaman menjelajahi produk.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card shadow-sm p-4">
                <h4 class="fw-bold">Easy Exploration</h4>
                <p class="text-secondary mb-0">
                    Jelajahi katalog dan buka detail untuk mengetahui
                    informasi setiap produk.
                </p>
            </div>
        </div>
    </section>

    <section class="text-center py-4">
        <h2 class="fw-bold" style="color: #2A0001;">Meet DYNARA</h2>

        <p class="text-secondary mx-auto my-3" style="max-width: 650px;">
            DYNARA menghadirkan pengalaman katalog elektronik
            dengan tampilan elegan, sederhana, dan mudah dijelajahi.
        </p>

        <a href="{{ route('about') }}" class="btn btn-outline-dark">
            Tentang Kami
        </a>

        <a href="{{ route('contact') }}"
           class="btn ms-2"
           style="background: #2A0001; color: white;">
            Hubungi Kami
        </a>
    </section>

</div>
@endsection