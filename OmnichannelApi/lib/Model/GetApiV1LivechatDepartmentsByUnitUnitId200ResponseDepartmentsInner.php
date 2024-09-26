<?php
/**
 * GetApiV1LivechatDepartmentsByUnitUnitId200ResponseDepartmentsInner
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
 * GetApiV1LivechatDepartmentsByUnitUnitId200ResponseDepartmentsInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatDepartmentsByUnitUnitId200ResponseDepartmentsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_departments_by_unit__unitId_200_response_departments_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'enabled' => 'bool',
        'name' => 'string',
        'description' => 'string',
        'show_on_registration' => 'bool',
        'show_on_offline_form' => 'bool',
        'request_tag_before_closing_chat' => 'bool',
        'email' => 'string',
        'max_number_simultaneous_chat' => 'string',
        'waiting_queue_message' => 'string',
        'type' => 'string',
        'num_agents' => 'int',
        '_updated_at' => 'string',
        'ancestors' => 'string[]',
        'chat_closing_tags' => 'object[]',
        'abandoned_rooms_close_custom_message' => 'string',
        'departments_allowed_to_forward' => 'string[]',
        'offline_message_channel_name' => 'string',
        'visitor_inactivity_timeout_in_seconds' => 'string',
        'parent_id' => 'string'
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
        'enabled' => null,
        'name' => null,
        'description' => null,
        'show_on_registration' => null,
        'show_on_offline_form' => null,
        'request_tag_before_closing_chat' => null,
        'email' => null,
        'max_number_simultaneous_chat' => null,
        'waiting_queue_message' => null,
        'type' => null,
        'num_agents' => null,
        '_updated_at' => null,
        'ancestors' => null,
        'chat_closing_tags' => null,
        'abandoned_rooms_close_custom_message' => null,
        'departments_allowed_to_forward' => null,
        'offline_message_channel_name' => null,
        'visitor_inactivity_timeout_in_seconds' => null,
        'parent_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'enabled' => false,
        'name' => false,
        'description' => false,
        'show_on_registration' => false,
        'show_on_offline_form' => false,
        'request_tag_before_closing_chat' => false,
        'email' => false,
        'max_number_simultaneous_chat' => false,
        'waiting_queue_message' => false,
        'type' => false,
        'num_agents' => false,
        '_updated_at' => false,
        'ancestors' => false,
        'chat_closing_tags' => false,
        'abandoned_rooms_close_custom_message' => false,
        'departments_allowed_to_forward' => false,
        'offline_message_channel_name' => false,
        'visitor_inactivity_timeout_in_seconds' => false,
        'parent_id' => false
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
        'enabled' => 'enabled',
        'name' => 'name',
        'description' => 'description',
        'show_on_registration' => 'showOnRegistration',
        'show_on_offline_form' => 'showOnOfflineForm',
        'request_tag_before_closing_chat' => 'requestTagBeforeClosingChat',
        'email' => 'email',
        'max_number_simultaneous_chat' => 'maxNumberSimultaneousChat',
        'waiting_queue_message' => 'waitingQueueMessage',
        'type' => 'type',
        'num_agents' => 'numAgents',
        '_updated_at' => '_updatedAt',
        'ancestors' => 'ancestors',
        'chat_closing_tags' => 'chatClosingTags',
        'abandoned_rooms_close_custom_message' => 'abandonedRoomsCloseCustomMessage',
        'departments_allowed_to_forward' => 'departmentsAllowedToForward',
        'offline_message_channel_name' => 'offlineMessageChannelName',
        'visitor_inactivity_timeout_in_seconds' => 'visitorInactivityTimeoutInSeconds',
        'parent_id' => 'parentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'enabled' => 'setEnabled',
        'name' => 'setName',
        'description' => 'setDescription',
        'show_on_registration' => 'setShowOnRegistration',
        'show_on_offline_form' => 'setShowOnOfflineForm',
        'request_tag_before_closing_chat' => 'setRequestTagBeforeClosingChat',
        'email' => 'setEmail',
        'max_number_simultaneous_chat' => 'setMaxNumberSimultaneousChat',
        'waiting_queue_message' => 'setWaitingQueueMessage',
        'type' => 'setType',
        'num_agents' => 'setNumAgents',
        '_updated_at' => 'setUpdatedAt',
        'ancestors' => 'setAncestors',
        'chat_closing_tags' => 'setChatClosingTags',
        'abandoned_rooms_close_custom_message' => 'setAbandonedRoomsCloseCustomMessage',
        'departments_allowed_to_forward' => 'setDepartmentsAllowedToForward',
        'offline_message_channel_name' => 'setOfflineMessageChannelName',
        'visitor_inactivity_timeout_in_seconds' => 'setVisitorInactivityTimeoutInSeconds',
        'parent_id' => 'setParentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'enabled' => 'getEnabled',
        'name' => 'getName',
        'description' => 'getDescription',
        'show_on_registration' => 'getShowOnRegistration',
        'show_on_offline_form' => 'getShowOnOfflineForm',
        'request_tag_before_closing_chat' => 'getRequestTagBeforeClosingChat',
        'email' => 'getEmail',
        'max_number_simultaneous_chat' => 'getMaxNumberSimultaneousChat',
        'waiting_queue_message' => 'getWaitingQueueMessage',
        'type' => 'getType',
        'num_agents' => 'getNumAgents',
        '_updated_at' => 'getUpdatedAt',
        'ancestors' => 'getAncestors',
        'chat_closing_tags' => 'getChatClosingTags',
        'abandoned_rooms_close_custom_message' => 'getAbandonedRoomsCloseCustomMessage',
        'departments_allowed_to_forward' => 'getDepartmentsAllowedToForward',
        'offline_message_channel_name' => 'getOfflineMessageChannelName',
        'visitor_inactivity_timeout_in_seconds' => 'getVisitorInactivityTimeoutInSeconds',
        'parent_id' => 'getParentId'
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
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('show_on_registration', $data ?? [], null);
        $this->setIfExists('show_on_offline_form', $data ?? [], null);
        $this->setIfExists('request_tag_before_closing_chat', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('max_number_simultaneous_chat', $data ?? [], null);
        $this->setIfExists('waiting_queue_message', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('num_agents', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('ancestors', $data ?? [], null);
        $this->setIfExists('chat_closing_tags', $data ?? [], null);
        $this->setIfExists('abandoned_rooms_close_custom_message', $data ?? [], null);
        $this->setIfExists('departments_allowed_to_forward', $data ?? [], null);
        $this->setIfExists('offline_message_channel_name', $data ?? [], null);
        $this->setIfExists('visitor_inactivity_timeout_in_seconds', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
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
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
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
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
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
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets show_on_registration
     *
     * @return bool|null
     */
    public function getShowOnRegistration()
    {
        return $this->container['show_on_registration'];
    }

    /**
     * Sets show_on_registration
     *
     * @param bool|null $show_on_registration show_on_registration
     *
     * @return self
     */
    public function setShowOnRegistration($show_on_registration)
    {
        if (is_null($show_on_registration)) {
            throw new \InvalidArgumentException('non-nullable show_on_registration cannot be null');
        }
        $this->container['show_on_registration'] = $show_on_registration;

        return $this;
    }

    /**
     * Gets show_on_offline_form
     *
     * @return bool|null
     */
    public function getShowOnOfflineForm()
    {
        return $this->container['show_on_offline_form'];
    }

    /**
     * Sets show_on_offline_form
     *
     * @param bool|null $show_on_offline_form show_on_offline_form
     *
     * @return self
     */
    public function setShowOnOfflineForm($show_on_offline_form)
    {
        if (is_null($show_on_offline_form)) {
            throw new \InvalidArgumentException('non-nullable show_on_offline_form cannot be null');
        }
        $this->container['show_on_offline_form'] = $show_on_offline_form;

        return $this;
    }

    /**
     * Gets request_tag_before_closing_chat
     *
     * @return bool|null
     */
    public function getRequestTagBeforeClosingChat()
    {
        return $this->container['request_tag_before_closing_chat'];
    }

    /**
     * Sets request_tag_before_closing_chat
     *
     * @param bool|null $request_tag_before_closing_chat request_tag_before_closing_chat
     *
     * @return self
     */
    public function setRequestTagBeforeClosingChat($request_tag_before_closing_chat)
    {
        if (is_null($request_tag_before_closing_chat)) {
            throw new \InvalidArgumentException('non-nullable request_tag_before_closing_chat cannot be null');
        }
        $this->container['request_tag_before_closing_chat'] = $request_tag_before_closing_chat;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets max_number_simultaneous_chat
     *
     * @return string|null
     */
    public function getMaxNumberSimultaneousChat()
    {
        return $this->container['max_number_simultaneous_chat'];
    }

    /**
     * Sets max_number_simultaneous_chat
     *
     * @param string|null $max_number_simultaneous_chat max_number_simultaneous_chat
     *
     * @return self
     */
    public function setMaxNumberSimultaneousChat($max_number_simultaneous_chat)
    {
        if (is_null($max_number_simultaneous_chat)) {
            throw new \InvalidArgumentException('non-nullable max_number_simultaneous_chat cannot be null');
        }
        $this->container['max_number_simultaneous_chat'] = $max_number_simultaneous_chat;

        return $this;
    }

    /**
     * Gets waiting_queue_message
     *
     * @return string|null
     */
    public function getWaitingQueueMessage()
    {
        return $this->container['waiting_queue_message'];
    }

    /**
     * Sets waiting_queue_message
     *
     * @param string|null $waiting_queue_message waiting_queue_message
     *
     * @return self
     */
    public function setWaitingQueueMessage($waiting_queue_message)
    {
        if (is_null($waiting_queue_message)) {
            throw new \InvalidArgumentException('non-nullable waiting_queue_message cannot be null');
        }
        $this->container['waiting_queue_message'] = $waiting_queue_message;

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
     * Gets num_agents
     *
     * @return int|null
     */
    public function getNumAgents()
    {
        return $this->container['num_agents'];
    }

    /**
     * Sets num_agents
     *
     * @param int|null $num_agents num_agents
     *
     * @return self
     */
    public function setNumAgents($num_agents)
    {
        if (is_null($num_agents)) {
            throw new \InvalidArgumentException('non-nullable num_agents cannot be null');
        }
        $this->container['num_agents'] = $num_agents;

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
     * Gets ancestors
     *
     * @return string[]|null
     */
    public function getAncestors()
    {
        return $this->container['ancestors'];
    }

    /**
     * Sets ancestors
     *
     * @param string[]|null $ancestors ancestors
     *
     * @return self
     */
    public function setAncestors($ancestors)
    {
        if (is_null($ancestors)) {
            throw new \InvalidArgumentException('non-nullable ancestors cannot be null');
        }
        $this->container['ancestors'] = $ancestors;

        return $this;
    }

    /**
     * Gets chat_closing_tags
     *
     * @return object[]|null
     */
    public function getChatClosingTags()
    {
        return $this->container['chat_closing_tags'];
    }

    /**
     * Sets chat_closing_tags
     *
     * @param object[]|null $chat_closing_tags chat_closing_tags
     *
     * @return self
     */
    public function setChatClosingTags($chat_closing_tags)
    {
        if (is_null($chat_closing_tags)) {
            throw new \InvalidArgumentException('non-nullable chat_closing_tags cannot be null');
        }
        $this->container['chat_closing_tags'] = $chat_closing_tags;

        return $this;
    }

    /**
     * Gets abandoned_rooms_close_custom_message
     *
     * @return string|null
     */
    public function getAbandonedRoomsCloseCustomMessage()
    {
        return $this->container['abandoned_rooms_close_custom_message'];
    }

    /**
     * Sets abandoned_rooms_close_custom_message
     *
     * @param string|null $abandoned_rooms_close_custom_message abandoned_rooms_close_custom_message
     *
     * @return self
     */
    public function setAbandonedRoomsCloseCustomMessage($abandoned_rooms_close_custom_message)
    {
        if (is_null($abandoned_rooms_close_custom_message)) {
            throw new \InvalidArgumentException('non-nullable abandoned_rooms_close_custom_message cannot be null');
        }
        $this->container['abandoned_rooms_close_custom_message'] = $abandoned_rooms_close_custom_message;

        return $this;
    }

    /**
     * Gets departments_allowed_to_forward
     *
     * @return string[]|null
     */
    public function getDepartmentsAllowedToForward()
    {
        return $this->container['departments_allowed_to_forward'];
    }

    /**
     * Sets departments_allowed_to_forward
     *
     * @param string[]|null $departments_allowed_to_forward departments_allowed_to_forward
     *
     * @return self
     */
    public function setDepartmentsAllowedToForward($departments_allowed_to_forward)
    {
        if (is_null($departments_allowed_to_forward)) {
            throw new \InvalidArgumentException('non-nullable departments_allowed_to_forward cannot be null');
        }
        $this->container['departments_allowed_to_forward'] = $departments_allowed_to_forward;

        return $this;
    }

    /**
     * Gets offline_message_channel_name
     *
     * @return string|null
     */
    public function getOfflineMessageChannelName()
    {
        return $this->container['offline_message_channel_name'];
    }

    /**
     * Sets offline_message_channel_name
     *
     * @param string|null $offline_message_channel_name offline_message_channel_name
     *
     * @return self
     */
    public function setOfflineMessageChannelName($offline_message_channel_name)
    {
        if (is_null($offline_message_channel_name)) {
            throw new \InvalidArgumentException('non-nullable offline_message_channel_name cannot be null');
        }
        $this->container['offline_message_channel_name'] = $offline_message_channel_name;

        return $this;
    }

    /**
     * Gets visitor_inactivity_timeout_in_seconds
     *
     * @return string|null
     */
    public function getVisitorInactivityTimeoutInSeconds()
    {
        return $this->container['visitor_inactivity_timeout_in_seconds'];
    }

    /**
     * Sets visitor_inactivity_timeout_in_seconds
     *
     * @param string|null $visitor_inactivity_timeout_in_seconds visitor_inactivity_timeout_in_seconds
     *
     * @return self
     */
    public function setVisitorInactivityTimeoutInSeconds($visitor_inactivity_timeout_in_seconds)
    {
        if (is_null($visitor_inactivity_timeout_in_seconds)) {
            throw new \InvalidArgumentException('non-nullable visitor_inactivity_timeout_in_seconds cannot be null');
        }
        $this->container['visitor_inactivity_timeout_in_seconds'] = $visitor_inactivity_timeout_in_seconds;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

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


