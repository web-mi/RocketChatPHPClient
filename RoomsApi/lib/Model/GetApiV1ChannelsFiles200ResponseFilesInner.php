<?php
/**
 * GetApiV1ChannelsFiles200ResponseFilesInner
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
 * GetApiV1ChannelsFiles200ResponseFilesInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1ChannelsFiles200ResponseFilesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_channels_files_200_response_files_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'name' => 'string',
        'size' => 'int',
        'type' => 'string',
        'rid' => 'string',
        'user_id' => 'string',
        'store' => 'string',
        '_updated_at' => 'string',
        'identify' => '\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1ChannelsFiles200ResponseFilesInnerIdentify',
        'complete' => 'bool',
        'etag' => 'string',
        'path' => 'string',
        'progress' => 'int',
        'token' => 'string',
        'uploaded_at' => 'string',
        'uploading' => 'bool',
        'url' => 'string',
        'type_group' => 'string',
        'user' => '\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate200ResponseChannelU'
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
        'size' => null,
        'type' => null,
        'rid' => null,
        'user_id' => null,
        'store' => null,
        '_updated_at' => null,
        'identify' => null,
        'complete' => null,
        'etag' => null,
        'path' => null,
        'progress' => null,
        'token' => null,
        'uploaded_at' => null,
        'uploading' => null,
        'url' => null,
        'type_group' => null,
        'user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'name' => false,
        'size' => false,
        'type' => false,
        'rid' => false,
        'user_id' => false,
        'store' => false,
        '_updated_at' => false,
        'identify' => false,
        'complete' => false,
        'etag' => false,
        'path' => false,
        'progress' => false,
        'token' => false,
        'uploaded_at' => false,
        'uploading' => false,
        'url' => false,
        'type_group' => false,
        'user' => false
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
        'size' => 'size',
        'type' => 'type',
        'rid' => 'rid',
        'user_id' => 'userId',
        'store' => 'store',
        '_updated_at' => '_updatedAt',
        'identify' => 'identify',
        'complete' => 'complete',
        'etag' => 'etag',
        'path' => 'path',
        'progress' => 'progress',
        'token' => 'token',
        'uploaded_at' => 'uploadedAt',
        'uploading' => 'uploading',
        'url' => 'url',
        'type_group' => 'typeGroup',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'name' => 'setName',
        'size' => 'setSize',
        'type' => 'setType',
        'rid' => 'setRid',
        'user_id' => 'setUserId',
        'store' => 'setStore',
        '_updated_at' => 'setUpdatedAt',
        'identify' => 'setIdentify',
        'complete' => 'setComplete',
        'etag' => 'setEtag',
        'path' => 'setPath',
        'progress' => 'setProgress',
        'token' => 'setToken',
        'uploaded_at' => 'setUploadedAt',
        'uploading' => 'setUploading',
        'url' => 'setUrl',
        'type_group' => 'setTypeGroup',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'name' => 'getName',
        'size' => 'getSize',
        'type' => 'getType',
        'rid' => 'getRid',
        'user_id' => 'getUserId',
        'store' => 'getStore',
        '_updated_at' => 'getUpdatedAt',
        'identify' => 'getIdentify',
        'complete' => 'getComplete',
        'etag' => 'getEtag',
        'path' => 'getPath',
        'progress' => 'getProgress',
        'token' => 'getToken',
        'uploaded_at' => 'getUploadedAt',
        'uploading' => 'getUploading',
        'url' => 'getUrl',
        'type_group' => 'getTypeGroup',
        'user' => 'getUser'
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
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('rid', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('store', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('identify', $data ?? [], null);
        $this->setIfExists('complete', $data ?? [], null);
        $this->setIfExists('etag', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('progress', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('uploaded_at', $data ?? [], null);
        $this->setIfExists('uploading', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('type_group', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
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
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
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
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets store
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     *
     * @param string|null $store store
     *
     * @return self
     */
    public function setStore($store)
    {
        if (is_null($store)) {
            throw new \InvalidArgumentException('non-nullable store cannot be null');
        }
        $this->container['store'] = $store;

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
     * Gets identify
     *
     * @return \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1ChannelsFiles200ResponseFilesInnerIdentify|null
     */
    public function getIdentify()
    {
        return $this->container['identify'];
    }

    /**
     * Sets identify
     *
     * @param \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1ChannelsFiles200ResponseFilesInnerIdentify|null $identify identify
     *
     * @return self
     */
    public function setIdentify($identify)
    {
        if (is_null($identify)) {
            throw new \InvalidArgumentException('non-nullable identify cannot be null');
        }
        $this->container['identify'] = $identify;

        return $this;
    }

    /**
     * Gets complete
     *
     * @return bool|null
     */
    public function getComplete()
    {
        return $this->container['complete'];
    }

    /**
     * Sets complete
     *
     * @param bool|null $complete complete
     *
     * @return self
     */
    public function setComplete($complete)
    {
        if (is_null($complete)) {
            throw new \InvalidArgumentException('non-nullable complete cannot be null');
        }
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets etag
     *
     * @return string|null
     */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
     * Sets etag
     *
     * @param string|null $etag etag
     *
     * @return self
     */
    public function setEtag($etag)
    {
        if (is_null($etag)) {
            throw new \InvalidArgumentException('non-nullable etag cannot be null');
        }
        $this->container['etag'] = $etag;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return int|null
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param int|null $progress progress
     *
     * @return self
     */
    public function setProgress($progress)
    {
        if (is_null($progress)) {
            throw new \InvalidArgumentException('non-nullable progress cannot be null');
        }
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets uploaded_at
     *
     * @return string|null
     */
    public function getUploadedAt()
    {
        return $this->container['uploaded_at'];
    }

    /**
     * Sets uploaded_at
     *
     * @param string|null $uploaded_at uploaded_at
     *
     * @return self
     */
    public function setUploadedAt($uploaded_at)
    {
        if (is_null($uploaded_at)) {
            throw new \InvalidArgumentException('non-nullable uploaded_at cannot be null');
        }
        $this->container['uploaded_at'] = $uploaded_at;

        return $this;
    }

    /**
     * Gets uploading
     *
     * @return bool|null
     */
    public function getUploading()
    {
        return $this->container['uploading'];
    }

    /**
     * Sets uploading
     *
     * @param bool|null $uploading uploading
     *
     * @return self
     */
    public function setUploading($uploading)
    {
        if (is_null($uploading)) {
            throw new \InvalidArgumentException('non-nullable uploading cannot be null');
        }
        $this->container['uploading'] = $uploading;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets type_group
     *
     * @return string|null
     */
    public function getTypeGroup()
    {
        return $this->container['type_group'];
    }

    /**
     * Sets type_group
     *
     * @param string|null $type_group type_group
     *
     * @return self
     */
    public function setTypeGroup($type_group)
    {
        if (is_null($type_group)) {
            throw new \InvalidArgumentException('non-nullable type_group cannot be null');
        }
        $this->container['type_group'] = $type_group;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate200ResponseChannelU|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate200ResponseChannelU|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

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


