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
                                    <th class="text-center">Image</th>
                                    <th class="text-center">
                                        <b>N</b>ame
                                    </th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Short Description</th>
                                    <th class="text-center">Client Name</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/projects/'.$project->image) }}" alt="..." width="50px"
                                                height="50px" class="rounded-circle">
                                        </td>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->category->name }}</td>
                                        <td>{{ $project->short_description }}</td>
                                        <td>{{ $project->client_name }}</td>
                                        <td>
                                            @if ($project->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-success btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm"
                                                onclick="if(confirm('Are you sure you want to delete this project?')) { event.preventDefault(); document.getElementById('delete-form{{ $project->id }}').submit(); } else { event.preventDefault(); }">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                            <form id="delete-form{{ $project->id }}"
                                                action="{{ route('projects.destroy', $project->id) }}"
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
