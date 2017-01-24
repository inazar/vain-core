<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-api
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-api
 */

namespace Vain\Core\Api\Request\Validator\Module\Filter\Factory;

use Vain\Core\Api\Config\Parameter\ApiParameterConfigInterface;
use Vain\Core\Api\Request\Validator\Module\ApiValidatorModuleInterface;
use Vain\Core\Api\Request\Validator\Module\Factory\ApiValidatorModuleFactoryInterface;
use Vain\Core\Api\Request\Validator\Module\Filter\ApiValidatorDecimalModule;

/**
 * Class ApiValidatorFloatModuleFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ApiValidatorDecimalModuleFactory implements ApiValidatorModuleFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function getNames() : array
    {
        return ['double', 'decimal'];
    }

    /**
     * @inheritDoc
     */
    public function createModule(
        ApiParameterConfigInterface $apiParameterConfig,
        ApiValidatorModuleInterface $apiValidatorModule = null
    ) : ApiValidatorModuleInterface
    {
        return new ApiValidatorDecimalModule($apiValidatorModule);
    }
}
