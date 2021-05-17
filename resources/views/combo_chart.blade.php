@extends('layout')

@section('head')
<script src="/css/combo_chart.css"></script>
@endsection

@section('content')

    <div class="container px-4 mx-auto">
        <div class="p-6 m-20 bg-white rounded shadow">

      <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
          Chart showing how different series types can be combined in a single
          chart. The chart is using a set of column series, overlaid by a line and
          a pie series. The line is illustrating the column averages, while the
          pie is illustrating the column totals.
        </p>
      </figure>

        </div>    
    </div>

@endsection

@section('scripts')
    <script src="/js/combo_chart.js"></script>
@endsection

