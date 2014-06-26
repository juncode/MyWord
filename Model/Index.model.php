<?php
defined( 'MyEngine' ) or exit( 'Error: Access Denied!' );

class IndexModel extends ModelMySQL {

    public function __construct() {
        $this->SetTable( 'web', 'id' ); 
        
    }
    
    public function GetName() {
        
        return $this->fetchAll();
    }

}