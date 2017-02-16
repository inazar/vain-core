<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-entity
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-entity
 */
declare(strict_types = 1);

namespace Vain\Core\Entity\Result;

/**
 * Class CannotDeleteEntityResult
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class CannotDeleteEntityResult extends AbstractEntityFailedResult
{
    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf('Cannot delete entity %s', $this->getEntity()->getEntityName());
    }
}