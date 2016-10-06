<?php

class Polcode_Cymbio_Model_Observer {

    public function cymbioApiProductAddAfter(Varien_Event_Observer $observer) {
        $product = $observer->getEvent()->getProduct();

        try {
            /* @var $api Polcode_Cymbio_Model_Api */
            $api = Mage::getSingleton('cymbio/api');
            $api->setProduct($product)
                    ->prepareData($product)
                    ->send();
            
            

            /* @var $cymbio Polcode_Cymbio_Model_CymbioEvents */
            $cymbio = Mage::getModel('cymbio/cymbioEvents');
            $cymbio->setProduct($product)
                    ->prepareData($product)
                    ->save();
        } catch (Exception $e) {
            Mage::logException($e);
        }
    }

}
