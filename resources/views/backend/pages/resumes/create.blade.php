@extends('layouts.backend.app')
@section('title', 'Add Resume')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Resume</li>
                <li class="breadcrumb-item active">Add Resume</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Add Resume</h5>
                        </div>

                        <form class="row g-3" method="POST" action="{{ route('resumes.store') }}">
                            @csrf
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label for="summary" class="form-label">Summary</label>
                                <textarea name="summary" id="summary" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="work_experiences" class="form-label">Work Experiences (JSON format)</label>
                                <textarea name="work_experiences" id="work_experiences" class="form-control"></textarea>
                                <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
                                <script>
                                    CKEDITOR.replace('work_experiences');
                                </script>
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
