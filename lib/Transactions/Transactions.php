<?php
class Transactions
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
            'user' => 'User',
            'saved_by' => 'Saved By',
            'transaction_date' => 'Transaction Date',
            'transaction_amount' => 'Transaction Amount',
            'service' => 'Service',
            'status' => 'Status',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
          
        ];

        return $ordering;
    }
}
?>
