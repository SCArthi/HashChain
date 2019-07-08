        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <i class="fa fa-plus"></i>
                            <h5>Add Final Goods</h5>
                        </div>
                        <div class="ibox-content">
                            <?php echo form_open('FinalGoods/updateFinalGoods'); ?>
                                <input type="hidden" name="id" value="<?php echo $finalGood['id']; ?>">
                                
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
                                        <select class="form-control m-b" name="section" value="<?php echo $finalGood['Section']; ?>">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Barcode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="barcode" value="<?php echo $finalGood['Barcode']; ?>">
                                        <span class="text-danger"><?php echo form_error("barcode"); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" value="<?php echo $finalGood['Product_name']; ?>">
                                        <span class="text-danger"><?php echo form_error("name"); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="quantity" value="<?php echo $finalGood['Quantity']; ?>">
                                        <span class="text-danger"><?php echo form_error("quantity"); ?></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-sm" type="button" name="record" ><strong>Update</strong></button>
                                            
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

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Final Goods</h5>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Section</th>
                                        <th>Barcode</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
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