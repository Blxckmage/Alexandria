<?php

namespace App\Http\Controllers;

use App\Models\Registration_card;
use App\Http\Requests\StoreRegistration_cardRequest;
use App\Http\Requests\UpdateRegistration_cardRequest;

class RegistrationCardController extends Controller
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
     * @param  \App\Http\Requests\StoreRegistration_cardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistration_cardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration_card  $registration_card
     * @return \Illuminate\Http\Response
     */
    public function show(Registration_card $registration_card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration_card  $registration_card
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration_card $registration_card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistration_cardRequest  $request
     * @param  \App\Models\Registration_card  $registration_card
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistration_cardRequest $request, Registration_card $registration_card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration_card  $registration_card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration_card $registration_card)
    {
        //
    }
}
