            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Transfer</h5>
                            <div class="float-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-white active">Today</button>
                                    <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                    <button type="button" class="btn btn-xs btn-white">Annual</button>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox ">
                            <div class="ibox-content">
                                <div>
                                    <h3 class="font-bold no-margins">
                                        Transfer Details :
                                    </h3>
                                    <small>Sales count.</small>
                                    <div class="float-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-xs btn-white ">Today</button>
                                            <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                            <button type="button" class="btn btn-xs btn-white">Annual</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-t-sm">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div>
                                            <ul class="stat-list">
                                                <li>
                                                    <h2 class="no-margins">2,346</h2>
                                                    <small>Total orders in period</small>
                                                    <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 48%;" class="progress-bar"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h2 class="no-margins ">4,422</h2>
                                                    <small>Orders in last month</small>
                                                    <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 60%;" class="progress-bar"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h2 class="no-margins ">9,180</h2>
                                                    <small>Monthly income from orders</small>
                                                    <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 22%;" class="progress-bar"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-warning float-right">Timely Attendance</span>
                                <h5>Attendance Marking</h5>
                            </div>
                            <div class="ibox-content">
                               
                                <form>
                                    <p><u>Mark attendance (Compulsory Process)</u></p>

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
                                        <label class="col-lg-3 col-form-label">Username :</label>

                                        <div class="col-lg-8">
                                            <input type="text" name="name">
                                            <span class="text-danger"><?php echo form_error("name"); ?></span> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Starting Time :</label>

                                        <div class="col-lg-8">
                                            <input type="time" name="start_time">
                                            <span class="text-danger"><?php echo form_error("start_time"); ?></span> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Ending Time : </label>

                                        <div class="col-lg-8">
                                            <input type="time" name="end_time">
                                            <span class="text-danger"><?php echo form_error("end_time"); ?></span> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <div class="col text-center">

                                                   <button class="btn btn-sm btn-info" type="submit">
                                                    Record Attendance</button> -->

                                                <!-- <button class="btn btn-sm btn-info" type="button" data-toggle="modal" data-target="#myModal2">
                                                    Record Attendance</button>
                                                    <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content animated flipInY">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                    <h4 class="modal-title">Confirmation Dialog Box</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-4 col-form-label">Starting Time :</label>
                                                                            <label class="col-lg-3 col-form-label">
                                                                                <?php
                                                                                    echo "" . date("h:i:sa");
                                                                                ?>
                                                                            </label>
                                                                            
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-4 col-form-label">Ending Time : </label>
                                                                            <label class="col-lg-3 col-form-label">
                                                                                <?php
                                                                                    echo "" . date("h:i:sa");
                                                                                ?>
                                                                            </label>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="ladda-button btn btn-warning" data-style="contract">Record</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </div>
                        </div>
                    <!-- </div> --> 
                </div>

            </div>
    </div>


</div>