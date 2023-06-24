<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Create employee</h1>

        <form action="{{ url('/employee/store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="emp_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Joining Date</label>
                <input type="date" name="joiningdate" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="text" name="salary" class="form-control">
            </div>

            <!-- Dropdown Select -->
            <div class="form-group">
                <label for="">Department</label>
                <select name="department" id="" class="form-control">
                    <option value="">Select Department</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Economics">Economics</option>
                    <option value="Finance">Finance</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Designation</label>
                <select name="designation" id="" class="form-control">
                    <option value="">Select Designation</option>
                    <option value="Software Developer">Software Developer</option>
                    <option value="Database Designer">Database Designer</option>
                    <option value="QA Engineer">QA Engineer</option>
                </select>
            </div>


            <!-- radio input -->
            <div class="form-group">
                <label for="">Gender</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="Male" name="gender">Male
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="Female" name="gender">Female
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="Other" name="gender">Other
                    </label>
                </div>
            </div>

            <!-- Checkbox -->
            <div class="form-group">
                <label for=""></label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="active" value="1">Active
                    </label>
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>

</body>

</html>