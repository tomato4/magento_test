<?php

namespace Test\Pos\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Courses
 */
class PosEntity extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = "test_pos_entity";

    protected $_cacheTag = "test_pos_entity";

    protected $_eventPrefix = "test_pos_entity";

    public function __construct() {
        $this->_init('Test\Pos\Model\ResourceModel\PosEntity');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        return [];
    }
}
