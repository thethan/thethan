{{-- create Folder Modal --}}
<div class="modal fade" id="modal-create-folder">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="/admin/upload/folder" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"}/>
                <input type="hidden" name="folder" value="{{ $folder }}"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"> &times;</button>
                    <h4 class="modal-title">Create New Folder</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="new_folder_name" class="col-sm-3 control-label">Folder Name</label>
                        <div class="col-sm-8">
                            <input id="new_folder_name" type="text" name="new_folder" class="form-control"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">Create Folder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Delete File Modal--}}
<div class="modal fade" id="modal-file-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Confirm</h4>
            </div>
        </div>
        <div class="modal-body">
            <p class="lead">
                <i class="fa fa-question-circle fa-lg">
                </i> &nbsp;
                Are you sure you want to delete the <kbd><span id="delete-file-name1">file</span></kbd> file?
            </p>
        </div>
        <div class="modal-footer">
            <form action="/admin/upload/file" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="_method" value="DELETE"/>
                <input type="hidden" name="folder"  value="{{$folder}}"/>
                <input type="hidden" name="del_file" id="delete-file-name2"/>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete File</button>
            </form>
        </div>
    </div>
</div>

{{-- Delete Folder Modal  --}}
<div class="modal fade" id="modal-folder-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Confirm</h4>
            </div>
            <div class="modal-body">
                <p class="lead"><i class="fa fa-question-circle fa-lg"></i> &nbsp;</p>
                Are you sure you want to delete the <kbd><span id="delete-folder-name1">folder</span></kbd> folder?
            </div>
        </div>
        <div class="modal-footer">
            <form action="/admin/upload/folder" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="_method" value="DELETE"/>
                <input type="hidden" name="folder" value="{{$folder}}"/>
                <input type="hidden" name="del_folder" id="delete-folder-name2"/>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete Folder</button>
            </form>
        </div>
    </div>
</div>

{{-- Upload File Modal--}}
<div class="modal fade" id="modal-file-upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="/admin/upload/file" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="folder" value="{{ $folder }}"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        Upload New Files
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file" class="col-sm-3 control-label"> File</label>
                        <div class="col-sm-8">
                            <input type="file" id="file" name="file"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file_name" class="col-sm-3 control-label">
                            Optional File Name
                        </label>
                        <div class="col-sm-4">
                            <input type="text" id="file_name" name="file_name" class="form_control"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-default">Upload File</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- View Image Modal --}}
<div id="modal-image-view" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Image Preview</h4>
            </div>
            <div class="modal-body">
                <img id="preview-image" src="" class="img-responsive"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>