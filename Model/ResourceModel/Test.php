<?php
namespace Ced\Adminui\Model\ResourceModel;
use Magento\Framework\Model\AbstractModel;

class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected $_blockProductTable;

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        $resourcePrefix = null
    ) {
        parent::__construct($context, $resourcePrefix);
    }

    protected function _construct()
    {
        $this->_init('newced', 'id');
    }
}
