<?php
require '../includes/header.php';
require '../processors/AdminLog.php';

?>

<div class="container">
    <div class="form-bg mt-5  w-50" style="margin-left:25%;">
        <div class="text-center">
            <h2>Log In</h2>
        </div>
        <form action="" method="post">
            <?php
            echo $msg;
            ?>
            <input type="email" name="email" id="" class="mt-3 w-100 form-control " placeholder="Email">
            <input type="Password" name="password" id="" class="mt-3 w-100 form-control " placeholder="Password">

            <div class="form-section">
                <button type="submit" class="btn btn-success login mt-3 w-100" name="log">Log in</button>
            </div>
        </form>
    </div>
</div>
</body>