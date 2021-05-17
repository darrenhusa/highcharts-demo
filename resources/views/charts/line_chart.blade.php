@extends('layout')

@section('head')
<script src="/css/basic_line_chart.css"></script>
@endsection

@section('content')

    <div class="container px-4 mx-auto">
        <div class="p-6 m-20 bg-white rounded shadow">

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Basic line chart showing trends in a dataset. This chart includes the
    <code>series-label</code> module, which adds a label to each line for
    enhanced readability.
  </p>
</figure>

        </div>
      </div>    
  </div>

@endsection

@section('scripts')
    <script src="/js/basic_line_chart.js"></script>
@endsection

