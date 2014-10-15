<?php
namespace Dkd\PhpCmis\Bindings\Browser;

/**
 * This file is part of php-cmis-lib.
 *
 * (c) Sascha Egerer <sascha.egerer@dkd.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * JSON object constants.
 */
class JSONConstants
{
    const ERROR_EXCEPTION = 'exception';
    const ERROR_MESSAGE = 'message';
    const ERROR_STACKTRACE = 'stacktrace';

    const JSON_REPINFO_ID = 'repositoryId';
    const JSON_REPINFO_NAME = 'repositoryName';
    const JSON_REPINFO_DESCRIPTION = 'repositoryDescription';
    const JSON_REPINFO_VENDOR = 'vendorName';
    const JSON_REPINFO_PRODUCT = 'productName';
    const JSON_REPINFO_PRODUCT_VERSION = 'productVersion';
    const JSON_REPINFO_ROOT_FOLDER_ID = 'rootFolderId';
    const JSON_REPINFO_REPOSITORY_URL = 'repositoryUrl';
    const JSON_REPINFO_ROOT_FOLDER_URL = 'rootFolderUrl';
    const JSON_REPINFO_CAPABILITIES = 'capabilities';
    const JSON_REPINFO_ACL_CAPABILITIES = 'aclCapabilities';
    const JSON_REPINFO_CHANGE_LOG_TOKEN = 'latestChangeLogToken';
    const JSON_REPINFO_CMIS_VERSION_SUPPORTED = 'cmisVersionSupported';
    const JSON_REPINFO_THIN_CLIENT_URI = 'thinClientURI';
    const JSON_REPINFO_CHANGES_INCOMPLETE = 'changesIncomplete';
    const JSON_REPINFO_CHANGES_ON_TYPE = 'changesOnType';
    const JSON_REPINFO_PRINCIPAL_ID_ANONYMOUS = 'principalIdAnonymous';
    const JSON_REPINFO_PRINCIPAL_ID_ANYONE = 'principalIdAnyone';
    const JSON_REPINFO_EXTENDED_FEATURES = 'extendedFeatures';

    protected static $REPOSITORY_INFO_KEYS = array(
        self::JSON_REPINFO_ID,
        self::JSON_REPINFO_NAME,
        self::JSON_REPINFO_DESCRIPTION,
        self::JSON_REPINFO_VENDOR,
        self::JSON_REPINFO_PRODUCT,
        self::JSON_REPINFO_PRODUCT_VERSION,
        self::JSON_REPINFO_ROOT_FOLDER_ID,
        self::JSON_REPINFO_REPOSITORY_URL,
        self::JSON_REPINFO_ROOT_FOLDER_URL,
        self::JSON_REPINFO_CAPABILITIES,
        self::JSON_REPINFO_ACL_CAPABILITIES,
        self::JSON_REPINFO_CHANGE_LOG_TOKEN,
        self::JSON_REPINFO_CMIS_VERSION_SUPPORTED,
        self::JSON_REPINFO_THIN_CLIENT_URI,
        self::JSON_REPINFO_CHANGES_INCOMPLETE,
        self::JSON_REPINFO_CHANGES_ON_TYPE,
        self::JSON_REPINFO_PRINCIPAL_ID_ANONYMOUS,
        self::JSON_REPINFO_PRINCIPAL_ID_ANYONE,
        self::JSON_REPINFO_EXTENDED_FEATURES
    );

    /**
     * Returns an array of all repository info keys
     *
     * @return array
     */
    public static function getRepositoryInfoKeys()
    {
        return self::$REPOSITORY_INFO_KEYS;
    }

