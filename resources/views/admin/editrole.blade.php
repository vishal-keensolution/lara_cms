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
    <h2>Edit Role</h2>
    <div class="container-fluid">
        <div class="">
            <div class="card push-top">
                <div class="card-header">
                Edit Role
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
                <form  action="{{ route('role.update', $role->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        @csrf
                        <label for="name">Name</label>
                        <input value="{{ $role->name }}" type="text" class="form-control" name="name"/>
                    </div>
                    <button type="submit" class="btn btn-block btn-danger">Edit Role</button>
                </form>
                </div>
            </div>
        </div>
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->
  <!-- /.container-fluid -->
<h2>Edit Menu's Roles</h2>
<div class="container-fluid">
    <div class="">
        <div class="card push-top">
            <div class="card-header">
                Edit Menu's Roles
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('menurole.update', $role->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @php
                        $menuids = array( );
                        foreach ($ms['select'] as $key => $m2) 
                        { $menuids[]=$m2->menuid;  }
                    @endphp
                    
                    <!-- checkbox -->
                   
                    <label for="">Select Menus  &nbsp;&nbsp;&nbsp; </label>
                    <div class="row">
                    @foreach ($ms['all'] as $key => $m1)
                        <div class="form-group icheck-warning d-inline col-3">
                            <input name="menuid[]" id="menuid{{$m1->id}}" @if (in_array($m1->id, $menuids)) checked @endif type="checkbox" value="{{$m1->id}}" class="" >
                            <label for="menuid{{$m1->id}}">
                                {{$m1->name}} 
                            </label>
                    </div>
                    @endforeach
                    </div>
                    <button type="submit" class="btn btn-block btn-danger">Edit Menu's Roles</button>
                </form>
            </div>
        </div>
    </div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection
