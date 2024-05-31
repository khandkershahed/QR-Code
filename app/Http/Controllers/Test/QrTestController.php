<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use nguyenary\QRCodeMonkey\QRCode;
use App\Http\Controllers\Controller;

class QrTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qrcode = new QRCode('nguyenary');
        $qrcode->setFileType('png');

        return view('test.qrTest');
    }

    public function generateQRCode(Request $request)
    {
        $url = $request->input('url');

        $qrCode = new QRCode($url);
        $qrCode->setSize(300);
        // $qrCode->create();
        dd(print_r($qrCode->create()));


    return response()->json(['qrCode' => $qrCode]);

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
