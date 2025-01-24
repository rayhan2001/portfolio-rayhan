@extends('layouts.backend.app')
@section('title', 'Service Details')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Service</li>
                <li class="breadcrumb-item active">Service Details</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Service Details</h5>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Title</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $service->title }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Type</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $service->type }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Price</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $service->price }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Description</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
