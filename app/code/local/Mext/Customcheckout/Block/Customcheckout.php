<?php
class Mext_Customcheckout_Block_Customcheckout extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getCustomcheckout()     
     { 
        if (!$this->hasData('customcheckout')) {
            $this->setData('customcheckout', Mage::registry('customcheckout'));
        }
        return $this->getData('customcheckout');
        
    }
}