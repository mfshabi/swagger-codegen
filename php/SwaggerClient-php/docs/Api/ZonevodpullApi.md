# Swagger\Client\ZonevodpullApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createzonevodpullPush**](ZonevodpullApi.md#createzonevodpullPush) | **POST** /zones/vod/pull/new | Create Zone
[**getVodzonepull**](ZonevodpullApi.md#getVodzonepull) | **GET** /zones/vod/pull/{zoneid} | Zone
[**restorezonevodpull**](ZonevodpullApi.md#restorezonevodpull) | **GET** /zones/vod/pull/{zoneid}/restore | Restore
[**updateDomainLockzonevodpull**](ZonevodpullApi.md#updateDomainLockzonevodpull) | **POST** /zones/vod/pull/{zoneid}/domainlock | Update Domain Lock
[**updateEdgeSettingszonevodpull**](ZonevodpullApi.md#updateEdgeSettingszonevodpull) | **POST** /zones/vod/pull/{zoneid}/edge | Update Edge Settings
[**updateExternalAuthControlzonevodpull**](ZonevodpullApi.md#updateExternalAuthControlzonevodpull) | **POST** /zones/vod/pull/{zoneid}/eac | Update External Auth Control
[**updateGeoblockzonevodpull**](ZonevodpullApi.md#updateGeoblockzonevodpull) | **POST** /zones/vod/pull/{zoneid}/geoblock | Update Geoblock
[**updateSslzonevodpull**](ZonevodpullApi.md#updateSslzonevodpull) | **POST** /zones/vod/pull/{zoneid}/ssl | Update SSL
[**updateinfozonevodpull**](ZonevodpullApi.md#updateinfozonevodpull) | **POST** /zones/vod/pull/{zoneid} | Update Info
[**zonevodpullCachePurge**](ZonevodpullApi.md#zonevodpullCachePurge) | **POST** /zones/vod/pull/{zoneid}/purge | Purge
[**zonevodpullPushList**](ZonevodpullApi.md#zonevodpullPushList) | **GET** /zones/vod/pull | VoD Push

# **createzonevodpullPush**
> \Swagger\Client\Model\InlineResponse20041 createzonevodpullPush($x_api_key, $_method, $origin, $cnames, $cache_cache, $live, $edge, $domainlock, $securetoken, $ssl)

Create Zone

Create a new VOD push Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$origin = "origin_example"; // string | 
$cnames = "cnames_example"; // string | 
$cache_cache = "cache_cache_example"; // string | 
$live = "live_example"; // string | 
$edge = new \Swagger\Client\Model\ZoneshttppushnewEdge(); // \Swagger\Client\Model\ZoneshttppushnewEdge | 
$domainlock = new \Swagger\Client\Model\ZoneshttppushnewDomainlock(); // \Swagger\Client\Model\ZoneshttppushnewDomainlock | 
$securetoken = new \Swagger\Client\Model\ZoneshttppullnewSecuretoken(); // \Swagger\Client\Model\ZoneshttppullnewSecuretoken | 
$ssl = new \Swagger\Client\Model\ZoneshttppullnewSsl(); // \Swagger\Client\Model\ZoneshttppullnewSsl | 

try {
    $result = $apiInstance->createzonevodpullPush($x_api_key, $_method, $origin, $cnames, $cache_cache, $live, $edge, $domainlock, $securetoken, $ssl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->createzonevodpullPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **_method** | **string**|  | [optional]
 **origin** | **string**|  | [optional]
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

# **getVodzonepull**
> \Swagger\Client\Model\InlineResponse20045 getVodzonepull($x_api_key, $zoneid)

Zone

Return  VoD push zone details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->getVodzonepull($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->getVodzonepull: ', $e->getMessage(), PHP_EOL;
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

# **restorezonevodpull**
> \Swagger\Client\Model\InlineResponse2005 restorezonevodpull($x_api_key, $zoneid)

Restore

Restore VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->restorezonevodpull($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->restorezonevodpull: ', $e->getMessage(), PHP_EOL;
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

# **updateDomainLockzonevodpull**
> \Swagger\Client\Model\InlineResponse20048 updateDomainLockzonevodpull($x_api_key, $zoneid, $policy, $list, $ips, $type)

Update Domain Lock

Update Domain lock of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
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
    $result = $apiInstance->updateDomainLockzonevodpull($x_api_key, $zoneid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->updateDomainLockzonevodpull: ', $e->getMessage(), PHP_EOL;
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

# **updateEdgeSettingszonevodpull**
> \Swagger\Client\Model\InlineResponse20048 updateEdgeSettingszonevodpull($x_api_key, $zoneid, $pseudostreaming)

Update Edge Settings

Update Edge settings of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$pseudostreaming = "pseudostreaming_example"; // string | 

try {
    $result = $apiInstance->updateEdgeSettingszonevodpull($x_api_key, $zoneid, $pseudostreaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->updateEdgeSettingszonevodpull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **pseudostreaming** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalAuthControlzonevodpull**
> \Swagger\Client\Model\InlineResponse20047 updateExternalAuthControlzonevodpull($x_api_key, $zoneid, $policy, $authurl, $ips)

Update External Auth Control

Update External auth control for  of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
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
    $result = $apiInstance->updateExternalAuthControlzonevodpull($x_api_key, $zoneid, $policy, $authurl, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->updateExternalAuthControlzonevodpull: ', $e->getMessage(), PHP_EOL;
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

# **updateGeoblockzonevodpull**
> \Swagger\Client\Model\InlineResponse20046 updateGeoblockzonevodpull($x_api_key, $zoneid, $policy, $list, $ips)

Update Geoblock

Update Geoblock of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
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
    $result = $apiInstance->updateGeoblockzonevodpull($x_api_key, $zoneid, $policy, $list, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->updateGeoblockzonevodpull: ', $e->getMessage(), PHP_EOL;
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

# **updateSslzonevodpull**
> \Swagger\Client\Model\InlineResponse20043 updateSslzonevodpull($x_api_key, $zoneid, $http2, $mode, $certid, $name, $crt, $key, $cabundle)

Update SSL

Update SSL of VoD push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
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
    $result = $apiInstance->updateSslzonevodpull($x_api_key, $zoneid, $http2, $mode, $certid, $name, $crt, $key, $cabundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->updateSslzonevodpull: ', $e->getMessage(), PHP_EOL;
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

# **updateinfozonevodpull**
> \Swagger\Client\Model\InlineResponse20045 updateinfozonevodpull($x_api_key, $zoneid, $cnames)

Update Info

Update information of a VoD Push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$cnames = "cnames_example"; // string | 

try {
    $result = $apiInstance->updateinfozonevodpull($x_api_key, $zoneid, $cnames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->updateinfozonevodpull: ', $e->getMessage(), PHP_EOL;
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

# **zonevodpullCachePurge**
> \Swagger\Client\Model\InlineResponse2005 zonevodpullCachePurge($x_api_key, $zoneid, $_method)

Purge

Purge cache of a VoD pull zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$_method = "_method_example"; // string | 

try {
    $result = $apiInstance->zonevodpullCachePurge($x_api_key, $zoneid, $_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->zonevodpullCachePurge: ', $e->getMessage(), PHP_EOL;
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

# **zonevodpullPushList**
> \Swagger\Client\Model\InlineResponse20036 zonevodpullPushList($x_api_key)

VoD Push

Return VoD Push zones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->zonevodpullPushList($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullApi->zonevodpullPushList: ', $e->getMessage(), PHP_EOL;
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

