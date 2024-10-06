<?php
/**
 * GetApiV1GroupsFiles200ResponseFilesInner
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
 * GetApiV1GroupsFiles200ResponseFilesInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1GroupsFiles200ResponseFilesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_groups_files_200_response_files_inner';

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
        'description' => 'string',
        'store' => 'string',
        'complete' => 'bool',
        'uploading' => 'bool',
        'extension' => 'string',
        'progress' => 'int',
        'user' => '\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate200ResponseChannelU',
        '_updated_at' => 'string',
        'instance_id' => 'string',
        'etag' => 'string',
        'path' => 'string',
        'token' => 'string',
        'uploaded_at' => 'string',
        'url' => 'string'
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
        'description' => null,
        'store' => null,
        'complete' => null,
        'uploading' => null,
        'extension' => null,
        'progress' => null,
        'user' => null,
        '_updated_at' => null,
        'instance_id' => null,
        'etag' => null,
        'path' => null,
        'token' => null,
        'uploaded_at' => null,
        'url' => null
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
        'description' => false,
        'store' => false,
        'complete' => false,
        'uploading' => false,
        'extension' => false,
        'progress' => false,
        'user' => false,
        '_updated_at' => false,
        'instance_id' => false,
        'etag' => false,
        'path' => false,
        'token' => false,
        'uploaded_at' => false,
        'url' => false
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
        'description' => 'description',
        'store' => 'store',
        'complete' => 'complete',
        'uploading' => 'uploading',
        'extension' => 'extension',
        'progress' => 'progress',
        'user' => 'user',
        '_updated_at' => '_updatedAt',
        'instance_id' => 'instanceId',
        'etag' => 'etag',
        'path' => 'path',
        'token' => 'token',
        'uploaded_at' => 'uploadedAt',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'name' => 'set_name',
        'size' => 'set_size',
        'type' => 'set_type',
        'rid' => 'set_rid',
        'description' => 'set_description',
        'store' => 'set_store',
        'complete' => 'set_complete',
        'uploading' => 'set_uploading',
        'extension' => 'set_extension',
        'progress' => 'set_progress',
        'user' => 'set_user',
        '_updated_at' => 'set__updated_at',
        'instance_id' => 'set_instance_id',
        'etag' => 'set_etag',
        'path' => 'set_path',
        'token' => 'set_token',
        'uploaded_at' => 'set_uploaded_at',
        'url' => 'set_url'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'name' => 'get_name',
        'size' => 'get_size',
        'type' => 'get_type',
        'rid' => 'get_rid',
        'description' => 'get_description',
        'store' => 'get_store',
        'complete' => 'get_complete',
        'uploading' => 'get_uploading',
        'extension' => 'get_extension',
        'progress' => 'get_progress',
        'user' => 'get_user',
        '_updated_at' => 'get__updated_at',
        'instance_id' => 'get_instance_id',
        'etag' => 'get_etag',
        'path' => 'get_path',
        'token' => 'get_token',
        'uploaded_at' => 'get_uploaded_at',
        'url' => 'get_url'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('store', $data ?? [], null);
        $this->setIfExists('complete', $data ?? [], null);
        $this->setIfExists('uploading', $data ?? [], null);
        $this->setIfExists('extension', $data ?? [], null);
        $this->setIfExists('progress', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('instance_id', $data ?? [], null);
        $this->setIfExists('etag', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('uploaded_at', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
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
     * Gets size
     *
     * @return int|null
     */
    public function get_size()
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
    public function set_size($size)
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
     * Gets rid
     *
     * @return string|null
     */
    public function get_rid()
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
    public function set_rid($rid)
    {
        if (is_null($rid)) {
            throw new \InvalidArgumentException('non-nullable rid cannot be null');
        }
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function get_description()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function set_description($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets store
     *
     * @return string|null
     */
    public function get_store()
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
    public function set_store($store)
    {
        if (is_null($store)) {
            throw new \InvalidArgumentException('non-nullable store cannot be null');
        }
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets complete
     *
     * @return bool|null
     */
    public function get_complete()
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
    public function set_complete($complete)
    {
        if (is_null($complete)) {
            throw new \InvalidArgumentException('non-nullable complete cannot be null');
        }
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets uploading
     *
     * @return bool|null
     */
    public function get_uploading()
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
    public function set_uploading($uploading)
    {
        if (is_null($uploading)) {
            throw new \InvalidArgumentException('non-nullable uploading cannot be null');
        }
        $this->container['uploading'] = $uploading;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string|null
     */
    public function get_extension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string|null $extension extension
     *
     * @return self
     */
    public function set_extension($extension)
    {
        if (is_null($extension)) {
            throw new \InvalidArgumentException('non-nullable extension cannot be null');
        }
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return int|null
     */
    public function get_progress()
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
    public function set_progress($progress)
    {
        if (is_null($progress)) {
            throw new \InvalidArgumentException('non-nullable progress cannot be null');
        }
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate200ResponseChannelU|null
     */
    public function get_user()
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
    public function set_user($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

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
     * Gets instance_id
     *
     * @return string|null
     */
    public function get_instance_id()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string|null $instance_id instance_id
     *
     * @return self
     */
    public function set_instance_id($instance_id)
    {
        if (is_null($instance_id)) {
            throw new \InvalidArgumentException('non-nullable instance_id cannot be null');
        }
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets etag
     *
     * @return string|null
     */
    public function get_etag()
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
    public function set_etag($etag)
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
    public function get_path()
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
    public function set_path($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function get_token()
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
    public function set_token($token)
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
    public function get_uploaded_at()
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
    public function set_uploaded_at($uploaded_at)
    {
        if (is_null($uploaded_at)) {
            throw new \InvalidArgumentException('non-nullable uploaded_at cannot be null');
        }
        $this->container['uploaded_at'] = $uploaded_at;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function get_url()
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
    public function set_url($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

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


