<?php
namespace App\Model;

use Cu\Model\Model;
use Cu\Db\DBContext;

class NewsModel extends Model
{
    protected $table_name;
    public function __construct()
    {
        $this->table_name = 'news';
    }

    public function getNewsByName($searchingName)
    {
        // initialize response;
        $res = [];

        $connection = DBContext::getConnection();
        if($connection == null) {
          $res['err'] = "Can not get connection";
          return $res;
        }
        
        $query = "SELECT * FROM `news` WHERE `title` LIKE '%$searchingName%'";

        $res['query'] = $query;

        $stmt = $connection->prepare($query);
        
        try {
            $result = array();
            $connection->beginTransaction();
            $stmt->execute();

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                array_push($result, $row);
            }

            $stmt = null;
            $connection->commit();

            $res['data'] = $result;
        } catch (\Exception $ex) {
            //throw $th;
            $res['err'] = $ex->getMessage();
            $connection->rollback();
        }
        $connection = null;

        return $res;
    }

}
