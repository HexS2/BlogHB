<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 2019-03-08
 * Time: 10:56
 */

namespace App\Repository;


interface IRepository
{
    function insert($request);

    function delete($request);

    function update($request);

    function getResults(string $request): array;

    function getResult(string $request);
}