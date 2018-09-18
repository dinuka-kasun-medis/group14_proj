<?php include_once('head.php'); ?>
<?php include_once('header2.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php //include_once('right_panel.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Student Details</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Student Name:</label>
                                            <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Admission No:</label>
                                            <input type="email" class="form-control" id="addmissionNoTxt" placeholder="Enter Admission No">
                                        </div>
                                        <div class="form-group">
                                            <label>Birth Day:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right" id="date"/>
                                            </div><!-- /.input group -->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address:</label>
                                            <textarea class="form-control" id="addressTxt" rows="3" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask='"mask": "(999) 9999999"' data-mask/>
                                            </div><!-- /.input group -->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email:</label>
                                            <input type="email" class="form-control" id="emailTxt" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" id="exampleInputFile">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">

                                    </div>
                                </form>
                            </div><!-- /.box -->
        </div>
<!--        parent details-->
        <div class="col-md-6">
            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Parent's Details</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-check">
                                            <label for="exampleInputEmail1">Parent</label><br>
                                            <input type="radio"  name="parent"  id="father" class="form-check-input value="Father">  Father<br>
                                            <input type="radio"  name="parent" id="mother" class="form-check-input value="Mother">  Mother<br>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Parent's Name:</label>
                                            <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="InputOccupation">Occupation:</label>
                                            <input type="text" class="form-control" id="parentOcupationTxt" placeholder="Enter Occupation">
                                        </div>
                                        <div class="form-group">
                                            <label for="InputEmail1">Occupation:</label>
                                            <input type="Email" class="form-control" id="email" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask='"mask": "(999) 9999999"' data-mask/>
                                            </div><!-- /.input group -->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address:</label>
                                            <textarea class="form-control" id="motherAddressTxt" rows="3" placeholder="Enter Address"></textarea>
                                        </div>


                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
        </div>
    </div>
    <div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">View students</button>
        </div>
    </div>
    </section>
</section>


<?php include_once('script.php'); ?>