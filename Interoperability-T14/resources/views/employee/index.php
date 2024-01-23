<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="display-3">Employee List</h1>

        <a href="/employee/create" class="btn btn-primary mt-5">Create Employee</a>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Employee Name</th>
                    <th>Employee Salary</th>
                    <th>Employee Age</th>
                    <th>Profile Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($response['data'] as $data): ?>
                    <tr>
                        <td>
                            <?php echo $data['id']; ?>
                        </td>
                        <td>
                            <?php echo $data['employee_name']; ?>
                        </td>
                        <td>
                            <?php echo $data['employee_salary']; ?>
                        </td>
                        <td>
                            <?php echo $data['employee_age']; ?>
                        </td>
                        <td><img src="<?php echo $data['profile_image']; ?>" alt="Profile Image" width="100"></td>
                        <td>
                            <a href="/employee/<?php echo $data['id']; ?>" class="btn btn-primary">Detail</a>
                            <a href="/employee/edit/<?php echo $data['id']; ?>" class="btn btn-secondary">Edit</a>

                            <!-- Formulir untuk menghapus -->
                            <form action="/employee/delete/<?php echo $data['id']; ?>" method="POST" style="display: inline;">
                                    
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</body>

</html>