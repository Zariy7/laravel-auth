<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <label for="title" class="form-label">Project Title:</label>
                    <input type="text" name="title" id="title">
                    <label for="description" class="form-label">Project Description:</label>
                    <input type="text" name="description" id="description">
                    <label for="stack" class="form-label">Project Stack</label>
                    <input type="text" name="stack" id="stack">

                    <input type="submit" class="btn btn-sm btn-primary" value="Edit!">
                </form>
            </div>
        </div>
    </div>
</body>