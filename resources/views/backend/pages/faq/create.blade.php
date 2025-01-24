@extends('layouts.backend.app')
@section('title', 'Add FAQ')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">FAQ</li>
                <li class="breadcrumb-item active">Add FAQ</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Add FAQ</h5>
                        </div>

                        <form class="row g-3" method="POST" action="{{ route('faq.store') }}">
                            @csrf
                            <div class="col-md-12">
                                <label for="question" class="form-label">Question</label>
                                <input type="text" class="form-control" id="question" name="question">
                            </div>

                            <div class="col-md-12">
                                <label for="answer" class="form-label">Answer</label>
                                <textarea name="answer" id="answer" class="form-control" rows="3"></textarea>
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
