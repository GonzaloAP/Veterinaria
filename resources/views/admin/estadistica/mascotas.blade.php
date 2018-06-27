@extends('home')

@section('contenido')
    <html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var datas = google.visualization.arrayToDataTable([
                    ['Language', 'Speakers (in millions)'],
                    ['German',  5.85],
                    ['French',  1.66],
                    ['Italian', 0.316],
                    ['Romansh', 0.0791]
                ]);

                var ar = [];
                @foreach($mascotas as $m)
                 ar.push(['{{$m->especie}}',{{$m->porcentaje}}]);

                @endforeach
                ar.unshift(['Mascotas', 'Especie']);
                console.log(ar);
                // console.log(ar.length);


                var data = google.visualization.arrayToDataTable(
                    ar);
                var options = {
                    legend: 'none',
                    pieSliceText: 'label',
                    title: 'Porcentaje De Especies',
                    pieStartAngle: 100,
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
    </head>
    <body>
    <div id="piechart" style="width: 80vw; height: 60vh;"></div>
    </body>

    </html>
@endsection