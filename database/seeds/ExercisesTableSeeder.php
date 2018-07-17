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
        $exercise= new \App\Exercise([
            'id'=>'1',
            'exe_name'=>'ふくらはぎのストレッチ',   
            'pic_name'=>'ab.jpg',
            'explanation'=>'デスクワークでは夕方気になるのが足のむくみ。
                        ふくらはぎのストレッチを行い、事前に防ぎましょう。
                        真っ直ぐ立った状態から片足を後ろに引き、前の足に体重をかけます。
                        準備体操でお馴染みのストレッチですが、
                         アキレス腱を伸ばすだけではなく全身の血行を良くする効果があります。',
            'cal'=>' ',
            'place'=>'cafeteria' ]);
            $exercise->save();
            
        $exercise= new \App\Exercise([
            'id'=>'2',
            'exe_name'=>'ふくらはぎの引き締め',
            'pic_name'=>'calf.jpg',
            'explanation'=>'こちらも食事中にできるエクササイズ!
                        つま先をゆっくり上げて5秒キープ、
                        かかとを上げて5秒キープを繰り返しましょう。',
            'cal'=>' ',
            'place'=>'cafeteria' ]);
            $exercise->save();

        $exercise= new \App\Exercise([
            'id'=>'3',
            'exe_name'=>'ヒップアップ',   
            'pic_name'=>'hips.jpg',
            'explanation'=>'食事中の短い時間でも気軽にヒップアップ！
                       お尻の穴を締めるように意識して、全体に力を入れて30秒キープしましょう。
                       カロリーを摂取している間にも運動を欠かさないことが、ダイエットへのコツです。',
            'cal'=>' ',
            'place'=>'cafeteria' ]);
            $exercise->save();
        
        $exercise= new \App\Exercise([
            'id'=>'4',
            'pic_name'=>'',
            'exe_name'=>'足首ストラップ',   
            'explanation'=>'足首をぐるぐると回すことで、むくみ軽減、冷え症改善に繋がります。
                          むくみが溜まり、足首周りが硬くなるだけで下半身太りに繋がるので、
                          まずはお昼休憩中に軽く動かしましょう。',
            'cal'=>' ',
            'place'=>'cafeteria' ]);
            $exercise->save();
            
         $exercise= new \App\Exercise([
            'id'=>'5',
            'pic_name'=>'',
            'exe_name'=>'いただきますでバストアップ',   
            'explanation'=>'その名の通り、いただきますをしながらバストアップを目指しましょう。
                       やり方は簡単、いただきますのポーズをしながら
                       肘を手首の高さまで上げ、15秒押し合うだけ！
                       位置を変えて秒数を増やすと、更なる効果が期待できます。',
            'cal'=>' ',
            'place'=>'cafeteria' ]);
            $exercise->save();
            
         $exercise= new \App\Exercise([
            'id'=>'6',
            'pic_name'=>'',
            'exe_name'=>'小顔になるExercise',   
            'explanation'=>'歯茎をなぞるようにして、舌をぐるぐる回しましょう。
                           左右20回ずつから始めると、習慣づけることができます。
                           【効果】
                           回数を重ねるごとに、リフトラインがシェイプアップされていきます。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
            
         $exercise= new \App\Exercise([
            'id'=>'7',
            'pic_name'=>'',
            'exe_name'=>'ふくらはぎの引き締め',   
            'explanation'=>'つま先をゆっくり上げて5秒キープ、
                           かかとを上げて5秒キープを繰り返しましょう!
                            むくみ防止効果があります。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
            
         $exercise= new \App\Exercise([
            'id'=>'8',
            'pic_name'=>'',
            'exe_name'=>'太ももの引き締め',   
            'explanation'=>'浅めに腰かけ、膝にクッションや雑誌を挟んでみましょう！
                           これだけで内ももの引き締めに効果があります。
                           慣れてきたらそのまま上下運動を取り入れるなどして、工夫してみましょう。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
            
         $exercise= new \App\Exercise([
            'id'=>'9',
            'pic_name'=>'',
            'exe_name'=>'ヒップアップ',   
            'explanation'=>'お尻の穴を締めるように意識して、全体に力を入れて30秒キープしましょう！',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
            
            
         $exercise= new \App\Exercise([
            'id'=>'10',
            'pic_name'=>'',
            'exe_name'=>'ウエストの引き締め',   
            'explanation'=>'まずはゆっくり呼吸をしてみましょう。
                     　　　息を吐き切った時には、グッとお腹に力を入れるよう注意します。
                     　　　息を吸う時は、ゆっくり吸いましょう。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
        
        $exercise= new \App\Exercise([
            'id'=>'11',
            'pic_name'=>'',
            'exe_name'=>'二の腕の引き締め',   
            'explanation'=>'始めに、両手を胸の前でしっかり組みましょう。
                      　　　 次に、力を入れて両側に腕を引っ張ります。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
        
         $exercise= new \App\Exercise([
            'id'=>'12',
            'pic_name'=>'',
            'exe_name'=>'空気椅子',   
            'explanation'=>'下半身全体に引き締め効果のある簡単エクササイズです! 
                          膝が90度になるくらいまで腰を落としましょう。
                          眠気覚ましにもなるので、デスクでやるのに適した動きです。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
            
         $exercise= new \App\Exercise([
            'id'=>'13',
            'pic_name'=>'',
            'exe_name'=>'肩のストレッチ',   
            'explanation'=>'PCの見過ぎで肩こりに悩まされている人向けのストレッチです。
                        まずは指先をそれぞれ肩に乗せます。
                        その後、両肘がくっつく所まで前に出し、そのまま肩甲骨の動きを意識しながら、円を描くように大きく回しましょう。
                        肩こりの解消には、肩甲骨周りの筋肉を柔らかくすることがとても重要です。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
            
            
         $exercise= new \App\Exercise([
            'id'=>'14',
            'pic_name'=>'',
            'exe_name'=>'頭のマッサージ',   
            'explanation'=>'目が疲れた時は、頭のマッサージをしてみましょう。頭皮が固くなっていたら、疲労が蓄積している証拠です。
                        頭皮全体を柔らかくする様にマッサージしましょう。　
                        コツは優しくシャンプーするように指の腹で刺激することです。
                        首の後ろやこめかみも軽く押すことで更なる効果が期待できます。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
        
         $exercise= new \App\Exercise([
            'id'=>'15',
            'pic_name'=>'',
            'exe_name'=>'PC斜め打ち',   
            'explanation'=>'PCに対して正面に座るのではなく、全身を椅子ごと斜めに向けましょう。
                        その後、姿勢を正し、腹筋に力を入れるよう意識してひねりながら作業をすると、腹斜筋が鍛えられ血行も促進されます。',
            'cal'=>' ',
            'place'=>'office' ]);
            $exercise->save();
        
         $exercise= new \App\Exercise([
            'id'=>'16',
            'pic_name'=>'',
            'exe_name'=>'階段を上る(朝:2階から4階へ、昼休憩:4階から9階へ)',   
            'explanation'=>'階段を上る時は、前かがみにならないよう背筋をまっすぐに伸ばし、
                      目線は下げずに前を見ます。
                      膝を高く上げ、足の付け根ではなく骨盤を意識して
                      太ももを引き上げるイメージで上りましょう。',
            'cal'=>' ',
            'place'=>'way' ]);
            $exercise->save();
            
        $exercise= new \App\Exercise([
            'id'=>'17',
            'pic_name'=>'',
            'exe_name'=>'階段を下る(朝/昼休憩:9階から4階へ、帰り/4階から2階へ)',   
            'explanation'=>'下る時も背筋をまっすぐにすることを意識しながら、つま先から降ろします。
                       階段を踏み外さないよう目線はしっかり足元を見つつ、姿勢に気を付けましょう。',
            'cal'=>' ',
            'place'=>'way' ]);
            $exercise->save();
            
        $exercise= new \App\Exercise([
            'id'=>'18',
            'pic_name'=>'',
            'exe_name'=>'PCの持ち方',   
            'explanation'=>'「誰かにPCの画面を見せたい」
                       そんな時は腕への引き締め効果を意識しながら持ちましょう！
                      腕の筋肉を意識して、PCを身体からこぶし1つ分離し床と平行に持つと、
                      二の腕のシェイプアップに効果あり！',
            'cal'=>' ',
            'place'=>'way' ]);
            $exercise->save();
            
        $exercise= new \App\Exercise([
            'id'=>'19',
            'pic_name'=>'',
            'exe_name'=>'電車でのつま先立ち',   
            'explanation'=>'つり革や手すりにつかまり、最寄り駅から二子玉川駅まで
                       つま先立ちでヒラメ筋と体幹とおしりを鍛えましょう。
                       暇な電車内でも時間を有効活用！',
            'cal'=>' ',
            'place'=>'way' ]);
            $exercise->save();
        
        $exercise= new \App\Exercise([
            'id'=>'20',
            'pic_name'=>'',
            'exe_name'=>'おなか引き締め',   
            'explanation'=>'"ずっと鍛えるのはちょっとしんどい"、という人におすすめなのが、
                      「１駅区間エクササイズ」。
                      区間を決めてしまうことで、時間を区切って集中して引き締めることができます。
                      簡単にできるのは、お腹の引き締め。
                     思い切り凹ませるのとは違い、お腹を硬くするイメージで
                     力を入れると効果的です。',
            'cal'=>' ',
            'place'=>'way' ]);
            $exercise->save();
            
         $exercise= new \App\Exercise([
            'id'=>'21',
            'pic_name'=>'',
            'exe_name'=>'内ももシェイプアップ',   
            'explanation'=>'座った状態で足先をクロスし、膝と膝で押し合います。
                      エクササイズをしているように見えないので、公共の場でも安心です。
                      内ももがしっかり硬くなっていればOK。左右交互に行いましょう。
                      内ももが鍛えられ、内ももを普段からうまく使って歩けるようになると、O 脚や骨盤の歪みの改善、太もも全体のシェイプアップができますよ。',
            'cal'=>' ',
            'place'=>'way' ]);
            $exercise->save();    
        
        
        
        
        
        
        
        
        
        
    }
}
