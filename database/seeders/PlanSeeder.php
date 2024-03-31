<?php

namespace Database\Seeders;

use App\Models\Admin\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'title'        => 'Trial',
                'slug'        => 'trial',
                'stripe_plan' => 'price_1NbdIdGJK8rdnFGBOc8Zu9dX',
                'price'       => 0,
                'status'      => 'active',
                // 'descriptions' => 'Basic Plan'
            ],
            [
                'title'          => 'Monthly Plan One',
                'slug'          => 'monthly-plan-one',
                'billing_cycle' => 'monthly',
                'stripe_plan'   => 'price_1NbdJDGJK8rdnFGBuGTZ0hJb',
                'price'         => 5,
                'status'        => 'active',
                // 'descriptions' => 'Active Plan'
            ],
            [
                'title'          => 'Monthly Plan Two',
                'slug'          => 'monthly-plan-two',
                'billing_cycle' => 'monthly',
                'stripe_plan'   => 'price_1NbdJlGJK8rdnFGB6VvRqDiN',
                'price'         => 15,
                'status'        => 'active',
                // 'descriptions' => 'Premium Plan'
            ],
            [
                'title'        => 'Monthly Plan Three',
                'slug'        => 'monthly-plan-three',
                'billing_cycle'=>'monthly',
                'stripe_plan' => 'price_1NbdKHGJK8rdnFGBxqQs66Ls',
                'price'       => 40,
                'status'      => 'active',
                // 'descriptions' => 'Yearly Plan'
            ],
            [
                'title'          => 'Yearly Plan One',
                'slug'          => 'yearly-plan-one',
                'billing_cycle' => 'yearly',
                'stripe_plan'   => 'price_1NbdJDGJK8rdnFGBuGTZ0hJb',
                'price'         => 55,
                'status'        => 'active',
                // 'descriptions' => 'Active Plan'
            ],
            [
                'title'          => 'Yearly Plan Two',
                'slug'          => 'yearly-plan-two',
                'billing_cycle' => 'yearly',
                'stripe_plan'   => 'price_1NbdJlGJK8rdnFGB6VvRqDiN',
                'price'         => 180,
                'status'        => 'active',
                // 'descriptions' => 'Premium Plan'
            ],
            [
                'title'        => 'Yearly Plan Three',
                'slug'        => 'yearly-plan-three',
                'billing_cycle'=>'yearly',
                'stripe_plan' => 'price_1NbdKHGJK8rdnFGBxqQs66Ls',
                'price'       => 480,
                'status'      => 'active',
                // 'descriptions' => 'Yearly Plan'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
