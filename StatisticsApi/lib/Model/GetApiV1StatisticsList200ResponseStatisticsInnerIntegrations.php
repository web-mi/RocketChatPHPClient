<?php
/**
 * GetApiV1StatisticsList200ResponseStatisticsInnerIntegrations
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
 * GetApiV1StatisticsList200ResponseStatisticsInnerIntegrations Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\StatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1StatisticsList200ResponseStatisticsInnerIntegrations implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_statistics_list_200_response_statistics_inner_integrations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_integrations' => 'int',
        'total_incoming' => 'int',
        'total_incoming_active' => 'int',
        'total_outgoing' => 'int',
        'total_outgoing_active' => 'int',
        'total_with_script_enabled' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_integrations' => null,
        'total_incoming' => null,
        'total_incoming_active' => null,
        'total_outgoing' => null,
        'total_outgoing_active' => null,
        'total_with_script_enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'total_integrations' => false,
        'total_incoming' => false,
        'total_incoming_active' => false,
        'total_outgoing' => false,
        'total_outgoing_active' => false,
        'total_with_script_enabled' => false
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
        'total_integrations' => 'totalIntegrations',
        'total_incoming' => 'totalIncoming',
        'total_incoming_active' => 'totalIncomingActive',
        'total_outgoing' => 'totalOutgoing',
        'total_outgoing_active' => 'totalOutgoingActive',
        'total_with_script_enabled' => 'totalWithScriptEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_integrations' => 'setTotalIntegrations',
        'total_incoming' => 'setTotalIncoming',
        'total_incoming_active' => 'setTotalIncomingActive',
        'total_outgoing' => 'setTotalOutgoing',
        'total_outgoing_active' => 'setTotalOutgoingActive',
        'total_with_script_enabled' => 'setTotalWithScriptEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_integrations' => 'getTotalIntegrations',
        'total_incoming' => 'getTotalIncoming',
        'total_incoming_active' => 'getTotalIncomingActive',
        'total_outgoing' => 'getTotalOutgoing',
        'total_outgoing_active' => 'getTotalOutgoingActive',
        'total_with_script_enabled' => 'getTotalWithScriptEnabled'
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
        $this->setIfExists('total_integrations', $data ?? [], null);
        $this->setIfExists('total_incoming', $data ?? [], null);
        $this->setIfExists('total_incoming_active', $data ?? [], null);
        $this->setIfExists('total_outgoing', $data ?? [], null);
        $this->setIfExists('total_outgoing_active', $data ?? [], null);
        $this->setIfExists('total_with_script_enabled', $data ?? [], null);
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
     * Gets total_integrations
     *
     * @return int|null
     */
    public function getTotalIntegrations()
    {
        return $this->container['total_integrations'];
    }

    /**
     * Sets total_integrations
     *
     * @param int|null $total_integrations total_integrations
     *
     * @return self
     */
    public function setTotalIntegrations($total_integrations)
    {
        if (is_null($total_integrations)) {
            throw new \InvalidArgumentException('non-nullable total_integrations cannot be null');
        }
        $this->container['total_integrations'] = $total_integrations;

        return $this;
    }

    /**
     * Gets total_incoming
     *
     * @return int|null
     */
    public function getTotalIncoming()
    {
        return $this->container['total_incoming'];
    }

    /**
     * Sets total_incoming
     *
     * @param int|null $total_incoming total_incoming
     *
     * @return self
     */
    public function setTotalIncoming($total_incoming)
    {
        if (is_null($total_incoming)) {
            throw new \InvalidArgumentException('non-nullable total_incoming cannot be null');
        }
        $this->container['total_incoming'] = $total_incoming;

        return $this;
    }

    /**
     * Gets total_incoming_active
     *
     * @return int|null
     */
    public function getTotalIncomingActive()
    {
        return $this->container['total_incoming_active'];
    }

    /**
     * Sets total_incoming_active
     *
     * @param int|null $total_incoming_active total_incoming_active
     *
     * @return self
     */
    public function setTotalIncomingActive($total_incoming_active)
    {
        if (is_null($total_incoming_active)) {
            throw new \InvalidArgumentException('non-nullable total_incoming_active cannot be null');
        }
        $this->container['total_incoming_active'] = $total_incoming_active;

        return $this;
    }

    /**
     * Gets total_outgoing
     *
     * @return int|null
     */
    public function getTotalOutgoing()
    {
        return $this->container['total_outgoing'];
    }

    /**
     * Sets total_outgoing
     *
     * @param int|null $total_outgoing total_outgoing
     *
     * @return self
     */
    public function setTotalOutgoing($total_outgoing)
    {
        if (is_null($total_outgoing)) {
            throw new \InvalidArgumentException('non-nullable total_outgoing cannot be null');
        }
        $this->container['total_outgoing'] = $total_outgoing;

        return $this;
    }

    /**
     * Gets total_outgoing_active
     *
     * @return int|null
     */
    public function getTotalOutgoingActive()
    {
        return $this->container['total_outgoing_active'];
    }

    /**
     * Sets total_outgoing_active
     *
     * @param int|null $total_outgoing_active total_outgoing_active
     *
     * @return self
     */
    public function setTotalOutgoingActive($total_outgoing_active)
    {
        if (is_null($total_outgoing_active)) {
            throw new \InvalidArgumentException('non-nullable total_outgoing_active cannot be null');
        }
        $this->container['total_outgoing_active'] = $total_outgoing_active;

        return $this;
    }

    /**
     * Gets total_with_script_enabled
     *
     * @return int|null
     */
    public function getTotalWithScriptEnabled()
    {
        return $this->container['total_with_script_enabled'];
    }

    /**
     * Sets total_with_script_enabled
     *
     * @param int|null $total_with_script_enabled total_with_script_enabled
     *
     * @return self
     */
    public function setTotalWithScriptEnabled($total_with_script_enabled)
    {
        if (is_null($total_with_script_enabled)) {
            throw new \InvalidArgumentException('non-nullable total_with_script_enabled cannot be null');
        }
        $this->container['total_with_script_enabled'] = $total_with_script_enabled;

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


