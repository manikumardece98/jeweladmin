<?php
class Careers
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns' names to order tables' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'f_name' => 'First Name',
            'l_name' => 'Last Name',
            'gender' => 'Gender',
            'phone' => 'Phone',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
        ];

        return $ordering;
    }
}

?>
