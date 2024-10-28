<?php
    require_once(__DIR__ . "/../utils/validations.php");

    class CAdministrator {
        private $db;
        private $graduates;

        public function __construct ($db) {
            $this -> db = $db;
            $this -> graduates = new CGraduates($db);
        }

        public function checkCredentials ($user_name, $password) {
            $sql = "SELECT * FROM admin_users WHERE user_name = '". $user_name ."'";
            $result = $this -> db -> executeQuery($sql);
            if ($this -> db -> getRowCount($result) === 1) {
                $user = $this -> db -> createAssociativeArray($result);
                return $user["password"] === $password;
            }
            return false;
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

        public function confirmGraduate ($graduate_id) {
            return $this -> graduates -> editGraduate($graduate_id, "status", "confirmed");
        }

        public function rejectGraduate ($graduate_id) {
            return $this -> graduates -> editGraduate($graduate_id, "status", "rejected");
        }
        
        public function getConfirmedGraduates () {
            $sql_filter = "status = 'confirmed'";
            return $this -> graduates -> getfilteredGraduates($sql_filter);
        }

        public function getRejectedGraduates () {
            $sql_filter = "status = 'rejected'";
            return $this -> graduates -> getfilteredGraduates($sql_filter);
        }

        public function getPendingGraduates () {
            $sql_filter = "status = 'pending'";
            return $this -> graduates -> getfilteredGraduates($sql_filter);
        }

        public function getGraduates () {
            return $this -> graduates -> getGraduates();
        }

        public function changePassword ($id, $newPassword) {
            $sql = "UPDATE admin_users SET password = '".$newPassword."' WHERE id = ".$id;
            $this -> db -> executeQuery($sql);
        }
    }
?>