<?php

class Test_Paymentmodule_Block_Form_Test extends Mage_Payment_Block_Form
{
	 protected $_instructions;
	 
	 
  protected function _construct()
  {
    parent::_construct();
    
    $this->setTemplate('test/form/test.phtml');
  }
  
   public function getInstructions()
    {
        if (is_null($this->_instructions)) {
            $this->_instructions = $this->getMethod()->getInstructions();
        }
        return $this->_instructions;
    }

}
