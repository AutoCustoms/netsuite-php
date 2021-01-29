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

class ClassTranslation {
    /**
     * @var string
     */
    protected string $locale;

    /**
     * @var string
     */
    protected string $language;

    /**
     * @var string
     */
    protected string $name;

    static $paramtypesmap = array(
        "locale" => "string",
        "language" => "string",
        "name" => "string",
    );

    /**
     * @param string $locale
     * @return ClassTranslation
     */
    public function setLocale(string $locale): ClassTranslation
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $language
     * @return ClassTranslation
     */
    public function setLanguage(string $language): ClassTranslation
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $name
     * @return ClassTranslation
     */
    public function setName(string $name): ClassTranslation
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
