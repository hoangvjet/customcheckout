<?php
class Mext_Customcheckout_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/customcheckout?id=15 
    	 *  or
    	 * http://site.com/customcheckout/id/15 	
    	 */
    	/* 
		$customcheckout_id = $this->getRequest()->getParam('id');

  		if($customcheckout_id != null && $customcheckout_id != '')	{
			$customcheckout = Mage::getModel('customcheckout/customcheckout')->load($customcheckout_id)->getData();
		} else {
			$customcheckout = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($customcheckout == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$customcheckoutTable = $resource->getTableName('customcheckout');
			
			$select = $read->select()
			   ->from($customcheckoutTable,array('customcheckout_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$customcheckout = $read->fetchRow($select);
		}
		Mage::register('customcheckout', $customcheckout);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}