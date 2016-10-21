<?php

namespace Statamic\Addons\Numeral;

use Stillat\Numeral\Numeral;
use Statamic\Extend\Modifier;
use Stillat\Numeral\Languages\LanguageManager;

class NumeralModifier extends Modifier
{
    /**
     * Modify a value
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $manager = new LanguageManager;
        $numeral = new Numeral;
        $numeral->setLanguageManager($manager);
        $manager->setCulture($this->getConfig('locale', 'en-US'));

        $format = array_get($params, 0, '');

        return $numeral->format($value, $format);
    }
}
