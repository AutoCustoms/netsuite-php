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

class CustomListTranslations {
    /**
     * @var Language
     */
    protected Language $locale;

    /**
     * @var string
     */
    protected string $localeDescription;

    /**
     * @var string
     */
    protected string $name;

    static $paramtypesmap = array(
        "locale" => "Language",
        "localeDescription" => "string",
        "name" => "string",
    );

    /**
     * @param Language $locale
     * @return CustomListTranslations
     */
    public function setLocale(Language $locale): CustomListTranslations
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return Language
     */
    public function getLocale(): Language
    {
        return $this->locale;
    }

    /**
     * @param string $localeDescription
     * @return CustomListTranslations
     */
    public function setLocaleDescription(string $localeDescription): CustomListTranslations
    {
        $this->localeDescription = $localeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocaleDescription(): string
    {
        return $this->localeDescription;
    }

    /**
     * @param string $name
     * @return CustomListTranslations
     */
    public function setName(string $name): CustomListTranslations
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
