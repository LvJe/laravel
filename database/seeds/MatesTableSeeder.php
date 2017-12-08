<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        while ($mate_one = DB::table('tickets')->where([
            ['sex',1],
            ['mate_id',null]
        ])->first()){
            $mate_other = DB::table('tickets')->where([
                ['sex',2],
                ['mate_id',null]
            ])->first();
            if (!$mate_other) break;

            //开始创建情侣
            DB::table('mates')->insert([
                'mate_one_id' => $mate_one->id,
                'mate_other_id' => $mate_other->id,
            ]);
            DB::table('tickets')->where('id',$mate_one->id)->update(['mate_id'=>$mate_other->id]);
            DB::table('tickets')->where('id',$mate_other->id)->update(['mate_id'=>$mate_one->id]);
        }
    }
}
