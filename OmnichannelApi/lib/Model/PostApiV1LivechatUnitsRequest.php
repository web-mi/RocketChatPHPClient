<?php
/**
 * PostApiV1LivechatUnitsRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Omnichannel
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WebMI\RocketChatApiClient\OmnichannelApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\OmnichannelApi\ObjectSerializer;

/**
 * PostApiV1LivechatUnitsRequest Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1LivechatUnitsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_livechat_units_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unit_data' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitData',
        'unit_monitors' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitMonitorsInner[]',
        'unit_departments' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitDepartmentsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'unit_data' => null,
        'unit_monitors' => null,
        'unit_departments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'unit_data' => false,
        'unit_monitors' => false,
        'unit_departments' => false
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
        'unit_data' => 'unitData',
        'unit_monitors' => 'unitMonitors',
        'unit_departments' => 'unitDepartments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_data' => 'setUnitData',
        'unit_monitors' => 'setUnitMonitors',
        'unit_departments' => 'setUnitDepartments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_data' => 'getUnitData',
        'unit_monitors' => 'getUnitMonitors',
        'unit_departments' => 'getUnitDepartments'
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
        $this->setIfExists('unit_data', $data ?? [], null);
        $this->setIfExists('unit_monitors', $data ?? [], null);
        $this->setIfExists('unit_departments', $data ?? [], null);
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

        if ($this->container['unit_data'] === null) {
            $invalidProperties[] = "'unit_data' can't be null";
        }
        if ($this->container['unit_monitors'] === null) {
            $invalidProperties[] = "'unit_monitors' can't be null";
        }
        if ($this->container['unit_departments'] === null) {
            $invalidProperties[] = "'unit_departments' can't be null";
        }
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
     * Gets unit_data
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitData
     */
    public function getUnitData()
    {
        return $this->container['unit_data'];
    }

    /**
     * Sets unit_data
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitData $unit_data unit_data
     *
     * @return self
     */
    public function setUnitData($unit_data)
    {
        if (is_null($unit_data)) {
            throw new \InvalidArgumentException('non-nullable unit_data cannot be null');
        }
        $this->container['unit_data'] = $unit_data;

        return $this;
    }

    /**
     * Gets unit_monitors
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitMonitorsInner[]
     */
    public function getUnitMonitors()
    {
        return $this->container['unit_monitors'];
    }

    /**
     * Sets unit_monitors
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitMonitorsInner[] $unit_monitors The object containing the unit monitors information.
     *
     * @return self
     */
    public function setUnitMonitors($unit_monitors)
    {
        if (is_null($unit_monitors)) {
            throw new \InvalidArgumentException('non-nullable unit_monitors cannot be null');
        }
        $this->container['unit_monitors'] = $unit_monitors;

        return $this;
    }

    /**
     * Gets unit_departments
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitDepartmentsInner[]
     */
    public function getUnitDepartments()
    {
        return $this->container['unit_departments'];
    }

    /**
     * Sets unit_departments
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequestUnitDepartmentsInner[] $unit_departments The object containing the department information.
     *
     * @return self
     */
    public function setUnitDepartments($unit_departments)
    {
        if (is_null($unit_departments)) {
            throw new \InvalidArgumentException('non-nullable unit_departments cannot be null');
        }
        $this->container['unit_departments'] = $unit_departments;

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


