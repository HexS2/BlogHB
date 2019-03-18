<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 2019-03-08
 * Time: 10:55
 */

namespace App\Repository;


use App\Model\Article;
use App\Model\User;

class ArticleRepository extends Repository implements IRepository
{
    private static $table = 'article';

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(ArticleRepository::$table);
    }

    /**
     * Find user
     *
     * @param string $request
     * @return User|null
     * @throws \Exception
     */
    public function getResult(string $request = ''): ?Article
    {
        $article = null;
        $result = parent::getResult($request);

        if ($result) {
          $article = new Article($result['id'],$result['title'],$result['content']);
        }

        return $article;
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
        $articles = [];
        $results = parent::getResults($request);

        if ($results) {
            foreach ($results as $result) {
                $article = new Article($result['id'],$result['title'],$result['content']);
                $articles[] = $article;
            }
        }

        return $articles;
    }

    /**
     * Insert user
     *
     * @param Article $article
     * @return mixed
     * @throws \Exception
     */
    public function insert($article)
    {
        if (!$article instanceof Article) {
            throw new \Exception('You can save only article');
        }
        $request = "(title, content) VALUES ('" . $article ->getTitle() . "','" . $article->getContent() . "')";
        return parent::insert($request);
    }

    /**
     * Update user
     *
     * @param Article $article
     * @throws \Exception
     */
    public function update($article)
    {
        if (!$article instanceof Article) {
            throw new \Exception('You can save only article');
        }
        $request = "SET title = '" . $article->getTitle() . "', content = '" . $article->getContent() . "' WHERE id = " . $article->getId() . " ";
        parent::update($request);
    }

    /**
     * Delete user
     *
     * @param User $user
     * @throws \Exception
     */
    public function delete($article)
    {
        if (!$article instanceof Article) {
            throw new \Exception('You can save only users');
        }
        $request = "WHERE id = " . $article->getId();
        parent::delete($request);
    }
}