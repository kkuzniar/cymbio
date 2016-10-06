<?php

class Polcode_Cymbio_Helper_Data extends Mage_Core_Helper_Abstract {
    const XML_PATH_CYMBIO_API_URL = 'cymbio/settings/cymbio_api_url';
    
    public function getApiUrl() {
        return Mage::getStoreConfig(self::XML_PATH_CYMBIO_API_URL);
    }
}