<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\NewsLetter;
use Illuminate\Http\Request;

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
        NewsLetter::create([
            'email'      => $request->email,
            'ip_address' => $request->ip(),
            'location'   => $request->location,
            'status'     => $request->status ?? 'subscribed',
            'created_at' => date('dmy_His'),
        ]);
        return redirect()->back()->with('success','Data has been saved successfully!');
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
