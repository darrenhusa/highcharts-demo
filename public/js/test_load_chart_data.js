var myResult = JSON.parse(result);
// var myResult = JSON.parse(window.count);
// alert(myResult)
// alert(myResult[1][0])
// alert(myResult[0][0], myResult[1][0])
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: myResult.title
  },
  subtitle: {
    text: myResult.subtitle
  },
  xAxis: {
    categories: myResult.categories,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: myResult.y_axis
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: myResult.names[0],
    data: myResult.data[0]
  },
  {
    name: myResult.names[1],
    data: myResult.data[1]
  },
  {
    name: myResult.names[2],
    data: myResult.data[2]
  },
  {
    name: myResult.names[3],
    data: myResult.data[3]
  }
]
});