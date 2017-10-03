<?php
namespace Magenest\Cybergame\Controller\Customer;

class Update extends \Magento\Framework\App\Action\Action
{
    protected $objectManager;

    protected $resultPageFactory;
    protected $logger;

    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Psr\Log\LoggerInterface $logger
    ){
        $this->resultPageFactory = $resultPageFactory;
        $this->logger = $logger;
        $this->objectManager = $objectManager;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $this->logger->debug("Da load layout");
        return $resultPage;
    }

}
