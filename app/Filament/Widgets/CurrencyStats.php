<?php

namespace App\Filament\Widgets;

use App\Models\Currency;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CurrencyStats extends BaseWidget
{
    protected function getStats(): array
    {
        $currencies = Currency::whereIn('code', ['USD', 'SGD', 'THB'])->get();

        $currencyStats = [];

        foreach ($currencies as $currency) {
            $currencyStats[] = Stat::make($currency->code.' ('.$currency->symbol.')', number_format($currency->buy).' / '.number_format($currency->sell))
                ->description('Buy / Sell')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]);
        }

        return $currencyStats;
    }
}
