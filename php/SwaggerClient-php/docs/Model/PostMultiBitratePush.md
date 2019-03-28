# PostMultiBitratePush

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_method** | **string** | To cast request method POST to PUT | 
**name** | **string** | Stream name should be in the format part-1/part-2. &lt;br&gt;Each part should have minimum 3 chars, separated by forward slash ‘/’, without any space. | 
**server** | **string** | server.code, Should be one of the server code from the GET /streams/abr/servers call | 
**audioonly** | **string** | Values can be Y or N. &lt;br&gt;Set to Y if the HLS audio only stream should be added to the manifest file. | [optional] 
**profile** | **string** | Values can be Y or N. &lt;br&gt;Set to Y if Multiple Encoders should be enabled.&lt;br&gt; Set to N if Multiple Encoders should be disabled. | [optional] 
**parentid** | **string** | Enter parentid to 1-5 | [optional] 
**ssl** | **string** | Values can be Y or N. &lt;br&gt;Set to Y if HTTPS should be enabled.&lt;br&gt; Set to N if HTTPS should be disabled. | [optional] 
**abr** | [**\Swagger\Client\Model\StreamsabrnewAbr**](StreamsabrnewAbr.md) |  | [optional] 
**domainlock** | [**\Swagger\Client\Model\StreamsabrnewDomainlock**](StreamsabrnewDomainlock.md) |  | [optional] 
**geoblock** | [**\Swagger\Client\Model\StreamsabrnewGeoblock**](StreamsabrnewGeoblock.md) |  | [optional] 
**rtmpauth** | [**\Swagger\Client\Model\StreamsabrnewRtmpauth**](StreamsabrnewRtmpauth.md) |  | [optional] 
**eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](StreamsabrnewEac.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

