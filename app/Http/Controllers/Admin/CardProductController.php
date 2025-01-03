<?php

namespace App\Http\Controllers\Admin;

use App\Models\CardProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'card_products' => CardProduct::latest('id')->get(),

        ];
        return view('admin.pages.cardProduct.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.cardProduct.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // Validation rules
            $validator = Validator::make($request->all(), [
                'name'              => 'required|string|max:255',
                'price'             => 'required|min:1',
                'currency'          => 'required|string',
                'short_description' => 'required|string',
                'image'             => 'required|image|mimes:webp,jpeg,png,jpg,gif|max:2048',
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            // Handle file uploads
            $files = [
                'image'           => $request->file('image'),
                'thumbnail_image' => $request->file('thumbnail_image'),
            ];

            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if ($file) {
                    $filePath = 'card_products/' . $key;
                    $uploadedFiles[$key] = customUploadEcommerce($file, $filePath);

                    // Check upload status and handle errors
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Prepare the plan_descriptions data
            $planDescriptions = $request->has('plan_descriptions') ? json_encode($request->input('plan_descriptions')) : json_encode([]);

            // Create the CardProduct record
            $cardProduct = CardProduct::create([
                'name'                 => $request->name,
                'short_description'    => $request->short_description,
                'description'          => $request->description,
                'shipping_description' => $request->shipping_description,
                'manual'               => $request->manual,
                'note'                 => $request->note,
                'package_price'        => $request->package_price,
                'price'                => $request->price,
                'stripe_plan'          => $request->stripe_plan,
                'plan_descriptions'    => $planDescriptions,
                'billing_cycle'        => $request->billing_cycle,
                'payment_link'         => $request->payment_link,
                'type'                 => $request->type,
                'currency'             => $request->currency,
                'interval'             => $request->interval,
                'max_users'            => $request->max_users,
                'qr'                   => $request->qr,
                'nfc'                  => $request->nfc,
                'status'               => $request->status,
                'thumbnail_image'      => $uploadedFiles['thumbnail_image']['status'] == 1 ? $uploadedFiles['thumbnail_image']['file_path'] : null,
                'image'                => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
            ]);

            // Commit the transaction
            DB::commit();

            // Flash success message and redirect
            Session::flash('success', 'Plan Created successfully');
            return redirect()->route('admin.card-product.index');
        } catch (\Exception $e) {
            // Rollback the transaction on failure
            DB::rollBack();

            // Flash error message and redirect
            Session::flash('error', 'Error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
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
        return view('admin.pages.cardProduct.edit', ['card_product' => CardProduct::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            // Validation rules
            $validator = Validator::make($request->all(), [
                'name'              => 'required|string|max:255',
                'price'             => 'required|min:1',
                'currency'          => 'required|string',
                'short_description' => 'required|string',
                'image'             => 'nullable|image|mimes:webp,jpeg,png,jpg,gif|max:2048',
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            // Handle file uploads (image is optional for updates)
            $files = [
                'image'           => $request->file('image'),
                'thumbnail_image' => $request->file('thumbnail_image'),

            ];

            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'card_products/' . $key;
                    $oldFile = $blogPost->$key ?? null;
                    if ($oldFile) {
                        Storage::delete("public/" . $oldFile);
                    }
                    $uploadedFiles[$key] = customUploadEcommerce($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }
            // Prepare the plan_descriptions data
            $planDescriptions = $request->has('plan_descriptions') ? json_encode($request->input('plan_descriptions')) : json_encode([]);

            // Find the existing CardProduct to update
            $cardProduct = CardProduct::findOrFail($id);
            // dd($uploadedFiles['image']['file_path']);
            // Update the CardProduct record
            $cardProduct->update([
                'name'                 => $request->name,
                'short_description'    => $request->short_description,
                'description'          => $request->description,
                'shipping_description' => $request->shipping_description,
                'manual'               => $request->manual,
                'note'                 => $request->note,
                'package_price'        => $request->package_price,
                'price'                => $request->price,
                'stripe_plan'          => $request->stripe_plan,
                'plan_descriptions'    => $planDescriptions,
                'billing_cycle'        => $request->billing_cycle,
                'payment_link'         => $request->payment_link,
                'type'                 => $request->type,
                'currency'             => $request->currency,
                'interval'             => $request->interval,
                'max_users'            => $request->max_users,
                'qr'                   => $request->qr,
                'nfc'                  => $request->nfc,
                'status'               => $request->status,
                'thumbnail_image'      => $uploadedFiles['thumbnail_image']['status'] == 1 ? $uploadedFiles['thumbnail_image']['file_path'] : null,
                'image'                => ($uploadedFiles['image']['status'] == 1) ? $uploadedFiles['image']['file_path'] : $cardProduct->image,
            ]);

            // Commit the transaction
            DB::commit();

            // Flash success message and redirect
            Session::flash('success', 'Product Updated successfully');
            return redirect()->route('admin.card-product.index');
        } catch (\Exception $e) {
            // Rollback the transaction on failure
            DB::rollBack();

            // Flash error message and redirect
            Session::flash('error', 'Error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cardProduct = CardProduct::findOrFail($id);
        $files = [
            'image' => $cardProduct->image,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $cardProduct->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $cardProduct->delete();
    }
}
