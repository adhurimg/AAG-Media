<?php
include('header.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
    $ret_val = $obj->createUser();
    if($ret_val==1){
        echo '<script type="text/javascript">';
        echo 'alert("Thank you for booking appointment, it is under review! In the meantime please go back to our main page by clicking Home at the top");';
        echo '</script>';
    }
}
?>
    <div class="container-fluid bg-3 text-center">
        <h3>Appointment System for AAG Media</h3>
        <br>

        <div class="panel panel-primary">
            <div class="panel-heading">Book an appointment!</div>
            <form class="form-horizontal" method="post">
                <div class="panel-body">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Name:<span style='color:red'>*</span></label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Email:<span style='color:red'>*</span></label>
                        <div class="col-sm-5">
                            <input class="form-control" type="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Mobile Number:<span style='color:red'>*</span></label>
                        <div class="col-sm-5">
                            <input class="form-control" type="number" name="mobileno" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Service:<span style='color:red'>*</span></label>
                        <div class="col-sm-5">
                            <textarea rows="5" cols="5" class="form-control" name="service" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">  </label>
                        <div class="col-sm-5">
                            <input type="submit" class="btn btn-primary" name="submit"  value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include('footer.php');?>