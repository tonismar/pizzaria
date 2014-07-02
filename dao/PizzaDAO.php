<?php
include_once('../model/Pizza.php');
include_once('../db/Database.php');

class PizzaDAO extends Database {
    public function __construct(){
        $this->connect();
    }

    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->key);
        }
        foreach (array_keys(get_defined_vars()) as $var) {
            unset(${"$var"});
        }
        unset($var);
    }

    public function load($fields="*", $add="") {
        if(strlen($add)>0) $add = " ".$add;
        $sql = "SELECT $fields FROM  itens_pedido$add";
        return $this->selectDB($sql, null, 'Pizza');
    }

    public function insert($fields, $params=null) {
        $numparams="";
        foreach ($params as $key => $value) {
            $numparams .= ','.$key;
        }
        $numparams = substr($numparams, 1);
        $sql = "INSERT INTO itens_pedido ($fields) VALUES ($numparams)";
        $t=$this->insertDB($sql, $params);
        return $t;
    }

    public function update($fields, $params=null, $where=null) {
        $fields_T="";
        for($i=0; $i<count($fields); $i++) $fields_T.=", $fields[$i] = ?";
        $fields_T = substr($fields_T, 2);
        $sql = "UPDATE itens_pedido SET $fields_T";
        if(isset($where)) $sql .= " WHERE $where";
        $t=$this->updateDB($sql, $params);
        return $t;
    }

    public function delete($where=null, $params=null) {
        $sql = "DELETE FROM itens_pedido";
        if(isset($where)) $sql .= " WHERE $where";
        $t=$this->deleteDB($sql, $params);
        return $t;
    }
}
?>
