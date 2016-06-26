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
     * Prepare variables.
     */
    protected function setVars()
    {
        $this->getModel()->setFaIcon('fa-tint');
        $this->getModel()->setScript('js'.S.'color.js');
        $this->getModel()->setTemplate('color.html.twig');
    }

    /**
     * Prepare HTML component.
     *
     * @param array $content
     * @param array $details
     */
    protected function getVars($content, $details = [])
    {
        // Build defaults
        $defaults = [
            'id' => '',
            'title' => Translate::t('color.title', [], 'colorfield'),
            'default' => '',
            'description' => '',
        ];

        // Build defaults data
        $vars = array_merge($defaults, $content);

        // Retrieve field value
        $vars['val'] = $this->getValue($content['id'], $details, $vars['default']);

        // Update vars
        $this->getModel()->setVars($vars);
    }
}
