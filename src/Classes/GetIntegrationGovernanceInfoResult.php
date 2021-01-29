<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-01-29 05:23:50 PM UTC
 */

namespace NetSuite\Classes;

class GetIntegrationGovernanceInfoResult {
    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var int
     */
    protected int $integrationConcurrencyLimit;

    /**
     * @var GetIntegrationGovernanceInfoLimitType
     */
    protected GetIntegrationGovernanceInfoLimitType $limitType;

    static $paramtypesmap = array(
        "status" => "Status",
        "integrationConcurrencyLimit" => "integer",
        "limitType" => "GetIntegrationGovernanceInfoLimitType",
    );

    /**
     * @param Status $status
     * @return GetIntegrationGovernanceInfoResult
     */
    public function setStatus(Status $status): GetIntegrationGovernanceInfoResult
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param int $integrationConcurrencyLimit
     * @return GetIntegrationGovernanceInfoResult
     */
    public function setIntegrationConcurrencyLimit(int $integrationConcurrencyLimit): GetIntegrationGovernanceInfoResult
    {
        $this->integrationConcurrencyLimit = $integrationConcurrencyLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntegrationConcurrencyLimit(): int
    {
        return $this->integrationConcurrencyLimit;
    }

    /**
     * @param GetIntegrationGovernanceInfoLimitType $limitType
     * @return GetIntegrationGovernanceInfoResult
     */
    public function setLimitType(GetIntegrationGovernanceInfoLimitType $limitType): GetIntegrationGovernanceInfoResult
    {
        $this->limitType = $limitType;
        return $this;
    }

    /**
     * @return GetIntegrationGovernanceInfoLimitType
     */
    public function getLimitType(): GetIntegrationGovernanceInfoLimitType
    {
        return $this->limitType;
    }

}
