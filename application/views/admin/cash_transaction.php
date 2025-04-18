<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/index"); ?>"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Report</li>
                            <li class="breadcrumb-item active">General Transaction</li>
                        </ul>
                    </div>            
                 
                </div>
            </div>
                  <?php if ($das = $this->session->flashdata('massage')): ?> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="alert alert-dismisible alert-success"> <a href="" class="close">&times;</a> 
                                    <?php echo $das;?> </div> 
                            </div> 
                        </div> 
                    <?php endif; ?>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                         <div class="header">
                            <h2>General Transaction</h2> 
                            <div class="pull-right">
                               <a href="" data-toggle="modal" data-target="#addcontact2" class="btn btn-primary"><i class="icon-calendar">Filter</i></a>  
                            </div>   
                             </div>
                          <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-primary">
                                         <th>S/No.</th>
                                         <th>Branch</th>
                                         <th>Staff</th>
                                        <th>Customer Name</th>
                                        <th>Phone Number</th>
                                        <th>Deposit</th>
                                        <th>Deposited A/C</th>
                                        <th>Disbursed loan</th>
                                        <th>Disbursed A/C</th>
                                        <th>Date</th>
                                        
                                        <th>Adjust</th>
                                    </thead>
                                   
                                    <tbody>
                                        <?php $no = 1; ?>
                                <?php foreach ($cash as $cashs): ?>
                                              <tr>
                                    <td><?php echo $no++; ?>.</td>
                                    <td><?php echo $cashs->blanch_name; ?></td>
                                    <td><?php echo $cashs->empl_name; ?></td>
                                    <td><?php echo $cashs->f_name; ?> <?php echo $cashs->m_name; ?> <?php echo $cashs->l_name; ?></td>
                                    <td><?php echo $cashs->phone_no; ?></td>
                                    <td>    <?php if ($cashs->depost == TRUE) {
                                         ?>
                                        <?php echo number_format($cashs->depost); ?>
                                    <?php }elseif ($cashs->depost == FALSE) {
                                     ?>
                                     -
                                     <?php } ?></td>
                                     <td>
                                        <?php if ($cashs->deposit_account == TRUE) {
                                         ?>
                                        <?php echo $cashs->deposit_account; ?>
                                    <?php }else{ ?>
                                        -
                                        <?php } ?>
                                            
                                        </td>
                                    <td>
                                        <?php if ($cashs->withdraw == TRUE) {
                                         ?>
                                        <?php echo number_format($cashs->loan_aprov); ?>
                                    <?php }elseif ($cashs->withdraw == FALSE) {
                                     ?>
                                     -
                                     <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($cashs->withdrawal_account == TRUE) {
                                         ?>
                                        <?php echo $cashs->withdrawal_account; ?>
                                    <?php }else{ ?>
                                        -
                                        <?php } ?>
                                            
                                        </td>
                                    <!--     <td><?php //echo number_format($cashs->total_deducted); ?></td>
                                        <td><?php //echo number_format($cashs->total_penartPaid); ?></td> -->
                                   
                                    <td><?php echo $cashs->time_rec; ?></td>
                                    <td>
                                        <?php if ($cashs->depost == TRUE) {
                                         ?>
                                         
                                        <a href="<?php echo base_url("admin/delete_depost_data/{$cashs->pay_id}"); ?>" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this payment?')" title="Adjust">Delete</i></a>
                                    <?php }else{ ?>
                                        <?php } ?>
                                    </td>
                                  
                                    </tr>

                                    <?php endforeach; ?>
                                    </tbody>
                                     <tr>
                                        <td><b>TOTAL:</b></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b><?php echo number_format($sum_withdrawls->total_deposit); ?></b></</td>
                                        <td></td>
                                        <td><b><?php echo number_format($sum_withdrawls->total_aprove); ?></b></td>
                                        <td></td> 
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td><b>SUMMARY</b></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                    </tr>
                                   <?php foreach ($account_deposit as $account_deposits): ?>
                                    <tr>
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td><b><?php echo $account_deposits->account_name; ?></b></td> 
                                       <td></td> 
                                       <td><b><?php echo number_format($account_deposits->total_deposit_acc); ?></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                       <td></td> 
                                    </tr>
                                     <?php endforeach; ?>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><b>Default repayment</b></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                          <?php $no = 1; ?>
                                     <?php foreach ($default_list as $default_lists): ?>
                                       <tr>
                                         <td></td>
                                         <td> </td>
                                         <td></td>
                                         <td></td>
                                         <td><?php echo $default_lists->f_name; ?> <?php echo $default_lists->m_name; ?> <?php echo $default_lists->l_name; ?></td>
                                         <td><?php echo $default_lists->blanch_name; ?></td>
                                         <td><?php echo number_format($default_lists->depost); ?></td>
                                         <td><?php echo $default_lists->account_name; ?></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                      <?php endforeach ?>
                                      <tr>
                                         <td></td>
                                         <td> </td>
                                         <td></td>
                                         <td></td>
                                         <td><b>Total Default repayment</b></td>
                                         <td></td>
                                         <td><b><?php echo number_format($toyal_default->total_default); ?></b></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                       
                                
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td>Disbursed Account Summary</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                    <?php foreach ($withdrawal_account as $withdrawal_accounts): ?>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><b><?php echo $withdrawal_accounts->account_name; ?></b></td>
                                         <td></td>
                                         <td><b><?php echo number_format($withdrawal_accounts->total_with_acc); ?></b></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                     <?php endforeach; ?>

                                    


                                       <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><b>Total active clients who paid</b></td>
                                         <td></td>
                                         <td><b><?php echo number_format($hai_wateja->total_hai); ?></b></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                      <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><b>Total overdue clients who paid</b></td>
                                         <td></td>
                                         <td><b><?php echo number_format($sugu_wateja->total_sugu); ?></b></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>


                                      <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><b>Total Amount payments</b></td>
                                         <td></td>
                                         <td><b><?php echo number_format($sum_withdrawls->total_deposit + $total_miamala->total_miamala); ?></b></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>

                                </table>
                            </div>
                        </div>

                    </div>
                </div> 


             
            </div>
        </div>
    </div>
</div>

<?php include('incs/footer.php'); ?>


 <div class="modal fade" id="addcontact2<?php //echo $employees->empl_id; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Filter Cash Transaction</h6>
            </div>
            <?php echo form_open("admin/cash_transaction_blanch"); ?>
            <div class="modal-body">
                <div class="row clearfix">

                                <div class="col-md-12 col-12">
                                    <span>*Select Branch:</span>
                                     <select type="number" class="form-control" name="blanch_id" required>
                                         <option value="">Select Branch</option>
                                         <?php foreach ($blanch as $blanchs): ?>
                                         <option value="<?php echo $blanchs->blanch_id; ?>"><?php echo $blanchs->blanch_name; ?></option>
                                         <?php endforeach; ?>
                                         <option value="all">All</option>
                                     </select>
                                </div>
                                <div class="col-md-6 col-6 ">
                                    <?php $date = date("Y-m-d"); ?>
                                    <span>*From:</span>
                                    <input type="date" name="from" autocomplete="off" value="<?php echo $date; ?>" class="form-control" required>
                                </div>
                                <div class="col-md-6 col-6 ">
                                    <span>*To:</span>
                                    <input type="date" name="to" autocomplete="off" value="<?php echo $date; ?>" class="form-control" required>
                                </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


