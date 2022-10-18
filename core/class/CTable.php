<?
class CTable
{
    /**
     * @var host
     */
    private $db_host;
    /**
     * @var databse name
     */
    private $db_name;
    /**
     * @var database user name
     */
    private $db_user;
    /**
     * @var database user password
     */
    private $db_password;
    /**
     * @var database connection object
     */
    private $obDB;

    /**
     * return databse name
     * @return databse name
     */
    public function getDBName()
    {
        return $this->db_name;
    }

    /**
     * return database user name
     * @return database user name
     */
    public function getDBUser()
    {
        return $this->db_user;
    }

    /**
     * return host name
     * @return host name
     */
    public function getDBHost()
    {
        return $this->db_host;
    }

    /**
     * CTable constructor.
     * @param host
     * @param database user name
     * @param database user password
     * @param databse name
     */
    public function __construct($db_host, $db_user, $db_password, $db_name)
    {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_name = $db_name;

        try
        {
            $this->obDB = new mysqli($this->db_host, $this->db_user,  $this->db_password, $this->db_name);
        }
        catch (Exception $ex)
        {
            $this->writeException($ex->getMessage());
        }
    }

    /**
     * write exceptions to file
     * @param exception message
     */
    private function writeException($exception_message)
    {
        $file = fopen('log-'.date('d.m.Y H:i:s').'txt', 'a');
        fwrite($file, $exception_message);
    }

    /**
     * creates new entity in database table
     * @param string table name
     * @param array entity fields
     * @return bool database result;
     */
    public function add(string $table_name, array $ar_fields)
    {
        $arFields = array();
        $arValues = array();
        foreach ($ar_fields as $key => $value){
            $arFields[] = "`".$key."`";
            $arValues[] = "'".$value."'";
        }

        $query_string = "INSERT INTO `{$table_name}`(".implode(', ',$arFields).")
        VALUES (".implode(", ",$arValues).")";

        $result = $this->obDB->query($query_string);    
        if($result)
        {
            return true;
        }
        else
        {
            $this->writeException($result->error);
        }
    }

    public function getList(string $table_name, array $arSelect = array(), array $arFilter = array(), array $arOrder = array(), int $elementCount = 0)
    {
        $strQuery = "SELECT ";
        $strQuery .= (count($arSelect)>0) ? implode(',', $arSelect) : '*';
        $strQuery .= " FROM ";
        $strQuery .= "`{$table_name}`";

        if(!empty($arFilter))
        {
            $strFilter = " WHERE ";
            if(count($arFilter)>1)
            {
                foreach ($arFilter as $key=>$value)
                {
                    if($key != array_key_last($arFilter))
                        $strFilter .= "`".$key."` LIKE '".$value."' AND ";
                    else
                        $strFilter .= "`".$key."` LIKE '".$value."' ";
                }
            }
            else if (count($arFilter)==1)
            {
                $strFilter .= "`".array_keys($arFilter)[0]."` LIKE '".array_values($arFilter)[0]."'";
            }

            $strQuery .= $strFilter." ";
        }

        if(!empty($arOrder))
        {
            $strOrder = " ORDER BY ";
            if(count($arOrder)>1)
            {
                foreach ($arOrder as $key=>$value)
                {
                    if((string)$key != array_key_last($arOrder))
                        $strOrder .= "`".$key."` ".$value.", ";
                    else
                        $strOrder .= "`".$key."` ".$value." ";
                }
            }
            else if(count($arOrder)==1)
            {
                $strOrder .= "`".array_keys($arOrder)[0]."` ".array_values($arOrder)[0];
            }

            $strQuery .= $strOrder;
        }

        if(isset($elementCount) && $elementCount > 0)
        {
            $strQuery .= " LIMIT ".$elementCount;
        }
        $resultList = $this->obDB->query($strQuery);
        if($resultList!=false)
        {
            $arResult = array();
            while($item = $resultList->fetch_assoc())
            {
                $arResult[] = $item;
            }
            return $arResult;
        }
        else
        {
            return false;
        }
    }
}
