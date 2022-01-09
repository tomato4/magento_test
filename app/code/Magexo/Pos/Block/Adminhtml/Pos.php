<?php


namespace Magexo\Pos\Block\Adminhtml;


use Magento\Backend\Block\Widget\Container;

class Pos extends Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_pos';
        $this->_blockGroup = 'Magexo_Pos';
        $this->_headerText = __('Point of Sale');
        $this->_addButtonLabel = __('Create New POS');
        parent::_construct();
    }
}
