<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <form action="" class="form shadow p-4 pt-2 mt-4" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Student Info</h2>

            <input type="text" name="name" placeholder="Name Here" class="form-control my-4">

            <input type="text" name="roll" placeholder="Roll Here" class="form-control my-4">

            <input type="text" name="reg" placeholder="Registration Here" class="form-control my-4">

            <input type="file" name="image" class="form-control my-4">

            <button type="submit" class="btn btn-warning w-100" name="add_info">Add Info</button>
        </form>
        <table class="table table-responsive mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Registration</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary px-4">Edit</a>
                        <button class="btn btn-sm btn-danger px-4">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>