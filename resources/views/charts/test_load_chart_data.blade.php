@extends('layout')

@section('head')
<script src="/css/column_chart.css"></script>
@endsection

@section('content')

    <div class="container px-4 mx-auto">
        <div class="p-6 m-20 bg-white rounded shadow">

<figure class="highcharts-figure">
  <div id="container"></div>
  
</figure>
        </div>    
    </div>

@endsection

@section('scripts')
    <script src="/highcharts/themes/grid-light.js"></script>
    <script> window.count = '<?php echo $jsonResult ?>'; </script>
    <script src="/js/test_load_chart_data.js"></script>
@endsection

