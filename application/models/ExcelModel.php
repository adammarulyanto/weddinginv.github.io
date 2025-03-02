<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcelModel extends CI_Model {
    
    public function insertBatch($sheetData) {
        $dataInsert = [];

        foreach ($sheetData as $key => $row) {
            if ($key == 1) continue; // Lewati header

            $dataInsert[] = [
                'nama'      => $row['A'], // Kolom A di Excel
                'wa'     => $row['B'], // Kolom B di Excel
                'ig'   => $row['C']  // Kolom C di Excel
            ];
        }

        if (!empty($dataInsert)) {
            $this->db->insert_batch('users', $dataInsert);
        }
    }
}
?>
