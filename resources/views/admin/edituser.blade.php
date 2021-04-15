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
<h2>Edit User</h2>
<div class="container-fluid">
    <div class="">
        <div class="card push-top">
            <div class="card-header">
            Edit User
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
            <form  action="{{ route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                <div class="form-group">
                    @csrf
                    <label for="name">Name</label>
                    <input value="{{ $user->name }}" type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="{{ $user->email }}" type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input value="{{ $user->phone }}" type="tel" class="form-control" name="phone"/>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Edit User</button>
            </form>
            </div>
        </div>
    </div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
<h2>Edit User's Roles</h2>
<div class="container-fluid">
    
        <div class="card push-top ">
            <div class="card-header">
            Edit User's Roles
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('userrole.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @php
                        $roleids = array( );
                        foreach ($rs['select'] as $key => $r2) 
                        { $roleids[]=$r2->roleid;  }
                    @endphp
                    <!-- checkbox -->
                        <label for="">Select Roles  &nbsp;&nbsp;&nbsp; </label>
                        <div class="icheck-warning d-inline">
                            <input id="select_all" type="checkbox" class="ckbCheckAll" >
                            <label for="select_all">Select All</label>
                        </div>
                        <div class="row">
                        @foreach ($rs['all'] as $key => $r1)
                            <div class="icheck-warning d-inline col-3">
                                <input name="roleid[]" id="roleid{{$r1->id}}" @if (in_array($r1->id, $roleids)) checked @endif type="checkbox" value="{{$r1->id}}" class="checkBoxClass" >
                                <label for="roleid{{$r1->id}}">
                                    {{$r1->name}} 
                                </label>
                            </div>
                        @endforeach
                        </div>
                    <button type="submit" class="btn btn-block btn-danger">Edit User Roles</button>
                </form>
            </div>
        </div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection
