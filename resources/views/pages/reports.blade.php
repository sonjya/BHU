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
                <h1>Reports</h1>
                <form action="/searchReport" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                           {{--  --}}
                        </div>
                        <div class="col-3">
                            {{--  --}}
                         </div>
                        <div class="col-3">
                            <select class="form-select mt-2" name="reportToSearch">
                                <option value="january">January</option>
                                <option value="february">February</option>
                                <option value="march">March</option>
                                <option value="april">April</option>
                                <option value="may">May</option>
                                <option value="june">June</option>
                                <option value="july">July</option>
                                <option value="august">August</option>
                                <option value="september">September</option>
                                <option value="october">October</option>
                                <option value="november">November</option>
                                <option value="december">December</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <input type="text" name="search" class="form-control mt-2" placeholder="Search">
                        </div>
                    </div>
                </form>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>CATEGORY</th>
                            <th>MONTH OF</th>
                            <th>OUTCOME</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $item)
                            <tr>
                                <th>{{$item->description}}</th>
                                <th>{{$item->month}}</th>
                                <th>{{$item->total}}</th>
                            </tr>
                        @endforeach
                    </tbody>
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