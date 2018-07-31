<?php

class Test_Paymentmodule_Model_Test extends Mage_Payment_Model_Method_Abstract {
	
  protected $_code  = 'test';
  
  protected $_formBlockType = 'test_paymentmodule/form_test';
  
  protected $_infoBlockType = 'test_paymentmodule/info_test';
  
  public function isAvailable($quote = null)
    {
		
		return true;
	}
	
	public function getInstructions()
    {	
        return trim($this->getConfigData('instructions'));
       
    }
 
}

