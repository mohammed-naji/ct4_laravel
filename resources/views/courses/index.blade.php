<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container my-5">
        <h1>All Courses</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Hours</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @if ($courses->count() > 0)
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td><img src="{{ $course->image }}" alt=""></td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->hours }}</td>
                            <td>{{ $course->price }}</td>
                            <td>{{ $course->created_at }}</td>
                            <td>{{ $course->updated_at }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8" class="text-center">Noooooo Data Found</td>
                    </tr>
                @endif --}}
                @forelse ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td><img src="{{ $course->image }}" alt=""></td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->hours }}</td>
                        <td>{{ $course->price }}</td>
                        <td>{{ $course->created_at }}</td>
                        <td>{{ $course->updated_at }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Noooooo Data Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
