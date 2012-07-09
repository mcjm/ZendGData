<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Photos
 */

namespace Zend\GData\Photos\Extension;

/**
 * Represents the gphoto:quotaLimit element used by the API.
 * This class represents the number of bytes of storage available for
 * a user.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Photos
 */
class QuotaLimit extends \Zend\GData\Extension
{

    protected $_rootNamespace = 'gphoto';
    protected $_rootElement = 'quotaLimit';

    /**
     * Constructs a new Zend_Gdata_Photos_Extension_QuotaLimit object.
     *
     * @param string $text (optional) The value being represented.
     */
    public function __construct($text = null)
    {
        $this->registerAllNamespaces(\Zend\GData\Photos::$namespaces);
        parent::__construct();
        $this->setText($text);
    }

}
