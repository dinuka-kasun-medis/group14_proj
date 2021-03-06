<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js" xmlns="http://www.w3.org/1999/html"
        xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="../../../firebase models/reports.js"></script>

<section class="content-wrapper">
    <div class="content-header">
        <div class="row">

            <div class="col-md-6">

            <!--            left side panel-->

                <!--                student details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Student Details</h3>
                    </div><!-- /.box-header -->
                    <br>
                    <div class="row">
                    </div>

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
                    <div class="col-md-6">
                    </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div id="studentMediumTxt" class="form-group">
                                    <label class="text-muted">Enter Registration Number</label>
                                    <div class="input-group">
                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Enter Register Number"/>
                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div id="studentMediumTxt" class="form-group">
                                <button style="width:150px" type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>




                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <!--Lable field-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Profile picture -->
                                            <div >
                                                <img src="../../../dist/img/user_100x128.png" alt="User Image">
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-edit"></i></a></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa  fa-print"></i></a></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-download"></i></a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <!--Lable names-->
                                            <div class="form-group">
                                                <label class="text-muted"  > First Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  > Middle Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  > Last Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Religion:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Admission Date:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Medium:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Section:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Phone:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="studentFNameLbl">-</label>
                                    </div>
                                            <div class="form-group">
                                                <label id="studentMNameLbl">-</label>
                                            </div>
                                            <div class="form-group">
                                                <label id="studentLNameLbl">-</label>
                                            </div>
                                    <div class="form-group">
                                        <label id="studentGenderLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentBdyLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentReligionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentEmailLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAdtLbl">-</label>
                                    </div>
                                            <div class="form-group">
                                                <label id="studentMediumLbl">-</label>
                                            </div>
                                    <div class="form-group">
                                        <label id="studentClassLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentSectionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAddressLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentPhoneLbl">-</label>
                                    </div>

                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->



                                            <div class="box box-primary">
                                            <div class="box-header  with-border">
                                                <h3 class="box-title">Guardian's Details</h3>
                                            </div><!-- /.box-header -->
                                            <!-- form start -->
                                            <form role="form">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label >Guardian type:</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <input type="radio"  name="parent"  id="father" class="form-check-input" value="Father" > Father
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="radio"  name="parent" id="mother" class="form-check-input" value="Mother">  Mother
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="radio"  name="parent" id="guardian" class="form-check-input" value="Guardian">  Guardian
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="text-muted"  >Name:</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-muted"  >Occupation:</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-muted"  >Email:</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-muted"  >Phone:</label>
                                                            </div>
                                                        </div>

                                                        


                                                <div class="col-md-8">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label  id="parentNameLbl">-</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label id="parentOccupationLbl">-</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label id="parentEmailLbl">-</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label id="parentPhoneLbl">-</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                                      </form>
                                                  </div><!-- /.box -->
                                                   </div>



                                                         </div>

                                                 <div class="col-md-6 ">
                                                                 <div>

                                                    <div class="box box-primary">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">Student Report</h3>
                                                        </div><!-- /.box-header -->
                                                        <br>

                                                        <form role="form">
                                                            <div class="box-body">
                                                                <!--Lable field-->
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="row">
                                                                        </div>

                                                                            <div class="form-group">
                                                                                    <div class="col-md-8">
                                                                                        <div id="studentMediumTxt" class="form-group">
                                                                                            <label  >Select Year:</label>
                                                                                            <select class="form-control" id="studentyear">
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
                                                                        <div class="form-group">
                                                                            <div class="col-md-8">
                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <label  >Select Grade:</label>
                                                                                    <select class="form-control" id="studentgrade">
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
                                                                        <div class="form-group">
                                                                            <div class="col-md-8">
                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <label  >Select Class:</label>
                                                                                    <select class="form-control" id="studentclass">
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
                                                                        <div class="form-group">
                                                                            <div class="col-md-8">
                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <label  >Term Test No:</label>
                                                                                    <select class="form-control" id="studenttest">
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                        <div class="col-md-6">
                                                                        </div>
                                                                        <div class="form-group">

                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <label class="text-muted"> Enter Registration Number</label>
                                                                                    <div class="input-group">
                                                                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Enter Register Number"/>
                                                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-8">
                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <button style="width:150px" type="submit" class="btn btn-primary" onclick="getreports()"> Search</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                            <div class="col-md-6">

                                                                                <div class="col-md-6">

                                                                            <!--Lable names-->
                                                                            <div class="form-group">

                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Registration Number:</label>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Name:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">School:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Grade:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Class:</label>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Year:</label>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Test No:</label>
                                                                                </div>



                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject1:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject2:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject3:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject4:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject5:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject6:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject7::</label>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject8:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject9:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Total Marks:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Position:</label>
                                                                                </div>




                                                                            </div>
                                                                        </div>
                                                                    </div>




                                                                    <div class="col-md-6">

                                                                            <div class="form-group">
                                                                                <label id="studentAdmissionNoLbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="stuNameLbl">-</label>
                                                                            </div>
                                                                        <div class="form-group">
                                                                            <label id="stuSchoolLbl">-</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label id="stuGradeLbl">-</label>
                                                                        </div>
                                                                            <div class="form-group">
                                                                                <label id="stuClassLbl">-</label>
                                                                            </div>
                                                                        <div class="form-group">
                                                                            <label id="studentYearLbl">-</label>
                                                                        </div>
                                                                            <div class="form-group">
                                                                                <label id="studentTermTestNoLbl">-</label>
                                                                            </div>



                                                                            <div class="form-group">
                                                                                <label id="studentSubject1Lbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentSubject2Lbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentSubject3Lbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentSubject4Lbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentSubject5Lbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentSubject6Lbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentSubject7Lbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentSubject8Lbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentSubject9Lbl">-</label>
                                                                            </div>
                                                                        <div class="form-group">
                                                                            <label id="studentTotalMarksLbl">-</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label id="studentPositionLbl">-</label>
                                                                        </div>
                                                                        </div>
                                                                </div>
                                                            </div>






                                                                <!-- /.box-body -->
                                                                <div class="box-footer">
                                                                </div>
                                                        </form>
                                                    </div><!-- /.box -->


                                                                     <body class="skin-blue">
                                                                     <div class="wrapper">


                                                                                 <!--                Exam results-->

                                                                         <div class="box box-primary">

                                                                             <section class="content-header">
                                                                                     <div class="box-header  with-border">
                                                                                         <h3 class="box-title">Exam Results</h3>
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
                                                                                                                 <label  >Select Term:</label>
                                                                                                                 <select class="form-control">
                                                                                                                     <option value="1">1</option>
                                                                                                                     <option value="2">2</option>
                                                                                                                     <option value="3">3</option>
                                                                                                                 </select>
                                                                                                             </div>
                                                                                                         </div>
                                                                                                     </div>

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

                                                                                                 <div class="col-md-6">
                                                                                                     <div class="form-group">
                                                                                                         <div class="col-md-8">
                                                                                                             <div id="studentMediumTxt" class="form-group">
                                                                                                                 <label class="text-muted">Search by Exam ID</label>
                                                                                                                 <div class="input-group">
                                                                                                                     <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Admission No"/>
                                                                                                                     <span class="input-group-addon">
                                                                                                               <input type="checkbox">
                                                                                                                    </span>
                                                                                                                 </div>
                                                                                                             </div>
                                                                                                         </div>
                                                                                                     </div>

                                                                                                     <div class="form-group">
                                                                                                         <div class="col-md-8">
                                                                                                             <div id="studentMediumTxt" class="form-group">
                                                                                                                 <label class="text-muted">Search by Exam Date</label>
                                                                                                                 <div class="input-group">
                                                                                                                     <input id="lNameSearch" type="date" name="q" class="form-control" placeholder="Search by First Name"/>
                                                                                                                     <span class="input-group-addon">
                                                                                                              <input type="checkbox">
                                                                                                                  </span>
                                                                                                                 </div>
                                                                                                             </div>
                                                                                                         </div>
                                                                                                     </div>

                                                                                                     <div class="form-group">
                                                                                                         <div class="col-md-8">
                                                                                                             <div id="studentMediumTxt" class="form-group">
                                                                                                                 <label class="text-muted">Search by Subject:</label>
                                                                                                                 <div class="input-group">
                                                                                                                     <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Last Name"/>
                                                                                                                     <span class="input-group-addon">
                                                                                                                          <input type="checkbox">
                                                                                                                          </span>
                                                                                                                 </div>
                                                                                                             </div>
                                                                                                         </div>
                                                                                                     </div>
                                                                                                     <div class="form-group">
                                                                                                         <div class="col-md-8">
                                                                                                             <div id="studentMediumTxt" class="form-group">
                                                                                                                 <button style="width:150px" type="button" class="btn btn-primary">Search</button>
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
                                                                                                                 <th>Exam Id</th>
                                                                                                                 <th>Exam Name</th>
                                                                                                                 <th>Date</th>
                                                                                                                 <th>Results</th>
                                                                                                             </tr>
                                                                                                             <tr>
                                                                                                                 <td>
                                                                                                                     <a href="../studentmanage/viewstudent.php">1600254</a>
                                                                                                                 </td>
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
                                                                                 </div>
                                                                                 <!-- /.box -->


                                                                     </section>
                                                                     </div>
                                                                     </div>
                                                                     </body>




