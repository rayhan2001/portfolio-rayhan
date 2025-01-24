@extends('layouts.backend.app')
@section('title', 'About Us Details')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">About Us</li>
                <li class="breadcrumb-item active">About Us Details</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">About Us Details</h5>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Bio</label>
                            </div>

                            <div class="col-md-8">
                                <p>{!! $aboutUs->bio !!}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Complete Project</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $aboutUs->project_completed }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Work Experience</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $aboutUs->year_of_experience }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Image</label>
                            </div>

                            <div class="col-md-8">
                                <img src="{{ asset('uploads/about-us/' . $aboutUs->image) }}" alt="..." width="50px"
                                    height="50px" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
