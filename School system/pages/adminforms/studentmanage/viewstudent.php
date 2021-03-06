<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<head>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
    <script src="../../../firebase models/db.js"></script>
    <script src="../../../firebase models/student.js"></script>
    <script src="../../../firebase models/admin.js"></script>
    <script src="../../../firebase models/exam.js"></script>
    <script src="../../../firebase models/login.js"></script>
    <script src="../../../firebase models/fileupload.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script >getschool("school")</script>

</head>

<body>
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-6">
            
                

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Student Details</h3>
                    </div><!-- /.box-header -->
                    <br>
                    
                    

                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <!--Lable field-->

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <div  class="form-group">
                                        <div class="input-group">
                                            <input id="idSearchTxt" type="text" name="q" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">   
                                                <button onclick="searchStudent()" type="button" name="search" class="btn btn-flat"><!---class="btn btn-flat"-->
                                                <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>                
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div >
                                                    <img id ="profilepic" style="width:100px; height:128px;" src="../../../dist/img/user_100x128.png" alt="User Image">
                                                </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-muted"  >First Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Middle Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Last Name:</label>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="text-muted"  >Name Initials:</label>
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <label class="text-muted"  >Gender:</label>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="text-muted"  >Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Religion:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="text-muted"  >Admission Date:</label>
                                            </div> -->
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
                                        <label id="studentfNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentmNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentlNameLbl">-</label>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label id="studentiNameLbl">-</label>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <label id="studentGenderLbl">-</label>
                                    </div> -->
                                    <div class="form-group">
                                        <label id="studentBdyLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentReligionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentEmailLbl">-</label>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label id="studentAdtLbl">-</label>
                                    </div> -->
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
                                    <div class="form-group">
                                        <div> 
                                            
                                        </div>
                                        <a href="../studentmanage/editstudent.php" class="btn btn-sm btn-default btn-flat pull-right">Edit details</a>
                                    </div><!-- /.box-footer -->
                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->



                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Certificates</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Reason</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td id="certiTitle">-</td>
                                    <td ><img id ="certiLink" style="width:50px; height:50px;" src="../../../dist/img/user_100x128.png" alt="certificate"></td>
                                    <td id="certiReason">-</td>
                                </tr>
                                
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <!-- <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Exams</a> -->
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
                

                </div>

                <div class="col-md-6 ">
                    <div>
                        <div class="box box-primary">
                            <div class="box-header  with-border">
                                <h3 class="box-title">Guardian's Details</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="box-body">
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-muted"  >Parent:</label>
                                            </div>
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
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label  id="parentTypeLbl">-</label>
                                                </div>
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

                    <div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Progress of AVG mark</h3>
                            </div>
                            <div class="box-body chart-responsive">
                            <canvas id="myChart" width="400" height="400"></canvas>
                            </div>
                        <!-- /.box -->
                        </div>
                    </div>

                    <input id="school" class="hidden"/>
                </div>
        </section>
</section>


</body>


<!-- <script>


    var studentfNameLbl
    var studentmNameLbl
    var studentlNameLbl
    var studentiNameLbl
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

    document.getElementById('studentfNameLbl').innerHTML = studentfNameLbl;
    document.getElementById('studentmNameLbl').innerHTML = studentmNameLbl;
    document.getElementById('studentlNameLbl').innerHTML = studentlNameLbl;
    document.getElementById('studentiNameLbl').innerHTML = studentiNameLbl;
    document.getElementById('studentGenderLbl').innerHTML = studentGenderLbl;
    document.getElementById('studentBdyLbl').innerHTML = studentBdyLbl;
    document.getElementById('studentReligionLbl').innerHTML = studentReligionLbl;
    document.getElementById('studentEmailLbl').innerHTML = studentEmailLbl;
    document.getElementById('studentAdtLbl').innerHTML = studentAdtLbl;
    document.getElementById('studentMediumLbl').innerHTML = studentMediumLbl;
    document.getElementById('studentClassLbl').innerHTML = studentClassLbl;
    document.getElementById('studentSectionLbl').innerHTML = studentSectionLbl;
    document.getElementById('studentAddressLbl').innerHTML = studentAddressLbl;
    document.getElementById('studentPhoneLbl').innerHTML = studentPhoneLbl;
    document.getElementById('parentNameLbl').innerHTML = parentNameLbl;
    document.getElementById('parentOccupationLbl').innerHTML = parentOccupationLbl;
    document.getElementById('parentEmailLbl').innerHTML = parentEmailLbl;
    document.getElementById('parentPhoneLbl').innerHTML = parentPhoneLbl;
    
