
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">

                        <div class="ibox-title">
                            <h2 class="m-t-none m-b" font-style="BOLD">Transfer</h2>
                                
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

                            <!-- <form method="POST"> -->
                           <?php echo form_open('Transfer/updateTransfer'); ?>
                           <input type="hidden" name="id" value="<?php echo $transferData['id']; ?>">

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
                                        <label class="col-sm-2 col-form-label">Barcode :</label> 
                                            <div class="col-sm-10">
                                                <input type="Text" class="form-control" name="Barcode" value="<?php echo $transferData['Barcode']; ?>">
                                                <span class="text-danger"><?php echo form_error("Barcode"); ?></span> 
                                            </div>      
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Unit Cost :</label> 
                                            <div class="col-lg-10">
                                                <div class="input-group m-b">
                                                    <select class="form-control m-b" name="unitCost" value="<?php echo $transferData['Unit_Cost']; ?>">
                                                        <option>Item 1</option>
                                                        <option>Item 2</option>
                                                        <option>Item 3</option>
                                                        <option>Item 4</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <span class="input-group-addon">type</span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        <span class="text-danger"><?php echo form_error("unitCost"); ?></span>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Transfer to section :</label> 
                                            <div class="col-lg-10">
                                                <select class="form-control m-b" name="sections" value="<?php echo $transferData['Transfer_to_section']; ?>">
                                                    <option>Department 1</option>
                                                    <option>Department 2</option>
                                                    <option>Department 3</option>
                                                    <option>Department 4</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Quantity :</label> 
                                            <div class="col-sm-10">
                                                <div class="input-group m-b">
                                                    <input type="number" class="form-control" name="quantity" value="<?php echo $transferData['Quantity']; ?>">
                                                        <div class="input-group-append">
                                                            <span class="input-group-addon">units</span>
                                                        </div>
                                                        
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Cost :</label>
                                            <div class="col-sm-10">
                                                <div class="input-group m-b">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-addon">Rs.</span>
                                                    </div>
                                                    <input type="number" class="form-control" name="cost" value="<?php echo $transferData['Cost']; ?>">
                                                        
                                                </div>
                                            </div>
                                        
                                    </div>

                                    <div class="form-group row">

                                        <div class="col text-center">
                                            <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-sm" type="button" name="transfer">
                                            <strong>Update</strong></button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update Confirmation !</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Confirm the data to be updated?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">OK</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        
                                    </div>
                            </form>

                            <br>
                            <br>
                            <br>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr> 
                                            <th>Barcode</th>
                                            <th>Unit Cost</th>
                                            <th>Transfer to section</th>
                                            <th>Quantity</th>
                                            <th>Cost</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transfer_data as $transferData){ ?>
                                               
                                            <tr>
                                                <td><?php echo $transferData['Barcode']; ?></td>
                                                <td><?php echo $transferData['Unit_Cost']; ?></td>
                                                <td><?php echo $transferData['Transfer_to_section']; ?></td>
                                                <td><?php echo $transferData['Quantity']; ?></td>
                                                <td><?php echo $transferData['Cost']; ?></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>         
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>

</div>


<!-- dialog box confirmation for delete record -->
<!-- <script>
    function doconfirm1()
    {
        job=confirm("Confirm the data to be updated?");
        if(job!=true)
        {
            return false;
        }
    }
</script>
     -->
