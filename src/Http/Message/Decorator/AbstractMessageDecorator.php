<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-http
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-http
 */
declare(strict_types = 1);

namespace Vain\Core\Http\Message\Decorator;

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Class AbstractMessageDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractMessageDecorator implements MessageInterface
{
    protected $message;

    /**
     * AbstractRequestDecorator constructor.
     *
     * @param MessageInterface $message
     */
    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }

    /**
     * @return MessageInterface
     */
    public function getMessage(): MessageInterface
    {
        return $this->message;
    }

    /**
     * @inheritDoc
     */
    public function getProtocolVersion()
    {
        return $this->message->getProtocolVersion();
    }

    /**
     * @inheritDoc
     */
    public function withProtocolVersion($version)
    {
        $copy = clone $this;
        $copy->message = $this->message->withProtocolVersion($version);

        return $copy;
    }

    /**
     * @inheritDoc
     */
    public function getHeaders()
    {
        return $this->message->getHeaders();
    }

    /**
     * @inheritDoc
     */
    public function hasHeader($name)
    {
        return $this->message->hasHeader($name);
    }

    /**
     * @inheritDoc
     */
    public function getHeader($name)
    {
        return $this->message->getHeader($name);
    }

    /**
     * @inheritDoc
     */
    public function getHeaderLine($name)
    {
        return $this->message->getHeaderLine($name);
    }

    /**
     * @inheritDoc
     */
    public function withHeader($name, $value)
    {
        $copy = clone $this;
        $copy->message = $this->message->withHeader($name, $value);

        return $copy;
    }

    /**
     * @inheritDoc
     */
    public function withAddedHeader($name, $value)
    {
        $copy = clone $this;
        $copy->message = $this->message->withAddedHeader($name, $value);

        return $copy;
    }

    /**
     * @inheritDoc
     */
    public function withoutHeader($name)
    {
        $copy = clone $this;
        $copy->message = $this->message->withoutHeader($name);

        return $copy;
    }

    /**
     * @inheritDoc
     */
    public function getBody()
    {
        return $this->message->getBody();
    }

    /**
     * @inheritDoc
     */
    public function withBody(StreamInterface $body)
    {
        $copy = clone $this;
        $copy->message = $this->message->withBody($body);

        return $copy;
    }
}