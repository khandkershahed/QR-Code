<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NfcIndividualMessageRequest;
use App\Models\Admin\NfcIndividualMessage;
use Illuminate\Http\Request;

class NfcIndividualMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(NfcIndividualMessageRequest $request)
    {
        NfcIndividualMessage::create([
            'user_id'    => $request->user_id,
            'nfc_id'   => $request->nfc_id,
            'nfc_code'   => $request->nfc_code,
            'code'       => generate_unique_nfc_message_code($request->nfc_code),
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'headline'    => $request->headline,
            'message'    => $request->message,
            'ip_address' => request()->ip(),
        ]);
        // toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Your Message has been saved successfully. We will contact with you soon.');
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
        NfcIndividualMessage::find($id)->destroy();
    }
}
