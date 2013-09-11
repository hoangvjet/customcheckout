<?php

class Mext_Customcheckout_Block_Adminhtml_Customcheckout_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('customcheckout_form', array('legend'=>Mage::helper('customcheckout')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('customcheckout')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('customcheckout')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('customcheckout')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('customcheckout')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('customcheckout')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('customcheckout')->__('Content'),
          'title'     => Mage::helper('customcheckout')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getCustomcheckoutData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getCustomcheckoutData());
          Mage::getSingleton('adminhtml/session')->setCustomcheckoutData(null);
      } elseif ( Mage::registry('customcheckout_data') ) {
          $form->setValues(Mage::registry('customcheckout_data')->getData());
      }
      return parent::_prepareForm();
  }
}