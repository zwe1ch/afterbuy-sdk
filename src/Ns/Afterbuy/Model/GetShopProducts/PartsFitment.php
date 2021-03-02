<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PartsFitment
 */
class PartsFitment
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\PartsProperty>")
     * @Serializer\SerializedName("PartsProperties")
     * @Serializer\XmlList(inline = true, entry="PartsProperty")
     * @var PartsProperty[]
     */
    protected $partsProperties;

    /**
     * @return PartsProperty[]
     */
    public function getPartsProperties()
    {
        return $this->partsProperties;
    }

    /**
     * @param string $name KType|HSN|TSN|FitmentComments
     * @return string|null
     */
    public function getProperty($name)
    {
        $name = strtolower($name);

        foreach ($this->getPartsProperties() as $property) {
            if (strtolower($property->getPropertyName()) === $name) {
                return $property->getPropertyValue();
            }
        }

        return null;
    }
}
