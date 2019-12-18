<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $lista_csv = [
            'grados',
            'materias',
            'parciales'
         ];
 
         //DB::beginTransaction();
 
         //DB::statement('SET FOREIGN_KEY_CHECKS=0');
         
         foreach($lista_csv as $csv){
             $archivo_csv = storage_path().'/app/seeds/'.$csv.'.csv';
 
             $query = sprintf("
                 LOAD DATA local INFILE '%s' 
                 INTO TABLE $csv 
                 FIELDS TERMINATED BY ',' 
                 OPTIONALLY ENCLOSED BY '\"' 
                 ESCAPED BY '\"' 
                 LINES TERMINATED BY '\\n' 
                 IGNORE 1 LINES", addslashes($archivo_csv));
             echo $query;
             DB::connection()->getpdo()->exec($query);
         }
    }
}
