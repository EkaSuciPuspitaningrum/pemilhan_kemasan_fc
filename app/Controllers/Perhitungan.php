<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BasisPengetahuan;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;
use App\Models\RiwayatPencarian;

class Perhitungan extends BaseController
{
    public function pencarian()
    {
        // Get the selected criteria from the form
        $selectKriteria = $this->request->getPost('kriteria');

        // Load the BasisPengetahuan model to interact with the database
        $basisPengetahuanModel = new BasisPengetahuan();
        $basisPengetahuanData = $basisPengetahuanModel->findAll();
        
        // Get all kriteria_produk IDs and names from the database
        $kriteriaModel = new KriteriaProduk(); // Replace with your actual model
        $kriteriaData = $kriteriaModel->findAll();
        $kriteriaMap = [];
        
        // Create a map of kriteria_produk IDs to their names
        foreach ($kriteriaData as $kriteria) {
            $kriteriaMap[$kriteria->id] = $kriteria->kriteria_produk;
        }
        
        // Map kriteria_produk IDs to their names for selected criteria
        $selectedKriteriaNames = [];
        foreach ($selectKriteria as $kriteriaId) {
            if (isset($kriteriaMap[$kriteriaId])) {
                $selectedKriteriaNames[] = $kriteriaMap[$kriteriaId];
            }
        }
        
        // Hitung jumlah aturan yang cocok dengan kriteria yang diberikan
        $matchingRulesCount = 0;
        foreach ($basisPengetahuanData as $row) {
            if (in_array($row->kriteria_produk_id, $selectKriteria)) {
                $matchingRulesCount++;
            }
        }
        
        // Calculate total rules count
        $totalRulesCount = count($basisPengetahuanData);

        // Calculate jenis kemasan percentage for each basis_pengetahuan
        $jenisKemasanPercentage = [];
        foreach ($basisPengetahuanData as $row) {
            $jenisKemasan = $this->getJenisKemasan($row);
            if (!isset($jenisKemasanPercentage[$jenisKemasan])) {
                $jenisKemasanPercentage[$jenisKemasan] = 0;
            }
            $jenisKemasanPercentage[$jenisKemasan] += ($matchingRulesCount / $totalRulesCount) * 100;
        }

        // Get jenis kemasan data for each basis_pengetahuan
        $jenisKemasanData = [];
        foreach ($basisPengetahuanData as $row) {
            $jenisKemasanData[] = $this->getJenisKemasan($row);
        }

        // Find the highest percentage of jenis kemasan
        $highestPercentageJenisKemasan = max($jenisKemasanPercentage);
        $jenisKemasanNameWithHighestPercentage = array_search($highestPercentageJenisKemasan, $jenisKemasanPercentage);

        // Convert the highest percentage to percent format
        $highestPercentageFormatted = number_format($highestPercentageJenisKemasan/ 10, 2) . '%';

        $hasilpencarian = new RiwayatPencarian();

        // Get data from the form
        $namaproduk = $this->request->getPost('namaproduk');
        $beratproduk = $this->request->getPost('beratproduk');
        $ukuranproduk = $this->request->getPost('ukuranproduk');
        $volumeproduk = $this->request->getPost('volumeproduk');
        
        $newData = [
            'namaproduk' => $namaproduk,
            'beratproduk' => $beratproduk,
            'ukuranproduk' => $ukuranproduk,
            'volumeproduk' => $volumeproduk,
            'jenis_kemasan' => $jenisKemasanNameWithHighestPercentage,
            'persentase_perhitungan' => $highestPercentageFormatted,
        ];
        $hasilpencarian->insert($newData);


        $data = [
            'selectedKriteriaNames' => $selectedKriteriaNames,
            'matchingRulesCount' => $matchingRulesCount,
            'totalRulesCount' => $totalRulesCount,
            'selectedKriteria' => $selectKriteria,
            'jenisKemasanData' => $jenisKemasanData,
            'highestPercentageJenisKemasan' => $highestPercentageJenisKemasan,
            'jenisKemasanNameWithHighestPercentage' => $jenisKemasanNameWithHighestPercentage,
            'highestPercentageFormatted' => $highestPercentageFormatted,
        ];

        return view('user/hasil-pencarian', $data);
    }

    private function getJenisKemasan($basisPengetahuan)
    {
        $jenisKemasanModel = new JenisKemasan(); 
        $jenisKemasan = $jenisKemasanModel->find($basisPengetahuan->jenis_kemasan_id);
    
        if ($jenisKemasan) {
            return $jenisKemasan->jenis_kemasan;
        }
    
        return null;
    }
}
