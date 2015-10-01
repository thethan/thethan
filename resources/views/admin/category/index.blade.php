@extends('admin.layout')

@section('content')

    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>Categories <small>&raquo; Listing</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-primary" href="/admin/category/create">
                    <i class="fa fa-plus-circle"></i> New Category
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="categories-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Categories</th>
                            <th>Title</th>
                            <th class="hidden-sm">Subtitle</th>
                            <th class="hidden-md">Page Image</th>
                            <th class="hidden-md">Meta Description</th>
                            <th class="hidden-md">Layout</th>
                            <th class="hidden-sm">Direction</th>
                            <th data-sortable="false">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->category }}</td>
                            <td>{{ $category->title }}</td>
                            <td class="hidden-sm">{{ $category->subtitle }}</td>
                            <td class="hidden-md">{{ $category->page_image }}</td>
                            <td class="hidden-md">{{ $category->meta_description }}</td>
                            <td class="hidden-md">{{ $category->layout }}</td>
                            <td class="hidden-sm">
                                @if($category->reverse_direction)
                                    Reverse
                                @else
                                    Normal
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-xs btn-info" href="/admin/category/{{$category->id }}/edit">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
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
            $('#categories-table').DataTable({
            });
        });
    </script>
@endsection