<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * ServiceEvent class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ServiceEvent
{
    /**
     * @var string
     */
    protected $EventCode;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @param string $EventCode
     */
    public function __construct($EventCode)
    {
        $this->EventCode = $EventCode;
    }

    /**
     * @return string
     */
    public function getEventCode()
    {
        return $this->EventCode;
    }

    /**
     * @param string $EventCode
     *
     * @return self
     */
    public function setEventCode($EventCode)
    {
        $this->EventCode = $EventCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }
}
