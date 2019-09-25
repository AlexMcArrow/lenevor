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
 * @author      Javier Alexander Campo M. <jalexcam@gmail.com>
 * @link        https://lenevor.com 
 * @copyright   Copyright (c) 2019 Lenevor Framework 
 * @license     https://lenevor.com/license or see /license.md or see https://opensource.org/licenses/BSD-3-Clause New BSD license
 * @since       0.3.0
 */

namespace Syscode\Support\Chronos\traits;

use Datetime;
use IntlCalendar;

/**
 * Trait Difference.
 * 
 * @author Javier Alexander Campo M. <jalexcam@gmail.com>
 */
trait Difference
{
    /**
     * The timestamp of the current time.
     * 
     * @var int $currentTime
     */
    protected $currentTime;

    /**
     * Difference in seconds.
     * 
     * @var int $difference
     */
    protected $difference;

    /**
     * The timestamp to compare the current time to.
     * 
     * @var int $testTime;
     */
    protected $testTime;

    // Getters

    /**
     * Get difference time.
     * 
     * @param  \DateTime  $currentTime
     * @param  \DateTime  $testTime
     * 
     * @return $this 
     */
    protected function getDifferenceTime(DateTime $currentTime, DateTime $testTime)
    {
        $this->difference  = $currentTime->getTimestamp() - $testTime->getTimestamp();
        $this->currentTime = IntlCalendar::fromDateTime($currentTime->format('Y-m-d H:i:s'));
        $this->testTime    = IntlCalendar::fromDateTime($testTime->format('Y-m-d H:i:s'))->getTime();

        return $this;
    }

    /**
     * Returns the number of years of difference between the two dates.
     * 
     * @param  bool  $raw
     * 
     * @return float|int
     */
    public function getYears(bool $raw = false)
    {
        if ($raw)
        {
            return $this->difference / 31536000;
        }

        $time = clone($this->currentTime);

        return $time->fieldDifference($this->testTime, IntlCalendar::FIELD_YEAR);
    }

    /**
     * Returns the number of months of difference between the two dates.
     * 
     * @param  bool  $raw
     * 
     * @return float|int
     */
    public function getMonths(bool $raw = false)
    {
        if ($raw)
        {
            return $this->difference / 2629750;
        }

        $time = clone($this->currentTime);

        return $time->fieldDifference($this->testTime, IntlCalendar::FIELD_MONTH);
    }

    /**
     * Returns the number of weeks of difference between the two dates.
     * 
     * @param  bool  $raw
     * 
     * @return float|int
     */
    public function getWeeks(bool $raw = false)
    {
        if ($raw)
        {
            return $this->difference / 604800;
        }

        $time = clone($this->currentTime);

        return (int) ($time->fieldDifference($this->testTime, IntlCalendar::FIELD_DAY_OF_YEAR) / 7);
    }

    /**
     * Returns the number of days of difference between the two dates.
     * 
     * @param  bool  $raw
     * 
     * @return float|int
     */
    public function getDays(bool $raw = false)
    {
        if ($raw)
        {
            return $this->difference / 86400;
        }

        $time = clone($this->currentTime);

        return $time->fieldDifference($this->testTime, IntlCalendar::FIELD_DAY_OF_YEAR);
    }

    /**
     * Returns the number of hours of difference between the two dates.
     * 
     * @param  bool  $raw
     * 
     * @return float|int
     */
    public function getHours(bool $raw = false)
    {
        if ($raw)
        {
            return $this->difference / 3600;
        }

        $time = clone($this->currentTime);

        return $time->fieldDifference($this->testTime, IntlCalendar::FIELD_HOUR_OF_DAY);
    }

    /**
     * Returns the number of minutes of difference between the two dates.
     * 
     * @param  bool  $raw
     * 
     * @return float|int
     */
    public function getMinutes(bool $raw = false)
    {
        if ($raw)
        {
            return $this->difference / 60;
        }

        $time = clone($this->currentTime);

        return $time->fieldDifference($this->testTime, IntlCalendar::FIELD_MINUTE);
    }

    /**
     * Returns the number of seconds of difference between the two dates.
     * 
     * @param  bool  $raw
     * 
     * @return float|int
     */
    public function getSeconds(bool $raw = false)
    {
        if ($raw)
        {
            return $this->difference / 1;
        }

        $time = clone($this->currentTime);

        return $time->fieldDifference($this->testTime, IntlCalendar::FIELD_SECOND);
    }
}