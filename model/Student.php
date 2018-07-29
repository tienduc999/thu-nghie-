<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 7/28/2018
 * Time: 9:39 AM
 */

class Student
{
    private $StudentID,$name,$email,$phone;
    public function __construct($StudentID,$name,$email,$phone)
    {
        $this->StudentID=$StudentID;
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
    }
    public static function getAllStudent($studentID){
        $db=Database::getDB();
        $query='SELECT *FROM Student WHERE studentID= :studentID';
        try {
            $statement = $db->prepare($query);

            $statement->bindValue(':studentID',$studentID);
            $statement->execute();
            $listStudent = $statement->fetchAll();
            $statement->closeCursor();
            $result=[];
            foreach ($listStudent as $value){
                $result[]= new Student($value['studentID'],$value['name'],$value['email'],$value['phone']);
            }
            var_dump($result);
            return $result;
        }catch (PDOException $ex) {
            echo $ex->getMessage();
            exit();
        }

    }
    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getStudentID()
    {
        return $this->StudentID;
    }

    /**
     * @param mixed $StudentID
     */
    public function setStudentID($StudentID)
    {
        $this->StudentID = $StudentID;
    }
}