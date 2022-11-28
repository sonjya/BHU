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
                <h1>ICD-10 Classification of Diseases Codes</h1>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <form action="/searchICD" method="post">
                            @csrf
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </form>
                    </div>
                </div>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-2">Code</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $item)
                            <tr>
                                <th>{{$item->code}}</th>
                                <th>{{$item->description}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <p style="color:red;">There are over a thousand of items, the items listed above are limited, please search the specific item on the search box.</p>
                <form action="/addICD" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <input type="text" class="form-control" name="code" placeholder="Code" required>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="description" placeholder="Description" required>
                        </div>
                        <div class="col-1">
                            <input type="submit" class="btn btn-outline-primary col-12" value="ADD">
                        </div>
                    </div>
                </form>
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