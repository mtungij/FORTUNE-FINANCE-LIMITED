<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Cash Transactions</title>
</head>
<body>
<div class="container my-5">
        <h1 class="text-center">Cash Transactions Grouped by Employee and Customer</h1>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Customer Name</th>
                    <th>Customer ID</th>
                    <th>Total Disbursed loan</th>
                    <th>Total Deposit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $currentEmployeeId = null;
                    $employeeTotalLoan = 0;
                    $employeeTotalDeposit = 0;
                ?>
                <?php if (!empty($transactions)): ?>
                    <?php foreach ($transactions as $transaction): ?>
                        <?php 
                            // Start a new employee section if the employee changes
                            if ($currentEmployeeId !== $transaction->empl_id):
                                // If there was a previous employee, show totals before switching
                                if ($currentEmployeeId !== null):
                                    echo "<tr><td colspan='4' class='text-right'><strong>Total for Employee (ID: $currentEmployeeId):</strong></td><td><strong>" . number_format($employeeTotalLoan, 2) . "</strong></td><td><strong>" . number_format($employeeTotalDeposit, 2) . "</strong></td></tr>";
                                endif;

                                // Reset totals for new employee
                                $currentEmployeeId = $transaction->empl_id;
                                $employeeTotalLoan = 0;
                                $employeeTotalDeposit = 0;
                        ?>
                            <tr>
                                <td colspan="6" class="bg-info text-white text-center"><strong>Employee: <?php echo $transaction->empl_name; ?> (ID: <?php echo $transaction->empl_id; ?>)</strong></td>
                            </tr>
                        <?php endif; ?>

                        <tr>
                            <td><?php echo $transaction->empl_name; ?></td>
                            <td><?php echo $transaction->empl_id; ?></td>
                            <td><?php echo $transaction->customer_name; ?></td>
                            <td><?php echo $transaction->customer_id; ?></td>
                            <td><?php echo number_format($transaction->total_aprove, 2); ?></td>
                            <td><?php echo number_format($transaction->total_deposit, 2); ?></td>
                        </tr>

                        <?php 
                            // Add to the employee's total values
                            $employeeTotalLoan += $transaction->total_aprove;
                            $employeeTotalDeposit += $transaction->total_deposit;
                        ?>

                    <?php endforeach; ?>
                    
                    <!-- Display the total for the last employee -->
                    <tr>
                        <td colspan="4" class="text-right"><strong>Total for Employee (ID: <?php echo $currentEmployeeId; ?>):</strong></td>
                        <td><strong><?php echo number_format($employeeTotalLoan, 2); ?></strong></td>
                        <td><strong><?php echo number_format($employeeTotalDeposit, 2); ?></strong></td>
                    </tr>

                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No transactions found for the selected branch and date.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    
</body>
</html>


<?php include('incs/footer.php'); ?>