    const JSON_CAP_CONTENT_STREAM_UPDATABILITY = 'capabilityContentStreamUpdatability';
    const JSON_CAP_CHANGES = 'capabilityChanges';
    const JSON_CAP_RENDITIONS = 'capabilityRenditions';
    const JSON_CAP_GET_DESCENDANTS = 'capabilityGetDescendants';
    const JSON_CAP_GET_FOLDER_TREE = 'capabilityGetFolderTree';
    const JSON_CAP_MULTIFILING = 'capabilityMultifiling';
    const JSON_CAP_UNFILING = 'capabilityUnfiling';
    const JSON_CAP_VERSION_SPECIFIC_FILING = 'capabilityVersionSpecificFiling';
    const JSON_CAP_PWC_SEARCHABLE = 'capabilityPWCSearchable';
    const JSON_CAP_PWC_UPDATABLE = 'capabilityPWCUpdatable';
    const JSON_CAP_ALL_VERSIONS_SEARCHABLE = 'capabilityAllVersionsSearchable';
    const JSON_CAP_ORDER_BY = 'capabilityOrderBy';
    const JSON_CAP_QUERY = 'capabilityQuery';
    const JSON_CAP_JOIN = 'capabilityJoin';
    const JSON_CAP_ACL = 'capabilityACL';
    const JSON_CAP_CREATABLE_PROPERTY_TYPES = 'capabilityCreatablePropertyTypes';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES = 'capabilityNewTypeSettableAttributes';

    protected static $CAPABILITY_KEYS = array(
        self::JSON_CAP_CONTENT_STREAM_UPDATABILITY,
        self::JSON_CAP_CHANGES,
        self::JSON_CAP_RENDITIONS,
        self::JSON_CAP_GET_DESCENDANTS,
        self::JSON_CAP_GET_FOLDER_TREE,
        self::JSON_CAP_MULTIFILING,
        self::JSON_CAP_UNFILING,
        self::JSON_CAP_VERSION_SPECIFIC_FILING,
        self::JSON_CAP_PWC_SEARCHABLE,
        self::JSON_CAP_PWC_UPDATABLE,
        self::JSON_CAP_ALL_VERSIONS_SEARCHABLE,
        self::JSON_CAP_ORDER_BY,
        self::JSON_CAP_QUERY,
        self::JSON_CAP_JOIN,
        self::JSON_CAP_ACL,
        self::JSON_CAP_CREATABLE_PROPERTY_TYPES,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES
    );

    /**
     * Returns an array of all capability keys
     *
     * @return array
     */
    public static function getCapabilityKeys()
    {
        return self::$CAPABILITY_KEYS;
    }

    const JSON_CAP_CREATABLE_PROPERTY_TYPES_CANCREATE = 'canCreate';

    protected static $CAPABILITY_CREATABLE_PROPERTY_KEYS = array(
        self::JSON_CAP_CREATABLE_PROPERTY_TYPES_CANCREATE
    );

    /**
     * Returns an array of all creatable capability property keys
     *
     * @return array
     */
    public static function getCapabilityCreatablePropertyKeys()
    {
        return self::$CAPABILITY_CREATABLE_PROPERTY_KEYS;
    }

    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_ID = 'id';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_LOCALNAME = 'localName';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_LOCALNAMESPACE = 'localNamespace';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_DISPLAYNAME = 'displayName';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_QUERYNAME = 'queryName';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_DESCRIPTION = 'description';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_CREATEABLE = 'creatable';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_FILEABLE = 'fileable';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_QUERYABLE = 'queryable';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_FULLTEXTINDEXED = 'fulltextIndexed';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_INCLUDEDINSUPERTYTPEQUERY = 'includedInSupertypeQuery';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_CONTROLABLEPOLICY = 'controllablePolicy';
    const JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_CONTROLABLEACL = 'controllableACL';

    protected static $CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_KEYS = array(
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_ID,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_LOCALNAME,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_LOCALNAMESPACE,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_DISPLAYNAME,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_QUERYNAME,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_DESCRIPTION,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_CREATEABLE,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_FILEABLE,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_QUERYABLE,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_FULLTEXTINDEXED,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_INCLUDEDINSUPERTYTPEQUERY,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_CONTROLABLEPOLICY,
        self::JSON_CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_CONTROLABLEACL
    );

    /**
     * Returns an array of all new type settable attribute keys
     *
     * @return array
     */
    public static function getCapabilityNewTypeSettableAttributeKeys()
    {
        return self::$CAP_NEW_TYPE_SETTABLE_ATTRIBUTES_KEYS;
    }

