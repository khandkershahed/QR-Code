<?php

namespace App\Http\Controllers\Admin;

use App\Models\VirtualCard;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VirtualCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'virtual_cards' => VirtualCard::latest('id')->get(),
        ];
        return view('user.pages.virtualCard.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $data = [
           'nfc_cards' => NfcCard::with('nfcData')->where('user_id', $user->id)->latest('id')->get(),
        ];
        return view('user.pages.virtualCard.create',$data);
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
