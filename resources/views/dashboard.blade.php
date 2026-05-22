<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Admin Dashboard neuberg</h2>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="btn btn-danger">
                Logout
            </button>
        </form>

    </div>

    <div class="card shadow">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Test</th>
                            <th>Date</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($bookings as $booking)

                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->test_name }}</td>
                            <td>{{ $booking->created_at->format('d M Y h:i A') }}</td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

            <div class="mt-3">
                {{ $bookings->links() }}
            </div>

        </div>

    </div>

</div>

</body>
</html>