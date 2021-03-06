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

namespace Vain\Core\Http\Response\Emitter\Factory\Decorator;

use Vain\Core\Http\Response\Emitter\EmitterInterface;
use Vain\Core\Http\Response\Emitter\Factory\EmitterFactoryInterface;

/**
 * Class AbstractEmitterFactoryDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractEmitterFactoryDecorator implements EmitterFactoryInterface
{
    private $emitterFactory;

    /**
     * AbstractEmitterFactoryDecorator constructor.
     *
     * @param EmitterFactoryInterface $emitterFactory
     */
    public function __construct(EmitterFactoryInterface $emitterFactory)
    {
        $this->emitterFactory = $emitterFactory;
    }

    /**
     * @inheritDoc
     */
    public function createEmitter(): EmitterInterface
    {
        return $this->emitterFactory->createEmitter();
    }
}