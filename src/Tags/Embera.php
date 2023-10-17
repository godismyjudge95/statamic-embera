<?php

namespace Godismyjudge95\StatamicEmbera\Tags;

use Embera\Embera as EmberaGenerator;
use Statamic\Tags\Tags;

class Embera extends Tags
{
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
