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

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD REPORT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <label>Age:</label>
                        <input type="text" class="form-control" name="age" placeholder="Age" required>
                    </div>
                    <div class="mb-3">
                        <label>Sex:</label>
                        <input type="text" class="form-control" name="sex" placeholder="Sex" required>
                    </div>
                    <div class="mb-3">
                        <label>ICD-10:</label>
                        <input type="text" class="form-control" name="icd" placeholder="Name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">ADD</button>
                </div>
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