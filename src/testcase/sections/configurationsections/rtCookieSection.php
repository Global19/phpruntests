<?php
/**
 * rtGetSection
 * Sets environment variables for COOKIE section
 *
 *
 * @category  Testing
 * @package   RUNTESTS
 * @author    Zoe Slattery <zoe@php.net>
 * @author    Stefan Priebsch <spriebsch@php.net>
 * @copyright 2009 The PHP Group
 * @license   http://www.php.net/license/3_01.txt PHP License 3.01
 * @link      http://qa.php.net/
 */
class rtCookieSection extends rtConfigurationSection
{
    protected $cookieVariables = array();

    protected function init()
    {
        $this->cookieVariables['HTTP_COOKIE'] = $this->sectionContents[0];
    }

    /**
     * Additional GET environment variables required by the test
     *
     * @return array
     */
    public function getCookieVariables()
    {
        return $this->cookieVariables;
    }
}
?>