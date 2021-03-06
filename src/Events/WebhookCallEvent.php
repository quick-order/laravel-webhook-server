<?php

namespace Spatie\WebhookServer\Events;

use GuzzleHttp\Psr7\Response;

abstract class WebhookCallEvent
{
    public $httpVerb;

    public $webhookUrl;

    public $payload;

    public $headers;

    public $meta;

    public $tags;

    public $attempt;

	/**
	 * @var Response|null
	 */

    public $response;

    public  $errorType;

    public $errorMessage;

    public $uuid;

    public function __construct(
        string $httpVerb,
        string $webhookUrl,
        array $payload,
        array $headers,
        array $meta,
        array $tags,
        int $attempt,
        ?Response $response,
        ?string $errorType,
        ?string $errorMessage,
        string $uuid
    ) {
        $this->httpVerb = $httpVerb;
        $this->webhookUrl = $webhookUrl;
        $this->payload = $payload;
        $this->headers = $headers;
        $this->meta = $meta;
        $this->tags = $tags;
        $this->attempt = $attempt;
        $this->response = $response;
        $this->errorType = $errorType;
        $this->errorMessage = $errorMessage;
        $this->uuid = $uuid;
    }
}
