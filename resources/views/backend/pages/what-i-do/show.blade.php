@extends('layouts.backend.app')
@section('title', 'What I Do Details')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">What I Do</li>
                <li class="breadcrumb-item active">What I Do Details</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">What I Do Details</h5>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Title</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $what_i_do->title }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Description</label>
                            </div>

                            <div class="col-md-8">
                                <p>{!! $what_i_do->description !!}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Image</label>
                            </div>

                            <div class="col-md-8">
                                <img src="{{ asset('uploads/what-i-do/' . $what_i_do->icon) }}" alt="..." width="50px"
                                    height="50px" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
