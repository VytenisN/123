<?php
class auto 
{
    public $message = '';
    private $cnn = false;
    private $host = 'vytenis.net';
    private $dbname = 'vytenisn_test';
    private $userid = 'vytenisn_admin';
    private $password = 'bandymas';

    function __construct()
    {
        $this->message = "Prisijungimas prie DB ";
        try 
        {
            $this->cnn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->userid, $this->password);
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
            $this->message .= 'sėkmingas';
        }
        catch(PDOException $e) 
        {
            echo 'nesėkmingas: ' . $e->getMessage();
        }
    }
    function getList()
    {
        $this->message = "Automobilių sąrašo skaitymas iš DB ";
        $cars = [];
        try 
        {
            $sql = "select * from auto order by aut_gamintojas, aut_modelis";
            $res = $this->cnn->query($sql);
            while ($row = $res->fetch()) 
            {
                $cars[] = 
                [
                    'id' => $row['aut_id'],
                    'gamintojas' => $row['aut_gamintojas'],
                    'modelis' => $row['aut_modelis'],
                    'metai' => $row['aut_metai'],
                    'kaina' => $row['aut_kaina'],
                    'nuotrauka' => $row['aut_nuotrauka'],
                    'mime' => $row['aut_mime']
                ];
            }
            $this->message .= "sėkmingas";
        }
        catch(PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
            $cars = false;
        }
        return $cars;
    }
    function delete ($id)
    {
        $ok = false;
        $this->message = "Automobilio šalinimas iš DB ";
        try 
        {
            $sql = "delete from auto where aut_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            $this->message .= "sėkmingas";
            $ok = true;
        } 
        catch (PDOException $e) 
        {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
        }
        return $ok;
    }
}
?>