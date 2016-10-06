<?php
class Polcode_Cymbio_Model_Resource_CymbioEvents_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('cymbio/cymbioEvents');
    }
}