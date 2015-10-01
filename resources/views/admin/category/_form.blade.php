<div class="form-group">
    <label class="col-md-3 control-label" for="title">
        Title
    </label>
    <div class="col-md-8">
        <input class="form-control" type="text" name="title" id="title" value="{{ $title }}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="subtitle">
        Subtitle
    </label>
    <div class="col-md-8">
        <input class="form-control" type="text" name="subtitle" id="subtitle" value="{{ $subtitle }}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="meta_description">
        Meta Description
    </label>
    <div class="col-md-8">
        <textarea class="form-control" name="meta_description" id="meta_description" rows="3">{{ $meta_description }}</textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="page_image">
        Page Image
    </label>
    <div class="col-md-8">
        <input class="form-control" type="text" name="page_image" id="page_image" value="{{ $page_image }}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="layout">
        Layout
    </label>
    <div class="col-md-8">
        <input class="form-control" type="text" name="layout" id="layout" value="{{ $layout }}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="reverse_direction">Direction</label>
    <div class="col-md-7">
        <label class="radio-inline" >
            <input type="radio" name="reverse_direction"
                    @if(! $reverse_direction)
                        checked="checked"
                    @endif value="0"    />
                Normal
        </label>
        <label class="radio-inline" >
            <input type="radio" name="reverse_direction"
            @if($reverse_direction)
                   checked="checked"
                   @endif value="1"    />
            Reverse
        </label>
    </div>
</div>
