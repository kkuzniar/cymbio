<?php

class Polcode_Cymbio_Model_Api extends Mage_Core_Model_Abstract {

    const API_QUERY = 'QUERY';
    const CYMBIO_API_EVENT = 'ADD_TO_CART';

    private $__curl;
    private $__data;

    private function initCurl() {
        $this->__curl = curl_init(Mage::helper('cymbio/data')->getApiUrl());
    }

    private function prepareCurlSettings() {
        $str_data = json_encode($this->__data);

        curl_setopt($this->__curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($this->__curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->__curl, CURLOPT_POSTFIELDS, $str_data);
        curl_setopt($this->__curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($this->__curl, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "referrer: {$_SERVER['HTTP_REFERER']}"
        ));
    }

    private function closeCurl() {
        curl_close($this->__curl);
    }

    public function prepareData($product) {
        $this->__data['action'] = self::CYMBIO_API_EVENT;
        $this->__data['query'] = self::API_QUERY;
        $this->__data['referer'] = Mage::app()->getStore()->getName();
        $this->__data['store_id'] = $product->getStoreId();
        $this->__data['product_id'] = $product->getId();

        return $this;
    }

    public function send() {
        $this->initCurl();
        $this->prepareCurlSettings();
        curl_exec($this->__curl);
        $this->closeCurl();
    }

}
