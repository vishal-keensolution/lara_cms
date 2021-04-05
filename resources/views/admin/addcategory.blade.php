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
       <!--  <div class=""> -->
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
        <!-- Begin Content -->
        
        <div class="row-fluid">
                            <div class="span12">
                                        <div id="system-message-container">
    </div>

                    
<form action="/joomla/administrator/index.php?option=com_categories&amp;extension=com_content&amp;layout=edit&amp;id=0" method="post" name="adminForm" id="item-form" class="form-validate">

    <div class="form-inline form-inline-header">
    <div class="control-group">
            <div class="control-label"><label id="jform_title-lbl" for="jform_title" class="hasTooltip required" title="&lt;strong&gt;Title&lt;/strong&gt;">
    Title<span class="star">&#160;*</span></label>
</div>
        <div class="controls"><input type="text" name="jform[title]" id="jform_title"  value="" class="input-xxlarge input-large-text required" size="40"       required aria-required="true"      />
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_alias-lbl" for="jform_alias" class="hasPopover" title="Alias" data-content="The Alias will be used in the SEF URL. Leave this blank and Joomla will fill in a default value from the title. This value will depend on the SEO settings (Global Configuration-&gt;Site). &lt;br /&gt;Using Unicode will produce UTF-8 aliases. You may also enter manually any UTF-8 character. Spaces and some forbidden characters will be changed to hyphens.&lt;br /&gt;When using default transliteration it will produce an alias in lower case and with dashes instead of spaces. You may enter the Alias manually. Use lowercase letters and hyphens (-). No spaces or underscores are allowed. Default value will be a date and time if the title is typed in non-latin letters." data-placement="bottom" >
    Alias</label>
</div>
        <div class="controls"><input type="text" name="jform[alias]" id="jform_alias"  value=""  size="45"    placeholder="Auto-generate from title"         />
</div>
</div>
</div>

    <div class="form-horizontal">
        
<ul class="nav nav-tabs" id="myTabTabs">
    <li class="active"><a href="#general" data-toggle="tab">Category</a></li>
    <li class=""><a href="#attrib-basic" data-toggle="tab">Options</a></li>
    <li class=""><a href="#publishing" data-toggle="tab">Publishing</a></li>
    <li class=""><a href="#rules" data-toggle="tab">Permissions</a></li>
</ul>
<div class="tab-content" id="myTabContent">
        
<div id="general" class="tab-pane active">
        <div class="row-fluid">
            <div class="span9">
                <label id="jform_description-lbl" for="jform_description" class="hasPopover" title="Description" data-content="Enter an optional category description in the text area.">
    Description</label>
                <div class="js-editor-tinymce"><textarea
    name="jform[description]"
    id="jform_description"
    cols=""
    rows=""
    style="width: 100%; height: 500px;"
    class="mce_editable joomla-editor-tinymce"
    >
    </textarea><div class="toggle-editor btn-toolbar pull-right clearfix">
    <div class="btn-group">
        <a class="btn" href="#"
            onclick="tinyMCE.execCommand('mceToggleEditor', false, 'jform_description');return false;"
            title="Toggle editor"
        >
            <span class="icon-eye" aria-hidden="true"></span> Toggle editor     </a>
    </div>
</div></div>            </div>
            <div class="span3">
                <fieldset class="form-vertical"><div class="control-group">
            <div class="control-label"><label id="jform_parent_id-lbl" for="jform_parent_id" class="hasPopover" title="Parent" data-content="Select a parent category.">
    Parent</label>
</div>
        <div class="controls"><select id="jform_parent_id" name="jform[parent_id]" class="">
    <option value="1">- No parent -</option>
    <option value="2">Uncategorised</option>
</select>
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_published-lbl" for="jform_published" class="hasPopover" title="Status" data-content="Set publication status.">
    Status</label>
</div>
        <div class="controls"><select id="jform_published" name="jform[published]" class="chzn-color-state" size="1">
    <option value="1" selected="selected">Published</option>
    <option value="0">Unpublished</option>
    <option value="2">Archived</option>
    <option value="-2">Trashed</option>
