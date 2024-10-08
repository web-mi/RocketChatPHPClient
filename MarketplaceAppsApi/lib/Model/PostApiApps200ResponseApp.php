<?php
/**
 * PostApiApps200ResponseApp
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\MarketplaceAppsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketplace Apps
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

namespace WebMI\RocketChatApiClient\MarketplaceAppsApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\MarketplaceAppsApi\ObjectSerializer;

/**
 * PostApiApps200ResponseApp Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\MarketplaceAppsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiApps200ResponseApp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_apps_200_response_app';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version' => 'string',
        'required_api_version' => 'string',
        'icon_file' => 'string',
        'author' => '\WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiApps200ResponseAppAuthor',
        'name' => 'string',
        'name_slug' => 'string',
        'class_file' => 'string',
        'description' => 'string',
        'implements' => 'object[]',
        'icon_file_content' => 'string',
        'status' => 'string'
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
        'version' => null,
        'required_api_version' => null,
        'icon_file' => null,
        'author' => null,
        'name' => null,
        'name_slug' => null,
        'class_file' => null,
        'description' => null,
        'implements' => null,
        'icon_file_content' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'version' => false,
        'required_api_version' => false,
        'icon_file' => false,
        'author' => false,
        'name' => false,
        'name_slug' => false,
        'class_file' => false,
        'description' => false,
        'implements' => false,
        'icon_file_content' => false,
        'status' => false
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
        'version' => 'version',
        'required_api_version' => 'requiredApiVersion',
        'icon_file' => 'iconFile',
        'author' => 'author',
        'name' => 'name',
        'name_slug' => 'nameSlug',
        'class_file' => 'classFile',
        'description' => 'description',
        'implements' => 'implements',
        'icon_file_content' => 'iconFileContent',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'set_id',
        'version' => 'set_version',
        'required_api_version' => 'set_required_api_version',
        'icon_file' => 'set_icon_file',
        'author' => 'set_author',
        'name' => 'set_name',
        'name_slug' => 'set_name_slug',
        'class_file' => 'set_class_file',
        'description' => 'set_description',
        'implements' => 'set_implements',
        'icon_file_content' => 'set_icon_file_content',
        'status' => 'set_status'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'get_id',
        'version' => 'get_version',
        'required_api_version' => 'get_required_api_version',
        'icon_file' => 'get_icon_file',
        'author' => 'get_author',
        'name' => 'get_name',
        'name_slug' => 'get_name_slug',
        'class_file' => 'get_class_file',
        'description' => 'get_description',
        'implements' => 'get_implements',
        'icon_file_content' => 'get_icon_file_content',
        'status' => 'get_status'
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
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('required_api_version', $data ?? [], null);
        $this->setIfExists('icon_file', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name_slug', $data ?? [], null);
        $this->setIfExists('class_file', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('implements', $data ?? [], null);
        $this->setIfExists('icon_file_content', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
    public function get_id()
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
    public function set_id($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function get_version()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function set_version($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets required_api_version
     *
     * @return string|null
     */
    public function get_required_api_version()
    {
        return $this->container['required_api_version'];
    }

    /**
     * Sets required_api_version
     *
     * @param string|null $required_api_version required_api_version
     *
     * @return self
     */
    public function set_required_api_version($required_api_version)
    {
        if (is_null($required_api_version)) {
            throw new \InvalidArgumentException('non-nullable required_api_version cannot be null');
        }
        $this->container['required_api_version'] = $required_api_version;

        return $this;
    }

    /**
     * Gets icon_file
     *
     * @return string|null
     */
    public function get_icon_file()
    {
        return $this->container['icon_file'];
    }

    /**
     * Sets icon_file
     *
     * @param string|null $icon_file icon_file
     *
     * @return self
     */
    public function set_icon_file($icon_file)
    {
        if (is_null($icon_file)) {
            throw new \InvalidArgumentException('non-nullable icon_file cannot be null');
        }
        $this->container['icon_file'] = $icon_file;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiApps200ResponseAppAuthor|null
     */
    public function get_author()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiApps200ResponseAppAuthor|null $author author
     *
     * @return self
     */
    public function set_author($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

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
     * @param string|null $name name
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
     * Gets name_slug
     *
     * @return string|null
     */
    public function get_name_slug()
    {
        return $this->container['name_slug'];
    }

    /**
     * Sets name_slug
     *
     * @param string|null $name_slug name_slug
     *
     * @return self
     */
    public function set_name_slug($name_slug)
    {
        if (is_null($name_slug)) {
            throw new \InvalidArgumentException('non-nullable name_slug cannot be null');
        }
        $this->container['name_slug'] = $name_slug;

        return $this;
    }

    /**
     * Gets class_file
     *
     * @return string|null
     */
    public function get_class_file()
    {
        return $this->container['class_file'];
    }

    /**
     * Sets class_file
     *
     * @param string|null $class_file class_file
     *
     * @return self
     */
    public function set_class_file($class_file)
    {
        if (is_null($class_file)) {
            throw new \InvalidArgumentException('non-nullable class_file cannot be null');
        }
        $this->container['class_file'] = $class_file;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function get_description()
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
    public function set_description($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets implements
     *
     * @return object[]|null
     */
    public function get_implements()
    {
        return $this->container['implements'];
    }

    /**
     * Sets implements
     *
     * @param object[]|null $implements implements
     *
     * @return self
     */
    public function set_implements($implements)
    {
        if (is_null($implements)) {
            throw new \InvalidArgumentException('non-nullable implements cannot be null');
        }
        $this->container['implements'] = $implements;

        return $this;
    }

    /**
     * Gets icon_file_content
     *
     * @return string|null
     */
    public function get_icon_file_content()
    {
        return $this->container['icon_file_content'];
    }

    /**
     * Sets icon_file_content
     *
     * @param string|null $icon_file_content icon_file_content
     *
     * @return self
     */
    public function set_icon_file_content($icon_file_content)
    {
        if (is_null($icon_file_content)) {
            throw new \InvalidArgumentException('non-nullable icon_file_content cannot be null');
        }
        $this->container['icon_file_content'] = $icon_file_content;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function get_status()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function set_status($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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


