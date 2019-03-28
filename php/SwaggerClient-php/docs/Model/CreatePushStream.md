# CreatePushStream

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_method** | **string** | To cast request method POST to PUT | 
**name** | **string** | Stream name.&lt;br&gt;Should be in the format part-1/part-2. Each part should have minimum 3 chars, separated by forward slash ‘/’, without any space | 
**server** | **string** | server.code, Should be one of the server code from the GET /streams/push/servers call | 
**audioonly** | **string** | Values can be Y or N. &lt;br&gt;Set to Y if the HLS audio only stream should be added to the manifest file. | [optional] 
**domainlock** | [**\Swagger\Client\Model\StreamstimeshiftnewDomainlock**](StreamstimeshiftnewDomainlock.md) |  | [optional] 
**geoblock** | [**\Swagger\Client\Model\StreamstimeshiftnewGeoblock**](StreamstimeshiftnewGeoblock.md) |  | [optional] 
**rtmpauth** | [**\Swagger\Client\Model\StreamsabrnewRtmpauth**](StreamsabrnewRtmpauth.md) |  | [optional] 
**record** | [**\Swagger\Client\Model\StreamspushnewRecord**](StreamspushnewRecord.md) |  | [optional] 
**securetoken** | [**\Swagger\Client\Model\StreamstimeshiftnewSecuretoken**](StreamstimeshiftnewSecuretoken.md) |  | [optional] 
**eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](StreamsabrnewEac.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

