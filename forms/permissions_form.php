
<form class="form">
    
    <style>
        .switch-field {
	display: flex;
	margin-bottom: 36px;
	overflow: hidden;
}

.switch-field input {
	position: absolute !important;
	clip: rect(0, 0, 0, 0);
	height: 1px;
	width: 1px;
	border: 0;
	overflow: hidden;
}

.switch-field label {
	background-color: #e4e4e4;
	color: rgba(0, 0, 0, 0.6);
	font-size: 14px;
	line-height: 1;
	text-align: center;
	padding: 8px 16px;
	margin-right: -1px;
	border: 1px solid rgba(0, 0, 0, 0.2);
	box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
	transition: all 0.1s ease-in-out;
}

.switch-field label:hover {
	cursor: pointer;
}

.switch-field input:checked + label {
    /* background-color: #f0ad4e; */
	background-color: #a5dc86;
	box-shadow: none;
}

.switch-field label:first-of-type {
	border-radius: 4px 0 0 4px;
}

.switch-field label:last-of-type {
	border-radius: 0 4px 4px 0;
}
h2 {
	font-size: 18px;
	margin-bottom: 8px;
}
        </style>
    
    <div class="form-group">
        <label> Module Name </label>
        
           <?php 
           {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "corephpadmin";
            $conn = new mysqli($servername, $username, $password,$database );
            $sql= "SELECT name FROM modules";
            $opt_arr = $conn->query($sql);
            $moduleNames = array();
            while ($row = $opt_arr->fetch_assoc()) {
                $moduleNames[] = $row['name'];
            }

            
           }?>
            <select name="modules_name" class="form-control selectpicker" required>
                <option value=" " >Please select Module Name</option>
                <?php
                
                foreach ($moduleNames as $opt) {
                    if ($edit && $opt == $permissions['modules_name']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div>  
    <div class="form-group">
        <label>User </label>

          <?php 
            if ($_SESSION['admin_type'] == 'admin'){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "corephpadmin";
            
             $conn = new mysqli($servername, $username, $password, $database );
             $sql = 'SELECT * FROM  admin_accounts WHERE user_name !="superadmin"';
             $opt_arr = $conn->query($sql);
            $moduleNames = array();
            while ($row = $opt_arr->fetch_assoc()) {
              
                $moduleNames[] = $row['user_name'];
            }
            

            } ?>
            <select name="user" class="form-control selectpicker" required>
                <option value=" " ></option>
                <?php
                foreach ($moduleNames as $opt) {
                    if ($edit && $opt == $permissions['user']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div>  
    
    
    
    <!-- Button -->
    <br> <label> Add Module </label>
    <div class="switch-field">
		<input type="radio" id="add_module" name="add_module" value="yes" <?php echo ($edit && $permissions['add_module'] =='yes')? "checked": "" ; ?> />
		<label for="add_module">Yes</label>
		<input type="radio" id="add_module1" name="add_module" value="no" <?php echo ($edit && $permissions['add_module'] =='no')? "checked": "" ; ?> />
		<label for="add_module1">No</label>
	</div>

    <label> View Module </label>
    <div class="switch-field">
		<input type="radio" id="view_module" name="view_module" value="yes" <?php echo ($edit && $permissions['view_module'] =='yes')? "checked": "" ; ?>/>
		<label for="view_module">Yes</label>
		<input type="radio" id="view_module1" name="view_module" value="no" <?php echo ($edit && $permissions['view_module'] =='no')? "checked": "" ; ?>/>
		<label for="view_module1">No</label>
	</div>

    <label> Delete Module </label>
    <div class="switch-field">
		<input type="radio" id="delete_module" name="delete_module" value="yes" <?php echo ($edit && $permissions['delete_module'] =='yes')? "checked": "" ; ?>/>
		<label for="delete_module">Yes</label>
		<input type="radio" id="delete_module1" name="delete_module" value="no" <?php echo ($edit && $permissions['delete_module'] =='no')? "checked": "" ; ?>/>
		<label for="delete_module1">No</label>
	</div>
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
    
</form>