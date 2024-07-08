<?php
class Appusers
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
            'users_name' => 'Users_name',
            'users_phone' => 'Users_phone',
            'password' => 'Password',
            
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
          
        ];

        return $ordering;
    }
}
?>
