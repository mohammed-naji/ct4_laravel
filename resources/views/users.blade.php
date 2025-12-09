<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <style>
        .wrapper {
            width: 80%;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th,
        table td {
            padding: 5px;
            text-align: left;
        }

        .first {
            background-color: #e5843d;
        }

        .last {
            background-color: #f00;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>All Users</h1>
        {!! $desc !!}
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Collage</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    {{-- @dump($loop) --}}
                    <tr class="{{ $loop->first ? 'first' : '' }} {{ $loop->last ? 'last' : '' }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['collage'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Userssssss Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
