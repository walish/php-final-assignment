<?php
namespace App\Migration;

use Cu\Db\DBContext;

class Migration
{
    public static function migrate()
    {

        $queries = [
            'DROP DATABASE IF EXISTS cuongnm3_smart_osc',
            'CREATE DATABASE cuongnm3_smart_osc character set UTF8mb4 collate utf8mb4_bin',
            'CREATE TABLE cuongnm3_smart_osc.news(
              id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
              title TEXT NOT NULL,
                source_link TEXT NOT NULL,
                img_link TEXT NOT NULL,
                description TEXT NOT NULL,
                update_time TEXT NOT NULL
            )',
        ];
        $isSucess = true;
        foreach ($queries as $query) {
            $connection = DBContext::getConnection(true);
            try {
                $connection->beginTransaction();
                $stmt = $connection->prepare($query);
                $stmt->execute();
                $stmt = null;
                $connection->commit();
            } catch (\Exception $ex) {
                $isSucess = false;
                echo $ex->getMessage();
                echo $query;
                $connection->rollback();
            }
            $connection = null;
        }
        return $isSucess;
    }

}