    const JSON_ACLCAP_SUPPORTED_PERMISSIONS = 'supportedPermissions';
    const JSON_ACLCAP_ACL_PROPAGATION = 'propagation';
    const JSON_ACLCAP_PERMISSIONS = 'permissions';
    const JSON_ACLCAP_PERMISSION_MAPPING = 'permissionMapping';

    protected static $ACL_CAPABILITY_KEYS = array(
        self::JSON_ACLCAP_SUPPORTED_PERMISSIONS,
        self::JSON_ACLCAP_ACL_PROPAGATION,
        self::JSON_ACLCAP_PERMISSIONS,
        self::JSON_ACLCAP_PERMISSION_MAPPING
    );

    /**
     * Returns an array of all acl capability keys
     *
     * @return array
     */
    public static function getAclCapabilityKeys()
    {
        return self::$ACL_CAPABILITY_KEYS;
    }

    const JSON_ACLCAP_PERMISSION_PERMISSION = "permission";
    const JSON_ACLCAP_PERMISSION_DESCRIPTION = "description";

    protected static $ACL_CAPABILITY_PERMISSION_KEYS = array(
        self::JSON_ACLCAP_PERMISSION_PERMISSION,
        self::JSON_ACLCAP_PERMISSION_DESCRIPTION
    );

    /**
     * Returns an array of all acl capability permission keys
     *
     * @return array
     */
    public static function getAclCapabilityPermissionKeys()
    {
        return self::$ACL_CAPABILITY_PERMISSION_KEYS;
    }

    const JSON_ACLCAP_MAPPING_KEY = "key";
    const JSON_ACLCAP_MAPPING_PERMISSION = "permission";

    protected static $ACL_CAPABILITY_MAPPING_KEYS = array(
        self::JSON_ACLCAP_MAPPING_KEY,
        self::JSON_ACLCAP_MAPPING_PERMISSION
    );

    /**
     * Returns an array of all acl capability mapping keys
     *
     * @return array
     */
    public static function getAclCapabilityMappingKeys()
    {
        return self::$ACL_CAPABILITY_MAPPING_KEYS;
    }

    const JSON_FEATURE_ID = "id";
    const JSON_FEATURE_URL = "url";
    const JSON_FEATURE_COMMON_NAME = "commonName";
    const JSON_FEATURE_VERSION_LABEL = "versionLabel";
    const JSON_FEATURE_DESCRIPTION = "description";
    const JSON_FEATURE_DATA = "featureData";

    const JSON_OBJECT_PROPERTIES = "properties";
    const JSON_OBJECT_SUCCINCT_PROPERTIES = "succinctProperties";
    const JSON_OBJECT_PROPERTIES_EXTENSION = "propertiesExtension";
    const JSON_OBJECT_ALLOWABLE_ACTIONS = "allowableActions";
    const JSON_OBJECT_RELATIONSHIPS = "relationships";
    const JSON_OBJECT_CHANGE_EVENT_INFO = "changeEventInfo";
    const JSON_OBJECT_ACL = "acl";
    const JSON_OBJECT_EXACT_ACL = "exactACL";
    const JSON_OBJECT_POLICY_IDS = "policyIds";
    const JSON_OBJECT_POLICY_IDS_IDS = "ids";
    const JSON_OBJECT_RENDITIONS = "renditions";

    protected static $OBJECT_KEYS = array(
        self::JSON_OBJECT_PROPERTIES,
        self::JSON_OBJECT_SUCCINCT_PROPERTIES,
        self::JSON_OBJECT_PROPERTIES_EXTENSION,
        self::JSON_OBJECT_ALLOWABLE_ACTIONS,
        self::JSON_OBJECT_RELATIONSHIPS,
        self::JSON_OBJECT_CHANGE_EVENT_INFO,
        self::JSON_OBJECT_ACL,
        self::JSON_OBJECT_EXACT_ACL,
        self::JSON_OBJECT_POLICY_IDS,
        self::JSON_OBJECT_POLICY_IDS_IDS,
        self::JSON_OBJECT_RENDITIONS
    );

