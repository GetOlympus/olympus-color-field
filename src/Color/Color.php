<?php

namespace GetOlympus\Field;

use GetOlympus\Zeus\Field\Controller\Field;
use GetOlympus\Zeus\Translate\Controller\Translate;

/**
 * Builds Color field.
 *
 * @package Field
 * @subpackage Color
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 *
 * @see https://olympus.readme.io/v1.0/docs/color-field
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
    protected function getDefaults()
    {
        return [
            'title' => Translate::t('color.title', $this->textdomain),
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
    protected function getVars($value, $contents)
    {
        // Update vars
        return $contents;
    }
}
