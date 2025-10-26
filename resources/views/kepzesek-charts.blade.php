<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Képzések Statisztika') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">
                        Felvehető és Minimum Pontok
                    </h3>
                    <div>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">
                        Felvehető Helyek Eloszlása
                    </h3>
                    <div class="max-w-md mx-auto">
                        <canvas id="doughnutChart"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        window.kepzesek = @json($kepzesek);
    </script>
</x-app-layout>
