@extends('layouts.backend.app')
@section('title', 'Projects')

@section('content')
    <div class="pagetitle d-flex justify-content-between">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Projects</li>
                <li class="breadcrumb-item active">Project</li>
            </ol>
        </nav>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">
            <i class="bi bi-plus"></i> Add Project
        </a>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title">Projects</h5>
                        </div>

                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">
                                        <b>N</b>ame
                                    </th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $category)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            @if ($category->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#showCategoryModal{{ $category->id }}">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editCategoryModal{{ $category->id }}">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm"
                                                onclick="if(confirm('Are you sure you want to delete this category?')) { event.preventDefault(); document.getElementById('delete-form{{ $category->id }}').submit(); } else { event.preventDefault(); }">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                            <form id="delete-form{{ $category->id }}"
                                                action="{{ route('project-categories.destroy', $category->id) }}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @include('backend.pages.project-categories.modal.show_category')
                                    @include('backend.pages.project-categories.modal.edit_category')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
