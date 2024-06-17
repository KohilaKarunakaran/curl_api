<?php
session_start();
$url = "http://localhost/curl_api/live/index.php?token=ABDSC144DSD";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="container">
    <div class="table-responsive">
    <div class="table-wrapper">
    <div class="table-title">
    <div class="row">
    <div class="col-md-12">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php if(isset($_SESSION['success_mg'])) {
            echo $_SESSION['success_mg'];
        } ?>
        <button type="buttton" class="close" data-dismiss="alert" arial-label="close">
            <span arial-hidden="true">x</span>
            </button>
</div>
</div>
<div class="col-sm-8">
    <h2>Employee <b>Details</b></h2>
    </div>
    <div class="col-sm-4">
    <a href="add.php" class="btn btn-primary add-new float-end"><i class="fa fa-plus"></i> Add New</a>
    </div>
</div>
</div>
<?php
if (isset($result['status']) && isset($result['code']) && isset($result['code']) == 5) {
    ?>
    <form action="" method="POST" id="myform">
        <table class="table table_bordered">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                                     
</tr>
</thead>
<tbody>

<?php 
foreach ($result['data'] as $list) {

    ?>
    <tr>
        <td><?php echo $list['name'] ?></td>
        <td><?php echo $list['email'] ?></td>
        <td><?php echo $list['phone'] ?></td>
        <td><a href="edit.php?id=<?php echo $list['id'] ?>" ><i class = "fas fa-edit"></i></td>
        <td><a href="delete.php?id=<?php echo $list['id'] ?>"><i class = "fas fa-trash"></i></td>                  
</tr>
<?php

}?>
</tbody>
</table>
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