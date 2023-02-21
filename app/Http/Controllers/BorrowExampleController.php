<?php

namespace App\Http\Controllers;

use App\Models\BorrowExample;
use App\Http\Requests\StoreBorrowExampleRequest;
use App\Http\Requests\UpdateBorrowExampleRequest;

class BorrowExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBorrowExampleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBorrowExampleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BorrowExample  $borrowExample
     * @return \Illuminate\Http\Response
     */
    public function show(BorrowExample $borrowExample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BorrowExample  $borrowExample
     * @return \Illuminate\Http\Response
     */
    public function edit(BorrowExample $borrowExample)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBorrowExampleRequest  $request
     * @param  \App\Models\BorrowExample  $borrowExample
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBorrowExampleRequest $request, BorrowExample $borrowExample)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BorrowExample  $borrowExample
     * @return \Illuminate\Http\Response
     */
    public function destroy(BorrowExample $borrowExample)
    {
        //
    }
}
