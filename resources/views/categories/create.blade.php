@extends('layout.master')

@section('content')


{{-- Page Header --}}
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="page-title">Create Category</h3>
        <p class="page-subtitle">
            Create a new category for your todos.
        </p>
    </div>

    <a href="{{ route('todo.index') }}" class="btn btn-outline-secondary px-4">
        ← Back
    </a>

</div>


{{-- Create Category Card --}}
<div class="card todo-card">

    <div class="card-header">
        <h5 class="mb-1 fw-bold">
            Category Information
        </h5>

        <small class="text-muted">
            Enter the information for your new category.
        </small>
    </div>


    <div class="card-body p-4">

        <form action="{{ route('category.store') }}" method="POST">

            @csrf

            {{-- Title --}}
            <div class="mb-4">

                <label for="title" class="form-label fw-semibold">
                    Category Title
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
                    class="form-control @error('title') is-invalid @enderror"
                    placeholder="e.g. Programming"
                >

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            {{-- Buttons --}}
            <div class="d-flex justify-content-end gap-2">

                <a href="{{ route('todo.index') }}"
                   class="btn btn-light border px-4">
                    Cancel
                </a>

                <button type="submit"
                        class="btn btn-dark px-4">
                    Create Category
                </button>

            </div>

        </form>

    </div>

</div>
```

@endsection
