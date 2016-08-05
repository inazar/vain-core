<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-core
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-core
 */
namespace Vain\Core\Exception;

use Vain\Core\Encoder\EncoderInterface;

/**
 * Class EncoderException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class EncoderException extends CoreException
{
    private $encoder;

    /**
     * EncoderException constructor.
     *
     * @param EncoderInterface $encoder
     * @param string           $message
     * @param int              $code
     * @param \Exception|null  $previous
     */
    public function __construct(EncoderInterface $encoder, $message, $code, \Exception $previous = null)
    {
        $this->encoder = $encoder;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return EncoderInterface
     */
    public function getEncoder()
    {
        return $this->encoder;
    }
}