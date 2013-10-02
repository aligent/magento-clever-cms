<?php

class JR_CleverCms_Block_Page_Banner extends Mage_Core_Block_Template
{

    public function _toHtml()
    {
        $iBlockId = Mage::getSingleton('cms/page')->getBannerBlockId();
        return $this->getLayout()->createBlock('cms/block')->setBlockId($iBlockId)->toHtml();
    }

}