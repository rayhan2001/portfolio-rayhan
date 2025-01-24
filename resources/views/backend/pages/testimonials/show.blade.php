@extends('layouts.backend.app')
@section('title', 'Testimonial Details')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Testimonials</li>
                <li class="breadcrumb-item active">Testimonial Details</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Testimonial Details</h5>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Title</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $testimonial->title }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Client Name</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $testimonial->client_name }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Client Country</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $testimonial->client_country }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Ratting</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $testimonial->ratting }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Short Description</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $testimonial->short_description }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Image</label>
                            </div>

                            <div class="col-md-8">
                                <img src="{{ asset('uploads/testimonial/' . $testimonial->image) }}" alt="..." width="50px"
                                    height="50px" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
