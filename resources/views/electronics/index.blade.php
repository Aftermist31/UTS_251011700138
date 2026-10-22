@extends('layouts.app')

@section('title', 'Katalog Produk | DYNARA')

@section('styles')
<style>
    .hero {
        background: linear-gradient(135deg, #2A0001, #581C24);
        color: white;
        border-radius: 20px;
        padding: 45px 30px;
    }

    .hero p {
        color: #F7E6E8;
    }

    .section-title {
        color: #2A0001;
        font-weight: bold;
    }

    .product-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        height: 100%;
        transition: transform 0.2s;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-image {
        width: 100%;
        height: 220px;
        object-fit: contain;
        object-position: center;
        background-color: #FFFFFF;
        padding: 20px;
        display: block;
    }

    .product-card .card-body {
        display: flex;
        flex-direction: column;
    }

    .category-label {
        display: inline-block;
        background-color: #F3E0E3;
        color: #2A0001;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        align-self: flex-start;
    }

    .product-name {
        color: #2A0001;
        font-size: 17px;
        font-weight: bold;
    }

    .product-price {
        color: #2A0001;
        font-weight: bold;
        font-size: 18px;
        margin-top: auto;
    }

    .btn-dynara {
        background-color: #2A0001;
        color: white;
        border-radius: 8px;
        padding: 9px 15px;
    }

    .btn-dynara:hover {
        background-color: #4A1115;
        color: white;
    }
</style>
@endsection

@section('content')
<div class="container py-4 py-md-5">

    <section class="hero mb-5">
        <p class="text-uppercase small mb-2">Elegant Technology for Everyday Life</p>
        <h1 class="fw-bold display-5">Discover Your Style.</h1>
        <p class="mb-0">
            Temukan perangkat elektronik yang melengkapi gaya dan keseharianmu.
        </p>
    </section>

    <div class="mb-4">
        <h2 class="section-title">Our Collection</h2>
        <p class="text-secondary">Pilihan elektronik favorit dari DYNARA.</p>
    </div>

    <div class="row g-4" id="koleksi">
        @forelse ($electronics as $item)
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <div class="card product-card shadow-sm">

                    <img
                        src="{{ asset('assets/images/' . $item->image) }}"
                        alt="{{ $item->name }}"
                        class="product-image"
                    >

                    <div class="card-body p-3">
                        <span class="category-label mb-3">
                            {{ $item->category }}
                        </span>

                        <h5 class="product-name mb-2">
                            {{ $item->name }}
                        </h5>

                        <p class="text-secondary small mb-3">
                            {{ $item->brand }}
                        </p>

                        <p class="product-price mb-3">
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </p>

                        <a
                            href="{{ route('electronics.show', $item->id) }}"
                            class="btn btn-dynara w-100"
                        >
                            Lihat Detail
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p>Belum ada produk yang tersedia.</p>
            </div>
        @endforelse
    </div>

</div>
@endsection