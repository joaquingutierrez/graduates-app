<?php
    require_once(__DIR__ . "/abstract/CDataBase.php");

    class CMySQLi extends CDataBase {
        public function __construct ($h, $u, $p, $b) {
            $isConnect = $this -> connect($h, $u, $p, $b);
            if (!$isConnect) {
                echo "<p>Error al conectarse a la base de datos, por favor intentelo más tarde</p>";
            }
        }

        protected function connect($h, $u, $p, $b) {
            mysqli_report(MYSQLI_REPORT_OFF);
            $connection = @mysqli_connect($h,$u,$p,$b);
            $this -> setConnection($connection);
            return $connection ? true : false;
        }

        protected function close() {
            return mysqli_close($this->getConnection());
        }

        public function executeQuery($q) {
            return mysqli_query($this -> getConnection(), $q);
        }

        public function createAssociativeArray($r) {
            return mysqli_fetch_assoc($r);
        }

        public function getRowCount($r) {
            return mysqli_num_rows($r);
        }
    }
?>