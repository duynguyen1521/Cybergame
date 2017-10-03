<?php
namespace Magenest\Cybergame\Controller\Adminhtml;

abstract class RoomExtraOption extends \Magento\Backend\App\Action
{
    protected $_coreRegistry = null;
    protected $roomFactory;
    protected $resultPageFactory;
    protected $context;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magenest\Cybergame\Model\ResourceModel\RoomExtraOption\CollectionFactory $roomFactory
    ){
        $this->context = $context;
        $this->_coreRegistry = $registry;
        $this->roomFactory = $roomFactory;
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    protected function _initAction()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_Cybergame::cybergame')
            ->addBreadcrumb(__('Manage Room Extra Option'), __('Manage Room Extra Option'));
        $resultPage->getConfig()->getTitle()->set(__('Manage Room Extra Option'));

        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Cybergame::cybergame');
    }
}
