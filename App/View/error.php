<?php include('header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h4>Error</h4>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger"><?php echo $error; ?></div>

                <a href="#" class="btn btn-primary" onclick="window.history.back();">Back</a>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>