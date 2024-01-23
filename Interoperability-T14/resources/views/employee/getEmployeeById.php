<!-- getEmployeeById.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Employee Details</h1>

        <?php if (isset($response)): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Employee Name</th>
                        <th>Employee Salary</th>
                        <th>Employee Age</th>
                        <th>Profile Image</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $response['data']['id']; ?>
                        </td>
                        <td>
                            <?php echo $response['data']['employee_name']; ?>
                        </td>
                        <td>
                            <?php echo $response['data']['employee_salary']; ?>
                        </td>
                        <td>
                            <?php echo $response['data']['employee_age']; ?>
                        </td>
                        <td><img src="<?php echo $response['data']['profile_image']; ?>" alt="Profile Image" width="100">
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>No employee data available</p>
        <?php endif; ?>
    </div>
</body>

</html>