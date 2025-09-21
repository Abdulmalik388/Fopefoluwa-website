@extends('layouts.app')

@section('title', 'Home - Fopefoluwa Foundation')
@section('content')
<main>
    <!-- slider Area Start-->
<div class="slider-area">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('{{ asset('assets/img/hero/slider1.jpg') }}'); background-size:cover; background-position:center;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInUp" data-delay=".6s">Together We<br> Make a Difference</h1>
                            <p data-animation="fadeInUp" data-delay=".8s">Join us in bringing hope, love, and care to those who need it most. Every small act of kindness counts.</p>
                            <!-- Hero-btn -->
                            <div class="hero__btn">
                                <a href="{{ route('donate') }}" class="btn hero-btn mb-10" data-animation="fadeInLeft" data-delay=".8s">Donate Now</a>
                                <a href="{{ route('contact') }}" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                    <i class="flaticon-null"></i>
                                    <p>+234 817 731 8070</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Slider -->
        <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('{{ asset('assets/img/hero/slider2.jpg') }}'); background-size:cover; background-position:center;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInUp" data-delay=".6s">Your Support<br> Brings Smiles</h1>
                            <p data-animation="fadeInUp" data-delay=".8s">With your help, we can provide education, food, and shelter for vulnerable children and families.</p>
                            <!-- Hero-btn -->
                            <div class="hero__btn">
                                <a href="{{ route('donate') }}" class="btn hero-btn mb-10" data-animation="fadeInLeft" data-delay=".8s">Get Involved</a>
                                <a href="{{ route('contact') }}" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                    <i class="flaticon-null"></i>
                                    <p>+234 808 116 8026</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

    <!-- slider Area End-->
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
</div>

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
                <a href="{{ route('about') }}" class="btn">Learn More About Us</a>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <div class="about-font-img d-none d-lg-block">
                        <img src="{{ asset('assets/img/gallery/about2.png') }}" alt="Community Work">
                    </div>
                    <div class="about-back-img">
                        <img src="{{ asset('assets/img/gallery/about1.png') }}" alt="Helping Hands">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- About Law End-->
    <!-- Our Cases Start -->
    <div class="our-cases-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Our Cases you can see</span>
                        <h2>Explore our latest causes that we works </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="assets/img/gallery/case1.png" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Ensure Education For Every Poor Children</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="70"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="assets/img/gallery/case2.png" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Providing Healthy Food For The Children</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="25"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="assets/img/gallery/case3.png" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Supply Drinking Water For  The People</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="50"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Cases End -->
    <!-- Featured_job_start -->
<section class="featured-job-area section-padding30 section-bg2" data-background="{{ asset('assets/img/gallery/section_bg03.png') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                <!-- Section Title -->
                <div class="section-tittle text-center mb-80">
                    <span>Our Activities</span>
                    <h2>We Organize Social Events to Support Communities</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Event 1 -->
            <div class="col-lg-9 col-md-12">
                <div class="single-job-items mb-30">
                    <div class="job-items d-flex align-items-center">
                        <div class="company-img" style="flex:0 0 auto;">
                            <a href="#"><img src="{{ asset('assets/img/gallery/socialEvents1.png') }}" alt="Donation Event" style="max-width:80px; height:auto;"></a>
                        </div>
                        <div class="job-tittle ml-3" style="display:flex; align-items:center;">
                            <div>
                                <a href="#"><h4 style="margin-bottom:0;">Donation is Hope</h4></a>
                                <p style="margin-bottom:0;">Bringing together kind hearts to raise funds and provide support for families in need.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="col-lg-9 col-md-12">
                <div class="single-job-items mb-30">
                    <div class="job-items d-flex align-items-center">
                        <div class="company-img" style="flex:0 0 auto;">
                            <a href="#"><img src="{{ asset('assets/img/gallery/socialEvents2.png') }}" alt="Children Support" style="max-width:80px; height:auto;"></a>
                        </div>
                        <div class="job-tittle ml-3" style="display:flex; align-items:center;">
                            <div>
                                <a href="#"><h4 style="margin-bottom:0;">A Hand for Children</h4></a>
                                <p style="margin-bottom:0;">Supporting children with food, clothes, and learning resources through charity drives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event 3 -->
            <div class="col-lg-9 col-md-12">
                <div class="single-job-items mb-30">
                    <div class="job-items d-flex align-items-center">
                        <div class="company-img" style="flex:0 0 auto;">
                            <a href="#"><img src="{{ asset('assets/img/gallery/socialEvents3.png') }}" alt="Helping Children" style="max-width:80px; height:auto;"></a>
                        </div>
                        <div class="job-tittle ml-3" style="display:flex; align-items:center;">
                            <div>
                                <a href="#"><h4 style="margin-bottom:0;">Help for Children</h4></a>
                                <p style="margin-bottom:0;">Organizing outreach programs to give children hope, happiness, and a brighter future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('donate') }}" class="btn btn-primary">Donate</a>
    </div>
</section>

    <!-- Featured_job_end -->
    <!--? Team Ara Start -->
    <div class="team-area pt-160 pb-160">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <span>What we are doing</span>
                        <h2>Our Expert Volunteer Alwyes ready</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team1.png" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Bruce Roberts</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team2.png" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Robart Rechard</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team3.png" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Brendon Tailor</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team4.png" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Walshr Hasgt</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ara End -->
    <!-- Want To work -->
    <section class="wantToWork-area ">
        <div class="container">
            <div class="wants-wrapper w-padding2  section-bg" data-background="assets/img/gallery/section_bg01.png">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Lets Chenge The World With Humanity</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="{{ route('contact') }}" class="btn white-btn f-right sm-left">Become A Volunteer</a>
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
    <!--? Blog Area Start -->
    <section class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-90">
                        <span>Our recent blog</span>
                        <h2>Latest News from our recent blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog1.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>Creative derector</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog2.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>Creative derector</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
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