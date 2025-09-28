@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative text-white py-5 mb-5">
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center mx-auto">
                <h1 class="display-4 fw-bold mb-3">Meet Our Team</h1>
                <p class="lead mb-0">
                    Our dedicated team works tirelessly to bring positive change 
                    and support our community through the Fopefoluwa Foundation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Members Grid -->
<div class="container">
    <div class="row g-4 justify-content-center">
        @forelse($team as $member)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center p-3 team-card">
                <div class="mx-auto mb-3 position-relative" style="width: 180px; height: 180px;">
                    <img src="{{ asset($member->image) }}"
                         alt="{{ $member->name }}"
                         class="rounded-circle border border-4 border-primary shadow"
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h5 class="fw-bold mt-2">{{ $member->name }}</h5>
                <p class="text-muted mb-0">{{ $member->post }}</p>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p class="text-muted">No team members added yet.</p>
        </div>
        @endforelse
    </div>

    <!-- Back Home Button -->
    <div class="text-center mt-5">
        <a href="{{ route('home') }}" class="btn btn-outline-primary">
            ← Back to Home
        </a>
    </div>
</div>

<!-- Custom Styles -->
@push('styles')
<style>
.hero-section {
    background: linear-gradient(90deg, #007bff 0%, #6c63ff 100%);
    overflow: hidden;
    min-height: 350px;
}
.team-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px;
}
.team-card:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 0 12px 40px rgba(0,0,0,0.15);
}
</style>
@endpush
@endsection
