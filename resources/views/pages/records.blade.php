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
                <form action="/searchRecord" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <button type="button" class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <span class="mdi mdi-file-document-plus"></span> ADD
                            </button>
                        </div>
                        <div class="col-3">
    
                        </div>
                        <div class="col-3">
                            <select class="form-select mt-2" name="recordToSearch">
                                <option value="1">Maternal Care & Natality</option>
                                <option value="2">Notifiable Disease</option>
                                <option value="3">Family Program</option>
                                <option value="4">Family Planning Program</option>
                                <option value="5">Diarrhea</option>
                                <option value="6">Pneumonia</option>
                                <option value="7">Morbidity Line Listing of Patients</option>
                                <option value="8">Woman Reproductive Age (WRA)</option>
                                <option value="9">Mortality Report: Line Listing of Deaths</option>
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
                            <th class="col-2">Date of Consultation</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Diagnosis</th>
                            <th>ICD 10</th>
                            <th>Address</th>
                            <th>Physician</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $item)
                            <tr>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->categoryID}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->age}}</td>
                                <td>{{$item->sex}}</td>
                                <td>{{$item->diagnosis}}</td>
                                <td>{{$item->ICD10}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->physician}}</td>
                                <td>
                                    <a href="" class="btn btn-outline-warning btn-sm"><span class="mdi mdi-file-edit"></span></a>
                                    <a href="" class="btn btn-outline-danger btn-sm"><span class="mdi mdi-delete-forever"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form action="/addRecord" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD REPORT</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Category:</label>
                            <select class="form-select mt-2" name="recordToAdd">
                                <option value="1">Maternal Care & Natality</option>
                                <option value="2">Notifiable Disease</option>
                                <option value="3">Family Program</option>
                                <option value="4">Family Planning Program</option>
                                <option value="5">Diarrhea</option>
                                <option value="6">Pneumonia</option>
                                <option value="7">Morbidity Line Listing of Patients</option>
                                <option value="8">Woman Reproductive Age (WRA)</option>
                                <option value="9">Mortality Report: Line Listing of Deaths</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <label>Age:</label>
                            <input type="text" class="form-control" name="age" placeholder="Age" required>
                        </div>
                        <div class="mb-3">
                            <label>Age:</label>
                            <select class="form-select" name="sex">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Diagnosis:</label>
                            <input type="text" class="form-control" name="diagnosis" placeholder="Diagnosis" required>
                        </div>
                        <div class="mb-3">
                            <label>ICD-10:</label>
                            <input type="text" class="form-control" name="ICD10" placeholder="ICD Code" required>
                        </div>
                        <div class="mb-3">
                            <label>Address:</label>
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="mb-3">
                            <label>Physician:</label>
                            <input type="text" class="form-control" name="physician" placeholder="Physician" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-outline-primary" value="ADD">
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