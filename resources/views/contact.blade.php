@extends('layouts.app')

@section('title', 'Contact | DYNARA')

@section('content')
<div class="container py-5">
    <section class="text-center p-5 rounded-4"
        style="background: linear-gradient(135deg, #2A0001, #581C24); color: white;">
        <p style="color: #D9A6AD; letter-spacing: 3px;">GET IN TOUCH</p>
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p>Ada pertanyaan? Kami senang bisa membantu.</p>
    </section>

    <div class="row justify-content-center py-5">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <h3 class="fw-bold mb-4" style="color: #2A0001;">
                    Hubungi DYNARA
                </h3>

                <p class="text-secondary">
                    Untuk pertanyaan mengenai katalog dan informasi produk,
                    kamu dapat menghubungi kami melalui kanal berikut.
                </p>

                <div class="p-3 rounded-3 mb-3" style="background: #F7F1ED;">
                    <strong>Nama Toko</strong>
                    <p class="mb-0">DYNARA Electronic Store</p>
                </div>

                <div class="p-3 rounded-3 mb-3" style="background: #F7F1ED;">
                    <strong>Email</strong>
                    <p class="mb-0">Informasi kontak email belum ditentukan.</p>
                </div>

                <div class="p-3 rounded-3" style="background: #F7F1ED;">
                    <strong>Jam Layanan</strong>
                    <p class="mb-0">Informasi jam layanan belum ditentukan.</p>
                </div>

                <a href="{{ route('electronics.index') }}"
                   class="btn mt-4"
                   style="background: #2A0001; color: white;">
                    Kembali ke Koleksi
                </a>
            </div>
        </div>
    </div>
</div>
@endsection