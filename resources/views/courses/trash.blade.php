<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trashed Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body>
    <div class="container my-5">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1>Trashed Courses</h1>
            <a class="btn btn-primary" href="{{ route('courses.index') }}">All Course</a>
        </div>

        @if (session('msg'))
            <div class="alert alert-{{ session('type') ?? 'info' }} alert-dismissible fade show" role="alert">
                {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-dark">
                    <th>#</th>
                    <th>Title</th>
                    <th>Deleted At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                    <tr>
                        {{-- <td>{{ $course->id }}</td> --}}
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->deleted_at->diffForHumans() }}</td>
                        <td>
                            <div class="btn-group">

                                <a href="{{ route('courses.restore', $course->id) }}" class="btn btn-sm btn-info"><i
                                        class="fas fa-undo"></i></a>
                                <form action="{{ route('courses.delete', $course->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Are you sure?!')" class="btn btn-sm btn-danger"><i
                                            class="fas fa-times"></i></button>
                                </form>
                                {{-- <a href="{{ route('courses.destroy', $course->id) }}" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash"></i></a> --}}
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
        {{ $courses->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Remove the alert after 3 seconds
        setTimeout(() => {
            document.querySelector('.alert').remove();
        }, 3000);
    </script>
</body>

</html>
