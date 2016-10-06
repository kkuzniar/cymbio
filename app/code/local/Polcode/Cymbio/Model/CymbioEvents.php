<?php

class Polcode_Cymbio_Model_CymbioEvents extends Mage_Core_Model_Abstract {
    
    const CYMBIO_API_EVENT = 'ADD_TO_CART';

    protected function _construct() {
        $this->_init('cymbio/cymbioEvents');
    }
    
    public function prepareData($product) {
        $this->setEvent(self::CYMBIO_API_EVENT);
        $this->setProductId($product->getId());
        $this->setProductPrice($product->getPrice());
        $this->setProductDescription($product->getDescription());
        
        return $this;
    }
}
