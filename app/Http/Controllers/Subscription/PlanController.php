<?php

namespace App\Http\Controllers\Subscription;

use Stripe\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Plan as ModelPlan;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.plans.index', [
            'plans' => ModelPlan::latest('id')->get()
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
        $plan = Plan::create([
            'amount' => $request->amount,
            'currency' => $request->currency,
            'interval' => $request->billing_period,
            'interval_count' => $request->interval_count,
            'product' => [
                'name' => $request->name
            ]
        ]);
        $data = $request->all();
        // $data['descriptions'] = json_encode($request->input('descriptions')); // Convert array to JSON
        if ($request->has('descriptions')) {
            $data['descriptions'] = json_encode($request->input('descriptions'));
        } else {
            $data['descriptions'] = json_encode([]); // Set to empty array if not provided
        }
        ModelPlan::create($data);
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
        return view('admin.pages.plans.edit', ['plan' => ModelPlan::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plan = ModelPlan::findOrFail($id);
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
        ModelPlan::findOrFail($id)->delete();
    }
}
