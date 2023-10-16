<?php

namespace Godismyjudge95\StatamicEmbera;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Tags\Embera::class,
    ];

    public function bootAddon()
    {
        //
    }
}
