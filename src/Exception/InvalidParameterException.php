<?php

/**
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @license    https://choosealicense.com/licenses/gpl-3.0/ GNU General Public License v3.0
 * @copyright  Copyright (c) 2023 Brand Oriented sp. z o.o. (https://brandoriented.pl)
 * @copyright  Copyright (c) 2021 CI HUB GmbH (https://ci-hub.com)
 */

namespace CIHub\Bundle\SimpleRESTAdapterBundle\Exception;

use Symfony\Component\HttpFoundation\Response;

final class InvalidParameterException extends \InvalidArgumentException implements EndpointExceptionInterface
{
    /**
     * @param array<int, string> $requiredParams
     */
    public function __construct(array $requiredParams = [], int $code = Response::HTTP_BAD_REQUEST)
    {
        parent::__construct(sprintf('Required parameters: %s', implode(', ', $requiredParams)), $code);
    }
}