</section>
</section>
<script>
    getschool("schoolid");
    setTimeout(p ,1500);



    function p(){
$("#classlist").empty();
db.collection("schools").where("id","==",school)
.get()
.then(function(querySnapshot) {
querySnapshot.forEach(function(doc) {
db.collection("schools").doc(doc.id).collection("grades").where("grade","==",grade)
.get()
.then(function(querySnapshot) {
querySnapshot.forEach(function(doc) {
var classes=doc.data().classes;
classes.forEach(function(cls){
var sel = document.getElementById("classlist");
var opt = document.createElement("option");
opt.value = cls;
opt.text = cls;
sel.add(opt);

})
console.log(doc.id, " => ", classes);
if((grade==10) || (grade==12) ||(grade==11) || (grade==13)){
document.getElementById("subjectselection").style.display = 'block';
var i=0;
var subs=doc.data().subjects;
subs.forEach(function(sub){
var tableref=document.getElementById('s');
var newCheckbox = document.createElement("input");
newCheckbox.type = "checkbox";
newCheckbox.name = "subject"+i;
newCheckbox.value = sub;
//document.getElementById("subjectselection").appendChild(newCheckbox);
var row=tableref.insertRow(-1);
row.insertCell(0).appendChild(newCheckbox);
//var label = document.createElement('label');
// label.htmlFor = sub;
// label.appendChild(document.createTextNode(sub));
row.insertCell(1).innerHTML=sub ;
i++;

// document.getElementById("subjectselection").appendChild(label);
//document.getElementById("subjectselection").appendChild(document.createElement("br"));

})
}
else{
document.getElementById("subjectselection").style.display = 'none';
}
});
})
.catch(function(error) {
console.log("Error getting documents: ", error);
});

});
})
.catch(function(error) {
console.log("Error getting documents: ", error);
});

}
    function GetCellValues() {
        var table = document.getElementById('s');
        var sublist=[];
        for (var r = 0, n = table.rows.length; r < n; r++) {
            var check=$('input:checkbox[name=subject'+r+']').is(':checked');
            if(check==true)
                sublist.push($('input:checkbox[name=subject'+r+']').val());

        }
        return sublist;
    }
