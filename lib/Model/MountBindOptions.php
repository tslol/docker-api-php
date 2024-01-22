<?php
/**
 * MountBindOptions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Docker Engine API
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.44) is used. For example, calling `/info` is the same as calling `/v1.44/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a [base64url encoded](https://tools.ietf.org/html/rfc4648#section-5) (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * The version of the OpenAPI document: 1.44
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MountBindOptions Class Doc Comment
 *
 * @category Class
 * @description Optional configuration for the &#x60;bind&#x60; type.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MountBindOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Mount_BindOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'propagation' => 'string',
        'non_recursive' => 'bool',
        'create_mountpoint' => 'bool',
        'read_only_non_recursive' => 'bool',
        'read_only_force_recursive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'propagation' => null,
        'non_recursive' => null,
        'create_mountpoint' => null,
        'read_only_non_recursive' => null,
        'read_only_force_recursive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'propagation' => false,
        'non_recursive' => false,
        'create_mountpoint' => false,
        'read_only_non_recursive' => false,
        'read_only_force_recursive' => false
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
        'propagation' => 'Propagation',
        'non_recursive' => 'NonRecursive',
        'create_mountpoint' => 'CreateMountpoint',
        'read_only_non_recursive' => 'ReadOnlyNonRecursive',
        'read_only_force_recursive' => 'ReadOnlyForceRecursive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'propagation' => 'setPropagation',
        'non_recursive' => 'setNonRecursive',
        'create_mountpoint' => 'setCreateMountpoint',
        'read_only_non_recursive' => 'setReadOnlyNonRecursive',
        'read_only_force_recursive' => 'setReadOnlyForceRecursive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'propagation' => 'getPropagation',
        'non_recursive' => 'getNonRecursive',
        'create_mountpoint' => 'getCreateMountpoint',
        'read_only_non_recursive' => 'getReadOnlyNonRecursive',
        'read_only_force_recursive' => 'getReadOnlyForceRecursive'
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

    public const PROPAGATION__PRIVATE = 'private';
    public const PROPAGATION_RPRIVATE = 'rprivate';
    public const PROPAGATION_SHARED = 'shared';
    public const PROPAGATION_RSHARED = 'rshared';
    public const PROPAGATION_SLAVE = 'slave';
    public const PROPAGATION_RSLAVE = 'rslave';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropagationAllowableValues()
    {
        return [
            self::PROPAGATION__PRIVATE,
            self::PROPAGATION_RPRIVATE,
            self::PROPAGATION_SHARED,
            self::PROPAGATION_RSHARED,
            self::PROPAGATION_SLAVE,
            self::PROPAGATION_RSLAVE,
        ];
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
        $this->setIfExists('propagation', $data ?? [], null);
        $this->setIfExists('non_recursive', $data ?? [], false);
        $this->setIfExists('create_mountpoint', $data ?? [], false);
        $this->setIfExists('read_only_non_recursive', $data ?? [], false);
        $this->setIfExists('read_only_force_recursive', $data ?? [], false);
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

        $allowedValues = $this->getPropagationAllowableValues();
        if (!is_null($this->container['propagation']) && !in_array($this->container['propagation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'propagation', must be one of '%s'",
                $this->container['propagation'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets propagation
     *
     * @return string|null
     */
    public function getPropagation()
    {
        return $this->container['propagation'];
    }

    /**
     * Sets propagation
     *
     * @param string|null $propagation A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @return self
     */
    public function setPropagation($propagation)
    {
        if (is_null($propagation)) {
            throw new \InvalidArgumentException('non-nullable propagation cannot be null');
        }
        $allowedValues = $this->getPropagationAllowableValues();
        if (!in_array($propagation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'propagation', must be one of '%s'",
                    $propagation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['propagation'] = $propagation;

        return $this;
    }

    /**
     * Gets non_recursive
     *
     * @return bool|null
     */
    public function getNonRecursive()
    {
        return $this->container['non_recursive'];
    }

    /**
     * Sets non_recursive
     *
     * @param bool|null $non_recursive Disable recursive bind mount.
     *
     * @return self
     */
    public function setNonRecursive($non_recursive)
    {
        if (is_null($non_recursive)) {
            throw new \InvalidArgumentException('non-nullable non_recursive cannot be null');
        }
        $this->container['non_recursive'] = $non_recursive;

        return $this;
    }

    /**
     * Gets create_mountpoint
     *
     * @return bool|null
     */
    public function getCreateMountpoint()
    {
        return $this->container['create_mountpoint'];
    }

    /**
     * Sets create_mountpoint
     *
     * @param bool|null $create_mountpoint Create mount point on host if missing
     *
     * @return self
     */
    public function setCreateMountpoint($create_mountpoint)
    {
        if (is_null($create_mountpoint)) {
            throw new \InvalidArgumentException('non-nullable create_mountpoint cannot be null');
        }
        $this->container['create_mountpoint'] = $create_mountpoint;

        return $this;
    }

    /**
     * Gets read_only_non_recursive
     *
     * @return bool|null
     */
    public function getReadOnlyNonRecursive()
    {
        return $this->container['read_only_non_recursive'];
    }

    /**
     * Sets read_only_non_recursive
     *
     * @param bool|null $read_only_non_recursive Make the mount non-recursively read-only, but still leave the mount recursive (unless NonRecursive is set to true in conjunction).
     *
     * @return self
     */
    public function setReadOnlyNonRecursive($read_only_non_recursive)
    {
        if (is_null($read_only_non_recursive)) {
            throw new \InvalidArgumentException('non-nullable read_only_non_recursive cannot be null');
        }
        $this->container['read_only_non_recursive'] = $read_only_non_recursive;

        return $this;
    }

    /**
     * Gets read_only_force_recursive
     *
     * @return bool|null
     */
    public function getReadOnlyForceRecursive()
    {
        return $this->container['read_only_force_recursive'];
    }

    /**
     * Sets read_only_force_recursive
     *
     * @param bool|null $read_only_force_recursive Raise an error if the mount cannot be made recursively read-only.
     *
     * @return self
     */
    public function setReadOnlyForceRecursive($read_only_force_recursive)
    {
        if (is_null($read_only_force_recursive)) {
            throw new \InvalidArgumentException('non-nullable read_only_force_recursive cannot be null');
        }
        $this->container['read_only_force_recursive'] = $read_only_force_recursive;

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

