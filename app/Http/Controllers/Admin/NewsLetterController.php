<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin\NewsLetter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NewsLetterController extends Controller
{
    public function index(Request $request)
    {

        return view('admin.pages.newsletter.index', ['emails' => NewsLetter::get()]);
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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:news_letters,email',
        ], [
            'unique' => 'This email has already been subscribed.',
            'required' => 'The :attribute field is required.',
            'email' => 'Please provide a valid email address.',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            foreach ($errors as $error) {
                flash()->addError($error, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back()->withInput();
        }

        NewsLetter::create([
            'email'      => $request->email,
            'ip_address' => $request->ip(),
            'location'   => $request->location ?? null,
            'status'     => $request->status ?? 'subscribed',
            'created_at' => now(),
        ]);

        return redirect()->back()->with('success', 'You have subscribed successfully in our website!');
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
        NewsLetter::findOrFail($id)->update([
            'email'      => $request->email,
            'location'   => $request->location,
            'status'     => $request->status ?? 'subscribed',
        ]);

        return redirect()->back()->with('success', 'Permission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        NewsLetter::find($id)->delete();
    }
}
