<?php
/**
 * ProductconfiguratorstepEntity
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
 * ProductconfiguratorstepEntity Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductconfiguratorstepEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'productconfiguratorstepEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'grn' => 'string',
        'label' => '\OpenAPI\Client\Model\LocalisationLocalizedText',
        'description' => '\OpenAPI\Client\Model\LocalisationLocalizedText',
        'subject_to_step_id' => 'string',
        'position' => 'string',
        'is_required' => 'bool',
        'options' => '\OpenAPI\Client\Model\ProductconfiguratoroptionEntity[]',
        'has_multiple_selection' => 'bool',
        'options_have_quantity' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'grn' => null,
        'label' => null,
        'description' => null,
        'subject_to_step_id' => null,
        'position' => 'uint64',
        'is_required' => null,
        'options' => null,
        'has_multiple_selection' => null,
        'options_have_quantity' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'grn' => false,
		'label' => false,
		'description' => false,
		'subject_to_step_id' => false,
		'position' => false,
		'is_required' => false,
		'options' => false,
		'has_multiple_selection' => false,
		'options_have_quantity' => false,
		'created_at' => false,
		'updated_at' => false
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
        'id' => 'id',
        'grn' => 'grn',
        'label' => 'label',
        'description' => 'description',
        'subject_to_step_id' => 'subjectToStepId',
        'position' => 'position',
        'is_required' => 'isRequired',
        'options' => 'options',
        'has_multiple_selection' => 'hasMultipleSelection',
        'options_have_quantity' => 'optionsHaveQuantity',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'grn' => 'setGrn',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'subject_to_step_id' => 'setSubjectToStepId',
        'position' => 'setPosition',
        'is_required' => 'setIsRequired',
        'options' => 'setOptions',
        'has_multiple_selection' => 'setHasMultipleSelection',
        'options_have_quantity' => 'setOptionsHaveQuantity',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'grn' => 'getGrn',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'subject_to_step_id' => 'getSubjectToStepId',
        'position' => 'getPosition',
        'is_required' => 'getIsRequired',
        'options' => 'getOptions',
        'has_multiple_selection' => 'getHasMultipleSelection',
        'options_have_quantity' => 'getOptionsHaveQuantity',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('grn', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('subject_to_step_id', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('is_required', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('has_multiple_selection', $data ?? [], null);
        $this->setIfExists('options_have_quantity', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets grn
     *
     * @return string|null
     */
    public function getGrn()
    {
        return $this->container['grn'];
    }

    /**
     * Sets grn
     *
     * @param string|null $grn grn
     *
     * @return self
     */
    public function setGrn($grn)
    {
        if (is_null($grn)) {
            throw new \InvalidArgumentException('non-nullable grn cannot be null');
        }
        $this->container['grn'] = $grn;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \OpenAPI\Client\Model\LocalisationLocalizedText|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \OpenAPI\Client\Model\LocalisationLocalizedText|null $label label
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
     * Gets description
     *
     * @return \OpenAPI\Client\Model\LocalisationLocalizedText|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\Client\Model\LocalisationLocalizedText|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets subject_to_step_id
     *
     * @return string|null
     */
    public function getSubjectToStepId()
    {
        return $this->container['subject_to_step_id'];
    }

    /**
     * Sets subject_to_step_id
     *
     * @param string|null $subject_to_step_id subject_to_step_id
     *
     * @return self
     */
    public function setSubjectToStepId($subject_to_step_id)
    {
        if (is_null($subject_to_step_id)) {
            throw new \InvalidArgumentException('non-nullable subject_to_step_id cannot be null');
        }
        $this->container['subject_to_step_id'] = $subject_to_step_id;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool|null $is_required is_required
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {
        if (is_null($is_required)) {
            throw new \InvalidArgumentException('non-nullable is_required cannot be null');
        }
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \OpenAPI\Client\Model\ProductconfiguratoroptionEntity[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \OpenAPI\Client\Model\ProductconfiguratoroptionEntity[]|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets has_multiple_selection
     *
     * @return bool|null
     */
    public function getHasMultipleSelection()
    {
        return $this->container['has_multiple_selection'];
    }

    /**
     * Sets has_multiple_selection
     *
     * @param bool|null $has_multiple_selection has_multiple_selection
     *
     * @return self
     */
    public function setHasMultipleSelection($has_multiple_selection)
    {
        if (is_null($has_multiple_selection)) {
            throw new \InvalidArgumentException('non-nullable has_multiple_selection cannot be null');
        }
        $this->container['has_multiple_selection'] = $has_multiple_selection;

        return $this;
    }

    /**
     * Gets options_have_quantity
     *
     * @return bool|null
     */
    public function getOptionsHaveQuantity()
    {
        return $this->container['options_have_quantity'];
    }

    /**
     * Sets options_have_quantity
     *
     * @param bool|null $options_have_quantity options_have_quantity
     *
     * @return self
     */
    public function setOptionsHaveQuantity($options_have_quantity)
    {
        if (is_null($options_have_quantity)) {
            throw new \InvalidArgumentException('non-nullable options_have_quantity cannot be null');
        }
        $this->container['options_have_quantity'] = $options_have_quantity;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


