<?php
namespace Magenest\Cybergame\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    protected $logger;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Psr\Log\LoggerInterface $logger
    ){

        $this->resultJsonFactory = $resultJsonFactory;
        $this->logger = $logger;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->logger->debug('Save Action');

                var_dump($_POST);die;
                $data = $this->getRequest()->getPost('data');

                $this->logger->debug('Save Action');

                $room = $this->_objectManager->create('Magenest\Cybergame\Model\RoomExtraOption');

                if($room->load($data['product_id'])){
                    $room->setNumberPc($data['number_pc']);
                    $room->setAddress($data['address']);
                    $room->setAddress($data['food_price']);
                    $room->setAddress($data['drink_price']);

                    $room->save();
                }

    }
}
