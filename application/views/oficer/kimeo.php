<div class="row clearfix">
                <!-- First Grid Column -->
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="header">
                            <h2>MALIPO YA LEO</h2>
                        </div>
                        <div class="body">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/leo"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Leo</a>
                                        </td>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/leo"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span class="badge badge-seconday"><?= $leojumla->total_hai ?></span>
                                                <span
                                                    class="badge badge-success"><?= number_format($total_active->total_deposit) ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/madeni"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Madeni
                                                Sugu</a>
                                        </td>
                                        <?php $date = date("Y-m-d"); ?>
                                        <?php $customer_deposit = $this->db->query("SELECT * FROM tbl_loans WHERE blanch_id = '$blanch_id'AND date_show = '$date' AND dep_status = 'close'"); ?>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/madeni"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span
                                                    class="badge badge-seconday"></span>
                                                <span
                                                    class="badge badge-danger"><?= number_format($deposit_out->total_out_dep) ?></span>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/get_loan_withdrawal_data"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Gawa</a>
                                        </td>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/get_loan_withdrawal_data"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span class="badge badge-seconday"><?= $total_withdrawal ?></span>
                                                <span
                                                    class="badge badge-info"><?= number_format($total_loanwithdraw->total_loan_with) ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/deducted_income"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Fomu</a>
                                        </td>

                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/deducted_income"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span class="badge badge-seconday"><?= $total_withdrawal ?></span>
                                                <span
                                                    class="badge badge-success"><?= number_format($total_deducted->total_deducted_fee) ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/income_dashboard"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Faini</a>
                                        </td>

                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/income_dashboard"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">

                                                <span
                                                    class="badge badge-danger"><?= number_format($total_receved->total_receved) ?></span>
                                            </a>
                                        </td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>

                <!-- Second Grid Column -->
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="header">
                            <h2>ZIADA</h2>
                        </div>
                        <div class="body">
                            <table class="table">
                            <tbody>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/loan_pending_time"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">MALAZO</a>
                                        </td>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/loan_pending_time"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span
                                                    class="badge badge-success"><?= number_format($total_pending->total_pending) ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/oustand_loan"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">MADENI
                                                JUMLA</a>
                                        </td>
                                       <?php  $outstand = $this->queries->get_outstand_loanBranch($blanch_id);  ?>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/oustand_loan"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span
                                                    class="badge badge-danger"><?php echo number_format($outstand->total_outstand); ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;"> SUGU KESHO</a>
                                        </td>
                                        <?php $date = date("Y-m-d"); ?>
                                        <?php $customer_deposit = $this->db->query("SELECT * FROM tbl_loans WHERE blanch_id = '$blanch_id'AND date_show = '$date' AND dep_status = 'close'"); ?>
                                        <td class="align-right">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">
                                                
                                                <span
                                                    class="badge badge-danger">SOON</span>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="c">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">WATEJA WAPYA</a>
                                        </td>
                                        <td class="align-right">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">
                                                
                                                <span
                                                    class="badge badge-info">SOON</span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">GAWA YA MWEZI</a>
                                        </td>

                                        <td class="align-right">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">
                                               
                                                <span
                                                    class="badge badge-success">SOON</span>
                                            </a>
                                        </td>
                                    </tr>

                    




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

               
            </div>