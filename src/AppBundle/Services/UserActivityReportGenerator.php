<?php
/**
 * Created by PhpStorm.
 * User: new
 * Date: 2019.03.24
 * Time: 09:19
 */

namespace AppBundle\Services;


class UserActivityReportGenerator implements ReportGeneratorInterface
{
    public function generate()
    {
        $outputText = "User Activity Generator";

        return $outputText;
    }
}