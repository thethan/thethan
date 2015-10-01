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
                <h3>Work <small>&raquo; Add New Work</small></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            New Work Form
                        </h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')
                        @include('admin.partials.success')

                        <form action="{{ route('admin.works.store')}}" role="form"  method="POST" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @include('admin.works._form')

                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type=submit" class="btn btn-primary btn-lg">
                                            <i class="fa fa-disk-o">
                                            </i>
                                            Save New Work
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
@endsection


@section('scripts')
    <script src="/assets/pickadate/picker.js"></script>
    <script src="/assets/pickadate/picker.date.js"></script>
    <script src="/assets/pickadate/picker.time.js"></script>
    <script src="/assets/selectize/selectize.min.js"></script>
    <script src="/assets/redactor/redactor.min.js"></script>
    <script>
        $(function(){
           $('#date').pickadate({
               format: "mmmm-d-yyyy"
           });

            $('#content').redactor({
                imageUpload: '/admin/upload/fromeditor',
                minHeight: 500,
            });

        });
    </script>
@endsection