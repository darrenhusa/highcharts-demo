var myResult = JSON.parse(window.count);
// alert(myResult)
// alert(myResult[1][0])
// alert(myResult[0][0], myResult[1][0])
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: myResult[2][0]
  },
  subtitle: {
    text: myResult[2][1]
  },
  xAxis: {
    categories: myResult[3],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: myResult[2][2]
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
    name: myResult[0][0],
    data: myResult[1][0]
  }, {
    name: myResult[0][1],
    data: myResult[1][1]
  }, {
    name: myResult[0][2],
    data: myResult[1][2]
  }, {
    name: myResult[0][3],
    data: myResult[1][3]
  }]
});