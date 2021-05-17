@extends('layout')

@section('head')
<script src="/css/stacked_column_chart.css"></script>
@endsection

@section('content')

    <div class="container px-4 mx-auto">
        <div class="p-6 m-20 bg-white rounded shadow">

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Chart showing stacked columns for comparing quantities. Stacked charts
    are often used to visualize data that accumulates to a sum. This chart
    is showing data labels for each individual section of the stack.
  </p>
</figure>
        </div>    
    </div>

@endsection

@section('scripts')
    <script src="/js/stacked_column_chart.js"></script>
@endsection

