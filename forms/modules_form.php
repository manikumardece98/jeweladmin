<fieldset>
    <!-- Form Name -->
  
    <!-- Text input-->
    <div class="form-group">
        <label for="name"> Name *</label>
          <input type="text" name="name" value="<?php echo htmlspecialchars($edit ? $modules['name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Name" class="form-control" required="required" id = "name" >
    </div> 
    
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
    
</fieldset>