</script>





<script>


        var studentFNameLbl
        var studentMNameLbl
        var studentLNameLbl
    var studentGenderLbl
    var studentBdyLbl
    var studentReligionLbl
    var studentEmailLbl
    var studentAdtLbl
    var studentMediumLbl
    var studentClassLbl
    var studentSectionLbl
    var studentAddressLbl
    var studentPhoneLbl
    var parentNameLbl
    var parentOccupationLbl
    var parentEmailLbl
    var parentPhoneLbl





    document.getElementById('studentFNameLbl').innerHTML =output.Fname ;
        document.getElementById('studentMNameLbl').innerHTML =output.Mname ;
        document.getElementById('studentLNameLbl').innerHTML =output.Lname ;
    document.getElementById('studentGenderLbl').innerHTML = studentGenderLbl;
    document.getElementById('studentBdyLbl').innerHTML = output.dob;
    document.getElementById('studentReligionLbl').innerHTML = output.religion;
    document.getElementById('studentEmailLbl').innerHTML = output.email;
    document.getElementById('studentAdtLbl').innerHTML = ;
    document.getElementById('studentMediumLbl').innerHTML = studentMed;
    document.getElementById('studentClassLbl').innerHTML = studentClassLbl;
    document.getElementById('studentSectionLbl').innerHTML = studentSectionLbl;
    document.getElementById('studentAddressLbl').innerHTML = studentAddressLbl;
    document.getElementById('studentPhoneLbl').innerHTML = studentPhoneLbl;
    document.getElementById('parentNameLbl').innerHTML = parentNameLbl;
    document.getElementById('parentOccupationLbl').innerHTML = parentOccupationLbl;
    document.getElementById('parentEmailLbl').innerHTML = parentEmailLbl;
    document.getElementById('parentPhoneLbl').innerHTML = parentPhoneLbl;


