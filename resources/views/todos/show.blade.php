
@extends('layout.master')

@section('content')

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="page-title">Todo Details</h3>
            <p class="page-subtitle">
                View the details of your todo.
            </p>
        </div>

        <a href="{{ route('todo.index') }}"
           class="btn btn-outline-secondary px-4">
            ← Back
        </a>

    </div>


    {{-- Todo Details Card --}}
    <div class="card todo-card">

        <div class="card-header">

            <h5 class="mb-1 fw-bold">
               Title
            </h5>

            <small class="text-muted">
                Todo 
            </small>

        </div>


        <div class="card-body p-4">

            <div class="row g-4">

                {{-- Image --}}
                <div class="col-12 col-md-4">

                    @if ($todo->image)

                        <img src="{{ asset('images/' . $todo->image) }}"
                             alt="{{ $todo->title }}"
                             class="img-fluid rounded-3 w-100"
                             style="max-height: 300px; object-fit: cover;">

                    @else

                        <div class="empty-image w-100"
                             style="height: 250px;">
                            No Image
                        </div>

                    @endif

                </div>


                {{-- Information --}}
                <div class="col-12 col-md-8">

                    <div class="mb-4">

                        <label class="text-muted small">
                            Title
                        </label>

                        <h4 class="fw-bold">
                            {{ $todo->title }}
                        </h4>

                    </div>


                    <div class="mb-4">

                        <label class="text-muted small d-block mb-2">
                            Category
                        </label>

                        <span class="category-badge">
                            {{ $todo->category->title }}
                        </span>

                    </div>


                    <div class="mb-4">

                        <label class="text-muted small d-block mb-2">
                            Status
                        </label>

                        @if ($todo->status)

                            <span class="badge bg-success-subtle text-success px-3 py-2">
                                Completed
                            </span>

                        @else

                            <span class="badge bg-warning-subtle text-warning px-3 py-2">
                                Pending
                            </span>

                        @endif

                    </div>


                    <div>

                        <label class="text-muted small d-block mb-2">
                            Description
                        </label>

                        <p class="text-secondary mb-0">
                            {{ $todo->description }}
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- Footer Actions --}}
        <div class="card-footer bg-white p-4">

            <div class="d-flex justify-content-end gap-2">

                <a href="{{ route('todo.index') }}"
                   class="btn btn-light border">
                    Back
                </a>

                <a href="{{ route('todo.edit', $todo) }}"
                   class="btn btn-dark">
                    Edit Todo
                </a>

            </div>

        </div>

    </div>

@endsection