<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Admin\NfcCardRequest;
use App\Models\Admin\NfcCard;

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
    public function store(NfcCardRequest $request)
    {
        $typePrefix = 'QR'; // Example prefix
        $today = date('dmY');
        $userId = Auth::user()->id;
        $lastCode = NfcCard::where('code', 'like', $typePrefix . $today . $userId . '%')->orderBy('id', 'desc')->first();
        $newNumber = $lastCode ? (int)substr($lastCode->code, -1) + 1 : 1;
        $code = $typePrefix . $today . $userId . $newNumber;

        $nfc_card = NfcCard::create([
            'user_id'                 => Auth::user()->id,
            'code'                    => $code,
            'qr_type'                 => $request,
            'qr_template'             => $request,
            'qr_logo_size'            => $request,
            'qr_eye_ball'             => $request,
            'qr_eye_ball_color'       => $request,
            'qr_eye_frame'            => $request,
            'qr_eye_frame_color'      => $request,
            'qr_pattern'              => $request,
            'qr_pattern_color'        => $request,
            'qr_color_type'           => $request,
            'qr_solid_color'          => $request,
            'qr_gradient_color_type'  => $request,
            'qr_gradient_color_start' => $request,
            'qr_gradient_color_end'   => $request,
            'qr_bg_type'              => $request,
            'qr_bg_color'             => $request,
            'qr_bg_image'             => $request,
            'qr_name'                 => $request,
            'qr_scan_status'          => $request,
            'created_at'              => Carbon::now(),
        ]);
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
