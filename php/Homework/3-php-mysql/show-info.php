<!DOCTYPE html>
<html lang="en">
<head>
    <title>boostrapt 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-3">
    <div class="d-flex">
        <div class="col-1 pl-0">
            <form action="#" method="GET">
                <button class="btn btn-primary font-weight-bold rounded-0">Home</button>
            </form>
        </div>
        <div class="col-10">
            <h1 class="text-center">USER CRUD LAVAREL</h1>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-12">
            <span class="badge badge-success text-uppercase">show page</span>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <thead class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created Date</th>
                    <th>Updates date</th>
                    <th>Action</th>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th>1</th>
                        <td>Dr. Orlando Kilback</td>
                        <td>odurgan@example.org</td>
                        <td>12334</td>
                        <td>2019-12-19</td>
                        <td>2019-12-20</td>
                        <td class="d-flex justify-content-around">
                            <form action="./user-edit.php" method="GET">
                                <button class="btn btn-sm btn-warning rounded-0">Edit</button>
                            </form>
                            <button class="btn btn-sm btn-danger rounded-0">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <span class="text-uppercase text-muted">user crud laravel</span>
                <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
                    create a new user
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
