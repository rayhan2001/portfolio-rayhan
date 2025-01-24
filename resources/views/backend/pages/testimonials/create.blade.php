@extends('layouts.backend.app')
@section('title', 'Add Testimonial')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Testimonials</li>
                <li class="breadcrumb-item active">Add Testimonial</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Add Testimonial</h5>
                        </div>

                        <form class="row g-3" method="POST" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="col-md-4">
                                <label for="client_name" class="form-label">Client Name</label>
                                <input type="text" class="form-control error" id="client_name" name="client_name">
                            </div>

                            <div class="col-md-4">
                                <label for="client_country" class="form-label">Client Country</label>
                                <input type="text" class="form-control error" id="client_country" name="client_country">
                            </div>

                            <div class="col-md-4">
                                <label for="ratting" class="form-label">Ratting</label>
                                <input type="number" class="form-control error" id="ratting" name="ratting">
                            </div>

                            <div class="col-md-4">
                                <label for="short_description" class="form-label">Short Description</label>
                                <input type="text" class="form-control error" id="short_description" name="short_description">
                            </div>

                            <div class="col-md-4">
                                <label for="iamge" class="form-label">Image</label>
                                <input type="file" class="form-control" id="iamge" name="image">
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
