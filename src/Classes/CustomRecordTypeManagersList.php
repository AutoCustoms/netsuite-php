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

class CustomRecordTypeManagersList {
    /**
     * @var CustomRecordTypeManagers[]
     */
    protected array $managers;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "managers" => "CustomRecordTypeManagers[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param CustomRecordTypeManagers[] $managers
     * @return CustomRecordTypeManagersList
     */
    public function setManagers(CustomRecordTypeManagers $managers): CustomRecordTypeManagersList
    {
        $this->managers[] = $managers;
        return $this;
    }

    /**
     * @return CustomRecordTypeManagers[]
     */
    public function getManagers(): array
    {
        return $this->managers;
    }

    /**
     * @param bool $replaceAll
     * @return CustomRecordTypeManagersList
     */
    public function setReplaceAll(bool $replaceAll): CustomRecordTypeManagersList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
