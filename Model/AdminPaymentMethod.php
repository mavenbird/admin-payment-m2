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

namespace Mavenbird\AdminPaymentMethod\Model;

/**
 * Class AdminPaymentMethod
 *
 * @package Mavenbird\AdminPaymentMethod\Model
 */
class AdminPaymentMethod extends \Magento\Payment\Model\Method\AbstractMethod
{
    /**
     * Payment code
     *
     * @var string|bool
     */
    const CODE = 'adminpaymentmethod';

    /**
     * @var string
     */
    protected $_code = self::CODE;

    /**
     * @var bool
     */
    protected $_isOffline = true;

    /**
     * @var bool
     */
    protected $_canUseCheckout = false;

    /**
     * @var bool
     */
    protected $_canUseInternal = true;

    /**
     * Get preselect option from config
     *
     * @return string
     */
    public function getDataPreSelect()
    {
        return $this->getConfigData('preselect');
    }

    /**
     * Get Auto Create Invoice option from config
     *
     * @return bool
     */
    public function getDataAutoCreateInvoice()
    {
        return $this->getConfigData('createinvoice');
    }
}
