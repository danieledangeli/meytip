<?php

namespace Meytip\TournamentBundle;

/**
 * Common package exception interface to allow
 * users of caching only this package specific
 * exceptions thrown
 *
 * @author Daniele D'Angeli <dangeli88.daniele@gmail.com>
 */
interface Exception
{
    /**
     * Following best practices for PHP5.3 package exceptions.
     * All exceptions thrown in this package will have to implement this interface
     *
     * @link http://wiki.php.net/pear/rfc/pear2_exception_policy
     */
}