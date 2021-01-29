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

class DeleteListRequest {
    /**
     * @var BaseRef[]
     */
    protected array $baseRef;

    /**
     * @var DeletionReason
     */
    protected DeletionReason $deletionReason;

    static $paramtypesmap = array(
        "baseRef" => "BaseRef[]",
        "deletionReason" => "DeletionReason",
    );

    /**
     * @param BaseRef[] $baseRef
     * @return DeleteListRequest
     */
    public function setBaseRef(BaseRef $baseRef): DeleteListRequest
    {
        $this->baseRef[] = $baseRef;
        return $this;
    }

    /**
     * @return BaseRef[]
     */
    public function getBaseRef(): array
    {
        return $this->baseRef;
    }

    /**
     * @param DeletionReason $deletionReason
     * @return DeleteListRequest
     */
    public function setDeletionReason(DeletionReason $deletionReason): DeleteListRequest
    {
        $this->deletionReason = $deletionReason;
        return $this;
    }

    /**
     * @return DeletionReason
     */
    public function getDeletionReason(): DeletionReason
    {
        return $this->deletionReason;
    }

}
