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

class IssueVersion {
    /**
     * @var bool
     */
    protected bool $primary;

    /**
     * @var RecordRef
     */
    protected RecordRef $version;

    /**
     * @var RecordRef
     */
    protected RecordRef $build;

    static $paramtypesmap = array(
        "primary" => "boolean",
        "version" => "RecordRef",
        "build" => "RecordRef",
    );

    /**
     * @param bool $primary
     * @return IssueVersion
     */
    public function setPrimary(bool $primary): IssueVersion
    {
        $this->primary = $primary;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }

    /**
     * @param RecordRef $version
     * @return IssueVersion
     */
    public function setVersion(RecordRef $version): IssueVersion
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVersion(): RecordRef
    {
        return $this->version;
    }

    /**
     * @param RecordRef $build
     * @return IssueVersion
     */
    public function setBuild(RecordRef $build): IssueVersion
    {
        $this->build = $build;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuild(): RecordRef
    {
        return $this->build;
    }

}
