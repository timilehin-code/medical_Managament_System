<?php 
require '../connection/conx.php';
require '../processors/updateDoc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<title>Doctor's Dashbord</title>
</head>
<body>
    <div class="container">
        <div class="form-bg mt-5 ">
            <div class="text-center">
                <h3>Doctor's Update</h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-section ">
                    <div class="row">
                        <div class="col-md-12>
                        <div class="form-group">
                        <input type="file" name="DocImage" id="" class="w-100 p-2 mt-1" placeholder="image">
                                <label class="form-label"> Image</label>
                            </div>
                            <button type="submit" name="update" class="btn btn-success w-100">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>