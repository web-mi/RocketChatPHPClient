<?php
/**
 * GetApiV1PushGet200ResponseDataNotification
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\NotificationsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Notifications
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

namespace WebMI\RocketChatApiClient\NotificationsApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\NotificationsApi\ObjectSerializer;

/**
 * GetApiV1PushGet200ResponseDataNotification Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\NotificationsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1PushGet200ResponseDataNotification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_push_get_200_response_data_notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from' => 'string',
        'badge' => 'int',
        'sound' => 'string',
        'priority' => 'int',
        'title' => 'string',
        'text' => 'string',
        'payload' => '\WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationPayload',
        'user_id' => 'string',
        'not_id' => 'int',
        'gcm' => '\WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationGcm',
        'apn' => '\WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationApn'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'from' => null,
        'badge' => null,
        'sound' => null,
        'priority' => null,
        'title' => null,
        'text' => null,
        'payload' => null,
        'user_id' => null,
        'not_id' => null,
        'gcm' => null,
        'apn' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'from' => false,
        'badge' => false,
        'sound' => false,
        'priority' => false,
        'title' => false,
        'text' => false,
        'payload' => false,
        'user_id' => false,
        'not_id' => false,
        'gcm' => false,
        'apn' => false
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
        'from' => 'from',
        'badge' => 'badge',
        'sound' => 'sound',
        'priority' => 'priority',
        'title' => 'title',
        'text' => 'text',
        'payload' => 'payload',
        'user_id' => 'userId',
        'not_id' => 'notId',
        'gcm' => 'gcm',
        'apn' => 'apn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'badge' => 'setBadge',
        'sound' => 'setSound',
        'priority' => 'setPriority',
        'title' => 'setTitle',
        'text' => 'setText',
        'payload' => 'setPayload',
        'user_id' => 'setUserId',
        'not_id' => 'setNotId',
        'gcm' => 'setGcm',
        'apn' => 'setApn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'badge' => 'getBadge',
        'sound' => 'getSound',
        'priority' => 'getPriority',
        'title' => 'getTitle',
        'text' => 'getText',
        'payload' => 'getPayload',
        'user_id' => 'getUserId',
        'not_id' => 'getNotId',
        'gcm' => 'getGcm',
        'apn' => 'getApn'
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
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('badge', $data ?? [], null);
        $this->setIfExists('sound', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('payload', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('not_id', $data ?? [], null);
        $this->setIfExists('gcm', $data ?? [], null);
        $this->setIfExists('apn', $data ?? [], null);
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
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets badge
     *
     * @return int|null
     */
    public function getBadge()
    {
        return $this->container['badge'];
    }

    /**
     * Sets badge
     *
     * @param int|null $badge badge
     *
     * @return self
     */
    public function setBadge($badge)
    {
        if (is_null($badge)) {
            throw new \InvalidArgumentException('non-nullable badge cannot be null');
        }
        $this->container['badge'] = $badge;

        return $this;
    }

    /**
     * Gets sound
     *
     * @return string|null
     */
    public function getSound()
    {
        return $this->container['sound'];
    }

    /**
     * Sets sound
     *
     * @param string|null $sound sound
     *
     * @return self
     */
    public function setSound($sound)
    {
        if (is_null($sound)) {
            throw new \InvalidArgumentException('non-nullable sound cannot be null');
        }
        $this->container['sound'] = $sound;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return \WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationPayload|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationPayload|null $payload payload
     *
     * @return self
     */
    public function setPayload($payload)
    {
        if (is_null($payload)) {
            throw new \InvalidArgumentException('non-nullable payload cannot be null');
        }
        $this->container['payload'] = $payload;

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
     * Gets not_id
     *
     * @return int|null
     */
    public function getNotId()
    {
        return $this->container['not_id'];
    }

    /**
     * Sets not_id
     *
     * @param int|null $not_id not_id
     *
     * @return self
     */
    public function setNotId($not_id)
    {
        if (is_null($not_id)) {
            throw new \InvalidArgumentException('non-nullable not_id cannot be null');
        }
        $this->container['not_id'] = $not_id;

        return $this;
    }

    /**
     * Gets gcm
     *
     * @return \WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationGcm|null
     */
    public function getGcm()
    {
        return $this->container['gcm'];
    }

    /**
     * Sets gcm
     *
     * @param \WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationGcm|null $gcm gcm
     *
     * @return self
     */
    public function setGcm($gcm)
    {
        if (is_null($gcm)) {
            throw new \InvalidArgumentException('non-nullable gcm cannot be null');
        }
        $this->container['gcm'] = $gcm;

        return $this;
    }

    /**
     * Gets apn
     *
     * @return \WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationApn|null
     */
    public function getApn()
    {
        return $this->container['apn'];
    }

    /**
     * Sets apn
     *
     * @param \WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1PushGet200ResponseDataNotificationApn|null $apn apn
     *
     * @return self
     */
    public function setApn($apn)
    {
        if (is_null($apn)) {
            throw new \InvalidArgumentException('non-nullable apn cannot be null');
        }
        $this->container['apn'] = $apn;

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


