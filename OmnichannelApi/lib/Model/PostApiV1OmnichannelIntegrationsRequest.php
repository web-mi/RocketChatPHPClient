<?php
/**
 * PostApiV1OmnichannelIntegrationsRequest
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
 * PostApiV1OmnichannelIntegrationsRequest Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1OmnichannelIntegrationsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_omnichannel_integrations_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'livechat_webhook_url' => 'string',
        'livechat_secret_token' => 'string',
        'livechat_http_timeout' => 'int',
        'livechat_webhook_on_start' => 'bool',
        'livechat_webhook_on_close' => 'bool',
        'livechat_webhook_on_chat_taken' => 'bool',
        'livechat_webhook_on_chat_queued' => 'bool',
        'livechat_webhook_on_forward' => 'bool',
        'livechat_webhook_on_offline_msg' => 'bool',
        'livechat_webhook_on_visitor_message' => 'bool',
        'livechat_webhook_on_agent_message' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'livechat_webhook_url' => null,
        'livechat_secret_token' => null,
        'livechat_http_timeout' => null,
        'livechat_webhook_on_start' => null,
        'livechat_webhook_on_close' => null,
        'livechat_webhook_on_chat_taken' => null,
        'livechat_webhook_on_chat_queued' => null,
        'livechat_webhook_on_forward' => null,
        'livechat_webhook_on_offline_msg' => null,
        'livechat_webhook_on_visitor_message' => null,
        'livechat_webhook_on_agent_message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'livechat_webhook_url' => false,
        'livechat_secret_token' => false,
        'livechat_http_timeout' => false,
        'livechat_webhook_on_start' => false,
        'livechat_webhook_on_close' => false,
        'livechat_webhook_on_chat_taken' => false,
        'livechat_webhook_on_chat_queued' => false,
        'livechat_webhook_on_forward' => false,
        'livechat_webhook_on_offline_msg' => false,
        'livechat_webhook_on_visitor_message' => false,
        'livechat_webhook_on_agent_message' => false
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
        'livechat_webhook_url' => 'LivechatWebhookUrl',
        'livechat_secret_token' => 'LivechatSecretToken',
        'livechat_http_timeout' => 'LivechatHttpTimeout',
        'livechat_webhook_on_start' => 'LivechatWebhookOnStart',
        'livechat_webhook_on_close' => 'LivechatWebhookOnClose',
        'livechat_webhook_on_chat_taken' => 'LivechatWebhookOnChatTaken',
        'livechat_webhook_on_chat_queued' => 'LivechatWebhookOnChatQueued',
        'livechat_webhook_on_forward' => 'LivechatWebhookOnForward',
        'livechat_webhook_on_offline_msg' => 'LivechatWebhookOnOfflineMsg',
        'livechat_webhook_on_visitor_message' => 'LivechatWebhookOnVisitorMessage',
        'livechat_webhook_on_agent_message' => 'LivechatWebhookOnAgentMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'livechat_webhook_url' => 'set_livechat_webhook_url',
        'livechat_secret_token' => 'set_livechat_secret_token',
        'livechat_http_timeout' => 'set_livechat_http_timeout',
        'livechat_webhook_on_start' => 'set_livechat_webhook_on_start',
        'livechat_webhook_on_close' => 'set_livechat_webhook_on_close',
        'livechat_webhook_on_chat_taken' => 'set_livechat_webhook_on_chat_taken',
        'livechat_webhook_on_chat_queued' => 'set_livechat_webhook_on_chat_queued',
        'livechat_webhook_on_forward' => 'set_livechat_webhook_on_forward',
        'livechat_webhook_on_offline_msg' => 'set_livechat_webhook_on_offline_msg',
        'livechat_webhook_on_visitor_message' => 'set_livechat_webhook_on_visitor_message',
        'livechat_webhook_on_agent_message' => 'set_livechat_webhook_on_agent_message'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'livechat_webhook_url' => 'get_livechat_webhook_url',
        'livechat_secret_token' => 'get_livechat_secret_token',
        'livechat_http_timeout' => 'get_livechat_http_timeout',
        'livechat_webhook_on_start' => 'get_livechat_webhook_on_start',
        'livechat_webhook_on_close' => 'get_livechat_webhook_on_close',
        'livechat_webhook_on_chat_taken' => 'get_livechat_webhook_on_chat_taken',
        'livechat_webhook_on_chat_queued' => 'get_livechat_webhook_on_chat_queued',
        'livechat_webhook_on_forward' => 'get_livechat_webhook_on_forward',
        'livechat_webhook_on_offline_msg' => 'get_livechat_webhook_on_offline_msg',
        'livechat_webhook_on_visitor_message' => 'get_livechat_webhook_on_visitor_message',
        'livechat_webhook_on_agent_message' => 'get_livechat_webhook_on_agent_message'
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
        $this->setIfExists('livechat_webhook_url', $data ?? [], null);
        $this->setIfExists('livechat_secret_token', $data ?? [], null);
        $this->setIfExists('livechat_http_timeout', $data ?? [], null);
        $this->setIfExists('livechat_webhook_on_start', $data ?? [], null);
        $this->setIfExists('livechat_webhook_on_close', $data ?? [], null);
        $this->setIfExists('livechat_webhook_on_chat_taken', $data ?? [], null);
        $this->setIfExists('livechat_webhook_on_chat_queued', $data ?? [], null);
        $this->setIfExists('livechat_webhook_on_forward', $data ?? [], null);
        $this->setIfExists('livechat_webhook_on_offline_msg', $data ?? [], null);
        $this->setIfExists('livechat_webhook_on_visitor_message', $data ?? [], null);
        $this->setIfExists('livechat_webhook_on_agent_message', $data ?? [], null);
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
     * Gets livechat_webhook_url
     *
     * @return string|null
     */
    public function get_livechat_webhook_url()
    {
        return $this->container['livechat_webhook_url'];
    }

    /**
     * Sets livechat_webhook_url
     *
     * @param string|null $livechat_webhook_url The destination webhook URL where the data will be sent.
     *
     * @return self
     */
    public function set_livechat_webhook_url($livechat_webhook_url)
    {
        if (is_null($livechat_webhook_url)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_url cannot be null');
        }
        $this->container['livechat_webhook_url'] = $livechat_webhook_url;

        return $this;
    }

    /**
     * Gets livechat_secret_token
     *
     * @return string|null
     */
    public function get_livechat_secret_token()
    {
        return $this->container['livechat_secret_token'];
    }

    /**
     * Sets livechat_secret_token
     *
     * @param string|null $livechat_secret_token A secret token that can be used to verify the webhook.
     *
     * @return self
     */
    public function set_livechat_secret_token($livechat_secret_token)
    {
        if (is_null($livechat_secret_token)) {
            throw new \InvalidArgumentException('non-nullable livechat_secret_token cannot be null');
        }
        $this->container['livechat_secret_token'] = $livechat_secret_token;

        return $this;
    }

    /**
     * Gets livechat_http_timeout
     *
     * @return int|null
     */
    public function get_livechat_http_timeout()
    {
        return $this->container['livechat_http_timeout'];
    }

    /**
     * Sets livechat_http_timeout
     *
     * @param int|null $livechat_http_timeout The request timeout value
     *
     * @return self
     */
    public function set_livechat_http_timeout($livechat_http_timeout)
    {
        if (is_null($livechat_http_timeout)) {
            throw new \InvalidArgumentException('non-nullable livechat_http_timeout cannot be null');
        }
        $this->container['livechat_http_timeout'] = $livechat_http_timeout;

        return $this;
    }

    /**
     * Gets livechat_webhook_on_start
     *
     * @return bool|null
     */
    public function get_livechat_webhook_on_start()
    {
        return $this->container['livechat_webhook_on_start'];
    }

    /**
     * Sets livechat_webhook_on_start
     *
     * @param bool|null $livechat_webhook_on_start When set to true, data is sent to the configured webhook URL each time a new chat starts.
     *
     * @return self
     */
    public function set_livechat_webhook_on_start($livechat_webhook_on_start)
    {
        if (is_null($livechat_webhook_on_start)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_on_start cannot be null');
        }
        $this->container['livechat_webhook_on_start'] = $livechat_webhook_on_start;

        return $this;
    }

    /**
     * Gets livechat_webhook_on_close
     *
     * @return bool|null
     */
    public function get_livechat_webhook_on_close()
    {
        return $this->container['livechat_webhook_on_close'];
    }

    /**
     * Sets livechat_webhook_on_close
     *
     * @param bool|null $livechat_webhook_on_close When set to true, data is sent to the configured webhook URL each time a chat is closed.
     *
     * @return self
     */
    public function set_livechat_webhook_on_close($livechat_webhook_on_close)
    {
        if (is_null($livechat_webhook_on_close)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_on_close cannot be null');
        }
        $this->container['livechat_webhook_on_close'] = $livechat_webhook_on_close;

        return $this;
    }

    /**
     * Gets livechat_webhook_on_chat_taken
     *
     * @return bool|null
     */
    public function get_livechat_webhook_on_chat_taken()
    {
        return $this->container['livechat_webhook_on_chat_taken'];
    }

    /**
     * Sets livechat_webhook_on_chat_taken
     *
     * @param bool|null $livechat_webhook_on_chat_taken When set to true, data is sent to the configured webhook URL each time a chat is taken.
     *
     * @return self
     */
    public function set_livechat_webhook_on_chat_taken($livechat_webhook_on_chat_taken)
    {
        if (is_null($livechat_webhook_on_chat_taken)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_on_chat_taken cannot be null');
        }
        $this->container['livechat_webhook_on_chat_taken'] = $livechat_webhook_on_chat_taken;

        return $this;
    }

    /**
     * Gets livechat_webhook_on_chat_queued
     *
     * @return bool|null
     */
    public function get_livechat_webhook_on_chat_queued()
    {
        return $this->container['livechat_webhook_on_chat_queued'];
    }

    /**
     * Sets livechat_webhook_on_chat_queued
     *
     * @param bool|null $livechat_webhook_on_chat_queued When set to true, data is sent to the configured webhook URL each time a chat is queued.
     *
     * @return self
     */
    public function set_livechat_webhook_on_chat_queued($livechat_webhook_on_chat_queued)
    {
        if (is_null($livechat_webhook_on_chat_queued)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_on_chat_queued cannot be null');
        }
        $this->container['livechat_webhook_on_chat_queued'] = $livechat_webhook_on_chat_queued;

        return $this;
    }

    /**
     * Gets livechat_webhook_on_forward
     *
     * @return bool|null
     */
    public function get_livechat_webhook_on_forward()
    {
        return $this->container['livechat_webhook_on_forward'];
    }

    /**
     * Sets livechat_webhook_on_forward
     *
     * @param bool|null $livechat_webhook_on_forward When set to true, data is sent to the configured webhook URL each time a chat is forwarded.
     *
     * @return self
     */
    public function set_livechat_webhook_on_forward($livechat_webhook_on_forward)
    {
        if (is_null($livechat_webhook_on_forward)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_on_forward cannot be null');
        }
        $this->container['livechat_webhook_on_forward'] = $livechat_webhook_on_forward;

        return $this;
    }

    /**
     * Gets livechat_webhook_on_offline_msg
     *
     * @return bool|null
     */
    public function get_livechat_webhook_on_offline_msg()
    {
        return $this->container['livechat_webhook_on_offline_msg'];
    }

    /**
     * Sets livechat_webhook_on_offline_msg
     *
     * @param bool|null $livechat_webhook_on_offline_msg When set to true, data is sent to the configured webhook URL each time offline messages are sent.
     *
     * @return self
     */
    public function set_livechat_webhook_on_offline_msg($livechat_webhook_on_offline_msg)
    {
        if (is_null($livechat_webhook_on_offline_msg)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_on_offline_msg cannot be null');
        }
        $this->container['livechat_webhook_on_offline_msg'] = $livechat_webhook_on_offline_msg;

        return $this;
    }

    /**
     * Gets livechat_webhook_on_visitor_message
     *
     * @return bool|null
     */
    public function get_livechat_webhook_on_visitor_message()
    {
        return $this->container['livechat_webhook_on_visitor_message'];
    }

    /**
     * Sets livechat_webhook_on_visitor_message
     *
     * @param bool|null $livechat_webhook_on_visitor_message When set to true, data is sent to the configured webhook URL each time a visitor sends a message.
     *
     * @return self
     */
    public function set_livechat_webhook_on_visitor_message($livechat_webhook_on_visitor_message)
    {
        if (is_null($livechat_webhook_on_visitor_message)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_on_visitor_message cannot be null');
        }
        $this->container['livechat_webhook_on_visitor_message'] = $livechat_webhook_on_visitor_message;

        return $this;
    }

    /**
     * Gets livechat_webhook_on_agent_message
     *
     * @return bool|null
     */
    public function get_livechat_webhook_on_agent_message()
    {
        return $this->container['livechat_webhook_on_agent_message'];
    }

    /**
     * Sets livechat_webhook_on_agent_message
     *
     * @param bool|null $livechat_webhook_on_agent_message When set to true, data is sent to the configured webhook URL each time an agent sends a message.
     *
     * @return self
     */
    public function set_livechat_webhook_on_agent_message($livechat_webhook_on_agent_message)
    {
        if (is_null($livechat_webhook_on_agent_message)) {
            throw new \InvalidArgumentException('non-nullable livechat_webhook_on_agent_message cannot be null');
        }
        $this->container['livechat_webhook_on_agent_message'] = $livechat_webhook_on_agent_message;

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


