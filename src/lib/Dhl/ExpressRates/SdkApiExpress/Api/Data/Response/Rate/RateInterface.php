<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Rate;

/**
 * Rate Response Item Interface.
 *
 * DTO that carries web service operation results.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface RateInterface
{
    /**
     * Returns the service code.
     *
     * @return string
     */
    public function getServiceCode();

    /**
     * Returns the label.
     *
     * @return string
     */
    public function getLabel();

    /**
     * Returns the amount.
     *
     * @return float
     */
    public function getAmount();

    /**
     * Returns the currency code.
     *
     * @return string
     */
    public function getCurrencyCode();
}
