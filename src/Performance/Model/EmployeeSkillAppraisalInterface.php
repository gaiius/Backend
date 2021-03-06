<?php

namespace Persona\Hris\Performance\Model;

use Persona\Hris\Employee\Model\EmployeeInterface;
use Persona\Hris\Share\Model\SkillInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@personahris.com>
 */
interface EmployeeSkillAppraisalInterface extends AppraisalAwareInterface, SupervisorAwareInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee(EmployeeInterface $employee = null): void;

    /**
     * @return null|AppraisalPeriodInterface
     */
    public function getAppraisalPeriod(): ? AppraisalPeriodInterface;

    /**
     * @param AppraisalPeriodInterface $appraisalPeriod
     */
    public function setAppraisalPeriod(AppraisalPeriodInterface $appraisalPeriod = null): void;

    /**
     * @return \DateTime
     */
    public function getInputDate(): \DateTime;

    /**
     * @return SkillInterface
     */
    public function getSkill(): ? SkillInterface;

    /**
     * @param SkillInterface $skill
     */
    public function setSkill(SkillInterface $skill = null): void;
}
