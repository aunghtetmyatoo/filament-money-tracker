<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://middleware.shwenetwork.com/api/currency');

        if ($response->successful()) {
            $currencies = $response->json()['data'] ?? [];

            foreach ($currencies as $currency) {
                \App\Models\Currency::updateOrCreate(
                    ['code' => $currency['code']],
                    [
                        'symbol' => $currency['symbol'],
                        'buy' => $currency['buy'],
                        'sell' => $currency['sell'],
                    ]
                );
            }
        } else {
            \Log::error('Failed to fetch currencies from middleware API.');
        }
    }
}
