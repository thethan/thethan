<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="title" class="col-md-2 control-label">Title</label>

            <div class="col-md-10">
                <input type="text" class="form-control" name="title" autofocus id="title" value="{{ $title }}">
            </div>
        </div>

        <div class="form-group">
            <label for="content" class="col-md-2 control-label">Content</label>

            <div class="col-md-8">
            <textarea name="content" class="form-control" style="height: 3em" id="content" columns="30"
                      rows="35">{!! $content !!}</textarea>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="date" class="col-md-3 control-label">Date</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="date" name="date" value="{{ $date }}">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="col-md-8 col-md-offset-3">
                <div class="checkbox">
                    <label>
                        <input checked="{{ checked($is_draft) }}" type="checkbox" name="is_draft">
                        Draft?
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>