</select>
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_access-lbl" for="jform_access" class="hasPopover" title="Access" data-content="The access level group that is allowed to view this item.">
    Access</label>
</div>
        <div class="controls"><select id="jform_access" name="jform[access]">
    <option value="1" selected="selected">Public</option>
    <option value="5">Guest</option>
    <option value="2">Registered</option>
    <option value="3">Special</option>
    <option value="6">Super Users</option>
</select>
</div>
</div>
<input type="hidden" name="jform[id]" id="jform_id" value="0" class="readonly" /><div class="control-group">
            <div class="control-label"><label id="jform_language-lbl" for="jform_language" class="hasPopover" title="Language" data-content="Assign a language to this category.">
    Language</label>
</div>
        <div class="controls"><select id="jform_language" name="jform[language]">
    <option value="*">All</option>
    <option value="en-GB">English (en-GB)</option>
</select>
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_tags-lbl" for="jform_tags" class="hasPopover" title="Tags" data-content="Assign tags to content items. You may select a tag from the pre-defined list or enter a new tag by typing the name in the field and pressing enter.">
    Tags</label>
</div>
        <div class="controls"><select id="jform_tags" name="jform[tags][]" class="span12" multiple>
    <option value="2">Joomla</option>
</select>
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_note-lbl" for="jform_note" class="hasPopover" title="Note" data-content="An optional note to display in the category list.">
    Note</label>
</div>
        <div class="controls"><input type="text" name="jform[note]" id="jform_note"  value="" class="span12" size="40"       maxlength="255"       />
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_version_note-lbl" for="jform_version_note" class="hasPopover" title="Version Note" data-content="Enter an optional note for this version of the item.">
    Version Note</label>
</div>
        <div class="controls"><input type="text" name="jform[version_note]" id="jform_version_note"  value="" class="span12" size="45"       maxlength="255"       />
</div>
</div>
</fieldset>         </div>
        </div>
        
</div>
        
<div id="attrib-basic" class="tab-pane">
<div class="control-group">
            <div class="control-label"><label id="jform_params_category_layout-lbl" for="jform_params_category_layout" class="hasPopover" title="Layout" data-content="Use a layout from the supplied component view or overrides in the templates.">
    Layout</label>
</div>
        <div class="controls"><select id="jform_params_category_layout" name="jform[params][category_layout]">
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
            <div class="control-label"><label id="jform_params_image-lbl" for="jform_params_image" class="hasPopover" title="Image" data-content="Select or upload an image for this category.">
    Image</label>
</div>
        <div class="controls"><div class="field-media-wrapper"
    data-basepath="http://localhost/joomla/"
    data-url="index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_categories&amp;author=&amp;fieldid={field-media-id}&amp;ismoo=0&amp;folder="
    data-modal=".modal"
    data-modal-width="100%"
    data-modal-height="400px"
    data-input=".field-media-input"
    data-button-select=".button-select"
    data-button-clear=".button-clear"
    data-button-save-selected=".button-save-selected"
    data-preview="true"
    data-preview-as-tooltip="true"
    data-preview-container=".field-media-preview"
    data-preview-width="200"
    data-preview-height="200"
>
    <div id="imageModal_jform_params_image" tabindex="-1" class="modal hide fade">
    <div class="modal-header">
            <button type="button" class="close novalidate" data-dismiss="modal">×</button>
                <h3>Change Image</h3>
    </div>
<div class="modal-body">
    </div>
<div class="modal-footer">
    <a class="btn" data-dismiss="modal">Cancel</a></div>
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
            <div class="control-label"><label id="jform_params_image_alt-lbl" for="jform_params_image_alt" class="hasPopover" title="Alt Text" data-content="Alternative text used for visitors without access to images.">
    Alt Text</label>
</div>
        <div class="controls"><input type="text" name="jform[params][image_alt]" id="jform_params_image_alt"  value=""  size="20"             />
</div>
</div>

</div>
        
<div id="publishing" class="tab-pane">
        <div class="row-fluid form-horizontal-desktop">
            <div class="span6">
                <div class="control-group">
            <div class="control-label"><label id="jform_created_time-lbl" for="jform_created_time">
    Created Date</label>
