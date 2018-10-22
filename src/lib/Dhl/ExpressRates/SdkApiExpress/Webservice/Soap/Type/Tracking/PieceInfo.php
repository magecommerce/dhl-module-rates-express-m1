<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * PieceInfo class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PieceInfo
{
    /**
     * @var PieceDetails
     */
    protected $PieceDetails;

    /**
     * @var PieceEventCollection
     */
    protected $PieceEvent;

    /**
     * @param PieceDetails $PieceDetails
     */
    public function __construct(PieceDetails $PieceDetails)
    {
        $this->PieceDetails = $PieceDetails;
    }

    /**
     * @return PieceDetails
     */
    public function getPieceDetails()
    {
        return $this->PieceDetails;
    }

    /**
     * @param PieceDetails $PieceDetails
     * @return self
     */
    public function setPieceDetails(PieceDetails $PieceDetails)
    {
        $this->PieceDetails = $PieceDetails;

        return $this;
    }

    /**
     * @return PieceEventCollection
     */
    public function getPieceEvent()
    {
        return $this->PieceEvent;
    }

    /**
     * @param PieceEventCollection $PieceEvent
     * @return self
     */
    public function setPieceEvent(PieceEventCollection $PieceEvent)
    {
        $this->PieceEvent = $PieceEvent;

        return $this;
    }
}
