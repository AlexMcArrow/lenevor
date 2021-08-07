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

namespace Syscodes\Console\Style;

use InvalidArgumentException;

/**
 * Allows in the foreground and background a specific color 
 * for any text you should to highlight.  
 * 
 * @author Alexander Campo <jalexcam@gmail.com>
 */
final class Color
{
    protected const COLORS = [
		'black'   => 0,
		'red'     => 1,
		'green'   => 2,
		'yellow'  => 3,
		'blue'    => 4,
		'magenta' => 5,
		'cyan'    => 6,
		'white'   => 7,
		'default' => 9,
	];

	protected const LIGHT_COLORS = [
		'gray'          => 0,
		'light-red'     => 1,
		'light-green'   => 2,
		'light-yellow'  => 3,
		'light-blue'    => 4,
		'light-magenta' => 5,
		'light-cyan'    => 6,
		'light-white'   => 7,
	];

	protected const OPTIONS = [
		'bold' => ['set' => 1, 'unset' => 22],
		'underline' => ['set' => 4, 'unset' => 24],
		'blink' => ['set' => 5, 'unset' => 25],
		'reverse' => ['set' => 7, 'unset' => 27],
		'conceal' => ['set' => 8, 'unset' => 28],
	];

	/**
     * There are some internal styles
     * custom style: fg;bg;opt
     *
     * @var array
     */
    public const STYLES = [
        // basic
        'normal'         => '39',// no color
        'red'            => '0;31',
        'red1'           => '1;31',
        'blue'           => '0;34',
        'cyan'           => '0;36',
        'cyan1'          => '1;36',
        'black'          => '0;30',
        'green'          => '0;32',
        'green1'         => '1;32',
        'brown'          => '0;33',
        'brown1'         => '1;33',
        'white'          => '1;37',
        'ylw0'           => '0;33',
        'ylw'            => '1;33',
        'yellow0'        => '0;33',
        'yellow'         => '1;33',
        'mga0'           => '0;35',
        'magenta0'       => '0;35',
        'mga'            => '1;35',
        'mga1'           => '1;35',
        'magenta'        => '1;35',

        // alert
        'suc'            => '1;32',// same 'green' and 'bold'
        'success'        => '0;30;42',
        'info'           => '0;34',// same 'blue'
        'comment'        => '0;33',// same 'brown'
        'note'           => '36;1',
        'notice'         => '36;4',
        'warn'           => '0;30;43',
        'warning'        => '0;30;43',
        'danger'         => '0;31',// same 'red'
        'err'            => '97;41',
        'error'          => '97;41',

        // extra
        'darkDray'       => '90',
        'dark_gray'      => '90',
        'hiRed'          => '91',
        'hiRed1'         => '1;91',
        'hiGreen'        => '92',
        'hiGreen1'       => '1;92',
        'hiYellow'       => '93',
        'hiYellow1'      => '1;93',
        'hiBlue'         => '94',
        'hiBlue1'        => '1;94',
        'hiMagenta'      => '95',
        'hiMagenta1'     => '1;95',
        'hiCyan'         => '96',
        'hiCyan1'        => '1;96',

        // extra
        'lightRedEx'     => '91',
        'light_red_ex'   => '91',
        'lightGreenEx'   => '92',
        'light_green_ex' => '92',
        'lightYellow'    => '93',
        'light_yellow'   => '93',
        'lightBlueEx'    => '94',
        'light_blue_ex'  => '94',
        'lightMagenta'   => '95',
        'light_magenta'  => '95',
        'lightCyanEx'    => '96',
        'light_cyan_ex'  => '96',
        'whiteEx'        => '97',
        'white_ex'       => '97',

        // option
        'b'              => '0;1',
        'bold'           => '0;1',
        'fuzzy'          => '2',
        'i'              => '0;3',
        'italic'         => '0;3',
        'undersline'     => '4',
        'blink'          => '5',
        'reverse'        => '7',
        'concealed'      => '8',

        // ---------- The following is deprecated ----------

        'lightRed'    => '1;31',
        'light_red'   => '1;31',
        'lightGreen'  => '1;32',
        'light_green' => '1;32',
        'lightBlue'   => '1;34',
        'light_blue'  => '1;34',
        'lightCyan'   => '1;36',
        'light_cyan'  => '1;36',
        'lightDray'   => '37',
        'light_gray'  => '37',
    ];


	/**
	 * The background color to text or CLI command.
	 * 
	 * @var string $background
	 */
	protected $background;

	/**
	 * The foreground color to text or CLI command.
	 * 
	 * @var string $foreground
	 */
	protected $foreground;

	/**
	 * Gets options the colors for CLI command.
	 * 
	 * @var array $options
	 */
	protected $options = [];

	/**
	 * Constructor. Create a new Color instance.
	 * 
	 * @param  string  $foreground
	 * @param  string  $background
	 * @param  array  $options
	 * 
	 * @return void
	 */
	public function __construct(string $foreground = '', string $background = '', array $options = [])
	{
		$this->foreground =  $this->parser($foreground);
		$this->background =  $this->parser($background, true);

		foreach ($options as $option) {
			if ( ! isset(self::OPTIONS[$option])) {
				throw new InvalidArgumentException(
					sprintf('Invalid option specified: "%s". Expected one of (%s).', 
						$option, 
						implode(',', array_keys(self::OPTIONS))
					)
				);
			}
			
			$this->options[$option] = self::OPTIONS[$option];
		}
	}

	/**
	 * Gets the parse color for capture to the color type that is needed 
	 * on foreground and background of CLI Commands.
	 * 
	 * @param  string  $color
	 * @param  bool  $background
	 * 
	 * @return string
	 * 
	 * @throws \InvalidArgumentException
	 */
	private function parser(string $color, bool $background = false): string
	{
		if ('' === $color) {
			return '';
		}

		if (isset(self::COLORS[$color])) {
			return ($background ? '4' : '3').self::COLORS[$color];
		}

		if (isset(self::LIGHT_COLORS[$color])) {
			return ($background ? '10' : '9').self::LIGHT_COLORS[$color];
		}

		throw new InvalidArgumentException(
			sprintf('Invalid "%s" color; expected one of (% s). ',
				$color,
				implode(', ',array_merge(array_keys(self::COLORS), array_keys(self::LIGHT_COLORS)))
			)
		);
	}

	/**
	 * Gets the result of the string applied to the text in the CLI command.
	 * 
	 * @param  string  $text
	 * 
	 * @return string
	 */
	public function apply(string $text): string
	{
		return $this->set().$text.$this->unset();
	}

	/**
	 * Gets the set color to CLI command.
	 * 
	 * @return string
	 */
	public function set(): string
	{
		$codes = [];
		
		if ('' !== $this->foreground) {
			$codes[] = $this->foreground;
		}
		
		if ('' !== $this->background) {
			$codes[] = $this->background;
		}
		
		foreach ($this->options as $option) {
			$codes[] = $option['set'];
		}
		
		if (0 === \count($codes)) {
			return '';
		}
		
		return sprintf("\033[%sm", implode(';', $codes));
	}

	/**
	 * Gets the unset color to CLI command.
	 * 
	 * @return string
	 */
	public function unset(): string
	{
		$codes = [];
		
		if ('' !== $this->foreground) {
			$codes[] = 39;
		}
		
		if ('' !== $this->background) {
			$codes[] = 49;
		}
		
		foreach ($this->options as $option) {
			$codes[] = $option['unset'];
		}
		
		if (0 === \count($codes)) {
			return '';
		}
		
		return sprintf("\033[%sm", implode(';', $codes));
	}
}