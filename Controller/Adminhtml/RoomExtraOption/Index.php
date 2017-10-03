<?php
namespace Magenest\Cybergame\Controller\Adminhtml\RoomExtraOption;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ){
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_Cybergame::roomextraoption');
        $resultPage->addBreadcrumb(__('Cybergame'), __('Cybergame'));
        $resultPage->addBreadcrumb(__('Manage Room Extra Options'), __('Manage Room Extra Options'));
        //Set name of Grid
        $resultPage->getConfig()->getTitle()->prepend(__('Manage RoomExtraOptions'));

        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Cybergame::roomextraoption');
    }
}
