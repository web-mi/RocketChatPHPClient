<?php
/**
 * GetApiV1LivechatConfig200ResponseConfig
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
 * GetApiV1LivechatConfig200ResponseConfig Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatConfig200ResponseConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_config_200_response_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enabled' => 'bool',
        'settings' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigSettings',
        'theme' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigTheme',
        'messages' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigMessages',
        'survey' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigSurvey',
        'departments' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigDepartmentsInner[]',
        'online' => 'bool',
        'guest' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigGuest',
        'room' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigRoom',
        'agent' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAgentNext200ResponseAgent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enabled' => null,
        'settings' => null,
        'theme' => null,
        'messages' => null,
        'survey' => null,
        'departments' => null,
        'online' => null,
        'guest' => null,
        'room' => null,
        'agent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enabled' => false,
        'settings' => false,
        'theme' => false,
        'messages' => false,
        'survey' => false,
        'departments' => false,
        'online' => false,
        'guest' => false,
        'room' => false,
        'agent' => false
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
        'enabled' => 'enabled',
        'settings' => 'settings',
        'theme' => 'theme',
        'messages' => 'messages',
        'survey' => 'survey',
        'departments' => 'departments',
        'online' => 'online',
        'guest' => 'guest',
        'room' => 'room',
        'agent' => 'agent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'set_enabled',
        'settings' => 'set_settings',
        'theme' => 'set_theme',
        'messages' => 'set_messages',
        'survey' => 'set_survey',
        'departments' => 'set_departments',
        'online' => 'set_online',
        'guest' => 'set_guest',
        'room' => 'set_room',
        'agent' => 'set_agent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'get_enabled',
        'settings' => 'get_settings',
        'theme' => 'get_theme',
        'messages' => 'get_messages',
        'survey' => 'get_survey',
        'departments' => 'get_departments',
        'online' => 'get_online',
        'guest' => 'get_guest',
        'room' => 'get_room',
        'agent' => 'get_agent'
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
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
        $this->setIfExists('theme', $data ?? [], null);
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('survey', $data ?? [], null);
        $this->setIfExists('departments', $data ?? [], null);
        $this->setIfExists('online', $data ?? [], null);
        $this->setIfExists('guest', $data ?? [], null);
        $this->setIfExists('room', $data ?? [], null);
        $this->setIfExists('agent', $data ?? [], null);
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
     * Gets enabled
     *
     * @return bool|null
     */
    public function get_enabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function set_enabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigSettings|null
     */
    public function get_settings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigSettings|null $settings settings
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
     * Gets theme
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigTheme|null
     */
    public function get_theme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigTheme|null $theme theme
     *
     * @return self
     */
    public function set_theme($theme)
    {
        if (is_null($theme)) {
            throw new \InvalidArgumentException('non-nullable theme cannot be null');
        }
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigMessages|null
     */
    public function get_messages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigMessages|null $messages messages
     *
     * @return self
     */
    public function set_messages($messages)
    {
        if (is_null($messages)) {
            throw new \InvalidArgumentException('non-nullable messages cannot be null');
        }
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets survey
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigSurvey|null
     */
    public function get_survey()
    {
        return $this->container['survey'];
    }

    /**
     * Sets survey
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigSurvey|null $survey survey
     *
     * @return self
     */
    public function set_survey($survey)
    {
        if (is_null($survey)) {
            throw new \InvalidArgumentException('non-nullable survey cannot be null');
        }
        $this->container['survey'] = $survey;

        return $this;
    }

    /**
     * Gets departments
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigDepartmentsInner[]|null
     */
    public function get_departments()
    {
        return $this->container['departments'];
    }

    /**
     * Sets departments
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigDepartmentsInner[]|null $departments departments
     *
     * @return self
     */
    public function set_departments($departments)
    {
        if (is_null($departments)) {
            throw new \InvalidArgumentException('non-nullable departments cannot be null');
        }
        $this->container['departments'] = $departments;

        return $this;
    }

    /**
     * Gets online
     *
     * @return bool|null
     */
    public function get_online()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param bool|null $online online
     *
     * @return self
     */
    public function set_online($online)
    {
        if (is_null($online)) {
            throw new \InvalidArgumentException('non-nullable online cannot be null');
        }
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets guest
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigGuest|null
     */
    public function get_guest()
    {
        return $this->container['guest'];
    }

    /**
     * Sets guest
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigGuest|null $guest guest
     *
     * @return self
     */
    public function set_guest($guest)
    {
        if (is_null($guest)) {
            throw new \InvalidArgumentException('non-nullable guest cannot be null');
        }
        $this->container['guest'] = $guest;

        return $this;
    }

    /**
     * Gets room
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigRoom|null
     */
    public function get_room()
    {
        return $this->container['room'];
    }

    /**
     * Sets room
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatConfig200ResponseConfigRoom|null $room room
     *
     * @return self
     */
    public function set_room($room)
    {
        if (is_null($room)) {
            throw new \InvalidArgumentException('non-nullable room cannot be null');
        }
        $this->container['room'] = $room;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAgentNext200ResponseAgent|null
     */
    public function get_agent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAgentNext200ResponseAgent|null $agent agent
     *
     * @return self
     */
    public function set_agent($agent)
    {
        if (is_null($agent)) {
            throw new \InvalidArgumentException('non-nullable agent cannot be null');
        }
        $this->container['agent'] = $agent;

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


