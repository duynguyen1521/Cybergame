<?php
namespace Magenest\Cybergame\Block\Adminhtml\RoomExtraOption;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    protected $roomCollection;

    public function	__construct(
        \Magento\Backend\Block\Template\Context	$context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magenest\Cybergame\Model\ResourceModel\RoomExtraOption\Collection $roomCollection,
        array $data = []
    ){
        $this->roomCollection = $roomCollection;
        parent::__construct($context, $backendHelper, $data);

        $this->setEmptyText(__('No Room Extra Option Found'));
    }

    protected function _getStore()
    {
        $storeId = (int)$this->getRequest()->getParam('store', 0);
        return $this->_storeManager->getStore($storeId);
    }

    protected function _prepareCollection()
    {
        $this->setCollection($this->roomCollection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('name', ['header' => __('Name'), 'index' => 'name',]);
        $this->addColumn('product_id', ['header' => __('Product ID'), 'index' => 'product_id',]);
        $this->addColumn('number_pc', ['header' => __('Number PC'), 'index' => 'number_pc',]);
        $this->addColumn('address', ['header' => __('Address'), 'index' => 'address',]);
        $this->addColumn('food_price', ['header' => __('Food Price'), 'index' => 'food_price',]);
        $this->addColumn('drink_price', ['header' => __('Drink Price'), 'index' => 'drink_price',]);

        return parent::_prepareColumns();
    }


    public function getRowUrl($row)
    {
        return $this->getUrl(
            '*/*/edit',
            ['store' => $this->getRequest()->getParam('store'), 'id' => $row->getId()]
        );
    }
}