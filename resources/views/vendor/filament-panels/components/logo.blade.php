@if (Route::current()->getName() === 'filament.hub.auth.login')
    <img src="{{ asset('brands/logo.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" width="180"
        class="mb-2">
@else
    <img src="{{ asset('brands/logo.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}"
        width="40">
@endif
