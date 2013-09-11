<?php

class Mext_Customcheckout_Block_Adminhtml_Customcheckout_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('customcheckout_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('customcheckout')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('customcheckout')->__('Item Information'),
          'title'     => Mage::helper('customcheckout')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('customcheckout/adminhtml_customcheckout_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}