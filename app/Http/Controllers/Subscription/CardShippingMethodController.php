<?php

namespace App\Http\Controllers\Subscription;

use Illuminate\Http\Request;
use App\Models\CardShippingMethod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CardShippingMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'shipping_methods' => CardShippingMethod::latest('id')->get(),
        ];
        return view('admin.pages.shippingManagement.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            // 'thanas' => District::all(),
        ];
        return view('admin.pages.shippingManagement.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|max:250',
            'location'    => 'nullable|string|max:250',
            'duration'    => 'nullable|string|max:250',
            'description' => 'nullable|string',
            'thana'       => 'nullable|array',  // Validate as an array (if it is an array)
            'carrier'     => 'nullable|string|max:250',
            'price'       => 'required|numeric|min:0',
            'status'      => 'required|string|in:active,inactive',
        ], [
            'status.in'   => 'The status must be either active or inactive.',
        ]);

        // Check for validation failures
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        // Create a new shipping method
        CardShippingMethod::create([
            'title'       => $request->title,
            'location'    => $request->location,
            'duration'    => $request->duration,
            'description' => $request->description,
            'carrier'     => $request->carrier,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        Session::flash('success', 'Shipping method has been created successfully!');
        return redirect()->back()->withInput();
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
        $data = [
            'method' => CardShippingMethod::findOrFail($id),
        ];
        return view('admin.pages.shippingManagement.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the shipping method or fail
        $shippingMethod = CardShippingMethod::findOrFail($id);

        // Define validation rules
        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|max:250',
            'location'    => 'nullable|string|max:250',
            'duration'    => 'nullable|string|max:250',
            'description' => 'nullable|string',
            'carrier'     => 'nullable|string|max:250',
            'price'       => 'required|numeric|min:0',
            'status'      => 'required|string|in:active,inactive',
        ], [
            'status.in'   => 'The status must be either active or inactive.',
        ]);

        // Check for validation failures
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        $shippingMethod->update([
            'title'       => $request->title,
            'location'    => $request->location,
            'duration'    => $request->duration,
            'description' => $request->description,
            'carrier'     => $request->carrier,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);
        Session::flash('success', 'Shipping method has been updated successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shippingMethod = CardShippingMethod::findOrFail($id);
        $shippingMethod->delete();
    }
}
