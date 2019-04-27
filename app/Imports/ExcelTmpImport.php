<?php

namespace App\Imports;

use App\Exports\ExcelTmpExport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Facades\Excel;
use function Matrix\trace;

class ExcelTmpImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $cabecera ='';
        $i=0;
        $tmp =false;
        $data=array();
        foreach ($rows as $row)
        {


            if($cabecera ==''){
                $cabecera= $row;
            }else{


                if($i<=2913) {

                    (new Collection([$cabecera->toArray(), $row->toArray()]))->storeExcel(
                        $i . '/PLANTILLA GENERAL EXCLUSIONES MAYO DE 2018 ANALISIS.xlsx',
                        $disk = 'public',
                        $writerType = null,
                        $headings = false
                    );
                    $i++;
                }else{

                    if($tmp){

                        (new Collection([$cabecera->toArray(), $data,$row->toArray()]))->storeExcel(
                            $i . '/PLANTILLA GENERAL EXCLUSIONES MAYO DE 2018 ANALISIS.xlsx',
                            $disk = 'public',
                            $writerType = null,
                            $headings = false
                        );
                        $tmp = false;
                        $i++;
                    }else{
                        $data = $row->toArray() ;
                        $tmp = true;
                    }
                }
            }

        }
    }
}
