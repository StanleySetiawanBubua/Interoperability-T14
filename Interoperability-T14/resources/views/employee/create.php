<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1>Create Employee</h1>

        <form action="/employee/create" method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">Employee Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Employee Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Employee Age</label>
                <input type="text" class="form-control" id="age" name="age" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Employee</button>
        </form>

    </div>
</body>

</html>