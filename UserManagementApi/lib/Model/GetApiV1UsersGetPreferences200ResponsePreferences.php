<?php
/**
 * GetApiV1UsersGetPreferences200ResponsePreferences
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\UserManagementApi
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

namespace WebMI\RocketChatApiClient\UserManagementApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\UserManagementApi\ObjectSerializer;

/**
 * GetApiV1UsersGetPreferences200ResponsePreferences Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\UserManagementApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1UsersGetPreferences200ResponsePreferences implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_users_getPreferences_200_response_preferences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'new_room_notification' => 'string',
        'new_message_notification' => 'string',
        'mute_focused_conversations' => 'bool',
        'use_emojis' => 'bool',
        'convert_ascii_emoji' => 'bool',
        'save_mobile_bandwidth' => 'bool',
        'collapse_media_by_default' => 'bool',
        'auto_image_load' => 'bool',
        'email_notification_mode' => 'string',
        'rooms_list_exhibition_mode' => 'string',
        'unread_alert' => 'bool',
        'notifications_sound_volume' => 'int',
        'desktop_notifications' => 'string',
        'mobile_notifications' => 'string',
        'enable_auto_away' => 'bool',
        'highlights' => 'object[]',
        'desktop_notification_duration' => 'int',
        'view_mode' => 'int',
        'hide_usernames' => 'bool',
        'hide_roles' => 'bool',
        'hide_avatars' => 'bool',
        'hide_flex_tab' => 'bool',
        'send_on_enter' => 'string',
        'room_counter_sidebar' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'new_room_notification' => null,
        'new_message_notification' => null,
        'mute_focused_conversations' => null,
        'use_emojis' => null,
        'convert_ascii_emoji' => null,
        'save_mobile_bandwidth' => null,
        'collapse_media_by_default' => null,
        'auto_image_load' => null,
        'email_notification_mode' => null,
        'rooms_list_exhibition_mode' => null,
        'unread_alert' => null,
        'notifications_sound_volume' => null,
        'desktop_notifications' => null,
        'mobile_notifications' => null,
        'enable_auto_away' => null,
        'highlights' => null,
        'desktop_notification_duration' => null,
        'view_mode' => null,
        'hide_usernames' => null,
        'hide_roles' => null,
        'hide_avatars' => null,
        'hide_flex_tab' => null,
        'send_on_enter' => null,
        'room_counter_sidebar' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'new_room_notification' => false,
        'new_message_notification' => false,
        'mute_focused_conversations' => false,
        'use_emojis' => false,
        'convert_ascii_emoji' => false,
        'save_mobile_bandwidth' => false,
        'collapse_media_by_default' => false,
        'auto_image_load' => false,
        'email_notification_mode' => false,
        'rooms_list_exhibition_mode' => false,
        'unread_alert' => false,
        'notifications_sound_volume' => false,
        'desktop_notifications' => false,
        'mobile_notifications' => false,
        'enable_auto_away' => false,
        'highlights' => false,
        'desktop_notification_duration' => false,
        'view_mode' => false,
        'hide_usernames' => false,
        'hide_roles' => false,
        'hide_avatars' => false,
        'hide_flex_tab' => false,
        'send_on_enter' => false,
        'room_counter_sidebar' => false
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
        'new_room_notification' => 'newRoomNotification',
        'new_message_notification' => 'newMessageNotification',
        'mute_focused_conversations' => 'muteFocusedConversations',
        'use_emojis' => 'useEmojis',
        'convert_ascii_emoji' => 'convertAsciiEmoji',
        'save_mobile_bandwidth' => 'saveMobileBandwidth',
        'collapse_media_by_default' => 'collapseMediaByDefault',
        'auto_image_load' => 'autoImageLoad',
        'email_notification_mode' => 'emailNotificationMode',
        'rooms_list_exhibition_mode' => 'roomsListExhibitionMode',
        'unread_alert' => 'unreadAlert',
        'notifications_sound_volume' => 'notificationsSoundVolume',
        'desktop_notifications' => 'desktopNotifications',
        'mobile_notifications' => 'mobileNotifications',
        'enable_auto_away' => 'enableAutoAway',
        'highlights' => 'highlights',
        'desktop_notification_duration' => 'desktopNotificationDuration',
        'view_mode' => 'viewMode',
        'hide_usernames' => 'hideUsernames',
        'hide_roles' => 'hideRoles',
        'hide_avatars' => 'hideAvatars',
        'hide_flex_tab' => 'hideFlexTab',
        'send_on_enter' => 'sendOnEnter',
        'room_counter_sidebar' => 'roomCounterSidebar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'new_room_notification' => 'set_new_room_notification',
        'new_message_notification' => 'set_new_message_notification',
        'mute_focused_conversations' => 'set_mute_focused_conversations',
        'use_emojis' => 'set_use_emojis',
        'convert_ascii_emoji' => 'set_convert_ascii_emoji',
        'save_mobile_bandwidth' => 'set_save_mobile_bandwidth',
        'collapse_media_by_default' => 'set_collapse_media_by_default',
        'auto_image_load' => 'set_auto_image_load',
        'email_notification_mode' => 'set_email_notification_mode',
        'rooms_list_exhibition_mode' => 'set_rooms_list_exhibition_mode',
        'unread_alert' => 'set_unread_alert',
        'notifications_sound_volume' => 'set_notifications_sound_volume',
        'desktop_notifications' => 'set_desktop_notifications',
        'mobile_notifications' => 'set_mobile_notifications',
        'enable_auto_away' => 'set_enable_auto_away',
        'highlights' => 'set_highlights',
        'desktop_notification_duration' => 'set_desktop_notification_duration',
        'view_mode' => 'set_view_mode',
        'hide_usernames' => 'set_hide_usernames',
        'hide_roles' => 'set_hide_roles',
        'hide_avatars' => 'set_hide_avatars',
        'hide_flex_tab' => 'set_hide_flex_tab',
        'send_on_enter' => 'set_send_on_enter',
        'room_counter_sidebar' => 'set_room_counter_sidebar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'new_room_notification' => 'get_new_room_notification',
        'new_message_notification' => 'get_new_message_notification',
        'mute_focused_conversations' => 'get_mute_focused_conversations',
        'use_emojis' => 'get_use_emojis',
        'convert_ascii_emoji' => 'get_convert_ascii_emoji',
        'save_mobile_bandwidth' => 'get_save_mobile_bandwidth',
        'collapse_media_by_default' => 'get_collapse_media_by_default',
        'auto_image_load' => 'get_auto_image_load',
        'email_notification_mode' => 'get_email_notification_mode',
        'rooms_list_exhibition_mode' => 'get_rooms_list_exhibition_mode',
        'unread_alert' => 'get_unread_alert',
        'notifications_sound_volume' => 'get_notifications_sound_volume',
        'desktop_notifications' => 'get_desktop_notifications',
        'mobile_notifications' => 'get_mobile_notifications',
        'enable_auto_away' => 'get_enable_auto_away',
        'highlights' => 'get_highlights',
        'desktop_notification_duration' => 'get_desktop_notification_duration',
        'view_mode' => 'get_view_mode',
        'hide_usernames' => 'get_hide_usernames',
        'hide_roles' => 'get_hide_roles',
        'hide_avatars' => 'get_hide_avatars',
        'hide_flex_tab' => 'get_hide_flex_tab',
        'send_on_enter' => 'get_send_on_enter',
        'room_counter_sidebar' => 'get_room_counter_sidebar'
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
        $this->setIfExists('new_room_notification', $data ?? [], null);
        $this->setIfExists('new_message_notification', $data ?? [], null);
        $this->setIfExists('mute_focused_conversations', $data ?? [], null);
        $this->setIfExists('use_emojis', $data ?? [], null);
        $this->setIfExists('convert_ascii_emoji', $data ?? [], null);
        $this->setIfExists('save_mobile_bandwidth', $data ?? [], null);
        $this->setIfExists('collapse_media_by_default', $data ?? [], null);
        $this->setIfExists('auto_image_load', $data ?? [], null);
        $this->setIfExists('email_notification_mode', $data ?? [], null);
        $this->setIfExists('rooms_list_exhibition_mode', $data ?? [], null);
        $this->setIfExists('unread_alert', $data ?? [], null);
        $this->setIfExists('notifications_sound_volume', $data ?? [], null);
        $this->setIfExists('desktop_notifications', $data ?? [], null);
        $this->setIfExists('mobile_notifications', $data ?? [], null);
        $this->setIfExists('enable_auto_away', $data ?? [], null);
        $this->setIfExists('highlights', $data ?? [], null);
        $this->setIfExists('desktop_notification_duration', $data ?? [], null);
        $this->setIfExists('view_mode', $data ?? [], null);
        $this->setIfExists('hide_usernames', $data ?? [], null);
        $this->setIfExists('hide_roles', $data ?? [], null);
        $this->setIfExists('hide_avatars', $data ?? [], null);
        $this->setIfExists('hide_flex_tab', $data ?? [], null);
        $this->setIfExists('send_on_enter', $data ?? [], null);
        $this->setIfExists('room_counter_sidebar', $data ?? [], null);
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
     * Gets new_room_notification
     *
     * @return string|null
     */
    public function get_new_room_notification()
    {
        return $this->container['new_room_notification'];
    }

    /**
     * Sets new_room_notification
     *
     * @param string|null $new_room_notification new_room_notification
     *
     * @return self
     */
    public function set_new_room_notification($new_room_notification)
    {
        if (is_null($new_room_notification)) {
            throw new \InvalidArgumentException('non-nullable new_room_notification cannot be null');
        }
        $this->container['new_room_notification'] = $new_room_notification;

        return $this;
    }

    /**
     * Gets new_message_notification
     *
     * @return string|null
     */
    public function get_new_message_notification()
    {
        return $this->container['new_message_notification'];
    }

    /**
     * Sets new_message_notification
     *
     * @param string|null $new_message_notification new_message_notification
     *
     * @return self
     */
    public function set_new_message_notification($new_message_notification)
    {
        if (is_null($new_message_notification)) {
            throw new \InvalidArgumentException('non-nullable new_message_notification cannot be null');
        }
        $this->container['new_message_notification'] = $new_message_notification;

        return $this;
    }

    /**
     * Gets mute_focused_conversations
     *
     * @return bool|null
     */
    public function get_mute_focused_conversations()
    {
        return $this->container['mute_focused_conversations'];
    }

    /**
     * Sets mute_focused_conversations
     *
     * @param bool|null $mute_focused_conversations mute_focused_conversations
     *
     * @return self
     */
    public function set_mute_focused_conversations($mute_focused_conversations)
    {
        if (is_null($mute_focused_conversations)) {
            throw new \InvalidArgumentException('non-nullable mute_focused_conversations cannot be null');
        }
        $this->container['mute_focused_conversations'] = $mute_focused_conversations;

        return $this;
    }

    /**
     * Gets use_emojis
     *
     * @return bool|null
     */
    public function get_use_emojis()
    {
        return $this->container['use_emojis'];
    }

    /**
     * Sets use_emojis
     *
     * @param bool|null $use_emojis use_emojis
     *
     * @return self
     */
    public function set_use_emojis($use_emojis)
    {
        if (is_null($use_emojis)) {
            throw new \InvalidArgumentException('non-nullable use_emojis cannot be null');
        }
        $this->container['use_emojis'] = $use_emojis;

        return $this;
    }

    /**
     * Gets convert_ascii_emoji
     *
     * @return bool|null
     */
    public function get_convert_ascii_emoji()
    {
        return $this->container['convert_ascii_emoji'];
    }

    /**
     * Sets convert_ascii_emoji
     *
     * @param bool|null $convert_ascii_emoji convert_ascii_emoji
     *
     * @return self
     */
    public function set_convert_ascii_emoji($convert_ascii_emoji)
    {
        if (is_null($convert_ascii_emoji)) {
            throw new \InvalidArgumentException('non-nullable convert_ascii_emoji cannot be null');
        }
        $this->container['convert_ascii_emoji'] = $convert_ascii_emoji;

        return $this;
    }

    /**
     * Gets save_mobile_bandwidth
     *
     * @return bool|null
     */
    public function get_save_mobile_bandwidth()
    {
        return $this->container['save_mobile_bandwidth'];
    }

    /**
     * Sets save_mobile_bandwidth
     *
     * @param bool|null $save_mobile_bandwidth save_mobile_bandwidth
     *
     * @return self
     */
    public function set_save_mobile_bandwidth($save_mobile_bandwidth)
    {
        if (is_null($save_mobile_bandwidth)) {
            throw new \InvalidArgumentException('non-nullable save_mobile_bandwidth cannot be null');
        }
        $this->container['save_mobile_bandwidth'] = $save_mobile_bandwidth;

        return $this;
    }

    /**
     * Gets collapse_media_by_default
     *
     * @return bool|null
     */
    public function get_collapse_media_by_default()
    {
        return $this->container['collapse_media_by_default'];
    }

    /**
     * Sets collapse_media_by_default
     *
     * @param bool|null $collapse_media_by_default collapse_media_by_default
     *
     * @return self
     */
    public function set_collapse_media_by_default($collapse_media_by_default)
    {
        if (is_null($collapse_media_by_default)) {
            throw new \InvalidArgumentException('non-nullable collapse_media_by_default cannot be null');
        }
        $this->container['collapse_media_by_default'] = $collapse_media_by_default;

        return $this;
    }

    /**
     * Gets auto_image_load
     *
     * @return bool|null
     */
    public function get_auto_image_load()
    {
        return $this->container['auto_image_load'];
    }

    /**
     * Sets auto_image_load
     *
     * @param bool|null $auto_image_load auto_image_load
     *
     * @return self
     */
    public function set_auto_image_load($auto_image_load)
    {
        if (is_null($auto_image_load)) {
            throw new \InvalidArgumentException('non-nullable auto_image_load cannot be null');
        }
        $this->container['auto_image_load'] = $auto_image_load;

        return $this;
    }

    /**
     * Gets email_notification_mode
     *
     * @return string|null
     */
    public function get_email_notification_mode()
    {
        return $this->container['email_notification_mode'];
    }

    /**
     * Sets email_notification_mode
     *
     * @param string|null $email_notification_mode email_notification_mode
     *
     * @return self
     */
    public function set_email_notification_mode($email_notification_mode)
    {
        if (is_null($email_notification_mode)) {
            throw new \InvalidArgumentException('non-nullable email_notification_mode cannot be null');
        }
        $this->container['email_notification_mode'] = $email_notification_mode;

        return $this;
    }

    /**
     * Gets rooms_list_exhibition_mode
     *
     * @return string|null
     */
    public function get_rooms_list_exhibition_mode()
    {
        return $this->container['rooms_list_exhibition_mode'];
    }

    /**
     * Sets rooms_list_exhibition_mode
     *
     * @param string|null $rooms_list_exhibition_mode rooms_list_exhibition_mode
     *
     * @return self
     */
    public function set_rooms_list_exhibition_mode($rooms_list_exhibition_mode)
    {
        if (is_null($rooms_list_exhibition_mode)) {
            throw new \InvalidArgumentException('non-nullable rooms_list_exhibition_mode cannot be null');
        }
        $this->container['rooms_list_exhibition_mode'] = $rooms_list_exhibition_mode;

        return $this;
    }

    /**
     * Gets unread_alert
     *
     * @return bool|null
     */
    public function get_unread_alert()
    {
        return $this->container['unread_alert'];
    }

    /**
     * Sets unread_alert
     *
     * @param bool|null $unread_alert unread_alert
     *
     * @return self
     */
    public function set_unread_alert($unread_alert)
    {
        if (is_null($unread_alert)) {
            throw new \InvalidArgumentException('non-nullable unread_alert cannot be null');
        }
        $this->container['unread_alert'] = $unread_alert;

        return $this;
    }

    /**
     * Gets notifications_sound_volume
     *
     * @return int|null
     */
    public function get_notifications_sound_volume()
    {
        return $this->container['notifications_sound_volume'];
    }

    /**
     * Sets notifications_sound_volume
     *
     * @param int|null $notifications_sound_volume notifications_sound_volume
     *
     * @return self
     */
    public function set_notifications_sound_volume($notifications_sound_volume)
    {
        if (is_null($notifications_sound_volume)) {
            throw new \InvalidArgumentException('non-nullable notifications_sound_volume cannot be null');
        }
        $this->container['notifications_sound_volume'] = $notifications_sound_volume;

        return $this;
    }

    /**
     * Gets desktop_notifications
     *
     * @return string|null
     */
    public function get_desktop_notifications()
    {
        return $this->container['desktop_notifications'];
    }

    /**
     * Sets desktop_notifications
     *
     * @param string|null $desktop_notifications desktop_notifications
     *
     * @return self
     */
    public function set_desktop_notifications($desktop_notifications)
    {
        if (is_null($desktop_notifications)) {
            throw new \InvalidArgumentException('non-nullable desktop_notifications cannot be null');
        }
        $this->container['desktop_notifications'] = $desktop_notifications;

        return $this;
    }

    /**
     * Gets mobile_notifications
     *
     * @return string|null
     */
    public function get_mobile_notifications()
    {
        return $this->container['mobile_notifications'];
    }

    /**
     * Sets mobile_notifications
     *
     * @param string|null $mobile_notifications mobile_notifications
     *
     * @return self
     */
    public function set_mobile_notifications($mobile_notifications)
    {
        if (is_null($mobile_notifications)) {
            throw new \InvalidArgumentException('non-nullable mobile_notifications cannot be null');
        }
        $this->container['mobile_notifications'] = $mobile_notifications;

        return $this;
    }

    /**
     * Gets enable_auto_away
     *
     * @return bool|null
     */
    public function get_enable_auto_away()
    {
        return $this->container['enable_auto_away'];
    }

    /**
     * Sets enable_auto_away
     *
     * @param bool|null $enable_auto_away enable_auto_away
     *
     * @return self
     */
    public function set_enable_auto_away($enable_auto_away)
    {
        if (is_null($enable_auto_away)) {
            throw new \InvalidArgumentException('non-nullable enable_auto_away cannot be null');
        }
        $this->container['enable_auto_away'] = $enable_auto_away;

        return $this;
    }

    /**
     * Gets highlights
     *
     * @return object[]|null
     */
    public function get_highlights()
    {
        return $this->container['highlights'];
    }

    /**
     * Sets highlights
     *
     * @param object[]|null $highlights highlights
     *
     * @return self
     */
    public function set_highlights($highlights)
    {
        if (is_null($highlights)) {
            throw new \InvalidArgumentException('non-nullable highlights cannot be null');
        }
        $this->container['highlights'] = $highlights;

        return $this;
    }

    /**
     * Gets desktop_notification_duration
     *
     * @return int|null
     */
    public function get_desktop_notification_duration()
    {
        return $this->container['desktop_notification_duration'];
    }

    /**
     * Sets desktop_notification_duration
     *
     * @param int|null $desktop_notification_duration desktop_notification_duration
     *
     * @return self
     */
    public function set_desktop_notification_duration($desktop_notification_duration)
    {
        if (is_null($desktop_notification_duration)) {
            throw new \InvalidArgumentException('non-nullable desktop_notification_duration cannot be null');
        }
        $this->container['desktop_notification_duration'] = $desktop_notification_duration;

        return $this;
    }

    /**
     * Gets view_mode
     *
     * @return int|null
     */
    public function get_view_mode()
    {
        return $this->container['view_mode'];
    }

    /**
     * Sets view_mode
     *
     * @param int|null $view_mode view_mode
     *
     * @return self
     */
    public function set_view_mode($view_mode)
    {
        if (is_null($view_mode)) {
            throw new \InvalidArgumentException('non-nullable view_mode cannot be null');
        }
        $this->container['view_mode'] = $view_mode;

        return $this;
    }

    /**
     * Gets hide_usernames
     *
     * @return bool|null
     */
    public function get_hide_usernames()
    {
        return $this->container['hide_usernames'];
    }

    /**
     * Sets hide_usernames
     *
     * @param bool|null $hide_usernames hide_usernames
     *
     * @return self
     */
    public function set_hide_usernames($hide_usernames)
    {
        if (is_null($hide_usernames)) {
            throw new \InvalidArgumentException('non-nullable hide_usernames cannot be null');
        }
        $this->container['hide_usernames'] = $hide_usernames;

        return $this;
    }

    /**
     * Gets hide_roles
     *
     * @return bool|null
     */
    public function get_hide_roles()
    {
        return $this->container['hide_roles'];
    }

    /**
     * Sets hide_roles
     *
     * @param bool|null $hide_roles hide_roles
     *
     * @return self
     */
    public function set_hide_roles($hide_roles)
    {
        if (is_null($hide_roles)) {
            throw new \InvalidArgumentException('non-nullable hide_roles cannot be null');
        }
        $this->container['hide_roles'] = $hide_roles;

        return $this;
    }

    /**
     * Gets hide_avatars
     *
     * @return bool|null
     */
    public function get_hide_avatars()
    {
        return $this->container['hide_avatars'];
    }

    /**
     * Sets hide_avatars
     *
     * @param bool|null $hide_avatars hide_avatars
     *
     * @return self
     */
    public function set_hide_avatars($hide_avatars)
    {
        if (is_null($hide_avatars)) {
            throw new \InvalidArgumentException('non-nullable hide_avatars cannot be null');
        }
        $this->container['hide_avatars'] = $hide_avatars;

        return $this;
    }

    /**
     * Gets hide_flex_tab
     *
     * @return bool|null
     */
    public function get_hide_flex_tab()
    {
        return $this->container['hide_flex_tab'];
    }

    /**
     * Sets hide_flex_tab
     *
     * @param bool|null $hide_flex_tab hide_flex_tab
     *
     * @return self
     */
    public function set_hide_flex_tab($hide_flex_tab)
    {
        if (is_null($hide_flex_tab)) {
            throw new \InvalidArgumentException('non-nullable hide_flex_tab cannot be null');
        }
        $this->container['hide_flex_tab'] = $hide_flex_tab;

        return $this;
    }

    /**
     * Gets send_on_enter
     *
     * @return string|null
     */
    public function get_send_on_enter()
    {
        return $this->container['send_on_enter'];
    }

    /**
     * Sets send_on_enter
     *
     * @param string|null $send_on_enter send_on_enter
     *
     * @return self
     */
    public function set_send_on_enter($send_on_enter)
    {
        if (is_null($send_on_enter)) {
            throw new \InvalidArgumentException('non-nullable send_on_enter cannot be null');
        }
        $this->container['send_on_enter'] = $send_on_enter;

        return $this;
    }

    /**
     * Gets room_counter_sidebar
     *
     * @return bool|null
     */
    public function get_room_counter_sidebar()
    {
        return $this->container['room_counter_sidebar'];
    }

    /**
     * Sets room_counter_sidebar
     *
     * @param bool|null $room_counter_sidebar room_counter_sidebar
     *
     * @return self
     */
    public function set_room_counter_sidebar($room_counter_sidebar)
    {
        if (is_null($room_counter_sidebar)) {
            throw new \InvalidArgumentException('non-nullable room_counter_sidebar cannot be null');
        }
        $this->container['room_counter_sidebar'] = $room_counter_sidebar;

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


