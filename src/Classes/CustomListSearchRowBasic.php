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

class CustomListSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isOrdered;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $scriptId;

    static $paramtypesmap = array(
        "description" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isOrdered" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "scriptId" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnStringField[] $description
     * @return CustomListSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): CustomListSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return CustomListSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CustomListSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return CustomListSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): CustomListSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isOrdered
     * @return CustomListSearchRowBasic
     */
    public function setIsOrdered(SearchColumnBooleanField $isOrdered): CustomListSearchRowBasic
    {
        $this->isOrdered[] = $isOrdered;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOrdered(): array
    {
        return $this->isOrdered;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return CustomListSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): CustomListSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return CustomListSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): CustomListSearchRowBasic
    {
        $this->owner[] = $owner;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner(): array
    {
        return $this->owner;
    }

    /**
     * @param SearchColumnStringField[] $scriptId
     * @return CustomListSearchRowBasic
     */
    public function setScriptId(SearchColumnStringField $scriptId): CustomListSearchRowBasic
    {
        $this->scriptId[] = $scriptId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getScriptId(): array
    {
        return $this->scriptId;
    }

}
