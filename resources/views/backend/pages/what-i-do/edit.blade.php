@extends('layouts.backend.app')
@section('title', 'Edit What I Do')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">What I Do</li>
                <li class="breadcrumb-item active">Edit What I Do</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Edit What I Do</h5>
                        </div>

                        <form class="row g-3" method="POST" action="{{ route('what-i-do.update', $what_i_do->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $what_i_do->title }}">
                            </div>

                            <div class="col-md-6">
                                <label for="icon" class="form-label">Image</label>
                                <input type="file" class="form-control" id="icon" name="icon">
                            </div>

                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="5">{!! $what_i_do->description !!}</textarea>
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
