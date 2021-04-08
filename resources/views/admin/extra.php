  <div class="">
        <div class="span6">
            <div class="control-group">
                <div class="control-label">
                     <label>Created Date</label>
                </div>
                <div class="controls">
                    <input type="text" name="" value=""/>
               </div>
            </div>
            <div class="control-group">
                <div class="control-label">
                    <label>Created By</label>
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
                    <label>Modified By</label>
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
                    <label>Hits</label>
                </div>
                <div class="controls">
                    <input type="number" name="jform[hits]"/>
                </div>
            </div>
                <input type="hidden" name="" /> 
        </div>
            <div class="span6">
                    <div class="control-group">
                        <div class="control-label">
                            <label id="jform_metadesc-lbl" for="jform_metadesc" class="hasPopover" title="Meta Description" data-content="An optional paragraph to be used as the description of the page in the HTML output. This will generally display in the results of search engines.">Meta Description</label>
                        </div>
                        <div class="controls">
                            <textarea name="" id="" cols="40" rows="3"></textarea>
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
                            <select id="" name="">
                             <option value="" selected="selected">Use Global</option>
                                <option value="">Index, Follow</option>
                                <option value="">No index, follow</option>
                                <option value="">Index, No follow</option>
                                <option value="">No index, no follow</option>
                            </select>
                        </div>
                    </div>
            </div>
    </div> 