<?php


namespace Magexo\Pos\Model\ResourceModel\PosEntity;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'pos_id';
    protected $_eventPrefix = 'test_pos_entity_collection';
    protected $_eventObject = 'pos_entity_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Test\Pos\Model\PosEntity', 'Test\Pos\Model\ResourceModel\PosEntity');
    }
}
