@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Categories <small>&raquo; Create New Category</small></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Category Form</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')

                        <form class="form-horizontal" action="/admin/category" method="POST">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="category">Category</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="category" id="category" value="{{ $category }}" autofocus>
                                </div>
                            </div>

                            @include('admin.category._form')

                            <div class="form-group">
                                <div class="col-md-3 col-md-offset-7">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-plus-circle"></i>
                                        &nbsp; Add New Category
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