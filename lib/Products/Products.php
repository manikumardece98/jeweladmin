<?php
class Products
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'products_name' => 'Products_name',
            'products_image' => 'Product_image',
            'products_price' => 'Product_price',
            'daily_earnings' => 'Daily_earnings',
            'daily_cycle' => 'Daily_cycle',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
          
        ];

        return $ordering;
    }
}
?>
