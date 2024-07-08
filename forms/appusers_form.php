<fieldset>
    <div class="form-group">
        <label for="users_name"> User Name</label>
          <input type="text" name="users_name" value="<?php echo htmlspecialchars($edit ? $appusers['users_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" User Name" class="form-control" required="required" id = "users_name" >
    </div> 
    <div class="form-group">
        <label for="users_phone"> User Phone</label>
          <input type="text" name="users_phone" value="<?php echo htmlspecialchars($edit ? $appusers['users_phone'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Users Phone" class="form-control" required="required" id = "users_phone" >
    </div>
    
    <div class="form-group">
        <label for="password"> Password</label>
          <input type="text" name="password" value="<?php echo htmlspecialchars($edit ? $appusers['password'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Password" class="form-control" required="required" id = "password" >
    </div>
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
    
</fieldset>