<?php
include_once('../model/Pessoa.php');
include_once('../db/Database.php');

class PessoaDAO extends Database {
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
        $sql = "SELECT $fields FROM  pessoas$add";
        return $this->selectDB($sql, null, 'Pessoa');
    }

    public function insert($fields, $params=null) {
        $fields = 'id,'.$fields;
        $p = array('id' => 'null');
        foreach ($params as $key => $value) {
            $p[$key] = $value;
        }
        $numparams="";
        for ($i=0; $i<count($p); $i++) $numparams.=",?";
        $numparams = substr($numparams, 1);
        $sql = "INSERT INTO pessoas ($fields) VALUES ($numparams)";
        $t=$this->insertDB($sql, $p);
        return $t;
    }

    public function update($fields, $params=null, $where=null) {
        $fields_T="";
        for($i=0; $i<count($fields); $i++) $fields_T.=", $fields[$i] = ?";
        $fields_T = substr($fields_T, 2);
        $sql = "UPDATE pessoas SET $fields_T";
        if(isset($where)) $sql .= " WHERE $where";
        $t=$this->updateDB($sql, $params);
        return $t;
    }

    public function delete($where=null, $params=null) {
        $sql = "DELETE FROM pessoas";
        if(isset($where)) $sql .= " WHERE $where";
        $t=$this->deleteDB($sql, $params);
        return $t;
    }
}
?>
