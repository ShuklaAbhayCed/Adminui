<?php

namespace Ced\Adminui\Helper;
use Ced\Adminui\Controller\Adminhtml\Index\Index;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Http\Context
     */
    private $httpContext;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Http\Context $httpContext,
        \Ced\Adminui\Model\ResourceModel\Test $testResource,
		\Ced\Adminui\Model\TestFactory $testFactory
    )
    {
        parent::__construct($context);
        $this->httpContext = $httpContext;
        $this->testFactory = $testFactory;
		      $this->testResource = $testResource;
    }
    public function employeeData($data){
      try {
        if (isset($data)){
            $postModel = $this->testFactory->create();
            $postModel->setData($data);
            $insert = $this->testResource->Save($postModel);
            return $insert;
          }
        }catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
          }
        }

}
