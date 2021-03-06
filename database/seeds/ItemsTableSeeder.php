<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            'item_name' => 'SEED BLEND(深煎り)',
            'item_image' => 'item.jpg',
            'price' => 2000,
            'item_status' => 1,
            'num' => 100,
            'item_body' => 'ブレンドよりコクと深みが強いのが特徴のSEEDブレンド。'."\n".

                'ミルクと合わせることにより甘さが際立ち、チョコレートのような風味へ変化します。'."\n".
                'ダークチョコレートやナッツの風味を感じるグアテマラ ワイカン、ブラジル 
                シティオ・ダ・トーレの焙煎度合いを深煎りに調整しブレンドしました。'."\n".
                "\n".
                '飲み頃は到着後1週間から1ヶ月が目安になります。'."\n".
                "\n".
                '重さ：各220g（袋含）'."\n".
                '賞味期限：焙煎日から2ヶ月ほど'."\n".
                "\n".
                '※写真はイメージです。',
            ],
            [
            'item_name' => 'SEED BLEND(浅煎り)',
            'item_image' => 'item.jpg',
            'price' => 2000,
            'item_status' => 1,
            'num' => 30,
            'item_body' => 'コーヒーが苦手な人でも楽しんでいただきたい。そんなテーマをもとにSEEDブレンドを作りました。'."\n".

                '前回のSEED BLENDは、夏らしい爽やかな柑橘や紅茶を思わせるコーヒーでしたが
                今回のSEED BLENDは、秋冬Ver. ということで濃厚な味わいに仕上げました。'."\n".
                "\n".
                'グアテマラ・エルインヘルト・ナチュラルをベースにバランスの良いコロンビアをブレンドしました。'."\n".
                'グアテマラから感じられるラムレーズンやブドウの芳醇で濃厚な甘みや、
                ミルクと合わせるとアポロチョコのようなフルーティで甘い味わいをお楽しみいただけます。'."\n".
                "\n".
                '飲み頃は到着後から3週間が目安になります。'."\n".
                "\n".
                '重さ：各220g（袋含）'."\n".
                '賞味期限：焙煎日から2ヶ月ほど'."\n".
                "\n".
                '※写真はイメージです。',
            ],
            [
            'item_name' => 'マグボトル',
            'item_image' => 'item2.jpg',
            'price' => 2000,
            'item_status' => 1,
            'num' => 50,
            'item_body' => 'マットな白地にワンポイントのロゴを配置したシンプルなデザインのSEED COFFEEオリジナルマグボトルです。'."\n".
                '真空二重構造の保冷温ボトルで、持ち運びに便利な200mlサイズです。'."\n".
                '店舗にRマグボトルをお持ちいただければ、ドリンクを入れることも可能です。'."\n".
                "\n".
                '容量:200ml'."\n".
                'サイズ:φ55×150'."\n".
                '重さ：200g'."\n".
                '材質:ステンレス銅・PP・シリコンゴム',
            ],
            [
            'item_name' => 'マグボトル（青）',
            'item_image' => 'item2.jpg',
            'price' => 2000,
            'item_status' => 1,
            'num' => 40,
            'item_body' => 'SEED COFFEEのブランドカラーにワンポイントのロゴを配置したシンプルなデザインのオリジナルマグボトルです。'."\n".
                "\n".
                '真空二重構造の保冷温ボトルで、持ち運びに便利な200mlサイズです。'."\n".
                '店舗にRマグボトルをお持ちいただければ、ドリンクを入れることも可能です'."\n".
                "\n".
                '容量:200ml'."\n".
                'サイズ:φ55×150'."\n".
                '重さ：200g'."\n".    
                '材質:ステンレス銅・PP・シリコンゴム',
            ],
            [
            'item_name' => 'パウンドケーキ 6個セット',
            'item_image' => 'cake.jpg',
            'price' => 1800,
            'item_status' => 1,
            'num' => 50,
            'item_body' => '素材を一つ一つ厳選し、丁寧にしっとりと焼き上げたスタイリッシュなプチパウンドケーキです。'."\n".
                "\n".
                '商品と原材料：'."\n".
                '<マロン>'."\n".
                '国産栗を使用。しっとりとしたパウンドケーキには、白あんと栗のペーストを使い、口溶けの良い優しい味わいに。
                コーティングには、SEED COFFEEが監修したオリジナルチョコレートを使用し、ここでしか食べられないパウンドケーキに仕上げました。'."\n".
                
                '・原材料名'."\n".
                '卵（国内製造）、栗、バター、小麦粉、糖類（砂糖、グルコースシロップ、ぶどう糖、果糖、ショ糖）、白あん、生クリーム、アーモンドプードル、
                ヘーゼルナッツ、植物油脂、乳加工品（濃縮乳、加糖脱脂練乳、）、洋酒、全粉乳、ココアバター、乳糖、タンパク質濃縮ホエイパウダー／ベーキングパウダー、
                香料、トレハロース、乳化剤、着色料（カラメル）、（一部に小麦、卵、乳成分、大豆を含む）'."\n".
                "\n".
                '<ピスタチオ>'."\n".
                'イタリア産ピスタチオを使用。香り高く上品なピスタチオを生地にも練り込みしっとりと焼き上げました。アクセントにはアプリコットを忍ばせ、
                酸味と甘味がちょうどいいパウンドケーキです。'."\n".
                "\n".
                '・原材料名'."\n".
                '砂糖（国内製造）、バター、ピスタチオ、卵、小麦粉、アプリコット、洋酒、加工油脂、脱脂粉乳／ベーキングパウダー、レシチン（大豆由来）、
                （一部に小麦、卵、乳成分、大豆を含む）'."\n".
                "\n".
                '<チョコ>'."\n".
                '世界各国から厳選したドライフルーツをブランデーに漬け込み、口溶けの良いチョコレートと合わせしっとりと焼き上げたカカオ香るプチパウンドケーキです。'."\n".
                "\n".
                '・原材料名'."\n".
                'バター(国産)、小麦粉、砂糖、卵、加工油脂、生クリーム、ココアパウダー、オレンジ、レーズン、チェリー砂糖漬け、苺、水飴、洋酒、パイン、レモンピール、
                シナモン、脱脂粉乳、乳糖/トレハロース、ベーキングパウダー、レシチン、香料、(一部に小麦、卵、乳成分、オレンジ、大豆を含む)'."\n".
                "\n".
                '内容量：'."\n".
                'マロン2個'."\n".
                'ピスタチオ2個'."\n".
                'チョコレート2個'."\n".
                "\n".
                '重さ：330g'."\n".
                "\n".
                'お日持ち：製造日より3週間ほど'."\n".
                "\n".
                '保存方法：'."\n".
                '直射日光を避けて25度以下で保存。'."\n".
                '開封後は賞味期限に関係なく当日中にお召し上がりください。'."\n".
                "\n".
                '※写真はイメージです。',
            ],
            [
            'item_name' => 'コールドブリューバッグ',
            'item_image' => 'item.jpg',
            'price' => 2000,
            'item_status' => 1,
            'num' => 60,
            'item_body' => '時間をかけてゆっくりと抽出することで、まろやかな口当たりに。'."\n".
                'SEED COFFEEのCOLD BREWをご自宅で入れてみませんか。'."\n".
                "\n".
                '作り方は、1パックにつき500mlのお水を浸けて冷蔵庫で10時間〜12時間待つだけで完成です。'."\n".
                
                'コーヒー豆の持ち味を最大限に引き出す軟水でさらに美味しい1杯をお楽しみください。'."\n".
                "\n".
                '重さ：各180g（袋含）'."\n".
                '賞味期限：焙煎日から2ヶ月ほど'."\n".
                "\n".
                '※写真はイメージです。',
            ],
        ]);
    }
}
