<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Account\Request;

use Zimbra\Account\Struct\Pref;
use Zimbra\Common\TypedSequence;

/**
 * GetPrefs request class
 * Get preferences for the authenticated account 
 *
 * @package    Zimbra
 * @subpackage Account
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class GetPrefs extends Base
{
    /**
     * Any of these are specified then only get these preferences
     * @var TypedSequence<Pref>
     */
    private $_pref;

    /**
     * Constructor method for GetPrefs
     * @param array $prefs Any of these are specified then only get these preferences
     * @return self
     */
    public function __construct(array $prefs = array())
    {
        parent::__construct();
        $this->_pref = new TypedSequence('Zimbra\Account\Struct\Pref', $prefs);
    
        $this->on('before', function(Base $sender)
        {
            if($sender->pref()->count())
            {
                $sender->child('pref', $sender->pref()->all());
            }
        });
    }

    /**
     * Add a pref
     *
     * @param  Pref $pref
     * @return self
     */
    public function addPref(Pref $pref)
    {
        $this->_pref->add($pref);
        return $this;
    }

    /**
     * Gets pref sequence
     *
     * @return Sequence
     */
    public function pref()
    {
        return $this->_pref;
    }
}
