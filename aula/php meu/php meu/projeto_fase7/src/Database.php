<?php
namespace Impacta;

class Database
{
    protected $con;

    public function __construct(array $params=[])
    {
        if ($params) {
            $this->con = mysqli_connect($params['dns'], $params['user'], $params['pass'], $params['db']);
            $this->error();
            return;
        }
        $this->con = mysqli_connect('localhost', 'root', '', 'impacta');
    }

    public function query($sql)
    {
        $res = mysqli_query($this->con, $sql);
        $this->queryError();
        return $res;
    }

    protected function queryError() : void
    {
        if (mysqli_error($this->con)) {
            throw new \Error(mysqli_error($this->con));
        }
    }

    protected function error() : void
    {
        if (mysqli_connect_error()) {
            throw new \Error(mysqli_connect_error());
        }
    }

    public function getById(string $tabela, int $id, $fields='*')
    {
        $select = "SELECT $fields FROM $tabela WHERE id=$id";
        $res = $this->query($select);
        return mysqli_fetch_assoc($res);
    }

    public function __destruct()
    {
        mysqli_close($this->con);
    }
}