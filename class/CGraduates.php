<?php
    class CGraduates {
        private $db;

        public function __construct ($db) {
            $this -> db = $db;
        }

        public function insertGraduate ($full_name = "", $degree_id = 0, $student_number = 0, $email = "", $phone = "" ) {
            if (!$full_name || !$degree_id || !$student_number || !$email || !$phone) {
                echo "<p>Por favor, complete todos los campos</p>";
                return;
            }
            if (
                !isValidEmail($email) ||
                !isValidFullName($full_name) ||
                !isValidDegreeId($degree_id) ||
                !isValidStudentNumber($student_number) ||
                !isValidPhone($phone)
            ) {
                echo "<p>Datos introducidos erróneos. Por favor, intentelo de nuevo.</p>";
                echo "<a href=".URL_BASE.">Volver</a>";
                return;
            }
            $sql = "INSERT INTO graduates (full_name, degree_id, student_number, email, phone) values (
                '".$full_name."',
                ".$degree_id.",
                ".$student_number.",
                '".$email."',
                '".$phone."'
            )";
            return $this -> db -> executeQuery($sql);
        }

        public function editGraduate ($id, $attribute, $newValue) {
            $sql = "UPDATE graduates 
            SET ".$attribute." = '".$newValue."'
            WHERE id = ".$id;
            return $this -> db -> executeQuery($sql);
        }

        public function deleteGraduate ($id) {
            $sql = "DELETE graduates 
            WHERE id = ".$id;
            return $this -> db -> executeQuery($sql);
        }

        public function getGraduates () {
            $sql = "SELECT * FROM graduates";
            $result = $this -> db -> executeQuery($sql);
            $graduates = [];
            if ($result -> num_rows > 0) {
                while ($row = $this -> db -> createAssociativeArray($result)) {
                    $graduates[] = $row;
                }
            }
            return $graduates;
        }

        public function getfilteredGraduates ($sql_filter) {
            $sql = "SELECT * FROM graduates WHERE ".$sql_filter;
            $result = $this -> db -> executeQuery($sql);
            $graduates = [];
            if ($result -> num_rows > 0) {
                while ($row = $this -> db -> createAssociativeArray($result)) {
                    $graduates[] = $row;
                }
            }
            return $graduates;
        }
    }
?>