<?php
/**
 * Mavenbird Technologies Private Limited
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://mavenbird.com/Mavenbird-Module-License.txt
 *
 * =================================================================
 *
 * @category   Mavenbird
 * @package    Mavenbird_AdminPaymentMethod
 * @author     Mavenbird Team
 * @copyright  Copyright (c) 2018-2024 Mavenbird Technologies Private Limited ( http://mavenbird.com )
 * @license    http://mavenbird.com/Mavenbird-Module-License.txt
 */

namespace Mavenbird\AdminPaymentMethod\Plugin;

/**
 * Class PreSelect
 *
 * @package Mavenbird\AdminPaymentMethod\Plugin
 */

class PreSelect
{
    /**
     * @var \Mavenbird\AdminPaymentMethod\Model\AdminPaymentMethod
     */
    private $model;

    /**
     * PreSelect constructor
     *
     * @param \Mavenbird\AdminPaymentMethod\Model\AdminPaymentMethod $model
     */
    public function __construct(\Mavenbird\AdminPaymentMethod\Model\AdminPaymentMethod $model)
    {
        $this->model = $model;
    }

    /**
     * After get select method code
     *
     * @param \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Method\Form $block
     * @param string $result
     * @return bool|string
     */
    public function afterGetSelectedMethodCode(
        \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Method\Form $block,
        $result
    ) {
        if ($result && $result != 'free') {
            return $result;
        }

        $data = $this->model->getDataPreSelect();
        if ($data) {
            return \Mavenbird\AdminPaymentMethod\Model\AdminPaymentMethod::CODE;
        }
        return false;
    }
}
