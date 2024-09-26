<?php
/**
 * PostApiV1ChannelsSetReadOnly200ResponseChannel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMIRocketChatApiClientRoomsApi
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

namespace WebMIRocketChatApiClientRoomsApi\Model;

use \ArrayAccess;
use \WebMIRocketChatApiClientRoomsApi\ObjectSerializer;

/**
 * PostApiV1ChannelsSetReadOnly200ResponseChannel Class Doc Comment
 *
 * @category Class
 * @package  WebMIRocketChatApiClientRoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1ChannelsSetReadOnly200ResponseChannel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_channels_setReadOnly_200_response_channel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'name' => 'string',
        't' => 'string',
        'msgs' => 'int',
        'u' => '\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU',
        'ts' => 'string',
        'ro' => 'bool',
        'sys_mes' => 'bool',
        '_updated_at' => 'string',
        'usernames' => 'string[]',
        'join_code_required' => 'bool',
        'muted' => 'object[]'
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
        't' => null,
        'msgs' => null,
        'u' => null,
        'ts' => null,
        'ro' => null,
        'sys_mes' => null,
        '_updated_at' => null,
        'usernames' => null,
        'join_code_required' => null,
        'muted' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'name' => false,
        't' => false,
        'msgs' => false,
        'u' => false,
        'ts' => false,
        'ro' => false,
        'sys_mes' => false,
        '_updated_at' => false,
        'usernames' => false,
        'join_code_required' => false,
        'muted' => false
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
        't' => 't',
        'msgs' => 'msgs',
        'u' => 'u',
        'ts' => 'ts',
        'ro' => 'ro',
        'sys_mes' => 'sysMes',
        '_updated_at' => '_updatedAt',
        'usernames' => 'usernames',
        'join_code_required' => 'joinCodeRequired',
        'muted' => 'muted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'name' => 'setName',
        't' => 'setT',
        'msgs' => 'setMsgs',
        'u' => 'setU',
        'ts' => 'setTs',
        'ro' => 'setRo',
        'sys_mes' => 'setSysMes',
        '_updated_at' => 'setUpdatedAt',
        'usernames' => 'setUsernames',
        'join_code_required' => 'setJoinCodeRequired',
        'muted' => 'setMuted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'name' => 'getName',
        't' => 'getT',
        'msgs' => 'getMsgs',
        'u' => 'getU',
        'ts' => 'getTs',
        'ro' => 'getRo',
        'sys_mes' => 'getSysMes',
        '_updated_at' => 'getUpdatedAt',
        'usernames' => 'getUsernames',
        'join_code_required' => 'getJoinCodeRequired',
        'muted' => 'getMuted'
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
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('msgs', $data ?? [], null);
        $this->setIfExists('u', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('ro', $data ?? [], null);
        $this->setIfExists('sys_mes', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('usernames', $data ?? [], null);
        $this->setIfExists('join_code_required', $data ?? [], null);
        $this->setIfExists('muted', $data ?? [], null);
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
    public function getId()
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
    public function setId($_id)
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
    public function getName()
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
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets t
     *
     * @return string|null
     */
    public function getT()
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
    public function setT($t)
    {
        if (is_null($t)) {
            throw new \InvalidArgumentException('non-nullable t cannot be null');
        }
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets msgs
     *
     * @return int|null
     */
    public function getMsgs()
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
    public function setMsgs($msgs)
    {
        if (is_null($msgs)) {
            throw new \InvalidArgumentException('non-nullable msgs cannot be null');
        }
        $this->container['msgs'] = $msgs;

        return $this;
    }

    /**
     * Gets u
     *
     * @return \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU|null
     */
    public function getU()
    {
        return $this->container['u'];
    }

    /**
     * Sets u
     *
     * @param \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU|null $u u
     *
     * @return self
     */
    public function setU($u)
    {
        if (is_null($u)) {
            throw new \InvalidArgumentException('non-nullable u cannot be null');
        }
        $this->container['u'] = $u;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return string|null
     */
    public function getTs()
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
    public function setTs($ts)
    {
        if (is_null($ts)) {
            throw new \InvalidArgumentException('non-nullable ts cannot be null');
        }
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets ro
     *
     * @return bool|null
     */
    public function getRo()
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
    public function setRo($ro)
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
    public function getSysMes()
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
    public function setSysMes($sys_mes)
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
    public function getUpdatedAt()
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
    public function setUpdatedAt($_updated_at)
    {
        if (is_null($_updated_at)) {
            throw new \InvalidArgumentException('non-nullable _updated_at cannot be null');
        }
        $this->container['_updated_at'] = $_updated_at;

        return $this;
    }

    /**
     * Gets usernames
     *
     * @return string[]|null
     */
    public function getUsernames()
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
    public function setUsernames($usernames)
    {
        if (is_null($usernames)) {
            throw new \InvalidArgumentException('non-nullable usernames cannot be null');
        }
        $this->container['usernames'] = $usernames;

        return $this;
    }

    /**
     * Gets join_code_required
     *
     * @return bool|null
     */
    public function getJoinCodeRequired()
    {
        return $this->container['join_code_required'];
    }

    /**
     * Sets join_code_required
     *
     * @param bool|null $join_code_required join_code_required
     *
     * @return self
     */
    public function setJoinCodeRequired($join_code_required)
    {
        if (is_null($join_code_required)) {
            throw new \InvalidArgumentException('non-nullable join_code_required cannot be null');
        }
        $this->container['join_code_required'] = $join_code_required;

        return $this;
    }

    /**
     * Gets muted
     *
     * @return object[]|null
     */
    public function getMuted()
    {
        return $this->container['muted'];
    }

    /**
     * Sets muted
     *
     * @param object[]|null $muted muted
     *
     * @return self
     */
    public function setMuted($muted)
    {
        if (is_null($muted)) {
            throw new \InvalidArgumentException('non-nullable muted cannot be null');
        }
        $this->container['muted'] = $muted;

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