</div>
        <div class="controls"><input type="text" name="jform[created_time]" id="jform_created_time"  value="" class="readonly"   readonly           />
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_created_user_id-lbl" for="jform_created_user_id">
    Created By</label>
</div>
        <div class="controls"><div class="field-user-wrapper"
     data-url="index.php?option=com_users&view=users&layout=modal&tmpl=component&required=0&field={field-user-id}&ismoo=0"
     data-modal=".modal"
     data-modal-width="100%"
     data-modal-height="400px"
     data-input=".field-user-input"
     data-input-name=".field-user-input-name"
     data-button-select=".button-select">
    <div class="input-append">
        <input type="text" id="jform_created_user_id" class="field-user-input-name" value="" placeholder="Select a User" readonly />
                    <a class="btn btn-primary button-select" title="Select User"><span class="icon-user"></span></a>
            <div id="userModal_jform_created_user_id" tabindex="-1" class="modal hide fade">
    <div class="modal-header">
            <button type="button" class="close novalidate" data-dismiss="modal">×</button>
                <h3>Select User</h3>
    </div>
<div class="modal-body">
    </div>
<div class="modal-footer">
    <a class="btn" data-dismiss="modal">Cancel</a></div>
</div>
            </div>
            <input type="hidden" id="jform_created_user_id_id" name="jform[created_user_id]" value="0" class="field-user-input" data-onchange="" />
    </div>
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_modified_time-lbl" for="jform_modified_time">
    Modified Date</label>
</div>
        <div class="controls"><input type="text" name="jform[modified_time]" id="jform_modified_time"  value="" class="readonly"   readonly           />
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_modified_user_id-lbl" for="jform_modified_user_id">
    Modified By</label>
</div>
        <div class="controls"><div class="field-user-wrapper"
     data-url="index.php?option=com_users&view=users&layout=modal&tmpl=component&required=0&field={field-user-id}&ismoo=0"
     data-modal=".modal"
     data-modal-width="100%"
     data-modal-height="400px"
     data-input=".field-user-input"
     data-input-name=".field-user-input-name"
     data-button-select=".button-select">
    <div class="input-append">
        <input type="text" id="jform_modified_user_id" class="field-user-input-name readonly" value="" readonly />
            </div>
    </div>
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_hits-lbl" for="jform_hits" class="hasPopover" title="Hits" data-content="Number of hits for this category.">
    Hits</label>
</div>
        <div class="controls"><input type="number" name="jform[hits]" id="jform_hits" value="0" class="readonly"   readonly    step="1"     /></div>
</div>
<input type="hidden" name="jform[id]" id="jform_id" value="0" class="readonly" />           </div>
            <div class="span6">
                
    
    <div class="control-group">
            <div class="control-label"><label id="jform_metadesc-lbl" for="jform_metadesc" class="hasPopover" title="Meta Description" data-content="An optional paragraph to be used as the description of the page in the HTML output. This will generally display in the results of search engines.">
    Meta Description</label>
</div>
        <div class="controls"><textarea name="jform[metadesc]" id="jform_metadesc"  cols="40"  rows="3"            ></textarea></div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_metakey-lbl" for="jform_metakey" class="hasPopover" title="Meta Keywords" data-content="An optional comma-separated list of keywords and/or phrases to be used in the HTML output.">
    Meta Keywords</label>
</div>
        <div class="controls"><textarea name="jform[metakey]" id="jform_metakey"  cols="40"  rows="3"            ></textarea></div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_metadata_author-lbl" for="jform_metadata_author" class="hasPopover" title="Author" data-content="The author of this content.">
    Author</label>
</div>
        <div class="controls"><input type="text" name="jform[metadata][author]" id="jform_metadata_author"  value=""  size="30"             />
</div>
</div>
<div class="control-group">
            <div class="control-label"><label id="jform_metadata_robots-lbl" for="jform_metadata_robots" class="hasPopover" title="Robots" data-content="Robots instructions.">
    Robots</label>
</div>
        <div class="controls"><select id="jform_metadata_robots" name="jform[metadata][robots]">
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
        
                    
<div id="rules" class="tab-pane">
            <p class="rule-desc">Manage the permission settings for the user groups below. See notes at the bottom.</p>
