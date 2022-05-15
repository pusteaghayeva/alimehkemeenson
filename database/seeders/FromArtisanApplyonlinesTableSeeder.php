<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanApplyonlinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('applyonlines')->delete();
        
        \DB::table('applyonlines')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Naxçıvan MR Ali Məhkəməsinə məktub yazmaq qaydaları',
                'slug' => 'naxcivan-mr-ali-m-hk-m-sin-m-ktub-yazmaq-qaydalari',
                'content' => '<p class="letter-title text-center" style="box-sizing: border-box; margin: 34px 0px; padding: 0px; text-align: center; font-size: 24px; font-weight: bold; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 16px; text-align: justify;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN &Uuml;NVANINA ELEKTRON FORMADA M&Uuml;RACİƏT G&Ouml;NDƏRMƏZDƏN ƏVVƏL, XAHİŞ EDİRİK QAYDALARLA TANIŞ OLUN:</span></p>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14pt;">1.Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin rəsmi internet səhifəsi vasitəsi ilə elektron formada g&ouml;ndərilmiş m&uuml;raciətlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin &Uuml;mumi ş&ouml;bəsinə daxil olur və &rdquo;Vətəndaşların m&uuml;raciətləri haqqında&rdquo; Azərbaycan Respublikasının 2015-ci il 30 sentyabr tarixli, 1308-IVQ n&ouml;mrəli Qanununa, habelə Azərbaycan Respublikası Prezidentinin 2016-cı il 23 iyun tarixli, 950 n&ouml;mrəli Fərmanı ilə təsdiq edilmiş &ldquo;D&ouml;vlət və bələdiyyə orqanlarında, d&ouml;vlət və ya bələdiyyə m&uuml;lkiyyətində olan və ya paylarının (səhmlərinin) nəzarət zərfi d&ouml;vlətə və ya bələdiyyəyə məxsus olan h&uuml;quqi şəxslərdə və b&uuml;dcə təşkilatlarında vətəndaşların m&uuml;raciətləri ilə bağlı karg&uuml;zarlığın aparılması Qaydası&rdquo;na uyğun olaraq qeydiyyata alınır və baxılır.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14pt;">2.Mətni yazmazdan əvvəl nəzərdə tutulmuş formanın d&uuml;zg&uuml;n cavablandırılması vacibdir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14pt;">3.Mətn m&uuml;tləq yazıldığı dilin əlifbası ilə tərtib olunmalıdır, b&uuml;t&ouml;vl&uuml;kdə b&ouml;y&uuml;k və ya ki&ccedil;ik hərflərlə yazılmamalı, c&uuml;mlələrə b&ouml;l&uuml;nməli, durğu işarələrindən istifadə qaydalarına riayət edilməlidir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14pt;">4.M&uuml;raciət aydın və səlis c&uuml;mlələrlə yazılmalıdır.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14pt;">5.M&uuml;raciət edərkən etika qaydaları g&ouml;zlənilməlidir. Nəzakətsiz ifadələr işlədildikdə və ya m&uuml;əllif &ouml;z&uuml; barədə məlumatları dəqiq g&ouml;stərmədikdə m&uuml;raciətə cavab verilmir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14pt;">6.H&ouml;rmətli internet səhifəsi istifadə&ccedil;iləri! B&ouml;y&uuml;k informasiya axınının işlənməsi x&uuml;susiyyətlərini nəzərə alaraq, xahiş edirik bəzi məhdudiyyətlərə h&ouml;rmətlə yanaşasınız:</span>
<ul style="box-sizing: border-box; padding: 0px; margin: 0px;">
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 14pt;">Bir mənbədən elektron məlumatın g&ouml;ndərilməsinin vaxtı serverin y&uuml;klənməsindən asılı olaraq 1-5 dəqiqə ilə məhdudlaşır.</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 14pt;">Elektron m&uuml;raciətin mətni 1500 işarədən &ccedil;ox olmamalıdır.</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 14pt;">Elektron m&uuml;raciətdə qoşma fayllar olmamalıdır. Mətni uzun olan məktublar, sənəd surətləri, fotoşəkillər və yol verilən digər əlavələr Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin E-mail: &uuml;nvanına və ya adi po&ccedil;tla bu &uuml;nvana g&ouml;ndərilməlidir:</span></li>
</ul>
</div>
<p class="location" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 16px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">Nax&ccedil;ıvan şəhəri, AZ 7000, Atat&uuml;rk k&uuml;&ccedil;əsi 19, Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi.</span></p>',
                'button' => 'Müraciət etmək',
                'created_at' => '2022-05-11 07:51:00',
                'updated_at' => '2022-05-11 08:12:41',
            ),
        ));
        
        
    }
}