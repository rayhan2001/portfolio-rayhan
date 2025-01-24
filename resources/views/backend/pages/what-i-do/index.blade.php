@extends('layouts.backend.app')
@section('title', 'What I Do')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">What I Do</li>
            </ol>
        </nav>
        <a href="{{ route('what-i-do.create') }}" class="btn btn-primary">
            <i class="bi bi-plus"></i> Add
        </a>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">What I Do</h5>
                        </div>

                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($what_i_do as $item)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/what-i-do/'.$item->icon) }}" alt="..." width="50px"
                                                height="50px" class="rounded-circle">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('what-i-do.show', $item->id) }}" class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('what-i-do.edit', $item->id) }}" class="btn btn-success btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm"
                                                onclick="if(confirm('Are you sure you want to delete this item?')) { event.preventDefault(); document.getElementById('delete-form{{ $item->id }}').submit(); } else { event.preventDefault(); }">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                            <form id="delete-form{{ $item->id }}"
                                                action="{{ route('what-i-do.destroy', $item->id) }}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
