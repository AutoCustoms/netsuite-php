<?php

return '
    /**
     * @return ' . $docBlockTypeHint . '
     */
    public function get' . $functionName . '(): ' . $functionReturnType . '
    {
        return $this->' . $propertyName . ';
    }
';
