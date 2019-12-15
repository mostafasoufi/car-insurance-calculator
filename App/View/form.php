<?php include('header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h4><span class="badge badge-pill badge-primary">1</span> Calculate Form</h4>
        </div>

        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form method="post" action="<?php echo APP_URL; ?>/car/calculate">
                    <div class="form-group row">
                        <label for="car-value" class="col-sm-6 col-form-label">Estimated value of the car</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">€</span>
                                </div>
                                <input type="number" name="car-value" class="form-control" id="car-value" placeholder="" min="1" required>
                            </div>

                            <small id="passwordHelpBlock" class="form-text text-muted">
                                100 - 100 000 EUR
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tax-percentage" class="col-sm-6 col-form-label">Tax percentage</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" name="tax-percentage" class="form-control" id="tax-percentage" placeholder="" min="0" max="100" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>

                            <small id="passwordHelpBlock" class="form-text text-muted">
                                0 - 100%
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="instalments" class="col-sm-6 col-form-label">Number of instalments</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="instalments" id="instalments" placeholder="" min="0" max="12" required>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Count of payments in which client wants to pay for the policy (1 – 12)
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="hidden" id="user-time" name="user-time"/>
                            <button type="submit" class="btn btn-primary">Calculate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>