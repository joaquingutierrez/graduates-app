<?php
    require_once("utils/validations.php");

    class CAdministrator {
        private $db;

        public function __construct ($db) {
            $this -> db = $db;
        }

        public function createDegree ($degreeName) {
            if (!isValidDegreeName($degreeName)) {
                echo "<p>Nombre inválido</p>";
                return;
            }
            $sql = "INSERT INTO degrees (name) VALUES ('".$degreeName."')";
            $this -> db -> executeQuery($sql);
        }

        public function editDegree ($id, $newName) {
            if (!isValidDegreeName($newName)) {
                echo "<p>Nombre inválido</p>";
                return;
            }
            $sql = "UPDATE degrees SET name = '".$newName."' WHERE id = '".$id."'";
            $this -> db -> executeQuery($sql);
        }

        public function deleteDegree ($id) {
            $sql = "DELETE FROM degrees WHERE id = '".$id."'";
            $this -> db -> executeQuery($sql);
        }

        public function createEmail ($email) {
            if (!isValidEmail($email)) {
                echo "<p>Email inválido</p>";
                return;
            }
            $sql = "INSERT INTO emails (email) VALUES ('".$email."')";
            $this -> db -> executeQuery($sql);
        }

        public function editEmail ($id, $newEmail) {
            if (!isValidEmail($newEmail)) {
                echo "<p>Email inválido</p>";
                return;
            }
            $sql = "UPDATE emails SET email = '".$newEmail."' WHERE id = '".$id."'";
            $this -> db -> executeQuery($sql);
        }

        public function deleteEmail ($id) {
            $sql = "DELETE FROM emails WHERE id = '".$id."'";
            $this -> db -> executeQuery($sql);
        }

        public function sendEmails () {
            $sql = "SELECT * FROM emails";
            $result = $this -> db -> executeQuery($sql);
            while ($row = $this -> db -> createAssociativeArray($result)) {
                $email = $row["email"];
                mail($email, "Subject", "Message");
            }
        }

        public function confirmGraduate () {

        }

        public function rejectGraduate () {

        }
        
        public function getConfirmedGraduates () {

        }

        public function changePassword () {

        }
    }
?>