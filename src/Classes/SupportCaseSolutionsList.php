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

class SupportCaseSolutionsList {
    /**
     * @var SupportCaseSolutions[]
     */
    protected array $solutions;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "solutions" => "SupportCaseSolutions[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param SupportCaseSolutions[] $solutions
     * @return SupportCaseSolutionsList
     */
    public function setSolutions(SupportCaseSolutions $solutions): SupportCaseSolutionsList
    {
        $this->solutions[] = $solutions;
        return $this;
    }

    /**
     * @return SupportCaseSolutions[]
     */
    public function getSolutions(): array
    {
        return $this->solutions;
    }

    /**
     * @param bool $replaceAll
     * @return SupportCaseSolutionsList
     */
    public function setReplaceAll(bool $replaceAll): SupportCaseSolutionsList
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
