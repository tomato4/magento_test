<?php


namespace Magexo\Pos\Ui\Component\Column;


use Magento\Framework\Option\ArrayInterface;

class Availability implements ArrayInterface
{
    public function toOptionArray(): array
    {
        return [['value' => 1, 'label' => __('Yes')], ['value' => 0, 'label' => __('No')]];
    }
}
