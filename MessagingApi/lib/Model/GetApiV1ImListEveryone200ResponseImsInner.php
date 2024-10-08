<?php
/**
 * GetApiV1ImListEveryone200ResponseImsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Messaging
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

namespace WebMI\RocketChatApiClient\MessagingApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\MessagingApi\ObjectSerializer;

/**
 * GetApiV1ImListEveryone200ResponseImsInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1ImListEveryone200ResponseImsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_im_list_everyone_200_response_ims_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        't' => 'string',
        'usernames' => 'string[]',
        'users_count' => 'int',
        'msgs' => 'int',
        'ts' => 'string',
        'uids' => 'string[]',
        'default' => 'bool',
        'ro' => 'bool',
        'sys_mes' => 'bool',
        '_updated_at' => 'string',
        '_usernames' => 'string[]',
        'last_message' => '\WebMI\RocketChatApiClient\MessagingApi\Model\GetApiV1ImListEveryone200ResponseImsInnerLastMessage',
        'lm' => 'string'
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
        't' => null,
        'usernames' => null,
        'users_count' => null,
        'msgs' => null,
        'ts' => null,
        'uids' => null,
        'default' => null,
        'ro' => null,
        'sys_mes' => null,
        '_updated_at' => null,
        '_usernames' => null,
        'last_message' => null,
        'lm' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        't' => false,
        'usernames' => false,
        'users_count' => false,
        'msgs' => false,
        'ts' => false,
        'uids' => false,
        'default' => false,
        'ro' => false,
        'sys_mes' => false,
        '_updated_at' => false,
        '_usernames' => false,
        'last_message' => false,
        'lm' => false
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
        't' => 't',
        'usernames' => 'usernames',
        'users_count' => 'usersCount',
        'msgs' => 'msgs',
        'ts' => 'ts',
        'uids' => 'uids',
        'default' => 'default',
        'ro' => 'ro',
        'sys_mes' => 'sysMes',
        '_updated_at' => '_updatedAt',
        '_usernames' => '_USERNAMES',
        'last_message' => 'lastMessage',
        'lm' => 'lm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        't' => 'set_t',
        'usernames' => 'set_usernames',
        'users_count' => 'set_users_count',
        'msgs' => 'set_msgs',
        'ts' => 'set_ts',
        'uids' => 'set_uids',
        'default' => 'set_default',
        'ro' => 'set_ro',
        'sys_mes' => 'set_sys_mes',
        '_updated_at' => 'set__updated_at',
        '_usernames' => 'set__usernames',
        'last_message' => 'set_last_message',
        'lm' => 'set_lm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        't' => 'get_t',
        'usernames' => 'get_usernames',
        'users_count' => 'get_users_count',
        'msgs' => 'get_msgs',
        'ts' => 'get_ts',
        'uids' => 'get_uids',
        'default' => 'get_default',
        'ro' => 'get_ro',
        'sys_mes' => 'get_sys_mes',
        '_updated_at' => 'get__updated_at',
        '_usernames' => 'get__usernames',
        'last_message' => 'get_last_message',
        'lm' => 'get_lm'
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
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('usernames', $data ?? [], null);
        $this->setIfExists('users_count', $data ?? [], null);
        $this->setIfExists('msgs', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('uids', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('ro', $data ?? [], null);
        $this->setIfExists('sys_mes', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('_usernames', $data ?? [], null);
        $this->setIfExists('last_message', $data ?? [], null);
        $this->setIfExists('lm', $data ?? [], null);
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
     * Gets t
     *
     * @return string|null
     */
    public function get_t()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param string|null $t t
     *
     * @return self
     */
    public function set_t($t)
    {
        if (is_null($t)) {
            throw new \InvalidArgumentException('non-nullable t cannot be null');
        }
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets usernames
     *
     * @return string[]|null
     */
    public function get_usernames()
    {
        return $this->container['usernames'];
    }

    /**
     * Sets usernames
     *
     * @param string[]|null $usernames usernames
     *
     * @return self
     */
    public function set_usernames($usernames)
    {
        if (is_null($usernames)) {
            throw new \InvalidArgumentException('non-nullable usernames cannot be null');
        }
        $this->container['usernames'] = $usernames;

        return $this;
    }

    /**
     * Gets users_count
     *
     * @return int|null
     */
    public function get_users_count()
    {
        return $this->container['users_count'];
    }

    /**
     * Sets users_count
     *
     * @param int|null $users_count users_count
     *
     * @return self
     */
    public function set_users_count($users_count)
    {
        if (is_null($users_count)) {
            throw new \InvalidArgumentException('non-nullable users_count cannot be null');
        }
        $this->container['users_count'] = $users_count;

        return $this;
    }

    /**
     * Gets msgs
     *
     * @return int|null
     */
    public function get_msgs()
    {
        return $this->container['msgs'];
    }

    /**
     * Sets msgs
     *
     * @param int|null $msgs msgs
     *
     * @return self
     */
    public function set_msgs($msgs)
    {
        if (is_null($msgs)) {
            throw new \InvalidArgumentException('non-nullable msgs cannot be null');
        }
        $this->container['msgs'] = $msgs;

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
     * Gets uids
     *
     * @return string[]|null
     */
    public function get_uids()
    {
        return $this->container['uids'];
    }

    /**
     * Sets uids
     *
     * @param string[]|null $uids uids
     *
     * @return self
     */
    public function set_uids($uids)
    {
        if (is_null($uids)) {
            throw new \InvalidArgumentException('non-nullable uids cannot be null');
        }
        $this->container['uids'] = $uids;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function get_default()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return self
     */
    public function set_default($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets ro
     *
     * @return bool|null
     */
    public function get_ro()
    {
        return $this->container['ro'];
    }

    /**
     * Sets ro
     *
     * @param bool|null $ro ro
     *
     * @return self
     */
    public function set_ro($ro)
    {
        if (is_null($ro)) {
            throw new \InvalidArgumentException('non-nullable ro cannot be null');
        }
        $this->container['ro'] = $ro;

        return $this;
    }

    /**
     * Gets sys_mes
     *
     * @return bool|null
     */
    public function get_sys_mes()
    {
        return $this->container['sys_mes'];
    }

    /**
     * Sets sys_mes
     *
     * @param bool|null $sys_mes sys_mes
     *
     * @return self
     */
    public function set_sys_mes($sys_mes)
    {
        if (is_null($sys_mes)) {
            throw new \InvalidArgumentException('non-nullable sys_mes cannot be null');
        }
        $this->container['sys_mes'] = $sys_mes;

        return $this;
    }

    /**
     * Gets _updated_at
     *
     * @return string|null
     */
    public function get__updated_at()
    {
        return $this->container['_updated_at'];
    }

    /**
     * Sets _updated_at
     *
     * @param string|null $_updated_at _updated_at
     *
     * @return self
     */
    public function set__updated_at($_updated_at)
    {
        if (is_null($_updated_at)) {
            throw new \InvalidArgumentException('non-nullable _updated_at cannot be null');
        }
        $this->container['_updated_at'] = $_updated_at;

        return $this;
    }

    /**
     * Gets _usernames
     *
     * @return string[]|null
     */
    public function get__usernames()
    {
        return $this->container['_usernames'];
    }

    /**
     * Sets _usernames
     *
     * @param string[]|null $_usernames _usernames
     *
     * @return self
     */
    public function set__usernames($_usernames)
    {
        if (is_null($_usernames)) {
            throw new \InvalidArgumentException('non-nullable _usernames cannot be null');
        }
        $this->container['_usernames'] = $_usernames;

        return $this;
    }

    /**
     * Gets last_message
     *
     * @return \WebMI\RocketChatApiClient\MessagingApi\Model\GetApiV1ImListEveryone200ResponseImsInnerLastMessage|null
     */
    public function get_last_message()
    {
        return $this->container['last_message'];
    }

    /**
     * Sets last_message
     *
     * @param \WebMI\RocketChatApiClient\MessagingApi\Model\GetApiV1ImListEveryone200ResponseImsInnerLastMessage|null $last_message last_message
     *
     * @return self
     */
    public function set_last_message($last_message)
    {
        if (is_null($last_message)) {
            throw new \InvalidArgumentException('non-nullable last_message cannot be null');
        }
        $this->container['last_message'] = $last_message;

        return $this;
    }

    /**
     * Gets lm
     *
     * @return string|null
     */
    public function get_lm()
    {
        return $this->container['lm'];
    }

    /**
     * Sets lm
     *
     * @param string|null $lm lm
     *
     * @return self
     */
    public function set_lm($lm)
    {
        if (is_null($lm)) {
            throw new \InvalidArgumentException('non-nullable lm cannot be null');
        }
        $this->container['lm'] = $lm;

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


