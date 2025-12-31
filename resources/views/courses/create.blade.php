<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

</head>

<body>
    <div class="container my-5">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1>Add new Course</h1>
            <a class="btn btn-primary" href="{{ route('courses.index') }}">All Courses</a>
        </div>
        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" label="Title" />
            <x-form.input name="image" label="Image" type="file" />
            <x-form.input name="hours" label="Hours" type="number" />
            <x-form.input name="price" label="Price" type="number" />
            <x-form.textarea name="content" label="Content" />
            <button class="btn btn-success"><i class="fas fa-file"></i>Save</button>
        </form>

    </div>
</body>

</html>

{{-- http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc
http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc&page=2 --}}

{{-- http://127.0.0.1:8000/courses?name=moh&page=2 --}}

{{-- http://127.0.0.1:8000/courses?page=4 --}}

{{-- http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc&page=4 --}}
