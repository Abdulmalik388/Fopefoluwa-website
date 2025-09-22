@extends('layouts.app')

@section('title', 'About - Fopefoluwa Foundation')
@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>About US</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Services Area Start -->
    <div class="service-area section-padding30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Title -->
                <div class="section-tittle text-center mb-80">
                    <span>What We Do</span>
                    <h2>We Are On A Mission To Change Lives</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Education -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-book"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="{{ route('about') }}">Quality Education</a></h5>
                        <p>We provide learning resources, scholarships, and school supplies to children in underserved communities.</p>
                    </div>
                </div>
            </div>

            <!-- Healthcare -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat active text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-heart"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="{{ route('about') }}">Healthcare Support</a></h5>
                        <p>From medical outreaches to health education, we ensure vulnerable families get access to care and medicine.</p>
                    </div>
                </div>
            </div>

            <!-- Clean Water -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-drop"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="{{ route('about') }}">Clean Water</a></h5>
                        <p>We dig boreholes and provide safe drinking water, reducing the risk of water-borne diseases in rural areas.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row (Optional, for more causes) -->
        <div class="row">
            <!-- Food Relief -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-restaurant"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="{{ route('about') }}">Food Relief</a></h5>
                        <p>We distribute meals and food packs to families facing hunger, especially during emergencies.</p>
                    </div>
                </div>
            </div>

            <!-- Women & Youth Empowerment -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-team"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="{{ route('about') }}">Empowerment</a></h5>
                        <p>We run skill acquisition programs to empower women and youth, creating sustainable income opportunities.</p>
                    </div>
                </div>
            </div>

            <!-- Emergency Response -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-lifebuoy"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="{{ route('about') }}">Emergency Response</a></h5>
                        <p>We provide rapid support and relief materials to victims of natural disasters and crises.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div
    <!-- Services Area End -->
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
    <div class="container">
        <div class="row">
            <!-- Text Section -->
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Title -->
                    <div class="section-tittle mb-35">
                        <span>About Our Foundation</span>
                        <h2>We Are On A Mission To Help The Helpless</h2>
                    </div>
                    <p>
                        Our foundation is dedicated to improving lives by providing access to education, healthcare, 
                        clean water, and empowerment opportunities for vulnerable communities. 
                        We believe that every individual deserves dignity, hope, and a chance to thrive.
                    </p>
                    <p>
                        Over the years, we have supported families through relief programs, built community-driven 
                        projects, and empowered women and youth with the skills to create sustainable futures. 
                        Together, we are making a lasting difference—one life at a time.
                    </p>
                </div>
                <a href="{{ route('about') }}" class="btn"> About Us</a>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <div class="about-font-img d-none d-lg-block">
                        <img src="{{ asset('assets/img/gallery/about2.png') }}" alt="Community Work">
                    </div>
                    <div class="about-back-img">
                        <img src="{{ asset('assets/img/gallery/food-3.jpg') }}" style="height: 500px;width: 400px; border-radius: 8px; object-fit: cover;" alt="Helping Hands">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- About Law End-->
    <!-- Want To work -->
<section class="wantToWork-area">
    <div class="container">
        <div class="wants-wrapper w-padding2 section-bg" data-background="{{ asset('assets/img/gallery/section_bg01.png') }}">
            <div class="row align-items-center justify-content-between">
                <!-- Text -->
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Together, We Can Change the World with Humanity</h2>
                        <p>Join our mission to bring hope, kindness, and opportunities to those who need it most. 
                           Every helping hand makes a difference.</p>
                    </div>
                </div>
                <!-- Button -->
                <div class="col-xl-3 col-lg-3 col-md-4 text-md-right text-center">
                    <a href="{{ route('contact') }}" class="btn white-btn sm-left">Become a Volunteer</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Want To work End -->
    <!--? Testimonial Start -->
   <div class="testimonial-area testimonial-padding">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-xl-8 col-lg-8 col-md-10">
        <div class="single-testimonial text-center shadow-lg p-4 rounded bg-white">
          <div class="testimonial-caption">
            <!-- founder -->
            <div class="testimonial-founder">
              <div class="founder-img mb-4">
                <img src="assets/img/gallery/testimonial.png" alt="Founder" class="rounded-circle" style="width:100px;height:100px;object-fit:cover;">
                <h4 class="mt-3 mb-0">Margaret Lawson</h4>
                <p class="text-muted">Creative Director</p>
              </div>
            </div>
            <div class="testimonial-top-cap">
              <p class="fst-italic" style="font-size: 18px; line-height: 1.6; color: #555;">
                “I am at an age where I just want to be fit and healthy.  
                Our bodies are our responsibility!  
                Start caring for your body and it will care for you.  
                Eat clean and workout hard.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Testimonial End -->

    <!--? Count Down Start -->
    <div class="count-down-area pt-25 section-bg" data-background="assets/img/gallery/section_bg02.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" >
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">6,200</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">80</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Fund Raised</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    </main>
    @endsection