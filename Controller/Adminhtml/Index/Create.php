<?php
namespace Ced\Adminui\Controller\Adminhtml\Index;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Create extends \Magento\Backend\App\Action
{
    //const ADMIN_RESOURCE = 'Ced_Adminuis::menu_item';

    protected $resultPageFactory;

    public function __construct(Context $context,PageFactory $resultPageFactory) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {

        $resultPage = $this->resultPageFactory->create();
        //$resultPage->setActiveMenu('Ced_Adminuis::menu_item');
        //$resultPage->getConfig()->getTitle()->prepend(__('Add recorde'));

        return $resultPage;

    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed(self::ADMIN_RESOURCE);
    }
}
