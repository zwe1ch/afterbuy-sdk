<?php

namespace Ns\Afterbuy\Model;

/**
 * Class AbstractModel
 */
class AbstractModel
{
    /**
     * @param int $value
     *
     * @return bool|null
     */
    public function setBooleanFromInteger($value)
    {
        if (is_null($value)) {
            return null;
        }

        return (bool)$value;
    }

    /**
     * @param bool $value
     *
     * @return int|null
     */
    public function getBooleanAsInteger($value)
    {
        if (is_null($value)) {
            return null;
        }

        return $value ? 1 : 0;
    }

    /**
     * @param string $value
     *
     * @return bool|null
     */
    public function setBooleanFromString($value)
    {
        switch ($value) {
            case 'True';
                return true;
                break;
            case 'False':
                return false;
                break;
            default:
                return null;
        }
    }

    /**
     *
     * @param string $name
     * @return mixed|null
     */
    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

}
