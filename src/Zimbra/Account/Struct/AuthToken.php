<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Account\Struct;

use Zimbra\Struct\Base;

/**
 * AuthToken struct class
 * 
 * @package    Zimbra
 * @subpackage Account
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class AuthToken extends Base
{
    /**
     * Constructor method for AuthToken
     * @param  string $value
     * @param  bool   $verifyAccount
     * @return self
     */
    public function __construct($value, $verifyAccount = null)
    {
        parent::__construct(trim($value));
        if(null !== $verifyAccount)
        {
            $this->property('verifyAccount', (bool) $verifyAccount);
        }
    }

    /**
     * Gets or sets verifyAccount
     *
     * @param  bool $verifyAccount
     * @return bool|self
     */
    public function verifyAccount($verifyAccount = null)
    {
        if(null === $verifyAccount)
        {
            return $this->property('verifyAccount');
        }
        return $this->property('verifyAccount', (bool) $verifyAccount);
    }

    /**
     * Returns the array representation of this class 
     *
     * @return array
     */
    public function toArray($name = 'authToken')
    {
        return parent::toArray($name);
    }

    /**
     * Method returning the xml representation of this class
     *
     * @return SimpleXML
     */
    public function toXml($name = 'authToken')
    {
        return parent::toXml($name);
    }
}
