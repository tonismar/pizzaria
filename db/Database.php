<?php
abstract class Database {

    public $conexao;

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
            $result = $query->fetchAll(PDO::FETCH_CLASS,$class) or die(print_r($query->errorInfo(), true));
        } else {
            $result = $query->fetchAll(PDO::FETCH_OBJ) or die(print_r($query->errorInfo(), true));
        }

        self::__destruct();
        return $result;
    }
}
