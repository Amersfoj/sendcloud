<?php
/**
 * Created by PhpStorm.
 * User: rick
 * Date: 5-4-18
 * Time: 15:44
 */

namespace SendCloud\SendCloud\Block\Checkout;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;
use Magento\Store\Model\ScopeInterface;

class Config extends Template
{

    public function __construct( Template\Context $context, array $data = [] )
    {

        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getScriptUrl()
    {
        //return $this->_scopeConfig->getValue('sendcloud/sendcloud/script_url', ScopeInterface::SCOPE_STORE);
        return 'https://panel.sendcloud.sc/shops/magento_v2/embed/7b7db6d5-88e5-4b60-92ba-db0f827b0e2a.js';
    }
}
