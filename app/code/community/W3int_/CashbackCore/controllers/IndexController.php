<?php
class W3int_CashbackCore_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/cashbackcore?id=15 
    	 *  or
    	 * http://site.com/cashbackcore/id/15 	
    	 */
    	/* 
		$cashbackcore_id = $this->getRequest()->getParam('id');

  		if($cashbackcore_id != null && $cashbackcore_id != '')	{
			$cashbackcore = Mage::getModel('cashbackcore/cashbackcore')->load($cashbackcore_id)->getData();
		} else {
			$cashbackcore = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($cashbackcore == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$cashbackcoreTable = $resource->getTableName('cashbackcore');
			
			$select = $read->select()
			   ->from($cashbackcoreTable,array('cashbackcore_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$cashbackcore = $read->fetchRow($select);
		}
		Mage::register('cashbackcore', $cashbackcore);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}