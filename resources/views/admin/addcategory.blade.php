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
<form action="" method="post" name="adminForm" id="item-form" class="">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">  
                <div class="form-group">
                    <label for="inputName">Title</label>
                    <input type="text" name="name" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Alias</label>
                    <input type="text" name="mobile" class="form-control" value="">
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
                   <label >Description</label>
                    <div class="js-editor-tinymce">
                        <textarea name="jform[description]" id="jform_description" cols="" rows="" style="width: 100%; height: 500px;" class="mce_editable joomla-editor-tinymce">
                        </textarea>   
                    </div> 
                </div>
            </div>    
        </div>
        <div class="col-md-4">
            <div class="card-body">
                <div class="form-group">
                    <label>Parent</label>
                    <div class="controls">
                        <select id="" name="" class="form-control">
                            <option value="1">- No parent -</option>
                            <option value="2">Uncategorised</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label id="" for="">Status</label>
                <div class="controls">
                    <select id="" name="" class="form-control">
                        <option value="1" selected="selected">Published</option>
                        <option value="0">Unpublished</option>
                        <option value="2">Archived</option>
                        <option value="-2">Trashed</option>
                    </select>
                </div>
                </div>
            <div class="form-group">
                    <label id="">Access</label>
                <div class="controls">
                    <select id="jform_access" class="form-control" name="jform[access]">
                        <option value="1" selected="selected">Public</option>
                        <option value="5">Guest</option>
                        <option value="2">Registered</option>
                        <option value="3">Special</option>
                       <option value="6">Super Users</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label>Language</label>
                <div class="controls">
                 <select id="jform_language" class="form-control"  name="jform[language]">
                   <option value="*">All</option>
                    <option value="en-GB">English (en-GB)</option>
                </select>
                </div>
            </div>
            <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_tags-lbl" for="jform_tags" class="hasPopover" title="Tags" data-content="Assign tags to content items. You may select a tag from the pre-defined list or enter a new tag by typing the name in the field and pressing enter.">Tags</label>
                                                            </div>
                                                            <div class="controls">
                                                                <select id="jform_tags" name="jform[tags][]" class="span12" multiple>
                                                                    <option value="2">Joomla</option>
                                                                </select>
                                                            </div>
            </div>
            <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_note-lbl" for="jform_note" class="hasPopover" title="Note" data-content="An optional note to display in the category list.">Note</label>
                                                            </div>
                                                            <div class="controls">
                                                                <input type="text" name="jform[note]" id="jform_note"  value="" class="span12" size="40" maxlength="255" />
                                                            </div>
            </div>
            <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_version_note-lbl" for="jform_version_note" class="hasPopover" title="Version Note" data-content="Enter an optional note for this version of the item.">Version Note</label>
                                                            </div>
                                                            <div class="controls">
                                                                <input type="text" name="jform[version_note]" id="jform_version_note"  value="" class="span12" size="45" maxlength="255" />
                                                            </div>
            </div>
         
        </div>
        </div>

    </div>        
