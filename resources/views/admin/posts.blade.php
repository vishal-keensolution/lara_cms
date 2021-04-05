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

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="right">
              <h4 class="float-left">Posts - List</h4>
              <a  class="btn btn-success float-right" href="{{url('admin/posts/create')}}">Add Post</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No.</th>
                <th>Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Created</th>
                <th>Status</th>
                <th>Edit/Delete</th>
              </tr>
              </thead>
              <tbody>
                @php($i=0)

                  @foreach ($data as $row)
                  @php($i++)
                  <tr>

                    <td>{{$i}}</td>
                    <td>{{$row->id}}</td>
                    <td>{{$row->title}}></td>
                    <td>{{$row->catid}}</td>
                    <td>{{$row->created}}</td>
                    <td>{{$row->state}}</td>
                    <td>
                        <a href="{{ route('posts.edit', $row->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $row->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                    </td>
                  </tr>

                  @endforeach

              </tbody>
              <tfoot>
              <tr>
                <th>No.</th>
                <th>Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Created</th>
                <th>Status</th>
                <th>Edit/Delete</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
@endsection
