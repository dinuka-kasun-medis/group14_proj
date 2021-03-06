<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

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
</head>


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
                                                    <select id ="termTxt" class="form-control">
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
                                                        <!-- <option value="sinhala">All</option>
                                                        <option value="english">A</option>
                                                        <option value="tamil">B</option>
                                                        <option value="english">C</option>
                                                        <option value="tamil">D</option>
                                                        <option value="english">E</option>
                                                        <option value="tamil">F</option>
                                                        <option value="english">G</option>
                                                        <option value="tamil">H</option> -->
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
        var term = document.getElementById("termTxt").value;
        var grade =document.getElementById("gradeTxt").value;
        var class1 = document.getElementById("classTxt").value;
        var date = document.getElementById('examDateTxt').value;
        var subject = document.getElementById("subjectTxt").value;
        var examId = term+date+subject;
        var exam=[examId,class1,date,grade,subject,term];
        addexam(exam);

    }
</script>

<script>
    // getschool("abc");
    setTimeout(p ,1500);
    function p(){
        var grade=document.getElementById("gradeTxt").value;
        var school="abc";//document.getElementById("schoolid").value;
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
                            var sel = document.getElementById("classTxt");
                            var opt = document.createElement("option");
                            opt.value = cls;
                            opt.text = cls;
                            sel.add(opt);
                                
                        })
                        console.log(doc.id, " => ", classes);
                        if((grade=='Grade 6') || (grade==12) ||(grade==11) || (grade==13)){
                            document.getElementById("subjectTxt").style.display = 'block';
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
                            document.getElementById("subjectTxt").style.display = 'none';
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

<?php include_once('../teachercommon/footer.php'); ?>


