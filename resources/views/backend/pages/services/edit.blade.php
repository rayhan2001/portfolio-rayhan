@extends('layouts.backend.app')
@section('title', 'Edit Service')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Service</li>
                <li class="breadcrumb-item active">Edit Service</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Edit Service</h5>
                        </div>

                        <form class="row g-3" method="POST" action="{{ route('service.update', $service->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
                            </div>

                            <div class="col-md-4">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-select" id="type" name="type">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Per Hour" {{ $service->type == 'Per Hour' ? 'selected' : '' }}>Per Hour</option>
                                    <option value="Per Month" {{ $service->type == 'Per Month' ? 'selected' : '' }}>Per Month</option>
                                    <option value="Per Year" {{ $service->type == 'Per Year' ? 'selected' : '' }}>Per Year</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control error" id="price" name="price" value="{{ $service->price }}">
                            </div>

                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3">{!! $service->description !!}</textarea>
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
