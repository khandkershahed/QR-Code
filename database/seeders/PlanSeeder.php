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
                'title'         => 'Monthly Plan One',
                'slug'          => 'monthly-plan-one',
                'billing_cycle' => 'monthly',
                'stripe_plan'   => 'price_1P0994E4DyE4po5jNdH6JcT0',
                'price'         => 5,
                'status'        => 'active',
                // 'descriptions' => 'Active Plan'
            ],
            [
                'title'         => 'Monthly Plan Two',
                'slug'          => 'monthly-plan-two',
                'billing_cycle' => 'monthly',
                'stripe_plan'   => 'price_1P09A8E4DyE4po5j89CPTUCI',
                'price'         => 15,
                'status'        => 'active',
                // 'descriptions' => 'Premium Plan'
            ],
            [
                'title'        => 'Monthly Plan Three',
                'slug'        => 'monthly-plan-three',
                'billing_cycle'=>'monthly',
                'stripe_plan' => 'price_1P09AxE4DyE4po5jbil5S92T',
                'price'       => 40,
                'status'      => 'active',
                // 'descriptions' => 'Yearly Plan'
            ],
            [
                'title'          => 'Yearly Plan One',
                'slug'          => 'yearly-plan-one',
                'billing_cycle' => 'yearly',
                'stripe_plan'   => 'price_1P09GhE4DyE4po5ju0IuVQZC',
                'price'         => 55,
                'status'        => 'active',
                // 'descriptions' => 'Active Plan'
            ],
            [
                'title'          => 'Yearly Plan Two',
                'slug'          => 'yearly-plan-two',
                'billing_cycle' => 'yearly',
                'stripe_plan'   => 'price_1P09EHE4DyE4po5jkq1NMLqg',
                'price'         => 180,
                'status'        => 'active',
                // 'descriptions' => 'Premium Plan'
            ],
            [
                'title'        => 'Yearly Plan Three',
                'slug'        => 'yearly-plan-three',
                'billing_cycle'=>'yearly',
                'stripe_plan' => 'price_1P09FpE4DyE4po5jKlv2uQNK',
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
