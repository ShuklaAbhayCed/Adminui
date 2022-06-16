<?php
namespace Ced\Adminui\Model;
class Test extends \Magento\Framework\Model\AbstractModel
{
    
    const CACHE_TAG = 'ced_adminui';
   
    protected $_cacheTag = 'ced_adminui';
   
    protected $_eventPrefix = 'ced_adminui';
   
    function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = [])
    {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }
   
    protected function _construct()
    {
        $this->_init('Ced\Adminui\Model\ResourceModel\Test');
    }
}
