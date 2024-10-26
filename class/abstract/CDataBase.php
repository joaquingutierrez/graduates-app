<?php
    abstract class CDataBase {
        private $connection;

        public function setConnection ($c) {
            $this -> connection = $c;
        }

        public function getConnection () {
            return $this -> connection;
        }

        abstract protected function connect($h, $u, $p, $b);
        abstract protected function close();
        abstract protected function executeQuery($q);
        abstract protected function createAssociativeArray($r);
        abstract protected function getRowCount($r);
    }
?>