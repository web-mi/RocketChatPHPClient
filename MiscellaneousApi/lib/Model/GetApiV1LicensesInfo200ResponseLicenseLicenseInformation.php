<?php
/**
 * GetApiV1LicensesInfo200ResponseLicenseLicenseInformation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\MiscellaneousApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Miscellaneous
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

namespace WebMI\RocketChatApiClient\MiscellaneousApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\MiscellaneousApi\ObjectSerializer;

/**
 * GetApiV1LicensesInfo200ResponseLicenseLicenseInformation Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\MiscellaneousApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LicensesInfo200ResponseLicenseLicenseInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_licenses_info_200_response_license_license_information';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'auto_renew' => 'bool',
        'created_at' => 'string',
        'visual_expiration' => 'string',
        'notify_admins_at' => 'string',
        'notify_users_at' => 'string',
        'trial' => 'bool',
        'cancellable' => 'bool',
        'offline' => 'bool',
        'granted_by' => 'object',
        'granted_to' => 'object',
        'tags' => '\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerTag[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'auto_renew' => null,
        'created_at' => null,
        'visual_expiration' => null,
        'notify_admins_at' => null,
        'notify_users_at' => null,
        'trial' => null,
        'cancellable' => null,
        'offline' => null,
        'granted_by' => null,
        'granted_to' => null,
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'auto_renew' => false,
        'created_at' => false,
        'visual_expiration' => false,
        'notify_admins_at' => false,
        'notify_users_at' => false,
        'trial' => false,
        'cancellable' => false,
        'offline' => false,
        'granted_by' => false,
        'granted_to' => false,
        'tags' => false
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
        'id' => 'id',
        'auto_renew' => 'autoRenew',
        'created_at' => 'createdAt',
        'visual_expiration' => 'visualExpiration',
        'notify_admins_at' => 'notifyAdminsAt',
        'notify_users_at' => 'notifyUsersAt',
        'trial' => 'trial',
        'cancellable' => 'cancellable',
        'offline' => 'offline',
        'granted_by' => 'grantedBy',
        'granted_to' => 'grantedTo',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'auto_renew' => 'setAutoRenew',
        'created_at' => 'setCreatedAt',
        'visual_expiration' => 'setVisualExpiration',
        'notify_admins_at' => 'setNotifyAdminsAt',
        'notify_users_at' => 'setNotifyUsersAt',
        'trial' => 'setTrial',
        'cancellable' => 'setCancellable',
        'offline' => 'setOffline',
        'granted_by' => 'setGrantedBy',
        'granted_to' => 'setGrantedTo',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'auto_renew' => 'getAutoRenew',
        'created_at' => 'getCreatedAt',
        'visual_expiration' => 'getVisualExpiration',
        'notify_admins_at' => 'getNotifyAdminsAt',
        'notify_users_at' => 'getNotifyUsersAt',
        'trial' => 'getTrial',
        'cancellable' => 'getCancellable',
        'offline' => 'getOffline',
        'granted_by' => 'getGrantedBy',
        'granted_to' => 'getGrantedTo',
        'tags' => 'getTags'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('auto_renew', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('visual_expiration', $data ?? [], null);
        $this->setIfExists('notify_admins_at', $data ?? [], null);
        $this->setIfExists('notify_users_at', $data ?? [], null);
        $this->setIfExists('trial', $data ?? [], null);
        $this->setIfExists('cancellable', $data ?? [], null);
        $this->setIfExists('offline', $data ?? [], null);
        $this->setIfExists('granted_by', $data ?? [], null);
        $this->setIfExists('granted_to', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets auto_renew
     *
     * @return bool|null
     */
    public function getAutoRenew()
    {
        return $this->container['auto_renew'];
    }

    /**
     * Sets auto_renew
     *
     * @param bool|null $auto_renew auto_renew
     *
     * @return self
     */
    public function setAutoRenew($auto_renew)
    {
        if (is_null($auto_renew)) {
            throw new \InvalidArgumentException('non-nullable auto_renew cannot be null');
        }
        $this->container['auto_renew'] = $auto_renew;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets visual_expiration
     *
     * @return string|null
     */
    public function getVisualExpiration()
    {
        return $this->container['visual_expiration'];
    }

    /**
     * Sets visual_expiration
     *
     * @param string|null $visual_expiration visual_expiration
     *
     * @return self
     */
    public function setVisualExpiration($visual_expiration)
    {
        if (is_null($visual_expiration)) {
            throw new \InvalidArgumentException('non-nullable visual_expiration cannot be null');
        }
        $this->container['visual_expiration'] = $visual_expiration;

        return $this;
    }

    /**
     * Gets notify_admins_at
     *
     * @return string|null
     */
    public function getNotifyAdminsAt()
    {
        return $this->container['notify_admins_at'];
    }

    /**
     * Sets notify_admins_at
     *
     * @param string|null $notify_admins_at notify_admins_at
     *
     * @return self
     */
    public function setNotifyAdminsAt($notify_admins_at)
    {
        if (is_null($notify_admins_at)) {
            throw new \InvalidArgumentException('non-nullable notify_admins_at cannot be null');
        }
        $this->container['notify_admins_at'] = $notify_admins_at;

        return $this;
    }

    /**
     * Gets notify_users_at
     *
     * @return string|null
     */
    public function getNotifyUsersAt()
    {
        return $this->container['notify_users_at'];
    }

    /**
     * Sets notify_users_at
     *
     * @param string|null $notify_users_at notify_users_at
     *
     * @return self
     */
    public function setNotifyUsersAt($notify_users_at)
    {
        if (is_null($notify_users_at)) {
            throw new \InvalidArgumentException('non-nullable notify_users_at cannot be null');
        }
        $this->container['notify_users_at'] = $notify_users_at;

        return $this;
    }

    /**
     * Gets trial
     *
     * @return bool|null
     */
    public function getTrial()
    {
        return $this->container['trial'];
    }

    /**
     * Sets trial
     *
     * @param bool|null $trial trial
     *
     * @return self
     */
    public function setTrial($trial)
    {
        if (is_null($trial)) {
            throw new \InvalidArgumentException('non-nullable trial cannot be null');
        }
        $this->container['trial'] = $trial;

        return $this;
    }

    /**
     * Gets cancellable
     *
     * @return bool|null
     */
    public function getCancellable()
    {
        return $this->container['cancellable'];
    }

    /**
     * Sets cancellable
     *
     * @param bool|null $cancellable cancellable
     *
     * @return self
     */
    public function setCancellable($cancellable)
    {
        if (is_null($cancellable)) {
            throw new \InvalidArgumentException('non-nullable cancellable cannot be null');
        }
        $this->container['cancellable'] = $cancellable;

        return $this;
    }

    /**
     * Gets offline
     *
     * @return bool|null
     */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
     * Sets offline
     *
     * @param bool|null $offline offline
     *
     * @return self
     */
    public function setOffline($offline)
    {
        if (is_null($offline)) {
            throw new \InvalidArgumentException('non-nullable offline cannot be null');
        }
        $this->container['offline'] = $offline;

        return $this;
    }

    /**
     * Gets granted_by
     *
     * @return object|null
     */
    public function getGrantedBy()
    {
        return $this->container['granted_by'];
    }

    /**
     * Sets granted_by
     *
     * @param object|null $granted_by granted_by
     *
     * @return self
     */
    public function setGrantedBy($granted_by)
    {
        if (is_null($granted_by)) {
            throw new \InvalidArgumentException('non-nullable granted_by cannot be null');
        }
        $this->container['granted_by'] = $granted_by;

        return $this;
    }

    /**
     * Gets granted_to
     *
     * @return object|null
     */
    public function getGrantedTo()
    {
        return $this->container['granted_to'];
    }

    /**
     * Sets granted_to
     *
     * @param object|null $granted_to granted_to
     *
     * @return self
     */
    public function setGrantedTo($granted_to)
    {
        if (is_null($granted_to)) {
            throw new \InvalidArgumentException('non-nullable granted_to cannot be null');
        }
        $this->container['granted_to'] = $granted_to;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerTag[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerTag[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

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


