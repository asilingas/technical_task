<?php
/**
 * Created by PhpStorm.
 * User: new
 * Date: 2019.03.24
 * Time: 09:25
 */

namespace AppBundle\Services;


interface ReportGeneratorInterface
{
    /**
     * @return mixed
     */
    public function generate();
}