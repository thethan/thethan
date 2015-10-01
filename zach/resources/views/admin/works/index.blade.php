@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>Works <small>&raquo; Listing</small></h3>
            </div>
            <div class="col-md-6">
                <a href="/admin/works/create" class="btn btn-primary">
                    <i class="fa fa-plus-circle"> New Work</i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="works-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Published</th>
                            <th>Title</th>
                            <th data-sortable="false">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($works as $work)
                            <tr>
                                <td data-order="{{$work->date->timestamp}}">{{ $work->date->format('j-M-y g:i a') }}</td>
                                <td>{{ $work->title }}</td>
                                <td>
                                    <a href="/admin/works/{{ $work->id }}/edit" class="btn btn-xs btn-info"><i class="fa fa-edit"> Edit</i></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection


@section('scripts')
    <script>
        $(function(){
            $("#works-table").DataTable({
                order: [0, "desc"]
            });


        });
    </script>
@endsection