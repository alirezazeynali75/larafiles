<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Plans;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plans::all();
        return view('admin.plan.plans')->with(['plans' => $plans]);

    }

    public function create()
    {
        return view('admin.plan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'plan_title' => 'required',
            'plan_limit_download_count' => 'required',
            'plan_price' => 'required',
        ]);
        $plan_item = new Plans();
        $plan_item->plan_title = $request->input('plan_title');
        $plan_item->plan_limit_download_count = $request->input('plan_limit_download_count');
        $plan_item->plan_price = $request->input('plan_price');
        $plan_item->plan_days_count = $request->input('plan_days_count');

        $plan_item->save();


        return redirect()->route('admin.plans.list')->with(['plan_success' => true]);

    }

    public function delete($plan_id)
    {
        $plan = Plans::find($plan_id);
        $plan->delete();
        return redirect()->route('admin.plans.list')->with(['plan_delete' => true]);
    }
}
