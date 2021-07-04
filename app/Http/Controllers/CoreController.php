<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCore;
use App\Http\Requests\StroreCoreRequest;
use Illuminate\Http\Request;
use App\Models\Core;
use Illuminate\Support\Facades\Hash;

class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cores  = Core::all();
        return view("cores.index", compact('cores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cores.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StroreCoreRequest $request)
    {
        Core::create([
            'core_name' => $request->get('core_name'),
            'core_url' => $request->get('core_url'),
            'core_username' => $request->get('core_username'),
            'core_passhash' => Hash::make($request->get('core_passhash')),
        ]);
        flash(sprintf("core %s is added successfully",$request->get('core_username')),'primary');
        return redirect()->route("cores.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
