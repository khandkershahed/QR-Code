<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RestaurantCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantCategoryController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'category_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_name' => 'required|string|max:255',
            'category_availability' => 'required|string',
            'category_start_time' => 'nullable|date_format:H:i',
            'category_end_time' => 'nullable|date_format:H:i',
        ]);

        $uploadedrestaurantLogoFile = '';
        if ($request->hasFile('category_icon')) {
            $datarestaurant = $request->file('category_icon');
            if ($datarestaurant->isValid()) {
                $restaurantfilename = 'restaurant_icon';
                $restaurantfilepath = 'public/qr_codes/restaurants/';
                $uploadedrestaurantLogoFile = customUpload($datarestaurant, $restaurantfilepath, $restaurantfilename);
            }
        } else {
            $uploadedrestaurantLogoFile = ['status' => 0];
        }
        // $iconPath = $request->file('category_icon')->store('icons', 'public');

        $category = RestaurantCategory::create([
            'user_id'               => Auth::user()->id,
            'category_icon'         => $uploadedrestaurantLogoFile['status'] == 1 ? $uploadedrestaurantLogoFile['file_name']: null,
            'category_name'         => $request->category_name,
            'category_availability' => $request->category_availability,
            'category_start_time'   => $request->category_start_time,
            'category_end_time'     => $request->category_end_time,
        ]);
        $categories = RestaurantCategory::latest('id')->get();
        return response()->json([
            'categoryContainer' => view('user.pages.qr-code.partials.restaurant_category',[ 'categories' => $categories])->render(),
            'modalContainer' => view('user.pages.qr-code.partials.qrCodeModals',[ 'categories' => $categories])->render(),
            'success' => 'Category created successfully!'
        ]);
        // return response()->json(['success' => 'Category created successfully', 'category' => $categories]);
    }


    public function categoryEdit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'category_icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_name' => 'required|string|max:255',
            'category_availability' => 'required|string',
            'category_start_time' => 'nullable|date_format:H:i',
            'category_end_time' => 'nullable|date_format:H:i',
        ]);

        // Find the category by ID
        $category = RestaurantCategory::findOrFail($request->category_id);

        // Handle icon upload if present
        $uploadedrestaurantLogoFile = '';
        if ($request->hasFile('category_icon')) {
            $datarestaurant = $request->file('category_icon');
            if ($datarestaurant->isValid()) {
                $restaurantfilename = 'restaurant_icon';
                $restaurantfilepath = 'public/qr_codes/restaurants/';
                $uploadedrestaurantLogoFile = customUpload($datarestaurant, $restaurantfilepath, $restaurantfilename);

                // If upload is successful, delete the old icon
                if ($uploadedrestaurantLogoFile['status'] == 1 && $category->category_icon) {
                    // Assuming icons are stored in the 'public/qr_codes/restaurants/' directory
                    Storage::delete('public/qr_codes/restaurants/' . $category->category_icon);
                }
            }
        } else {
            $uploadedrestaurantLogoFile = ['status' => 0];
        }

        // Update the category with the new data
        $category->update([
            'user_id'               => $category->user_id,
            'category_icon'         => $uploadedrestaurantLogoFile['status'] == 1 ? $uploadedrestaurantLogoFile['file_name'] : $category->category_icon,
            'category_name'         => $request->category_name,
            'category_availability' => $request->category_availability,
            'category_start_time'   => $request->category_start_time,
            'category_end_time'     => $request->category_end_time,
        ]);

        // Get the updated list of categories
        $categories = RestaurantCategory::latest('id')->get();

        // Return a JSON response
        return response()->json([
            'categoryContainer' => view('user.pages.qr-code.partials.restaurant_category', ['categories' => $categories])->render(),
            'modalContainer' => view('user.pages.qr-code.partials.qrCodeModals',[ 'categories' => $categories])->render(),
            'success' => 'Category updated successfully!',
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
