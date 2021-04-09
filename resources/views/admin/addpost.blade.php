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
 <!--    <h2>Add Role</h2> -->
<div class="container-header">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Posts</h3>
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
<section id="content">
<div class="row-fluid">
<div class="span12">
<div id="system-message-container"></div>
<form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">  
                <div class="form-group">
                    <label for="inputName">Title</label>
                    <input type="text" name="title" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Alias</label>
                    <input type="text" name="alias" class="form-control" value="">
                </div>
            </div>
        </div>
    </div>

<div class="form-horizontal">
    <div class="card-header p-0 pt-1">      
        <ul class="nav nav-tabs" id="myTabTabs">
            <li class="active nav-item">
                <a class="nav-link" href="#general" data-toggle="tab">Content</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#attrib-basic" data-toggle="tab">Image</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#attrib-option" data-toggle="tab">Option</a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#attrib-Editscreen" data-toggle="tab">Configure Edit screen</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="#publishing" data-toggle="tab">Publishing</a>
            </li>
        </ul>
    </div>
<div class="tab-content" id="myTabContent">   
<div id="general" class="tab-pane active"> 
    <div class="row">
        <div class="col-md-8">
            <div class="card-body">
                <div class="form-group">
                   <label>Description</label>
                    <div class="js-editor-tinymce">
                    <textarea name="fulltext" cols="" rows="" style="width: 100%; height: 500px;" class="editable"></textarea>   
                    </div> 
                </div>
            </div>    
        </div>
    <div class="col-md-4">
        <div class="card-body">
                <div class="form-group">
                    <label>Status</label>
                    <select id="" name="state" class="form-control btn-success">
                        <option value="1" selected="selected">Published</option>
                        <option value="0">Unpublished</option>
                        <option value="2">Archived</option>
                        <option value="-2">Trashed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Category</label>
                   <!--  <select id="" name="catid" class="form-control">
                        <option value="1">- No parent -</option>
                        <option value="2">Uncategorised</option>
                    </select> -->
                     <select name="catid" class="form-control btn-success">
                        @foreach ($all_category as $category) 
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                     </select>
                </div>
                 <div class="form-group">
                    <label>Featured</label>
                    <select id="" name="Featured" class="form-control btn-success">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label>Featured</label>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn bg-olive">
                            <input type="radio" name="Featured" value="1"> Yes
                        </label>
                        <label class="btn bg-olive">
                            <input type="radio" name="Featured" value="0" > No
                        </label>
                    </div>
                </div> -->
         <!--    <div class="form-group">
                <label>Access</label>
                <select id="" class="form-control" name="">
                    <option value="1" selected="selected">Public</option>
                    <option value="5">Guest</option>
                    <option value="2">Registered</option>
                    <option value="3">Special</option>
                    <option value="6">Super Users</option>
                </select>
            </div> -->
         <!--    <div class="form-group">
                <label>Language</label>
                <select id="" class="form-control"  name="">
                    <option value="*">All</option>
                    <option value="en-GB">English (en-GB)</option>
                </select>
            </div> -->
           <!--  <div class="form-group">
                <label>Tags</label>
                <input type="text" name="" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Note</label>
                <input type="text" name="" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Version Note</label>
                <input type="text" name="" class="form-control" />
            </div> -->
            </div>
        </div>
    </div>        
</div>
                                            
<div id="attrib-basic" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">  
                 <div class="form-group">
                    <label>Image</label>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="images" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <div class="form-group">
                    <label>Url</label>
                    <input type="text" class="form-control" name="urls"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="attrib-option" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">  
              <div class="form-group">
                   <label>Layout</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Title</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                 <div class="form-group">
                   <label>Linked Titles</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
               <div class="form-group">
                   <label>Show Tags</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Intro Text</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Position of Article Info</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Article Info Title</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Category</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                  <div class="form-group">
                   <label>Show Publish Date</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Navigation</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                 <div class="form-group">
                   <label>Show Icons</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Print</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <div class="form-group">
                   <label>Link Category</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Parent</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Link Parent</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Associations</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                  <div class="form-group">
                   <label>Show Author</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Link Author</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Create Date</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Modify Date</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Email</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Voting</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                       <div class="form-group">
                   <label>Show Hits</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Show Unauthorised Links</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Positioning of the Links</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Blog</option>
                            <option value="_:default">List</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
 -->
<!-- <div id="attrib-Editscreen" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">  
                 <div class="form-group">
                   <label>Show Publishing Options</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </optgroup>
                    </select>
                </div>
                 <div class="form-group">
                   <label>Show Article Options</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <div class="form-group">
                   <label>Administrator Images and Links</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                   <label>Frontend Images and Links</label>
                    <select id="" class="form-control" name="">
                        <optgroup id="" label="">
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div id="publishing" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">
               <!--  <div class="form-group">
                    <label>Start Publishing</label>
                    <input type="date" class="form-control" name="" />
                </div>
                <div class="form-group">
                    <label>Finish Publishing</label>
                    <input type="text" class="form-control" name="" />
                </div>  --> 
               <!--  <div class="form-group">
                    <label>Created Date</label>
                    <input type="date" class="form-control" name="" />
                </div>
                <div class="form-group">
                    <label>Created By</label>
                    <input type="text" class="form-control" name="" />
                </div>
                <div class="form-group">
                    <label>Created By Alias</label>
                    <input type="text" class="form-control" name="" />
                </div> -->
               <!--  <div class="form-group">
                    <label>Modified Date</label>
                    <input type="date" class="form-control" name=""/>
                </div>  
                <div class="form-group">
                    <label>Modified By</label>
                     <input type="text" class="form-control" name="" />
                </div> -->
                <!-- <div class="form-group">
                    <label>Revision</label>
                    <input type="text" class="form-control" name="" />
                </div> -->
                <!-- <div class="form-group">
                    <label>Hits</label>
                    <input type="text" class="form-control" name="" />
                </div> -->
                 <div class="form-group">
                    <label>Meta Description</label>
                    <textarea name="metadesc" class="form-control" cols="50"  rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
               
                <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text" class="form-control" name="metakey" />
                </div>
           <!-- <div class="form-group">
                    <label>Key Reference</label>
                    <input type="text" class="form-control" name="" />
                </div>
                <div class="form-group">
                    <label>Robots</label>
                    <select id="" class="form-control" name="">
                        <option value=""  selected="selected">Use Global</option>
                        <option value="">Index, Follow</option>
                        <option value="">No index, follow</option>
                        <option value="">Index, No follow</option>
                        <option value="">No index, no follow</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="" />
                </div>
                <div class="form-group">
                    <label>Content Rights</label>
                    <textarea name="" class="form-control" name="" cols="50"  rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>External Reference</label>
                    <input type="text" class="form-control" name="" />
                </div> -->
            </div>
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
            </section>
            
        </div>
    </div>
</div>
  <!-- /.container-fluid -->
@endsection
