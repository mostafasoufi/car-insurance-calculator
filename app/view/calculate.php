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
                        <?php for ($i = 1; $i <= $car->getInstalment(); $i++) : ?>
                            <th><?php echo $i; ?> Intalment</th>
                        <?php endfor; ?>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Value</td>
                        <td class="text-right"><?php echo number_format($car->getValue(), 2); ?></td>
                        <?php for ($i = 1; $i <= $car->getInstalment(); $i++) : ?>
                            <td></td>
                        <?php endfor; ?>
                    </tr>

                    <tr>
                        <td>Base Premium (<?php echo $car->getBase(); ?>%)</td>
                        <td class="text-right"><?php echo number_format($car->getBasePrice(), 2); ?></td>
                        <?php for ($i = 1; $i <= $car->getInstalment(); $i++) : ?>
                            <td class="text-right"><?php echo $instalment['base']; ?></td>
                        <?php endfor; ?>
                    </tr>

                    <tr>
                        <td>Commission (<?php echo $car->getCommission(); ?>%)</td>
                        <td class="text-right"><?php echo number_format($car->getCommissionPrice(), 2); ?></td>
                        <?php for ($i = 1; $i <= $car->getInstalment(); $i++) : ?>
                            <td class="text-right"><?php echo $instalment['commission']; ?></td>
                        <?php endfor; ?>
                    </tr>

                    <tr>
                        <td>Tax (<?php echo $car->getTax(); ?>%)</td>
                        <td class="text-right"><?php echo number_format($car->getTaxPrice(), 2); ?></td>
                        <?php for ($i = 1; $i <= $car->getInstalment(); $i++) : ?>
                            <td class="text-right"><?php echo $instalment['tax']; ?></td>
                        <?php endfor; ?>
                    </tr>

                    <tr class="active">
                        <td class="active"><b>Total Cost</b></td>
                        <td class="text-right"><b><?php echo number_format($car->getTotalPrice(), 2); ?></b></td>
                        <?php for ($i = 1; $i <= $car->getInstalment(); $i++) : ?>
                            <td class="text-right"><?php echo $instalment['total']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>