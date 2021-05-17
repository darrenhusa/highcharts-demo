@extends('layout')

@section('head')
<script src="/css/100_pct_stacked_column_chart.css"></script>
@endsection

@section('content')

    <div class="container px-4 mx-auto">
        <div class="p-6 m-20 bg-white rounded shadow">

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Chart showing stacked percentage columns, where each column totals 100%,
    and each element value is visualized by giving it a size relative to the
    other elements.
  </p>
</figure>
        </div>    
    </div>

@endsection

@section('scripts')
    <script src="/js/100_pct_stacked_column_chart.js"></script>
@endsection

