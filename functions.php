<?php

    /**
     * @param array $data Данные в виде массива
     * @param bool $isBreak Если передать false, то контент на странице до/после вывода массива будет отображаться. По умолчанию true
     */
    function print_array($data, $isBreak = true)
    {
        if($isBreak)
        {
            ob_clean();
        }

        if(!is_array($data))
        {
            die('В функцию "print_array" в качестве первого аргумента необходимо передать тип "array", а не "' . gettype($data) . '"');
        }

        echo '<pre>' . print_r($data, true) . '</pre>';

        if($isBreak)
        {
            die;
        }
    }

    ob_start();
