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

class FolderSearch extends SearchRecord {
    /**
     * @var FolderSearchBasic
     */
    protected FolderSearchBasic $basic;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "FolderSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );

    /**
     * @param FolderSearchBasic $basic
     * @return FolderSearch
     */
    public function setBasic(FolderSearchBasic $basic): FolderSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return FolderSearchBasic
     */
    public function getBasic(): FolderSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return FolderSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): FolderSearch
    {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getFileJoin(): FileSearchBasic
    {
        return $this->fileJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return FolderSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): FolderSearch
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin(): EmployeeSearchBasic
    {
        return $this->userJoin;
    }

}
