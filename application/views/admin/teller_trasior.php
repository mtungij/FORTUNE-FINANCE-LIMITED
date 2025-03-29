
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
                            <li class="breadcrumb-item active">Report</li>
                            <li class="breadcrumb-item active">Teller Cash Transaction</li>
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
                            <?php $date = date("Y-m-d"); ?>
                            <h2>Teller Cash Transanction / <?php echo $date; ?></h2> 
                            <div class="pull-right">
                               <a href="" data-toggle="modal" data-target="#addcontact2" class="btn btn-primary"><i class="icon-calendar">Filter</i></a>  
                            </div>   
                             </div>
                             <div class="body">
    <div class="table-responsive">
        <table class="table table-hover j-basic-example dataTable table-custom">
            <thead class="thead-primary">
            <tr>
                <th>Branch</th>
                <th>Employee</th>
                <th>Total Disbursed loan</th>
                <th>Total Deposit</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $grand_total_loan = 0;
            $grand_total_deposit = 0;
            ?>
            
            <?php if (!empty($transactions)): ?>
                <?php foreach ($transactions as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row->branch); ?></td>
                        <td><?php echo htmlspecialchars($row->employee); ?></td>
                        <td><?php echo number_format($row->total_loan_approved, 2); ?></td>
                        <td><?php echo number_format($row->total_deposit, 2); ?></td>
                    </tr>
                    <?php 
                    // Add to grand totals
                    $grand_total_loan += $row->total_loan_approved;
                    $grand_total_deposit += $row->total_deposit;
                    ?>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align: center;">No transactions found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" style="text-align: right;"><b>General Total:</b></td>
                <td><?php echo number_format($grand_total_loan, 2); ?></td>
                <td><?php echo number_format($grand_total_deposit, 2); ?></td>
            </tr>
        </tfoot>
    </table>
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



<script>
$(document).ready(function(){
$('#blanch').change(function(){
var blanch_id = $('#blanch').val();
//alert(blanch_id)
if(blanch_id != ''){

$.ajax({
url:"<?php echo base_url(); ?>admin/fetch_ward_data",
method:"POST",
data:{blanch_id:blanch_id},
success:function(data)
{
$('#customer').html(data);
//$('#district').html('<option value="">All</option>');
}
});
}
else
{
$('#customer').html('<option value="">Select customer</option>');
//$('#district').html('<option value="">All</option>');
}
});



$('#customer').change(function(){
var customer_id = $('#customer').val();
 //alert(customer_id)
if(customer_id != '')
{
$.ajax({
url:"<?php echo base_url(); ?>admin/fetch_data_vipimioData",
method:"POST",
data:{customer_id:customer_id},
success:function(data)
{
$('#loan').html(data);
//$('#malipo_name').html('<option value="">select center</option>');
}
});
}
else
{
$('#loan').html('<option value="">Select Active loan</option>');
//$('#malipo_name').html('<option value="">chagua vipimio</option>');
}
});

// $('#social').change(function(){
//  var district_id = $('#social').val();
//  if(district_id != '')
//  {
//   $.ajax({
//    url:"<?php echo base_url(); ?>user/fetch_data_malipo",
//    method:"POST",
//    data:{district_id:district_id},
//    success:function(data)
//    {
//     $('#malipo_name').html(data);
//     //$('#malipo').html('<option value="">chagua malipo</option>');
//    }
//   });
//  }
//  else
//  {
//   //$('#vipimio').html('<option value="">chagua vipimio</option>');
//   $('#malipo_name').html('<option value="">chagua vipimio</option>');
//  }
// });


});
</script>



 <div class="modal fade" id="addcontact2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Tafuta</h6>
            </div>
            <?php echo form_open("admin/filter_siku_report"); ?>
            <div class="modal-body">
                <div class="row clearfix">
                    <?php $date = date("Y-m-d"); ?>
                    <div class="col-md-6 col-6">
                    <span>From:</span>
                    <input type="date" class="form-control" value="<?php echo $date; ?>" name="from" required>        
                      
                    </div>
                    <div class="col-md-6 col-6">
                    <span>To:</span>
                    <input type="date" class="form-control" name="to" value="<?php echo $date; ?>" required>           
                    </div>
                    <input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id']; ?>">
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

