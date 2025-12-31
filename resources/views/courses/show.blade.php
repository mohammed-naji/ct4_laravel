<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

</head>

<body>
    <div class="container my-5">
        <h2>{{ $course->title }}</h2>
        <img src="{{ asset($course->image) }}" alt="">
        <div>
            {{ $course->content }}
        </div>
    </div>
</body>

</html>

{{-- http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc
http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc&page=2 --}}

{{-- http://127.0.0.1:8000/courses?name=moh&page=2 --}}

{{-- http://127.0.0.1:8000/courses?page=4 --}}

{{-- http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc&page=4 --}}
