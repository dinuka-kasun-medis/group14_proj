<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>
<html>
<head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/reports.js"></script>
<script src="../../../firebase models/admin.js"></script>

</head>
 

    <section class="content-wrapper">

    <section class="content-header">

        <div class="row">

            <div class="col-md-6">
            <!-- general form elements -->
                <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title">Create Report</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                    <form role="form" action="createreports.php" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label  >Registration Number:</label>
                            <input type="text" class="form-control" id="studentRegNo" placeholder="Enter Admission Number">
                        </div>



                        <div class="form-group">
                            <label  >Name:</label>
                            <input type="text" class="form-control" id="studentLNameTxt" placeholder="Enter  Name">

                        </div>
                        <div class="form-group">
                            <label  >School:</label>
                            <input type="text" class="form-control" id="stuSchool"  >

                        </div>
                    <div class="form-group">
                        <div class="col-md-6">
                                <label  >Select Grade:</label>
                                <select class="form-control" id="stuGrade">
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
                    <div class="form-group">
                        <div class="col-md-6">

                                <label  >Select Class:</label>
                                <select class="form-control" id="stuClass">
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

                    <div class="form-group">

                        <div class="col-md-6">

                                <label  >Select Year:</label>
                                <select class="form-control" id="stuYear">
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
                    <div class="form-group">
                        <div class="col-md-6">

                                <label  >Term Test No:</label>
                                <select class="form-control" id="stuTestNo">

                                      <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>


                                </select>
                        </div>


                </div>

                        <div class="box-body">
                        <div class="form-group">
                            <label  >Subject1:</label>
                            <input type="text" class="form-control" id="studentSubject1Txt" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label  >Subject2:</label>
                            <input type="text" class="form-control" id="studentSubject2Txt" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label  >Subject3:</label>
                            <input type="text" class="form-control" id="studentSubject3Txt" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label  >Subject4:</label>
                            <input type="text" class="form-control" id="studentSubject4Txt" placeholder="Enter Marks">
                            </div>
                        <div class="form-group">
                            <label  >Subject5:</label>
                            <input type="text" class="form-control" id="studentSubject5Txt" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label  >Subject6:</label>
                            <input type="text" class="form-control" id="studentSubject6Txt" placeholder="Enter Marks">
                        </div>

                        <div class="form-group">
                            <label  >Subject7:</label>
                            <input type="text" class="form-control" id="studentSubject7Txt" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label  >Subject8:</label>
                            <input type="text" class="form-control" id="studentSubject8Txt" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label  >Subject9:</label>
                            <input type="text" class="form-control" id="studentSubject9Txt" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label >Total Marks:</label>
                            <input type="text" class="form-control" id="studentTotalTxt" placeholder="Enter Position">
                        </div>

                        <div class="form-group">
                            <label >Position:</label>
                            <input type="text" class="form-control" id="studentPositionTxt" placeholder="Enter Position">
                        </div>


                            <div class="box-footer">
                                <button type="button" class="btn btn-primary" onclick="datasubmissionrepo()" >submit</button>
                            </div>

                        </form>
                </div>
                </div>
            </div><!-- /.box -->

        </div>

        </div>

    </section>
    </section>

    <script>
        getschool("stuSchool");

        function datasubmissionrepo() {

            var stdRegNo = document.getElementById("studentRegNo").value;
            var stdName = document.getElementById("studentLNameTxt").value;
            var stdSchool = document.getElementById("stuSchool").value;
            var stdGrade = document.getElementById("stuGrade").value;
            var stdClass = document.getElementById("stuClass").value;
            var stdYear = document.getElementById("stuYear").value;
            var stdTestNo = document.getElementById("stuTestNo").value;
            var stdSub1 = document.getElementById("studentSubject1Txt").value;
            var stdSub2 = document.getElementById("studentSubject2Txt").value;
            var stdSub3 = document.getElementById("studentSubject3Txt").value;
            var stdSub4 = document.getElementById("studentSubject4Txt").value;
            var stdSub5 = document.getElementById("studentSubject5Txt").value;
            var stdSub6 = document.getElementById("studentSubject6Txt").value;
            var stdSub7 = document.getElementById("studentSubject7Txt").value;
            var stdSub8 = document.getElementById("studentSubject8Txt").value;
            var stdSub9 = document.getElementById("studentSubject9Txt").value;
            var stdTotal = document.getElementById("studentTotalTxt").value;
            var stdPosition = document.getElementById("studentPositionTxt").value;
                    
            var report = [stdRegNo, stdName, stdSchool,stdGrade,stdClass,stdYear, stdTestNo, stdSub1, stdSub2, stdSub3, stdSub4, stdSub5, stdSub6, stdSub7, stdSub8, stdSub9, stdTotal, stdPosition];
            addreport(student);
        }
    </script>

