<?php
namespace Magenest\Cybergame\Block\Customer;

class Update extends \Magento\Customer\Block\Account\Dashboard
{
    protected $objectManager;
    protected $productCollectionFactory;
    protected $logger;


    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement,
        \Magento\Review\Model\ResourceModel\Review\Product\CollectionFactory $collectionFactory,
        array $data = [],
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::__construct(
            $context,
            $customerSession,
            $subscriberFactory,
            $customerRepository,
            $customerAccountManagement,
            $data
        );
        $this->productCollectionFactory = $productCollectionFactory;
        $this->logger = $logger;
    }

    public function getProductCollection()
    {
        return $this->productCollectionFactory->create()->addAttributeToSelect('*')->load();
    }

    public function getManager(){
        return $this->getCustomer()->getCustomAttribute('is_manager')->getValue();
    }

}