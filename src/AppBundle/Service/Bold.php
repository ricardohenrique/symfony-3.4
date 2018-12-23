<?php
namespace AppBundle\Service;
/**
 * Created by PhpStorm.
 * User: Ricardo Mota
 * Date: 23/12/2018
 * Time: 14:32
 */

class Bold
{
    /**
     * Bold constructor.
     * @param $string
     * @return string
     */
    public function bold($string)
    {
        return "<strong>" . $string . "</strong>";
    }
}