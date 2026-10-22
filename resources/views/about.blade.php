@extends('layouts.app')

@section('title', 'About Us | DYNARA')

@section('content')
<div class="container py-5">

    <section class="text-center p-5 rounded-4 mb-5"
        style="background: linear-gradient(135deg, #2A0001, #581C24); color: white;">

        <p style="color: #D9A6AD; letter-spacing: 3px;">
            OUR STORY
        </p>

        <h1 class="display-4 fw-bold">About DYNARA</h1>

        <p class="mb-0">Elegant Technology for Everyday Life.</p>
    </section>

    <section class="row g-4 align-items-center">

        <div class="col-md-6">
            <h2 class="fw-bold mb-3" style="color: #2A0001;">
                Technology Meets Style
            </h2>

            <p>
                DYNARA adalah konsep toko elektronik yang menghadirkan
                pilihan perangkat teknologi dengan perhatian pada fungsi,
                desain, dan gaya hidup sehari-hari.
            </p>

            <p>
                Kami ingin membantu pengunjung menjelajahi pilihan produk
                melalui katalog yang informatif dan mudah digunakan.
            </p>
        </div>

        <div class="col-md-6">
            <div class="p-4 rounded-4 mb-3" style="background: #F3E0E3;">
                <h4 class="fw-bold" style="color: #2A0001;">
                    Our Vision
                </h4>

                <p class="mb-0">
                    Menyajikan pengalaman menjelajahi produk elektronik
                    yang nyaman dan menarik.
                </p>
            </div>

            <div class="p-4 rounded-4" style="background: #F7F1ED; border: 1px solid #D9A6AD;">
                <h4 class="fw-bold" style="color: #2A0001;">
                    Our Mission
                </h4>

                <p class="mb-0">
                    Menampilkan informasi produk dengan jelas melalui
                    website yang mudah digunakan.
                </p>
            </div>
        </div>

    </section>

    <div class="text-center mt-5">
        <a href="{{ route('electronics.index') }}"
            class="btn px-4 py-2"
            style="background: #2A0001; color: white;">
            Lihat Koleksi
        </a>
    </div>

</div>
@endsection