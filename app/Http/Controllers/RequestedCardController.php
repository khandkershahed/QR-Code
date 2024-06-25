<?php

namespace App\Http\Controllers;

use App\Models\Admin\NfcCard;
use Illuminate\Http\Request;

class RequestedCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =[
            'nfc_cards' => NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->latest('id')->get(),
        ];
        return view('admin.pages.requested-card.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
