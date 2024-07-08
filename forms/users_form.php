

    <!-- Form Name -->

    <link  rel="stylesheet" href="assets/css/bootstrap.min.css"/>

<!-- MetisMenu CSS -->
<link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/sb-admin-2.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<script src="assets/js/jquery.min.js" type="text/javascript"></script>
 
    <!-- Text input-->
    <div class="form-group">
        <label for="company_name"> Company Name </label>
          <input type="text" name="company_name" value="" placeholder="Company Name" class="form-control" required="required" id = "company_name" >
    </div> </br>

    <div class="form-group">
        <label for="company_logo"> Company Logo </label>
          <input type="file" name="company_logo" value="" placeholder="Comapny Logo" class="form-control" required="required" id = "company_logo" >
    </div>  </br>

    <div class="form-group">
        <label for="company_address"> Company Address </label>
          <input type="text" name="company_address" value="" placeholder="Company Address" class="form-control" required="required" id = "company_address" >
    </div>  </br>

    <div class="form-group">
        <label for="gst_number"> GST Number </label>
          <input type="text" name="gst_number" value="" placeholder=" GST Number" class="form-control" required="required" id = "gst_number" >
    </div>  </br>


    <div class="form-group">
        <label for="email"> Email </label>
            <input  type="email" name="email" value="" placeholder="E-Mail Address" class="form-control" id="email">
    </div> </br>

    <div class="form-group">
        <label for="phone_number"> Phone Number </label>
            <input name="phone_number" value="" placeholder="987654321" class="form-control"  type="text" id="phone_number">
    </div>  </br>

    <div class="form-group">
        <label for="phone_number1"> Mobile Number </label>
            <input name="phone_number1" value="" placeholder="987654321" class="form-control"  type="text" id="phone_number1">
    </div> </br>

    <div class="form-group">
        <label for="user_id"> User </label>
        <input type="text" id="user_id" name="user_id" class="form-control" value="<?php echo $_SESSION['who_is_login']; ?>" readonly>
    </div>  </br>

    <div class="form-group" contentEditable="true">
        <label for="password"> Password </label>
        <input type="password"  value=""  class="form-control" id="password" name="password">

    </div> </br>
    
    <div class="form-group text-center">
        <label></label>
        <button type="submit" name="submit" class="btn btn-warning" > Save <span class="glyphicon glyphicon-send"></span></button>
    </div>   