<div class="tabbable tabs-left" data-ajaxuri="/joomla/administrator/index.php?option=com_config&amp;task=config.store&amp;format=json&amp;65999bf697fb19cf7e29cbe4aa995a59=1" id="permissions-sliders">
<ul class="nav nav-tabs">
<li class="active">
<a href="#permission-1" data-toggle="tab">
Public
</a>
</li>
<li>
<a href="#permission-9" data-toggle="tab">
<span class="muted"></span>&ndash;&nbsp;Guest
</a>
</li>
<li>
<a href="#permission-6" data-toggle="tab">
<span class="muted"></span>&ndash;&nbsp;Manager
</a>
</li>
<li>
<a href="#permission-7" data-toggle="tab">
<span class="muted">&#9482;&nbsp;&nbsp;&nbsp;</span>&ndash;&nbsp;Administrator
</a>
</li>
<li>
<a href="#permission-2" data-toggle="tab">
<span class="muted"></span>&ndash;&nbsp;Registered
</a>
</li>
<li>
<a href="#permission-3" data-toggle="tab">
<span class="muted">&#9482;&nbsp;&nbsp;&nbsp;</span>&ndash;&nbsp;Author
</a>
</li>
<li>
<a href="#permission-4" data-toggle="tab">
<span class="muted">&#9482;&nbsp;&nbsp;&nbsp;&#9482;&nbsp;&nbsp;&nbsp;</span>&ndash;&nbsp;Editor
</a>
</li>
<li>
<a href="#permission-5" data-toggle="tab">
<span class="muted">&#9482;&nbsp;&nbsp;&nbsp;&#9482;&nbsp;&nbsp;&nbsp;&#9482;&nbsp;&nbsp;&nbsp;</span>&ndash;&nbsp;Publisher
</a>
</li>
<li>
<a href="#permission-8" data-toggle="tab">
<span class="muted"></span>&ndash;&nbsp;Super Users
</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="permission-1">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th1">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th1">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth1">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th1">
<label for="jform_rules_core.create_1" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th1">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][1]" id="jform_rules_core.create_1" title="Allow or deny Create for users in the Public group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_1"></span>
</td>
<td headers="aclactionth1">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th1">
<label for="jform_rules_core.delete_1" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th1">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][1]" id="jform_rules_core.delete_1" title="Allow or deny Delete for users in the Public group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_1"></span>
</td>
<td headers="aclactionth1">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th1">
<label for="jform_rules_core.edit_1" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th1">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][1]" id="jform_rules_core.edit_1" title="Allow or deny Edit for users in the Public group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_1"></span>
</td>
<td headers="aclactionth1">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th1">
<label for="jform_rules_core.edit.state_1" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th1">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][1]" id="jform_rules_core.edit.state_1" title="Allow or deny Edit State for users in the Public group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_1"></span>
</td>
<td headers="aclactionth1">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th1">
<label for="jform_rules_core.edit.own_1" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th1">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][1]" id="jform_rules_core.edit.own_1" title="Allow or deny Edit Own for users in the Public group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_1"></span>
</td>
<td headers="aclactionth1">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
</tbody>
</table></div>
<div class="tab-pane" id="permission-9">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th9">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th9">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth9">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th9">
<label for="jform_rules_core.create_9" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th9">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][9]" id="jform_rules_core.create_9" title="Allow or deny Create for users in the Guest group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_9"></span>
</td>
<td headers="aclactionth9">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th9">
<label for="jform_rules_core.delete_9" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th9">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][9]" id="jform_rules_core.delete_9" title="Allow or deny Delete for users in the Guest group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_9"></span>
</td>
<td headers="aclactionth9">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th9">
<label for="jform_rules_core.edit_9" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th9">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][9]" id="jform_rules_core.edit_9" title="Allow or deny Edit for users in the Guest group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_9"></span>
</td>
<td headers="aclactionth9">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th9">
<label for="jform_rules_core.edit.state_9" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th9">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][9]" id="jform_rules_core.edit.state_9" title="Allow or deny Edit State for users in the Guest group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_9"></span>
</td>
<td headers="aclactionth9">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th9">
<label for="jform_rules_core.edit.own_9" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th9">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][9]" id="jform_rules_core.edit.own_9" title="Allow or deny Edit Own for users in the Guest group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_9"></span>
</td>
<td headers="aclactionth9">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
</tbody>
</table></div>
<div class="tab-pane" id="permission-6">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th6">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th6">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth6">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th6">
<label for="jform_rules_core.create_6" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th6">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][6]" id="jform_rules_core.create_6" title="Allow or deny Create for users in the Manager group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_6"></span>
</td>
<td headers="aclactionth6">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th6">
<label for="jform_rules_core.delete_6" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th6">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][6]" id="jform_rules_core.delete_6" title="Allow or deny Delete for users in the Manager group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_6"></span>
</td>
<td headers="aclactionth6">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th6">
<label for="jform_rules_core.edit_6" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th6">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][6]" id="jform_rules_core.edit_6" title="Allow or deny Edit for users in the Manager group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_6"></span>
</td>
<td headers="aclactionth6">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th6">
<label for="jform_rules_core.edit.state_6" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th6">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][6]" id="jform_rules_core.edit.state_6" title="Allow or deny Edit State for users in the Manager group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_6"></span>
</td>
<td headers="aclactionth6">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th6">
<label for="jform_rules_core.edit.own_6" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th6">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][6]" id="jform_rules_core.edit.own_6" title="Allow or deny Edit Own for users in the Manager group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_6"></span>
</td>
<td headers="aclactionth6">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
</tbody>
</table></div>
<div class="tab-pane" id="permission-7">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th7">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th7">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth7">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th7">
<label for="jform_rules_core.create_7" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th7">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][7]" id="jform_rules_core.create_7" title="Allow or deny Create for users in the Administrator group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_7"></span>
</td>
<td headers="aclactionth7">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th7">
<label for="jform_rules_core.delete_7" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th7">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][7]" id="jform_rules_core.delete_7" title="Allow or deny Delete for users in the Administrator group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_7"></span>
</td>
<td headers="aclactionth7">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th7">
<label for="jform_rules_core.edit_7" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th7">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][7]" id="jform_rules_core.edit_7" title="Allow or deny Edit for users in the Administrator group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_7"></span>
</td>
<td headers="aclactionth7">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th7">
<label for="jform_rules_core.edit.state_7" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th7">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][7]" id="jform_rules_core.edit.state_7" title="Allow or deny Edit State for users in the Administrator group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_7"></span>
</td>
<td headers="aclactionth7">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th7">
<label for="jform_rules_core.edit.own_7" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th7">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][7]" id="jform_rules_core.edit.own_7" title="Allow or deny Edit Own for users in the Administrator group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_7"></span>
</td>
<td headers="aclactionth7">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
</tbody>
</table></div>
<div class="tab-pane" id="permission-2">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th2">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th2">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth2">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th2">
<label for="jform_rules_core.create_2" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th2">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][2]" id="jform_rules_core.create_2" title="Allow or deny Create for users in the Registered group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_2"></span>
</td>
<td headers="aclactionth2">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th2">
<label for="jform_rules_core.delete_2" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th2">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][2]" id="jform_rules_core.delete_2" title="Allow or deny Delete for users in the Registered group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_2"></span>
</td>
<td headers="aclactionth2">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th2">
<label for="jform_rules_core.edit_2" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th2">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][2]" id="jform_rules_core.edit_2" title="Allow or deny Edit for users in the Registered group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_2"></span>
</td>
<td headers="aclactionth2">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th2">
<label for="jform_rules_core.edit.state_2" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th2">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][2]" id="jform_rules_core.edit.state_2" title="Allow or deny Edit State for users in the Registered group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_2"></span>
</td>
<td headers="aclactionth2">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th2">
<label for="jform_rules_core.edit.own_2" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th2">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][2]" id="jform_rules_core.edit.own_2" title="Allow or deny Edit Own for users in the Registered group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_2"></span>
</td>
<td headers="aclactionth2">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
</tbody>
</table></div>
<div class="tab-pane" id="permission-3">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th3">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th3">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth3">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th3">
<label for="jform_rules_core.create_3" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th3">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][3]" id="jform_rules_core.create_3" title="Allow or deny Create for users in the Author group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_3"></span>
</td>
<td headers="aclactionth3">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th3">
<label for="jform_rules_core.delete_3" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th3">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][3]" id="jform_rules_core.delete_3" title="Allow or deny Delete for users in the Author group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_3"></span>
</td>
<td headers="aclactionth3">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th3">
<label for="jform_rules_core.edit_3" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th3">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][3]" id="jform_rules_core.edit_3" title="Allow or deny Edit for users in the Author group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_3"></span>
</td>
<td headers="aclactionth3">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th3">
<label for="jform_rules_core.edit.state_3" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th3">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][3]" id="jform_rules_core.edit.state_3" title="Allow or deny Edit State for users in the Author group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_3"></span>
</td>
<td headers="aclactionth3">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th3">
<label for="jform_rules_core.edit.own_3" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th3">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][3]" id="jform_rules_core.edit.own_3" title="Allow or deny Edit Own for users in the Author group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_3"></span>
</td>
<td headers="aclactionth3">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
</tbody>
</table></div>
<div class="tab-pane" id="permission-4">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th4">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th4">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth4">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th4">
<label for="jform_rules_core.create_4" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th4">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][4]" id="jform_rules_core.create_4" title="Allow or deny Create for users in the Editor group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_4"></span>
</td>
<td headers="aclactionth4">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th4">
<label for="jform_rules_core.delete_4" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th4">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][4]" id="jform_rules_core.delete_4" title="Allow or deny Delete for users in the Editor group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_4"></span>
</td>
<td headers="aclactionth4">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th4">
<label for="jform_rules_core.edit_4" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th4">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][4]" id="jform_rules_core.edit_4" title="Allow or deny Edit for users in the Editor group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_4"></span>
</td>
<td headers="aclactionth4">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th4">
<label for="jform_rules_core.edit.state_4" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th4">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][4]" id="jform_rules_core.edit.state_4" title="Allow or deny Edit State for users in the Editor group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_4"></span>
</td>
<td headers="aclactionth4">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th4">
<label for="jform_rules_core.edit.own_4" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th4">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][4]" id="jform_rules_core.edit.own_4" title="Allow or deny Edit Own for users in the Editor group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_4"></span>
</td>
<td headers="aclactionth4">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
</tbody>
</table></div>
<div class="tab-pane" id="permission-5">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th5">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th5">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth5">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th5">
<label for="jform_rules_core.create_5" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th5">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][5]" id="jform_rules_core.create_5" title="Allow or deny Create for users in the Publisher group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_5"></span>
</td>
<td headers="aclactionth5">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th5">
<label for="jform_rules_core.delete_5" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th5">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][5]" id="jform_rules_core.delete_5" title="Allow or deny Delete for users in the Publisher group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_5"></span>
</td>
<td headers="aclactionth5">
<span class="label label-important">Not Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th5">
<label for="jform_rules_core.edit_5" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th5">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][5]" id="jform_rules_core.edit_5" title="Allow or deny Edit for users in the Publisher group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_5"></span>
</td>
<td headers="aclactionth5">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th5">
<label for="jform_rules_core.edit.state_5" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th5">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][5]" id="jform_rules_core.edit.state_5" title="Allow or deny Edit State for users in the Publisher group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_5"></span>
</td>
<td headers="aclactionth5">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
<tr>
<td headers="actions-th5">
<label for="jform_rules_core.edit.own_5" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th5">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][5]" id="jform_rules_core.edit.own_5" title="Allow or deny Edit Own for users in the Publisher group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_5"></span>
</td>
<td headers="aclactionth5">
<span class="label label-success">Allowed (Inherited)</span>
</td>
</tr>
</tbody>
</table></div>
<div class="tab-pane" id="permission-8">
<table class="table table-striped">
<thead>
<tr>
<th class="actions" id="actions-th8">
<span class="acl-action">Action</span>
</th>
<th class="settings" id="settings-th8">
<span class="acl-action">Select New Setting</span>
</th>
<th id="aclactionth8">
<span class="acl-action">Calculated Setting</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td headers="actions-th8">
<label for="jform_rules_core.create_8" class="hasTooltip" title="&lt;strong&gt;Create&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;create actions&lt;/strong&gt; in this category and the calculated setting based on the parent category and group permissions.">
Create
</label>
</td>
<td headers="settings-th8">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.create][8]" id="jform_rules_core.create_8" title="Allow or deny Create for users in the Super Users group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.create_8"></span>
</td>
<td headers="aclactionth8">
<span class="label label-success"><span class="icon-lock icon-white"></span>Allowed (Super User)</span>
</td>
</tr>
<tr>
<td headers="actions-th8">
<label for="jform_rules_core.delete_8" class="hasTooltip" title="&lt;strong&gt;Delete&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;delete actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Delete
</label>
</td>
<td headers="settings-th8">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.delete][8]" id="jform_rules_core.delete_8" title="Allow or deny Delete for users in the Super Users group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.delete_8"></span>
</td>
<td headers="aclactionth8">
<span class="label label-success"><span class="icon-lock icon-white"></span>Allowed (Super User)</span>
</td>
</tr>
<tr>
<td headers="actions-th8">
<label for="jform_rules_core.edit_8" class="hasTooltip" title="&lt;strong&gt;Edit&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit
</label>
</td>
<td headers="settings-th8">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit][8]" id="jform_rules_core.edit_8" title="Allow or deny Edit for users in the Super Users group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit_8"></span>
</td>
<td headers="aclactionth8">
<span class="label label-success"><span class="icon-lock icon-white"></span>Allowed (Super User)</span>
</td>
</tr>
<tr>
<td headers="actions-th8">
<label for="jform_rules_core.edit.state_8" class="hasTooltip" title="&lt;strong&gt;Edit State&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit state actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit State
</label>
</td>
<td headers="settings-th8">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.state][8]" id="jform_rules_core.edit.state_8" title="Allow or deny Edit State for users in the Super Users group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.state_8"></span>
</td>
<td headers="aclactionth8">
<span class="label label-success"><span class="icon-lock icon-white"></span>Allowed (Super User)</span>
</td>
</tr>
<tr>
<td headers="actions-th8">
<label for="jform_rules_core.edit.own_8" class="hasTooltip" title="&lt;strong&gt;Edit Own&lt;/strong&gt;&lt;br /&gt;New setting for &lt;strong&gt;edit own actions&lt;/strong&gt; on this category and the calculated setting based on the parent category and group permissions.">
Edit Own
</label>
</td>
<td headers="settings-th8">
<select onchange="sendPermissions.call(this, event)" data-chosen="true" class="input-small novalidate" name="jform[rules][core.edit.own][8]" id="jform_rules_core.edit.own_8" title="Allow or deny Edit Own for users in the Super Users group.">
<option value="" selected="selected">Inherited</option>
<option value="1">Allowed</option>
<option value="0">Denied</option>
</select>&#160; 
<span id="icon_jform_rules_core.edit.own_8"></span>
</td>
<td headers="aclactionth8">
<span class="label label-success"><span class="icon-lock icon-white"></span>Allowed (Super User)</span>
</td>
</tr>
</tbody>
</table></div>
</div></div>
<div class="clr"></div>
<div class="alert">
Changes apply to this article only.<br /><em><strong>Inherited</strong></em> - a Global Configuration setting or higher level setting is applied.<br /><em><strong>Denied</strong></em> always wins - whatever is set at the Global or higher level and applies to all child elements.<br /><em><strong>Allowed</strong></em> will enable the action for this component unless overruled by a Global Configuration setting.
</div>          
</div>      
        
</div>
        <input type="hidden" name="jform[extension]" id="jform_extension" value="com_content" />        <input type="hidden" name="task" value="" />
        <input type="hidden" name="forcedLanguage" value="" />
        <input type="hidden" name="65999bf697fb19cf7e29cbe4aa995a59" value="1" />   </div>
</form>

                </div>
            </div>
                        <!-- End Content -->
    </section>
   <!--  <form method="post" action="{{ route('users.store')}}" enctype="multipart/form-data">
    @csrf
 
</form> -->
                </div>
            </div>
       <!--  </div> -->
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->
@endsection
