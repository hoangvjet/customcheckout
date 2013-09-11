<?php
 
class W3int_CashbackCore_Model_Observer_Product
{
  /**
   * Inject one tab into the product edit page in the Magento admin
   *
   * @param Varien_Event_Observer $observer
   */
  public function injectTabs(Varien_Event_Observer $observer)
  {
    $block = $observer->getEvent()->getBlock();
     
    if ($block instanceof Mage_Adminhtml_Block_Catalog_Product_Edit_Tabs) {
      if ($this->_getRequest()->getActionName() == 'edit' || $this->_getRequest()->getParam('type')) {
        $block->addTab('product-cashback-product-tab-01', array(
          'label'     => 'Cashback',
          'content'   => $block->getLayout()->createBlock('cashbackcore/adminhtml_catalog_product_edit_tab_cashback', 'cashback-tab-content')->toHtml(),
        ));
      }
    }
  }
 
  /**
   * This method will run when the product is saved
   * Use this function to update the product model and save
   *
   * @param Varien_Event_Observer $observer
   */
  public function saveTabData($observer)
  {	
	return $this;
  }
   
  protected function _getRequest()
  {
    return Mage::app()->getRequest();
  }
}
