<?php
class W3int_CashbackCore_Model_Observer
{
	public function hookToAddToCartAfter($observer){
		if(Mage::getSingleton('customer/session')->isLoggedIn()) {
			$event = $observer->getEvent();
			$quoteItem = $event->getQuoteItem();
			$url	=	$quoteItem->getProduct()->getData('cashback_url');
			$customerData = Mage::getSingleton('customer/session')->getCustomer();
			if(strpos($url, '?')==false){
				$url	.='?clickref='.$customerData->getId();
			}else{
				$url	.='&clickref='.$customerData->getId();
			}
			header("Location: $url");
			exit;
		}else{
			return $this;
		}
	}
}
?>