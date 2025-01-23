@extends('layouts.backend.app')
@section('title', 'Edit Project')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Projects</li>
                <li class="breadcrumb-item active">Edit Project</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Edit Project</h5>
                        </div>

                        <form class="row g-3" method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
                            </div>

                            <div class="col-md-4">
                                <label for="short_description" class="form-label">Short Description</label>
                                <input type="text" class="form-control error" id="short_description" name="short_description" value="{{ $project->short_description }}">
                            </div>

                            <div class="col-md-4">
                                <label for="client_name" class="form-label">Client Name</label>
                                <input type="text" class="form-control" id="client_name" name="client_name" value="{{ $project->client_name }}">
                            </div>

                            <div class="col-md-4">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    <option selected disabled value="">Choose...</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $project->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="live_link" class="form-label">Live Link</label>
                                <input type="url" class="form-control" id="live_link" name="live_link" value="{{ $project->live_link }}">
                            </div>

                            <div class="col-md-4">
                                <label for="iamge" class="form-label">Image</label>
                                <input type="file" class="form-control" id="iamge" name="image">
                            </div>

                            <div class="col-md-6">
                                <label for="technologies" class="form-label">Technologies</label>
                                <textarea class="form-control" name="technologies" id="technologies" rows="5">{!! $project->technologies !!}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="tools" class="form-label">Tools</label>
                                <textarea class="form-control" name="tools" id="tools" rows="5">{!! $project->tools !!}</textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="5">{!! $project->description !!}</textarea>
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
