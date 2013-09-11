<?php

class Mext_Customcheckout_Block_Adminhtml_Customcheckout_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'customcheckout';
        $this->_controller = 'adminhtml_customcheckout';
        
        $this->_updateButton('save', 'label', Mage::helper('customcheckout')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('customcheckout')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('customcheckout_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'customcheckout_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'customcheckout_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('customcheckout_data') && Mage::registry('customcheckout_data')->getId() ) {
            return Mage::helper('customcheckout')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('customcheckout_data')->getTitle()));
        } else {
            return Mage::helper('customcheckout')->__('Add Item');
        }
    }
}