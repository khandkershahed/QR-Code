<?php

namespace App\Http\Controllers\Admin;

use App\Models\BarCode;
use Milon\Barcode\DNS1D;
use App\Models\BarcodeImage;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Imports\BarcodesImport;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class BarCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $user = Auth::user();
        $subscription = $isUserRoute
            ? Subscription::with('plan')->where('user_id', $user->id)
            ->whereHas('plan', function ($query) {
                $query->where('type', 'qr');
            })->active()->first()
            : null;
        $bar_codes = $isUserRoute ?
            BarCode::where('user_id', $user->id)->latest('id')->get() :
            BarCode::latest('id')->get();

        $view = $isUserRoute ? 'user.pages.bar-code.index' : 'admin.pages.bar-code.index';

        // dd($user->subscribed());
        return view($view, [
            'bar_codes'    => $bar_codes,
            'subscription' => $subscription,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $view = $isUserRoute ? 'user.pages.bar-code.create' : 'admin.pages.bar-code.create';
        return view($view);
        // return view('admin.pages.bar-code.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
    //     $request->validate([
    //         'product_id' => 'required|string',
    //         // 'barcode_pattern' => 'required|string',
    //     ]);

    //     $typePrefix = 'BAR';
    //     $today = date('dm');
    //     $userId = $isUserRoute ? Auth::user()->id : null;

    //     $lastCode = BarCode::where('code', 'like', $typePrefix . $today . $userId . '%')
    //         ->orderBy('id', 'desc')->first();
    //     $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
    //     $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

    //     $productId = $request->input('product_id');
    //     $barcodePattern = !empty($request->input('barcode_pattern')) ? $request->input('barcode_pattern') : 'C';
    //     $barcodeColor = $this->hexToRgb($request->input('barcode_color', '#000000'));
    //     $barcodeWidth = $request->input('barcode_width', 2);
    //     $barcodeHeight = !empty($request->input('barcode_height')) ? $request->input('barcode_height') : 60;

    //     $d = new DNS1D();

    //     try {
    //         $formats = ['png', 'jpg', 'pdf'];
    //         $urls = [];

    //         foreach ($formats as $format) {
    //             $directory = public_path("storage/barcodes/$format/");
    //             if (!file_exists($directory)) {
    //                 mkdir($directory, 0777, true);
    //             }

    //             $filePath = "$directory$code.$format";

    //             switch ($format) {
    //                 case 'png':
    //                     $barCodeStringPng = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //                     file_put_contents($filePath, base64_decode($barCodeStringPng));
    //                     $urls['png'] = "storage/barcodes/png/$code.png";
    //                     break;
    //                 case 'jpg':
    //                     $barCodeStringPng = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //                     // $barCodeStringJpg = $d->getBarcodeJPG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //                     // file_put_contents($filePath, "data:image/jpeg;base64,' . $barCodeStringJpg . '");
    //                     $qrCodePath = '../public/storage/jpg/' . $code . '.jpg';
    //                     $base64ImageString = base64_encode($barCodeStringPng);
    //                     $imageContent = base64_decode($base64ImageString);
    //                     $image = Image::make($imageContent);
    //                     $image->encode('jpg', 100)->save($filePath);
    //                     $urls['jpg'] = "storage/barcodes/jpg/$code.jpg";
    //                     break;
    //                 case 'pdf':
    //                     $barCodeStringPdf = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //                     if (!$barCodeStringPdf) {
    //                         continue 2; // Correct usage of continue to skip to the next format
    //                     }

    //                     $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . $barCodeStringPdf . '" /></div>';

    //                     // Create DomPDF instance
    //                     $pdf = \App::make('dompdf.wrapper');
    //                     $pdf->loadHTML($htmlContent, 'UTF-8');
    //                     $pdf->save("$filePath");
    //                     $urls['pdf'] = "storage/barcodes/pdf/$code.pdf";
    //                     break;
    //             }
    //         }

    //         $bar_code = BarCode::create([
    //             'user_id'         => $isUserRoute ? Auth::user()->id : null,
    //             'admin_id'        => $isUserRoute ? null : Auth::guard('admin')->user()->id,
    //             'barcode_type'    => 'single_upload',
    //             'barcode_pattern' => $barcodePattern,
    //             'barcode_color'   => json_encode($barcodeColor), // Store as JSON string
    //             'code'            => $code,
    //             'product_name'    => $request->product_name,
    //             'product_id'      => $productId,
    //             'product_price'   => $request->product_price,
    //             'per_page'        => $request->per_page,
    //             'barcode_width'   => $barcodeWidth,
    //             'barcode_height'  => $barcodeHeight,
    //             'bulk_file'       => $request->bulk_file,
    //             'bar_code_jpg'    => $urls['jpg'] ?? null,
    //             'bar_code_pdf'    => $urls['pdf'] ?? null,
    //             'bar_code_svg'    => $urls['svg'] ?? null,
    //             'bar_code_png'    => $urls['png'] ?? null,
    //         ]);

    //         $routeName = $isUserRoute ? 'user.barcode.index' : 'admin.barcode.index';
    //         return redirect()->route($routeName)->with('success', 'You have successfully generated Bar Code.');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withInput()->with('error', ['error' => $e->getMessage()]);
    //     }
    // }

    public function store(Request $request)
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;

        // Validate request inputs
        $request->validate([
            'product_id' => 'required|string',
            'bar_code_quantity' => 'required|integer|min:1',
            'per_page' => 'required|integer|min:1',
        ]);

        // Get user ID based on route
        $typePrefix = 'BAR';
        $today = date('dm');
        $userId = $isUserRoute ? Auth::user()->id : null;

        $lastCode = BarCode::where('code', 'like', $typePrefix . $today . $userId . '%')
            ->orderBy('id', 'desc')->first();
        $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
        $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

        // Initialize barcode parameters
        $productId = $request->input('product_id');
        $barcodePattern = $request->input('barcode_pattern', 'PHARMA');
        $barcodeColor = $this->hexToRgb($request->input('barcode_color', '#000000'));
        $barcodeWidth = $request->input('barcode_width', 200); // Adjusted to fixed width for simplicity
        $barcodeHeight = $request->input('barcode_height', 60);
        $quantity = $request->input('bar_code_quantity', 1);
        $perPage = $request->input('per_page', 36); // Default to 36 barcodes per page

        $d = new DNS1D();
        $urls = [];
        $barcodes = [];

        // Generate barcodes
        try {
            for ($i = 0; $i < $quantity; $i++) {
                // Generate barcode as PNG image (adjust parameters as needed)
                $barcode = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
                $barcodes[] = $barcode;
            }

            // Initialize variables for pagination
            $currentPage = 1;
            $totalPages = ceil(count($barcodes) / $perPage);
            $padding = 30; // Padding around each barcode and the main canvas
            $barcodesPerRow = 4; // Number of barcodes per row
            $barcodesPerPage = $perPage; // Barcodes per page
            $maximumwidth = 350;
            $maximumheight = 300;


            // Loop through barcodes and create canvases/pages
            while ($barcodes) {
                // Calculate canvas size based on the number of barcodes per page
                $rows = ceil($barcodesPerPage / $barcodesPerRow);
                $canvasWidth = $barcodesPerRow * ($maximumwidth + $padding * 2);
                $canvasHeight = $rows * ($maximumheight + $padding * 2);

                // Initialize canvas for combined image
                $canvas = Image::canvas($canvasWidth + $padding * 2, $canvasHeight + $padding * 2, '#ffffff');

                // Calculate positions for each barcode on the canvas
                $x = $padding;
                $y = $padding;
                $count = 0;

                foreach ($barcodes as $key => $barcode) {
                    if ($count >= $barcodesPerPage) {
                        break; // Stop if reached perPage limit
                    }

                    // Open each barcode image
                    $barcodeImage = Image::make($barcode);
                    $barcodeImage->resize($maximumwidth, $maximumheight, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    // Insert barcode into the canvas with padding
                    $canvas->insert($barcodeImage, 'top-left', (int)$x, (int)$y);

                    // Update positions for the next barcode (adjust as needed)
                    $x += $maximumwidth + $padding * 2; // Add spacing between barcodes
                    if ($x + $maximumwidth + $padding > $canvasWidth) { // Adjust canvas width if necessary
                        $x = $padding;
                        $y += $maximumheight + $padding * 2; // Add spacing between rows
                    }

                    $count++;
                }

                // Remove processed barcodes
                array_splice($barcodes, 0, $count);

                // Encode the canvas as PNG
                $mergedImage = $canvas->encode('png');

                $filename = 'barcode_page_' . $currentPage . '.png';
                Storage::put('public/barcodes/' . $filename, $mergedImage);

                // Save the record in the database
                $bar_code = BarCode::create([
                    'user_id'         => $isUserRoute ? Auth::user()->id : null,
                    'admin_id'        => $isUserRoute ? null : Auth::guard('admin')->user()->id,
                    'barcode_type'    => 'single_upload',
                    'barcode_pattern' => $barcodePattern,
                    'barcode_color'   => json_encode($barcodeColor), // Store as JSON string
                    'code'            => $code,
                    'product_name'    => $request->product_name,
                    'product_id'      => $productId,
                    'product_price'   => $request->product_price,
                    'per_page'        => $request->per_page,
                    'barcode_width'   => $barcodeWidth,
                    'barcode_height'  => $barcodeHeight,
                    'bulk_file'       => $request->bulk_file,
                    // 'bar_code_jpg'    => $urls['jpg'] ?? null,
                    // 'bar_code_pdf'    => $urls['pdf'] ?? null,
                    // 'bar_code_svg'    => $urls['svg'] ?? null,
                    // 'bar_code_png'    => $urls['png'] ?? null,
                ]);

                BarcodeImage::create([
                    'barcode_id' => $bar_code ? $bar_code->id : null,
                    'page_number' => $currentPage,
                    'image' => 'barcodes/images/' . $filename,
                    
                ]);

                // Display or save the image
                echo '<img src="data:image/png;base64,' . base64_encode($mergedImage) . '" alt="barcode"/>';

                // Add pagination logic here if needed
                echo "<p>Page: $currentPage / $totalPages</p>";
                $currentPage++;
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', ['error' => $e->getMessage()]);
        }
    }





    public function barcodePreview(Request $request)
    {


        $productId = $request->input('product_id');
        $barcodePattern = !empty($request->input('barcode_pattern')) ? $request->input('barcode_pattern') : 'PHARMA';
        $barcodeColor = $this->hexToRgb($request->input('barcode_color', '#000000')); // Default to black if no color is provided
        $barcodeWidth = $request->input('barcode_width', 2);
        $barcodeHeight = !empty($request->input('barcode_height')) ? $request->input('barcode_height') : 60;


        $d = new DNS1D();

        if (!file_exists(public_path('storage/barcodes/'))) {
            mkdir(public_path('storage/barcodes/'), 0777, true);
        }

        try {
            $barCodeString = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, array($barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']), true);
            if ($barCodeString === false) {
                throw new \Exception('Barcode generation failed.');
            }

            $barCodeDataUrl = 'data:image/png;base64,' . $barCodeString;

            return response()->json(['bar_code' => $barCodeDataUrl]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    // $request->validate([
    //     'bulk_file' => 'required|file|mimes:csv,xlsx|max:10240',
    // ]);

    public function bulkStore(Request $request)
    {
        if (!$request->hasFile('bulk_file')) {
            return redirect()->back()->with('error', 'No file uploaded.');
        }

        $file = $request->file('bulk_file');
        if (!$file) {
            return redirect()->back()->with('error', 'Failed to receive the file.');
        }

        $request->validate([
            'bulk_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        $filePath = $file->store('barcode/excel/');
        if (!$filePath) {
            return redirect()->back()->with('error', 'File upload failed.');
        }

        $file = Storage::path($filePath);

        try {
            $barcodes = Excel::toArray(new BarcodesImport, $file)[0];
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to read the Excel file.');
        }

        Log::info('Barcodes Data: ', $barcodes);

        $headers = array_shift($barcodes); // Extract the headers

        $d = new DNS1D();
        $barcodePattern = $request->input('barcode_pattern');
        $barcodeColor = ['r' => 0, 'g' => 0, 'b' => 0];
        $barcodeWidth = 2;
        $barcodeHeight = 60;

        foreach ($barcodes as $row) {
            Log::info('Processing Row: ', $row);

            // Map headers to row values
            $row = array_combine($headers, $row);

            if (!isset($row['Product ID']) || !isset($row['Product Name']) || !isset($row['Product Price']) || !isset($row['Per Page'])) {
                Session::flash('error', 'Missing data in row: ' . $row);
                Log::warning('Missing data in row: ', $row);
                continue;
            }
            // dd($row['Product ID']);
            $productId = $row['Product ID'];
            $productName = $row['Product Name'];
            $productPrice = $row['Product Price'];
            $perPage = $row['Per Page'];

            $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
            $typePrefix = 'BAR';
            $today = date('dm');
            $userId = $isUserRoute ? Auth::id() : null;

            $lastCode = BarCode::where('code', 'like', $typePrefix . $today . $userId . '%')
                ->orderBy('id', 'desc')->first();
            $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
            $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

            try {
                $urls = $this->generateBarcodes($d, $productId, $code, $barcodePattern, $barcodeWidth, $barcodeHeight, $barcodeColor);

                BarCode::create([
                    'user_id'            => $isUserRoute ? Auth::id() : null,
                    'admin_id'           => $isUserRoute ? null : Auth::guard('admin')->id(),
                    'barcode_type'       => 'bulk_upload',
                    'barcode_color'      => json_encode($barcodeColor),
                    'barcode_pattern'    => $barcodePattern,
                    'code'               => $code,
                    'product_id'         => $productId,
                    'product_name'       => $productName,
                    'product_price'      => $productPrice,
                    'per_page'           => $perPage,
                    'barcode_width'      => $barcodeWidth,
                    'barcode_height'     => $barcodeHeight,
                    'bulk_file'          => $file,
                    'bar_code_jpg'       => $urls['jpg'] ?? null,
                    'bar_code_pdf'       => $urls['pdf'] ?? null,
                    'bar_code_svg'       => $urls['svg'] ?? null,
                    'bar_code_png'       => $urls['png'] ?? null,
                ]);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $productId . ': ' . $e->getMessage());
                Log::error('Failed to generate barcode for product ID ' . $productId . ': ' . $e->getMessage());
            }
        }
        return redirect()->back()->with('success', 'Barcodes generated successfully.');
    }

    private function generateBarcodes($dns1d, $productId, $code, $pattern, $width, $height, $color)
    {
        $formats = ['png', 'jpg', 'pdf'];
        $urls = [];

        foreach ($formats as $format) {
            $directory = public_path("storage/barcodes/$format/");
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            $filePath = "$directory$code.$format";

            switch ($format) {
                case 'png':
                    $barCodeStringPng = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
                    file_put_contents($filePath, base64_decode($barCodeStringPng));
                    $urls['png'] = "storage/barcodes/png/$code.png";
                    break;
                case 'jpg':
                    $barCodeStringPng = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
                    $imageContent = base64_decode(base64_encode($barCodeStringPng));
                    $image = Image::make($imageContent);
                    $image->encode('jpg', 100)->save($filePath);
                    $urls['jpg'] = "storage/barcodes/jpg/$code.jpg";
                    break;
                case 'pdf':
                    $barCodeStringPdf = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
                    if (!$barCodeStringPdf) {
                        continue 2;
                    }
                    $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . $barCodeStringPdf . '" /></div>';
                    $pdf = \App::make('dompdf.wrapper');
                    $pdf->loadHTML($htmlContent, 'UTF-8');
                    $pdf->save($filePath);
                    $urls['pdf'] = "storage/barcodes/pdf/$code.pdf";
                    break;
            }
        }

        return $urls;
    }

    private function hexToRgb($hex)
    {
        $hex = ltrim($hex, '#');
        list($r, $g, $b) = sscanf($hex, "%02x%02x%02x");
        return ['r' => $r, 'g' => $g, 'b' => $b];
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
        BarCode::find($id)->delete();
    }
}
