<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/admin/adminDash.css')?>">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
</head>

<body>
    @extends('navbar')
    @section('dash')
    <div class="container">
        <!-- Sidebar Section -->
        @include('sidebar')
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <div class="recent-orders">
                <h2>Coordinators</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coordinators as $coordinator)
                        <tr>
                            <td>{{ $coordinator->id }}</td>
                            <td>{{ $coordinator->role }}</td>
                            <td>{{ $coordinator->name }}</td>
                            <td>{{ $coordinator->email }}</td>
                            <!-- Add more fields as needed -->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        @include('rightsection')
            <!-- End of Nav -->
        </div>


    </div>
</body>
@endsection
<script href="<?php echo asset('js/admin/admin.js')?>"></script>
</html>
