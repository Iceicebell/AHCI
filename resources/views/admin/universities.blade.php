<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/admin/universities.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/admin/adminDash.css')?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
@extends('navbar')
@section('dash')
<body>

    <div class="container">
        <!-- Sidebar Section -->
        @include('sidebar')
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
                <!--==========Topbar===============-->
            <div class="main">
                <!--==========Dash Board===============-->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add University Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form action="{{ route('universities.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">

                                <div class="form-group">
                                  <label>University Name</label>
                                  <input type="text" name="univ_name" class="form-control" placeholder="Enter University Name">
                                </div>
                                <div class="form-group">
                                    <label>University Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </form>
                    </div>
                    </div>
                </div>
                {{-- model end here  --}}
                <br>
                <div class="container">
                    <h1>Universities</h1>

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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add University
                    </button>
                </div>

                {{-- pop model start here  --}}

                <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button> --}}

                    <!-- Modal -->


                {{-- pop model end here  --}}



                <!--==========Card Box===============-->

                <div class="cardBox1">
                    @foreach ($universities as $university)
                    <div class="card1">
                        <div class="box1">
                                <div class="swiper-wrapper1">
                                    <div class="card-slider1">

                                        <div class="card_image1">
                                            <img src="{{ asset('images/' . $university->image) }}" alt="{{ $university->univ_name }}">
                                        </div>

                                        <div class="card_content1">
                                            <span class="card_title1">{{ $university->univ_name }}</span>
                                            <span class="card_name1">5 students</span>
                                            <button class="card_btn1">View more</button>
                                        </div>
                                        <div>
                                        <a class="btn_delete" href="{{url('delete/'.$university->univ_id)}}"><span class="material-icons-sharp">
                                            delete
                                            </span>
                                        </a>
                                        <button class="btn_edit" data-toggle="modal" data-target="#ModalEdit{{ $university->univ_id }}">
                                            <span class="material-icons-sharp">
                                            edit
                                            </span></button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @include('admin.edit.univ_edit')
                    </div>

                    @endforeach
                </div>

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        @include('rightsection')
            <!-- End of Nav -->
        </div>


    </div>
</body>
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script href="<?php echo asset('js/admin/admin.js')?>"></script>
</html>
