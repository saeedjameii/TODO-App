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
                        {{ $todos->count() }} tasks
                    </small>
                </div>

                <form method="GET" action="{{ route('todo.index') }}">
                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm">
                        <option value="" @selected(request('status') === null || request('status') === '')>All Tasks</option>
                        <option value="1" @selected(request('status') == '1')>Completed</option>
                        <option value="0" @selected(request('status') == '0')>Pending</option>
                    </select>
                </form>

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
                            @foreach ($todos as $todo)
                        <tr>

                            <td>
                                <img width="90" class="rounded" src="{{ asset('/images/'. $todo->image) }}" alt="">
                            </td>

                            <td>
                                <div class="fw-semibold">
                                    {{ $todo->title }}
                                </div>

                                <small class="text-muted">
                                    {{ $todo->description }}
                                </small>
                            </td>

                            <td>
                                <span class="category-badge">
                                    {{ $todo->category->title }}
                                </span>
                            </td>

                            <td>
                                @if($todo->status)
                                    <span class="badge bg-success-subtle text-success px-3 py-2">
                                        Completed
                                    </span>

                                @else
                                    <span class="badge bg-warning-subtle text-warning px-3 py-2">
                                        Pending
                                    </span> 
                                
                                @endif
                            </td>

                            <td class="text-end">

                                <a href="{{ route('todo.show', ['todo' => $todo->id]) }}"
                                   class="btn btn-sm btn-outline-secondary">
                                    Show
                                </a>

                                @if (! $todo->status)
                                    <form action="{{ route('todo.complete', $todo) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')

                                        <button type="submit" class="btn btn-sm btn-outline-success">
                                            Done
                                        </button>
                                    </form>
                                @endif

                            </td>

                        </tr>
                            @endforeach



                    </tbody>

                </table>

            </div>

            {{ $todos->links() }}

        </div>

    </div>

@endsection
