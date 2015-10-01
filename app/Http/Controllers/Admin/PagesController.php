<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
use App\Jobs\PageFormFieldModel;
use App\Http\Requests\PageCreateRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.pages.index')
            ->withPages(Page::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data = $this->dispatch(new PageFormFieldModel());

        return view('admin.pages.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PageCreateRequest $request)
    {
        $page = Page::create($request->pageFillData());

        return redirect()
            ->route('admin.page.index')
            ->withSuccess('New Post Successfully Created.');
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
        $data = $this->dispatch(new PageFormFieldModel($id));


        return view('admin.pages.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PageUpdateRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->fill($request->pageFillData());
        $page->save();

        if($request->action === 'continue'){
            return redirect()
                ->back()
                ->withSuccess('Page saved.');
        }

        return redirect()
            ->route('admin.page.index')
            ->withSuccess('Page saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()
            ->route('admin.pages.index')
            ->withSuccess('Page deleted.');
    }
}
