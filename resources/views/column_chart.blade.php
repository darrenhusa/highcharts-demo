@extends('layout')

@section('head')
<script src="/css/column_chart.css"></script>
@endsection

@section('content')

    <div class="container px-4 mx-auto">
        <div class="p-6 m-20 bg-white rounded shadow">

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    A basic column chart compares rainfall values between four cities.
    Tokyo has the overall highest amount of rainfall, followed by New York.
    The chart is making use of the axis crosshair feature, to highlight
    months as they are hovered over.
  </p>
</figure>
        </div>    
    </div>

@endsection

@section('scripts')
    <script src="/js/column_chart.js"></script>
@endsection

