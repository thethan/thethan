@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Tags <small>&raquo; Creste New Tag</small></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Tag Form</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')

                        <form class="form-horizontal" action="/admin/tag" method="POST">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="Tag">Tag</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="tag" id="tag" value="{{ $tag }}" autofocus>
                                </div>
                            </div>

                            @include('admin.tag._form')

                            <div class="form-group">
                                <div class="col-md-3 col-md-offset-7">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-plus-circle"></i>
                                        &nbsp; Add New Tag
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection