<?php
if(isset($_SESSION['status']))
{
    ?>
    <div class="alert alert-warnig alert-dismissible fade show" role="alert">
        <strong>Hey</strong><?php echo $_SESSION['status'];?>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </buttton>
    </div>
    <?php
    unset($_SESSION['status']);

    }
?>