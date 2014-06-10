<?php

require_once CWA_DIR_CLASSES.'/dompdf/dompdf_config.inc.php';

abstract class dompdf_Model{
    
    protected $_dompdf;
    
    public function __construct(  ) {        
        
        $this->_dompdf = new DOMPDF();
    }
    
    public function __call($name, $arguments) 
    {
        try {            
            return call_user_func_array(array($this->_dompdf, $name), $arguments);         
        } catch (Exception $exc) {            
            echo $exc->getMessage();
        }
    }
    
}
