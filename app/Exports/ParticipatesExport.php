<?php

namespace App\Exports;

use App\Participate;
use Maatwebsite\Excel\Concerns\FromCollection;

class ParticipatesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Participate::select('Participant_firstname', 'Participant_name')->get();
    }
}
