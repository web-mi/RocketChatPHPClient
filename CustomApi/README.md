# OpenAPIClient-php

These are some extra routes for rocket.chat because open api files from rocket.chat has some missing stuff


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new WebMI\RocketChatApiClient\CustomApi\Api\CustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$msg_id = 7aDSXtjMA3KPLxLjt; // string | The message ID.

try {
    $result = $apiInstance->getApiV1ChatGetMessage($x_auth_token, $x_user_id, $msg_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomApi->getApiV1ChatGetMessage: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://apiexplorer.support.rocket.chat*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomApi* | [**getApiV1ChatGetMessage**](docs/Api/CustomApi.md#getapiv1chatgetmessage) | **GET** /api/v1/chat.getMessage | Get Message
*CustomApi* | [**postApiV1ChatSendMessage**](docs/Api/CustomApi.md#postapiv1chatsendmessage) | **POST** /api/v1/chat.sendMessage | Send Message
*CustomApi* | [**postApiV1Login**](docs/Api/CustomApi.md#postapiv1login) | **POST** /api/v1/login | Login with ServiceName and Token
*CustomApi* | [**postApiV1MethodCall**](docs/Api/CustomApi.md#postapiv1methodcall) | **POST** /api/v1/method.call/{method} | Method Call

## Models

- [GetApiV1ChatGetMessage200Response](docs/Model/GetApiV1ChatGetMessage200Response.md)
- [GetApiV1ChatGetMessage200ResponseMessage](docs/Model/GetApiV1ChatGetMessage200ResponseMessage.md)
- [GetApiV1ChatGetMessage200ResponseMessageReactions](docs/Model/GetApiV1ChatGetMessage200ResponseMessageReactions.md)
- [GetApiV1ChatGetMessage200ResponseMessageReactionsFrowning2](docs/Model/GetApiV1ChatGetMessage200ResponseMessageReactionsFrowning2.md)
- [GetApiV1ChatGetMessage200ResponseMessageStarred](docs/Model/GetApiV1ChatGetMessage200ResponseMessageStarred.md)
- [GetApiV1ChatGetMessage400Response](docs/Model/GetApiV1ChatGetMessage400Response.md)
- [PostApiV1ChatSendMessage200Response](docs/Model/PostApiV1ChatSendMessage200Response.md)
- [PostApiV1ChatSendMessage200ResponseMessage](docs/Model/PostApiV1ChatSendMessage200ResponseMessage.md)
- [PostApiV1ChatSendMessage200ResponseMessageU](docs/Model/PostApiV1ChatSendMessage200ResponseMessageU.md)
- [PostApiV1ChatSendMessage400Response](docs/Model/PostApiV1ChatSendMessage400Response.md)
- [PostApiV1ChatSendMessage401Response](docs/Model/PostApiV1ChatSendMessage401Response.md)
- [PostApiV1ChatSendMessageRequest](docs/Model/PostApiV1ChatSendMessageRequest.md)
- [PostApiV1ChatSendMessageRequestMessage](docs/Model/PostApiV1ChatSendMessageRequestMessage.md)
- [PostApiV1ChatSendMessageRequestMessageAttachmentsInner](docs/Model/PostApiV1ChatSendMessageRequestMessageAttachmentsInner.md)
- [PostApiV1ChatSendMessageRequestMessageAttachmentsInnerFieldsInner](docs/Model/PostApiV1ChatSendMessageRequestMessageAttachmentsInnerFieldsInner.md)
- [PostApiV1Login200Response](docs/Model/PostApiV1Login200Response.md)
- [PostApiV1Login200ResponseData](docs/Model/PostApiV1Login200ResponseData.md)
- [PostApiV1Login200ResponseDataMe](docs/Model/PostApiV1Login200ResponseDataMe.md)
- [PostApiV1Login200ResponseDataMeEmailsInner](docs/Model/PostApiV1Login200ResponseDataMeEmailsInner.md)
- [PostApiV1Login200ResponseDataMeSettings](docs/Model/PostApiV1Login200ResponseDataMeSettings.md)
- [PostApiV1LoginRequest](docs/Model/PostApiV1LoginRequest.md)
- [PostApiV1MethodCall200Response](docs/Model/PostApiV1MethodCall200Response.md)
- [PostApiV1MethodCallRequest](docs/Model/PostApiV1MethodCallRequest.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.9.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
