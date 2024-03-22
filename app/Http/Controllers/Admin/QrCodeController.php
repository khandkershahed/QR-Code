<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
// use App\Models\Admin\QrCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        // Convert hexadecimal color codes to RGB
        $color = $this->hexToRgb($request->color);
        $bg_color = $this->hexToRgb($request->bg_color);

        // Handle logo
        $code_logo = $request->file('logo');
        $codeLogoPath = '/upload/qr-code/logo/';

        // Generate a unique filename for the logo
        $logoFileName = Str::uuid() . '.' . $code_logo->getClientOriginalExtension();

        // Save the logo file to the specified path
        $code_logo->move(public_path($codeLogoPath), $logoFileName);
        $logoUrl = public_path('upload/qr-code/logo/' . $logoFileName);
        $logoImage = base64_encode(file_get_contents($logoUrl));

        // Adjust background color
        // $bg_color = !empty($bg_color) ? [$bg_color['r'], $bg_color['g'], $bg_color['b']] : 'none';

        // Generate SVG QR code with specified options
        $qrCode = QrCode::format('svg')
            ->size(250)
            ->eye($request->eye)
            ->style($request->style)
            ->backgroundColor($bg_color['r'], $bg_color['g'], $bg_color['b'])
            ->mergeString($logoImage, 0.5, true) // Adjust merge parameters here
            ->color($color['r'], $color['g'], $color['b'])
            ->generate($request->name);


        // Save SVG QR code to storage
        $qrCodePath = '/upload/qr-code/' . uniqid() . '.svg';
        file_put_contents(public_path($qrCodePath), $qrCode);


        // Return the SVG QR code content as a response
        return response()->json([
            'qrCode' => $qrCode,
            'qrCodePath' => $qrCodePath,
        ]);
        // $qrCode = QrCode::size(150)->color($color)->generate($request->name);

        // Save QR code to storage
        // Generate QR code
        // // Save QR code to storage
        // $qrCodePath = 'qr_codes/' . uniqid() . '.png';

        // Save QR code details to database
        // QRCode::create(array_merge($validatedData, ['qr_code_path' => $qrCodePath]));

        // return view('qr_code_display', ['qrCode' => $qrCode, 'qrCodePath' => $qrCodePath]);

        // $qrCode = QrCode::format('svg')->size(250)->generate($request->name, public_path($qrCodePath));

        // // Save QR code to storage (optional for SVG format)
        // $qrCodePath = 'qr_codes/' . uniqid() . '.svg';
        // file_put_contents(public_path($qrCodePath), $qrCode);

        // // Return the SVG QR code content as a response
        // return response($qrCode)->header('Content-Type', 'image/svg+xml');
        // return response()->json([
        //     'qrCode' => $qrCode,
        //     'qrCodePath' => $qrCodePath,
        //     // 'qrCodeDetails' => $qrCodeDetails,
        // ]);
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
