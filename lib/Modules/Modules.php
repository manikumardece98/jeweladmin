<?php
class Modules
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
            'name' => ' Name',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
          
        ];

        return $ordering;
    }
}
?>
