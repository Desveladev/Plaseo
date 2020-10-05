<?php

namespace LangLib;

class Lang
{
    private $country;
    private $lang;

    public function __construct($country, $lang)
    {
        $this->setLang($lang);
        $this->setCountry($country);
    }

    public static function get_text($section, $id)
    {
        $country = $GLOBALS['classcache']['Lang']['country'];
        $lang    = $GLOBALS['classcache']['Lang']['lang'];
        include_once dirname(__FILE__) . "/../public/" . $country . "/lang/" . $lang . ".php";
        global $LANG;

        if(isset($LANG[$section][$id])) {

            return $LANG[$section][$id];
        } else {

            return $id;
        }
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        $GLOBALS['classcache']['Lang']['country'] = $country;
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        $GLOBALS['classcache']['Lang']['lang'] = $lang;
    }
}
