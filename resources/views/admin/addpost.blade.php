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
   <!--  <h2>Add Post</h2> -->
    <div class="container-header">
       <!--  <div class=""> -->
            <div class="card card-primary">
               <div class="card-header">
                    <h3 class="card-title"> Add Post</h3>
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
    <form method="post" action="{{ route('users.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
             
              <div class="form-group">
                <label for="inputName">Title</label>
                <input type="text" name="name" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Alias</label>
                <input type="text" name="mobile" class="form-control" value="">
              </div>
               <div class="form-group">
                <label for="inputName">title-alias</label>
                <input type="text" name="name" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Introtext</label>
                <input type="text" name="mobile" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Status</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option value="1" selected="selected">Block</option>
                    <option value="2">Unblock</option>
                  </select>
              </div>
             <div class="form-group">
                <label for="inputName">Mask</label>
                <input type="text" name="mobile" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Category</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option value="1" selected="selected">Block</option>
                    <option value="2">Unblock</option>
                  </select>
              </div>
            </div>
          </div>
        </div>
      <div class="col-md-6">
        <div class="card card-secondary">
          <div class="card-body">
            <div class="form-group">
                <label for="inputName">Metakey</label>
                <input type="text" name="mobile" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Metadesc</label>
                <input type="text" name="address"  class="form-control" value="">
              </div>
                <div class="form-group">
                <label for="inputName">Metadata</label>
                <input type="text" name="mobile" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Featured</label>
                <input type="text" name="address"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Ordering</label>
                <input type="text" name="mobile" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">url</label>
                <input type="text" name="address"  class="form-control" value="">
              </div><br>
            <div class="form-group">
                 <label for="inputEstimatedBudget">Image</label>
                <input type="file" name="image">
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
       <!--  </div> -->
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->
@endsection
