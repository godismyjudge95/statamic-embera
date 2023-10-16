<?php

namespace Godismyjudge95\StatamicEmbera\Tags;

use Embera\Embera as EmberaGenerator;
use Statamic\Tags\Tags;
use Statamic\View\Antlers\Language\Runtime\StackReplacementManager;

/**
 * Requires the Embera package: https://github.com/mpratt/Embera
 * composer require mpratt/embera:~2.0
 */
class Embera extends Tags
{
    /**
     * The {{ embera }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $params = $this->params->toArray();
        $url = array_get($params, 'src', null);

        if (!$url) {
            return '';
        }

        $embera = new EmberaGenerator($params);

        return $embera->autoEmbed($url);
    }
}
