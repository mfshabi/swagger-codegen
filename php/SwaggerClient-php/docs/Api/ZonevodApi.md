# Swagger\Client\ZonevodApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createZoneVodPush**](ZonevodApi.md#createZoneVodPush) | **POST** /zones/vod/push/new | Create Zone
[**getVodzone**](ZonevodApi.md#getVodzone) | **GET** /zones/vod/push/{zoneid} | Zone
[**restoreZoneVod**](ZonevodApi.md#restoreZoneVod) | **GET** /zones/vod/push/{zoneid}/restore | Restore
[**updateDomainLockZoneVod**](ZonevodApi.md#updateDomainLockZoneVod) | **POST** /zones/vod/push/{zoneid}/domainlock | Update Domain Lock
[**updateEdgeSettingsZoneVod**](ZonevodApi.md#updateEdgeSettingsZoneVod) | **POST** /zones/vod/push/{zoneid}/edge | Update Edge Settings
[**updateExternalAuthControlZoneVod**](ZonevodApi.md#updateExternalAuthControlZoneVod) | **POST** /zones/vod/push/{zoneid}/eac | Update External Auth Control
[**updateGeoblockZoneVod**](ZonevodApi.md#updateGeoblockZoneVod) | **POST** /zones/vod/push/{zoneid}/geoblock | Update Geoblock
[**updateSslZoneVod**](ZonevodApi.md#updateSslZoneVod) | **POST** /zones/vod/push/{zoneid}/ssl | Update SSL
[**updateinfoZoneVod**](ZonevodApi.md#updateinfoZoneVod) | **POST** /zones/vod/push/{zoneid} | Update Info
[**zoneVodCachePurge**](ZonevodApi.md#zoneVodCachePurge) | **POST** /zones/vod/push/{zoneid}/purge | Purge
[**zoneVodPushList**](ZonevodApi.md#zoneVodPushList) | **GET** /zones/vod/push | VoD Push

# **createZoneVodPush**
> \Swagger\Client\Model\InlineResponse20041 createZoneVodPush($x_api_key, $_method, $server, $cnames, $cache_cache, $live, $edge, $domainlock, $securetoken, $ssl)

Create Zone

Create a new VOD push Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$server = "server_example"; // string | 
$cnames = "cnames_example"; // string | 
$cache_cache = "cache_cache_example"; // string | 
$live = "live_example"; // string | 
$edge = new \Swagger\Client\Model\ZoneshttppushnewEdge(); // \Swagger\Client\Model\ZoneshttppushnewEdge | 
$domainlock = new \Swagger\Client\Model\ZoneshttppushnewDomainlock(); // \Swagger\Client\Model\ZoneshttppushnewDomainlock | 
$securetoken = new \Swagger\Client\Model\ZoneshttppullnewSecuretoken(); // \Swagger\Client\Model\ZoneshttppullnewSecuretoken | 
$ssl = new \Swagger\Client\Model\ZoneshttppullnewSsl(); // \Swagger\Client\Model\ZoneshttppullnewSsl | 

try {
    $result = $apiInstance->createZoneVodPush($x_api_key, $_method, $server, $cnames, $cache_cache, $live, $edge, $domainlock, $securetoken, $ssl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->createZoneVodPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **_method** | **string**|  | [optional]
 **server** | **string**|  | [optional]
 **cnames** | **string**|  | [optional]
 **cache_cache** | **string**|  | [optional]
 **live** | **string**|  | [optional]
 **edge** | [**\Swagger\Client\Model\ZoneshttppushnewEdge**](../Model/.md)|  | [optional]
 **domainlock** | [**\Swagger\Client\Model\ZoneshttppushnewDomainlock**](../Model/.md)|  | [optional]
 **securetoken** | [**\Swagger\Client\Model\ZoneshttppullnewSecuretoken**](../Model/.md)|  | [optional]
 **ssl** | [**\Swagger\Client\Model\ZoneshttppullnewSsl**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVodzone**
> \Swagger\Client\Model\InlineResponse20045 getVodzone($x_api_key, $zoneid)

Zone

Return  VoD push zone details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->getVodzone($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->getVodzone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreZoneVod**
> \Swagger\Client\Model\InlineResponse2005 restoreZoneVod($x_api_key, $zoneid)

Restore

Restore VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->restoreZoneVod($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->restoreZoneVod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainLockZoneVod**
> \Swagger\Client\Model\InlineResponse20048 updateDomainLockZoneVod($x_api_key, $zoneid, $policy, $list, $ips, $type)

Update Domain Lock

Update Domain lock of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$policy = "policy_example"; // string | 
$list = "list_example"; // string | 
$ips = "ips_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->updateDomainLockZoneVod($x_api_key, $zoneid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->updateDomainLockZoneVod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **policy** | **string**|  | [optional]
 **list** | **string**|  | [optional]
 **ips** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEdgeSettingsZoneVod**
> \Swagger\Client\Model\InlineResponse20048 updateEdgeSettingsZoneVod($x_api_key, $zoneid, $compression, $compressionlevel, $disposition, $cors, $pseudostreaming)

Update Edge Settings

Update Edge settings of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$compression = "compression_example"; // string | 
$compressionlevel = "compressionlevel_example"; // string | 
$disposition = "disposition_example"; // string | 
$cors = "cors_example"; // string | 
$pseudostreaming = "pseudostreaming_example"; // string | 

try {
    $result = $apiInstance->updateEdgeSettingsZoneVod($x_api_key, $zoneid, $compression, $compressionlevel, $disposition, $cors, $pseudostreaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->updateEdgeSettingsZoneVod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **compression** | **string**|  | [optional]
 **compressionlevel** | **string**|  | [optional]
 **disposition** | **string**|  | [optional]
 **cors** | **string**|  | [optional]
 **pseudostreaming** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalAuthControlZoneVod**
> \Swagger\Client\Model\InlineResponse20047 updateExternalAuthControlZoneVod($x_api_key, $zoneid, $policy, $authurl, $ips)

Update External Auth Control

Update External auth control for  of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$policy = "policy_example"; // string | 
$authurl = "authurl_example"; // string | 
$ips = "ips_example"; // string | 

try {
    $result = $apiInstance->updateExternalAuthControlZoneVod($x_api_key, $zoneid, $policy, $authurl, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->updateExternalAuthControlZoneVod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **policy** | **string**|  | [optional]
 **authurl** | **string**|  | [optional]
 **ips** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGeoblockZoneVod**
> \Swagger\Client\Model\InlineResponse20046 updateGeoblockZoneVod($x_api_key, $zoneid, $policy, $list, $ips)

Update Geoblock

Update Geoblock of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$policy = "policy_example"; // string | 
$list = new \Swagger\Client\Model\StreamsabrstreamidgeoblockList(); // \Swagger\Client\Model\StreamsabrstreamidgeoblockList | 
$ips = "ips_example"; // string | 

try {
    $result = $apiInstance->updateGeoblockZoneVod($x_api_key, $zoneid, $policy, $list, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->updateGeoblockZoneVod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **policy** | **string**|  | [optional]
 **list** | [**\Swagger\Client\Model\StreamsabrstreamidgeoblockList**](../Model/.md)|  | [optional]
 **ips** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSslZoneVod**
> \Swagger\Client\Model\InlineResponse20043 updateSslZoneVod($x_api_key, $zoneid, $http2, $mode, $certid, $name, $crt, $key, $cabundle)

Update SSL

Update SSL of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$http2 = "http2_example"; // string | 
$mode = "mode_example"; // string | 
$certid = "certid_example"; // string | 
$name = "name_example"; // string | 
$crt = "crt_example"; // string | 
$key = "key_example"; // string | 
$cabundle = "cabundle_example"; // string | 

try {
    $result = $apiInstance->updateSslZoneVod($x_api_key, $zoneid, $http2, $mode, $certid, $name, $crt, $key, $cabundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->updateSslZoneVod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **http2** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **certid** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **crt** | **string**|  | [optional]
 **key** | **string**|  | [optional]
 **cabundle** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateinfoZoneVod**
> \Swagger\Client\Model\InlineResponse20045 updateinfoZoneVod($x_api_key, $zoneid, $cnames)

Update Info

Update information of a VoD Push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$cnames = "cnames_example"; // string | 

try {
    $result = $apiInstance->updateinfoZoneVod($x_api_key, $zoneid, $cnames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->updateinfoZoneVod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **cnames** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoneVodCachePurge**
> \Swagger\Client\Model\InlineResponse2005 zoneVodCachePurge($x_api_key, $zoneid, $_method)

Purge

Purge cache of a VoD Push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$_method = "_method_example"; // string | 

try {
    $result = $apiInstance->zoneVodCachePurge($x_api_key, $zoneid, $_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->zoneVodCachePurge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **_method** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoneVodPushList**
> \Swagger\Client\Model\InlineResponse20036 zoneVodPushList($x_api_key)

VoD Push

Return VoD Push zones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->zoneVodPushList($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodApi->zoneVodPushList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

