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
 <div class="content-header">
    <div class="card card-primary">
       <div class="card-header">
          <h3 class="card-title">Edit Page</h3>
          <button type="button"  class="close" data-dismiss="modal" aria-label=""><a href=""><span>×</span></a></button>
        </div>
         @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div><br />
          @endif
    <form class="form-horizontal" action="{{ route('pages.update', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Title</label>
               <input type="text" value="{{$user->title}}" name="" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">alias</label>
               <input type="text" value="{{$user->alias}}" name="" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Description</label>
                <input type="text" value="{{$user->fulltext}}" name="" class="form-control">
              </div>
            </div>
          </div>
        </div>
      <div class="col-md-6">
         <div class="card card-secondary">
          <div class="card-body">
            <div class="form-group">
                <label for="inputClientCompany">Meta Keywords</label>
                <input type="text" value="{{$user->metakey}}" name="" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Image</label>
                <input type="file" name="image" class="" id="exampleInputFile">
                  <img class="img-bordered-sm" width="20%"  src="{{URL::to('/')}}/public/images/users/{{$user->images}}" alt="user image">
            </div>
          </div>
         </div>
      </div>

      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-block btn-primary">Submit</button>
      </div>
    </form>

  </div>
</div>
@stop  