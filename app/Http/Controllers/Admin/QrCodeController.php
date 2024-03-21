<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Models\Admin\QrCode;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{

    public function create()
    {
        return view('user.pages.qr-code.create');
    }

    public function store(Request $request)
    {
        // QrCode::create([
        //     'name' => $request->name,
        //     'parent_id' => $request->parent_id,
        //     'status' => $request->status,
        // ]);
        $color = $this->hexToRgb($request->color);
        $qrCode = QrCode::size(150)->color($color['r'], $color['g'], $color['b'])->generate($request->name);
        // $qrCode = QrCode::size(150)->color($color)->generate($request->name);

        // Save QR code to storage
        // Generate QR code
    // Save QR code to storage
    $qrCodePath = 'qr_codes/' . uniqid() . '.png';
    QrCode::format('png')->size(200)->generate($request->name, public_path($qrCodePath));

        // Save QR code details to database
        // QRCode::create(array_merge($validatedData, ['qr_code_path' => $qrCodePath]));

        // return view('qr_code_display', ['qrCode' => $qrCode, 'qrCodePath' => $qrCodePath]);

        // return redirect()->back()->with('success', 'Category created successfully');
        return response()->json([
            'qrCode' => $qrCode,
            'qrCodePath' => $qrCodePath,
            // 'qrCodeDetails' => $qrCodeDetails,
        ]);
    }

    private function hexToRgb($hex)
    {
        // Remove '#' if present
        $hex = ltrim($hex, '#');

        // Convert 6-digit hexadecimal color to RGB components
        list($r, $g, $b) = sscanf($hex, "%02x%02x%02x");

        // Return RGB components as an associative array
        return ['r' => $r, 'g' => $g, 'b' => $b];
    }
}