</script>
    <script>

        function getreports(){

        }
        var output;


        db.collection("terms").where("schoolid","==",school).where("grade","==",grade).where("class","==",cls).where("year","==",year).where("testno","==",term).where("studentreg","==",reg)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    output=doc.data();
    var studentAdmissionNoLbl
    var stuNameLbl
    var stuSchoolLbl
    var stuGradeLbl
    var stuClassLbl
    var studentTermTestNoLbl
    var studentYearLbl


    var studentSubject1Lbl
    var studentSubject2Lbl
    var studentSubject3Lbl
    var studentSubject4Lbl
    var studentSubject5Lbl
    var studentSubject6Lbl
    var studentSubject7Lbl
    var studentSubject8Lbl
    var studentSubject9Lbl
    var studentTotalMarksLbl
    var studentPositionLbl

    document.getElementById('studentAdmissionNoLbl').innerHTML=output.regno;
    document.getElementById('stuNameLbl').innerHTML=output.name;
    document.getElementById('stuSchoolLbl').innerHTML=output.school;
    document.getElementById('stuGradeLbl').innerHTML=output.grade;
    document.getElementById('stuClassLbl').innerHTML=output.class;
    document.getElementById('studentTermTestNoLbl').innerHTML=output.termno
    document.getElementById('studentYearLbl').innerHTML=output.year;

    document.getElementById('studentSubject1Lbl').innerHTML=output.sub1;
    document.getElementById('studentSubject2Lbl').innerHTML=output.sub2;
    document.getElementById('studentSubject3Lbl').innerHTML=output.sub3;
    document.getElementById('studentSubject4Lbl').innerHTML=output.sub4;
    document.getElementById('studentSubject5Lbl').innerHTML=output.sub5;
    document.getElementById('studentSubject6Lbl').innerHTML=output.sub6;
    document.getElementById('studentSubject7Lbl').innerHTML=output.sub7;
    document.getElementById('studentSubject8Lbl').innerHTML=output.sub8;
    document.getElementById('studentSubject9Lbl').innerHTML=output.sub9;
    document.getElementById('studentTotalMarksLbl').innerHTML=output.totalmarks;
    document.getElementById('studentPositionLbl').innerHTML=output.position;
                .catch(function(error) {
                        console.log("Error getting documents: ", error);
                    });

</script>
        <script>
            var  admissionNoLbl
            var studentsNameLbl
             var marksLbl

            document.getElementById('admissionNoLbl').innerHTML=admissionNoLbl;
            document.getElementById('studentsNameLbl').innerHTML=studentsNameLbl;
            document.getElementById('marksLbl').innerHTML=marksLbl;


        </script>
            <?php include_once('../teachercommon/footer.php'); ?>

