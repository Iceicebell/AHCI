
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/admin/adminDash.css')?>">
@extends('navbar')
@section('dash')
<body>

    <div class="container">
        <!-- Sidebar Section -->
        @include('sidebar')
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <div class="recent-orders">
                <h2>Trainees</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trainees as $trainee)
                        <tr>
                            <td>{{ $trainee->id }}</td>
                            <td>{{ $trainee->role }}</td>
                            <td>{{ $trainee->name }}</td>
                            <td>{{ $trainee->email }}</td>
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
