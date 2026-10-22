@extends('layouts.app')

@section('title', $electronic->name . ' | DYNARA')

@section('styles')
<style>
    .back-link {
        color: #2A0001;
        text-decoration: none;
        font-weight: 500;
    }

    .back-link:hover {
        color: #7A343B;
    }

    .detail-card {
        background-color: white;
        border: none;
        border-radius: 20px;
        overflow: hidden;
    }

    .detail-image {
        width: 100%;
        height: 400px;
        object-fit: contain;
        object-position: center;
        padding: 25px;
        background-color: white;
    }

    .category-label {
        display: inline-block;
        background-color: #F3E0E3;
        color: #2A0001;
        padding: 7px 14px;
        border-radius: 20px;
        font-size: 13px;
    }

    .product-price {
        color: #2A0001;
        font-size: 28px;
        font-weight: bold;
    }

    .btn-dynara {
        background-color: #2A0001;
        color: white;
        border-radius: 8px;
        padding: 10px 22px;
    }

    .btn-dynara:hover {
        background-color: #4A1115;
        color: white;
    }
</style>
@endsection

@section('content')
<div class="container py-4 py-md-5">

    <a href="{{ route('electronics.index') }}" class="back-link">
        &larr; Kembali ke Katalog
    </a>

    <div class="card detail-card shadow-sm mt-4">
        <div class="row g-0 align-items-center">

            <div class="col-12 col-md-6">
                <img
                    src="{{ asset('assets/images/' . $electronic->image) }}"
                    alt="{{ $electronic->name }}"
                    class="detail-image"
                >
            </div>

            <div class="col-12 col-md-6">
                <div class="card-body p-4 p-lg-5">

                    <span class="category-label">
                        {{ $electronic->category }}
                    </span>

                    <h1 class="fw-bold mt-3 mb-2">
                        {{ $electronic->name }}
                    </h1>

                    <p class="text-secondary mb-4">
                        Brand: {{ $electronic->brand }}
                    </p>

                    <hr>

                    <h6 class="fw-bold">Deskripsi Produk</h6>

                    <p class="text-secondary">
                        {{ $electronic->specs }}
                    </p>

                    <p class="product-price mt-4">
                        Rp {{ number_format($electronic->price, 0, ',', '.') }}
                    </p>

                    <a
                        href="{{ route('electronics.index') }}"
                        class="btn btn-dynara mt-2"
                    >
                        Kembali Belanja
                    </a>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection