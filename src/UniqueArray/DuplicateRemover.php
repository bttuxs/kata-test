<?php

namespace Kata\UniqueArray;

class DuplicateRemover
{
    public function __invoke(array $input): array
    {
        /**
         * @todo
         */
         $lengthBase = count($input);
         $dataClean = [];


         for($idxBase=0; $idxBase < $lengthBase; $idxBase++){
           $addItem = true;
           for($idxClean=0; $idxClean < count($dataClean); $idxClean++){
             if($input[$idxBase] == $dataClean[$idxClean]){
               $addItem = false;
               break;
             }
           }
           if($addItem){
             $dataClean[] = $input[$idxBase];
           }
         }
         return $dataClean;
    }
}
