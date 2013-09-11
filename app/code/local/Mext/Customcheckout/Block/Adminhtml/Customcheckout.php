<?php
class Mext_Customcheckout_Block_Adminhtml_Customcheckout extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_customcheckout';
    $this->_blockGroup = 'customcheckout';
    $this->_headerText = Mage::helper('customcheckout')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('customcheckout')->__('Add Item');
    parent::__construct();
  }
}