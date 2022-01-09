<?php

namespace Magexo\Pos\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Courses
 */
class PosEntity extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = "magexo_pos_entity";

    protected $_cacheTag = "magexo_pos_entity";

    protected $_eventPrefix = "magexo_pos_entity";

    protected function _construct() {
        $this->_init('Magexo\Pos\Model\ResourceModel\PosEntity');
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
