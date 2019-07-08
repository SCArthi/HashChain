            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Attendance</h5>
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
                            <?php echo form_open('Attendance/addAttendance'); ?>

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
                                    <label class="col-sm-2 col-form-label">Username :</label> 
                                        <div class="col-sm-10">
                                            <input type="Text" class="form-control" name="name">
                                            <span class="text-danger"><?php echo form_error("name"); ?></span> 
                                        </div>      
                                    
                                </div>
                            
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Starting Time :</label> 
                                        <div class="col-sm-10">
                                            <input type="time" class="form-control" name="start_time">
                                            <span class="text-danger"><?php echo form_error("start_time"); ?></span>
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Ending Time :</label>
                                        <div class="col-sm-10">
                                            
                                            <input type="time" class="form-control" name="end_time">
                                            <span class="text-danger"><?php echo form_error("end_time"); ?></span> 
                                            
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col text-center">
                                        <button class="btn btn-success btn-sm" type="submit" name="record" ><strong>Record Attendance</strong></button>
                                        <button class="btn btn-sm btn-danger " type="reset" name="clear"><strong>Clear</strong></button>
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
                                            <th>Date</th>
                                            <th>Username</th>
                                            <th>Starting Time</th>
                                            <th>Ending Time</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <?php foreach ($attendance as $attendances){ ?>
                                            
                                            <tr>
                                                <td><?php echo $attendances['Presented']; ?></td>
                                                <td><?php echo $attendances['Name']; ?></td>
                                                <td><?php echo $attendances['Start_time']; ?></td>
                                                <td><?php echo $attendances['End_time']; ?></td>
                                                <td>

                                                    <a href='<?php echo base_url(); ?>Attendance/editAttendance/<?php echo $attendances['id']; ?>'  
                                                    class='btn btn-primary btn-md' type='submit'>
                                                    Update</a>
                                                    
                                                    <button data-toggle="modal" data-target="#myModal" class='btn btn-danger btn-md' type='submit'>Delete</button>

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
                                                                    <a href='<?php echo base_url(); ?>Attendance/deleteAttendance/
                                                                    <?php echo $attendances['id']; ?>'  type="submit" class="btn btn-default">OK</a>
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

</div>

<!-- dialog box confirmation for delete record -->
<!-- <script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete the record permanently?");
        if(job!=true)
        {
            return false;
        }
    }
</script> -->