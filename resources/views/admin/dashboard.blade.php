<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Admin Dashboard
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        body{

            background:
                linear-gradient(
                    135deg,
                    #fff7ed 0%,
                    #f9f5ff 100%
                );

            min-height: 100vh;
        }

        .dashboard-wrapper{

            padding: 50px 0;
        }

        /* HEADER */

        .dashboard-header{

            background: #fff;

            border-radius: 20px;

            padding: 24px 30px;

            box-shadow:
                0 10px 30px rgba(0,0,0,0.06);

            margin-bottom: 28px;

            border: 1px solid #f1e4ff;
        }

        .brand-logo img{

            width: 180px;
        }

        .dashboard-title{

            font-size: 34px;
            font-weight: 700;

            color: #4c1d95;

            margin-top: 18px;
        }

        .dashboard-subtitle{

            color: #777;

            font-size: 15px;

            margin-top: 6px;
        }

        /* LOGOUT */

        .logout-btn{

            border: none;

            padding: 12px 22px;

            border-radius: 12px;

            background:
                linear-gradient(
                    90deg,
                    #ef4444,
                    #f87171
                );

            color: white;

            font-weight: 600;

            transition: 0.3s ease;
        }

        .logout-btn:hover{

            transform: translateY(-1px);

            box-shadow:
                0 10px 20px rgba(239,68,68,0.25);
        }

        /* CARD */

        .dashboard-card{

            background: white;

            border-radius: 20px;

            padding: 25px;

            box-shadow:
                0 10px 30px rgba(0,0,0,0.06);

            border: 1px solid #f1e4ff;
        }

        /* TABLE */

        .table{

            margin-bottom: 0;
        }

        .table thead{

            position: sticky;
            top: 0;
            z-index: 10;
        }

        .table thead th{

            background:
                linear-gradient(
                    90deg,
                    #4c1d95,
                    #6d28d9
                ) !important;

            color: white;

            font-size: 14px;
            font-weight: 600;

            padding: 16px;

            border: none;

            vertical-align: middle;
        }

        .table tbody tr{

            transition: 0.25s ease;
        }

        .table tbody tr:hover{

            background: #faf5ff;
        }

        .table tbody td{

            padding: 16px;

            vertical-align: middle;

            font-size: 14px;

            color: #444;

            border-color: #f1f1f1;
        }

        .serial-badge{

            width: 34px;
            height: 34px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ede9fe;

            color: #5b21b6;

            font-size: 13px;
            font-weight: 700;
        }

        .test-badge{

            display: inline-block;

            padding: 7px 12px;

            border-radius: 30px;

            background: #f3e8ff;

            color: #6b21a8;

            font-size: 12px;
            font-weight: 600;

            line-height: 1.5;
        }

        .date-text{

            white-space: nowrap;

            font-weight: 500;
        }

        /* PAGINATION */

        .pagination{

            margin-top: 25px;
        }

        .page-link{

            border-radius: 10px !important;

            margin: 0 4px;

            border: none;

            color: #5b21b6;

            font-weight: 600;
        }

        .page-item.active .page-link{

            background: #6d28d9;

            color: white;
        }

        /* EMPTY */

        .empty-data{

            text-align: center;

            padding: 60px 20px;
        }

        .empty-data img{

            width: 120px;

            opacity: 0.8;

            margin-bottom: 18px;
        }

        .empty-data h4{

            font-size: 22px;

            color: #444;

            margin-bottom: 10px;
        }

        .empty-data p{

            color: #888;
        }

        /* MOBILE */

        @media(max-width:768px){

            .dashboard-title{

                font-size: 26px;
            }

            .dashboard-header{

                padding: 20px;
            }

            .dashboard-card{

                padding: 16px;
            }

            .table thead th,
            .table tbody td{

                white-space: nowrap;
            }

            .logout-btn{

                padding: 10px 16px;

                font-size: 14px;
            }

            .brand-logo img{

                width: 140px;
            }
        }

    </style>

</head>

<body>

<div class="container dashboard-wrapper">

    <!-- HEADER -->

    <div class="dashboard-header">

        <div class="d-flex
                    justify-content-between
                    align-items-start
                    flex-wrap
                    gap-3">

            <div>

                <!-- LOGO -->

                <div class="brand-logo">

                    <img src="{{ asset('assets/logo.png') }}"
                         alt="Neuberg Logo">

                </div>

                <!-- TITLE -->

                <div class="dashboard-title">

                    Admin Dashboard

                </div>

                <div class="dashboard-subtitle">

                    View and manage all appointment bookings

                </div>

            </div>

            <!-- LOGOUT -->

            <form method="POST"
                  action="{{ route('logout') }}">

                @csrf

                <button class="logout-btn">

                    Logout

                </button>

            </form>

        </div>

    </div>

    <!-- TABLE CARD -->

    <div class="dashboard-card">

        @if($bookings->count() > 0)

        <div class="table-responsive">

            <table class="table align-middle">

                <thead>

                    <tr>

                        <th>Sr. No.</th>

                        <th>Name</th>

                        <th>Phone</th>

                        <th>Email</th>

                        <th>Selected Tests</th>

                        <th>Booking Date</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($bookings as $index => $booking)

                    <tr>

                        <!-- SERIAL NUMBER -->

                        <td>

                            <div class="serial-badge">

                                {{ $bookings->firstItem() + $index }}

                            </div>

                        </td>

                        <!-- NAME -->

                        <td>

                            <strong>

                                {{ $booking->name }}

                            </strong>

                        </td>

                        <!-- PHONE -->

                        <td>

                            {{ $booking->phone }}

                        </td>

                        <!-- EMAIL -->

                        <td>

                            {{ $booking->email }}

                        </td>

                        <!-- TEST -->

                        <td>

                            <span class="test-badge">

                                {{ $booking->test_name }}

                            </span>

                        </td>

                        <!-- DATE -->

                        <td>

                            <span class="date-text">

                                {{ $booking->created_at->format('d M Y h:i A') }}

                            </span>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

        <!-- PAGINATION -->

        <div>

            {{ $bookings->links() }}

        </div>

        @else

        <!-- EMPTY STATE -->

        <div class="empty-data">

            <img src="{{ asset('assets/empty-data.png') }}"
                 alt="No Data">

            <h4>

                No Bookings Found

            </h4>

            <p>

                User appointments will appear here.

            </p>

        </div>

        @endif

    </div>

</div>

</body>

</html>