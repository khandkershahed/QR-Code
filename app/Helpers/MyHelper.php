<?php

use App\Models\Admin\Contact;
use App\Models\Admin\NfcIndividualMessage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

// if (!function_exists('myHelper')) { // example of a helper function
//     function myHelper($param)
//     {
//         return $param * 2;
//     }
// }

if (!function_exists('customUpload')) {
    function customUpload(UploadedFile $mainFile, string $uploadPath, $name, ?int $reqWidth = null, ?int $reqHeight = null): array
    {
        try {
            $originalName = pathinfo($mainFile->getClientOriginalName(), PATHINFO_FILENAME);

            $hashedName = substr($mainFile->hashName(), -12);

            $fileName = $name . '_' . $hashedName;

            if (!is_dir($uploadPath)) {
                if (!mkdir($uploadPath, 0777, true)) {
                    abort(404, "Failed to create the directory: $uploadPath");
                }
                chmod($uploadPath, 0777);// Reset umask to default (optional)
            }


            // $mainFile->storeAs($uploadPath, $fileName);
            $mainFile->storeAs($uploadPath, $fileName);
            $output = [
                'status'         => 1,
                'file_name'      => $fileName,
                'file_extension' => $mainFile->getClientOriginalExtension(),
                'file_size'      => $mainFile->getSize(),
                'file_type'      => $mainFile->getMimeType(),
            ];

            return array_map('htmlspecialchars', $output);
        } catch (\Exception $e) {
            return [
                'status' => 0,
                'error_message' => $e->getMessage(),
            ];
        }
    }
}

if (!function_exists('handaleFileUpload')) {
    function handaleFileUpload(UploadedFile $file, $folder = 'default')
    {
        if (!$file->isValid()) {
            abort(422, 'Invalid file');
        }

        $extension = $file->getClientOriginalExtension();
        $folderType = in_array($extension, ['jpg', 'jpeg', 'png', 'gif']) ? 'images' : 'files';

        $path = Storage::disk('public')->put("$folderType/$folder", $file);

        if (!$path) {
            abort(500, 'Error occurred while moving the file');
        }

        // Return only the file path as a string
        return $path;
    }
}

if (!function_exists('noImage')) {
    function noImage()
    {
        return 'https://static.vecteezy.com/system/resources/thumbnails/004/141/669/small/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg';
    }
}

if (!function_exists('validateImage')) {
    function validateImage($image)
    {
        if (!$image instanceof UploadedFile || !$image->isValid()) {
            throw new \Exception('Invalid image file');
        }

        // Check file type for security
        $allowedFileTypes = ['jpg', 'png', 'jpeg', 'gif'];
        $extension = $image->getClientOriginalExtension();
        if (!in_array($extension, $allowedFileTypes)) {
            throw new \Exception('Invalid file type');
        }
    }
}

if (!function_exists('createDirectory')) {
    function createDirectory($folder)
    {
        // Create directory if it doesn't exist
        $path = storage_path('app/public/' . $folder);
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        return $path;
    }
}

if (!function_exists('checkIfFileExists')) {
    function checkIfFileExists($folder, $filename)
    {
        if (Storage::disk('public')->exists($folder . '/' . $filename)) {
            throw new \Exception('File already exists');
        }
    }
}

if (!function_exists('extractMetadata')) {
    function extractMetadata($image)
    {
        // Extract metadata from the image
        $metadata = exif_read_data($image);

        return $metadata;
    }
}

if (!function_exists('resizeImage')) {
    function resizeImage($image, $width, $height)
    {
        list($originalWidth, $originalHeight) = getimagesize($image);

        if (!$height) {
            $height = ($width / $originalWidth) * $originalHeight;
        } elseif (!$width) {
            $width = ($height / $originalHeight) * $originalWidth;
        }

        $tempImage = imagecreatetruecolor($width, $height);

        return [$tempImage, $width, $height, $originalWidth, $originalHeight];
    }
}

