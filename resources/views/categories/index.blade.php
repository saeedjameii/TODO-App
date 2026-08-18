@extends('layout.master')

@section('content')


{{-- Page Header --}}
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="page-title">Categories</h3>
        <p class="page-subtitle">
            Manage your todo categories.
        </p>
    </div>

    <a href="{{ route('category.create') }}"
       class="btn btn-dark px-4">
        + Create Category
    </a>

</div>


{{-- Categories Card --}}
<div class="card todo-card">

    <div class="card-header">

        <div class="d-flex justify-content-between align-items-center">

            <div>
                <h5 class="mb-1 fw-bold">
                    Category List
                </h5>

                <small class="text-muted">
                    {{ $categories->count() }} categories
                </small>
            </div>

        </div>

    </div>


    <div class="card-body">

        @if ($categories->count())

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($categories as $category)

                            <tr>

                                {{-- ID --}}
                                <td>
                                    <span class="text-muted">
                                        {{ $category->id }}
                                    </span>
                                </td>


                                {{-- Title --}}
                                <td>
                                    <div class="d-flex align-items-center gap-3">

                                        <div class="category-icon">
                                            📁
                                        </div>

                                        <div>
                                            <div class="fw-semibold">
                                                {{ $category->title }}
                                            </div>

                                            <small class="text-muted">
                                                Category #{{ $category->id }}
                                            </small>
                                        </div>

                                    </div>
                                </td>


                                {{-- Actions --}}
                                <td class="text-end">

                                    <a href="#"
                                       class="btn btn-sm btn-outline-secondary">
                                        Edit
                                    </a>

                                    <a href="#"
                                       class="btn btn-sm btn-outline-danger">
                                        Delete
                                    </a>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            {{-- Empty State --}}
            <div class="text-center py-5">

                <div style="font-size: 45px;">
                    📁
                </div>

                <h5 class="mt-3 fw-bold">
                    No Categories Found
                </h5>

                <p class="text-muted">
                    You haven't created any categories yet.
                </p>

                <a href="{{ route('category.create') }}"
                   class="btn btn-dark">
                    + Create Your First Category
                </a>

            </div>

        @endif

    </div>

</div>


@endsection
