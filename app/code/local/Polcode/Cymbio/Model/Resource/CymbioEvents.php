<?php

class Polcode_Cymbio_Model_Resource_CymbioEvents extends Mage_Core_Model_Resource_Db_Abstract {

    protected function _construct() {
        $this->_init('cymbio/cymbioEvents', 'cymbio_event_id');
    }

}
