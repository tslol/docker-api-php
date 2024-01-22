<?php
/**
 * Task
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
 * Task Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Task implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version' => '\OpenAPI\Client\Model\ObjectVersion',
        'created_at' => 'string',
        'updated_at' => 'string',
        'name' => 'string',
        'labels' => 'array<string,string>',
        'spec' => '\OpenAPI\Client\Model\TaskSpec',
        'service_id' => 'string',
        'slot' => 'int',
        'node_id' => 'string',
        'assigned_generic_resources' => '\OpenAPI\Client\Model\GenericResourcesInner[]',
        'status' => '\OpenAPI\Client\Model\TaskStatus',
        'desired_state' => '\OpenAPI\Client\Model\TaskState',
        'job_iteration' => '\OpenAPI\Client\Model\ObjectVersion'
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
        'created_at' => 'dateTime',
        'updated_at' => 'dateTime',
        'name' => null,
        'labels' => null,
        'spec' => null,
        'service_id' => null,
        'slot' => null,
        'node_id' => null,
        'assigned_generic_resources' => null,
        'status' => null,
        'desired_state' => null,
        'job_iteration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'version' => false,
        'created_at' => false,
        'updated_at' => false,
        'name' => false,
        'labels' => false,
        'spec' => false,
        'service_id' => false,
        'slot' => false,
        'node_id' => false,
        'assigned_generic_resources' => false,
        'status' => false,
        'desired_state' => false,
        'job_iteration' => false
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
        'id' => 'ID',
        'version' => 'Version',
        'created_at' => 'CreatedAt',
        'updated_at' => 'UpdatedAt',
        'name' => 'Name',
        'labels' => 'Labels',
        'spec' => 'Spec',
        'service_id' => 'ServiceID',
        'slot' => 'Slot',
        'node_id' => 'NodeID',
        'assigned_generic_resources' => 'AssignedGenericResources',
        'status' => 'Status',
        'desired_state' => 'DesiredState',
        'job_iteration' => 'JobIteration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'name' => 'setName',
        'labels' => 'setLabels',
        'spec' => 'setSpec',
        'service_id' => 'setServiceId',
        'slot' => 'setSlot',
        'node_id' => 'setNodeId',
        'assigned_generic_resources' => 'setAssignedGenericResources',
        'status' => 'setStatus',
        'desired_state' => 'setDesiredState',
        'job_iteration' => 'setJobIteration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'name' => 'getName',
        'labels' => 'getLabels',
        'spec' => 'getSpec',
        'service_id' => 'getServiceId',
        'slot' => 'getSlot',
        'node_id' => 'getNodeId',
        'assigned_generic_resources' => 'getAssignedGenericResources',
        'status' => 'getStatus',
        'desired_state' => 'getDesiredState',
        'job_iteration' => 'getJobIteration'
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
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('spec', $data ?? [], null);
        $this->setIfExists('service_id', $data ?? [], null);
        $this->setIfExists('slot', $data ?? [], null);
        $this->setIfExists('node_id', $data ?? [], null);
        $this->setIfExists('assigned_generic_resources', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('desired_state', $data ?? [], null);
        $this->setIfExists('job_iteration', $data ?? [], null);
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
     * @param string|null $id The ID of the task.
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
     * Gets version
     *
     * @return \OpenAPI\Client\Model\ObjectVersion|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \OpenAPI\Client\Model\ObjectVersion|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

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
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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
     * @param string|null $name Name of the task.
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
     * Gets labels
     *
     * @return array<string,string>|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param array<string,string>|null $labels User-defined key/value metadata.
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets spec
     *
     * @return \OpenAPI\Client\Model\TaskSpec|null
     */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
     * Sets spec
     *
     * @param \OpenAPI\Client\Model\TaskSpec|null $spec spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        if (is_null($spec)) {
            throw new \InvalidArgumentException('non-nullable spec cannot be null');
        }
        $this->container['spec'] = $spec;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string|null $service_id The ID of the service this task is part of.
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        if (is_null($service_id)) {
            throw new \InvalidArgumentException('non-nullable service_id cannot be null');
        }
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets slot
     *
     * @return int|null
     */
    public function getSlot()
    {
        return $this->container['slot'];
    }

    /**
     * Sets slot
     *
     * @param int|null $slot slot
     *
     * @return self
     */
    public function setSlot($slot)
    {
        if (is_null($slot)) {
            throw new \InvalidArgumentException('non-nullable slot cannot be null');
        }
        $this->container['slot'] = $slot;

        return $this;
    }

    /**
     * Gets node_id
     *
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->container['node_id'];
    }

    /**
     * Sets node_id
     *
     * @param string|null $node_id The ID of the node that this task is on.
     *
     * @return self
     */
    public function setNodeId($node_id)
    {
        if (is_null($node_id)) {
            throw new \InvalidArgumentException('non-nullable node_id cannot be null');
        }
        $this->container['node_id'] = $node_id;

        return $this;
    }

    /**
     * Gets assigned_generic_resources
     *
     * @return \OpenAPI\Client\Model\GenericResourcesInner[]|null
     */
    public function getAssignedGenericResources()
    {
        return $this->container['assigned_generic_resources'];
    }

    /**
     * Sets assigned_generic_resources
     *
     * @param \OpenAPI\Client\Model\GenericResourcesInner[]|null $assigned_generic_resources User-defined resources can be either Integer resources (e.g, `SSD=3`) or String resources (e.g, `GPU=UUID1`).
     *
     * @return self
     */
    public function setAssignedGenericResources($assigned_generic_resources)
    {
        if (is_null($assigned_generic_resources)) {
            throw new \InvalidArgumentException('non-nullable assigned_generic_resources cannot be null');
        }
        $this->container['assigned_generic_resources'] = $assigned_generic_resources;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\TaskStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\TaskStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets desired_state
     *
     * @return \OpenAPI\Client\Model\TaskState|null
     */
    public function getDesiredState()
    {
        return $this->container['desired_state'];
    }

    /**
     * Sets desired_state
     *
     * @param \OpenAPI\Client\Model\TaskState|null $desired_state desired_state
     *
     * @return self
     */
    public function setDesiredState($desired_state)
    {
        if (is_null($desired_state)) {
            throw new \InvalidArgumentException('non-nullable desired_state cannot be null');
        }
        $this->container['desired_state'] = $desired_state;

        return $this;
    }

    /**
     * Gets job_iteration
     *
     * @return \OpenAPI\Client\Model\ObjectVersion|null
     */
    public function getJobIteration()
    {
        return $this->container['job_iteration'];
    }

    /**
     * Sets job_iteration
     *
     * @param \OpenAPI\Client\Model\ObjectVersion|null $job_iteration job_iteration
     *
     * @return self
     */
    public function setJobIteration($job_iteration)
    {
        if (is_null($job_iteration)) {
            throw new \InvalidArgumentException('non-nullable job_iteration cannot be null');
        }
        $this->container['job_iteration'] = $job_iteration;

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

