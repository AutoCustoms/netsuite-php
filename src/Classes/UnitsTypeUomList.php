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

class UnitsTypeUomList {
    /**
     * @var UnitsTypeUom[]
     */
    protected array $uom;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "uom" => "UnitsTypeUom[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param UnitsTypeUom[] $uom
     * @return UnitsTypeUomList
     */
    public function setUom(UnitsTypeUom $uom): UnitsTypeUomList
    {
        $this->uom[] = $uom;
        return $this;
    }

    /**
     * @return UnitsTypeUom[]
     */
    public function getUom(): array
    {
        return $this->uom;
    }

    /**
     * @param bool $replaceAll
     * @return UnitsTypeUomList
     */
    public function setReplaceAll(bool $replaceAll): UnitsTypeUomList
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
