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
    
    <div class="container dashboard-component">
        <h1>DASHBOARD</h1>
        <div class="card dashboard-chart">
            <div class="card-body">
                <canvas id="myChart" style="width:100%;max-width:1200%"></canvas>
            </div>
        </div>
    </div>

    @extends('common.scripts')
</body>

<script>
    var xValues = [100,200,300,400,500,600,700,800,900,1000];

    new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
        borderColor: "red",
        fill: false
        },{
        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
        borderColor: "green",
        fill: false
        },{
        data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
        borderColor: "blue",
        fill: false
        }]
    },
    options: {
        legend: {display: false}
    }
    });
</script>

<style>
    .body-style {
        background-color: #E0E0E0E0;
    }
    .dashboard-component {
        margin-top: 50px;
    }
</style>

</html>
