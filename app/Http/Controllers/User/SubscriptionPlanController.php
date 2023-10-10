<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SubscriptionPlanController extends Controller
{
    //
    public function index()
    {
        $subscriptionPlan = SubscriptionPlan::all();

        return inertia('User/Dashboard/SubscriptionPlan/Index', ['subscriptionPlan' => $subscriptionPlan]);
    }

    public function userSubscribe(Request $request, SubscriptionPlan $subscriptionPlan)
    {
        // ['user_id', 'subscription_plan_id', 'price', 'expired_date', 'payment_status', 'snapToken']
        $data = [
            'user_id' => Auth::id(),
            'subscription_plan_id' => $subscriptionPlan->id,
            'price' => $subscriptionPlan->price,
            'expired_date' => Carbon::now()->addMonths($subscriptionPlan->active_period_in_months),
            'payment_status' => 'success',

        ];
        $userSubscrition = UserSubscription::create($data);
        return redirect(route('user.dashboard.index'));
    }
}
