<?php

use Illuminate\Database\Seeder;

class positonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('positons')->insert([ 'name' => 'CF']);
       DB::table('positons')->insert([ 'name' => 'ST']);
       DB::table('positons')->insert([ 'name' => 'RWG']);
       DB::table('positons')->insert([ 'name' => 'LWG']);
       DB::table('positons')->insert([ 'name' => 'RMF']);
       DB::table('positons')->insert([ 'name' => 'LMF']);
       DB::table('positons')->insert([ 'name' => 'OMF']);
       DB::table('positons')->insert([ 'name' => 'DMF']);
       DB::table('positons')->insert([ 'name' => 'CMF']);
       DB::table('positons')->insert([ 'name' => 'RSB']);
       DB::table('positons')->insert([ 'name' => 'LSB']);
       DB::table('positons')->insert([ 'name' => 'CB']);
       DB::table('positons')->insert([ 'name' => 'GK']);
    }
}
