<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Edit employee</h1>

        <form action="{{ url('/employee/update/'.$employee->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input value="{{$employee ->name }}" type="text" name="emp_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input value="{{$employee ->email }}" type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input value="{{$employee ->salary }}" type="text" name="salary" class="form-control">
            </div>

            <!-- Dropdown Select -->
            <div class="form-group">
                <label for="">Department</label>
                <select name="department" id="" class="form-control">
                    <option value="">Select Department</option>
                    <option value="Marketing" {{ $employee->department == "Marketing" ? "selected" : "" }}>Marketing
                    </option>
                    <option value="Economics" {{ $employee->department == "Economics" ? "selected" : "" }}>Economics
                    </option>
                    <option value="Finance" {{ $employee->department == "Finance" ? "selected" : "" }}>Finance
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Designation</label>
                <select name="designation" id="" class="form-control">
                    <option value="">Select Designation</option>
                    <option value="Software Developer"
                        {{ $employee->designation == "Software Developer" ? "selected" : "" }}>Software Developer
                    </option>
                    <option value="Database Designer"
                        {{ $employee->designation == "Database Designer" ? "selected" : "" }}>Database Designer
                    </option>
                    <option value="QA Engineer" {{ $employee->designation == "QA Engineer" ? "selected" : "" }}>
                        QA Engineer</option>
                </select>
            </div>



            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>
</body>

</html>