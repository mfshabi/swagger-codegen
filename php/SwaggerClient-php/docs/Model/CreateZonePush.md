# CreateZonePush

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_method** | **string** | To cast request method  PUT | 
**server** | **string** | server.code, Should be one of the server code from the GET /zones/http/push/servers call | 
**cnames** | **string** | Name that points to actual record. &lt;br&gt;Eg: docs.example.com | [optional] 
**cache_cache** | **string** | This will be the default cache name.The values can be 1d,7d,14d, 1M, 3M, 6M, or 1y | [optional] 
**edge** | [**\Swagger\Client\Model\ZoneshttppushnewEdge**](ZoneshttppushnewEdge.md) |  | [optional] 
**domainlock** | [**\Swagger\Client\Model\ZoneshttppushnewDomainlock**](ZoneshttppushnewDomainlock.md) |  | [optional] 
**securetoken** | [**\Swagger\Client\Model\ZoneshttppushnewSecuretoken**](ZoneshttppushnewSecuretoken.md) |  | [optional] 
**ssl** | [**\Swagger\Client\Model\ZoneshttppushnewSsl**](ZoneshttppushnewSsl.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

