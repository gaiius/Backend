<?php

namespace Persona\Hris\Tax\Formula;

use Persona\Hris\Employee\Model\EmployeeInterface;
use Persona\Hris\Tax\TaxPercentage;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@personahris.com>
 */
class KawinIstriTidakKerjaFormula extends AbstractTaxFormula
{
    const K0 = 58500000;
    const K1 = 63000000;
    const K2 = 67500000;
    const K3 = 72000000;

    /**
     * @param EmployeeInterface $employee
     *
     * @return float
     */
    public function getCalculatedValue(EmployeeInterface $employee): float
    {
        $taxable = $this->getTaxableValue($employee);
        $taxPercentage = TaxPercentage::getPercentageValue($taxable);

        $taxReduce = self::K0;
        switch ($employee->getTaxGroup()) {
            case EmployeeInterface::TAX_K_1:
                $taxReduce = self::K1;
                break;
            case EmployeeInterface::TAX_K_2:
                $taxReduce = self::K2;
                break;
            case EmployeeInterface::TAX_K_3:
                $taxReduce = self::K3;
                break;
        }

        $taxable = $taxable - $taxReduce;

        return $taxable * $taxPercentage;
    }
}
