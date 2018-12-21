<head>
    <meta charset="UTF-8">
    <title>Student SingUp</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
	<body class="login-page">
    <div class="login-box">
        <div class="form-group">
            <div class="row">
            <div class="col-md-2"></div>
                

                <div id="studentDev" class="login-box-body">

                    <label class="col-md-5">
                        <input id="up_radio" type="radio" name="optionsRadios" value="student" checked="checked">
                        Student
                    </label>
                    <label class="radio inline">
                        <input id="ov_radio" type="radio" name="optionsRadios" value="teacher">  
                        Teacher
                    </label>


                    <div class="form-group has-feedback">
                        <input id="admissionNoTxt" type="text" class="form-control" placeholder="Admission No"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="studentNameTxt" type="text" class="form-control" placeholder="Student Name"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="studentParentNameTxt" type="text" class="form-control" placeholder="Registered Parent Name"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="studentEmailTxt" type="text" class="form-control" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-8">  
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button id="studentBtn" onclick="addstudent()"  class="btn btn-primary btn-block btn-flat">Sign Up</button>
                        </div><!-- /.col -->
                    </div>
                </div>

                <div id="teacherDev" class="login-box-body">
                    <label class="col-md-5">
                        <input id="up_radio" type="radio" name="optionsRadios" value="student" >
                        Student
                    </label>
                    <label class="radio inline">
                        <input id="ov_radio" type="radio" name="optionsRadios" value="teacher" checked="checked">  
                        Teacher
                    </label>

                    <div class="form-group has-feedback">
                        <input id="teacherRegistrationNoTxt" type="text" class="form-control" placeholder="Registration No"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="teacherNameTxt" type="text" class="form-control" placeholder="Name"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="teacherNicTxt" type="text" class="form-control" placeholder="NIC"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="teacherEmailTxt" type="text" class="form-control" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-8">  
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button id="teacherBtn" onclick="addteacher()"  class="btn btn-primary btn-block btn-flat">Sign Up</button>
                        </div><!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
		
	<script>
	$('input[name="optionsRadios"]').on('change', function(){
    if ($(this).val()=='student') {
         
        
        document.getElementById("studentDev").style.display = 'block';
        document.getElementById("teacherDev").style.display = 'none';

    } else  {
       
        // $("#cont").text("show Overwritten");
        document.getElementById("studentDev").style.display = 'none';
        document.getElementById("teacherDev").style.display = 'block';
    }
});
</script>

</body>
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<script>
    var stdAdNo = document.getElementById("admissionNoTxt").value;
    var stdName = document.getElementById("studentNameTxt").value;
    var stdParName = document.querySelector("studentParentNameTxt").value;
    var stdEmail = document.getElementById("studentEmailTxt").value;

    var tchrRegNo = document.getElementById("teacherRegistrationNoTxt").value;
    var tchrName = document.getElementById("teacherNameTxt").value;
    var tchrNIC = document.getElementById("teacherNicTxt").value;
    var tchrEmail = document.getElementById("teacherEmailTxt").value;


</script>
