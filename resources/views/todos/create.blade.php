@extends('layout.master')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">

<div>
    <h3 class="page-title">Create Todo</h3>
    <p class="page-subtitle">
        Create a new task and organize it into a category.
    </p>
</div>

<a href="{{ route('todo.index') }}" class="btn btn-outline-secondary px-4">
    ← Back
</a>


</div>

<div class="card todo-card">

<div class="card-header">

    <h5 class="mb-1 fw-bold">
        Todo Information
    </h5>

    <small class="text-muted">
        Enter the information for your new todo.
    </small>

</div>


<div class="card-body p-4">

    <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Image --}}
        <div class="mb-4">

            <label class="form-label fw-semibold">
                Todo Image
            </label>

            <input type="file"
                   name="image"
                   class="form-control">

            <div class="form-text text-muted">
                Upload an image for your todo.
            </div>

            <div class="form-text text-danger">
                @error('image')
                    {{ $message }}
                @enderror
            </div>

        </div>


        {{-- Title --}}
        <div class="mb-4">

            <label class="form-label fw-semibold">
                Title
            </label>

            <input type="text"
                   name="title"
                   class="form-control"
                   placeholder="Enter todo title">

            <div class="form-text text-danger">
                @error('title')
                    {{ $message }}
                @enderror
            </div>

        </div>


        {{-- Category --}}
        <div class="mb-4">

            <label class="form-label fw-semibold">
                Category
            </label>

            <select class="form-select" name="category_id">

                <option value="">
                    Select a category
                </option>
                @foreach ($categories as $category )
                    <option value="{{ $category->id }}">
                        {{ $category->title }}
                    </option>            
                @endforeach


            </select>

            <div class="form-text text-danger">
                @error('category_id')
                    {{ $message }}
                @enderror
            </div>

        </div>


        {{-- Description --}}
        <div class="mb-4">

            <label class="form-label fw-semibold">
                Description
            </label>

            <textarea class="form-control"
                      name="description"
                      rows="5"
                      placeholder="Write a description for your todo..."></textarea>

            <div class="form-text text-danger">
                @error('description')
                    {{ $message }}
                @enderror
            </div>

        </div>


        {{-- Buttons --}}
        <div class="d-flex justify-content-end gap-2">

            <a href="{{ route('todo.index') }}"
               class="btn btn-light border px-4">
                Cancel
            </a>

            <button type="submit"
                    class="btn btn-dark px-4">
                Create Todo
            </button>

        </div>

    </form>

</div>


</div>

@endsection