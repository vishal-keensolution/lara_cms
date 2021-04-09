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
            <h3 class="card-title"> Add Category</h3>
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
<form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
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
             <!--    <div class="card-body">
                    <div class="form-group">
                         <label>Title<span class="star">&#160;*</span></label>     
                            <input type="text" name="" class="" />
                    </div>
                             
                    <div class="control-group">
                                    <div class="control-label">
                                        <label id="jform_alias-lbl" for="jform_alias" class="hasPopover" title="Alias" data-content="The Alias will be used in the SEF URL. Leave this blank and Joomla will fill in a default value from the title. This value will depend on the SEO settings (Global Configuration-&gt;Site). &lt;br /&gt;Using Unicode will produce UTF-8 aliases. You may also enter manually any UTF-8 character. Spaces and some forbidden characters will be changed to hyphens.&lt;br /&gt;When using default transliteration it will produce an alias in lower case and with dashes instead of spaces. You may enter the Alias manually. Use lowercase letters and hyphens (-). No spaces or underscores are allowed. Default value will be a date and time if the title is typed in non-latin letters." data-placement="bottom" >Alias
                                        </label>
                                    </div>
                                    <div class="controls">
                                        <input type="text" name="jform[alias]" id="jform_alias"  value=""  size="45" placeholder="Auto-generate from title" />
                                    </div>
                   </div>
                </div>
 -->
<div class="form-horizontal">
    <div class="card-header p-0 pt-1">      
        <ul class="nav nav-tabs" id="myTabTabs">
            <li class="active nav-item">
                <a class="nav-link" href="#general" data-toggle="tab">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#attrib-basic" data-toggle="tab">Options</a>
            </li>
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
                        <textarea name="description" cols="" rows="" style="width: 100%; height: 500px;" class="editable"></textarea>   
                    </div> 
                </div>
            </div>    
        </div>
    <div class="col-md-4">
        <div class="card-body">
                <div class="form-group">
                    <label>Parent</label>
                    <select  name="parentid" class="form-control">
                        <option value="0">- No parent -</option>
                        <option value="1">parent</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="published" class="form-control">
                        <option value="1" selected="selected">Published</option>
                        <option value="0">Unpublished</option>
                        <option value="2">Archived</option>
                        <option value="-2">Trashed</option>
                    </select>
                </div>
        <!--     <div class="form-group">
                <label>Access</label>
                <select class="form-control" name="access">
                    <option value="1" selected="selected">Public</option>
                    <option value="5">Guest</option>
                    <option value="2">Registered</option>
                    <option value="3">Special</option>
                    <option value="6">Super Users</option>
                </select>
            </div> -->
           <!--  <div class="form-group">
                <label>Language</label>
                <select id="" class="form-control"  name="">
                    <option value="*">All</option>
                    <option value="en-GB">English (en-GB)</option>
                </select>
            </div> -->
           <!--  <div class="form-group">
                <label>Tags</label>
                <select class="form-control" name="" multiple>
                    <option value="2">Joomla</option>
                </select>
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
                    <label>Layout</label>
                    <select class="form-control" name="params">
                        <optgroup id="" label="">
                            <option value="Blog">Blog</option>
                            <option value="List">List</option>
                        </optgroup>
                    </select>
                </div>
               <!--   <div class="form-group">
                    <label>Image</label>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-6">
            <!-- <div class="card-body">
                <div class="form-group">
                    <label>Image-Alt</label>
                    <input type="text" class="form-control" name="image_alt"/>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div id="publishing" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">  
               <!--  <div class="form-group">
                    <label>Created Date</label>
                    <input type="date" class="form-control" name="" value=""/>
                </div> -->
               <!--  <div class="form-group">
                    <label>Created By</label>
                    <input type="text" class="form-control" id="" class="" value=""/>
                </div> -->
               <!--  <div class="form-group">
                    <label>Hits</label>
                    <input type="text" class="form-control" id="" class="" value=""/>
                </div> -->
                <div class="form-group">
                    <label>Category for component</label>
                    <select class="form-control" name="cat_for_component">
                        <option value="pages">Pages</option>
                        <option value="post">Post</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text" class="form-control" name="metakey" />
                </div>
             <!--  <div class="form-group">
                    <label>Robots</label>
                    <select id="" class="form-control" name="">
                        <option value=""  selected="selected">Use Global</option>
                        <option value="">Index, Follow</option>
                        <option value="">No index, follow</option>
                        <option value="">Index, No follow</option>
                        <option value="">No index, no follow</option>
                    </select>
                </div> -->
               <!--  <div class="form-group">
                    <label>Modified Date</label>
                    <input type="date" class="form-control" name=""/>
                </div> --> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body"> 
               <!--  <div class="form-group">
                    <label>Modified By</label>
                     <input type="text" class="form-control" name="" />
                </div> -->
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="metadata" />
                </div>
                <div class="form-group">
                    <label>Meta Description</label>
                    <textarea name="metadesc" class="form-control" id=""  cols="50"  rows="3"></textarea>
                </div>
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