</div>
                                            
                                        <div id="attrib-basic" class="tab-pane">
                                            <div class="control-group">
                                                    <div class="control-label">
                                                        <label id="jform_params_category_layout-lbl" for="jform_params_category_layout" class="hasPopover" title="Layout" data-content="Use a layout from the supplied component view or overrides in the templates.">Layout</label>
                                                    </div>
                                                    <div class="controls">
                                                        <select id="jform_params_category_layout" name="jform[params][category_layout]">
                                                            <optgroup label="---From Global Options---">
                                                            <option value="" selected="selected">Use Global</option>
                                                            </optgroup>
                                                            <optgroup id="jform_params_category_layout__" label="---From Component---">
                                                                <option value="_:blog">Blog</option>
                                                                <option value="_:default">List</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_params_image-lbl" for="jform_params_image" class="hasPopover" title="Image" data-content="Select or upload an image for this category.">Image</label>
                                                </div>
                                                <div class="controls">
                                                    <div class="field-media-wrapper" data-basepath="http://localhost/joomla/"
                                                        data-url="index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_categories&amp;author=&amp;fieldid={field-media-id}&amp;ismoo=0&amp;folder=" data-modal=".modal" data-modal-width="100%" data-modal-height="400px"data-input=".field-media-input" data-button-select=".button-select"data-button-clear=".button-clear" data-button-save-selected=".button-save-selected" data-preview="true" data-preview-as-tooltip="true"data-preview-container=".field-media-preview" data-preview-width="200"data-preview-height="200"
                                                        >
                                                        <div id="imageModal_jform_params_image" tabindex="-1" class="modal hide fade">
                                                            <div class="modal-header">
                                                            <button type="button" class="close novalidate" data-dismiss="modal">×</button>
                                                            <h3>Change Image</h3>
                                                            </div>
                                                            <div class="modal-body"></div>
                                                            <div class="modal-footer">
                                                                <a class="btn" data-dismiss="modal">Cancel</a>
                                                            </div>
                                                        </div>
                                                        <div class="input-prepend input-append">
                                                            <span rel="popover" class="add-on pop-helper field-media-preview"
                                                                title="Selected image." data-content="No image selected."
                                                                data-original-title="Selected image." data-trigger="hover">
                                                                <span class="icon-eye" aria-hidden="true"></span>
                                                            </span>
                                                            <input type="text" name="jform[params][image]" id="jform_params_image" value="" readonly="readonly" class="input-small hasTooltip field-media-input"/>
                                                            <a class="btn add-on button-select">Select</a>
                                                            <a class="btn icon-remove hasTooltip add-on button-clear" title="Clear"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_params_image_alt-lbl" for="jform_params_image_alt" class="hasPopover" title="Alt Text" data-content="Alternative text used for visitors without access to images.">Alt Text</label>
                                                </div>
                                                <div class="controls">
                                                     <input type="text" name="jform[params][image_alt]" id="jform_params_image_alt"  value=""  size="20" />
                                                </div>
                                            </div>
                                        </div>

                                        <div id="publishing" class="tab-pane">
                                                <div class="row-fluid form-horizontal-desktop">
                                                    <div class="span6">
                                                        <div class="control-group">
                                                                <div class="control-label">
                                                                    <label id="jform_created_time-lbl" for="jform_created_time">Created Date</label>
                                                                </div>
                                                                <div class="controls">
                                                                    <input type="text" name="jform[created_time]" id="jform_created_time"  value="" class="readonly" readonly />
                                                                </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_created_user_id-lbl" for="jform_created_user_id">Created By
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <div class="field-user-wrapper" data-url="index.php?option=com_users&view=users&layout=modal&tmpl=component&required=0&field={field-user-id}&ismoo=0" data-modal=".modal" data-modal-width="100%"data-modal-height="400px" data-input=".field-user-input"data-input-name=".field-user-input-name" data-button-select=".button-select">
                                                                    <div class="input-append">
                                                                            <input type="text" id="jform_created_user_id" class="field-user-input-name" value="" placeholder="Select a User" readonly />
                                                                            <a class="btn btn-primary button-select" title="Select User">
                                                                                <span class="icon-user"></span>
                                                                            </a>
                                                                        <div id="userModal_jform_created_user_id" tabindex="-1" class="modal hide fade">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close novalidate" data-dismiss="modal">×</button>
                                                                                <h3>Select User</h3>
                                                                            </div>
                                                                            <div class="modal-body"></div>
                                                                            <div class="modal-footer">
                                                                                <a class="btn" data-dismiss="modal">Cancel</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="jform_created_user_id_id" name="jform[created_user_id]" value="0" class="field-user-input" data-onchange="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_modified_time-lbl" for="jform_modified_time">Modified Date</label>
                                                            </div>
                                                            <div class="controls"><input type="text" name="jform[modified_time]" id="jform_modified_time" value="" class="readonly" readonly />
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_modified_user_id-lbl" for="jform_modified_user_id">
                                                                    Modified By
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <div class="field-user-wrapper" data-url="index.php?option=com_users&view=users&layout=modal&tmpl=component&required=0&field={field-user-id}&ismoo=0"data-modal=".modal" data-modal-width="100%" data-modal-height="400px"data-input=".field-user-input" data-input-name=".field-user-input-name"data-button-select=".button-select">
                                                                    <div class="input-append">
                                                                        <input type="text" id="jform_modified_user_id" class="field-user-input-name readonly" value="" readonly />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_hits-lbl" for="jform_hits" class="hasPopover" title="Hits" data-content="Number of hits for this category.">Hits</label>
                                                            </div>
                                                            <div class="controls">
                                                                <input type="number" name="jform[hits]" id="jform_hits" value="0" class="readonly" readonly step="1" />
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="jform[id]" id="jform_id" value="0" class="readonly" /> 
                                                    </div>
                                                    <div class="span6">
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_metadesc-lbl" for="jform_metadesc" class="hasPopover" title="Meta Description" data-content="An optional paragraph to be used as the description of the page in the HTML output. This will generally display in the results of search engines.">Meta Description</label>
                                                            </div>
                                                            <div class="controls">
                                                                <textarea name="jform[metadesc]" id="jform_metadesc"  cols="40"  rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_metakey-lbl" for="jform_metakey" class="hasPopover" title="Meta Keywords" data-content="An optional comma-separated list of keywords and/or phrases to be used in the HTML output.">Meta Keywords</label>
                                                            </div>
                                                            <div class="controls">
                                                                <textarea name="jform[metakey]" id="jform_metakey"  cols="40"  rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_metadata_author-lbl" for="jform_metadata_author" class="hasPopover" title="Author" data-content="The author of this content.">Author</label>
                                                            </div>
                                                            <div class="controls"><input type="text" name="jform[metadata][author]" id="jform_metadata_author"  value=""  size="30" />
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label id="jform_metadata_robots-lbl" for="jform_metadata_robots" class="hasPopover" title="Robots" data-content="Robots instructions.">Robots</label>
                                                            </div>
                                                            <div class="controls">
                                                                <select id="jform_metadata_robots" name="jform[metadata][robots]">
                                                                    <option value="" selected="selected">Use Global</option>
                                                                    <option value="index, follow">Index, Follow</option>
                                                                    <option value="noindex, follow">No index, follow</option>
                                                                    <option value="index, nofollow">Index, No follow</option>
                                                                    <option value="noindex, nofollow">No index, no follow</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>       
                                        </div>  
                                </div>
                                <input type="hidden" name="jform[extension]" id="jform_extension" value="com_content" />
                                <input type="hidden" name="task" value="" />
                                <input type="hidden" name="forcedLanguage" value="" />
                                <input type="hidden" name="65999bf697fb19cf7e29cbe4aa995a59" value="1" /> 
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
