<?php declare(strict_types=1);

namespace Afterpay\Afterpay\Model\Config\Source;

class PaymentFlow implements \Magento\Framework\Data\OptionSourceInterface
{
    const IMMEDIATE = 'immediate';
    const DEFERRED = 'deferred';

    public function toOptionArray(): array
    {
        return [
            [
                'value' => self::IMMEDIATE,
                'label' => __('Immediate Payment Flow')
            ],
            [
                'value' => self::DEFERRED,
                'label' => __('Deferred Payment Flow')
            ]
        ];
    }
}
