@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="/assets/pickadate/themes/default.css">
    <link rel="stylesheet" href="/assets/pickadate/themes/default.date.css">
    <link rel="stylesheet" href="/assets/pickadate/themes/default.time.css">
    <link rel="stylesheet" href="/assets/selectize/css/selectize.css">
    <link rel="stylesheet" href="/assets/selectize/css/selectize.bootstrap3.css">
    <link rel="stylesheet" href="/assets/redactor/css/redactor.css">
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Pages <small>&raquo; Edit Page</small></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            New Page Form
                        </h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')
                        @include('admin.partials.success')

                        <form action="{{ route('admin.page.update', $id)}}" role="form"  method="POST" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                            @include('admin.pages._form')

                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary btn-lg" name="action" value="continue">
                                            <i class="fa fa-save">
                                            </i>
                                            Save - Continue
                                        </button>
                                        <button type="submit" class="btn btn-success btn-lg" name="action" value="finished">
                                            <i class="fa fa-save">
                                            </i>
                                            Save - Finished
                                        </button>
                                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modal-delete">
                                            <i class="fa fa-times-circle">
                                            </i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Confirm Delete --}}
    <div class="modal fade" id="modal-delete" tabindex="-1">
        <div class="modal-dialogue">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="close" class="close">&times;</button>
                    <h4 class="modal-header">Please Confirm</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        <i class="fa fa-question-circle fa-lg"></i> &nbsp;
                        Are you sure you want to delete this post?
                    </p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin.post.destroy', $id) }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"></i> Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="/assets/pickadate/picker.js"></script>
    <script src="/assets/pickadate/picker.date.js"></script>
    <script src="/assets/pickadate/picker.time.js"></script>
    <script src="/assets/selectize/selectize.min.js"></script>
    <script src="/assets/redactor/redactor.min.js"></script>
    <script>
        $(function(){
           $('#published_date').pickadate({
               format: "mmmm-d-yyyy"
           });
            $('#published_time').pickatime({
                format: "h:i A"
            });
            $("#category_id").selectize({
                create: true
            });
            $("#tags").selectize({
                create: true
            });
            $('#content').redactor({
                imageUpload: '/admin/upload/fromeditor',
                minHeight: 500
            });

        });
    </script>
@endsection