<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
    <!-- <script src="https://code.highcharts.com/modules/series-label.js"></script> -->
    <!-- <script src="https://code.highcharts.com/modules/exporting.js"></script> -->
    <!-- <script src="https://code.highcharts.com/modules/export-data.js"></script> -->
    <!-- <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->
    <script src="/js/highcharts.js"></script>

    @yield('head')
</head>
<body class="h-screen bg-gray-100">
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img src="/images/Seal-Crimson-2.png" alt="CCSJ Seal"></a>
                
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                <x-nav-link href="/" :active="request()->is('/')">Line Chart</x-nav-link>
                <x-nav-link href="column_chart" :active="request()->is('column_chart')">Column Chart</x-nav-link>
                <x-nav-link href="pie_chart" :active="request()->is('pie_chart')">Pie Chart</x-nav-link>
                <x-nav-link href="stacked_column_chart" :active="request()->is('stacked_column_chart')">Stacked Column Chart Chart</x-nav-link>            
                <x-nav-link href="100_pct_stacked_column_chart" :active="request()->is('100_pct_stacked_column_chart')">100% Stacked Column Chart</x-nav-link>                        
                <x-nav-link href="combo_chart" :active="request()->is('combo_chart')">Combo Chart</x-nav-link>                                    
                    
                <x-nav-dropdown heading="Section 7">
                    <x-dropdown-link href="/">Line Chart</x-dropdown-link>
                    <x-dropdown-link href="column_chart">Column Chart</x-dropdown-link>
                    <x-dropdown-link href="#">Link #3</x-dropdown-link>
                </x-nav-dropdown>
            </nav>
        </div>  
            @yield('content')
    </div>
    
    <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> -->
    @yield('scripts')
</body>
</html>