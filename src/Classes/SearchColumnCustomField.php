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

class SearchColumnCustomField {
    /**
     * @var string
     */
    protected string $customLabel;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $scriptId;

    static $paramtypesmap = array(
        "customLabel" => "string",
        "internalId" => "string",
        "scriptId" => "string",
    );

    /**
     * @param string $customLabel
     * @return SearchColumnCustomField
     */
    public function setCustomLabel(string $customLabel): SearchColumnCustomField
    {
        $this->customLabel = $customLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomLabel(): string
    {
        return $this->customLabel;
    }

    /**
     * @param string $internalId
     * @return SearchColumnCustomField
     */
    public function setInternalId(string $internalId): SearchColumnCustomField
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $scriptId
     * @return SearchColumnCustomField
     */
    public function setScriptId(string $scriptId): SearchColumnCustomField
    {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getScriptId(): string
    {
        return $this->scriptId;
    }

}
