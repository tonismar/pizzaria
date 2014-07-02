<?php
abstract class Database {

    private $conexao;

    function __construct() {
    }

    public function connect() {
        try {
            $this->conexao = new PDO('mysql:host=127.0.0.1; port=3306; dbname=pizzaria', 'default', 'default');
        } catch ( PDOException $e) {
            die ("Erro <code>". $e->getMessage() . "</code>");
        }
    }

    function __destruct() {
        $this->conexao = null;
    }

    public function selectDB($sql, $params=null, $class=null) {
        $query = $this->conexao->prepare($sql);
        $query->execute($params);

        if (isset($class)) {
            $result = $query->fetchAll(PDO::FETCH_CLASS,$class);
        } else {
            $result = $query->fetchAll(PDO::FETCH_OBJ);
        }

        self::__destruct();
        return $result;
    }

    public function insertDB($sql, $params=null) {
        $query=$this->conexao->prepare($sql);
        $query->execute($params);
        $rs = $this->conexao->lastInsertID();
        $query->closeCursor();
        // comentei a chamada da função destruct porque no loop perdia-se o objeto conexao.
        //self::__destruct();
        return $rs;
    }
}
