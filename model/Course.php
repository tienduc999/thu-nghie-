<?php
    class Course{
        private $courseID,$Name;
        public function __construct($courseID,$Name)
        {
            $this->courseID=$courseID;
            $this->Name=$Name;
        }
        public static function getAllCourse(){
            $db= Database::getDB();
            $query='SELECT * FROM Course';
            try{
                $statement=$db->prepare($query);
                $statement->execute();
                $listCourse=$statement->fetchAll();
                $statement->closeCursor();
                $result=[];
                foreach ($listCourse as $value){
                    $result[]=new Course($value['courseID'],$value['name']);
                }
                var_dump($result);
                return $result;
            }catch (PDOException $ex) {
                echo $ex->getMessage();
                exit();
            }
        }

        public function getCourseID()
        {
            return $this->courseID;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->Name;
        }

        /**
         * @param mixed $courseID
         */
        public function setCourseID($courseID)
        {
            $this->courseID = $courseID;
        }

        /**
         * @param mixed $courseName
         */
        public function setName($Name)
        {
            $this->courseName = $Name;
        }
    }
?>