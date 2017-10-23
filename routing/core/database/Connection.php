<?php
/*
 * This file is part of the MiWay Insurance Application.
 *
 * @author      MiWay Development Team
 * @copyright   Copyright (c) 2014-2017 MiWay Insurance Ltd
 */

class Connection
{
    public static function make($config)
    {
        try {
            return $pdo = new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e)
        {
            die( $e->getMessage());
        }
    }
}