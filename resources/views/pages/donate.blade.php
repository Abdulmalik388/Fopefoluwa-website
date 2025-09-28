@extends('layouts.app')

@section('title', 'Donate - Fopefoluwa Foundation')

@section('content')

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center justify-content-center text-center"
        style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
        url('{{ asset('assets/img/hero/donate-bg.jpg') }}') center/cover no-repeat; height: 60vh;">
        <div class="container">
            <h1 class="text-white display-4">Support Fopefoluwa Foundation</h1>
            <p class="text-white-50 mt-3">Your donation makes a difference in changing lives</p>
        </div>
    </section>

    <!-- Donate Section -->
    <section class="donate-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Want to make a donation?</h2>
            <p class="mb-4">Click the button below to reach us on WhatsApp and let us know how you’d like to support.</p>
            
            <a href="https://wa.me/2348069179991?text=Hello,%20I%20am%20from%20the%20Fopefoluwa%20Foundation%20website.%20I%20want%20to%20donate%20to%20the%20foundation."
               class="btn btn-success btn-lg" target="_blank">
                <i class="fab fa-whatsapp"></i> Donate via WhatsApp
            </a>
        </div>
    </section>

@endsection
