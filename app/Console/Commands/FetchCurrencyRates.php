<?php

namespace App\Console\Commands;

use App\Models\Currency;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchCurrencyRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch currency rates from middleware.shwenetwork.com';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://middleware.shwenetwork.com/api/currency');

        if ($response->successful()) {
            $currencies = $response->json()['data'] ?? [];

            foreach ($currencies as $currency) {
                Currency::updateOrCreate(
                    ['code' => $currency['code']],
                    [
                        'symbol' => $currency['symbol'],
                        'buy' => $currency['buy'],
                        'sell' => $currency['sell'],
                    ]
                );
            }

            $this->info('Currency rates updated successfully.');
        } else {
            $this->error('Failed to fetch currency data.');
        }
    }
}
