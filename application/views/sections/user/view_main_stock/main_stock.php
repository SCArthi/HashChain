            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>View Main Stock</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="ibox-content">
                            
                            <?php if($_SESSION['delete']) { ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <?php echo $_SESSION['delete']; ?>
                                </div>
                            <?php } ?>

                            <br>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="search_text" id="search_text" placeholder="Search by details.." class="form-control" />
                                    <span class="input-group-addon">Search</span>
                                </div>
                            </div>

                                <br>

                            <div class="table-responsive" >
                                 <table class="table table-bordered" data-filter="#search_text" class="footable" data-filtering="true">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="xs">Barcode</th>
                                            <th data-breakpoints="xs">Purchase Order No</th>
                                            <th data-breakpoints="xs">Name</th>
                                            <th data-breakpoints="xs">Type</th>
                                            <th data-breakpoints="xs">Quantity</th>
                                            <th data-breakpoints="xs">Unit Price</th>
                                            <th data-breakpoints="xs">Total</th>
                                            <th data-breakpoints="xs">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($main_stock as $mainstock){ ?>
                                                
                                                    <tr>
                                                        <td><?php echo $mainstock['Barcode']; ?></td>
                                                        <td><?php echo $mainstock['Purchase_order_no']; ?></td>
                                                        <td><?php echo $mainstock['Name']; ?></td>
                                                        <td><?php echo $mainstock['Type']; ?></td>
                                                        <td><?php echo $mainstock['Quantity']; ?></td>
                                                        <td><?php echo $mainstock['Unit_Price']; ?></td>
                                                        <td><?php echo $mainstock['Total']; ?></td>
                                                        <td>
                                                            
                                                            <button class='btn btn-primary btn-md' type='button' data-toggle="modal" data-target="#myModal2" class='text-center'>
                                                            Update</button>
                                                        
                                                            <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content animated flipInY">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                            <h4 class="modal-title">Update Main Stock</h4>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <!-- <form method="POST"> -->
                                                                            <?php echo form_open('Stock/updateMainStock'); ?>
                                                                                <input type="hidden" name="id" value="<?php echo $mainstock['id']; ?>">

                                                                                        <div class="form-group row" id="data_1">
                                                                                            <label class="col-sm-2 col-form-label">Date</label>
                                                                                            <div class="col-sm-10">
                                                                                                <div class="input-group date">
                                                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                                    <input type="text" class="form-control" value="<?php echo date("d/m/Y"); ?>" name="date">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <label class="col-md-3 col-form-label">Barcode :</label> 
                                                                                                <div class="col-md-9">
                                                                                                    <input type="Text" class="form-control" name="Barcode" value="<?php echo $mainstock['Barcode']; ?>">
                                                                                                    <span class="text-danger"><?php echo form_error("Barcode"); ?></span> 
                                                                                                </div>      
                                                                                            
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-5 col-form-label">Purchase Order Number :</label> 
                                                                                                <div class="col-sm-7">
                                                                                                    <input type="Text" class="form-control" name="purchase_order_no" value="<?php echo $mainstock['Purchase_order_no']; ?>">
                                                                                                    <span class="text-danger"><?php echo form_error("purchase_order_no"); ?></span> 
                                                                                                </div>  
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <label class="col-lg-2 col-form-label">Name :</label> 
                                                                                                <div class="col-lg-10">
                                                                                                <input type="Text" class="form-control" name="name" value="<?php echo $mainstock['Name']; ?>">
                                                                                                    <span class="text-danger"><?php echo form_error("name"); ?></span> 
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <label class="col-lg-2 col-form-label">Type :</label> 
                                                                                                <div class="col-lg-10">
                                                                                                <input type="Text" class="form-control" name="type" value="<?php echo $mainstock['Type']; ?>">
                                                                                                    <span class="text-danger"><?php echo form_error("type"); ?></span> 
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-3 col-form-label">Quantity :</label> 
                                                                                                <div class="col-sm-9">
                                                                                                    <div class="input-group m-b">
                                                                                                        <input type="number" class="form-control" name="quantity" value="<?php echo $mainstock['Quantity']; ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <label class="col-lg-3 col-form-label">Unit Price :</label> 
                                                                                                <div class="col-lg-9">
                                                                                                <input type="Text" class="form-control" name="unit_price" value="<?php echo $mainstock['Unit_Price']; ?>">
                                                                                                    <span class="text-danger"><?php echo form_error("unit_price"); ?></span> 
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <label class="col-lg-2 col-form-label">Total :</label> 
                                                                                                <div class="col-lg-10">
                                                                                                <input type="Text" class="form-control" name="total" value="<?php echo $mainstock['Total']; ?>">
                                                                                                    <span class="text-danger"><?php echo form_error("total"); ?></span> 
                                                                                                </div>
                                                                                        </div>

                                                                            </form>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            
                                                                            <button type="submit" class="btn btn-default">Update</button>
                                                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button class='btn btn-danger btn-md' type='submit' data-toggle="modal" data-target="#myModal">
                                                            Delete</button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="myModal" role="dialog">
                                                                <div class="modal-dialog modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Delete Confirmation !</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure to delete the record permanently?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a href='<?php echo base_url(); ?>Stock/deleteMainStock/<?php echo $mainstock['id']; ?>'  type="submit" class="btn btn-default">OK</a>
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                          <?php  } ?>
                                    </tbody>
                                </table> 

                                <div class="text-center">
                                    <button class='btn btn-info btn-md' type='button' class='text-center'>Print</button>
                                </div>
                                
                            </div>
                    
                        </div>
                                
                    </div>
                </div>
            </div>


 </div>

</div>

<!-- footable filter rows -->
    <script type="text/javascript">
    
       $(document).ready(function(){
           
           $('.footable').footable();
           
       });
    
    </script>