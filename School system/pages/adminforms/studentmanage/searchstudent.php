<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>


<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">

<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Search Student</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-4">

                    </div>
                    <form role="form">
                        <div class="box-body">



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div id="studentMediumTxt" class="form-group">
                                                <label  >Select Year:</label>
                                                <select class="form-control">
                                                    <option value="6">2019</option>
                                                    <option value="7">2018</option>
                                                    <option value="8">2017</option>
                                                    <option value="9">2016</option>
                                                    <option value="10">2015</option>
                                                    <option value="11">2014</option>
                                                    <option value="1">2013</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div id="studentMediumTxt" class="form-group">
                                                <label  >Select Grade:</label>
                                                <select class="form-control">
                                                    <option value="6">Grade 6</option>
                                                    <option value="7">Grade 7</option>
                                                    <option value="8">Grade 8</option>
                                                    <option value="9">Grade 9</option>
                                                    <option value="10">Grade 10</option>
                                                    <option value="11">Grade 11</option>
                                                    <option value="12">Grade 12</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div id="studentMediumTxt" class="form-group">
                                                <label  >Select Class:</label>
                                                <select class="form-control">
                                                    <option value="sinhala">All</option>
                                                    <option value="english">A</option>
                                                    <option value="tamil">B</option>
                                                    <option value="english">C</option>
                                                    <option value="tamil">D</option>
                                                    <option value="english">E</option>
                                                    <option value="tamil">F</option>
                                                    <option value="english">G</option>
                                                    <option value="tamil">H</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<hr>
                            <div class="row">
                                <div class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Student Details Details:</label>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Admission No</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Address</th>
                                            </tr>
                                            <tr>
                                                <td><a herf="../studentmanage/viewstudent.php">1</a></td>
                                                <td>
                                                    -
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>

                        </div>  
                    </form>
                    <div class="box-footer">

                    </div>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<script>
    var stdFName = document.getElementById("studentIdText").value;
    var stdLName = document.getElementById("studentNameTxt").value;
    var stdLName = document.getElementById("messageTxt").value;
</script>

<?php include_once('../admincommon/footer.php'); ?>
