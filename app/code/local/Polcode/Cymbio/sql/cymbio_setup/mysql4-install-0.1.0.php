<?php

$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
        ->newTable($installer->getTable('cymbio/cymbioEvents'))
        ->addColumn('cymbio_event_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary' => true,
                ), 'Event Id')
        ->addColumn('event', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
            'nullable' => false,
                ), 'Event')
        ->addColumn('product_id', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
            'nullable' => false,
                ), 'Product Id')
        ->addColumn('product_price', Varien_Db_Ddl_Table::TYPE_DECIMAL, '12,4', array(
        'nullable'  => false,
                ), 'Product Price')
        ->addColumn('product_description', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
            'nullable' => false,
                ), 'Product Description');

$installer->getConnection()->createTable($table);

$installer->endSetup();
