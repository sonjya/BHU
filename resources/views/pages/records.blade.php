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
                    <div class="col-8">
                        <button type="button" class="btn btn-outline-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <span class="mdi mdi-file-document-plus"></span> ADD
                        </button>
                    </div>
                    <div class="col-4">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                </div>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-1">Date</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>ICD 10</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                            <td>2022-11-23</td>
                            <td>Toyiks Bronze</td>
                            <td>18</td>
                            <td>Male</td>
                            <td>ADD-B99</td>
                            <td>
                                <a href="" class="btn btn-outline-warning btn-sm"><span class="mdi mdi-file-edit"></span></a>
                                <a href="" class="btn btn-outline-danger btn-sm"><span class="mdi mdi-delete-forever"></span></a>
                            </td>
                       </tr>
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
    }
</style>
</html>