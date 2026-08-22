@extends('layout.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="page-title">Edit Todo</h3>
            <p class="page-subtitle">Update the details of your task.</p>
        </div>

        <a href="{{ route('todo.show', $todo) }}" class="btn btn-outline-secondary px-4">
            &larr; Back
        </a>
    </div>

    <div class="card todo-card">
        <div class="card-header">
            <h5 class="mb-1 fw-bold">Todo Information</h5>
            <small class="text-muted">Edit the information for this todo.</small>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('todo.update', $todo) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="image" class="form-label fw-semibold">Todo Image</label>
                    @if ($todo->image)
                        <div class="mb-2">
                            <img src="{{ asset('/images/' . $todo->image) }}" alt="{{ $todo->title }}"
                                 class="rounded" style="width: 120px; height: 80px; object-fit: cover;">
                        </div>
                    @endif
                    <input id="image" type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    <div class="form-text text-muted">Leave empty to keep the current image.</div>
                    @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-4">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input id="title" type="text" name="title" value="{{ old('title', $todo->title) }}"
                           class="form-control @error('title') is-invalid @enderror" placeholder="Enter todo title">
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-4">
                    <label for="category_id" class="form-label fw-semibold">Category</label>
                    <select id="category_id" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $todo->category_id) == $category->id)>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-4">
                    <label for="status" class="form-label fw-semibold">Status</label>
                    <select id="status" name="status" class="form-select @error('status') is-invalid @enderror">
                        <option value="0" @selected(old('status', $todo->status) == 0)>Pending</option>
                        <option value="1" @selected(old('status', $todo->status) == 1)>Completed</option>
                    </select>
                    @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea id="description" name="description" rows="5"
                              class="form-control @error('description') is-invalid @enderror"
                              placeholder="Write a description for your todo...">{{ old('description', $todo->description) }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('todo.show', $todo) }}" class="btn btn-light border px-4">Cancel</a>
                    <button type="submit" class="btn btn-dark px-4">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
