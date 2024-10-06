<?php
/**
 * PostApiV1Login200ResponseDataMe
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\AuthenticationApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Authentication
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

namespace WebMI\RocketChatApiClient\AuthenticationApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\AuthenticationApi\ObjectSerializer;

/**
 * PostApiV1Login200ResponseDataMe Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\AuthenticationApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1Login200ResponseDataMe implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_login_200_response_data_me';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'name' => 'string',
        'emails' => '\WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Login200ResponseDataMeEmailsInner[]',
        'status' => 'string',
        'status_connection' => 'string',
        'username' => 'string',
        'utc_offset' => 'int',
        'active' => 'bool',
        'roles' => 'string[]',
        'settings' => '\WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Login200ResponseDataMeSettings',
        'avatar_url' => 'string'
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
        'name' => null,
        'emails' => null,
        'status' => null,
        'status_connection' => null,
        'username' => null,
        'utc_offset' => null,
        'active' => null,
        'roles' => null,
        'settings' => null,
        'avatar_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'name' => false,
        'emails' => false,
        'status' => false,
        'status_connection' => false,
        'username' => false,
        'utc_offset' => false,
        'active' => false,
        'roles' => false,
        'settings' => false,
        'avatar_url' => false
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
        'name' => 'name',
        'emails' => 'emails',
        'status' => 'status',
        'status_connection' => 'statusConnection',
        'username' => 'username',
        'utc_offset' => 'utcOffset',
        'active' => 'active',
        'roles' => 'roles',
        'settings' => 'settings',
        'avatar_url' => 'avatarUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'name' => 'set_name',
        'emails' => 'set_emails',
        'status' => 'set_status',
        'status_connection' => 'set_status_connection',
        'username' => 'set_username',
        'utc_offset' => 'set_utc_offset',
        'active' => 'set_active',
        'roles' => 'set_roles',
        'settings' => 'set_settings',
        'avatar_url' => 'set_avatar_url'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'name' => 'get_name',
        'emails' => 'get_emails',
        'status' => 'get_status',
        'status_connection' => 'get_status_connection',
        'username' => 'get_username',
        'utc_offset' => 'get_utc_offset',
        'active' => 'get_active',
        'roles' => 'get_roles',
        'settings' => 'get_settings',
        'avatar_url' => 'get_avatar_url'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('emails', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_connection', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('utc_offset', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
        $this->setIfExists('avatar_url', $data ?? [], null);
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
     * Gets emails
     *
     * @return \WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Login200ResponseDataMeEmailsInner[]|null
     */
    public function get_emails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Login200ResponseDataMeEmailsInner[]|null $emails emails
     *
     * @return self
     */
    public function set_emails($emails)
    {
        if (is_null($emails)) {
            throw new \InvalidArgumentException('non-nullable emails cannot be null');
        }
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function get_status()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function set_status($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_connection
     *
     * @return string|null
     */
    public function get_status_connection()
    {
        return $this->container['status_connection'];
    }

    /**
     * Sets status_connection
     *
     * @param string|null $status_connection status_connection
     *
     * @return self
     */
    public function set_status_connection($status_connection)
    {
        if (is_null($status_connection)) {
            throw new \InvalidArgumentException('non-nullable status_connection cannot be null');
        }
        $this->container['status_connection'] = $status_connection;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function get_username()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function set_username($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets utc_offset
     *
     * @return int|null
     */
    public function get_utc_offset()
    {
        return $this->container['utc_offset'];
    }

    /**
     * Sets utc_offset
     *
     * @param int|null $utc_offset utc_offset
     *
     * @return self
     */
    public function set_utc_offset($utc_offset)
    {
        if (is_null($utc_offset)) {
            throw new \InvalidArgumentException('non-nullable utc_offset cannot be null');
        }
        $this->container['utc_offset'] = $utc_offset;

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
     * Gets roles
     *
     * @return string[]|null
     */
    public function get_roles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles roles
     *
     * @return self
     */
    public function set_roles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Login200ResponseDataMeSettings|null
     */
    public function get_settings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Login200ResponseDataMeSettings|null $settings settings
     *
     * @return self
     */
    public function set_settings($settings)
    {
        if (is_null($settings)) {
            throw new \InvalidArgumentException('non-nullable settings cannot be null');
        }
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string|null
     */
    public function get_avatar_url()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string|null $avatar_url avatar_url
     *
     * @return self
     */
    public function set_avatar_url($avatar_url)
    {
        if (is_null($avatar_url)) {
            throw new \InvalidArgumentException('non-nullable avatar_url cannot be null');
        }
        $this->container['avatar_url'] = $avatar_url;

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


