<?php
namespace Ced\Adminui\Controller\Adminhtml\Index;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Ced\Adminui\Helper\Deletedata;
class Delete extends \Magento\Backend\App\Action
{

    protected $resultPageFactory;
    protected $helper;

    public function __construct(Context $context,
        PageFactory $resultPageFactory,
        \Ced\Adminui\Model\ResourceModel\Test $testResource,
		\Ced\Adminui\Model\TestFactory $testFactory,
         Deletedata $helper

    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->testFactory = $testFactory;
		$this->testResource = $testResource;
        $this->helper = $helper;
    }

    public function execute()
    {




        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getParam('id');
        $helperData = $this->helper->employeeDelete($data);
        $this->messageManager->addSuccessMessage(__('You deleted the data.'));
        $resultRedirect->setPath('*/*/');
        return $resultRedirect;


    }

}
