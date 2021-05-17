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
