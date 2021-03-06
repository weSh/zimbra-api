<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Admin\Request;

/**
 * ModifyLDAPEntry request class
 * Modify an LDAP Entry.
 *
 * @package    Zimbra
 * @subpackage Admin
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class ModifyLDAPEntry extends BaseAttr
{
    /**
     * Constructor method for ModifyLDAPEntry
     * @param string $dn A valid LDAP DN String (RFC 2253) that identifies the LDAP object
     * @param array  $attrs
     * @return self
     */
    public function __construct($dn, array $attrs = array())
    {
        parent::__construct($attrs);
        $this->property('dn', trim($dn));
    }

    /**
     * Gets or sets dn
     *
     * @param  string $dn
     * @return string|self
     */
    public function dn($dn = null)
    {
        if(null === $dn)
        {
            return $this->property('dn');
        }
        return $this->property('dn', trim($dn));
    }
}
