<!DOCTYPE html>
<html lang="en">
<head>
  <title>Responsive Sidebar</title>
  <!-- Link Styles -->
  <link rel="stylesheet" href="<?php echo asset('css/coordinator/coordside.css')?>">
  <link rel="stylesheet" href="<?php echo asset('css/coordinator/coordinatorDash.css')?>">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
  <div class="sidebar">
    <div class="logo_details">
      <i class="bx bxl-audible icon"></i>
      <div class="logo_name">Code Effect</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
            <ion-icon name="folder-outline"></ion-icon>
          <span class="link_name">Projects</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#">
            <ion-icon name="newspaper-outline"></ion-icon>
          <span class="link_name">Assignments</span>
        </a>
        <span class="tooltip">Assignments</span>
      </li>
      <li>
        <a href="#" data-toggle="modal" data-target="#exampleModal">
            <ion-icon name="add-circle-outline"></ion-icon>
          <span class="link_name">Add Project</span>
        </a>
        <span class="tooltip">Add Project</span>
      </li>


        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <ion-icon name="log-out-outline"></ion-icon>
         </a>
    </ul>
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add University Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="modal-body">

                <div class="form-group">
                  <label>Project Name Name</label>
                  <input type="text" name="proj_name" class="form-control" placeholder="Enter Project Name">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>
    </div>
    </div>
</div>


@if (count($errors) >0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach

    </ul>
</div>
@endif

@if (\Session::has('success'))
<div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>

</div>
@endif

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
