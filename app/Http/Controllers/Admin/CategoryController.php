<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Category;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    protected $fields = [
        'category' => '',
        'title' => '',
        'subtitle' => '',
        'meta_description' => '',
        'page_image' => '',
        'layout' => 'blog.layouts.index',
        'reverse_direction' => 0
    ];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        return view('admin.category.index')
            ->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $data = [];
        foreach($this->fields as $field => $default ){
            $data[$field] = old($field, $default);
        }

        return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CategoryCreateRequest $request)
    {
        //
        $category = new Category();
        foreach(array_keys($this->fields) as $field)
        {
            $category->$field = $request->get($field);
        }
        $category->save();

        return redirect('/admin/category')
            ->withSuccess("The Category '$category->category' was created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $category = Category::findOrFail($id);
        $data = ['id' => $id];
        foreach(array_keys($this->fields) as $field){
            $data[$field] = old($field,$category->$field);
        }
        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        //
        $category = Category::findOrFail($id);
        $data = ['id' => $id];
        foreach(array_keys(array_except($this->fields, ['category'])) as $field){
            $category->$field = $request->get($field);
        }
        $category->save();

        return redirect("/admin/category/$id/edit")->withSuccess('Changes saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/admin/category')
            ->withSuccess("The Category '$category->category' has been deleted.");
    }
}
