# Posttimeshift

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_method** | **string** | To cast request method POST to PUT | 
**name** | **string** | Stream name should be in the format part-1/part-2.&lt;br&gt; Each part should have minimum 3 chars, separated by forward slash ‘/’, without any space | 
**parent** | **string** | server.code&lt;br&gt; Should be one of the server code from the GET /streams/timeshift/parentss call | 
**timeshift** | **int** | Timeshift in seconds. &lt;br&gt;By which the recorded streams should be shifted. | 
**audioonly** | **string** | Values can be Y or N. &lt;br&gt;Set to Y if the HLS audio only stream should be added to the manifest file. | [optional] 
**domainlock** | [**\Swagger\Client\Model\StreamstimeshiftnewDomainlock**](StreamstimeshiftnewDomainlock.md) |  | [optional] 
**geoblock** | [**\Swagger\Client\Model\StreamstimeshiftnewGeoblock**](StreamstimeshiftnewGeoblock.md) |  | [optional] 
**securetoken** | [**\Swagger\Client\Model\StreamstimeshiftnewSecuretoken**](StreamstimeshiftnewSecuretoken.md) |  | [optional] 
**eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](StreamsabrnewEac.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

