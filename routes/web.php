<?php

// use Illuminate\Support\Facades\Route;
// use ArielMejiaDev\LarapexCharts\LarapexChart;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', function () {
    return view('charts.line_chart');
});

Route::get('/column_chart', function () {
    return view('charts.column_chart');
});

Route::get('/pie_chart', function () {
    return view('charts.pie_chart');
});

Route::get('/stacked_column_chart', function () {
    return view('charts.stacked_column_chart');
});

Route::get('/100_pct_stacked_column_chart', function () {
    return view('charts.100_pct_stacked_column_chart');
});

Route::get('/combo_chart', function () {
    return view('charts.combo_chart');
})->name('combo_chart');

Route::get('/test_load_chart_data', function () {

    $names = ['Tokyo', 'New York', 'London', 'Berlin'];
    $data = [[200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200],
             [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3],
             [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2],
             [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
            ];
    $title = 'Monthly Average Rainfall';
    $subtitle = 'Source: WorldClimate.com';
    $y_axis = 'Rainfall (mm)';

    $categories = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

    $chart_text = [$title, $subtitle, $y_axis];
    // $tokyo = [200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200];
    // $new_york = [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3];
    // $london = [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2];
    // $berlin = [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1];

    $jsonResult = json_encode([$names, $data, $chart_text, $categories]);
    // $jsonResult = json_encode([$tokyo, $new_york, $london, $berlin]);

    // dd($jsonResult);

    return view('charts.test_load_chart_data', compact('jsonResult'));
});
