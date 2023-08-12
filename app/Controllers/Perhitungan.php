<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BasisPengetahuan;

class Perhitungan extends BaseController
{
    public function pencarian()
    {
        $selectKriteria = $this->request->getPost('kriteria');
        // dd($selectKriteria);
        // untuk mengecek data sudah masuk atau belum ^
        $kriteriaRuleModel = new BasisPengetahuan();
        $rules = $kriteriaRuleModel->where('id', $selectKriteria)->findAll();

        // Apply each rule to auto-enroll based on the selected criterion
        $riwayatModel = new BasisPengetahuan();
        foreach ($rules as $rule) {
            // Validate rule or perform additional checks as needed

            // Create the enrollment record based on the rule
            $riwayatModel->insert([
                'student_id' => $studentId, // Replace with the actual student ID
                'course_id' => $rule['consequent'], // Auto-enroll in the consequent course
                'grade' => 0 // Set an initial grade of 0 for auto-enrolled course
            ]);
        }
        
        // Redirect to the success page or show a success message
        return redirect()->to('/EnrollmentController/showSelectCriteriaForm');
    }
}
