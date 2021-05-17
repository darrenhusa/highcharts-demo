@extends('layout')

@section('head')
<script src="/css/pie_chart.css"></script>
@endsection

@section('content')

    <div class="container px-4 mx-auto">
        <div class="p-6 m-20 bg-white rounded shadow">

        <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Pie charts are very popular for showing a compact overview of a
            composition or comparison. While they can be harder to read than
            column charts, they remain a popular choice for small datasets.
        </p>
        </figure>

        </div>    
    </div>

@endsection

@section('scripts')
    <script src="/js/pie_chart.js"></script>
@endsection

