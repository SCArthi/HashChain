        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <i class="fa fa-plus"></i>
                            <h5>Add Final Goods</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <?php if($_SESSION['error']) { ?>
                                <div class="alert alert-warning alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <?php echo $_SESSION['error']; ?>
                                </div>
                            <?php } ?>

                            <?php if($_SESSION['success']) { ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <?php echo $_SESSION['success']; ?>
                                </div>
                            <?php } ?>

                            <?php if($_SESSION['update']) { ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <?php echo $_SESSION['update']; ?>
                                    </div>
                            <?php } ?>

                            <?php if($_SESSION['delete']) { ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <?php echo $_SESSION['delete']; ?>
                                </div>
                            <?php } ?>

                            <!-- <form method="POST"> -->
                            <?php echo form_open('FinalGoods/addFinalGoods'); ?>
                                
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
                                    <label class="col-sm-2 col-form-label">Select Section</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="section">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                        </select>
                                        <?php echo form_error("section"); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Barcode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="barcode">
                                        <span class="text-danger"><?php echo form_error("barcode"); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name">
                                        <span class="text-danger"><?php echo form_error("name"); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="quantity">
                                        <span class="text-danger"><?php echo form_error("quantity"); ?></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-w-m btn-primary" type="submit">Save</button>
                                        <button class="btn btn-w-m btn-danger" type="clear">Clear</button>
                                    </div>
                                </div>
                            </form>

                            <br>
                            <br>
                            <br>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Section</th>
                                        <th>Barcode</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($finalGoods as $finalGood) { ?>
                                        <tr>
                                            <td><?php echo $finalGood['Date']; ?></td>
                                            <td><?php echo $finalGood['Section']; ?></td>
                                            <td><?php echo $finalGood['Barcode']; ?></td>
                                            <td><?php echo $finalGood['Product_name']; ?></td>
                                            <td><?php echo $finalGood['Quantity']; ?></td>
                                            <td>
                                                                                   
                                                <a href='<?php echo base_url(); ?>FinalGoods/editFinalGoods/<?php echo $finalGood['id']; ?>'  
                                                    class='btn btn-primary btn-md' type='submit'>
                                                    Update</a>

                                                    <button data-toggle="modal" data-target="#myModal" class='btn btn-danger btn-md' type='button'>Delete</button>

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
                                                                        <a href='<?php echo base_url(); ?>FinalGoods/deleteFinalGoods/
                                                                        <?php echo $finalGood['id']; ?>'  type="submit" class="btn btn-default">OK</a>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </td>
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