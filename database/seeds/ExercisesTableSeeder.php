<?php

use Illuminate\Database\Seeder;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exercise= new \App\Exercises([
            'id'=>'1',
            'exe_name'=>'ふくらはぎのストレッチ',   
            'explanation'=>'デスクワークでは夕方気になるのが足のむくみ。
                        ふくらはぎのストレッチを行い、事前に防ぎましょう。
                        真っ直ぐ立った状態から片足を後ろに引き、前の足に体重をかけます。
                        準備体操でお馴染みのストレッチですが、
                         アキレス腱を伸ばすだけではなく全身の血行を良くする効果があります。',
            'cal'=>' ',
            'place'=>'cafeteria' ]);
            $exercise->save();
            
        $exercise= new \App\Exercises([
            'id'=>'2',
            'exe_name'=>'ふくらはぎの引き締め',   
            'explanation'=>'こちらも食事中にできるエクササイズ!
                        つま先をゆっくり上げて5秒キープ、
                        かかとを上げて5秒キープを繰り返しましょう。',
            'cal'=>' ',
            'place'=>'cafeteria' ]);
            $exercise->save();
            
        $exercise= new \App\Exercises([
            'id'=>'3',
            'exe_name'=>'ヒップアップ',   
            'explanation'=>'食事中の短い時間でも気軽にヒップアップ！
                       お尻の穴を締めるように意識して、全体に力を入れて30秒キープしましょう。
                       カロリーを摂取している間にも運動を欠かさないことが、ダイエットへのコツです。',
            'cal'=>' ',
            'place'=>'cafeteria' ]);
            $exercise->save();
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
}
