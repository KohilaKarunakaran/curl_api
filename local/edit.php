<?php
if(!isset($_GET['id'])) {
    $url = "http://localhost/curl_api/live/edit.php?token=ABDSC144DSD";
    $ch = curl_init();
    $arr['id'] = $_GET['id'];
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    $result = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($result, true);
} 
else {
echo "id not found";
}
?>
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
    <div class="container-lg">
    <div class="table-responsive">
    <div class="table-wrapper">
    <div class="table-title">
    <div class="row">
    <div class="col-sm-8">
<h2>Edit <b>Employee</b></h2>
    </div>
    </div>
    </div>
    <?php 
     if (isset($result['status']) && isset($result['code']) && $result['code'] == 5) {

    ?>
    <form action="update.php" method="POST" id="myform">
    <div class="table table-bordered">
    <?php foreach ($result['data'] as $list) {
        ?>
    <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $list['id'] ?>" class="form-control">
    </div>
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $list['name'] ?>" class="form-control">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $list['email'] ?>" class="form-control">
    </div>
    <div class="form-group">
    <label>Phone</label>
    <input type="number" name="phone" value="<?php echo $list['phone'] ?>" class="form-control">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
<?php
    } ?>

</form>
<?php
     } else {
        //echo $result['data'];
     }
     ?>
</div>
    </div>
    </div>
    
</body>
</html>