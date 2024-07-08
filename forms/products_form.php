<fieldset>
    <!-- Form Name -->
    
    <!-- Text input-->
    <div class="form-group">
        <label for="products_name"> Product Name </label>
          <input type="text" name="products_name" value="<?php echo htmlspecialchars($edit ? $products['products_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Product Name" class="form-control" required="required" id = "products_name" >
    </div> 

    <div class="form-group">
        <label for="products_image"> Product image to upload:</label>
          <input type="file" name="products_image" value="<?php echo htmlspecialchars($edit ? $products['products_image'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Product Image" class="form-control" required="required" id = "products_image" >
    </div> 
    <div class="form-group">
        <label for="products_price"> Product Price</label>
          <input type="text" name="products_price" value="<?php echo htmlspecialchars($edit ? $products['products_price'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Product Price" class="form-control" required="required" id = "products_price" >
    </div> 
    <div class="form-group">
        <label for="daily_earnings"> Daily Earnings</label>
          <input type="text" name="daily_earnings" value="<?php echo htmlspecialchars($edit ? $products['daily_earnings'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Daily Earnings" class="form-control" required="required" id = "daily_earnings" >
    </div>
    
    <div class="form-group">
        <label for="daily_cycle"> Daily Cycle</label>
          <input type="text" name="daily_cycle" value="<?php echo htmlspecialchars($edit ? $products['daily_cycle'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Daily Cycle" class="form-control" required="required" id = "daily_cycle" >
    </div>
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
    
</fieldset>