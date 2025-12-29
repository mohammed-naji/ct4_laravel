<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    <style>
        .res {
            background: #f4f4f4;
            border-radius: 3px;
            position: absolute;
            width: calc(100% - 24px);
            display: none;
        }

        .res ul {
            margin: 0;
            list-style: none;
            display: flex;
            flex-direction: column;
            padding: 10px;
        }


        .res ul a {
            text-decoration: none;
            display: block;
            color: #000;
            padding: 5px;
        }

        .res ul a:hover {
            background: #d3d3d3;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1>All Courses</h1>
        <form action="{{ route('courses.index') }}" method="GET" class="my-3">
            <div class="row">
                <div class="col-md-6" style="position: relative">
                    <input type="text" class="form-control search-input" value="{{ request()->q }}" name="q"
                        placeholder="Search by name, content and price">
                    <div class="res">
                        <ul>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <select name="sort" class="form-select">
                        {{-- <option value="" disabled selected>Order By</option> --}}
                        <option @selected(request()->sort == 'title') value="title">Title</option>
                        <option @selected(request()->sort == 'hours') value="hours">Hours</option>
                        <option @selected(request()->sort == 'price') value="price">Price</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="order" class="form-select">
                        <option @selected(request()->order == 'asc') value="asc">ASC</option>
                        <option @selected(request()->order == 'desc') value="desc">DESC</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success w-100">Search</button>
                </div>
            </div>
        </form>
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
        {{-- {{ $courses->appends($_GET)->links() }} --}}
        {{-- {{ $courses->withQueryString()->links() }} --}}
        {{ $courses->links() }}
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        let input = document.querySelector('.search-input')
        let result = document.querySelector('.res')
        let resList = document.querySelector('.res ul')

        input.onkeyup = () => {
            // console.log();
            // fetch('{{ route('courses.search') }}?q=' + input.value)
            //     .then(res => res.json())
            //     .then(res => {
            //         console.log(res);
            //     })
            if (input.value.length > 1) {
                axios.get('{{ route('courses.search') }}?q=' + input.value)
                    .then((res) => {
                        let items = '';
                        res.data.courses.forEach(el => {
                            items += `<li><a href='
                        '>${el.title}</a></li>`
                        });
                        result.style.display = 'block'
                        resList.innerHTML = items;
                    }).catch((err) => {
                        alert("Server not responding")
                    });
            } else {
                resList.innerHTML = '';
                result.style.display = 'none'
            }
        }
    </script>
</body>

</html>

{{-- http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc
http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc&page=2 --}}

{{-- http://127.0.0.1:8000/courses?name=moh&page=2 --}}

{{-- http://127.0.0.1:8000/courses?page=4 --}}

{{-- http://127.0.0.1:8000/courses?q=m&sort=hours&order=asc&page=4 --}}
