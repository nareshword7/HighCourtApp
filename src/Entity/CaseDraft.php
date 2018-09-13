<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="casedraft")
 */
class CaseDraft
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

     /**
     * @ORM\Column(type="string", length=256)
     */
    public $pet_name;

    /**
     * @ORM\Column(type="string", length=256)
     */
    public $res_name;

    /**
     * @ORM\Column(type="integer")
     */
    public $case_type;

    /**
    * @ORM\Column(type="string")
    */

    public $case_type_name;

    /**
    * @ORM\Column(type="string")
    */
    public $filing_date;

    /**
    * @ORM\Column(type="string")
    */
    public $draft_id;

    /**
    * @ORM\Column(type="string")
    */
    public $draft_status;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the case file as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    public $case_file;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getpetName()
    {
        return $this->pet_name;
    }
    public function setpetName($pet_name)
    {
        $this->pet_name = $pet_name;
    }

    public function getresName()
    {
        return $this->res_name;
    }
    public function setresName($res_name)
    {
        $this->res_name = $res_name;
    }
   
    public function getcaseType()
    {
        return $this->case_type;
    }
    public function setcaseType($case_type)
    {
        $this->case_type = $case_type;
    }

    public function getcaseTypeName()
    {
        return $this->case_type_name;
    }
    public function setcase_Type_Name($case_type_name)
    {
        $this->case_type_name = $case_type_name;
    }

    public function getfilingDate()
    {
        return $this->filing_date;
    }
    public function setfilingDate($filing_date)
    {
        $this->filing_date = $filing_date;
    }
   
    public function getdraftId()
    {
        return $this->draft_id;
    }

     public function setdraftId($draft_id)
    {
        $this->draft_id = $draft_id;
    }

    public function getdraftStatus()
    {
        return $this->draft_status;
    }
    public function setdraftStatus($draft_status)
    {
        $this->draft_status = $draft_status;
    }
    public function getcaseFile()
    {
        return $this->case_file;
    }
    public function setcaseFile($case_file)
    {
        $this->case_file = $case_file;
    }

}