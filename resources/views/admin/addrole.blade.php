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
    <h2>Add Role</h2>
    <div class="container-fluid">
        <div class="">
            <div class="card push-top">
                <div class="card-header">
                Add Role
                </div>

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
                    <form method="post" action="{{ route('role.store')}}">
                        <div class="form-group">
                            @csrf
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <button type="submit" class="btn btn-block btn-danger">Add Role</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->
@endsection