    /**
     * Returns an array of all JSON object keys
     *
     * @return array
     */
    public static function getObjectKeys()
    {
        return self::$OBJECT_KEYS;
    }

    const JSON_OBJECTINFOLDER_OBJECT = "object";
    const JSON_OBJECTINFOLDER_PATH_SEGMENT = "pathSegment";

    const JSON_OBJECTPARENTS_OBJECT = "object";
    const JSON_OBJECTPARENTS_RELATIVE_PATH_SEGMENT = "relativePathSegment";

    const JSON_PROPERTY_ID = "id";
    const JSON_PROPERTY_LOCALNAME = "localName";
    const JSON_PROPERTY_DISPLAYNAME = "displayName";
    const JSON_PROPERTY_QUERYNAME = "queryName";
    const JSON_PROPERTY_VALUE = "value";
    const JSON_PROPERTY_DATATYPE = "type";
    const JSON_PROPERTY_CARDINALITY = "cardinality";

    protected static $PROPERTY_KEYS = array(
        self::JSON_PROPERTY_ID,
        self::JSON_PROPERTY_LOCALNAME,
        self::JSON_PROPERTY_DISPLAYNAME,
        self::JSON_PROPERTY_QUERYNAME,
        self::JSON_PROPERTY_VALUE,
        self::JSON_PROPERTY_DATATYPE,
        self::JSON_PROPERTY_CARDINALITY
    );

    /**
     * Returns an array of all JSON Property keys
     *
     * @return array
     */
    public static function getPropertyKeys()
    {
        return self::$PROPERTY_KEYS;
    }

    const JSON_CHANGE_EVENT_TYPE = "changeType";
    const JSON_CHANGE_EVENT_TIME = "changeTime";

    protected static $CHANGE_EVENT_KEYS = array(
        self::JSON_CHANGE_EVENT_TYPE,
        self::JSON_CHANGE_EVENT_TIME
    );

    /**
     * Returns an array of all change event type keys
     *
     * @return array
     */
    public static function getChangeEventKeys()
    {
        return self::$CHANGE_EVENT_KEYS;
    }

    const JSON_ACL_ACES = "aces";
    const JSON_ACL_IS_EXACT = "isExact";

    const JSON_ACE_PRINCIPAL = "principal";
    const JSON_ACE_PRINCIPAL_ID = "principalId";
    const JSON_ACE_PERMISSIONS = "permissions";
    const JSON_ACE_IS_DIRECT = "isDirect";

    const JSON_RENDITION_STREAM_ID = "streamId";
    const JSON_RENDITION_MIMETYPE = "mimeType";
    const JSON_RENDITION_LENGTH = "length";
    const JSON_RENDITION_KIND = "kind";
    const JSON_RENDITION_TITLE = "title";
    const JSON_RENDITION_HEIGHT = "height";
    const JSON_RENDITION_WIDTH = "width";
    const JSON_RENDITION_DOCUMENT_ID = "renditionDocumentId";

    protected static $RENDITION_KEYS = array(
        self::JSON_RENDITION_STREAM_ID,
        self::JSON_RENDITION_MIMETYPE,
        self::JSON_RENDITION_LENGTH,
        self::JSON_RENDITION_KIND,
        self::JSON_RENDITION_TITLE,
        self::JSON_RENDITION_HEIGHT,
        self::JSON_RENDITION_WIDTH,
        self::JSON_RENDITION_DOCUMENT_ID
    );

    /**
     * Returns an array of all rendition keys
     *
     * @return array
     */
    public static function getRenditionKeys()
    {
        return self::$RENDITION_KEYS;
    }

    const JSON_OBJECTLIST_OBJECTS = "objects";
    const JSON_OBJECTLIST_HAS_MORE_ITEMS = "hasMoreItems";
    const JSON_OBJECTLIST_NUM_ITEMS = "numItems";
    const JSON_OBJECTLIST_CHANGE_LOG_TOKEN = "changeLogToken";
}