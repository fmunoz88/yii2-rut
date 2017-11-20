<?php

namespace sateler\rut;

/**
 * Behavior that adds a rut formatter
 *
 * @author felipe
 */
class RutFormatBehavior extends \yii\base\Behavior
{
    public function asRut($val)
    {
        if ($val === null) {
            return $this->owner->nullDisplay;
        }
        if ($val === '') {
            return $val;
        }
        
        return Rut::format($val);
    }
}
