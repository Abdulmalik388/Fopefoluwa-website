@extends('layouts.app')
@section('title', 'Contact - Fopefoluwa Foundation')
@section('content')

<!-- Hero Section -->
<div class="slider-area2">
    <div class="slider-height2 hero-overly d-flex align-items-center" style="background-image: url('assets/img/hero/contact-hero.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="hero-cap">
                        <h2>Contact Us</h2>
                        <p class="text-white">Let’s connect and make a difference together</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="contact-section section-padding30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <!-- Section Title -->
                <div class="section-tittle mb-50">
                    <span>Get in Touch</span>
                    <h2>We’d Love to Hear From You</h2>
                    <p>If you’d like to partner with us, volunteer, or support our foundation, reach out directly on WhatsApp.</p>
                </div>

                <!-- WhatsApp Contact -->
                <a href="https://wa.me/2348069179991?text=Hello%20am%20from%20Fopefoluwa%20Foundation%20website"
                   class="btn btn-success " target="_blank">
                   
                   <i class="fab fa-whatsapp"></i> Chat With Us on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
