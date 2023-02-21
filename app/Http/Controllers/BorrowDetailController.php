<?php

namespace App\Http\Controllers;

use App\Models\BorrowDetail;
use App\Http\Requests\StoreBorrowDetailRequest;
use App\Http\Requests\UpdateBorrowDetailRequest;

class BorrowDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreBorrowDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBorrowDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BorrowDetail  $borrowDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BorrowDetail $borrowDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BorrowDetail  $borrowDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BorrowDetail $borrowDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBorrowDetailRequest  $request
     * @param  \App\Models\BorrowDetail  $borrowDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBorrowDetailRequest $request, BorrowDetail $borrowDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BorrowDetail  $borrowDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BorrowDetail $borrowDetail)
    {
        //
    }
}
