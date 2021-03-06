<?php
 
    class Jobs{
        private $JobID;
        private $JobLocation;
        private $JobType;
        private $JobPosition;
        private $JobDescription;
        private $CompanyName;
        private $Duty;
        private $Qualification;
        private $Benefits;
        private $Salary;
        private $CreatedOn;
        private $JobCategory;

        function getJobCategory():string{
            return $this->JobCategory;
        }

        function setJobCategory(string $jobCategory){
            $this->JobCategory = $jobCategory;
        }

        function getCreatedOn(){
            return $this->CreatedOn;
        }

        function setCreatedOn(){
            $dtz = new DateTimeZone("America/Vancouver");
            $dt = new DateTime("now", $dtz);
            $this->CreatedOn = $dt->format("Y-m-d");
        }

        function getsalary():string{
            return $this->Salary;
        }

        function setsalary(string $salary){
            $this->Salary = $salary;
        }

        function getDuty():string{
            return $this->Duty;
        }

        function setDuty(string $duty){
            $this->Duty = $duty;
        }
        
        function getQualification():string{
            return $this->Qualification;
        }

        function setQualification(string $qualification){
            $this->Qualification = $qualification;
        }
        
        function getBenefits():string{
            return $this->Benefits;
        }

        function setBenefits(string $benefits){
            $this->Benefits = $benefits;
        }

        function getJobId():int{
            return $this->JobID;
        }

        function setJobId(int $jobId){
            $this->JobID = $jobId;
        }

        function getJobLocation():string{
            return $this->JobLocation;
        }

        function setJobLocation(string $jobLocation){
            $this->JobLocation = $jobLocation;
        }

        function getJobType():string{
            return $this->JobType;
        }

        function setJobType(string $jobType){
            $this->JobType = $jobType;
        }

        function getJobPosition():string{
            return $this->JobPosition;
        }

        function setJobPosition(string $jobPosition){
            $this->JobPosition = $jobPosition;
        }

        function getJobDescription():string{
            return $this->JobDescription;
        }

        function setJobDescription(string $jobDesc){
            $this->JobDescription = $jobDesc;
        }

        function getCompanyName():string{
            return $this->CompanyName;
        }

        function setCompanyName(string $companyName){
            $this->CompanyName = $companyName;
        }


    }

?>