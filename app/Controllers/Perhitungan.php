<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BasisPengetahuan;

class Perhitungan extends BaseController
{

    protected $pengetahuan;

    function __construct()
    {
        $this->pengetahuan = new BasisPengetahuan();
    }

    public function pencarian() {
        $selectedCriteria = $this->request->getPost('kriteria');
        $matchedRules = $this->pengetahuan->getMatchedRules($selectedCriteria);
    
        $bestMatch = null;
        
        foreach ($matchedRules as $rule) {
            $ruleCriteria = explode(',', $rule->kriteria_produk_id);
            $match = true;
    
            foreach ($selectedCriteria as $criteria) {
                if (!in_array($criteria, $ruleCriteria)) {
                    $match = false;
                    break;
                }
            }
    
            if ($match) {
                $bestMatch = $rule;
                break; 
            }
        }
    
        $jenisKemasanName = null;
        
        if ($bestMatch) {
            $jenisKemasanId = $bestMatch->jenis_kemasan_id;
            $jenisKemasanName = $this->pengetahuan->getJenisKemasanName($jenisKemasanId);
        }
    
        return view('user/hasil-pencarian', ['jenisKemasanName' => $jenisKemasanName]);
    }
    
    
    
    
    
}
