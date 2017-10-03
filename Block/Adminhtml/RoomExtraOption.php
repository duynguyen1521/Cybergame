<?php
namespace Magenest\Cybergame\Block\Adminhtml;

class RoomExtraOption extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Magenest_Cybergame';
        $this->_controller = 'adminhtml_roomextraoption';
        $this->_headerText = __('Manage Room Extra Options');
        parent::_construct();
    }
}