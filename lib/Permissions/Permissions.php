<?php
class Permissions
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
            'modules_name' => 'Modules_name',
            'user' => 'User',
            'add_module' => 'Add_module',
            'view_module' => 'View_module',
            'delete_module' => 'Delete_module',
            
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
          
        ];

        return $ordering;
    }
}
?>
