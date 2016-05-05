<?php

namespace GetOlympus\Field;

use GetOlympus\Hera\Field\Controller\Field;
use GetOlympus\Hera\Translate\Controller\Translate;

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
     * @var string
     */
    protected $faIcon = 'fa-tint';

    /**
     * @var string
     */
    protected $template = 'color.html.twig';

    /**
     * Prepare HTML component.
     *
     * @param array $content
     * @param array $details
     *
     * @since 0.0.1
     */
    protected function getVars($content, $details = [])
    {
        // Build defaults
        $defaults = [
            'id' => '',
            'title' => Translate::t('color.title', [], 'colorfield'),
            'default' => '',
            'description' => '',

            // details
            'post' => 0,
            'prefix' => '',
            'template' => 'pages',
        ];

        // Build defaults data
        $vars = array_merge($defaults, $content);

        // Retrieve field value
        $vars['val'] = $this->getValue($details, $vars['default'], $content['id'], true);

        // Update vars
        $this->getField()->setVars($vars);
    }
}
