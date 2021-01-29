<?php

return '
    /**
     * @param ' . $docBlockTypeHint . ' $' . $propertyName . '
     * @return ' . $className . '
     */
    public function set' . $functionName . '(' . $paramTypeHint . ' $' . $propertyName . '): ' . $className . '
    {
        $this->' . $propertyName . ' = $' . $propertyName . ';
        return $this;
    }
';