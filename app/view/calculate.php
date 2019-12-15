<?php include('header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h4><span class="badge badge-pill badge-primary">2</span> Calculate Result</h4>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>Policy</th>
                        <?php for ($i = 1; $i <= $car->getInstalement(); $i++) : ?>
                            <th><?php echo $i; ?> Instalment</th>
                        <?php endfor; ?>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Value</td>
                        <td class="text-right"><?php echo $car->getValue(); ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Base Premium (<?php echo $car->getBase(); ?>%)</td>
                        <td class="text-right"><?php echo $car->getBasePrice(); ?></td>
                        <td class="text-right"><?php echo $instalment['base']; ?></td>
                        <td class="text-right"><?php echo $instalment['base']; ?></td>
                    </tr>

                    <tr>
                        <td>Commission (<?php echo $car->getCommission(); ?>%)</td>
                        <td class="text-right"><?php echo $car->getCommissionPrice(); ?></td>
                        <td class="text-right"><?php echo $instalment['commission']; ?></td>
                        <td class="text-right"><?php echo $instalment['commission']; ?></td>
                    </tr>

                    <tr>
                        <td>Tax (<?php echo $car->getTax(); ?>%)</td>
                        <td class="text-right"><?php echo $car->getTaxPrice(); ?></td>
                        <td class="text-right"><?php echo $instalment['tax']; ?></td>
                        <td class="text-right"><?php echo $instalment['tax']; ?></td>
                    </tr>

                    <tr class="active">
                        <td class="active"><b>Total Cost</b></td>
                        <td class="text-right"><b><?php echo $car->getTotalPrice(); ?></b></td>
                        <td class="text-right"><?php echo $instalment['total']; ?></td>
                        <td class="text-right"><?php echo $instalment['total']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>