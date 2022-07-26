<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Animal;

class AnimalImport implements ToModel,WithStartRow,WithValidation,WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Animal|null
     */
    public function model(array $row)
    {
        if(isset($row['id']))
        {
            $animal=Animal::find($row['id']);

            if(isset($animal))
            {
                $animal->update([
                    'owner_id'=>$row['owner_id'],
                    'name'=>$row['name'],
                    'gender'=>$row['gender'],
                    'dob'=>$row['dob'],
                ]);

            }
            else{
                return Animal::create([
                    'code'=>animal_code(),
                    'owner_id'=>$row['owner_id'],
                    'name'=>$row['name'],
                    'gender'=>$row['gender'],
                    'dob'=>$row['dob'],
                ]);
            }
        }
        else{
            return Animal::create([
                'code'=>animal_code(),
                'owner_id'=>$row['owner_id'],
                'name'=>$row['name'],
                'gender'=>$row['gender'],
                'dob'=>$row['dob'],
            ]);
        }
    }


    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }


    public function rules(): array
    {
        return [
            'name'=>'required',
            'gender'=>[
                'required',
                Rule::in(['male','female']),
            ],
            'owner_id'=>[
                'required',
            ],
            'dob'=>[
                'required',
                'date_format:d-m-Y'
            ],
        ];
    }

   
}