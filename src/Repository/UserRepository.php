<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 2019-03-08
 * Time: 10:55
 */

namespace App\Repository;


use App\Model\User;

class UserRepository extends Repository implements IRepository
{
    private static $table = 'user';

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(UserRepository::$table);
    }

    /**
     * Find user
     *
     * @param string $request
     * @return User|null
     * @throws \Exception
     */
    public function getResult(string $request = ''): ?User
    {
        $user = null;
        $result = parent::getResult($request);

        if ($result) {
            $user = new User();
            $user->setFirstName($result['firstname'])
                ->setLastName($result['lastname']);
        }

        return $user;
    }

    /**
     * Find users
     *
     * @param string $request
     * @return User[]
     * @throws \Exception
     */
    public function getResults(string $request = ''): array
    {
        $users = [];
        $results = parent::getResults($request);

        if ($results) {
            foreach ($results as $result) {
                $user = new User();
                $user->setFirstName($result['firstname'])
                    ->setLastName($result['lastname']);
                $users[] = $user;
            }
        }

        return $users;
    }

    /**
     * Insert user
     *
     * @param User $user
     * @return mixed
     * @throws \Exception
     */
    public function insert($user)
    {
        if (!$user instanceof User) {
            throw new \Exception('You can save only users');
        }
        $request = "(firstname, lastname) VALUES ('" . $user->getFirstName() . "','" . $user->getLastName() . "')";
        return parent::insert($request);
    }

    /**
     * Update user
     *
     * @param User $user
     * @throws \Exception
     */
    public function update($user)
    {
        if (!$user instanceof User) {
            throw new \Exception('You can save only users');
        }
        $request = "SET firstname = '" . $user->getFirstName() . "', lastname = '" . $user->getLastName() . "' WHERE id = " . $user->getId() . " ";
        parent::update($request);
    }

    /**
     * Delete user
     *
     * @param User $user
     * @throws \Exception
     */
    public function delete($user)
    {
        if (!$user instanceof User) {
            throw new \Exception('You can save only users');
        }
        $request = "WHERE id = " . $user->getId();
        parent::delete($request);
    }
}