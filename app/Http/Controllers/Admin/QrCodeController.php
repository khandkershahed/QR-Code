<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
// use App\Models\Admin\QrCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Image;

class QrCodeController extends Controller
{

    public function create()
    {

        return view('user.pages.qr-code.create');
    }

    public function store(Request $request)
    {

        $color = $this->hexToRgb($request->color);
        $bg_color = $this->hexToRgb($request->bg_color);

        $logo = $request->file('logo');
        $fileName = uniqid() . '.' . $logo->getClientOriginalExtension();
        $logoPath = $logo->storeAs('public/qr_codes/logos', $fileName);
        $logoFullPath = storage_path('app/' . $logoPath);


        // Generate SVG QR code with logo
        $qrCode= QrCode::format('png')->size(250)
            ->eye($request->eye)
            ->style($request->style)
            ->backgroundColor($bg_color['r'], $bg_color['g'], $bg_color['b'])
            ->color($color['r'], $color['g'], $color['b'])
            ->merge($logoFullPath, 0.2, true)
            ->generate($request->name);

            $qrFileName = uniqid() . '.png';
            $qrCodePath = 'public/qr_codes/' . $qrFileName;
            Storage::put($qrCodePath, $qrCode);

            // Return the URL of the generated QR code image
            if ($qrCodePath) {
                if (file_exists(public_path('storage'))) {
                    return response()->json([
                        'qrCodePath' => asset('storage/qr_codes/'.$qrFileName), // Generate URL using asset() helper
                    ]);
                } else {
                    return response()->json(['error' => 'Symbolic link not found. Please run php artisan storage:link'], 500);
                }
            } else {
                // Handle failure
                return response()->json(['error' => 'Failed to generate QR code'], 500);
            }

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
