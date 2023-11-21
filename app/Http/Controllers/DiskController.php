<?php

namespace App\Http\Controllers;

use App\Models\Disk;
use Illuminate\Http\Request;

class DiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $disks = Disk::all();
        return view('disk.index', ['disks' => $disks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function show(Disk $disk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function edit(Disk $disk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disk $disk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disk $disk)
    {
        //
    }
}
