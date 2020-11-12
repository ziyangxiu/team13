<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class team_13_member_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateRandomFirName()
    {
        $firnames= ["陳","林","黃","張","李","王","吳","劉","蔡","楊","
許","鄭","謝","郭","洪","曾","邱","廖","賴","周","
徐","蘇","葉","莊","呂","江","何","蕭","羅","高","
簡","朱","鍾","施","游","詹","沈","彭","胡","余","
盧","潘","顏","梁","趙","柯","翁","魏","方","孫","
張簡","戴","范","歐陽","宋","鄧","杜","侯","曹","薛","
傅","丁","溫","紀","范姜","蔣","歐","藍","連","唐","
馬","董","石","卓","程","姚","康","馮","古","姜","
湯","汪","白","田","涂","鄒","巫","尤","鐘","龔","
嚴","韓","黎","阮","袁","童","陸","金","錢","邵"];

        return $firnames[rand(0, count($firnames)-1)];
    }

    public function generateRandomMidName()
    {
        $midnames =[
            "智陽","茂英","禾均","長啟","寧源","芃豪","亭正","誠強","容亨",
            "星新","豐瑋","俐易","婷夢","惟慈","信舜","宛仲","左筠","采誠",
            "美恭","兆竹","美夢","睿誠","瑤海","恬純","松淑","泓然","梅姍",
            "重城","延孝","劭音","茹齊","湖倩","茂純","書玲","添凡","念嘉",
            "琦聖","堅禾","德光","仁雅","姍瑩","仰萍","安毓","綺峰","慧冰",
            "亮君","映城","恆能","康臻","湖雪","家吟","佩樂","梅淳","初啟",
            "泓佳","百潔","音哲","琦民","鴻友","堅軍","湖杰","子妤","皇伶",
            "妙青","揚傑","左廷","姍如","冠蓁","瑋然","薇恩","映宇","萱郁",
            "尹南","永蓁","鑫美","誠芝","昕紹","展心","希娟","庭甫","俞南",
            "亦玫","力良","順恭","春伸","原強","登白","珊行","琳旺","啟成",
            "思然","亞友","右皓","秉臻","長行","依茂","旭月","建能","希瑜",
            "佳均","月仲","鳳富","芝珊","春剛","昕甫","品姍","喬廷","紹合",
            "如旺","法琦","天海","仰劭","愛修","汝昌","月雄","平桂","昇其",
            "青珠","樂玫","豐蘋","亭佳","峻虹","揚伶","皓心","宸玫","妍治",
            "聖正","方花","毓易","奕伯","軒禾","珍城","昇行","予惟","芃吟",
            "漢汝","香源","侑海","協侑","琦秋","夫雪","家中","芸佳","春恬",
            "義信","桂愛","玉東","名天","湖菁","泓儀","筠廷","良青","函旭",
            "哲彥","石秋","宗吟","金星","汝甫","哲軒","奇帆","潔蘋","音菱",
            "韋柏","鈺妤","德彬","聿慧","佑郁","英貴","書樂","又宜","利樂",
            "儒彥","之以","少斌","博芬","佐一","隆珊","長花","然聖","勳正",
            "瑜侑","任瑞","亦謙","聖貞","卉惠","采其","士紹","泰達","和恭",
            "妍蓉","思孝","松真","伸英","隆能","少姍","夫倩","哲屏","民妮",
            "倩恩","毓行","琬侑","恆佳","茂花","豐亨","俞和","千桂","心航",
            "玲富","可琦","承任","重貞","光慈","初州","丞琦","家春","巧辛",
            "漢宣","珮安","伶谷","彬如","柔士","妮甫","希全","富靖","之紫",
            "中元","玄宏","誠江","孟蓉","凌倩","成德","峻迪","蘭意","百輝",
            "聿夫","利儀","彥梅","軒旭","琦芸","定怡","鳳玉","人瑩","淳柏",
            "承昆","任弘","一秋","秀潔","琇年","瑤綺","君杰","恭州","天忠",
            "寧俊","人麟","玲琪","亦群","彥誠","金希","郁佳","綺茜","貞堯",
            "予盈","原喬","立郁","亦明","宣星","書江","予友","松廷","皇光",
            "夫夢","勳俊","茹仲","儒妤","紋源","旺辰","財花","珊芷","苓枝",
            "禮麟","禾亨","哲桓","宸裕","卉惟","君新","名漢","柔輝","哲義",
            "乃州","信意","峻彥","柏芬","元誠","蕙如","哲成","凱萱","迪星",
            "恭民","寧儀","香正","姍原","維雯","恆吟","伊弘","依麟","長淑",
            "山音","真筠","平雲","可琬","邦亞","邦怡","妮季","貞軒","柏真",
            "枝江","緯亞","祥儀","富峰","鈺汝","淑婷","琦榮","恒蘋","岑幸",
            "昇春","兆達","原靖","然一","尹育","映廷","筠仁","昱仲","子琳",
            "鴻恬","吉城","玉裕","俐群","白如","庭行","儒汝","軍堯","麗莎",
            "夢銘","旻宣","姿斌","政然","琬富","宥南","芸幸","俊其","姵靖",
            "思瑤","義霖","芃雅","一妮","佑行","秀龍","樂娟","潔淳","百誠",
            "軒岑","倫年","瑜季","恆青","孟臻","倫珍","法怡","樂剛","汝慧",
            "喜宏","彥啟","亞忠","琪城","啟珊","大志","偉虹","州任","雅源",
            "尚辰","城剛","軍元","姿玲","貞芬","添旺","倩友","青雲","彬州",
            "希瑋","以茂","忠念","倩謙","羽禾","哲汝","于皓","可善","民治",
            "禮男","威枝","德軒","于杰","聖平","竹玫","聖宇","元祥","妤諭",
            "隆倩","昭信","克侑","美然","虹哲","介容","巧來","屏映","蘭德",
            "雯年","音汝","瑋劭","辛發","良妮","倫一","紹睿","韻瑞","均孜",
            "其筠","嘉隆","銘倩","嘉恬","妍禎","品祥","綠源","兆俊","嘉妹",
            "皇雪","孟舜","行文","幸旭","旭聖","台行","孟欣","靖松","琪原",
            "婷謙","松能","恩堯","茵東","城帆","亮易","百來","威名","旭苓",
            "睿泉","凌雲","夙銘","泓君","杰年","郁泉","佐梅","必然","迪弘",
            "依良","宸聖","火福","真奇","杰芬","美汝","永奇","添月","劭芸",
            "芳谷","胤妮","凱彥","汝旺","城蘋","樂志","姍靖","群珍","群禎",
            "木財","致緯","侑玫","水以","姿雅","蓉仁","冰洋","友勇","韋花",
            "潔羽","立妤","夙淑","玄隆","容虹","尚利","松桂","妙琴","琬英",
            "正昌","迪惟","玟容","智星","山珊"
        ];
        return $midnames[rand(0, count($midnames)-1)];
    }

    public function birth() {

        $first = rand(1986,2000);
        $last1 = rand(1,12);
        $last2 = rand(1,30);
        $rel =$first."/".$last1."/".$last2 ;
        return $rel;
    }

    public function generateRandomName() {

        $first_name = $this->generateRandomFirName();
        $last_name = $this->generateRandomMidName();

        $name = $first_name.$last_name;
        return $name;
    }

    public function account() {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = $characters[rand(0, $charactersLength - 1)];
        $characters1=rand(1000,5000);
        $account=$randomString.$characters1;
        return $account;
    }
    public function generateRandomString()
    {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 15 ; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        return $randomString;
    }

    public function bal()
    {
        $balance = ["100","150","300","500","1000","2000"];
        return $balance[rand(0,5)] ;
    }

    public function run()
    {
        for ($i=0; $i<13; $i++) {
            $a_name = $this->generateRandomName();
            $account = $this->account();
            $password =$this->generateRandomString();
            $balance=$this->bal();
            $birth=$this->birth();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('member')->insert([
                'a_name' => $a_name,
                'birth' => $birth,
                'account' => $account,
                'password' => $password,
                'balance' => $balance,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}