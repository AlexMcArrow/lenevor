<?php

/**
 * Lenevor Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file license.md.
 * It is also available through the world-wide-web at this URL:
 * https://lenevor.com/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@Lenevor.com so we can send you a copy immediately.
 *
 * @package     Lenevor
 * @subpackage  Base
 * @link        https://lenevor.com
 * @copyright   Copyright (c) 2019 - 2021 Alexander Campo <jalexcam@gmail.com>
 * @license     https://opensource.org/licenses/BSD-3-Clause New BSD license or see https://lenevor.com/license or see /license.md
 */

namespace Syscodes\Console\Exceptions;

use Throwable;
use InvalidArgumentException;

/**
 * Displays invalid an command name when you inputs incorrectly 
 * that name in the console.
 * 
 * @author Alexander Campo <jalexcam@gmail.com>
 */
class CommandNotFoundException extends InvalidArgumentException
{
    /**
     * Gets the alternative errors.
     * 
     * @var string[] $alternatives
     */
    protected $alternatives;

    /**
     * Constructor. Create a new CommandNotFoundException instance.
     * 
     * @param  string  $message  Exception message to throw
     * @param  string[]  $alternatives  List of similar defined names
     * @param  int  $code  Exception code
     * @param  \Throwable|null  $previous  Previous exception used for the exception chaining
     * 
     * @return void
     */
    public function __construct(string $message, array $alternatives = [], int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->alternatives = $alternatives;
    }

    /**
     * Gets the alternative errors.
     * 
     * @return string[]
     */
    public function getAlternatives()
    {
        return $this->alternatives;
    }
}