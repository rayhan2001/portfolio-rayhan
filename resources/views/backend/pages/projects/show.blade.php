@extends('layouts.backend.app')
@section('title', 'Project Details')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Projects</li>
                <li class="breadcrumb-item active">Project Details</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Project Details</h5>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Name</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $project->name }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Category</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $project->category->name }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Short Description</label>
                            </div>

                            <div class="col-md-8">
                                <p>{!! $project->short_description !!}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Client Name</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $project->client_name }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Live Link</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $project->live_link }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Technologies</label>
                            </div>

                            <div class="col-md-8">
                                <p>{!! $project->technologies !!}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Tools</label>
                            </div>

                            <div class="col-md-8">
                                <p>{!! $project->tools !!}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Description</label>
                            </div>

                            <div class="col-md-8">
                                <p>{!! $project->description !!}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Image</label>
                            </div>

                            <div class="col-md-8">
                                <img src="{{ asset('uploads/projects/' . $project->image) }}" alt="..." width="50px"
                                    height="50px" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
