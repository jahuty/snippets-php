<?php

namespace Jahuty\Resource;

class Render implements Resource
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public static function from(array $payload): Render
    {
        if (!array_key_exists('content', $payload)) {
            throw new \BadMethodCallException("Key 'content' does not exist");
        }

        return new Render($payload['content']);
    }

    public function __toString(): string
    {
        return $this->content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}