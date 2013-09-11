<?php
class W3int_CashbackCore_Block_CashbackCore extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getCashbackCore()     
     { 
        if (!$this->hasData('cashbackcore')) {
            $this->setData('cashbackcore', Mage::registry('cashbackcore'));
        }
        return $this->getData('cashbackcore');
        
    }
}