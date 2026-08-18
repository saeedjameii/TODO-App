<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

    <style>
        body {
            background-color: #f5f6f8;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: .5px;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
        }

        .main-container {
            min-height: calc(100vh - 70px);
        }

        .todo-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .06);
            overflow: hidden;
        }

        .todo-card .card-header {
            background: #fff;
            border-bottom: 1px solid #eee;
            padding: 20px 24px;
        }

        .todo-card .card-body {
            background: #fff;
            padding: 0;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            font-size: 13px;
            color: #6c757d;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .4px;
            padding: 16px 20px;
        }

        .table td {
            padding: 18px 20px;
            vertical-align: middle;
        }

        .table tbody tr {
            transition: .2s;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .todo-image {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 10px;
            background: #e9ecef;
        }

        .category-badge {
            background: #eef2ff;
            color: #4f46e5;
            padding: 6px 10px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
        }

        .page-title {
            font-weight: 700;
            margin-bottom: 4px;
        }

        .page-subtitle {
            color: #6c757d;
            font-size: 14px;
            margin: 0;
        }

        .btn {
            border-radius: 8px;
        }

        .empty-image {
            width: 55px;
            height: 55px;
            border-radius: 10px;
            background: #f1f3f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #adb5bd;
            font-size: 12px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">

        <a class="navbar-brand text-dark" href="#">
            ✓ Todo App
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        Todos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Categories
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>