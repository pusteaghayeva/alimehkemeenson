<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanFaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Tez-tez verilən suallar 1',
                'content' => '<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;">Where does it come from?</h2>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
                'created_at' => '2022-05-05 12:33:00',
                'updated_at' => '2022-05-10 11:27:26',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Tez-tez verilən suallar 2',
                'content' => '<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;">Where does it come from?</h2>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
                'created_at' => '2022-05-05 12:34:00',
                'updated_at' => '2022-05-10 11:26:18',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Tez-tez verilən suallar 3',
                'content' => '<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;"><span style="color: #000000; font-family: DauphinPlain;"><span style="font-size: 24px; font-weight: 400;">Mən haradan ala bilərəm?</span></span></h2>
<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;"><span style="color: #000000; font-family: DauphinPlain;"><span style="font-size: 24px; font-weight: 400;">Lorem Ipsum-un ke&ccedil;idlərinin bir &ccedil;ox variantı m&ouml;vcuddur, lakin onların əksəriyyəti inyeksiya edilmiş yumor və ya bir qədər inandırıcı g&ouml;r&uuml;nməyən təsad&uuml;fi s&ouml;zlər vasitəsilə m&uuml;əyyən formada dəyişikliyə məruz qalmışdır. Lorem Ipsum-un ke&ccedil;idindən istifadə edəcəksinizsə, mətnin ortasında utanc verici bir şeyin gizləndiyinə əmin olmalısınız. İnternetdəki b&uuml;t&uuml;n Lorem Ipsum generatorları lazım olduqda əvvəlcədən təyin edilmiş par&ccedil;aları təkrarlamağa meyllidir və bu, İnternetdəki ilk həqiqi generatordur. O, ağlabatan g&ouml;r&uuml;nən Lorem Ipsum yaratmaq &uuml;&ccedil;&uuml;n 200-dən &ccedil;ox latın s&ouml;z&uuml;ndən ibarət l&uuml;ğətdən istifadə edir və bir ne&ccedil;ə model c&uuml;mlə strukturları ilə birləşir. Yaradılmış Lorem Ipsum buna g&ouml;rə də həmişə təkrardan, yeridilmiş yumordan və ya xarakterik olmayan s&ouml;zlərdən və s. azaddır.</span></span></h2>',
                'created_at' => '2022-05-05 12:34:00',
                'updated_at' => '2022-05-10 11:23:37',
            ),
        ));
        
        
    }
}