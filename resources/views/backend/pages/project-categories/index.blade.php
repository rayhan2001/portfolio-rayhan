@extends('layouts.backend.app')
@section('title', 'Project Categories')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <h5 class="card-title float-start">Project Categories</h5>

                            <a href="{{ route('project-categories.create') }}" class="btn btn-primary float-end">Add Project
                                Category</a>
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
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Zelenia Roman</td>
                                    <td>7516</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#largeModal">
                                            <i class="bi bi-plus"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="modal fade" id="largeModal" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Large Modal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et
                                        reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur
                                        sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque
                                        recusandae quo sit molestias sint dignissimos.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
