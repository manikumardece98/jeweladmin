<fieldset>
    <div class="form-group">
        <label for="users_name"> User</label>
          <input type="text" name="user" value="<?php echo htmlspecialchars($edit ? $transactions['user'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" User Name" class="form-control" required="required" id = "user" >
    </div> 
    <div class="form-group">
        <label for="saved_by"> User Phone</label>
          <input type="text" name="saved_by" value="<?php echo $_SESSION['who_is_login'] ; ?>" placeholder=" saved by" class="form-control" required="required" id = "saved_by" >
    </div>
    
    <div class="form-group">
        <label for="transaction_date"> Transaction Date</label>
          <input type="text" name="transaction_date" value="<?php echo htmlspecialchars($edit ? $transactions['transaction_date'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Transaction Date" class="form-control" required="required" id = "transaction_date" >
    </div>
    <div class="form-group">
        <label for="transaction_amount"> Transaction Amount</label>
          <input type="text" name="transaction_amount" value="<?php echo htmlspecialchars($edit ? $transactions['transaction_amount'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Transaction Amount" class="form-control" required="required" id = "transaction_amount" >
    </div> 
    <div class="form-group">
        <label for="saved_by">Service</label>
          <input type="text" name="service" value="<?php echo htmlspecialchars($edit ? $transactions['service'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" saved by" class="form-control" required="required" id = "saved_by" >
    </div>
    
    <div class="form-group">
        <label for="status">Status</label>
          <input type="text" name="status" value="<?php echo htmlspecialchars($edit ? $transactions['status'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Status" class="form-control" required="required" id = "status" >
    </div>
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
    
</fieldset>