</script> -->

<?php include_once('../admincommon/footer.php'); ?>

<script>
    
    function searchStudent(){
        var reg = document.getElementById("idSearchTxt").value;
        var school =document.getElementById("school").value;//"abc";
        getstudentsfromreg(reg);
        function getstudentsfromreg(reg){
            var output;
            db.collection("students").where("school","==",school).where("regno","==",reg)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    output=doc.data();
                    document.getElementById('studentfNameLbl').innerHTML = output.Fname;
                    document.getElementById('studentmNameLbl').innerHTML = output.Mname;
                    document.getElementById('studentlNameLbl').innerHTML = output.Lname;
                    document.getElementById('profilepic').src = output.profileimg;
                   // document.getElementById('studentiNameLbl').innerHTML = output.Iname;
                    //document.getElementById('studentGenderLbl').innerHTML = output.gender;
                    document.getElementById('studentBdyLbl').innerHTML = output.dob;
                    document.getElementById('studentReligionLbl').innerHTML = output.religion;
                    document.getElementById('studentEmailLbl').innerHTML = output.email;
                    //document.getElementById('studentAdtLbl').innerHTML = output.fname;
                    document.getElementById('studentMediumLbl').innerHTML = output.medium;
                    document.getElementById('studentClassLbl').innerHTML = output.class;
                    document.getElementById('studentSectionLbl').innerHTML = output.grade;
                    document.getElementById('studentAddressLbl').innerHTML = output.address;
                    document.getElementById('studentPhoneLbl').innerHTML = output.contact;
                    document.getElementById('parentTypeLbl').innerHTML = output.parent.parent;
                    document.getElementById('parentNameLbl').innerHTML = output.parent.name;
                    document.getElementById('parentOccupationLbl').innerHTML = output.parent.occupation;
                    document.getElementById('parentEmailLbl').innerHTML = output.parent.email;
                    document.getElementById('parentPhoneLbl').innerHTML = output.parent.Econtact;



                    
                    document.getElementById('certiTitle').innerHTML = "Prize";//output.parent.Econtact;
                    document.getElementById('certiLink').src = "https://firebasestorage.googleapis.com/v0/b/group-project-14.appspot.com/o/certificates%2F1_3dBhLw8lz0zzI93_CYbU0Q.jpeg?alt=media&token=bcfaaddb-9a6f-449b-a487-09f3ef2b2abb";//output.parent.Econtact;
                    document.getElementById('certiReason').innerHTML = "prize for english";//output.parent.Econtact;

                //console.log(doc.id, " => ", doc.data());
                });
            })
            .catch(function(error) {
                console.log("Error getting documents: ", error);
            });
        }
        getreports("11","6","sinhala","11","1");
    }
</script>

<script>
    function createGraph(dataset){
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["2014", "2015", "2016", "2017", "2018", "2019"],
                datasets: [{
                    label: '# marks for year',
                    //data: [65.56, 19.25, 37.25, 54.20, 62.56, 73.56],
                    data:dataset,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    }
</script>

<script>
    var School ="abc";
    // getreports("11","6","sinhala","11","1");
    function getreports(Regno,Class,Grade,Year,Term) {
        var output = {};
        db.collection("reports").where("school", "==",School ).where("regno", "==", Regno).where("class", "==", Class).where("grade", "==", Grade).where("year", "==", Year).where("termno", "==", Term)
            .get()
            .then(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    output = doc.data();
                    var dataset = [output.sub1,output.sub2,output.sub3,
                                    output.sub4,output.sub5,output.sub6,
                                    output.sub7,output.sub8,output.sub9];
                    createGraph(dataset);

                    //console.log(doc.id, " => ", doc.data());

                });
            })
            .catch(function (error) {
                console.log("Error getting documents: ", error);
            });
        return output;

    }
</script>