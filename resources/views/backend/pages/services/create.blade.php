@extends('layouts.backend.app')
@section('title', 'Add Service')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Services</li>
                <li class="breadcrumb-item active">Add Service</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Add Service</h5>
                        </div>

                        <form class="row g-3" method="POST" action="{{ route('service.store') }}">
                            @csrf
                            <div class="col-md-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="col-md-4">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-select" id="type" name="type">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Per Hour">Per Hour</option>
                                    <option value="Per Month">Per Month</option>
                                    <option value="Per Year">Per Year</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control error" id="price" name="price">
                            </div>

                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
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
