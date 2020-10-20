<?php

namespace Snowdog\Menu\Block\Menu\Import\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Import implements ButtonProviderInterface
{
    /**
     * @inheritDoc
     */
    public function getButtonData()
    {
        return [
            'label' => __('Import'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'buttonAdapter' => [
                        'actions' => [
                            [
                                'targetName' => 'menu_import_form.menu_import_form',
                                'actionName' => 'save',
                                'params' => [true, ['back' => 'close']]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
