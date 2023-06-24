<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <title>All Employees</title>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Action</th>
            </thead>
            <tbody>
                <!-- receiving data  -->
                @foreach($employees as $e)
                <tr>
                    <td>{{$e->name}}</td>
                    <td>{{$e->email}}</td>
                    <td>{{$e->department}}</td>
                    <td>{{$e->designation}}</td>
                    <td>{{$e->salary}}</td>
                    <td>
                        <a href="{{ url('/employee/edit/'.$e->id) }}" class="btn btn-secondary">Edit</a>

                        <a href="" class="btn btn-danger" data-toggle="modal"
                            data-target="#myModal{{$e->id}}">Delete</a>


                        <!-- Delete confirmation using modal -->
                        <div class="modal" id="myModal{{$e->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        Are you sure you want to delete?<b>{{$e->name}}</b>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <a href="{{ url('/employee/delete/'.$e->id) }}" class=" btn btn-danger">Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>