@extends('layouts.backend.app')
@section('title', 'Edit About Us')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">About Us</li>
                <li class="breadcrumb-item active">Edit About Us</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Edit About Us</h5>
                        </div>

                        <form class="row g-3" method="POST" action="{{ route('about-us.update', $aboutUs->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label for="experience" class="form-label">Work Experience</label>
                                <input type="number" class="form-control" id="experience" name="year_of_experience" value="{{ $aboutUs->year_of_experience }}">
                            </div>

                            <div class="col-md-4">
                                <label for="completed_projects" class="form-label">Project Complete</label>
                                <input type="number" class="form-control error" id="completed_projects" name="project_completed" value="{{ $aboutUs->project_completed }}">
                            </div>

                            <div class="col-md-4">
                                <label for="iamge" class="form-label">Image</label>
                                <input type="file" class="form-control" id="iamge" name="image">
                            </div>

                            <div class="col-md-12">
                                <label for="bio" class="form-label">Bio</label>
                                <textarea class="form-control" name="bio" id="bio" rows="5">{!! $aboutUs->bio !!}</textarea>
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
