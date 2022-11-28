<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BHU Health Care Profiling and Reporting System</title>
    @extends('common.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body class="body-style">
    @extends('common.sidebar')
    
    <div class="container">
        <div class="card component">
            <h1>DASHBOARD</h1>
            <div class="card-body">
                <canvas id="reportChart" style="width:100%;max-width:500%"></canvas>
            </div>
        </div>
    </div>

    <script>

        var xValues = [];
        var yValues = [];
        var barColors = ["red", "green","blue","orange","brown"];
    
        
        new Chart("reportChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Reports"
            }
          }
        });
    </script>


    @foreach ($result as $item)
        <script>
            xValues.push('{{$item->ICD10}}');
            yValues.push('{{$item->total}}');
        </script>
    @endforeach

    <script>
        yValues.push(0);
    </script>

    @extends('common.scripts')
</body>

<style>
    .body-style {
        background-color: #E0E0E0E0;
    }
    .component {
        margin-top: 50px;
        margin-left:200px;
    }
</style>

</html>
