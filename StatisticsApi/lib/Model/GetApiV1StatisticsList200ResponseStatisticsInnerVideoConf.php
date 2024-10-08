<?php
/**
 * GetApiV1StatisticsList200ResponseStatisticsInnerVideoConf
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\StatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Statistics
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

namespace WebMI\RocketChatApiClient\StatisticsApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\StatisticsApi\ObjectSerializer;

/**
 * GetApiV1StatisticsList200ResponseStatisticsInnerVideoConf Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\StatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1StatisticsList200ResponseStatisticsInnerVideoConf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_statistics_list_200_response_statistics_inner_videoConf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'video_conference' => '\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfVideoConference',
        'direct' => '\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfDirect',
        'livechat' => '\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfVideoConference',
        'settings' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'video_conference' => null,
        'direct' => null,
        'livechat' => null,
        'settings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'video_conference' => false,
        'direct' => false,
        'livechat' => false,
        'settings' => false
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
        'video_conference' => 'videoConference',
        'direct' => 'direct',
        'livechat' => 'livechat',
        'settings' => 'settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'video_conference' => 'set_video_conference',
        'direct' => 'set_direct',
        'livechat' => 'set_livechat',
        'settings' => 'set_settings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'video_conference' => 'get_video_conference',
        'direct' => 'get_direct',
        'livechat' => 'get_livechat',
        'settings' => 'get_settings'
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
        $this->setIfExists('video_conference', $data ?? [], null);
        $this->setIfExists('direct', $data ?? [], null);
        $this->setIfExists('livechat', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
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
     * Gets video_conference
     *
     * @return \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfVideoConference|null
     */
    public function get_video_conference()
    {
        return $this->container['video_conference'];
    }

    /**
     * Sets video_conference
     *
     * @param \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfVideoConference|null $video_conference video_conference
     *
     * @return self
     */
    public function set_video_conference($video_conference)
    {
        if (is_null($video_conference)) {
            throw new \InvalidArgumentException('non-nullable video_conference cannot be null');
        }
        $this->container['video_conference'] = $video_conference;

        return $this;
    }

    /**
     * Gets direct
     *
     * @return \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfDirect|null
     */
    public function get_direct()
    {
        return $this->container['direct'];
    }

    /**
     * Sets direct
     *
     * @param \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfDirect|null $direct direct
     *
     * @return self
     */
    public function set_direct($direct)
    {
        if (is_null($direct)) {
            throw new \InvalidArgumentException('non-nullable direct cannot be null');
        }
        $this->container['direct'] = $direct;

        return $this;
    }

    /**
     * Gets livechat
     *
     * @return \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfVideoConference|null
     */
    public function get_livechat()
    {
        return $this->container['livechat'];
    }

    /**
     * Sets livechat
     *
     * @param \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerVideoConfVideoConference|null $livechat livechat
     *
     * @return self
     */
    public function set_livechat($livechat)
    {
        if (is_null($livechat)) {
            throw new \InvalidArgumentException('non-nullable livechat cannot be null');
        }
        $this->container['livechat'] = $livechat;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return object|null
     */
    public function get_settings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param object|null $settings settings
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


