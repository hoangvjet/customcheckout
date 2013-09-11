<?php
class W3int_CashbackCore_Block_Adminhtml_Catalog_Product_Edit_Tab_Cashback extends Mage_Adminhtml_Block_Widget
{
    protected $_product = null;
    public function __construct()
    {
        parent::__construct();
        $this->setSkipGenerateContent(true);
        $this->setTemplate('w3int/cashbackcore/content.phtml');
    }
    public function getTabClass()
    {
        return 'ajax';
    }

    protected function _prepareLayout()
    {
        $this->setChild('add_button',
            $this->getLayout()->createBlock('adminhtml/widget_button')
                ->setData(array(
                    'label' => Mage::helper('bundle')->__('Cashback'),
                    'class' => 'add',
                    'id'    => 'cashback-tab',
                ))
        );
        return parent::_prepareLayout();
    }

    /**
     * Check block readonly
     *
     * @return boolean
     */
    public function isReadonly()
    {
        return $this->getProduct()->getCompositeReadonly();
    }

    public function getAddButtonHtml()
    {
        return $this->getChildHtml('add_button');
    }
    public function getProduct()
    {
        return Mage::registry('product');
    }
    public function canShowTab()
    {
        return true;
    }
    public function isHidden()
    {
        return false;
    }	
}
