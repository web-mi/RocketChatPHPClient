<?php
/**
 * PostApiV1LivechatTriggersRequestActionsInnerParams
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Omnichannel
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

namespace WebMI\RocketChatApiClient\OmnichannelApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\OmnichannelApi\ObjectSerializer;

/**
 * PostApiV1LivechatTriggersRequestActionsInnerParams Class Doc Comment
 *
 * @category Class
 * @description Enter the parameter values for the trigger action.
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1LivechatTriggersRequestActionsInnerParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_livechat_triggers_request_actions_inner_params';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sender' => 'string',
        'name' => 'string',
        'msg' => 'string',
        'service_url' => 'string',
        'service_timeout' => 'float',
        'service_fallback_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sender' => null,
        'name' => null,
        'msg' => null,
        'service_url' => null,
        'service_timeout' => null,
        'service_fallback_message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sender' => false,
        'name' => false,
        'msg' => false,
        'service_url' => false,
        'service_timeout' => false,
        'service_fallback_message' => false
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
        'sender' => 'sender',
        'name' => 'name',
        'msg' => 'msg',
        'service_url' => 'serviceUrl',
        'service_timeout' => 'serviceTimeout',
        'service_fallback_message' => 'serviceFallbackMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sender' => 'set_sender',
        'name' => 'set_name',
        'msg' => 'set_msg',
        'service_url' => 'set_service_url',
        'service_timeout' => 'set_service_timeout',
        'service_fallback_message' => 'set_service_fallback_message'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sender' => 'get_sender',
        'name' => 'get_name',
        'msg' => 'get_msg',
        'service_url' => 'get_service_url',
        'service_timeout' => 'get_service_timeout',
        'service_fallback_message' => 'get_service_fallback_message'
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
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('msg', $data ?? [], null);
        $this->setIfExists('service_url', $data ?? [], null);
        $this->setIfExists('service_timeout', $data ?? [], null);
        $this->setIfExists('service_fallback_message', $data ?? [], null);
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
     * Gets sender
     *
     * @return string|null
     */
    public function get_sender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string|null $sender The sender of the trigger action. The possible values are:  * `queue`: Impersonate the next available agent in the queue.  * `custom`: Use a specific agent or bot.
     *
     * @return self
     */
    public function set_sender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

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
     * @param string|null $name Enter the name of the agent or bot that you want to use, if the `sender` is `custom`.
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
     * Gets msg
     *
     * @return string|null
     */
    public function get_msg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string|null $msg Enter a message for the visitor, if the action `name` is `send-message`.
     *
     * @return self
     */
    public function set_msg($msg)
    {
        if (is_null($msg)) {
            throw new \InvalidArgumentException('non-nullable msg cannot be null');
        }
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets service_url
     *
     * @return string|null
     */
    public function get_service_url()
    {
        return $this->container['service_url'];
    }

    /**
     * Sets service_url
     *
     * @param string|null $service_url Enter the external service URL you want to use, if the action `name` is `use-external-service`.
     *
     * @return self
     */
    public function set_service_url($service_url)
    {
        if (is_null($service_url)) {
            throw new \InvalidArgumentException('non-nullable service_url cannot be null');
        }
        $this->container['service_url'] = $service_url;

        return $this;
    }

    /**
     * Gets service_timeout
     *
     * @return float|null
     */
    public function get_service_timeout()
    {
        return $this->container['service_timeout'];
    }

    /**
     * Sets service_timeout
     *
     * @param float|null $service_timeout Enter the service timeout value, in seconds, if the action `name` is `use-external-service`.
     *
     * @return self
     */
    public function set_service_timeout($service_timeout)
    {
        if (is_null($service_timeout)) {
            throw new \InvalidArgumentException('non-nullable service_timeout cannot be null');
        }
        $this->container['service_timeout'] = $service_timeout;

        return $this;
    }

    /**
     * Gets service_fallback_message
     *
     * @return string|null
     */
    public function get_service_fallback_message()
    {
        return $this->container['service_fallback_message'];
    }

    /**
     * Sets service_fallback_message
     *
     * @param string|null $service_fallback_message Enter a message when the service is not accessible, if the action `name` is `use-external-service`.
     *
     * @return self
     */
    public function set_service_fallback_message($service_fallback_message)
    {
        if (is_null($service_fallback_message)) {
            throw new \InvalidArgumentException('non-nullable service_fallback_message cannot be null');
        }
        $this->container['service_fallback_message'] = $service_fallback_message;

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


