<?php
/**
 * GetApiV1LivechatAppearance200ResponseAppearanceInner
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
 * GetApiV1LivechatAppearance200ResponseAppearanceInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatAppearance200ResponseAppearanceInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_appearance_200_response_appearance_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'type' => 'string',
        'group' => 'string',
        'public' => 'bool',
        'i18n_label' => 'string',
        'package_value' => 'bool',
        'value_source' => 'string',
        'hidden' => 'bool',
        'blocked' => 'bool',
        'sorter' => 'int',
        'i18n_description' => 'string',
        'autocomplete' => 'bool',
        'ts' => 'string',
        '_updated_at' => 'string',
        'created_at' => 'string',
        'value' => 'bool',
        'secret' => 'bool',
        'section' => 'string',
        'enterprise' => 'bool',
        'required_on_wizard' => 'bool',
        'env' => 'bool',
        'enable_query' => 'string',
        'editor' => 'string',
        'package_editor' => 'string'
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
        'type' => null,
        'group' => null,
        'public' => null,
        'i18n_label' => null,
        'package_value' => null,
        'value_source' => null,
        'hidden' => null,
        'blocked' => null,
        'sorter' => null,
        'i18n_description' => null,
        'autocomplete' => null,
        'ts' => null,
        '_updated_at' => null,
        'created_at' => null,
        'value' => null,
        'secret' => null,
        'section' => null,
        'enterprise' => null,
        'required_on_wizard' => null,
        'env' => null,
        'enable_query' => null,
        'editor' => null,
        'package_editor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'type' => false,
        'group' => false,
        'public' => false,
        'i18n_label' => false,
        'package_value' => false,
        'value_source' => false,
        'hidden' => false,
        'blocked' => false,
        'sorter' => false,
        'i18n_description' => false,
        'autocomplete' => false,
        'ts' => false,
        '_updated_at' => false,
        'created_at' => false,
        'value' => false,
        'secret' => false,
        'section' => false,
        'enterprise' => false,
        'required_on_wizard' => false,
        'env' => false,
        'enable_query' => false,
        'editor' => false,
        'package_editor' => false
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
        'type' => 'type',
        'group' => 'group',
        'public' => 'public',
        'i18n_label' => 'i18nLabel',
        'package_value' => 'packageValue',
        'value_source' => 'valueSource',
        'hidden' => 'hidden',
        'blocked' => 'blocked',
        'sorter' => 'sorter',
        'i18n_description' => 'i18nDescription',
        'autocomplete' => 'autocomplete',
        'ts' => 'ts',
        '_updated_at' => '_updatedAt',
        'created_at' => 'createdAt',
        'value' => 'value',
        'secret' => 'secret',
        'section' => 'section',
        'enterprise' => 'enterprise',
        'required_on_wizard' => 'requiredOnWizard',
        'env' => 'env',
        'enable_query' => 'enableQuery',
        'editor' => 'editor',
        'package_editor' => 'packageEditor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'type' => 'set_type',
        'group' => 'set_group',
        'public' => 'set_public',
        'i18n_label' => 'set_i18n_label',
        'package_value' => 'set_package_value',
        'value_source' => 'set_value_source',
        'hidden' => 'set_hidden',
        'blocked' => 'set_blocked',
        'sorter' => 'set_sorter',
        'i18n_description' => 'set_i18n_description',
        'autocomplete' => 'set_autocomplete',
        'ts' => 'set_ts',
        '_updated_at' => 'set__updated_at',
        'created_at' => 'set_created_at',
        'value' => 'set_value',
        'secret' => 'set_secret',
        'section' => 'set_section',
        'enterprise' => 'set_enterprise',
        'required_on_wizard' => 'set_required_on_wizard',
        'env' => 'set_env',
        'enable_query' => 'set_enable_query',
        'editor' => 'set_editor',
        'package_editor' => 'set_package_editor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'type' => 'get_type',
        'group' => 'get_group',
        'public' => 'get_public',
        'i18n_label' => 'get_i18n_label',
        'package_value' => 'get_package_value',
        'value_source' => 'get_value_source',
        'hidden' => 'get_hidden',
        'blocked' => 'get_blocked',
        'sorter' => 'get_sorter',
        'i18n_description' => 'get_i18n_description',
        'autocomplete' => 'get_autocomplete',
        'ts' => 'get_ts',
        '_updated_at' => 'get__updated_at',
        'created_at' => 'get_created_at',
        'value' => 'get_value',
        'secret' => 'get_secret',
        'section' => 'get_section',
        'enterprise' => 'get_enterprise',
        'required_on_wizard' => 'get_required_on_wizard',
        'env' => 'get_env',
        'enable_query' => 'get_enable_query',
        'editor' => 'get_editor',
        'package_editor' => 'get_package_editor'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('public', $data ?? [], null);
        $this->setIfExists('i18n_label', $data ?? [], null);
        $this->setIfExists('package_value', $data ?? [], null);
        $this->setIfExists('value_source', $data ?? [], null);
        $this->setIfExists('hidden', $data ?? [], null);
        $this->setIfExists('blocked', $data ?? [], null);
        $this->setIfExists('sorter', $data ?? [], null);
        $this->setIfExists('i18n_description', $data ?? [], null);
        $this->setIfExists('autocomplete', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('secret', $data ?? [], null);
        $this->setIfExists('section', $data ?? [], null);
        $this->setIfExists('enterprise', $data ?? [], null);
        $this->setIfExists('required_on_wizard', $data ?? [], null);
        $this->setIfExists('env', $data ?? [], null);
        $this->setIfExists('enable_query', $data ?? [], null);
        $this->setIfExists('editor', $data ?? [], null);
        $this->setIfExists('package_editor', $data ?? [], null);
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
     * Gets type
     *
     * @return string|null
     */
    public function get_type()
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
    public function set_type($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function get_group()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group group
     *
     * @return self
     */
    public function set_group($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool|null
     */
    public function get_public()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool|null $public public
     *
     * @return self
     */
    public function set_public($public)
    {
        if (is_null($public)) {
            throw new \InvalidArgumentException('non-nullable public cannot be null');
        }
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets i18n_label
     *
     * @return string|null
     */
    public function get_i18n_label()
    {
        return $this->container['i18n_label'];
    }

    /**
     * Sets i18n_label
     *
     * @param string|null $i18n_label i18n_label
     *
     * @return self
     */
    public function set_i18n_label($i18n_label)
    {
        if (is_null($i18n_label)) {
            throw new \InvalidArgumentException('non-nullable i18n_label cannot be null');
        }
        $this->container['i18n_label'] = $i18n_label;

        return $this;
    }

    /**
     * Gets package_value
     *
     * @return bool|null
     */
    public function get_package_value()
    {
        return $this->container['package_value'];
    }

    /**
     * Sets package_value
     *
     * @param bool|null $package_value package_value
     *
     * @return self
     */
    public function set_package_value($package_value)
    {
        if (is_null($package_value)) {
            throw new \InvalidArgumentException('non-nullable package_value cannot be null');
        }
        $this->container['package_value'] = $package_value;

        return $this;
    }

    /**
     * Gets value_source
     *
     * @return string|null
     */
    public function get_value_source()
    {
        return $this->container['value_source'];
    }

    /**
     * Sets value_source
     *
     * @param string|null $value_source value_source
     *
     * @return self
     */
    public function set_value_source($value_source)
    {
        if (is_null($value_source)) {
            throw new \InvalidArgumentException('non-nullable value_source cannot be null');
        }
        $this->container['value_source'] = $value_source;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool|null
     */
    public function get_hidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden hidden
     *
     * @return self
     */
    public function set_hidden($hidden)
    {
        if (is_null($hidden)) {
            throw new \InvalidArgumentException('non-nullable hidden cannot be null');
        }
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets blocked
     *
     * @return bool|null
     */
    public function get_blocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     *
     * @param bool|null $blocked blocked
     *
     * @return self
     */
    public function set_blocked($blocked)
    {
        if (is_null($blocked)) {
            throw new \InvalidArgumentException('non-nullable blocked cannot be null');
        }
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets sorter
     *
     * @return int|null
     */
    public function get_sorter()
    {
        return $this->container['sorter'];
    }

    /**
     * Sets sorter
     *
     * @param int|null $sorter sorter
     *
     * @return self
     */
    public function set_sorter($sorter)
    {
        if (is_null($sorter)) {
            throw new \InvalidArgumentException('non-nullable sorter cannot be null');
        }
        $this->container['sorter'] = $sorter;

        return $this;
    }

    /**
     * Gets i18n_description
     *
     * @return string|null
     */
    public function get_i18n_description()
    {
        return $this->container['i18n_description'];
    }

    /**
     * Sets i18n_description
     *
     * @param string|null $i18n_description i18n_description
     *
     * @return self
     */
    public function set_i18n_description($i18n_description)
    {
        if (is_null($i18n_description)) {
            throw new \InvalidArgumentException('non-nullable i18n_description cannot be null');
        }
        $this->container['i18n_description'] = $i18n_description;

        return $this;
    }

    /**
     * Gets autocomplete
     *
     * @return bool|null
     */
    public function get_autocomplete()
    {
        return $this->container['autocomplete'];
    }

    /**
     * Sets autocomplete
     *
     * @param bool|null $autocomplete autocomplete
     *
     * @return self
     */
    public function set_autocomplete($autocomplete)
    {
        if (is_null($autocomplete)) {
            throw new \InvalidArgumentException('non-nullable autocomplete cannot be null');
        }
        $this->container['autocomplete'] = $autocomplete;

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
     * Gets created_at
     *
     * @return string|null
     */
    public function get_created_at()
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
    public function set_created_at($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets value
     *
     * @return bool|null
     */
    public function get_value()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param bool|null $value value
     *
     * @return self
     */
    public function set_value($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return bool|null
     */
    public function get_secret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param bool|null $secret secret
     *
     * @return self
     */
    public function set_secret($secret)
    {
        if (is_null($secret)) {
            throw new \InvalidArgumentException('non-nullable secret cannot be null');
        }
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets section
     *
     * @return string|null
     */
    public function get_section()
    {
        return $this->container['section'];
    }

    /**
     * Sets section
     *
     * @param string|null $section section
     *
     * @return self
     */
    public function set_section($section)
    {
        if (is_null($section)) {
            throw new \InvalidArgumentException('non-nullable section cannot be null');
        }
        $this->container['section'] = $section;

        return $this;
    }

    /**
     * Gets enterprise
     *
     * @return bool|null
     */
    public function get_enterprise()
    {
        return $this->container['enterprise'];
    }

    /**
     * Sets enterprise
     *
     * @param bool|null $enterprise enterprise
     *
     * @return self
     */
    public function set_enterprise($enterprise)
    {
        if (is_null($enterprise)) {
            throw new \InvalidArgumentException('non-nullable enterprise cannot be null');
        }
        $this->container['enterprise'] = $enterprise;

        return $this;
    }

    /**
     * Gets required_on_wizard
     *
     * @return bool|null
     */
    public function get_required_on_wizard()
    {
        return $this->container['required_on_wizard'];
    }

    /**
     * Sets required_on_wizard
     *
     * @param bool|null $required_on_wizard required_on_wizard
     *
     * @return self
     */
    public function set_required_on_wizard($required_on_wizard)
    {
        if (is_null($required_on_wizard)) {
            throw new \InvalidArgumentException('non-nullable required_on_wizard cannot be null');
        }
        $this->container['required_on_wizard'] = $required_on_wizard;

        return $this;
    }

    /**
     * Gets env
     *
     * @return bool|null
     */
    public function get_env()
    {
        return $this->container['env'];
    }

    /**
     * Sets env
     *
     * @param bool|null $env env
     *
     * @return self
     */
    public function set_env($env)
    {
        if (is_null($env)) {
            throw new \InvalidArgumentException('non-nullable env cannot be null');
        }
        $this->container['env'] = $env;

        return $this;
    }

    /**
     * Gets enable_query
     *
     * @return string|null
     */
    public function get_enable_query()
    {
        return $this->container['enable_query'];
    }

    /**
     * Sets enable_query
     *
     * @param string|null $enable_query enable_query
     *
     * @return self
     */
    public function set_enable_query($enable_query)
    {
        if (is_null($enable_query)) {
            throw new \InvalidArgumentException('non-nullable enable_query cannot be null');
        }
        $this->container['enable_query'] = $enable_query;

        return $this;
    }

    /**
     * Gets editor
     *
     * @return string|null
     */
    public function get_editor()
    {
        return $this->container['editor'];
    }

    /**
     * Sets editor
     *
     * @param string|null $editor editor
     *
     * @return self
     */
    public function set_editor($editor)
    {
        if (is_null($editor)) {
            throw new \InvalidArgumentException('non-nullable editor cannot be null');
        }
        $this->container['editor'] = $editor;

        return $this;
    }

    /**
     * Gets package_editor
     *
     * @return string|null
     */
    public function get_package_editor()
    {
        return $this->container['package_editor'];
    }

    /**
     * Sets package_editor
     *
     * @param string|null $package_editor package_editor
     *
     * @return self
     */
    public function set_package_editor($package_editor)
    {
        if (is_null($package_editor)) {
            throw new \InvalidArgumentException('non-nullable package_editor cannot be null');
        }
        $this->container['package_editor'] = $package_editor;

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


