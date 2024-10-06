<?php
/**
 * GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInner
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
 * GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_visitors_chatHistory_room_roomId_visitor_visitorId_200_response_history_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'msgs' => 'int',
        'users_count' => 'int',
        'lm' => 'string',
        'fname' => 'string',
        't' => 'string',
        'ts' => 'string',
        'department_id' => 'string',
        'v' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatRoom200ResponseRoomV',
        'cl' => 'bool',
        'open' => 'bool',
        '_updated_at' => 'string',
        'department_ancestors' => 'string[]',
        'last_message' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerLastMessage',
        'metrics' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerMetrics',
        'waiting_response' => 'bool'
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
        'msgs' => null,
        'users_count' => null,
        'lm' => null,
        'fname' => null,
        't' => null,
        'ts' => null,
        'department_id' => null,
        'v' => null,
        'cl' => null,
        'open' => null,
        '_updated_at' => null,
        'department_ancestors' => null,
        'last_message' => null,
        'metrics' => null,
        'waiting_response' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'msgs' => false,
        'users_count' => false,
        'lm' => false,
        'fname' => false,
        't' => false,
        'ts' => false,
        'department_id' => false,
        'v' => false,
        'cl' => false,
        'open' => false,
        '_updated_at' => false,
        'department_ancestors' => false,
        'last_message' => false,
        'metrics' => false,
        'waiting_response' => false
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
        'msgs' => 'msgs',
        'users_count' => 'usersCount',
        'lm' => 'lm',
        'fname' => 'fname',
        't' => 't',
        'ts' => 'ts',
        'department_id' => 'departmentId',
        'v' => 'v',
        'cl' => 'cl',
        'open' => 'open',
        '_updated_at' => '_updatedAt',
        'department_ancestors' => 'departmentAncestors',
        'last_message' => 'lastMessage',
        'metrics' => 'metrics',
        'waiting_response' => 'waitingResponse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'msgs' => 'set_msgs',
        'users_count' => 'set_users_count',
        'lm' => 'set_lm',
        'fname' => 'set_fname',
        't' => 'set_t',
        'ts' => 'set_ts',
        'department_id' => 'set_department_id',
        'v' => 'set_v',
        'cl' => 'set_cl',
        'open' => 'set_open',
        '_updated_at' => 'set__updated_at',
        'department_ancestors' => 'set_department_ancestors',
        'last_message' => 'set_last_message',
        'metrics' => 'set_metrics',
        'waiting_response' => 'set_waiting_response'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'msgs' => 'get_msgs',
        'users_count' => 'get_users_count',
        'lm' => 'get_lm',
        'fname' => 'get_fname',
        't' => 'get_t',
        'ts' => 'get_ts',
        'department_id' => 'get_department_id',
        'v' => 'get_v',
        'cl' => 'get_cl',
        'open' => 'get_open',
        '_updated_at' => 'get__updated_at',
        'department_ancestors' => 'get_department_ancestors',
        'last_message' => 'get_last_message',
        'metrics' => 'get_metrics',
        'waiting_response' => 'get_waiting_response'
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
        $this->setIfExists('msgs', $data ?? [], null);
        $this->setIfExists('users_count', $data ?? [], null);
        $this->setIfExists('lm', $data ?? [], null);
        $this->setIfExists('fname', $data ?? [], null);
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('department_id', $data ?? [], null);
        $this->setIfExists('v', $data ?? [], null);
        $this->setIfExists('cl', $data ?? [], null);
        $this->setIfExists('open', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('department_ancestors', $data ?? [], null);
        $this->setIfExists('last_message', $data ?? [], null);
        $this->setIfExists('metrics', $data ?? [], null);
        $this->setIfExists('waiting_response', $data ?? [], null);
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
     * Gets msgs
     *
     * @return int|null
     */
    public function get_msgs()
    {
        return $this->container['msgs'];
    }

    /**
     * Sets msgs
     *
     * @param int|null $msgs msgs
     *
     * @return self
     */
    public function set_msgs($msgs)
    {
        if (is_null($msgs)) {
            throw new \InvalidArgumentException('non-nullable msgs cannot be null');
        }
        $this->container['msgs'] = $msgs;

        return $this;
    }

    /**
     * Gets users_count
     *
     * @return int|null
     */
    public function get_users_count()
    {
        return $this->container['users_count'];
    }

    /**
     * Sets users_count
     *
     * @param int|null $users_count users_count
     *
     * @return self
     */
    public function set_users_count($users_count)
    {
        if (is_null($users_count)) {
            throw new \InvalidArgumentException('non-nullable users_count cannot be null');
        }
        $this->container['users_count'] = $users_count;

        return $this;
    }

    /**
     * Gets lm
     *
     * @return string|null
     */
    public function get_lm()
    {
        return $this->container['lm'];
    }

    /**
     * Sets lm
     *
     * @param string|null $lm lm
     *
     * @return self
     */
    public function set_lm($lm)
    {
        if (is_null($lm)) {
            throw new \InvalidArgumentException('non-nullable lm cannot be null');
        }
        $this->container['lm'] = $lm;

        return $this;
    }

    /**
     * Gets fname
     *
     * @return string|null
     */
    public function get_fname()
    {
        return $this->container['fname'];
    }

    /**
     * Sets fname
     *
     * @param string|null $fname fname
     *
     * @return self
     */
    public function set_fname($fname)
    {
        if (is_null($fname)) {
            throw new \InvalidArgumentException('non-nullable fname cannot be null');
        }
        $this->container['fname'] = $fname;

        return $this;
    }

    /**
     * Gets t
     *
     * @return string|null
     */
    public function get_t()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param string|null $t t
     *
     * @return self
     */
    public function set_t($t)
    {
        if (is_null($t)) {
            throw new \InvalidArgumentException('non-nullable t cannot be null');
        }
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return string|null
     */
    public function get_ts()
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
    public function set_ts($ts)
    {
        if (is_null($ts)) {
            throw new \InvalidArgumentException('non-nullable ts cannot be null');
        }
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets department_id
     *
     * @return string|null
     */
    public function get_department_id()
    {
        return $this->container['department_id'];
    }

    /**
     * Sets department_id
     *
     * @param string|null $department_id department_id
     *
     * @return self
     */
    public function set_department_id($department_id)
    {
        if (is_null($department_id)) {
            throw new \InvalidArgumentException('non-nullable department_id cannot be null');
        }
        $this->container['department_id'] = $department_id;

        return $this;
    }

    /**
     * Gets v
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatRoom200ResponseRoomV|null
     */
    public function get_v()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatRoom200ResponseRoomV|null $v v
     *
     * @return self
     */
    public function set_v($v)
    {
        if (is_null($v)) {
            throw new \InvalidArgumentException('non-nullable v cannot be null');
        }
        $this->container['v'] = $v;

        return $this;
    }

    /**
     * Gets cl
     *
     * @return bool|null
     */
    public function get_cl()
    {
        return $this->container['cl'];
    }

    /**
     * Sets cl
     *
     * @param bool|null $cl cl
     *
     * @return self
     */
    public function set_cl($cl)
    {
        if (is_null($cl)) {
            throw new \InvalidArgumentException('non-nullable cl cannot be null');
        }
        $this->container['cl'] = $cl;

        return $this;
    }

    /**
     * Gets open
     *
     * @return bool|null
     */
    public function get_open()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     *
     * @param bool|null $open open
     *
     * @return self
     */
    public function set_open($open)
    {
        if (is_null($open)) {
            throw new \InvalidArgumentException('non-nullable open cannot be null');
        }
        $this->container['open'] = $open;

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
     * Gets department_ancestors
     *
     * @return string[]|null
     */
    public function get_department_ancestors()
    {
        return $this->container['department_ancestors'];
    }

    /**
     * Sets department_ancestors
     *
     * @param string[]|null $department_ancestors department_ancestors
     *
     * @return self
     */
    public function set_department_ancestors($department_ancestors)
    {
        if (is_null($department_ancestors)) {
            throw new \InvalidArgumentException('non-nullable department_ancestors cannot be null');
        }
        $this->container['department_ancestors'] = $department_ancestors;

        return $this;
    }

    /**
     * Gets last_message
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerLastMessage|null
     */
    public function get_last_message()
    {
        return $this->container['last_message'];
    }

    /**
     * Sets last_message
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerLastMessage|null $last_message last_message
     *
     * @return self
     */
    public function set_last_message($last_message)
    {
        if (is_null($last_message)) {
            throw new \InvalidArgumentException('non-nullable last_message cannot be null');
        }
        $this->container['last_message'] = $last_message;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerMetrics|null
     */
    public function get_metrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerMetrics|null $metrics metrics
     *
     * @return self
     */
    public function set_metrics($metrics)
    {
        if (is_null($metrics)) {
            throw new \InvalidArgumentException('non-nullable metrics cannot be null');
        }
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets waiting_response
     *
     * @return bool|null
     */
    public function get_waiting_response()
    {
        return $this->container['waiting_response'];
    }

    /**
     * Sets waiting_response
     *
     * @param bool|null $waiting_response waiting_response
     *
     * @return self
     */
    public function set_waiting_response($waiting_response)
    {
        if (is_null($waiting_response)) {
            throw new \InvalidArgumentException('non-nullable waiting_response cannot be null');
        }
        $this->container['waiting_response'] = $waiting_response;

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


