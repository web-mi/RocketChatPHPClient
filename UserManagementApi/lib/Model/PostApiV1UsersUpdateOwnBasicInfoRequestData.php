<?php
/**
 * PostApiV1UsersUpdateOwnBasicInfoRequestData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMIRocketChatApiClientUserManagementApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * User Management
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

namespace WebMIRocketChatApiClientUserManagementApi\Model;

use \ArrayAccess;
use \WebMIRocketChatApiClientUserManagementApi\ObjectSerializer;

/**
 * PostApiV1UsersUpdateOwnBasicInfoRequestData Class Doc Comment
 *
 * @category Class
 * @description An object of user data to be updated with the following parameters.
 * @package  WebMIRocketChatApiClientUserManagementApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1UsersUpdateOwnBasicInfoRequestData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_users_updateOwnBasicInfo_request_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'new_password' => 'string',
        'current_password' => 'string',
        'nickname' => 'string',
        'bio' => 'string',
        'username' => 'string',
        'name' => 'string',
        'status_type' => 'string',
        'status_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'new_password' => null,
        'current_password' => null,
        'nickname' => null,
        'bio' => null,
        'username' => null,
        'name' => null,
        'status_type' => null,
        'status_text' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
        'new_password' => false,
        'current_password' => false,
        'nickname' => false,
        'bio' => false,
        'username' => false,
        'name' => false,
        'status_type' => false,
        'status_text' => false
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
        'email' => 'email',
        'new_password' => 'newPassword',
        'current_password' => 'currentPassword',
        'nickname' => 'nickname',
        'bio' => 'bio',
        'username' => 'username',
        'name' => 'name',
        'status_type' => 'statusType',
        'status_text' => 'statusText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'new_password' => 'setNewPassword',
        'current_password' => 'setCurrentPassword',
        'nickname' => 'setNickname',
        'bio' => 'setBio',
        'username' => 'setUsername',
        'name' => 'setName',
        'status_type' => 'setStatusType',
        'status_text' => 'setStatusText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'new_password' => 'getNewPassword',
        'current_password' => 'getCurrentPassword',
        'nickname' => 'getNickname',
        'bio' => 'getBio',
        'username' => 'getUsername',
        'name' => 'getName',
        'status_type' => 'getStatusType',
        'status_text' => 'getStatusText'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('new_password', $data ?? [], null);
        $this->setIfExists('current_password', $data ?? [], null);
        $this->setIfExists('nickname', $data ?? [], null);
        $this->setIfExists('bio', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('status_type', $data ?? [], null);
        $this->setIfExists('status_text', $data ?? [], null);
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
     * @param string|null $email Email ID of the user.
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
     * Gets new_password
     *
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->container['new_password'];
    }

    /**
     * Sets new_password
     *
     * @param string|null $new_password The new password of the user.
     *
     * @return self
     */
    public function setNewPassword($new_password)
    {
        if (is_null($new_password)) {
            throw new \InvalidArgumentException('non-nullable new_password cannot be null');
        }
        $this->container['new_password'] = $new_password;

        return $this;
    }

    /**
     * Gets current_password
     *
     * @return string|null
     */
    public function getCurrentPassword()
    {
        return $this->container['current_password'];
    }

    /**
     * Sets current_password
     *
     * @param string|null $current_password The password for the user encrypted in SHA256.
     *
     * @return self
     */
    public function setCurrentPassword($current_password)
    {
        if (is_null($current_password)) {
            throw new \InvalidArgumentException('non-nullable current_password cannot be null');
        }
        $this->container['current_password'] = $current_password;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string|null $nickname The nickname of the user.
     *
     * @return self
     */
    public function setNickname($nickname)
    {
        if (is_null($nickname)) {
            throw new \InvalidArgumentException('non-nullable nickname cannot be null');
        }
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets bio
     *
     * @return string|null
     */
    public function getBio()
    {
        return $this->container['bio'];
    }

    /**
     * Sets bio
     *
     * @param string|null $bio The bio of the user.
     *
     * @return self
     */
    public function setBio($bio)
    {
        if (is_null($bio)) {
            throw new \InvalidArgumentException('non-nullable bio cannot be null');
        }
        $this->container['bio'] = $bio;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username The username of the user.
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

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
     * @param string|null $name Name of the user.
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
     * Gets status_type
     *
     * @return string|null
     */
    public function getStatusType()
    {
        return $this->container['status_type'];
    }

    /**
     * Sets status_type
     *
     * @param string|null $status_type The status type of the user. It can be `online`, `busy`, `away`, or `offline`.
     *
     * @return self
     */
    public function setStatusType($status_type)
    {
        if (is_null($status_type)) {
            throw new \InvalidArgumentException('non-nullable status_type cannot be null');
        }
        $this->container['status_type'] = $status_type;

        return $this;
    }

    /**
     * Gets status_text
     *
     * @return string|null
     */
    public function getStatusText()
    {
        return $this->container['status_text'];
    }

    /**
     * Sets status_text
     *
     * @param string|null $status_text The status text of the user.
     *
     * @return self
     */
    public function setStatusText($status_text)
    {
        if (is_null($status_text)) {
            throw new \InvalidArgumentException('non-nullable status_text cannot be null');
        }
        $this->container['status_text'] = $status_text;

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


