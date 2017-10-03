<?php
namespace Magenest\Cybergame\Model\ResourceModel\GameAccountList;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    public function _construct()
    {
        $this->_init(
            'Magenest\Cybergame\Model\GameAccountList', 'Magenest\Cybergame\Model\ResourceModel\GameAccountList'
        );
    }
}