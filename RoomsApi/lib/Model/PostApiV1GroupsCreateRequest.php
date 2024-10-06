<?php
/**
 * PostApiV1GroupsCreateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rooms
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

namespace WebMI\RocketChatApiClient\RoomsApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\RoomsApi\ObjectSerializer;

/**
 * PostApiV1GroupsCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1GroupsCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_groups_create_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'read_only' => 'bool',
        'members' => 'string[]',
        'exclude_self' => 'bool',
        'name' => 'string',
        'custom_fields' => 'object',
        'extra_data' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'read_only' => null,
        'members' => null,
        'exclude_self' => null,
        'name' => null,
        'custom_fields' => null,
        'extra_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'read_only' => false,
        'members' => false,
        'exclude_self' => false,
        'name' => false,
        'custom_fields' => false,
        'extra_data' => false
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
        'read_only' => 'readOnly',
        'members' => 'members',
        'exclude_self' => 'excludeSelf',
        'name' => 'name',
        'custom_fields' => 'customFields',
        'extra_data' => 'extraData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'read_only' => 'set_read_only',
        'members' => 'set_members',
        'exclude_self' => 'set_exclude_self',
        'name' => 'set_name',
        'custom_fields' => 'set_custom_fields',
        'extra_data' => 'set_extra_data'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'read_only' => 'get_read_only',
        'members' => 'get_members',
        'exclude_self' => 'get_exclude_self',
        'name' => 'get_name',
        'custom_fields' => 'get_custom_fields',
        'extra_data' => 'get_extra_data'
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
        $this->setIfExists('read_only', $data ?? [], null);
        $this->setIfExists('members', $data ?? [], null);
        $this->setIfExists('exclude_self', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('extra_data', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets read_only
     *
     * @return bool|null
     */
    public function get_read_only()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool|null $read_only Set if the group is read only or not. The default value is false.
     *
     * @return self
     */
    public function set_read_only($read_only)
    {
        if (is_null($read_only)) {
            throw new \InvalidArgumentException('non-nullable read_only cannot be null');
        }
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets members
     *
     * @return string[]|null
     */
    public function get_members()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     *
     * @param string[]|null $members The users to add to the group when it is created.
     *
     * @return self
     */
    public function set_members($members)
    {
        if (is_null($members)) {
            throw new \InvalidArgumentException('non-nullable members cannot be null');
        }
        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets exclude_self
     *
     * @return bool|null
     */
    public function get_exclude_self()
    {
        return $this->container['exclude_self'];
    }

    /**
     * Sets exclude_self
     *
     * @param bool|null $exclude_self If set to true the user calling the endpoint is not automatically added as a member of the group. The default value is false.
     *
     * @return self
     */
    public function set_exclude_self($exclude_self)
    {
        if (is_null($exclude_self)) {
            throw new \InvalidArgumentException('non-nullable exclude_self cannot be null');
        }
        $this->container['exclude_self'] = $exclude_self;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function get_name()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the new private group.
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
     * Gets custom_fields
     *
     * @return object|null
     */
    public function get_custom_fields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object|null $custom_fields If you have defined custom fields for your workspace, you can provide them in this object parameter.
     *
     * @return self
     */
    public function set_custom_fields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets extra_data
     *
     * @return object|null
     */
    public function get_extra_data()
    {
        return $this->container['extra_data'];
    }

    /**
     * Sets extra_data
     *
     * @param object|null $extra_data Enter the following details for the object: - `broadcast`: Whether the group should be a broadcast group - `encrypted`: Whether the group should be encrypted.  - `teamId`: Enter the team ID for which you want to create a group.  For more information, see <a href=\"https://docs.rocket.chat/use-rocket.chat/user-guides/rooms/channels#channel-privacy-and-encryption\" target=\"_blank\">Channels</a>.
     *
     * @return self
     */
    public function set_extra_data($extra_data)
    {
        if (is_null($extra_data)) {
            throw new \InvalidArgumentException('non-nullable extra_data cannot be null');
        }
        $this->container['extra_data'] = $extra_data;

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


