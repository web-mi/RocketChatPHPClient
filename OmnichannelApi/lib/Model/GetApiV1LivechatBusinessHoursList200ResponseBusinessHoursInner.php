<?php
/**
 * GetApiV1LivechatBusinessHoursList200ResponseBusinessHoursInner
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
 * GetApiV1LivechatBusinessHoursList200ResponseBusinessHoursInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatBusinessHoursList200ResponseBusinessHoursInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_business_hours_list_200_response_businessHours_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'ts' => 'string',
        'name' => 'string',
        'active' => 'bool',
        'type' => 'string',
        'work_hours' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatBusinessHours200ResponseBusinessHoursInnerWorkHoursInner[]',
        'timezone' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatBusinessHours200ResponseBusinessHoursInnerTimezone',
        'departments_to_apply_business_hour' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_id' => null,
        'ts' => null,
        'name' => null,
        'active' => null,
        'type' => null,
        'work_hours' => null,
        'timezone' => null,
        'departments_to_apply_business_hour' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'ts' => false,
        'name' => false,
        'active' => false,
        'type' => false,
        'work_hours' => false,
        'timezone' => false,
        'departments_to_apply_business_hour' => false
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
        '_id' => '_id',
        'ts' => 'ts',
        'name' => 'name',
        'active' => 'active',
        'type' => 'type',
        'work_hours' => 'workHours',
        'timezone' => 'timezone',
        'departments_to_apply_business_hour' => 'departmentsToApplyBusinessHour'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'ts' => 'set_ts',
        'name' => 'set_name',
        'active' => 'set_active',
        'type' => 'set_type',
        'work_hours' => 'set_work_hours',
        'timezone' => 'set_timezone',
        'departments_to_apply_business_hour' => 'set_departments_to_apply_business_hour'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'ts' => 'get_ts',
        'name' => 'get_name',
        'active' => 'get_active',
        'type' => 'get_type',
        'work_hours' => 'get_work_hours',
        'timezone' => 'get_timezone',
        'departments_to_apply_business_hour' => 'get_departments_to_apply_business_hour'
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
        $this->setIfExists('_id', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('work_hours', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('departments_to_apply_business_hour', $data ?? [], null);
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
     * Gets _id
     *
     * @return string|null
     */
    public function get__id()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string|null $_id _id
     *
     * @return self
     */
    public function set__id($_id)
    {
        if (is_null($_id)) {
            throw new \InvalidArgumentException('non-nullable _id cannot be null');
        }
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return string|null
     */
    public function get_ts()
    {
        return $this->container['ts'];
    }

    /**
     * Sets ts
     *
     * @param string|null $ts ts
     *
     * @return self
     */
    public function set_ts($ts)
    {
        if (is_null($ts)) {
            throw new \InvalidArgumentException('non-nullable ts cannot be null');
        }
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function get_name()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function set_name($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function get_active()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function set_active($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function get_type()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function set_type($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets work_hours
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatBusinessHours200ResponseBusinessHoursInnerWorkHoursInner[]|null
     */
    public function get_work_hours()
    {
        return $this->container['work_hours'];
    }

    /**
     * Sets work_hours
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatBusinessHours200ResponseBusinessHoursInnerWorkHoursInner[]|null $work_hours work_hours
     *
     * @return self
     */
    public function set_work_hours($work_hours)
    {
        if (is_null($work_hours)) {
            throw new \InvalidArgumentException('non-nullable work_hours cannot be null');
        }
        $this->container['work_hours'] = $work_hours;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatBusinessHours200ResponseBusinessHoursInnerTimezone|null
     */
    public function get_timezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatBusinessHours200ResponseBusinessHoursInnerTimezone|null $timezone timezone
     *
     * @return self
     */
    public function set_timezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets departments_to_apply_business_hour
     *
     * @return string|null
     */
    public function get_departments_to_apply_business_hour()
    {
        return $this->container['departments_to_apply_business_hour'];
    }

    /**
     * Sets departments_to_apply_business_hour
     *
     * @param string|null $departments_to_apply_business_hour departments_to_apply_business_hour
     *
     * @return self
     */
    public function set_departments_to_apply_business_hour($departments_to_apply_business_hour)
    {
        if (is_null($departments_to_apply_business_hour)) {
            throw new \InvalidArgumentException('non-nullable departments_to_apply_business_hour cannot be null');
        }
        $this->container['departments_to_apply_business_hour'] = $departments_to_apply_business_hour;

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


