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
        // QrCode::create([
        //     'name' => $request->name,
        //     'parent_id' => $request->parent_id,
        //     'status' => $request->status,
        // ]);
        // Convert hexadecimal color codes to RGB
        $color = $this->hexToRgb($request->color);
        $bg_color = $this->hexToRgb($request->bg_color);

        $logo = $request->file('logo');
        $fileName = uniqid() . '.' . $logo->getClientOriginalExtension();
        $logoPath = $logo->storeAs('public/logos', $fileName);
        $logoFullPath = storage_path('app/' . $logoPath);


        // Generate SVG QR code with logo
        $qrCode= QrCode::format('eps')->size(250)
            ->eye($request->eye)
            ->style($request->style)
            ->backgroundColor($bg_color['r'], $bg_color['g'], $bg_color['b'])
            ->color($color['r'], $color['g'], $color['b'])
            ->merge($logoFullPath, 0.2, true)
            ->generate($request->name);

        // Debugging: Ensure the QR code data is correct
        // dd($qrCode);

        // Save SVG QR code to storage
        // Save EPS QR code to storage
        $qrCodeFileName = uniqid() . '.eps';
        $qrCodePath = public_path('upload/qr-code/' . $qrCodeFileName);
        file_put_contents($qrCodePath, $qrCode);

        // Convert EPS to SVG or PNG as desired
        $outputFormat = 'svg'; // or 'png'
        $convertedFilePath = $this->convertEpsToSvgOrPng($qrCodePath, $outputFormat);

        // Check if conversion was successful
        if ($convertedFilePath) {
            // Do something with the converted image path
            return response()->json([
                'qrCodePath' => '/upload/qr-code/' . basename($convertedFilePath), // Return the path to the converted image
            ]);
        } else {
            // Handle conversion failure
            return response()->json(['error' => 'Failed to convert EPS to ' . $outputFormat], 500);
        }
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

    public function convertEpsToSvgOrPng($epsFilePath, $outputFormat)
    {
        // Load EPS file
        $image = Image::make($epsFilePath);

        // Convert to the desired output format
        switch ($outputFormat) {
            case 'svg':
                $image->encode('svg');
                break;
            case 'png':
                $image->encode('png');
                break;
            default:
                // Handle unsupported format
                return response()->json(['error' => 'Unsupported output format'], 400);
        }

        // Save the converted image
        $convertedFilePath = storage_path('app/upload/qr-code/' . uniqid() . '.' . $outputFormat);
        $image->save($convertedFilePath);

        // Return the path to the converted image
        return $convertedFilePath;
    }
}
