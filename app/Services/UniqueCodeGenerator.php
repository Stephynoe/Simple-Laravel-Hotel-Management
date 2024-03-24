<?php

// app/Services/UniqueCodeGenerator.php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Reservation;

class UniqueCodeGenerator
{
    public function generateUniqueCode()
    {
        /* $uniqueCode = Str::random(8); // Generates a random string of 8 characters

        // Optionally, you can add a prefix or suffix to the code
        $uniqueCode = 'CODE-' . $uniqueCode;

        // Check if the code already exists in the database
        $existingCode = Reservation::where('reservation_code', $uniqueCode)->first();

        if ($existingCode) {
            // If the code already exists, generate a new one
            return $this->generateUniqueCode();
        }

        // Create a new record with the unique code
        // $model = new YourModel();
        // $model->code = $uniqueCode;
        // $model->save(); */

        return 'hello';
    }
}


?>