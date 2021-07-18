<?php

namespace App\Imports;

use App\Participate;
use Maatwebsite\Excel\Concerns\ToModel;

class ParticipatesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Participate([
            'Participant_id' => $row['Participant_id'],
            'Activity_id' => $row['Activity_id'],
            'Participant_firstname' => $row['Participant_firstname'],
            'Participant_name' => $row['Participant_name'],
        ]);
    }
}
