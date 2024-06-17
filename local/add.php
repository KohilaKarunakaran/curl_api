<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP API CRUD operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
    <div class="table-responsive">
    <div class="table-wrapper">
    <div class="table-title">
    <div class="row">
    <div class="col-sm-8">
<h2>Add new <b>Employee</b></h2>
    </div>
    </div>
    </div>
    <form action="create.php" method="POST" id="myform">
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
    <label>Phone</label>
    <input type="number" name="phone" class="form-control">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
</form>
</div>
    </div>
    </div>
    </div>
</body>
</html>