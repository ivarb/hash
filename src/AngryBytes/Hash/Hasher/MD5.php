<?php
/**
 * MD5.php
 *
 * @category        AngryBytes
 * @package         Hash
 * @subpackage      Hasher
 * @copyright       Copyright (c) 2010 Angry Bytes BV (http://www.angrybytes.com)
 */

namespace AngryBytes\Hash\Hasher;

use AngryBytes\Hash\HasherInterface;

/**
 * MD5
 *
 * MD5 hasher.
 *
 * You probably shouldn't use this for passwords
 *
 * @category        AngryBytes
 * @package         Hash
 * @subpackage      Hasher
 */
class MD5 implements HasherInterface
{
    /**
     * Hash a value using md5
     *
     * @param string $data
     * @param string $salt
     * @return string
     */
    public function hash($data, $salt)
    {
        return md5($data . '-' . $salt);
    }
}
