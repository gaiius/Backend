<?php

namespace Persona\Hris\Core\Security\Model;

use Persona\Hris\Repository\RepositoryInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@personahris.com>
 */
interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $id
     *
     * @return UserInterface|null
     */
    public function find(string $id): ? UserInterface;

    /**
     * @param string $sessionId
     *
     * @return UserInterface|null
     */
    public function findUserBySessionId(string $sessionId): ? UserInterface;
}
