<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="title" class="col-md-2 control-label">Title</label>

            <div class="col-md-10">
                <input type="text" class="form-control" name="title" autofocus id="title" value="{{ $title }}">
            </div>
        </div>
        <div class="form-group">
            <label for="subtitle" class="col-md-2 control-label">Subtitle</label>

            <div class="col-md-10">
                <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $subtitle }}">
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-md-2 control-label">Content</label>

            <div class="col-md-8">
            <textarea name="content" class="form-control" style="height: 3em" id="content" columns="30"
                      rows="35">{!! $content !!}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="page_image" class="col-md-2 control-label">Page Image</label>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="page_image" id="page_image"
                               onchange="handle_image_change()"
                               alt="Image thumbnail" value="{{$page_image}}">
                    </div>
                    <script>
                        function handle_image_change() {
                            $("#pgae-image-preview").attr('src', function () {
                                var value = $("#page_image").val();
                                if (!value) {
                                    value =
                                    {!! json_encode(config('blog.page_image')) !!}
                                if (value == null) {
                                    value = '';
                                }
                            }
                            if (value.substr(0, 4) != 'http' && value.substr(0, 1) != '/') {
                                value = {!! json_encode(config('blog.uploads.webpath')) !!} +'/' + value;
                        }
                        return value;
                        });
                        }
                    </script>
                    <div class="visible-sm space-10">
                    </div>
                    <div class="col-md-4 text-right">
                        <img src="{{page_image($page_image)}}" class="img img_responsive" id="page-image-preview"
                             style="max-height:40px">
                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="published_date" class="col-md-3 control-label">Pub Date</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="published_date" name="published_date" value="{{ $published_date }}">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <lsbel for="published_time" class="col-md-3 control-label">Pub Time</lsbel>
            <div class="col-md-8">
                <input type="text" class="form-control" id="published_time" name="published_time" value="{{ $published_time }}">
            </div>
        </div>

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
        <div class="form-group">
            <label for="category_id" class="col-md-3 control-label">Category</label>
            <?php
               // var_dump($tags);
                //exit;
                ?>
            <div class="col-md-3">
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option @if( $category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>

            </div>
        </div>

        <div class="form-group">
            <label for="layout" class="col-md-3 control-label">Layout</label>

            <div class="col-md-8">
                <input type="text" class="form-control" name="layout" id="layout" value="{{$layout}}">
            </div>
        </div>
        <div class="form-group">
            <label for="meta_description" class="col-md-3 control-label">Meta Description</label>

            <div class="col-md-8">
                <textarea class="form-control" name="meta_description" id="meta_description" cols="30"
                          rows="5"></textarea>
            </div>
        </div>
    </div>

</div>