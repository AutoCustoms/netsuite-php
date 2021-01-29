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

class getSelectValueRequest {
    /**
     * @var GetSelectValueFieldDescription
     */
    protected GetSelectValueFieldDescription $fieldDescription;

    /**
     * @var int
     */
    protected int $pageIndex;

    static $paramtypesmap = array(
        "fieldDescription" => "GetSelectValueFieldDescription",
        "pageIndex" => "integer",
    );

    /**
     * @param GetSelectValueFieldDescription $fieldDescription
     * @return getSelectValueRequest
     */
    public function setFieldDescription(GetSelectValueFieldDescription $fieldDescription): getSelectValueRequest
    {
        $this->fieldDescription = $fieldDescription;
        return $this;
    }

    /**
     * @return GetSelectValueFieldDescription
     */
    public function getFieldDescription(): GetSelectValueFieldDescription
    {
        return $this->fieldDescription;
    }

    /**
     * @param int $pageIndex
     * @return getSelectValueRequest
     */
    public function setPageIndex(int $pageIndex): getSelectValueRequest
    {
        $this->pageIndex = $pageIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageIndex(): int
    {
        return $this->pageIndex;
    }

}
