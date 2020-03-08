<?php

namespace GetOlympus\Dionysos\Field;

use GetOlympus\Zeus\Field\Field;

/**
 * Builds Color field.
 *
 * @package    DionysosField
 * @subpackage Color
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

class Color extends Field
{
    /**
     * @var array
     */
    protected $adminscripts = ['wp-color-picker'];

    /**
     * @var array
     */
    protected $adminstyles = ['wp-color-picker'];

    /**
     * @var string
     */
    protected $template = 'color.html.twig';

    /**
     * @var string
     */
    protected $textdomain = 'colorfield';

    /**
     * Prepare defaults.
     *
     * @return array
     */
    protected function getDefaults() : array
    {
        return [
            'title' => parent::t('color.title', $this->textdomain),
            'default' => '',
            'description' => '',

            /**
             * Color picker settings
             * @see https://core.trac.wordpress.org/browser/trunk/src/js/_enqueues/lib/color-picker.js
             */
            'settings' => [
                'defaultColor' => false,
                'hide'         => true,
                'palettes'     => true,
                'width'        => 255,
                'mode'         => 'hsv',
                'type'         => 'full',
                'slider'       => 'horizontal',
            ],
        ];
    }

    /**
     * Prepare variables.
     *
     * @param  object  $value
     * @param  array   $contents
     *
     * @return array
     */
    protected function getVars($value, $contents) : array
    {
        // Update vars
        return $contents;
    }
}
