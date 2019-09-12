# Change Log

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/) and [Keep a CHANGELOG](http://keepachangelog.com).

## [2.7.2] - 2019-05-31

### Improved

* Handling of `stream_select` returning `false` in case of a system call interrupt. - [#41]

### Fixed

* Remove/close sockets after fetching their responses triggered async requests in order to prevent halt on further 
  request processing, if the number of requests exceeds php-fpm's `pm.max_children` setting. - [#40]

## [2.7.1] - 2019-04-29

### Fixed

* Remove failed sockets from internal collection that errored out during reading of response in order to prevent infinite 
  tries/re-use of those failed connections. - [#37]

## [2.7.0] - 2019-04-28

### Added

* Re-using of idle sockets for successive requests - [#33]

## [2.6.0] - 2019-04-02

### Added

* Two new methods to Response class - [#27]
  * `Response#getOutput()` which is identical to `Response#getRawResponse()` and will return the complete output from 
     the `STDOUT` stream of the response.
  * `Response#getError()` which will return the complete output of the `STDERR` stream of the response. 

* Second parameter `$errorBuffer` in tha pass through callback signature - [#27]
  ```php
  $callback = function( string $outputBuffer, string $errorBuffer ) {};
  ```
  This parameter will contain the contents of the `STDERR` stream packets.
  
### Deprecated

* `Response#getRawResponse()` in favour of consistant naming. This method will be removed in `v3.0.0` - [#27]

### Removed

* `ProcessManagerException` that was introduced in `v2.5.0` - [#27]
  Please read [this blog post](https://hollo.me/php/background-info-fast-cgi-client-v2.6.0.html) why this (BC breaking) change was necessary 
  and how to handle server-sent errors now.

### Fixed

* `bin/fcgiget` to accept full URL paths and print STDOUT and STDERR output

### Improved

* Documentation

## [2.5.0] - 2019-01-29

### Added

* New `ProcessManagerException` in case the php-fpm responds with packages of type `STDERR`.
  This refers mainly to the error `Primary script unknown` resp. the response `File not found.`.
  - [#26] 
  
* CI builds for PHP 7.3

## [2.4.3] - 2018-09-17

### Fixes

* Value of Client::STREAM_SELECT_USEC was to low with `20000` and was updated to `200000` as 
  [recommended in the official PHP documentation](http://php.net/stream_select#tv_sec). - [#20]

## [2.4.2] - 2018-01-28

### Fixes

* Missing data in `php://input` on worker side when client sends content larger than 65535 bytes - [#15]

## [2.4.1] - 2017-11-19

### Fixes

* PHP warning when trying to get ready request IDs - [#14]

### Improves

* Loop performance 

## [2.4.0] - 2017-09-28

### Added

* Ability to add pass through callbacks in order to access output buffer from a long running callee - [#11]  
  See an [example in the documentation](./README.md#reading-output-buffer-from-worker-script-using-pass-through-callbacks) for further informaiton.

## [2.3.0] - 2017-06-15

### Changed

* Replaced methods `getHost()` and `getPort()` with `getSocketAddress()` in interface `hollodotme\FastCGI\Interfaces\ConfiguresSocketConnection` - [#9]
* The transport protocol `unix://` must be omitted for the first parameter of `hollodotme\FastCGI\SocketConnections\UnixDomainSocket`  
  Only the socket path must be passed. - [#9]
* Replaced `fsockopen()` with `stream_socket_client()` for connecting to php-fpm. - [#9]

## [2.2.0] - 2017-04-15

### Added

* Method `addResponseCallbacks(callable ...$callbacks)` to all request classes to enable response evaluation delegation - [#6]
* Method `addFailureCallbacks(callable ...$callbacks)` to all request classes to enable exception handling delegation
* Method `readResponse(int $requestId, ?int $timeoutMs = null) : ProvidesResponseData` to read and retrieve a single response
* Method `readResponses(?int $imeoutMs = null, int ...$requestIds) : \Generator` to read and yield multiple responses
* Method `readReadyResponses(?int $imeoutMs = null) : \Generator` to check for ready responses, read and yield them
* Method `waitForResponses(?int $timeout = null)` to `Client` class for waiting for multiple responses and calling the respective response callbacks - [#5]
* Method `getRequestIdsHavingResponse() : array` to enable reactive read of responses as they occur
* Method `hasUnhandledResponses() : bool` to check for outstanding responses
* Method `handleResponse(int $requestId, ?int $timeoutMs = null)` to fetch a specific response and notify the respective response callback
* Method `handleResponses(?int $timeoutMs = null, int ...$requestIds)` to fetch a specific responses and notify the respective response callbacks
* Method `handleReadyResponses(?int $timeoutMs = null)` to check for ready responses, fetch them and notify the respective response callbacks

### Changed

* Method `waitForResponse(int $requestId, ?int $timeoutMs = null)` is not returning a response anymore, but will call the response callback  
  Use `readResponse(int $requestId, ?int $timeoutMs = null): ProvidesResponseData` if you want to get the response directly.

### Removed

* Optional flag to make a connection persistent (is now always disabled in favour of better timeout handling and FPM pool-children-scalability)
* Optional flag to keep the server-side connection alive (is now always enabled, affects only network sockets)

### Improved

* Code coverage by automated integration tests
* Timeout handling on multiple requests

## [2.1.0] - 2017-03-07

### Changed

* Methods `sendRequest` and `sendAsyncRequest` expect to get an object of interface `hollodotme\FastCGI\Interfaces\ProvidesRequestData` - [#5]
* Methods `sendRequest` and `waitForResponse` now return an object of interface `hollodotme\FastCGI\Interfaces\ProvidesResponseData` - [#2]

### Added

* Public class constants for request methods `GET`, `POST`, `PUT`, `PATCH` and `DELETE` in `hollodotme\FastCGI\Constants\RequestMethod` - [#5]
* Public class constants for server protocols `HTTP/1.0` and `HTTP/1.1` in `hollodotme\FastCGI\Constants\ServerProtocol` - [#5]
* Abstract request class for implementing individual request methods, contains all request default values - [#5]
* Request implementations: - [#5]
  * `hollodotme\FastCGI\Requests\GetRequest`
  * `hollodotme\FastCGI\Requests\PostRequest`
  * `hollodotme\FastCGI\Requests\PutRequest`
  * `hollodotme\FastCGI\Requests\PatchRequest`
  * `hollodotme\FastCGI\Requests\DeleteRequest`
* Response implementation - [#2]

## [2.0.1] - 2017-02-23
   
### Fixed
   
- Erroneous response returned by Client::sendRequest() and Client::waitForResponse() - [#1]
   
### Changed
   
- Testsuite updated for PHPUnit >= 6

## [2.0.0] - 2017-01-03

### Changed

 * Class constant visibility to private in class `Client`
 * Class constant visibility to privare in class `Encoders\PacketEncoder`
 * Class constant visibility to public in class `SocketConnections\Defaults`
 * Composer requires php >= 7.1
 

## [1.0.0] - 2017-01-03

Based on [Pierrick Charron](https://github.com/adoy)'s [PHP-FastCGI-Client](https://github.com/adoy/PHP-FastCGI-Client/):

### Added 

 * Socket connection interface `ConfiguresSocketConnection`
 * Socket connection classes `UnixDomainSocket` and `NetworkSocket`
 * Base exception `FastCGIClientException`
 * Derived exceptions `ForbiddenException`, `ReadFailedException`, `TimeoutException`, `WriteFailedException`
 
### Changed

 * Constructor of `Client` now expects a `ConfiguresSocketConnection` instance
 * Renamed `Client->request()` to `Client->sendRequest()`
 * Renamed `Client->async_request()` to `Client->sendAsyncRequest()`
 * Renamed `Client->wait_for_response()` to `Client->waitForResponse()`
 
### Removed

 * Unused class constants from `Client`
 * Getters/Setters for connect timeout, read/write timeout, keep alive, socket persistence from `Client` (now part of the socket connection)
 * Method `Client->getValues()`

[2.7.2]: https://github.com/hollodotme/fast-cgi-client/compare/v2.7.1...v2.7.2
[2.7.1]: https://github.com/hollodotme/fast-cgi-client/compare/v2.7.0...v2.7.1
[2.7.0]: https://github.com/hollodotme/fast-cgi-client/compare/v2.6.0...v2.7.0
[2.6.0]: https://github.com/hollodotme/fast-cgi-client/compare/v2.5.0...v2.6.0
[2.5.0]: https://github.com/hollodotme/fast-cgi-client/compare/v2.4.3...v2.5.0
[2.4.3]: https://github.com/hollodotme/fast-cgi-client/compare/v2.4.2...v2.4.3
[2.4.2]: https://github.com/hollodotme/fast-cgi-client/compare/v2.4.1...v2.4.2
[2.4.1]: https://github.com/hollodotme/fast-cgi-client/compare/v2.4.0...v2.4.1
[2.4.0]: https://github.com/hollodotme/fast-cgi-client/compare/v2.3.0...v2.4.0
[2.3.0]: https://github.com/hollodotme/fast-cgi-client/compare/v2.2.0...v2.3.0
[2.2.0]: https://github.com/hollodotme/fast-cgi-client/compare/v2.1.0...v2.2.0
[2.1.0]: https://github.com/hollodotme/fast-cgi-client/compare/v2.0.1...v2.1.0
[2.0.1]: https://github.com/hollodotme/fast-cgi-client/compare/v2.0.0...v2.0.1
[2.0.0]: https://github.com/hollodotme/fast-cgi-client/compare/v1.0.0...v2.0.0
[1.0.0]: https://github.com/hollodotme/fast-cgi-client/tree/v1.0.0

[#1]: https://github.com/hollodotme/fast-cgi-client/issues/1
[#2]: https://github.com/hollodotme/fast-cgi-client/issues/2
[#5]: https://github.com/hollodotme/fast-cgi-client/issues/5
[#6]: https://github.com/hollodotme/fast-cgi-client/issues/6
[#9]: https://github.com/hollodotme/fast-cgi-client/issues/9
[#11]: https://github.com/hollodotme/fast-cgi-client/issues/11
[#14]: https://github.com/hollodotme/fast-cgi-client/issues/14
[#15]: https://github.com/hollodotme/fast-cgi-client/issues/15
[#20]: https://github.com/hollodotme/fast-cgi-client/issues/20
[#26]: https://github.com/hollodotme/fast-cgi-client/issues/26
[#27]: https://github.com/hollodotme/fast-cgi-client/issues/27
[#33]: https://github.com/hollodotme/fast-cgi-client/pull/33
[#37]: https://github.com/hollodotme/fast-cgi-client/issue/37
[#40]: https://github.com/hollodotme/fast-cgi-client/issue/40
[#41]: https://github.com/hollodotme/fast-cgi-client/issue/41
