<?php

// use Illuminate\Support\Facades\Route;
// use ArielMejiaDev\LarapexCharts\LarapexChart;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', function () {
    return view('line_chart');
});

Route::get('/column_chart', function () {
    return view('column_chart');
});

Route::get('/pie_chart', function () {
    return view('pie_chart');
});

Route::get('/stacked_column_chart', function () {
    return view('stacked_column_chart');
});

Route::get('/100_pct_stacked_column_chart', function () {
    return view('100_pct_stacked_column_chart');
});

Route::get('/combo_chart', function () {
    return view('combo_chart');
});
