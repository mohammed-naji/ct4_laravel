<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body>
    <div class="container my-5">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-dark">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passport Serial</th>
                    <th>Passport Start</th>
                    <th>Passport End</th>
                    <th>Joined At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->passport->serial }}</td>
                        <td>{{ $user->passport->start_date }}</td>
                        <td>{{ $user->passport->end_date }}</td>
                        <td>{{ $user->created_at ? $user->created_at->format('d M, Y | h:m:s A') : '-' }}</td>
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
