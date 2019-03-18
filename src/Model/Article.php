<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 18/03/2019
 * Time: 10:50
 */

namespace App\Model;


class Article
{
    /*** @var */
    private $id;
    private $content;
    private $title;

    /**
     * Article constructor.
     * @param $id
     * @param $content
     * @param $title
     */
    public function __construct($id, $content, $title)
    {
        $this->id = $id;
        $this->content = $content;
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }



}