<!--        parent details-->


<body class="skin-blue">
<div class="wrapper">
    <section class="content-wrapper">
        <section class="content-header">
            <!--                Exam results-->

            <div class="box box-primary">
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
                                        <div  class="form-group">
                                            <label  >Exam Term:</label>
                                            <select id ="examYearTxt" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <div  class="form-group">
                                            <label  >Exam Grade:</label>
                                            <select id="gradeTxt" class="form-control">
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
                                        <div class="form-group">
                                            <label  >Exam Class:</label>
                                            <select id="classTxt" class="form-control">
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
                                    <input type="hidden" id="schoolid" value="abc">
                                    <div >




                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <div id="studentMediumTxt" class="form-group">
                                            <label class="text-muted">Exam ID</label>
                                            <div class="input-group">
                                                <input id="examIdTxt" style ="width:300px" id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Admission No"/>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <div id="studentMediumTxt" class="form-group">
                                            <label class="text-muted">Exam Date</label>
                                            <div class="input-group">
                                                <input id = "examDateTxt" style ="width:300px" type="date" class="form-control pull-right" />

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <div  class="form-group">
                                            <label >Subject:</label>
                                            <select id="subjectTxt" class="form-control">
                                                <option value="sinhala">Sinhala</option>
                                                <option value="english">English</option>
                                                <option value="tamil">Math</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <div id="studentMediumTxt" class="form-group">
                                            <button style="width:150px" onclick="add1()" type="button" class="btn btn-primary">Load Student List</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <h4 class="box-title">Student Details</h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <th>Admission No</th>
                                            <th>Student Name</th>
                                            <th>Result</th>
                                        </tr>
                                        <tr id = "datarow">
                                            <td id = "admissionNoLbl">
                                                1600254
                                            </td>
                                            <td id = "nameLbl">
                                                -
                                            </td>
                                            <td id = "resultLbl">
                                                <input style ="width:500px" id="result" type="text" name="q" class="form-control" placeholder="Result"/>
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


        </section>
    </section>
</div>
</body>

<script>
    // getschool("stuschool");
    function add1(){
        // var school = document.getElementById("schoolid").value;
        var year = document.getElementById("examYearTxt").value;
        var grade =document.getElementById("gradeTxt").value;
        var class1 = document.getElementById("classTxt").value;
        var date = document.getElementById('examDateTxt').value;
        var subject = document.getElementById("subjectTxt").value;
        var examId = year+subject;
        var exam=[examId,class1,date,grade,subject,year];
        addexam(exam);

    }
</script>
<script>
    
    //getreports(studentRegNo,stuClass,stuGrade,stuYear,stuTestNo);
    function datasubmission() {
        var stdRegNo = document.getElementById("studentRegNo").value;
        var stdName = document.getElementById("studentLNameTxt").value;
        var stdSchool = document.getElementById("stuSchool").value;
        var stdClass = document.getElementById("stuClass").value;
        var stdGrade = document.getElementById("stuGrade").value;
        var stdYear = document.getElementById("stuYear").value;
        var stdTestNo = document.getElementById("stuTestNo").value;
        var stdSub1 = document.getElementById("studentSubject1Txt").value;
        var stdSub2 = document.getElementById("studentSubject2Txt").value;
        var stdSub3 = document.getElementById("studentSubject3Txt").value;
        var stdSub4 = document.getElementById("studentSubject4Txt").value;
        var stdSub5 = document.getElementById("studentSubject5Txt").value;
        var stdSub6 = document.getElementById("studentSubject6Txt").value;
        var stdSub7 = document.getElementById("studentSubject7Txt").value;
        var stdSub8 = document.getElementById("studentSubject8Txt").value;
        var stdSub9 = document.getElementById("studentSubject9Txt").value;
        var stdTotal = document.getElementById("studentTotalTxt").value;
        var stdPosition = document.getElementById("studentPositionTxt").value;

        var student = [stdRegNo, stdName, stdSchool, stdClass, stdGrade, stdTestNo, stdAdNo, stdYear, stdSub1, stdSub2, stdSub3, stdSub4, stdSub5, stdSub6, stdSub7, stdSub8, stdSub9, stdTotal, stdPosition];
        addreport(student);
    }


</script>





<?php include_once('../teachercommon/footer.php'); ?>