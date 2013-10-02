<?php
$installer = $this;
$installer->startSetup();

$installer->getConnection()->addColumn($installer->getTable('cms_page'), 'banner_block_id', 'smallint(5) unsigned default null');
$installer->getConnection()->addColumn($installer->getTable('cms_page_tree'), 'banner_block_id', 'smallint(5) unsigned default null');

$installer->endSetup();