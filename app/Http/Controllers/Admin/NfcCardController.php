<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class NfcCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.pages.nfc-card.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.pages.nfc-card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        return view('user.pages.nfc-card.edit');
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

    public function updateNFCTemplateSession(Request $request)
    {
        $nfcTemplateValue = $request->input('nfc_template');
        Session::forget('nfc_template');
        Session::put('nfc_template', $nfcTemplateValue);

        return response()->json(['success' => true]);
    }
}
