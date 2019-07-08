        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">

                        <div class="ibox-title">
                            <h2 class="m-t-none m-b" font-style="BOLD">Enter Finished Good</h2>
                                
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

                            
                            <!-- <form method="POST"> -->
                           <?php echo form_open('Goods/finished_good'); ?>

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
                                        <label class="col-lg-2 col-form-label">Stock Target :</label> 
                                            <div class="col-lg-10">
                                                <select class="form-control m-b" name="stockTarget">
                                                    <option>Company</option>
                                                    <option>Cash</option>
                                                    
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Barcode :</label> 
                                        <div class="col-sm-10">
                                            <input type="Text" name="Barcode" class="form-control">
                                            <span class="text-danger"><?php echo form_error("Barcode"); ?></span>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Item Name :</label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="" placeholder=" - " class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Material Type :</label>
                                        <div class="col-lg-10" >
                                            <input type="text" disabled="" placeholder=" - " class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Quantity :</label> 
                                        <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <input type="number" name="quantity" class="form-control" value="0">
                                                <div class="input-group-append">
                                                    <span class="input-group-addon">units</span>
                                                </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Unit Price :</label>
                                        <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <span class="input-group-addon">Rs.</span>
                                            </div>
                                            <input type="number" name="unitPrice" class="form-control" value="0">
                                                
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Total :</label>
                                        <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <span class="input-group-addon">Rs.</span>
                                            </div>
                                            <input type="number" name="total" class="form-control" value="0" >
                                
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col text-center">
                                        
                                            <button class="btn btn-primary btn-sm " type="submit"><strong>Save</strong></button>
                                            <button class="btn btn-sm btn-danger " type="reset"><strong>Clear</strong></button>
                                        
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
                                            <th>Stock Target</th>
                                            <th>Barcode</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                            <th>Options</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($finished_good as $finishedGood){ ?>
                                                    <tr>
                                                        <td><?php echo $finishedGood['Stock_target']; ?></td>
                                                        <td><?php echo $finishedGood['Barcode']; ?></td>
                                                        <td><?php echo $finishedGood['Quantity']; ?></td>
                                                        <td><?php echo $finishedGood['Unit_Price']; ?></td>
                                                        <td><?php echo $finishedGood['Total']; ?></td>
                                                        
                                                        <td>
                                                            <button class='btn btn-primary btn-md' type='submit' class='text-center'>Update</button>
                                                            <button class='btn btn-danger btn-md' type='reset'>Delete</button>
                                                        </td>
                                                    </tr>
                                         <?php   } ?>
                                    </tbody>
                                </table>         
                            </div>

                        </div>
                    </div>
                </div>
        </div>

    </div>


</div>