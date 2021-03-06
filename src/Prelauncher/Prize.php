<?php

namespace Prelauncher;

use Prelauncher\Resource;
use \RESTful\URISpec;

class Prize extends Resource
{
    protected static $_uri_spec = null;

    public static function init()
    {
        self::$_uri_spec = new URISpec('prizes', 'id', '/');
        self::$_registry->add(get_called_class());
    }

}
