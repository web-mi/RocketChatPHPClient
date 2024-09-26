<?php
/**
 * GetApiV1TeamsListChildren200ResponseDataInnerLastMessage
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
 * GetApiV1TeamsListChildren200ResponseDataInnerLastMessage Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1TeamsListChildren200ResponseDataInnerLastMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_teams_listChildren_200_response_data_inner_lastMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'rid' => 'string',
        'msg' => 'string',
        'ts' => 'string',
        'u' => '\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate200ResponseChannelU',
        '_updated_at' => 'string',
        'urls' => 'object[]',
        'mentions' => 'object[]',
        'channels' => 'object[]',
        'md' => '\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelLastMessageMdInner[]'
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
        'rid' => null,
        'msg' => null,
        'ts' => null,
        'u' => null,
        '_updated_at' => null,
        'urls' => null,
        'mentions' => null,
        'channels' => null,
        'md' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'rid' => false,
        'msg' => false,
        'ts' => false,
        'u' => false,
        '_updated_at' => false,
        'urls' => false,
        'mentions' => false,
        'channels' => false,
        'md' => false
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
        'rid' => 'rid',
        'msg' => 'msg',
        'ts' => 'ts',
        'u' => 'u',
        '_updated_at' => '_updatedAt',
        'urls' => 'urls',
        'mentions' => 'mentions',
        'channels' => 'channels',
        'md' => 'md'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'rid' => 'setRid',
        'msg' => 'setMsg',
        'ts' => 'setTs',
        'u' => 'setU',
        '_updated_at' => 'setUpdatedAt',
        'urls' => 'setUrls',
        'mentions' => 'setMentions',
        'channels' => 'setChannels',
        'md' => 'setMd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'rid' => 'getRid',
        'msg' => 'getMsg',
        'ts' => 'getTs',
        'u' => 'getU',
        '_updated_at' => 'getUpdatedAt',
        'urls' => 'getUrls',
        'mentions' => 'getMentions',
        'channels' => 'getChannels',
        'md' => 'getMd'
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
        $this->setIfExists('rid', $data ?? [], null);
        $this->setIfExists('msg', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('u', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('urls', $data ?? [], null);
        $this->setIfExists('mentions', $data ?? [], null);
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('md', $data ?? [], null);
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
     * Gets rid
     *
     * @return string|null
     */
    public function getRid()
    {
        return $this->container['rid'];
    }

    /**
     * Sets rid
     *
     * @param string|null $rid rid
     *
     * @return self
     */
    public function setRid($rid)
    {
        if (is_null($rid)) {
            throw new \InvalidArgumentException('non-nullable rid cannot be null');
        }
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string|null
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string|null $msg msg
     *
     * @return self
     */
    public function setMsg($msg)
    {
        if (is_null($msg)) {
            throw new \InvalidArgumentException('non-nullable msg cannot be null');
        }
        $this->container['msg'] = $msg;

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
     * Gets u
     *
     * @return \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate200ResponseChannelU|null
     */
    public function getU()
    {
        return $this->container['u'];
    }

    /**
     * Sets u
     *
     * @param \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate200ResponseChannelU|null $u u
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
     * Gets urls
     *
     * @return object[]|null
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param object[]|null $urls urls
     *
     * @return self
     */
    public function setUrls($urls)
    {
        if (is_null($urls)) {
            throw new \InvalidArgumentException('non-nullable urls cannot be null');
        }
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets mentions
     *
     * @return object[]|null
     */
    public function getMentions()
    {
        return $this->container['mentions'];
    }

    /**
     * Sets mentions
     *
     * @param object[]|null $mentions mentions
     *
     * @return self
     */
    public function setMentions($mentions)
    {
        if (is_null($mentions)) {
            throw new \InvalidArgumentException('non-nullable mentions cannot be null');
        }
        $this->container['mentions'] = $mentions;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return object[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param object[]|null $channels channels
     *
     * @return self
     */
    public function setChannels($channels)
    {
        if (is_null($channels)) {
            throw new \InvalidArgumentException('non-nullable channels cannot be null');
        }
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets md
     *
     * @return \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelLastMessageMdInner[]|null
     */
    public function getMd()
    {
        return $this->container['md'];
    }

    /**
     * Sets md
     *
     * @param \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelLastMessageMdInner[]|null $md md
     *
     * @return self
     */
    public function setMd($md)
    {
        if (is_null($md)) {
            throw new \InvalidArgumentException('non-nullable md cannot be null');
        }
        $this->container['md'] = $md;

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


