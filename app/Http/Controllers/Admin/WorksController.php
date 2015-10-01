<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Work;
use App\Jobs\WorkFormFieldModel;
use App\Http\Requests\WorkCreateRequest;
use App\Http\Requests\WorkUpdateRequest;
use App\Http\Controllers\Controller;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.works.index')
            ->withWorks(Work::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data = $this->dispatch(new WorkFormFieldModel());

        return view('admin.works.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(WorkCreateRequest $request)
    {
        $work = Work::create($request->workFillData());

        return redirect()
            ->route('admin.works.index')
            ->withSuccess('New Work Successfully Created.');
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
        $data = $this->dispatch(new WorkFormFieldModel($id));

        return view('admin.works.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(WorkUpdateRequest $request, $id)
    {
        $work = Work::findOrFail($id);
        $work->fill($request->workFillData());
        $work->save();

        if($request->action === 'continue'){
            return redirect()
                ->back()
                ->withSuccess('Work saved.');
        }

        return redirect()
            ->route('admin.works.index')
            ->withSuccess('Work saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $work = Work::findOrFail($id);
        $work->delete();

        return redirect()
            ->route('admin.works.index')
            ->withSuccess('Work deleted.');
    }
}