if (!function_exists('compressImage')) {
    function compressImage($tempImage, $extension, $originalWidth, $originalHeight)
    {
        // Compress the image if its size is more than 500 KB
        $maxSize = 500 * 1024; // 500 KB
        $quality = 100;
        $attempts = 0;

        do {
            ob_start();
            switch ($extension) {
                case 'jpg':
                case 'jpeg':
                    imagejpeg($tempImage, null, $quality);
                    break;
                case 'png':
                    imagepng($tempImage, null, 9 - round(9 * $quality / 100));
                    break;
                case 'gif':
                    imagegif($tempImage);
                    break;
            }
            $imageData = ob_get_contents();
            ob_end_clean();

            $size = strlen($imageData);
            $quality -= 10;
            $attempts++;
        } while ($size > $maxSize && $attempts < 5);

        if ($size > $maxSize) {
            throw new \Exception('Unable to compress the image to the required size');
        }

        return $imageData;
    }
}

if (!function_exists('createThumbnail')) {
    function createThumbnail($image, $path, $filename, $extension, $originalWidth, $originalHeight)
    {
        $thumbnailWidth = 200; // Width of the thumbnail
        $thumbnailHeight = 200; // Height of the thumbnail

        $thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);

        switch ($extension) {
            case 'jpg':
            case 'jpeg':
                $originalImage = imagecreatefromjpeg($image);
                imagecopyresampled($thumbnail, $originalImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight);
                imagejpeg($thumbnail, $path . '/thumbnail_' . $filename);
                break;
            case 'png':
                $originalImage = imagecreatefrompng($image);
                imagecopyresampled($thumbnail, $originalImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight);
                imagepng($thumbnail, $path . '/thumbnail_' . $filename);
                break;
            case 'gif':
                $originalImage = imagecreatefromgif($image);
                imagecopyresampled($thumbnail, $originalImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight);
                imagegif($thumbnail, $path . '/thumbnail_' . $filename);
                break;
        }

        imagedestroy($thumbnail);
    }
}


if (!function_exists('generate_unique_code')) {
    function generate_unique_code($prefix = 'MSG')
    {
        $date = now()->format('dmy');
        $pattern = "$prefix-$date-%";

        $latestCode = Contact::where('code', 'LIKE', $pattern)
            ->orderByDesc('id')
            ->value('code');

        $serialNumber = $latestCode ? (int) explode('-', $latestCode)[2] + 1 : 1;

        return sprintf('%s-%s-%d', $prefix, $date, $serialNumber);
    }
}

if (!function_exists('generate_unique_nfc_message_code')) {
    function generate_unique_nfc_message_code($prefix)
    {
        $pattern = "$prefix-%";

        $latestCode = NfcIndividualMessage::where('code', 'LIKE', $pattern)
            ->orderByDesc('id')
            ->value('code');

        $serialNumber = $latestCode ? (int) explode('-', $latestCode)[1] + 1 : 1;

        return sprintf('%s-%d', $prefix, $serialNumber);
    }
}



// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

// class BrandController extends Controller
// {
//     public function store(Request $request)
//     {
//         $this->validate($request, [
//             'image' => 'required|image',
//             // ... other validation rules
//         ]);

//         try {
//             $result = uploadImage($request->file('image'), 'brand', null, null, true);
//             $filename = $result['filename'];
//             $metadata = $result['metadata'];

//             // Store the filename and metadata in the database
//             // ...

//             return redirect()->back()->with('success', 'Image uploaded successfully');
//         } catch (\Exception $e) {
//             return redirect()->back()->with('error', $e->getMessage());
//         }
//     }

//     public function update(Request $request, $id)
//     {
//         $this->validate($request, [
//             'image' => 'image',
//             // ... other validation rules
//         ]);

//         try {
//             // Fetch the brand from the database
//             $brand = Brand::findOrFail($id);

//             if ($request->hasFile('image')) {
//                 // Delete the old image file
//                 Storage::disk('public')->delete('brand/' . $brand->image);

//                 // Upload the new image
//                 $result = uploadImage($request->file('image'), 'brand', null, null, true);
//                 $filename = $result['filename'];
//                 $metadata = $result['metadata'];

//                 // Update the filename and metadata in the database
//                 $brand->image = $filename;
//                 $brand->metadata = $metadata; // Assuming the 'metadata' column exists in your 'brands' table
//                 $brand->save();
//             }

//             // ... update other fields

//             return redirect()->back()->with('success', 'Brand updated successfully');
//         } catch (\Exception $e) {
//             return redirect()->back()->with('error', $e->getMessage());
//         }
//     }
// }
