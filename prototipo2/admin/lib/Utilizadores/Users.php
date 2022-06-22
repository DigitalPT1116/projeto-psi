<?php
class utilizadores
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
            'username' => 'Username',
            'fullname' => 'Nome Completo',
            'dateofbirth' => 'Data de Nascimento',
            'email' => 'Email',
            'password' => 'Password',
            'cargo' => 'Cargo',
            'fk_playlist' => 'Playlists',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
        ];

        return $ordering;
    }
}
?>
