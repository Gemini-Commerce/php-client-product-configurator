<?php
/**
 * ProductconfiguratormatrixCreateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Product Configurator Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ProductconfiguratormatrixCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductconfiguratormatrixCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'productconfiguratormatrixCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tenant_id' => 'string',
        'configurator_id' => 'string',
        'label' => 'string',
        'generic_type' => '\OpenAPI\Client\Model\MatrixGenericType',
        'price_type' => '\OpenAPI\Client\Model\MatrixPriceType',
        'weight_type' => '\OpenAPI\Client\Model\MatrixWeightType',
        'steps' => '\OpenAPI\Client\Model\ProductconfiguratormatrixStep[]',
        'properties_mode' => '\OpenAPI\Client\Model\ProductconfiguratorPropertyMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tenant_id' => null,
        'configurator_id' => null,
        'label' => null,
        'generic_type' => null,
        'price_type' => null,
        'weight_type' => null,
        'steps' => null,
        'properties_mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tenant_id' => false,
		'configurator_id' => false,
		'label' => false,
		'generic_type' => false,
		'price_type' => false,
		'weight_type' => false,
		'steps' => false,
		'properties_mode' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tenant_id' => 'tenantId',
        'configurator_id' => 'configuratorId',
        'label' => 'label',
        'generic_type' => 'genericType',
        'price_type' => 'priceType',
        'weight_type' => 'weightType',
        'steps' => 'steps',
        'properties_mode' => 'propertiesMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tenant_id' => 'setTenantId',
        'configurator_id' => 'setConfiguratorId',
        'label' => 'setLabel',
        'generic_type' => 'setGenericType',
        'price_type' => 'setPriceType',
        'weight_type' => 'setWeightType',
        'steps' => 'setSteps',
        'properties_mode' => 'setPropertiesMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tenant_id' => 'getTenantId',
        'configurator_id' => 'getConfiguratorId',
        'label' => 'getLabel',
        'generic_type' => 'getGenericType',
        'price_type' => 'getPriceType',
        'weight_type' => 'getWeightType',
        'steps' => 'getSteps',
        'properties_mode' => 'getPropertiesMode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('tenant_id', $data ?? [], null);
        $this->setIfExists('configurator_id', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('generic_type', $data ?? [], null);
        $this->setIfExists('price_type', $data ?? [], null);
        $this->setIfExists('weight_type', $data ?? [], null);
        $this->setIfExists('steps', $data ?? [], null);
        $this->setIfExists('properties_mode', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets tenant_id
     *
     * @return string|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string|null $tenant_id tenant_id
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        if (is_null($tenant_id)) {
            throw new \InvalidArgumentException('non-nullable tenant_id cannot be null');
        }
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets configurator_id
     *
     * @return string|null
     */
    public function getConfiguratorId()
    {
        return $this->container['configurator_id'];
    }

    /**
     * Sets configurator_id
     *
     * @param string|null $configurator_id configurator_id
     *
     * @return self
     */
    public function setConfiguratorId($configurator_id)
    {
        if (is_null($configurator_id)) {
            throw new \InvalidArgumentException('non-nullable configurator_id cannot be null');
        }
        $this->container['configurator_id'] = $configurator_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets generic_type
     *
     * @return \OpenAPI\Client\Model\MatrixGenericType|null
     */
    public function getGenericType()
    {
        return $this->container['generic_type'];
    }

    /**
     * Sets generic_type
     *
     * @param \OpenAPI\Client\Model\MatrixGenericType|null $generic_type generic_type
     *
     * @return self
     */
    public function setGenericType($generic_type)
    {
        if (is_null($generic_type)) {
            throw new \InvalidArgumentException('non-nullable generic_type cannot be null');
        }
        $this->container['generic_type'] = $generic_type;

        return $this;
    }

    /**
     * Gets price_type
     *
     * @return \OpenAPI\Client\Model\MatrixPriceType|null
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param \OpenAPI\Client\Model\MatrixPriceType|null $price_type price_type
     *
     * @return self
     */
    public function setPriceType($price_type)
    {
        if (is_null($price_type)) {
            throw new \InvalidArgumentException('non-nullable price_type cannot be null');
        }
        $this->container['price_type'] = $price_type;

        return $this;
    }

    /**
     * Gets weight_type
     *
     * @return \OpenAPI\Client\Model\MatrixWeightType|null
     */
    public function getWeightType()
    {
        return $this->container['weight_type'];
    }

    /**
     * Sets weight_type
     *
     * @param \OpenAPI\Client\Model\MatrixWeightType|null $weight_type weight_type
     *
     * @return self
     */
    public function setWeightType($weight_type)
    {
        if (is_null($weight_type)) {
            throw new \InvalidArgumentException('non-nullable weight_type cannot be null');
        }
        $this->container['weight_type'] = $weight_type;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \OpenAPI\Client\Model\ProductconfiguratormatrixStep[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \OpenAPI\Client\Model\ProductconfiguratormatrixStep[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        if (is_null($steps)) {
            throw new \InvalidArgumentException('non-nullable steps cannot be null');
        }
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets properties_mode
     *
     * @return \OpenAPI\Client\Model\ProductconfiguratorPropertyMode|null
     */
    public function getPropertiesMode()
    {
        return $this->container['properties_mode'];
    }

    /**
     * Sets properties_mode
     *
     * @param \OpenAPI\Client\Model\ProductconfiguratorPropertyMode|null $properties_mode properties_mode
     *
     * @return self
     */
    public function setPropertiesMode($properties_mode)
    {
        if (is_null($properties_mode)) {
            throw new \InvalidArgumentException('non-nullable properties_mode cannot be null');
        }
        $this->container['properties_mode'] = $properties_mode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


