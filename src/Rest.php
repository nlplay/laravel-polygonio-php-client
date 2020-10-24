<?php

namespace LPolygonIO;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \PolygonIO\rest\stocks\Stocks stocks()
 * @method static \PolygonIO\rest\reference\Reference reference()
 * @method static \PolygonIO\rest\forex\Forex forex()
 * @method static \PolygonIO\rest\crypto\Crypto crypto()
 */
class Rest extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return RestIO::class;
    }
}
