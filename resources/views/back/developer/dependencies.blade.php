@section('title')
    &vert; {{ __('app.dependencies') }}
@endsection

<x-app-layout>
    <x-slot name="heading">
        <h2 class="font-semibold text-gray-800 dark:text-gray-100">
            {{ __('app.dependencies') }}
        </h2>
    </x-slot>

    <div class="grow max-w-5xl overflow-x-auto py-5 dark:text-neutral-200">
        <x-ts-tab selected="TallStack">
            {{-- tallstack --}}
            <x-ts-tab.items tab="TallStack">
                <ul class="w-full ml-4">
                    <li class="py-2">
                        <x-link href="https://laravel.com/" target="_blank">Laravel</x-link> 11
                    </li>
                    <li class="py-2">
                        <x-link href="https://jetstream.laravel.com/" target="_blank">Laravel Jetstream</x-link>5 (featuring <x-link href="https://jetstream.laravel.com/features/teams.html"
                            target="_blank">Teams</x-link>)
                    </li>
                    <li class="py-2">
                        <x-link href="https://livewire.laravel.com/" target="_blank">Laravel Livewire</x-link> 3
                    </li>
                    <li class="py-2">
                        <x-link href="https://alpinejs.dev/" target="_blank">Alpine.js</x-link> 3
                    </li>
                    <li class="py-2">
                        <x-link href="https://filamentphp.com/" target="_blank">Laravel Filament</x-link>3 (only Table Builder)
                    </li>

                    <li class="py-2">
                        <x-link href="https://tailwindcss.com/docs/" target="_blank">Tailwind CSS</x-link>
                    </li>
                    <li class="py-2">
                        <x-link href="https://tallstackui.com/" target="_blank">TallStackUI</x-link> (featuring <x-link href="https://tabler.io/icons" target="_blank">Tabler Icons</x-link>)
                    </li>
                </ul>

                <div class="max-w-96 grid grid-cols-4 gap-4 justify-items-center ml-4 mt-4">
                    <div class="max-w-24 content-center">
                        <img src="img/logo/laravel.webp" class="rounded" alt="laravel" />
                    </div>
                    <div class="max-w-24 content-center">
                        <img src="img/logo/livewire.webp" class="rounded" alt="livewire" />
                    </div>
                    <div class="max-w-24 content-center">
                        <img src="img/logo/alpinejs.webp" class="rounded" alt="alpinejs" />
                    </div>
                    <div class="max-w-24 content-center">
                        <img src="img/logo/tailwindcss.webp" class="rounded" alt="tailwindcss" />
                    </div>
                    <div class="max-w-24 content-center col-span-2">
                        <img src="img/logo/tallstackui.webp" class="rounded" alt="talstackui" />
                    </div>
                    <div class="max-w-24 content-center col-span-2">
                        <img src="img/logo/filament.webp" class="rounded" alt="filament" />
                    </div>
                </div>
            </x-ts-tab.items>

            {{-- github --}}
            <x-ts-tab.items tab="Github">
                <ul class="w-full ml-4">
                    <li class="py-2">
                        <x-link href="https://github.com/csstools/postcss-plugins/" target="_blank">csstools/postcss-plugins</x-link> (needed by Filament Table Builder)
                    </li>
                    <li class="py-2">
                        <x-link href="https://github.com/Intervention/image/" target="_blank">intervention/image</x-link>
                    </li>
                    <li class="py-2">
                        <x-link href="https://github.com/kevinkhill/lavacharts/" target="_blank">kevinkhill/lavacharts</x-link>
                    </li>
                    <li class="py-2">
                        <x-link href="https://github.com/korridor/laravel-has-many-merged/" target="_blank">korridor/laravel-has-many-merged</x-link>
                    </li>
                    <li class="py-2">
                        <x-link href="https://github.com/opcodesio/log-viewer/" target="_blank">opcodesio/log-viewer</x-link>
                    </li>
                    <li class="py-2">
                        <x-link href="https://github.com/spatie/laravel-backup/" target="_blank">spatie/laravel-backup</x-link>
                    </li>
                    <li class="py-2">
                        <x-link href="https://github.com/stevebauman/location/" target="_blank">stevebauman/location</x-link>
                    </li>
                </ul>
            </x-ts-tab.items>

            {{-- javascript --}}
            <x-ts-tab.items tab="Javascript">
                <ul class="w-full ml-4">
                    <li class="py-2">
                        <x-link href="https://www.chartjs.org/" target="_blank">Chart.js</x-link>
                    </li>
                </ul>
            </x-ts-tab.items>
        </x-ts-tab>
    </div>
</x-app-layout>
