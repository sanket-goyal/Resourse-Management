<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmployeeList
 *
 * @Table(name="employee_list")
 * @Entity
 */
class EmployeeList
{
    /**
     * @var integer $empId
     *
     * @Column(name="emp_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $empId;

    /**
     * @var string $empName
     *
     * @Column(name="emp_name", type="string", length=45, nullable=false)
     */
    private $empName;

    /**
     * @var date $dateOfJoin
     *
     * @Column(name="date_of_join", type="date", nullable=false)
     */
    private $dateOfJoin;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string $empStatus
     *
     * @Column(name="emp_status", type="string", length=20, nullable=false)
     */
    private $empStatus;

    /**
     * @var string $headName
     *
     * @Column(name="head_name", type="string", length=50, nullable=false)
     */
    private $headName;

    /**
     * @var string $headMailId
     *
     * @Column(name="head_mail_id", type="string", length=50, nullable=false)
     */
    private $headMailId;

    /**
     * @var string $hrMailId
     *
     * @Column(name="hr_mail_id", type="string", length=50, nullable=false)
     */
    private $hrMailId;


    /**
     * Get empId
     *
     * @return integer 
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Set empName
     *
     * @param string $empName
     */
    public function setEmpName($empName)
    {
        $this->empName = $empName;
    }

    /**
     * Get empName
     *
     * @return string 
     */
    public function getEmpName()
    {
        return $this->empName;
    }

    /**
     * Set dateOfJoin
     *
     * @param date $dateOfJoin
     */
    public function setDateOfJoin($dateOfJoin)
    {
        $this->dateOfJoin = $dateOfJoin;
    }

    /**
     * Get dateOfJoin
     *
     * @return date 
     */
    public function getDateOfJoin()
    {
        return $this->dateOfJoin;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set empStatus
     *
     * @param string $empStatus
     */
    public function setEmpStatus($empStatus)
    {
        $this->empStatus = $empStatus;
    }

    /**
     * Get empStatus
     *
     * @return string 
     */
    public function getEmpStatus()
    {
        return $this->empStatus;
    }

    /**
     * Set headName
     *
     * @param string $headName
     */
    public function setHeadName($headName)
    {
        $this->headName = $headName;
    }

    /**
     * Get headName
     *
     * @return string 
     */
    public function getHeadName()
    {
        return $this->headName;
    }

    /**
     * Set headMailId
     *
     * @param string $headMailId
     */
    public function setHeadMailId($headMailId)
    {
        $this->headMailId = $headMailId;
    }

    /**
     * Get headMailId
     *
     * @return string 
     */
    public function getHeadMailId()
    {
        return $this->headMailId;
    }

    /**
     * Set hrMailId
     *
     * @param string $hrMailId
     */
    public function setHrMailId($hrMailId)
    {
        $this->hrMailId = $hrMailId;
    }

    /**
     * Get hrMailId
     *
     * @return string 
     */
    public function getHrMailId()
    {
        return $this->hrMailId;
    }
}