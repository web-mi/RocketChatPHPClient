<?php
/**
 * GetApiV1SettingsOauth200ResponseServicesInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\SettingsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Settings
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

namespace WebMI\RocketChatApiClient\SettingsApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\SettingsApi\ObjectSerializer;

/**
 * GetApiV1SettingsOauth200ResponseServicesInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\SettingsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1SettingsOauth200ResponseServicesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_settings_oauth_200_response_services_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'name' => 'string',
        'client_id' => 'string',
        'button_label_text' => 'string',
        'button_color' => 'string',
        'button_label_color' => 'string',
        'custom' => 'bool',
        'service' => 'string',
        'server_url' => 'string',
        'token_path' => 'string',
        'identity_path' => 'string',
        'authorize_path' => 'string',
        'scope' => 'string',
        'login_style' => 'string',
        'token_sent_via' => 'string',
        'identity_token_sent_via' => 'string',
        'username_field' => 'string',
        'merge_users' => 'bool'
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
        'name' => null,
        'client_id' => null,
        'button_label_text' => null,
        'button_color' => null,
        'button_label_color' => null,
        'custom' => null,
        'service' => null,
        'server_url' => null,
        'token_path' => null,
        'identity_path' => null,
        'authorize_path' => null,
        'scope' => null,
        'login_style' => null,
        'token_sent_via' => null,
        'identity_token_sent_via' => null,
        'username_field' => null,
        'merge_users' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'name' => false,
        'client_id' => false,
        'button_label_text' => false,
        'button_color' => false,
        'button_label_color' => false,
        'custom' => false,
        'service' => false,
        'server_url' => false,
        'token_path' => false,
        'identity_path' => false,
        'authorize_path' => false,
        'scope' => false,
        'login_style' => false,
        'token_sent_via' => false,
        'identity_token_sent_via' => false,
        'username_field' => false,
        'merge_users' => false
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
        'name' => 'name',
        'client_id' => 'clientId',
        'button_label_text' => 'buttonLabelText',
        'button_color' => 'buttonColor',
        'button_label_color' => 'buttonLabelColor',
        'custom' => 'custom',
        'service' => 'service',
        'server_url' => 'serverURL',
        'token_path' => 'tokenPath',
        'identity_path' => 'identityPath',
        'authorize_path' => 'authorizePath',
        'scope' => 'scope',
        'login_style' => 'loginStyle',
        'token_sent_via' => 'tokenSentVia',
        'identity_token_sent_via' => 'identityTokenSentVia',
        'username_field' => 'usernameField',
        'merge_users' => 'mergeUsers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'name' => 'setName',
        'client_id' => 'setClientId',
        'button_label_text' => 'setButtonLabelText',
        'button_color' => 'setButtonColor',
        'button_label_color' => 'setButtonLabelColor',
        'custom' => 'setCustom',
        'service' => 'setService',
        'server_url' => 'setServerUrl',
        'token_path' => 'setTokenPath',
        'identity_path' => 'setIdentityPath',
        'authorize_path' => 'setAuthorizePath',
        'scope' => 'setScope',
        'login_style' => 'setLoginStyle',
        'token_sent_via' => 'setTokenSentVia',
        'identity_token_sent_via' => 'setIdentityTokenSentVia',
        'username_field' => 'setUsernameField',
        'merge_users' => 'setMergeUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'name' => 'getName',
        'client_id' => 'getClientId',
        'button_label_text' => 'getButtonLabelText',
        'button_color' => 'getButtonColor',
        'button_label_color' => 'getButtonLabelColor',
        'custom' => 'getCustom',
        'service' => 'getService',
        'server_url' => 'getServerUrl',
        'token_path' => 'getTokenPath',
        'identity_path' => 'getIdentityPath',
        'authorize_path' => 'getAuthorizePath',
        'scope' => 'getScope',
        'login_style' => 'getLoginStyle',
        'token_sent_via' => 'getTokenSentVia',
        'identity_token_sent_via' => 'getIdentityTokenSentVia',
        'username_field' => 'getUsernameField',
        'merge_users' => 'getMergeUsers'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('button_label_text', $data ?? [], null);
        $this->setIfExists('button_color', $data ?? [], null);
        $this->setIfExists('button_label_color', $data ?? [], null);
        $this->setIfExists('custom', $data ?? [], null);
        $this->setIfExists('service', $data ?? [], null);
        $this->setIfExists('server_url', $data ?? [], null);
        $this->setIfExists('token_path', $data ?? [], null);
        $this->setIfExists('identity_path', $data ?? [], null);
        $this->setIfExists('authorize_path', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('login_style', $data ?? [], null);
        $this->setIfExists('token_sent_via', $data ?? [], null);
        $this->setIfExists('identity_token_sent_via', $data ?? [], null);
        $this->setIfExists('username_field', $data ?? [], null);
        $this->setIfExists('merge_users', $data ?? [], null);
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
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id client_id
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        if (is_null($client_id)) {
            throw new \InvalidArgumentException('non-nullable client_id cannot be null');
        }
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets button_label_text
     *
     * @return string|null
     */
    public function getButtonLabelText()
    {
        return $this->container['button_label_text'];
    }

    /**
     * Sets button_label_text
     *
     * @param string|null $button_label_text button_label_text
     *
     * @return self
     */
    public function setButtonLabelText($button_label_text)
    {
        if (is_null($button_label_text)) {
            throw new \InvalidArgumentException('non-nullable button_label_text cannot be null');
        }
        $this->container['button_label_text'] = $button_label_text;

        return $this;
    }

    /**
     * Gets button_color
     *
     * @return string|null
     */
    public function getButtonColor()
    {
        return $this->container['button_color'];
    }

    /**
     * Sets button_color
     *
     * @param string|null $button_color button_color
     *
     * @return self
     */
    public function setButtonColor($button_color)
    {
        if (is_null($button_color)) {
            throw new \InvalidArgumentException('non-nullable button_color cannot be null');
        }
        $this->container['button_color'] = $button_color;

        return $this;
    }

    /**
     * Gets button_label_color
     *
     * @return string|null
     */
    public function getButtonLabelColor()
    {
        return $this->container['button_label_color'];
    }

    /**
     * Sets button_label_color
     *
     * @param string|null $button_label_color button_label_color
     *
     * @return self
     */
    public function setButtonLabelColor($button_label_color)
    {
        if (is_null($button_label_color)) {
            throw new \InvalidArgumentException('non-nullable button_label_color cannot be null');
        }
        $this->container['button_label_color'] = $button_label_color;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return bool|null
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param bool|null $custom custom
     *
     * @return self
     */
    public function setCustom($custom)
    {
        if (is_null($custom)) {
            throw new \InvalidArgumentException('non-nullable custom cannot be null');
        }
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets service
     *
     * @return string|null
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param string|null $service service
     *
     * @return self
     */
    public function setService($service)
    {
        if (is_null($service)) {
            throw new \InvalidArgumentException('non-nullable service cannot be null');
        }
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets server_url
     *
     * @return string|null
     */
    public function getServerUrl()
    {
        return $this->container['server_url'];
    }

    /**
     * Sets server_url
     *
     * @param string|null $server_url server_url
     *
     * @return self
     */
    public function setServerUrl($server_url)
    {
        if (is_null($server_url)) {
            throw new \InvalidArgumentException('non-nullable server_url cannot be null');
        }
        $this->container['server_url'] = $server_url;

        return $this;
    }

    /**
     * Gets token_path
     *
     * @return string|null
     */
    public function getTokenPath()
    {
        return $this->container['token_path'];
    }

    /**
     * Sets token_path
     *
     * @param string|null $token_path token_path
     *
     * @return self
     */
    public function setTokenPath($token_path)
    {
        if (is_null($token_path)) {
            throw new \InvalidArgumentException('non-nullable token_path cannot be null');
        }
        $this->container['token_path'] = $token_path;

        return $this;
    }

    /**
     * Gets identity_path
     *
     * @return string|null
     */
    public function getIdentityPath()
    {
        return $this->container['identity_path'];
    }

    /**
     * Sets identity_path
     *
     * @param string|null $identity_path identity_path
     *
     * @return self
     */
    public function setIdentityPath($identity_path)
    {
        if (is_null($identity_path)) {
            throw new \InvalidArgumentException('non-nullable identity_path cannot be null');
        }
        $this->container['identity_path'] = $identity_path;

        return $this;
    }

    /**
     * Gets authorize_path
     *
     * @return string|null
     */
    public function getAuthorizePath()
    {
        return $this->container['authorize_path'];
    }

    /**
     * Sets authorize_path
     *
     * @param string|null $authorize_path authorize_path
     *
     * @return self
     */
    public function setAuthorizePath($authorize_path)
    {
        if (is_null($authorize_path)) {
            throw new \InvalidArgumentException('non-nullable authorize_path cannot be null');
        }
        $this->container['authorize_path'] = $authorize_path;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets login_style
     *
     * @return string|null
     */
    public function getLoginStyle()
    {
        return $this->container['login_style'];
    }

    /**
     * Sets login_style
     *
     * @param string|null $login_style login_style
     *
     * @return self
     */
    public function setLoginStyle($login_style)
    {
        if (is_null($login_style)) {
            throw new \InvalidArgumentException('non-nullable login_style cannot be null');
        }
        $this->container['login_style'] = $login_style;

        return $this;
    }

    /**
     * Gets token_sent_via
     *
     * @return string|null
     */
    public function getTokenSentVia()
    {
        return $this->container['token_sent_via'];
    }

    /**
     * Sets token_sent_via
     *
     * @param string|null $token_sent_via token_sent_via
     *
     * @return self
     */
    public function setTokenSentVia($token_sent_via)
    {
        if (is_null($token_sent_via)) {
            throw new \InvalidArgumentException('non-nullable token_sent_via cannot be null');
        }
        $this->container['token_sent_via'] = $token_sent_via;

        return $this;
    }

    /**
     * Gets identity_token_sent_via
     *
     * @return string|null
     */
    public function getIdentityTokenSentVia()
    {
        return $this->container['identity_token_sent_via'];
    }

    /**
     * Sets identity_token_sent_via
     *
     * @param string|null $identity_token_sent_via identity_token_sent_via
     *
     * @return self
     */
    public function setIdentityTokenSentVia($identity_token_sent_via)
    {
        if (is_null($identity_token_sent_via)) {
            throw new \InvalidArgumentException('non-nullable identity_token_sent_via cannot be null');
        }
        $this->container['identity_token_sent_via'] = $identity_token_sent_via;

        return $this;
    }

    /**
     * Gets username_field
     *
     * @return string|null
     */
    public function getUsernameField()
    {
        return $this->container['username_field'];
    }

    /**
     * Sets username_field
     *
     * @param string|null $username_field username_field
     *
     * @return self
     */
    public function setUsernameField($username_field)
    {
        if (is_null($username_field)) {
            throw new \InvalidArgumentException('non-nullable username_field cannot be null');
        }
        $this->container['username_field'] = $username_field;

        return $this;
    }

    /**
     * Gets merge_users
     *
     * @return bool|null
     */
    public function getMergeUsers()
    {
        return $this->container['merge_users'];
    }

    /**
     * Sets merge_users
     *
     * @param bool|null $merge_users merge_users
     *
     * @return self
     */
    public function setMergeUsers($merge_users)
    {
        if (is_null($merge_users)) {
            throw new \InvalidArgumentException('non-nullable merge_users cannot be null');
        }
        $this->container['merge_users'] = $merge_users;

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


