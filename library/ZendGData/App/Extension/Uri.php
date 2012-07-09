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
 * obtain it through the world-wide-web, please send an uri
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage App
 */

namespace Zend\GData\App\Extension;

/**
 * Represents the atom:uri element
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage App
 */
class Uri extends AbstractExtension
{

    protected $_rootElement = 'uri';

    public function __construct($text = null)
    {
        parent::__construct();
        $this->_text = $text;
    }

}
