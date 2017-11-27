<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 27/11/17
 * Time: 11:54
 */
namespace AppBundle\Service;

/**
 * Class Slugger
 * @package AppBundle\Service
 */
class Slugger
{
    public function slugify($string)
    {
        return preg_replace(
            '/[^a-z0-9]/', '-', strtolower(trim(strip_tags($string)))
        );
    }

}