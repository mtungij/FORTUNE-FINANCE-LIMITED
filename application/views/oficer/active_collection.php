<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url("oficer/index"); ?>"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item active"><?php echo $this->lang->line("report_menu"); ?></li>
                        <li class="breadcrumb-item active"><?php echo $this->lang->line("branchwise_report_menu"); ?></li>
                    </ul>
                </div>            
            </div>
        </div>

        <?php if ($das = $this->session->flashdata('massage')): ?> 
            <div class="row"> 
                <div class="col-md-12"> 
                    <div class="alert alert-dismisible alert-success"> 
                        <a href="" class="close">&times;</a> 
                        <?php echo $das;?> 
                    </div> 
                </div> 
            </div> 
        <?php endif; ?>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Active collections</h2> 
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom">
                                <thead class="thead-primary">
                                    <th>S/No</th>
                                    <th>Customer Name</th>
                                    <th>Loan Amount</th>
                                    <th>Receivable</th>
                                    <th>Paid Amount</th>
                                    <th>Duration Type</th>  
                                    <th>Loan Start Date</th>
                                    <th>Loan End Date</th>
                                </thead>

                                <tbody>
                                    <?php $no = 1; $total_loan = 0; $total_receivable = 0; $total_paid = 0; ?>
                                    <?php foreach ($data_collection as $collection): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $collection->f_name ." ". $collection->m_name ." ". $collection->l_name  ?></td>
                                            <td><?= number_format($collection->loan_int) ?></td>
                                            <td><?= $collection->restration ?></td>
                                            <td><?= $collection->total_depost ?></td>
                                            <td>
                                                <?php 
                                                    if ($collection->day == 1) { echo "Daily"; }
                                                    elseif($collection->day == 7){ echo "Weekly"; }
                                                    elseif($collection->day == 30 || $collection->day == 31 || $collection->day == 28 || $collection->day == 29){ echo "Monthly"; }
                                                ?>
                                            </td>
                                            <td><?= $collection->loan_stat_date ?></td>
                                            <td><?= $collection->loan_end_date ?></td>
                                        </tr>
                                        <?php
                                            // Sum the totals for each column
                                            $total_loan += $collection->loan_int;
                                            $total_receivable += $collection->restration;
                                            $total_paid += $collection->total_depost;
                                        ?>
                                    <?php endforeach; ?>

                                    <tr>
                                        <td colspan="2"><b>Total</b></td>
                                        <td><b><?= number_format($total_loan) ?></b></td>
                                        <td><b><?= number_format($total_receivable) ?></b></td>
                                        <td><b><?= number_format($total_paid) ?></b></td>
                                        <td colspan="3"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<?php include('incs/footer.php'); ?>
