@extends('layout.master')

@section('content')

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="page-title">My Todos</h3>
            <p class="page-subtitle">
                Manage your tasks and stay organized.
            </p>
        </div>

        <a href="{{ route('todo.create') }}" class="btn btn-dark px-4">
            + Create Todo
        </a>

    </div>


    {{-- Todo Card --}}
    <div class="card todo-card">

        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h5 class="mb-1 fw-bold">Todo List</h5>

                    <small class="text-muted">
                        3 tasks
                    </small>
                </div>

                <div>
                    <select class="form-select form-select-sm">
                        <option>All Tasks</option>
                        <option>Completed</option>
                        <option>Pending</option>
                    </select>
                </div>

            </div>

        </div>


        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>


                    <tbody>

                        {{-- Todo 1 --}}
                        
                        <tr>

                            <td>
                                <div class="empty-image">
                                    No Image
                                </div>
                            </td>

                            <td>
                                <div class="fw-semibold">
                                    Learn Laravel
                                </div>

                                <small class="text-muted">
                                    Practice Laravel basics
                                </small>
                            </td>

                            <td>
                                <span class="category-badge">
                                    Programming
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-success-subtle text-success px-3 py-2">
                                    Completed
                                </span>
                            </td>

                            <td class="text-end">

                                <a href="#"
                                   class="btn btn-sm btn-outline-secondary">
                                    Show
                                </a>

                                <button disabled
                                        class="btn btn-sm btn-outline-success">
                                    Done
                                </button>

                            </td>

                        </tr>


                        {{-- Todo 2 --}}
                        <tr>

                            <td>
                                <div class="empty-image">
                                    No Image
                                </div>
                            </td>

                            <td>
                                <div class="fw-semibold">
                                    Learn Eloquent
                                </div>

                                <small class="text-muted">
                                    Practice Eloquent relationships
                                </small>
                            </td>

                            <td>
                                <span class="category-badge">
                                    Laravel
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-warning-subtle text-warning px-3 py-2">
                                    Pending
                                </span>
                            </td>

                            <td class="text-end">

                                <a href="#"
                                   class="btn btn-sm btn-outline-secondary">
                                    Show
                                </a>

                                <a href="#"
                                   class="btn btn-sm btn-success">
                                    Mark Done
                                </a>

                            </td>

                        </tr>


                        {{-- Todo 3 --}}
                        <tr>

                            <td>
                                <div class="empty-image">
                                    No Image
                                </div>
                            </td>

                            <td>
                                <div class="fw-semibold">
                                    Build Todo App
                                </div>

                                <small class="text-muted">
                                    Create CRUD functionality
                                </small>
                            </td>

                            <td>
                                <span class="category-badge">
                                    Project
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-warning-subtle text-warning px-3 py-2">
                                    Pending
                                </span>
                            </td>

                            <td class="text-end">

                                <a href="#"
                                   class="btn btn-sm btn-outline-secondary">
                                    Show
                                </a>

                                <a href="#"
                                   class="btn btn-sm btn-success">
                                    Mark Done
                                </a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection