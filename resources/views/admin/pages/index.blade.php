@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>Pages <small>&raquo; Listing</small></h3>
            </div>
            <div class="col-md-6">
                <a href="/admin/page/create" class="btn btn-primary">
                    <i class="fa fa-plus-circle"> New Page</i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="pages-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Published</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th data-sortable="false">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                            <tr>
                                <td data-order="{{$page->published_at->timestamp}}">{{ $page->published_at->format('j-M-y g:i a') }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->subtitle  }}</td>
                                <td>
                                    <a href="/admin/page/{{ $page->id }}/edit" class="btn btn-xs btn-info"><i class="fa fa-edit"> Edit</i></a>

                                    <a href="admin/page/{{ $page->slug }}" class="btn btn-xs btn-warning"><i class="fa fa-eye"> View</i></a>
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
            $("#pages-table").DataTable({
                order: [0, "desc"]
            });


        });
    </script>
@endsection