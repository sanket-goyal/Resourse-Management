<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppraiserComments
 *
 * @Table(name="appraiser_comments")
 * @Entity
 */
class AppraiserComments
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var text $appraiserComment
     *
     * @Column(name="appraiser_comment", type="text", nullable=false)
     */
    private $appraiserComment;

    /**
     * @var EmployeeList
     *
     * @ManyToOne(targetEntity="EmployeeList")
     * @JoinColumns({
     *   @JoinColumn(name="emp_id", referencedColumnName="emp_id")
     * })
     */
    private $emp;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set appraiserComment
     *
     * @param text $appraiserComment
     */
    public function setAppraiserComment($appraiserComment)
    {
        $this->appraiserComment = $appraiserComment;
    }

    /**
     * Get appraiserComment
     *
     * @return text 
     */
    public function getAppraiserComment()
    {
        return $this->appraiserComment;
    }

    /**
     * Set emp
     *
     * @param EmployeeList $emp
     */
    public function setEmp(\EmployeeList $emp)
    {
        $this->emp = $emp;
    }

    /**
     * Get emp
     *
     * @return EmployeeList 
     */
    public function getEmp()
    {
        return $this->emp;
    }
}