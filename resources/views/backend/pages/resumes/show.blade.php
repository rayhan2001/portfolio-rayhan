@extends('layouts.backend.app')
@section('title', 'FAQ Details')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">FAQ</li>
                <li class="breadcrumb-item active">FAQ Details</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">FAQ Details</h5>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Question</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $faq->question }}</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Answer</label>
                            </div>

                            <div class="col-md-8">
                                <p>{{ $faq->answer }}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
