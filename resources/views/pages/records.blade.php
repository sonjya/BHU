<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BHU Health Care Profiling and Reporting System</title>
    @extends('common.css')
</head>
<body class="body-style">
    @extends('common.sidebar')
    <div class="container">
        <div class="card component">
            <div class="card-body">
                <h1>Records</h1>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                </div>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ACTIVITIES</th>
                            <th>JANUARY</th>
                            <th>FERBRUARY</th>
                            <th>MARCH</th>
                            <th>1st Q</th>
                            <th>APRIL</th>
                        </tr>
                    </thead>
            
                </table>
    
            </div>
        </div>
    </div>
    @extends('common.scripts')
</body>
<style>
    .body-style {
        background-color: #E0E0E0E0;
    }
    .component {
        margin-top: 100px;
        margin-left:200px;
    }
</style>
</html>