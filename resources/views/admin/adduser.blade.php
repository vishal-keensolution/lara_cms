@extends('layouts.master')
@section('title')
{{--$title  ?? '' --}}
@endsection

@section('h1_heading')
    {{--$h1_heading ?? ''--}}
@endsection
@section('top_left')
    @include('layouts.block.top_left')
@endsection
@section('top_right')
    @include('layouts.block.top_right')
@endsection

@section('left_sb')
@include('layouts.block.left_sidebar')
@endsection
@section('content')
    <!-- <h2>Add User</h2> -->
    <div class="container-fluid">
        <div class="">
            <div class="card push-top">
                <div class="card-header">
                    <h3 class="card-title"> Add User</h3>
                </div>
               <!--  <div class="card-header">
                Add User
                </div> -->

                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div><br />
                @endif
                    <form method="post" action="{{ route('users.store')}}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" name="phone"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file"  name="image"/>
                        </div><br>
                        <button type="submit" class="btn btn-block btn-primary">Add User</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->
@endsection
