<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<head></head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<section class="content-wrapper">
    <section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">School Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label  >Admin Name:</label>
                            <input type="input" class="form-control" id="adminNameTxt" placeholder="Enter Admin Name">
                        </div>
                        <div class="form-group">
                            <label  >Designation :</label>
                            <input type="input" class="form-control" id="adminDesignationTxt" placeholder="Enter Admin Designation">
                        </div>
                        <div class="form-group">
                            <label  >Email:</label>
                            <input type="email" class="form-control" id="adminEmailTxt" placeholder="Enter Admin Email">
                        </div>
                        <div class="form-group">
                            <label  >Password :</label>
                            <input type="password" class="form-control" id="adminPasswordTxt" placeholder="Enter Password">
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        
                    </div><!-- /.box-body -->

                    <div class="box-footer">

                    </div>
                </form>
            </div><!-- /.box -->
        </div>


    </div>
    <div>
    </div>
    </section>
</section>


<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/student.js"></script>
<script>
    var adminNameTxt = document.getElementById("adminNameTxt").value;
    var adminDesignationTxt = document.getElementById("adminDesignationTxt").value;
    var adminEmailTxt = document.getElementById("adminEmailTxt").value;
    var adminPasswordTxt = document.getElementById("adminPasswordTxt").value;
    

</script>

<?php include_once('../admincommon/footer.php'); ?>