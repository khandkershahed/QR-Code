<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Admin\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.plans.index', [
            'plans' => Plan::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $data['descriptions'] = json_encode($request->input('descriptions')); // Convert array to JSON
        if ($request->has('descriptions')) {
            $data['descriptions'] = json_encode($request->input('descriptions'));
        } else {
            $data['descriptions'] = json_encode([]); // Set to empty array if not provided
        }
        Plan::create($data);
        return redirect()->back()->with('success', 'Plan Created successfully');
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
        return view('admin.pages.plans.edit', ['plan' => Plan::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plan = Plan::findOrFail($id);
        $plan->fill($request->all());
        $plan->descriptions = $request->filled('descriptions') ? $request->input('descriptions') : [];
        $plan->save();

        return redirect()->back()->with('success', 'Plan Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
