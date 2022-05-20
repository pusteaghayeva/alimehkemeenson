<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'About the Court ',
                'created_at' => '2022-05-10 05:27:38',
                'updated_at' => '2022-05-19 08:33:17',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'О Суде',
                'created_at' => '2022-05-10 05:27:38',
                'updated_at' => '2022-05-19 08:33:17',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p class="MsoNormal" style="margin-bottom: 7.5pt; text-align: justify; line-height: normal; background: white;"><strong><span style="font-size: 14pt;"><em><span style="font-family: Arial, sans-serif; color: black;">Supreme Court of the Nakhchivan Autonomous Republic hears, as a court of appeal, appeals and appeal protests made under court acts on the cases heard by the courts of first instance assigned to its territorial jurisdiction. Supreme Court of the Nakhchivan Autonomous Republic is comprised of a civil board, administrative-economical board, criminal board and military board.</span></em></span></strong></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; text-align: left; line-height: normal; background: white;"><span style="font-size: 12pt;"><strong><em><span style="font-family: Arial, sans-serif; color: black;">HİSTORY</span></em></strong></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; line-height: 15.808px;"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif; font-size: 12pt;"><img style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; line-height: 1.3em; float: right; margin: 10px;" src="http://127.0.0.1:8000/storage/pages/May2022/mel1.gif" alt="" width="302" height="227" border="0" /></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;"><span style="font-family: \'Times New Roman\', serif; font-size: 14pt; text-indent: 37.7953px;">A Head Court was established in Nakhchivan Autonomous SSR with the decision of the Presidium of the Central Executive Committee of Azerbaijan SSR on 3 October 1925. The court which was called differently at different periods was called the Supreme Court of Nakhchivan Autonomous SSR since 1937 and subsequently did not go through any serious re-structuring, and retained the functions to hear cases assigned to it as a court of first and second instance, also carrying out court supervision over the courts in its competence. With the adoption of the new Constitution of USSR in 1977, it became necessary to revise the legislation which determined the activity of the judiciary of Azerbaijan SSR, and as a result a new Law &ldquo;on the Judicial structure of Azerbaijan SSR&rdquo; was adopted on 16 June 1981. That Law also expanded further the powers of the Supreme Court of Nakhchivan Autonomous SSR.</span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; margin-top: 0cm; mso-margin-bottom-alt: 10.0pt; mso-margin-top-alt: 0cm; mso-add-space: auto; text-align: justify; text-indent: 1.0cm; line-height: normal; background: white;"><span style="color: black; font-family: \'Times New Roman\', serif; font-size: 14pt; text-indent: 1cm;">In order to ensure that justice is done in accordance with best international practices in the Republic of Azerbaijan and to strengthen further the independent judicial power, a Law of the Republic of Azerbaijan &ldquo;on Courts and Judges&rdquo; was adopted on 10 June 1997. Chpater 10 of the law contains stipulations solely about the regulation of the status of the Supreme Court of Nakhchivan Autonomous Republic. The law determines the composition of the Supreme Court, Presidium and powers of the collegiums of the Supreme Court. The law regulates the composition of the Supreme Court, Presidium, the powers and other related issues as regards the collegiums of the Supreme Court.</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; text-align: justify; text-indent: 1.0cm; line-height: normal; background: white;"><span style="font-size: 14pt;"><span style="font-family: \'Times New Roman\', serif; color: black;"><img style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; font-family: arial, helvetica, sans-serif; font-size: 16px; text-indent: 0px; float: left; margin: 10px;" src="http://127.0.0.1:8000/storage/pages/May2022/AliMehkeme2.gif" alt="" width="302" border="0" /><span style="font-size: 14pt; text-indent: 1cm;">The Law of the Republic of Azerbaijan dated 22 June 2010 on making amendments to the laws of the Republic of Azerbaijan "on Courts and judges" and "on Judicial Legal Council" replaced the names of the collegiums on civil cases, and cases related to economic disputes, criminal cases and cases of administrative offenses, as well as cases related to military courts which function under the Supreme Court of Nakhchivan Autonomous Republic, respectively with the phrases civil, administrative, criminal and commercial collegium.</span></span></span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; text-align: justify; text-indent: 1.0cm; line-height: normal; background: white;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black;">The Supreme Court of Nakhchivan Autonomous Republic has been publishing its Bulletin since 2006. The Bulletin provides information to the public about the events held by the Supreme Court and decisions made by it, statistical data about the activities of the court, judges, as well as information for those who practice law on new normative legal acts, in particular those of Nakhchivan Autonomous Republic, including news of legal practices and resident practice of the European Commission of Human Rights.</span></p>
<p>&nbsp;</p>',
                'created_at' => '2022-05-10 05:27:38',
                'updated_at' => '2022-05-19 08:33:17',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'about',
                'created_at' => '2022-05-10 05:27:38',
                'updated_at' => '2022-05-10 05:27:38',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'glavnaya-informaciya',
                'created_at' => '2022-05-10 05:27:38',
                'updated_at' => '2022-05-10 05:27:38',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p class="MsoNormal" style="margin-bottom: 7.5pt; margin-top: 0cm; mso-margin-bottom-alt: 10.0pt; mso-margin-top-alt: 0cm; mso-add-space: auto; text-align: justify; text-indent: 1.0cm; line-height: 11.85pt; background: white;"><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif; color: black;">3 октября 1925-го года решением Правления Центрального Исполнительного Комитета Азербайджанской ССР был создан Главный суд Нахчыванской АСРР. После этого, на различных этапах именуясь по-разному, а с 1937-го года именуемый Верховный Суд Нахчыванской АРР, этот суд в последующие периоды не претерпел структурных изменений и сохранил функции рассмотрения отнесенных к нему дел в качестве суда первой и верхней инстанции, а также осуществление надзора над судами, находящимися в сфере его деятельности.</span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; margin-top: 0cm; mso-margin-bottom-alt: 10.0pt; mso-margin-top-alt: 0cm; mso-add-space: auto; text-align: justify; text-indent: 1.0cm; line-height: 11.85pt; background: white;"><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif; color: black;">В связи с принятием в 1977-м году новой Конституции, возникла также необходимость изменить определяющее систему судебных органов Азербайджанской ССР законодательство, в результате, 16 июня 1981-го года был принят новый Закон &laquo;О судебной структуре Азербайджанской ССР&raquo;. Данный закон еще больше расширил полномочия Верховного Суда Нахчыванской АССР.</span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; margin-top: 0cm; mso-margin-bottom-alt: 10.0pt; mso-margin-top-alt: 0cm; mso-add-space: auto; text-align: justify; text-indent: 1.0cm; line-height: 11.85pt; background: white;"><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif; color: black;">С целью обеспечения в Азербайджанской Республике справедливого суда на основе передового опыта, тоесть еще большего укрепления независимой судебной власти, 10 июня 1997-го года был принят Закон Азербайджанской Республики &laquo;О Судах и Судьях&raquo;, X глава этого закона в целом посвящена регулированию статуса Верховного Суда Нахчыванской Автономной Республики. В Законе разъяснены состав Верховного Суда, Правление, полномочия коллегий Верховного суда. В Законе регулируются состав Верховного Суда, Правление, полномочия коллегий Верховного суда и иные связанные вопросы.</span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; margin-top: 0cm; mso-margin-bottom-alt: 10.0pt; mso-margin-top-alt: 0cm; mso-add-space: auto; text-align: justify; text-indent: 1.0cm; line-height: 11.85pt; background: white;"><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif; color: black;">Законом Азербайджанской Республики от 22 июня 2010-го года относительно внесения изменений и дополнений в законы Азербайджанской Республики &laquo;О Судах и Судьях&raquo; &laquo;О Судебно-Юридическом Совете&raquo; заменены названия функционирующих в составе Верховного Совета Нахчыванской Автономной Республики коллегии по гражданским делам, по делам относительно экономических споров, по уголовным делам и по делам по административным нарушениям и по делам военных судов, соответственно выражениям были заменены на гражданскую, административную, уголовную и коммерческую коллегии.</span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; margin-top: 0cm; mso-margin-bottom-alt: 10.0pt; mso-margin-top-alt: 0cm; mso-add-space: auto; text-align: justify; text-indent: 1.0cm; line-height: 11.85pt; background: white;"><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;"><span style="color: black;">С 2006-го года Верховный Суд Нахчыванской Автономной Республики издает свой бюллетень. Посредством бюллетеня до сведения общества доводятся проводимые Верховным Советом мероприятия, статистические сведения о судебной деятельности, судьи, а также иные работающие в правовой сфере лица знакомятся с новыми нормативно-правовыми актами, в особенности нормативно-правовыми актами Нахчыванской Автономной Республики, а также новости юридической практики, в том числе резидентной практикой Европейского Суда по Правам Человека.</span></span></p>',
                'created_at' => '2022-05-10 05:29:07',
                'updated_at' => '2022-05-19 08:33:17',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Chairman of the court',
                'created_at' => '2022-05-10 05:45:36',
                'updated_at' => '2022-05-10 05:45:36',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Председатель суда',
                'created_at' => '2022-05-10 05:45:36',
                'updated_at' => '2022-05-10 05:45:36',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<h2 style="box-sizing: border-box; font-family: Arial, sans-serif; font-weight: normal; line-height: 15.808px; color: #000000; margin: 0px 0px 8px; font-size: 20.4px; padding: 20px 0px 8px; text-rendering: optimizelegibility;"><strong style="box-sizing: border-box; line-height: 15.808px;"><img style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin: 5px; float: left;" src="http://www.supremecourt.nakhchivan.az/images/news/Sedr%202018.png" alt="Sedr 2018" /></strong></h2>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt;"><span style="font-family: Arial, sans-serif; color: black;">&nbsp;<strong>&nbsp;&nbsp;</strong></span><strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">Gasim Aliyev</span></em></strong></span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt;"><strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">&nbsp; President, Supreme Court of Nakhchivan AR</span></em></strong></span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt; font-family: Arial, sans-serif; color: black;">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt;"><strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">Year of birth:</span></em></strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">&nbsp;1971</span></em></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt;"><em><span style="font-family: \'Times New Roman\', serif; color: black;">&nbsp;<strong>Education:</strong>&nbsp;</span></em><em><span style="font-family: \'Times New Roman\', serif;">1999&nbsp; Gafgaz University, Law Faculty</span></em></span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background: white; text-align: center;"><span style="font-size: 14pt;"><strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">Work Experience</span></em></strong></span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background: white; text-align: left;"><span style="font-size: 14pt; line-height: 115%; font-family: \'Times New Roman\', serif; color: black;">1995 &ndash; 1996&nbsp; &nbsp; &nbsp; &nbsp;Secretary, Sharur District Prosecutor&rsquo;s Office</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background: white; text-align: left;"><span style="font-size: 14pt; line-height: 115%; font-family: \'Times New Roman\', serif; color: black;">1996 &ndash; 2003&nbsp; &nbsp; &nbsp; &nbsp;Chief clerk, Sharur District Prosecutor&rsquo;s Office</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background: white; text-align: left;"><span style="font-size: 14pt; line-height: 115%; font-family: \'Times New Roman\', serif; color: black;">2003 &ndash; 2007&nbsp; &nbsp; &nbsp; &nbsp;Judge, Nakhchivan Autonomous Republic&rsquo;s Sadarak District Court</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background: white; text-align: left;"><span style="font-size: 14pt; line-height: 115%; font-family: \'Times New Roman\', serif; color: black;">2007 &ndash; 2008&nbsp; &nbsp; &nbsp; &nbsp;President, Nakhchivan Autonomous Republic&rsquo;s Military Court</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background: white; text-align: left;"><span style="font-size: 14pt; line-height: 115%; font-family: \'Times New Roman\', serif; color: black;">2008 &ndash; 2018&nbsp; &nbsp; &nbsp; &nbsp;President, Nakhchivan Autonomous Republic&rsquo;s Military Court</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background: white; text-align: left;"><span style="font-size: 14pt; line-height: 115%; font-family: \'Times New Roman\', serif; color: black;">2018&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Judge, Supreme Court of Nakhchivan AR</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: 150%; background: white; text-align: left;"><span style="font-size: 14pt;"><span style="line-height: 150%; font-family: \'Times New Roman\', serif; color: black;">2018 &ndash;&nbsp;</span><span style="line-height: 150%; font-family: \'Times New Roman\', serif; color: black;">Ongoing</span><span style="line-height: 150%; font-family: \'Times New Roman\', serif; color: black;">&nbsp; &nbsp; President, Supreme Court of Nakhchivan AR<br />2018 &ndash;&nbsp;</span><span style="line-height: 150%; font-family: \'Times New Roman\', serif; color: black;">Ongoing</span><span style="line-height: 150%; font-family: \'Times New Roman\', serif; color: black;">&nbsp; &nbsp; Member of Judical-Legal Council&nbsp;&nbsp;</span></span></p>',
                'created_at' => '2022-05-10 05:45:36',
                'updated_at' => '2022-05-19 08:37:54',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => '<h2 style="box-sizing: border-box; font-family: Arial, sans-serif; font-weight: normal; line-height: 15.808px; color: #000000; margin: 0px 0px 8px; font-size: 20.4px; padding: 20px 0px 8px; text-rendering: optimizelegibility;"><strong style="box-sizing: border-box; line-height: 15.808px;"><img style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin: 5px; float: left;" src="http://www.supremecourt.nakhchivan.az/images/news/Sedr%202018.png" alt="Sedr 2018" /></strong></h2>
<p style="box-sizing: border-box; margin: 0px 0px 6pt; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;"><strong><span style="box-sizing: border-box; font-size: 14pt;">Əliyev Qasım Vəli oğlu</span></strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 6pt; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;">&nbsp;</p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt;"><strong><span style="font-family: Arial, sans-serif; color: black;">&nbsp;</span></strong><strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">Алиев Гасым</span></em></strong></span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt;"><strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">&nbsp;Председатель Верховного Суда Нахчыванской Автономной Республики</span></em></strong></span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt; font-family: Arial, sans-serif; color: black;">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt;"><strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">Год рождения:</span></em></strong><em><span style="font-family: \'Times New Roman\', serif; color: black;">&nbsp;1971</span></em></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14pt;"><em><span style="font-family: \'Times New Roman\', serif; color: black;">&nbsp;<strong>Образование:</strong>&nbsp;</span></em><em><span style="font-family: \'Times New Roman\', serif;">1999&nbsp; Университет Гафгаз, юридический факультет</span></em></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; background: white;"><span style="font-size: 14pt;"><strong><em><span style="line-height: 115%; font-family: \'Times New Roman\', serif; color: black;">Опыт работы</span></em></strong></span></p>
<p class="MsoNormal" style="text-align: justify;"><span style="font-family: \'Times New Roman\', serif; color: black; font-size: 14pt;">1995 &ndash; 1996<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Секретарь Прокуратуры Шарурского района</span></p>
<p class="MsoNormal" style="text-align: justify;"><span style="font-family: \'Times New Roman\', serif; color: black; font-size: 14pt;">1996 &ndash; 2003<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Начальник канцелярии Прокуратуры Шарурского района</span></p>
<p class="MsoNormal" style="text-align: justify;"><span style="font-family: \'Times New Roman\', serif; color: black; font-size: 14pt;">2003 &ndash; 2007<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Судья Садаракского Районного Суда Нахчыванской Автономной Республики</span></p>
<p class="MsoNormal" style="text-align: justify;"><span style="font-family: \'Times New Roman\', serif; color: black; font-size: 14pt;">2007 &ndash; 2018<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Председатель Военного Суда Нахчыванской Автономной Республики</span></p>
<p class="MsoNormal" style="text-align: justify;"><span style="font-family: \'Times New Roman\', serif; color: black; font-size: 14pt;">2018 - по н. в.<span>&nbsp;&nbsp;</span>Председатель Верховного Суда Нахчыванской Автономной Республики</span></p>
<p class="MsoNormal" style="text-align: justify;"><span style="font-family: \'Times New Roman\', serif; color: black; font-size: 14pt;">2018 - по н. в.</span></p>
<p class="MsoNormal" style="text-align: justify;"><span style="font-family: \'Times New Roman\', serif; color: black; font-size: 14pt;">2018 - по н. в.</span></p>',
                'created_at' => '2022-05-10 05:45:36',
                'updated_at' => '2022-05-19 08:37:54',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'college',
                'created_at' => '2022-05-10 05:45:36',
                'updated_at' => '2022-05-10 05:45:36',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'predsedatel-suda',
                'created_at' => '2022-05-10 05:45:36',
                'updated_at' => '2022-05-10 05:45:36',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Registry of the Court',
                'created_at' => '2022-05-10 05:47:37',
                'updated_at' => '2022-05-17 15:47:00',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Аппарат Верховного Суда',
                'created_at' => '2022-05-10 05:47:37',
                'updated_at' => '2022-05-17 15:47:00',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => '<p><img src="http://127.0.0.1:8000/storage/pages/May2022/structure.png" alt="" width="1040" height="1271" /></p>',
                'created_at' => '2022-05-10 05:47:37',
                'updated_at' => '2022-05-10 19:40:25',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => '<p><img src="http://127.0.0.1:8000/storage/pages/May2022/structure.png" alt="" width="1040" height="1271" /></p>',
                'created_at' => '2022-05-10 05:47:37',
                'updated_at' => '2022-05-10 05:47:37',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'the-structure-of-the-court',
                'created_at' => '2022-05-10 05:47:37',
                'updated_at' => '2022-05-10 05:47:37',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'struktura-suda',
                'created_at' => '2022-05-10 05:47:37',
                'updated_at' => '2022-05-10 05:47:37',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Contact',
                'created_at' => '2022-05-10 05:56:55',
                'updated_at' => '2022-05-10 06:01:05',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'Контакт',
                'created_at' => '2022-05-10 05:56:55',
                'updated_at' => '2022-05-10 05:56:55',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 6,
                'locale' => 'en',
            'value' => '<table class="table table-hover" style="caption-side: bottom; border-collapse: collapse; border-spacing: 0px; margin: 0px 0px 20px; padding: 0px; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1110px; color: #212529; vertical-align: top; border-color: #dee2e6; max-width: 100%; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; height: 336px;">
<thead style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; vertical-align: bottom;">
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px;">
<th class="table-title th-font common bg-gradient" style="box-sizing: border-box; text-align: left; border-width: 0px 0px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; font-size: 16px; font-style: italic; height: 63px; width: 570.792px; background-image: var(--bs-gradient)  !important;" scope="col"><strong><span style="background-color: #ffffff; font-size: 12pt;"><span style="font-family: Arial, sans-serif; color: #555555; background-color: #ffffff;">Appeals are received</span></span></strong></th>
<th class="table-title" style="box-sizing: border-box; text-align: left; border-width: 0px 0px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; font-size: 16px; font-style: italic; height: 63px; width: 229.99px;" scope="col"><strong><span style="font-size: 12pt;"><span style="font-family: Arial, sans-serif; color: #555555;">Responsible persons for the contact</span></span></strong></th>
<th class="table-title common" style="box-sizing: border-box; text-align: left; border-width: 0px 0px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; font-size: 16px; font-style: italic; height: 63px; width: 260.219px;" scope="col"><span style="background-color: #ffffff; font-size: 12pt;"><strong style="color: #686868; font-style: normal; text-align: -webkit-center; background-color: #ffffff;"><span style="font-family: Arial, sans-serif; color: #555555; background-color: #ffffff;">Telephone</span><em><span style="font-family: Arial, sans-serif; color: #555555; background-color: #ffffff;">&nbsp;number</span></em></strong></span></th>
</tr>
</thead>
<tbody style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; vertical-align: inherit;">
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 37px; width: 570.792px;"><span style="color: #000000; font-family: Arial, sans-serif; font-size: 12pt; text-align: -webkit-center;">Administration of The Court</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 37px; width: 229.99px;"><span style="font-size: 12pt;">Chief of staff</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 37px; width: 260.219px;"><span style="font-size: 12pt;">545-01-55</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 570.792px;"><span style="color: #000000; font-family: Arial, sans-serif; font-size: 12pt; text-align: -webkit-center;">General Department</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 229.99px;"><span style="font-size: 12pt;">Branch Manager</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 260.219px;"><span style="font-size: 12pt;">544-61-76</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 570.792px;"><span style="font-size: 12pt;">Department of reception of citizens and consideration of letters</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 229.99px;"><span style="font-size: 12pt;">Branch Manager</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 260.219px;"><span style="font-size: 12pt;">544-61-77</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 56px; width: 570.792px;"><span style="font-size: 12pt;">Department of Generalization of Judicial Practice and Analysis of Court Statistics</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 56px; width: 229.99px;"><span style="font-size: 12pt;">Branch Manager</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 56px; width: 260.219px;"><span style="font-size: 12pt;">544-61-77</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 570.792px;"><span style="font-size: 12pt;">Analytical and Legislative Systematization Department</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 229.99px;"><span style="font-size: 12pt;">Branch Manager</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 260.219px;"><span style="font-size: 12pt;">544-61-76</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 570.792px;"><span style="font-size: 12pt;">Department of Executive Officers</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 229.99px;"><span style="font-size: 12pt;">Branch Manager</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 260.219px;"><span style="font-size: 12pt;">544-61-75</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 570.792px;"><span style="font-size: 12pt;">Press Service</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 229.99px;"><span style="font-size: 12pt;">Senior Consultant</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 260.219px;"><span style="font-size: 12pt;">544-61-75</span></td>
</tr>
</tbody>
</table>
<div class="alert alert-light w-100 m-auto text-center" style="box-sizing: border-box; padding: 15px; position: relative; border: 1px solid transparent; border-radius: 4px; color: #818182; background-color: #fefefe; width: 1110px; text-align: center; text-shadow: rgba(255, 255, 255, 0.2) 0px 1px 0px; box-shadow: rgba(255, 255, 255, 0.25) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 2px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; margin: auto !important auto !important 20px auto !important;" role="alert"><span style="color: #686868; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12pt;">&nbsp;</span></div>
<div class="alert alert-light w-100 m-auto text-center" style="box-sizing: border-box; padding: 15px; position: relative; border: 1px solid transparent; border-radius: 4px; color: #818182; background-color: #fefefe; width: 1110px; text-align: center; text-shadow: rgba(255, 255, 255, 0.2) 0px 1px 0px; box-shadow: rgba(255, 255, 255, 0.25) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 2px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; margin: auto !important auto !important 20px auto !important;" role="alert">&nbsp;</div>
<div class="alert alert-light w-100 m-auto text-center" style="box-sizing: border-box; padding: 15px; position: relative; border: 1px solid transparent; border-radius: 4px; color: #818182; background-color: #fefefe; width: 1110px; text-align: center; text-shadow: rgba(255, 255, 255, 0.2) 0px 1px 0px; box-shadow: rgba(255, 255, 255, 0.25) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 2px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; margin: auto !important auto !important 20px auto !important;" role="alert"><span style="color: #686868; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12pt;"><strong>Address: Nakhchivan city, AZ 7000, Ataturk street 19</strong></span><br />
<p style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="font-size: 12pt;">Phone: (036) 544-61-77</span></p>
<p style="box-sizing: border-box; margin: 5px 0px 0px; padding: 0px;"><span style="font-size: 12pt;"><a class="alert-link" style="box-sizing: border-box; background-color: transparent; color: #686868; text-decoration-line: none; margin: 0px; padding: 0px; font-weight: bold;">Fax:&nbsp;</a>(036) 550-12-77</span></p>
<p style="box-sizing: border-box; margin: 5px 0px 0px; padding: 0px;"><span style="font-size: 12pt;"><a class="alert-link" style="box-sizing: border-box; background-color: transparent; color: #686868; text-decoration-line: none; margin: 0px; padding: 0px; font-weight: bold;" href="file:///C:/Users/Asus/Pictures/AliM%C9%99hk%C9%99m%C9%99Hazirda/contact.html#">E-mail:&nbsp;</a>alimehkeme@nakhchivan.az</span></p>
</div>',
                'created_at' => '2022-05-10 05:56:55',
                'updated_at' => '2022-05-19 08:36:36',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 6,
                'locale' => 'ru',
            'value' => '<table class="table table-hover" style="border-color: #dee2e6; caption-side: bottom; border-collapse: collapse; border-spacing: 0px; margin: 0px 0px 20px; padding: 0px; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1110px; color: #212529; vertical-align: top; max-width: 100%; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; height: 336px;">
<thead style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; vertical-align: bottom;">
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; height: 63px;">
<th class="table-title th-font common bg-gradient" style="box-sizing: border-box; text-align: left; border-width: 0px 0px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; font-size: 16px; font-style: italic; height: 63px; width: 580.896px; background-image: var(--bs-gradient)  !important;" scope="col"><span style="font-family: \'arial black\', sans-serif; font-size: 12pt; color: #000000;"><strong><em><span style="line-height: 115%;">Структурные подразделения</span></em></strong></span></th>
<th class="table-title" style="box-sizing: border-box; text-align: left; border-width: 0px 0px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; font-size: 16px; font-style: italic; height: 63px; width: 232.344px;" scope="col"><span style="font-size: 12pt; color: #000000;"><span style="line-height: 115%; font-family: Arial, sans-serif;">Лица, ответственные за связь</span></span></th>
<th class="table-title common" style="box-sizing: border-box; text-align: left; border-width: 0px 0px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; font-size: 16px; font-style: italic; height: 63px; width: 264.427px;" scope="col"><span style="color: #000000;"><strong><span style="font-size: 12pt;"><span style="line-height: 115%; font-family: Arial, sans-serif;">Телефон</span></span></strong></span></th>
</tr>
</thead>
<tbody style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; vertical-align: inherit;">
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; height: 37px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 37px; width: 580.896px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Аппарат Суда</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 37px; width: 232.344px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Начальник аппарата администрации</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 37px; width: 264.427px;"><span style="color: #000000;">545-01-55</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; height: 36px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 580.896px;"><span style="color: #000000; font-size: 12pt;">Общий отдел&nbsp;</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 232.344px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Глава департамента</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 264.427px;"><span style="color: #000000;">544-61-76</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; height: 36px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 580.896px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Отдел приема граждан и рассмотрения писем</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 232.344px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Глава департамента</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 264.427px;"><span style="color: #000000;">544-61-77</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; height: 56px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 56px; width: 580.896px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Отдел обобщения судебной практики и анализа судебной статистики</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 56px; width: 232.344px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Глава департамента</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 56px; width: 264.427px;"><span style="color: #000000;">544-61-77</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; height: 36px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 580.896px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Отдел аналитики и систематизации законодательства</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 232.344px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Глава департамента</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 264.427px;"><span style="color: #000000;">544-61-76</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; height: 36px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 580.896px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Отдел судебных приставов</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 232.344px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif; color: #000000;">Глава департамента</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 264.427px;"><span style="color: #000000;">544-61-75</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; height: 36px;">
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 580.896px;"><span style="color: #000000; font-size: 12pt;">Пресс-служба</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 232.344px;"><span style="color: #000000; font-size: 12pt;">Старший консультант</span></td>
<td style="box-sizing: border-box; border-width: 1px 0px; border-style: solid; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 36px; width: 264.427px;"><span style="color: #000000;">544-61-75</span></td>
</tr>
</tbody>
</table>
<div class="alert alert-light w-100 m-auto text-center" style="box-sizing: border-box; padding: 15px; position: relative; border: 1px solid transparent; border-radius: 4px; color: #818182; background-color: #fefefe; width: 1110px; text-align: center; text-shadow: rgba(255, 255, 255, 0.2) 0px 1px 0px; box-shadow: rgba(255, 255, 255, 0.25) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 2px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; margin: auto !important auto !important 20px auto !important;" role="alert"><span style="color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 16px;"><strong>Адрес: город Нахчыван, AZ 7000, улица Ататюрка 19</strong></span></span><br />
<p style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="font-size: 12pt; color: #000000;"><strong>Телефон</strong>: (036) 544-61-77</span></p>
<p style="box-sizing: border-box; margin: 5px 0px 0px; padding: 0px;"><span style="color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 16px;"><strong>Факс: (036) 550-12-77</strong></span></span></p>
<p style="box-sizing: border-box; margin: 5px 0px 0px; padding: 0px;"><span style="color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 16px;"><strong>Электронная почта: alimehkeme@nakhchivan.az</strong></span></span></p>
</div>',
                'created_at' => '2022-05-10 05:56:55',
                'updated_at' => '2022-05-19 08:36:36',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'contact',
                'created_at' => '2022-05-10 05:56:55',
                'updated_at' => '2022-05-10 05:56:55',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'kontakt',
                'created_at' => '2022-05-10 05:56:55',
                'updated_at' => '2022-05-10 05:56:55',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Reception graphic',
                'created_at' => '2022-05-10 06:06:59',
                'updated_at' => '2022-05-19 08:35:21',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'График приема',
                'created_at' => '2022-05-10 06:06:59',
                'updated_at' => '2022-05-10 06:06:59',
            ),
            26 => 
            array (
                'id' => 27,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => '<div class="first-down-title" style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1.8rem; text-align: center; font-weight: bold; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;">
<p class="MsoNormal" style="margin: 0cm 0cm 7.5pt 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;" align="center"><span style="font-size: 12pt;"><strong><span style="font-family: Arial, sans-serif; color: black;">INFORMATION ABOUT RECEPTION DAYS</span></strong></span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif; color: black;">Appeals were received by the civil servants of the department of Reception of Citizens and Examination of Letters of Supreme Court &nbsp;from 9.00 to 18.00 in the reception room of the court on working days, as well the persons lodging complaint were informed about their rights and duties concidered by the law.</span></p>
</div>
<table class="table table-bordered reception_days mt-5" style="caption-side: bottom; border-collapse: collapse; border-spacing: 0px; padding: 0px; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1110px; color: #212529; vertical-align: top; border: 1px solid #dddddd; max-width: 100%; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; height: 635px;">
<thead style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; vertical-align: bottom;">
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border-width: 0px 1px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; border-image: initial; line-height: 1.42857; height: 63px; width: 32.1979px; border-color: initial #dddddd currentcolor #dddddd; border-style: initial solid solid solid;" scope="col">&nbsp;</th>
<th style="box-sizing: border-box; text-align: left; border-width: 0px 1px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; border-image: initial; line-height: 1.42857; height: 63px; width: 399.719px; border-color: initial #dddddd currentcolor #dddddd; border-style: initial solid solid solid;" scope="col"><span style="font-size: 12pt;"><strong><span style="line-height: 115%; font-family: Arial, sans-serif;">Position of the officials who receive citizens</span></strong></span></th>
<th style="box-sizing: border-box; text-align: left; border-width: 0px 1px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; border-image: initial; line-height: 1.42857; height: 63px; width: 323.073px; border-color: initial #dddddd currentcolor #dddddd; border-style: initial solid solid solid;" scope="col"><span style="font-size: 12pt;"><strong><span style="line-height: 115%; font-family: Arial, sans-serif;">Surname, Name, Patronymic name&nbsp;<br />of the officials</span></strong></span></th>
<th style="box-sizing: border-box; text-align: left; border-width: 0px 1px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; border-image: initial; line-height: 1.42857; height: 63px; width: 153.51px; border-color: initial #dddddd currentcolor #dddddd; border-style: initial solid solid solid;" scope="col"><span style="font-size: 12pt;"><strong><span style="line-height: 115%; font-family: Arial, sans-serif;">Reception days</span></strong></span></th>
<th style="box-sizing: border-box; text-align: left; border-width: 0px 1px 2px; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; border-image: initial; line-height: 1.42857; height: 63px; width: 152.5px; border-color: initial #dddddd currentcolor #dddddd; border-style: initial solid solid solid;" scope="col"><span style="font-size: 12pt;"><strong><span style="line-height: 115%; font-family: Arial, sans-serif;">Reception hour</span></strong></span></th>
</tr>
</thead>
<tbody style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; vertical-align: inherit;">
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; height: 63px; width: 32.1979px;" scope="row"><span style="font-size: 12pt;">1</span></th>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 63px; width: 399.719px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">The Chairman of Supreme Court</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 63px; width: 323.073px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Aliyev Gasim Vali&nbsp;</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 63px; width: 153.51px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Monday<br />Wednesday&nbsp;</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 63px; width: 152.5px;"><span style="font-size: 12pt;">10:00-12:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; height: 69px; width: 32.1979px;" scope="row"><span style="font-size: 12pt;">2</span></th>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 69px; width: 399.719px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">The Deputy Chairman of the Court</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 69px; width: 323.073px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Novruzov Asgar Novruz</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 69px; width: 153.51px;">
<p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal; text-align: left;" align="center"><span style="font-size: 12pt; font-family: Arial, sans-serif;">Tuesday</span></p>
<span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Thursday</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 69px; width: 152.5px;"><span style="font-size: 12pt;">10:00-12:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; height: 62px; width: 32.1979px;" scope="row"><span style="font-size: 12pt;">3</span></th>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 399.719px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">The chief of Civil board</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 323.073px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Allahverdiyev Ali Karim</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 153.51px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">working days</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 152.5px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; height: 62px; width: 32.1979px;" scope="row"><span style="font-size: 12pt;">4</span></th>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 399.719px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">The chief of Administrative board</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 323.073px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Gurbanov Yusifali Suleyman</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 153.51px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">working days</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 152.5px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; height: 62px; width: 32.1979px;" scope="row"><span style="font-size: 12pt;">5</span></th>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 399.719px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">The chief of Criminal board</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 323.073px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Mirzayev Ilgar Maharram</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 153.51px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">working days</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 152.5px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; height: 62px; width: 32.1979px;" scope="row"><span style="font-size: 12pt;">6</span></th>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 399.719px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">The chief of Commercial board</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 323.073px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Khidirov Ahliman Mehman&nbsp;</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 153.51px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">working days</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 152.5px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; height: 39px; width: 32.1979px;" scope="row"><span style="font-size: 12pt;">7</span></th>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 39px; width: 399.719px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">The chief of Administration staff</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 39px; width: 323.073px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Gaybaliyev Vusal Rahim</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 62px; width: 153.51px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">working days</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 63px; width: 152.5px;"><span style="font-size: 12pt;">10:00-12:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="box-sizing: border-box; text-align: left; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; height: 153px; width: 32.1979px;" scope="row"><span style="font-size: 12pt;">8</span></th>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 153px; width: 399.719px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">The heads of departments</span></td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 153px; width: 323.073px;">
<p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal; text-align: left;" align="center"><span style="font-size: 12pt;"><span style="font-family: Arial, sans-serif; color: black;">Gurbanova Gulay Ajdar</span><span style="font-family: Arial, sans-serif;">,</span></span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal; text-align: left;" align="center"><span style="font-size: 12pt;"><span style="font-family: \'Times New Roman\', serif;">&nbsp;</span><span style="font-family: Arial, sans-serif; background-color: var(--bs-table-bg);">Bayramova Jahan Garay,</span></span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal; text-align: left;" align="center"><span style="font-size: 12pt;"><span style="font-family: \'Times New Roman\', serif;">&nbsp;</span><span style="font-family: Arial, sans-serif; background-color: var(--bs-table-bg);">Aliyev Oruj Ali</span><span style="font-family: Arial, sans-serif; background-color: var(--bs-table-bg); color: black;">,</span></span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal; text-align: left;" align="center"><span style="font-size: 12pt;"><span style="font-family: \'Times New Roman\', serif;">&nbsp;</span><span style="font-family: Arial, sans-serif; background-color: var(--bs-table-bg);">Valiyev Yunis Aziz.</span></span></p>
</td>
<td style="box-sizing: border-box; border: 1px solid #dddddd; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; font-size: 14px; height: 153px; width: 153.51px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">working days</span></td>
</tr>
</tbody>
</table>',
                'created_at' => '2022-05-10 06:06:59',
                'updated_at' => '2022-05-19 08:35:21',
            ),
            27 => 
            array (
                'id' => 28,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => '<div class="first-down-title" style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1.8rem; text-align: center; font-weight: bold; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;">
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;" align="center"><span style="font-size: 14pt;"><strong><span style="font-family: Arial, sans-serif;">ИНФОРМАЦИЯ О ГРАФИКЕ ПРИЕМА</span></strong></span></p>
</div>
<table class="table table-bordered reception_days mt-5" style="border-style: solid; border-color: #dddddd; caption-side: bottom; border-collapse: collapse; border-spacing: 0px; padding: 0px; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1110px; color: #212529; vertical-align: top; max-width: 100%; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; height: 524px;">
<thead style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; vertical-align: bottom;">
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-top-width: 0px; border-bottom-width: 2px; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; width: 25px; height: 55px;" scope="col">&nbsp;</th>
<th style="border-top-width: 0px; border-bottom-width: 2px; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; width: 339px; height: 55px;" scope="col"><span style="font-size: 12pt;"><strong><span style="line-height: 115%; font-family: Arial, sans-serif;">Должность должностных лиц, принимающих граждан</span></strong></span></th>
<th style="border-top-width: 0px; border-bottom-width: 2px; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; width: 272px; height: 55px;" scope="col">
<p class="MsoNormal" style="margin-bottom: 7.5pt; margin-top: 0cm; mso-margin-bottom-alt: 10.0pt; mso-margin-top-alt: 0cm; mso-add-space: auto; text-align: center; line-height: normal;" align="center"><span style="font-size: 12pt;"><strong><span style="font-family: Arial, sans-serif;">Фамилия, имя, отчество</span></strong></span></p>
<span style="font-size: 12pt;"><strong><span style="line-height: 115%; font-family: Arial, sans-serif;">чиновников</span></strong></span></th>
<th style="border-top-width: 0px; border-bottom-width: 2px; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; width: 317px; height: 55px;" scope="col"><span style="font-size: 12pt;"><strong><span style="line-height: 115%; font-family: Arial, sans-serif;">Приемные дни</span></strong></span></th>
<th style="border-top-width: 0px; border-bottom-width: 2px; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: bottom; line-height: 1.42857; width: 108px; height: 55px;" scope="col"><span style="font-size: 12pt;"><strong><span style="line-height: 115%; font-family: Arial, sans-serif;">Время приема</span></strong></span></th>
</tr>
</thead>
<tbody style="box-sizing: border-box; border-style: solid; border-width: 0px; margin: 0px; padding: 0px; vertical-align: inherit;">
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-style: solid; border-color: #dddddd; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 25px; height: 57px;" scope="row"><span style="font-size: 12pt;">1</span></th>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 339px; height: 57px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Председатель Верховного Суда</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 272px; height: 57px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Алиев Гасым Вали оглу</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 317px; height: 57px;">
<p class="MsoNormal" style="margin-bottom: 7.5pt; margin-top: 0cm; mso-margin-bottom-alt: 10.0pt; mso-margin-top-alt: 0cm; mso-add-space: auto; text-align: center; line-height: normal;" align="center"><span style="font-size: 12pt;"><span style="font-family: Arial, sans-serif;">Понедельник,&nbsp;</span><span style="font-family: Arial, sans-serif; background-color: var(--bs-table-bg);">Среда</span></span></p>
</td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 108px; height: 57px;"><span style="font-size: 12pt;">10:00-12:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-style: solid; border-color: #dddddd; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 25px; height: 56px;" scope="row"><span style="font-size: 12pt;">2</span></th>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 339px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Заместитель председателя Суда</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 272px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Новрузов Асгяр Новруз оглу</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 317px; height: 56px;">
<p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><span style="font-size: 12pt;"><span style="font-family: Arial, sans-serif;">Вторник,&nbsp;</span><span style="font-family: Arial, sans-serif; background-color: var(--bs-table-bg);">Четверг</span></span></p>
</td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 108px; height: 56px;"><span style="font-size: 12pt;">10:00-12:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-style: solid; border-color: #dddddd; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 25px; height: 56px;" scope="row"><span style="font-size: 12pt;">3</span></th>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 339px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Председатель гражданской коллегии</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 272px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Аллахвердиев Али Кeрим оглу</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 317px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">рабочие дни</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 108px; height: 56px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-style: solid; border-color: #dddddd; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 25px; height: 56px;" scope="row"><span style="font-size: 12pt;">4</span></th>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 339px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Председатель административной коллегии</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 272px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Гурбанов Юсифали Сулейман оглу</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 317px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">рабочие дни</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 108px; height: 56px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-style: solid; border-color: #dddddd; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 25px; height: 56px;" scope="row"><span style="font-size: 12pt;">5</span></th>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 339px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Председатель уголовной коллегии</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 272px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Mирзаев Ильгар Магеррам оглу</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 317px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">рабочие дни</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 108px; height: 56px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-style: solid; border-color: #dddddd; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 25px; height: 56px;" scope="row"><span style="font-size: 12pt;">6</span></th>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 339px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Председатель коммерческой коллегии</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 272px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Хыдыров Ахлиман Мехман оглу</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 317px; height: 56px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">рабочие дни</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 108px; height: 56px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-style: solid; border-color: #dddddd; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 25px; height: 36px;" scope="row"><span style="font-size: 12pt;">7</span></th>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 339px; height: 36px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Начальник аппарата администрации</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 272px; height: 36px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Гайбалиев Вюсал Рагим оглы</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 317px; height: 36px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">рабочие дни</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 108px; height: 56px;"><span style="font-size: 12pt;">09:00-11:00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="font-size: 12pt;">16:00-18:00</span></td>
</tr>
<tr style="box-sizing: border-box; border-style: solid; border-width: 1px 0px; margin: 0px; padding: 0px;">
<th style="border-style: solid; border-color: #dddddd; box-sizing: border-box; text-align: left; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 25px; height: 96px;" scope="row"><span style="font-size: 12pt;">8</span></th>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 339px; height: 96px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">Руководители отделов</span></td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 272px; height: 96px;">
<p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><span style="font-size: 12pt;"><span style="font-family: Arial, sans-serif; color: black;">Гурбанова Гулай Аждар кызы</span><span style="font-family: Arial, sans-serif;">,</span></span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><span style="font-size: 12pt;"><span style="font-family: \'Times New Roman\', serif;">&nbsp;</span><span style="font-family: Arial, sans-serif; background-color: var(--bs-table-bg);">Байрамова Джахан Гарай кызы,</span></span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><span style="font-size: 12pt;"><span style="font-family: \'Times New Roman\', serif;">&nbsp;</span><span style="background-color: var(--bs-table-bg); font-family: Arial, sans-serif;">Алиев Орудж Али оглы</span><span style="background-color: var(--bs-table-bg); font-family: Arial, sans-serif; color: black;">,</span></span></p>
<p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><span style="font-size: 12pt;"><span style="font-family: \'Times New Roman\', serif;">&nbsp;</span><span style="font-family: Arial, sans-serif; background-color: var(--bs-table-bg);">Валиев Юнис Азиз оглы.</span></span></p>
</td>
<td style="font-size: 14px; border-style: solid; border-color: #dddddd; box-sizing: border-box; padding: 8px; margin: 0px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); vertical-align: top; line-height: 1.42857; width: 317px; height: 96px;"><span style="font-size: 12pt; line-height: 115%; font-family: Arial, sans-serif;">рабочие дни</span></td>
</tr>
</tbody>
</table>',
                'created_at' => '2022-05-10 06:06:59',
                'updated_at' => '2022-05-19 08:35:21',
            ),
            28 => 
            array (
                'id' => 29,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'reception_days',
                'created_at' => '2022-05-10 06:06:59',
                'updated_at' => '2022-05-11 06:13:36',
            ),
            29 => 
            array (
                'id' => 30,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'reception_days',
                'created_at' => '2022-05-10 06:06:59',
                'updated_at' => '2022-05-11 06:13:36',
            ),
            30 => 
            array (
                'id' => 31,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'Rules of writing a letter to the Supreme Court of Nakhchivan AR',
                'created_at' => '2022-05-10 06:08:10',
                'updated_at' => '2022-05-10 06:08:10',
            ),
            31 => 
            array (
                'id' => 32,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'Правила написания письма в Верховный суд Нахчыванской АР',
                'created_at' => '2022-05-10 06:08:10',
                'updated_at' => '2022-05-10 06:08:10',
            ),
            32 => 
            array (
                'id' => 33,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => '<p class="letter-title text-center" style="box-sizing: border-box; margin: 34px 0px; padding: 0px; text-align: center; font-size: 24px; font-weight: normal; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;"><span style="text-align: justify;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN &Uuml;NVANINA ELEKTRON FORMADA M&Uuml;RACİƏT G&Ouml;NDƏRMƏZDƏN ƏVVƏL, XAHİŞ EDİRİK QAYDALARLA TANIŞ OLUN:</span></span></p>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">1.Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin rəsmi internet səhifəsi vasitəsi ilə elektron formada g&ouml;ndərilmiş m&uuml;raciətlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin &Uuml;mumi ş&ouml;bəsinə daxil olur və &rdquo;Vətəndaşların m&uuml;raciətləri haqqında&rdquo; Azərbaycan Respublikasının 2015-ci il 30 sentyabr tarixli, 1308-IVQ n&ouml;mrəli Qanununa, habelə Azərbaycan Respublikası Prezidentinin 2016-cı il 23 iyun tarixli, 950 n&ouml;mrəli Fərmanı ilə təsdiq edilmiş &ldquo;D&ouml;vlət və bələdiyyə orqanlarında, d&ouml;vlət və ya bələdiyyə m&uuml;lkiyyətində olan və ya paylarının (səhmlərinin) nəzarət zərfi d&ouml;vlətə və ya bələdiyyəyə məxsus olan h&uuml;quqi şəxslərdə və b&uuml;dcə təşkilatlarında vətəndaşların m&uuml;raciətləri ilə bağlı karg&uuml;zarlığın aparılması Qaydası&rdquo;na uyğun olaraq qeydiyyata alınır və baxılır.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">2.Mətni yazmazdan əvvəl nəzərdə tutulmuş formanın d&uuml;zg&uuml;n cavablandırılması vacibdir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">3.Mətn m&uuml;tləq yazıldığı dilin əlifbası ilə tərtib olunmalıdır, b&uuml;t&ouml;vl&uuml;kdə b&ouml;y&uuml;k və ya ki&ccedil;ik hərflərlə yazılmamalı, c&uuml;mlələrə b&ouml;l&uuml;nməli, durğu işarələrindən istifadə qaydalarına riayət edilməlidir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">4.M&uuml;raciət aydın və səlis c&uuml;mlələrlə yazılmalıdır.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">5.M&uuml;raciət edərkən etika qaydaları g&ouml;zlənilməlidir. Nəzakətsiz ifadələr işlədildikdə və ya m&uuml;əllif &ouml;z&uuml; barədə məlumatları dəqiq g&ouml;stərmədikdə m&uuml;raciətə cavab verilmir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">6.H&ouml;rmətli internet səhifəsi istifadə&ccedil;iləri! B&ouml;y&uuml;k informasiya axınının işlənməsi x&uuml;susiyyətlərini nəzərə alaraq, xahiş edirik bəzi məhdudiyyətlərə h&ouml;rmətlə yanaşasınız:</span>
<ul style="box-sizing: border-box; padding: 0px; margin: 0px;">
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 12pt;">Bir mənbədən elektron məlumatın g&ouml;ndərilməsinin vaxtı serverin y&uuml;klənməsindən asılı olaraq 1-5 dəqiqə ilə məhdudlaşır.</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 12pt;">Elektron m&uuml;raciətin mətni 1500 işarədən &ccedil;ox olmamalıdır.</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 12pt;">Elektron m&uuml;raciətdə qoşma fayllar olmamalıdır. Mətni uzun olan məktublar, sənəd surətləri, fotoşəkillər və yol verilən digər əlavələr Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin E-mail: &uuml;nvanına və ya adi po&ccedil;tla bu &uuml;nvana g&ouml;ndərilməlidir:</span></li>
</ul>
</div>
<p class="location" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 16px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;">Nax&ccedil;ıvan şəhəri, AZ 7000, Atat&uuml;rk k&uuml;&ccedil;əsi 19, Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi.</p>',
                'created_at' => '2022-05-10 06:08:10',
                'updated_at' => '2022-05-10 06:08:10',
            ),
            33 => 
            array (
                'id' => 34,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => '<p class="letter-title text-center" style="box-sizing: border-box; margin: 34px 0px; padding: 0px; text-align: center; font-size: 24px; font-weight: normal; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;"><span style="text-align: justify;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN &Uuml;NVANINA ELEKTRON FORMADA M&Uuml;RACİƏT G&Ouml;NDƏRMƏZDƏN ƏVVƏL, XAHİŞ EDİRİK QAYDALARLA TANIŞ OLUN:</span></span></p>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">1.Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin rəsmi internet səhifəsi vasitəsi ilə elektron formada g&ouml;ndərilmiş m&uuml;raciətlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin &Uuml;mumi ş&ouml;bəsinə daxil olur və &rdquo;Vətəndaşların m&uuml;raciətləri haqqında&rdquo; Azərbaycan Respublikasının 2015-ci il 30 sentyabr tarixli, 1308-IVQ n&ouml;mrəli Qanununa, habelə Azərbaycan Respublikası Prezidentinin 2016-cı il 23 iyun tarixli, 950 n&ouml;mrəli Fərmanı ilə təsdiq edilmiş &ldquo;D&ouml;vlət və bələdiyyə orqanlarında, d&ouml;vlət və ya bələdiyyə m&uuml;lkiyyətində olan və ya paylarının (səhmlərinin) nəzarət zərfi d&ouml;vlətə və ya bələdiyyəyə məxsus olan h&uuml;quqi şəxslərdə və b&uuml;dcə təşkilatlarında vətəndaşların m&uuml;raciətləri ilə bağlı karg&uuml;zarlığın aparılması Qaydası&rdquo;na uyğun olaraq qeydiyyata alınır və baxılır.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">2.Mətni yazmazdan əvvəl nəzərdə tutulmuş formanın d&uuml;zg&uuml;n cavablandırılması vacibdir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">3.Mətn m&uuml;tləq yazıldığı dilin əlifbası ilə tərtib olunmalıdır, b&uuml;t&ouml;vl&uuml;kdə b&ouml;y&uuml;k və ya ki&ccedil;ik hərflərlə yazılmamalı, c&uuml;mlələrə b&ouml;l&uuml;nməli, durğu işarələrindən istifadə qaydalarına riayət edilməlidir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">4.M&uuml;raciət aydın və səlis c&uuml;mlələrlə yazılmalıdır.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">5.M&uuml;raciət edərkən etika qaydaları g&ouml;zlənilməlidir. Nəzakətsiz ifadələr işlədildikdə və ya m&uuml;əllif &ouml;z&uuml; barədə məlumatları dəqiq g&ouml;stərmədikdə m&uuml;raciətə cavab verilmir.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px;" /><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12pt;">6.H&ouml;rmətli internet səhifəsi istifadə&ccedil;iləri! B&ouml;y&uuml;k informasiya axınının işlənməsi x&uuml;susiyyətlərini nəzərə alaraq, xahiş edirik bəzi məhdudiyyətlərə h&ouml;rmətlə yanaşasınız:</span>
<ul style="box-sizing: border-box; padding: 0px; margin: 0px;">
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 12pt;">Bir mənbədən elektron məlumatın g&ouml;ndərilməsinin vaxtı serverin y&uuml;klənməsindən asılı olaraq 1-5 dəqiqə ilə məhdudlaşır.</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 12pt;">Elektron m&uuml;raciətin mətni 1500 işarədən &ccedil;ox olmamalıdır.</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="font-size: 12pt;">Elektron m&uuml;raciətdə qoşma fayllar olmamalıdır. Mətni uzun olan məktublar, sənəd surətləri, fotoşəkillər və yol verilən digər əlavələr Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin E-mail: &uuml;nvanına və ya adi po&ccedil;tla bu &uuml;nvana g&ouml;ndərilməlidir:</span></li>
</ul>
</div>
<p class="location" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 16px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;">Nax&ccedil;ıvan şəhəri, AZ 7000, Atat&uuml;rk k&uuml;&ccedil;əsi 19, Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi.</p>',
                'created_at' => '2022-05-10 06:08:10',
                'updated_at' => '2022-05-10 06:08:10',
            ),
            34 => 
            array (
                'id' => 35,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'rules-of-writing-a-letter-to-the-supreme-court-of-nakhchivan-ar',
                'created_at' => '2022-05-10 06:08:10',
                'updated_at' => '2022-05-10 06:08:10',
            ),
            35 => 
            array (
                'id' => 36,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'pravila-napisaniya-pisma-v-verhovnyj-sud-nahchyvanskoj-ar',
                'created_at' => '2022-05-10 06:08:10',
                'updated_at' => '2022-05-10 06:08:10',
            ),
            36 => 
            array (
                'id' => 37,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 23,
                'locale' => 'en',
                'value' => 'Judges',
                'created_at' => '2022-05-10 07:31:28',
                'updated_at' => '2022-05-10 08:32:04',
            ),
            37 => 
            array (
                'id' => 38,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 52,
                'locale' => 'en',
                'value' => 'Президиум',
                'created_at' => '2022-05-10 08:16:03',
                'updated_at' => '2022-05-11 10:18:00',
            ),
            38 => 
            array (
                'id' => 39,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 56,
                'locale' => 'en',
                'value' => 'Judges',
                'created_at' => '2022-05-10 08:16:12',
                'updated_at' => '2022-05-11 10:18:34',
            ),
            39 => 
            array (
                'id' => 40,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 64,
                'locale' => 'en',
                'value' => 'Judicial acts',
                'created_at' => '2022-05-10 08:18:10',
                'updated_at' => '2022-05-11 10:25:32',
            ),
            40 => 
            array (
                'id' => 41,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 65,
                'locale' => 'en',
                'value' => 'Decisions of the European Court of Human Rights',
                'created_at' => '2022-05-10 08:18:56',
                'updated_at' => '2022-05-11 10:26:07',
            ),
            41 => 
            array (
                'id' => 42,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 66,
                'locale' => 'en',
                'value' => 'News',
                'created_at' => '2022-05-10 08:19:48',
                'updated_at' => '2022-05-11 10:27:20',
            ),
            42 => 
            array (
                'id' => 43,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 67,
                'locale' => 'en',
                'value' => 'Reports',
                'created_at' => '2022-05-10 08:20:19',
                'updated_at' => '2022-05-11 10:27:53',
            ),
            43 => 
            array (
                'id' => 44,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 68,
                'locale' => 'en',
                'value' => 'Speeches',
                'created_at' => '2022-05-10 08:20:50',
                'updated_at' => '2022-05-11 10:28:54',
            ),
            44 => 
            array (
                'id' => 45,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 69,
                'locale' => 'en',
                'value' => 'Photo materials',
                'created_at' => '2022-05-10 08:21:15',
                'updated_at' => '2022-05-11 10:29:28',
            ),
            45 => 
            array (
                'id' => 46,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 70,
                'locale' => 'en',
                'value' => 'Video materials',
                'created_at' => '2022-05-10 08:21:41',
                'updated_at' => '2022-05-11 10:30:05',
            ),
            46 => 
            array (
                'id' => 47,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 71,
                'locale' => 'en',
                'value' => 'Articles',
                'created_at' => '2022-05-10 08:22:01',
                'updated_at' => '2022-05-11 10:30:39',
            ),
            47 => 
            array (
                'id' => 48,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 72,
                'locale' => 'en',
                'value' => 'Question and answer',
                'created_at' => '2022-05-10 08:22:25',
                'updated_at' => '2022-05-11 10:31:47',
            ),
            48 => 
            array (
                'id' => 49,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 73,
                'locale' => 'en',
                'value' => 'Educational materials',
                'created_at' => '2022-05-10 08:22:50',
                'updated_at' => '2022-05-11 10:32:42',
            ),
            49 => 
            array (
                'id' => 50,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 74,
                'locale' => 'en',
                'value' => 'Events',
                'created_at' => '2022-05-10 08:23:09',
                'updated_at' => '2022-05-11 10:33:22',
            ),
            50 => 
            array (
                'id' => 51,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 46,
                'locale' => 'en',
                'value' => 'Court',
                'created_at' => '2022-05-10 08:26:15',
                'updated_at' => '2022-05-10 08:26:15',
            ),
            51 => 
            array (
                'id' => 52,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 46,
                'locale' => 'ru',
                'value' => 'Суд',
                'created_at' => '2022-05-10 08:26:15',
                'updated_at' => '2022-05-10 08:26:15',
            ),
            52 => 
            array (
                'id' => 53,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 18,
                'locale' => 'en',
                'value' => 'Court',
                'created_at' => '2022-05-10 08:27:18',
                'updated_at' => '2022-05-10 08:27:18',
            ),
            53 => 
            array (
                'id' => 54,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 18,
                'locale' => 'ru',
                'value' => 'Суд',
                'created_at' => '2022-05-10 08:27:18',
                'updated_at' => '2022-05-10 08:27:18',
            ),
            54 => 
            array (
                'id' => 55,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 17,
                'locale' => 'en',
                'value' => 'home',
                'created_at' => '2022-05-10 08:28:28',
                'updated_at' => '2022-05-10 08:29:58',
            ),
            55 => 
            array (
                'id' => 56,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 17,
                'locale' => 'ru',
                'value' => 'home',
                'created_at' => '2022-05-10 08:28:28',
                'updated_at' => '2022-05-10 08:29:58',
            ),
            56 => 
            array (
                'id' => 57,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 20,
                'locale' => 'en',
                'value' => 'General Information',
                'created_at' => '2022-05-10 08:29:11',
                'updated_at' => '2022-05-10 08:29:11',
            ),
            57 => 
            array (
                'id' => 58,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 20,
                'locale' => 'ru',
                'value' => 'Главная Информация',
                'created_at' => '2022-05-10 08:29:11',
                'updated_at' => '2022-05-10 08:29:11',
            ),
            58 => 
            array (
                'id' => 59,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 21,
                'locale' => 'en',
                'value' => 'Chairman of the court',
                'created_at' => '2022-05-10 08:30:43',
                'updated_at' => '2022-05-10 08:30:43',
            ),
            59 => 
            array (
                'id' => 60,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 21,
                'locale' => 'ru',
                'value' => 'председатель суда',
                'created_at' => '2022-05-10 08:30:43',
                'updated_at' => '2022-05-10 08:30:43',
            ),
            60 => 
            array (
                'id' => 61,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 22,
                'locale' => 'en',
                'value' => 'Presidium',
                'created_at' => '2022-05-10 08:31:25',
                'updated_at' => '2022-05-10 08:31:25',
            ),
            61 => 
            array (
                'id' => 62,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 22,
                'locale' => 'ru',
                'value' => 'Президиум',
                'created_at' => '2022-05-10 08:31:25',
                'updated_at' => '2022-05-10 08:31:25',
            ),
            62 => 
            array (
                'id' => 63,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 23,
                'locale' => 'ru',
                'value' => 'Cудьи',
                'created_at' => '2022-05-10 08:32:04',
                'updated_at' => '2022-05-10 08:32:04',
            ),
            63 => 
            array (
                'id' => 64,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 24,
                'locale' => 'en',
                'value' => 'The structure of the court',
                'created_at' => '2022-05-10 08:32:39',
                'updated_at' => '2022-05-10 08:32:39',
            ),
            64 => 
            array (
                'id' => 65,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 24,
                'locale' => 'ru',
                'value' => 'Структура суда',
                'created_at' => '2022-05-10 08:32:39',
                'updated_at' => '2022-05-10 08:32:39',
            ),
            65 => 
            array (
                'id' => 66,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 25,
                'locale' => 'en',
                'value' => 'Judicial apparatus',
                'created_at' => '2022-05-10 08:33:11',
                'updated_at' => '2022-05-10 08:33:11',
            ),
            66 => 
            array (
                'id' => 67,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 25,
                'locale' => 'ru',
                'value' => 'Судебный аппарат',
                'created_at' => '2022-05-10 08:33:11',
                'updated_at' => '2022-05-10 08:33:11',
            ),
            67 => 
            array (
                'id' => 68,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 26,
                'locale' => 'en',
                'value' => 'Supreme Court - 90',
                'created_at' => '2022-05-10 08:33:49',
                'updated_at' => '2022-05-10 08:33:49',
            ),
            68 => 
            array (
                'id' => 69,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 26,
                'locale' => 'ru',
                'value' => 'Верховный суд - 90',
                'created_at' => '2022-05-10 08:33:49',
                'updated_at' => '2022-05-10 08:33:49',
            ),
            69 => 
            array (
                'id' => 70,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 19,
                'locale' => 'en',
                'value' => 'Legal acts',
                'created_at' => '2022-05-10 08:34:30',
                'updated_at' => '2022-05-10 08:34:30',
            ),
            70 => 
            array (
                'id' => 71,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 19,
                'locale' => 'ru',
                'value' => 'Правовые акты',
                'created_at' => '2022-05-10 08:34:30',
                'updated_at' => '2022-05-10 08:34:30',
            ),
            71 => 
            array (
                'id' => 72,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => 'Legal acts of the Republic of Azerbaijan',
                'created_at' => '2022-05-10 08:35:58',
                'updated_at' => '2022-05-10 08:35:58',
            ),
            72 => 
            array (
                'id' => 73,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 27,
                'locale' => 'ru',
                'value' => 'Правовые акты Азербайджанской Республики',
                'created_at' => '2022-05-10 08:35:58',
                'updated_at' => '2022-05-10 08:35:58',
            ),
            73 => 
            array (
                'id' => 74,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => 'Legal acts of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-10 08:36:40',
                'updated_at' => '2022-05-10 08:36:40',
            ),
            74 => 
            array (
                'id' => 75,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 28,
                'locale' => 'ru',
                'value' => 'Правовые акты Нахчыванской Автономной Республики',
                'created_at' => '2022-05-10 08:36:40',
                'updated_at' => '2022-05-10 08:36:40',
            ),
            75 => 
            array (
                'id' => 76,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 29,
                'locale' => 'en',
                'value' => 'International legal documents',
                'created_at' => '2022-05-10 08:37:18',
                'updated_at' => '2022-05-10 08:37:18',
            ),
            76 => 
            array (
                'id' => 77,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 29,
                'locale' => 'ru',
                'value' => 'Международно-правовые документы',
                'created_at' => '2022-05-10 08:37:18',
                'updated_at' => '2022-05-10 08:37:18',
            ),
            77 => 
            array (
                'id' => 78,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'Court documents',
                'created_at' => '2022-05-10 08:37:50',
                'updated_at' => '2022-05-10 08:37:50',
            ),
            78 => 
            array (
                'id' => 79,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 30,
                'locale' => 'ru',
                'value' => 'Судебные документы',
                'created_at' => '2022-05-10 08:37:50',
                'updated_at' => '2022-05-10 08:37:50',
            ),
            79 => 
            array (
                'id' => 80,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 31,
                'locale' => 'en',
                'value' => 'Decisions of the presidium',
                'created_at' => '2022-05-10 08:38:29',
                'updated_at' => '2022-05-10 08:38:29',
            ),
            80 => 
            array (
                'id' => 81,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 31,
                'locale' => 'ru',
                'value' => 'Решения президиума',
                'created_at' => '2022-05-10 08:38:29',
                'updated_at' => '2022-05-10 08:38:29',
            ),
            81 => 
            array (
                'id' => 82,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 32,
                'locale' => 'en',
                'value' => 'Judicial acts',
                'created_at' => '2022-05-10 08:39:10',
                'updated_at' => '2022-05-10 08:39:10',
            ),
            82 => 
            array (
                'id' => 83,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 32,
                'locale' => 'ru',
                'value' => 'Судебные акты',
                'created_at' => '2022-05-10 08:39:10',
                'updated_at' => '2022-05-10 08:39:10',
            ),
            83 => 
            array (
                'id' => 84,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 33,
                'locale' => 'en',
                'value' => 'Decisions of the European Court of Human Rights',
                'created_at' => '2022-05-10 08:39:42',
                'updated_at' => '2022-05-10 08:39:42',
            ),
            84 => 
            array (
                'id' => 85,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 33,
                'locale' => 'ru',
                'value' => 'Решения Европейского суда по правам человека',
                'created_at' => '2022-05-10 08:39:42',
                'updated_at' => '2022-05-10 08:39:42',
            ),
            85 => 
            array (
                'id' => 86,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 34,
                'locale' => 'en',
                'value' => 'Press Service',
                'created_at' => '2022-05-10 08:40:14',
                'updated_at' => '2022-05-10 08:40:14',
            ),
            86 => 
            array (
                'id' => 87,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 34,
                'locale' => 'ru',
                'value' => 'Пресс-служба',
                'created_at' => '2022-05-10 08:40:14',
                'updated_at' => '2022-05-10 08:40:14',
            ),
            87 => 
            array (
                'id' => 88,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 35,
                'locale' => 'en',
                'value' => 'News',
                'created_at' => '2022-05-10 08:40:46',
                'updated_at' => '2022-05-10 08:40:46',
            ),
            88 => 
            array (
                'id' => 89,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 35,
                'locale' => 'ru',
                'value' => 'Новости',
                'created_at' => '2022-05-10 08:40:46',
                'updated_at' => '2022-05-10 08:40:46',
            ),
            89 => 
            array (
                'id' => 90,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 36,
                'locale' => 'en',
                'value' => 'Reports',
                'created_at' => '2022-05-10 08:41:17',
                'updated_at' => '2022-05-10 08:41:17',
            ),
            90 => 
            array (
                'id' => 91,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 36,
                'locale' => 'ru',
                'value' => 'Отчеты',
                'created_at' => '2022-05-10 08:41:17',
                'updated_at' => '2022-05-10 08:41:17',
            ),
            91 => 
            array (
                'id' => 92,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 37,
                'locale' => 'en',
                'value' => 'Speeches',
                'created_at' => '2022-05-10 08:41:47',
                'updated_at' => '2022-05-10 08:41:47',
            ),
            92 => 
            array (
                'id' => 93,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 37,
                'locale' => 'ru',
                'value' => 'Выступления',
                'created_at' => '2022-05-10 08:41:47',
                'updated_at' => '2022-05-10 08:41:47',
            ),
            93 => 
            array (
                'id' => 94,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 38,
                'locale' => 'en',
                'value' => 'Photo materials',
                'created_at' => '2022-05-10 08:42:18',
                'updated_at' => '2022-05-10 08:42:18',
            ),
            94 => 
            array (
                'id' => 95,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 38,
                'locale' => 'ru',
                'value' => 'Фотоматериалы',
                'created_at' => '2022-05-10 08:42:18',
                'updated_at' => '2022-05-10 08:42:18',
            ),
            95 => 
            array (
                'id' => 96,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 39,
                'locale' => 'en',
                'value' => 'Video materials',
                'created_at' => '2022-05-10 08:42:48',
                'updated_at' => '2022-05-10 08:42:48',
            ),
            96 => 
            array (
                'id' => 97,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 39,
                'locale' => 'ru',
                'value' => 'Видео материалы',
                'created_at' => '2022-05-10 08:42:48',
                'updated_at' => '2022-05-10 08:42:48',
            ),
            97 => 
            array (
                'id' => 98,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 40,
                'locale' => 'en',
                'value' => 'Articles',
                'created_at' => '2022-05-10 08:43:21',
                'updated_at' => '2022-05-10 08:43:21',
            ),
            98 => 
            array (
                'id' => 99,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 40,
                'locale' => 'ru',
                'value' => 'Статьи',
                'created_at' => '2022-05-10 08:43:21',
                'updated_at' => '2022-05-10 08:43:21',
            ),
            99 => 
            array (
                'id' => 100,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 41,
                'locale' => 'en',
                'value' => 'LEGAL EDUCATION',
                'created_at' => '2022-05-10 08:43:55',
                'updated_at' => '2022-05-10 08:43:55',
            ),
            100 => 
            array (
                'id' => 101,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 41,
                'locale' => 'ru',
                'value' => 'ЮРИДИЧЕСКОЕ ОБРАЗОВАНИЕ',
                'created_at' => '2022-05-10 08:43:55',
                'updated_at' => '2022-05-10 08:43:55',
            ),
            101 => 
            array (
                'id' => 102,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 42,
                'locale' => 'en',
                'value' => 'Question and answer',
                'created_at' => '2022-05-10 08:44:29',
                'updated_at' => '2022-05-10 08:44:29',
            ),
            102 => 
            array (
                'id' => 103,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 42,
                'locale' => 'ru',
                'value' => 'Вопрос и ответ',
                'created_at' => '2022-05-10 08:44:29',
                'updated_at' => '2022-05-10 08:44:29',
            ),
            103 => 
            array (
                'id' => 104,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 43,
                'locale' => 'en',
                'value' => 'Educational materials',
                'created_at' => '2022-05-10 08:45:01',
                'updated_at' => '2022-05-10 08:45:01',
            ),
            104 => 
            array (
                'id' => 105,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 43,
                'locale' => 'ru',
                'value' => 'Образовательные материалы',
                'created_at' => '2022-05-10 08:45:01',
                'updated_at' => '2022-05-10 08:45:01',
            ),
            105 => 
            array (
                'id' => 106,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 44,
                'locale' => 'en',
                'value' => 'Events',
                'created_at' => '2022-05-10 08:45:32',
                'updated_at' => '2022-05-10 08:45:32',
            ),
            106 => 
            array (
                'id' => 107,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 44,
                'locale' => 'ru',
                'value' => 'События',
                'created_at' => '2022-05-10 08:45:32',
                'updated_at' => '2022-05-10 08:45:32',
            ),
            107 => 
            array (
                'id' => 108,
                'table_name' => 'news',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'The Supreme Court of the Nakhchivan Autonomous Republic has completed a five-day training for students on "Actual issues of family law."',
                'created_at' => '2022-05-10 10:26:50',
                'updated_at' => '2022-05-10 13:44:48',
            ),
            108 => 
            array (
                'id' => 109,
                'table_name' => 'news',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'the-supreme-court-of-the-nakhchivan-autonomous-republic-has-completed-a-five-day-training-for-students-on-actual-issues-of-family-law',
                'created_at' => '2022-05-10 10:26:50',
                'updated_at' => '2022-05-10 13:44:48',
            ),
            109 => 
            array (
                'id' => 110,
                'table_name' => 'news',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'В Верховном суде Нахчыванской Автономной Республики завершился пятидневный тренинг для студентов на тему «Актуальные вопросы семейного права».',
                'created_at' => '2022-05-10 10:27:08',
                'updated_at' => '2022-05-10 13:44:48',
            ),
            110 => 
            array (
                'id' => 111,
                'table_name' => 'news',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'v-verhovnom-sude-nahchyvanskoj-avtonomnoj-respubliki-zavershilsya-pyatidnevnyj-trening-dlya-studentov-na-temu-aktualnye-voprosy-semejnogo-prava',
                'created_at' => '2022-05-10 10:27:08',
                'updated_at' => '2022-05-10 13:44:48',
            ),
            111 => 
            array (
                'id' => 112,
                'table_name' => 'news',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<p>content en</p>',
                'created_at' => '2022-05-10 10:30:18',
                'updated_at' => '2022-05-10 13:48:43',
            ),
            112 => 
            array (
                'id' => 113,
                'table_name' => 'news',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => '<p>content ru</p>',
                'created_at' => '2022-05-10 10:30:18',
                'updated_at' => '2022-05-10 13:48:43',
            ),
            113 => 
            array (
                'id' => 114,
                'table_name' => 'faqs',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Frequently Asked Questions',
                'created_at' => '2022-05-10 11:14:38',
                'updated_at' => '2022-05-10 11:23:37',
            ),
            114 => 
            array (
                'id' => 115,
                'table_name' => 'faqs',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Часто задаваемые вопросы',
                'created_at' => '2022-05-10 11:14:38',
                'updated_at' => '2022-05-10 11:23:37',
            ),
            115 => 
            array (
                'id' => 116,
                'table_name' => 'faqs',
                'column_name' => 'content',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => '<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;">Where can I get some?</h2>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
<p>&nbsp;</p>',
                'created_at' => '2022-05-10 11:14:38',
                'updated_at' => '2022-05-10 11:14:38',
            ),
            116 => 
            array (
                'id' => 117,
                'table_name' => 'faqs',
                'column_name' => 'content',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => '<p>Где я могу получить это?</p>
<p>Есть много вариантов переходов Лорема Ипсума, но большинство из них подверглись некоторым изменениям с помощью введенного юмора или случайных слов, которые кажутся неубедительными. Если вы собираетесь использовать ссылку Lorem Ipsum, вам нужно убедиться, что в середине текста скрыто что-то смущающее. Все генераторы Lorem Ipsum в Интернете имеют тенденцию дублировать предопределенные части, когда это необходимо, и это первый настоящий генератор в Интернете. Он использует словарь из более чем 200 латинских слов, чтобы создать разумно выглядящий Lorem Ipsum, и комбинирует несколько типовых структур предложений. Таким образом, созданный Lorem Ipsum всегда свободен от повторов, привнесенного юмора или нехарактерных слов и так далее. это бесплатно.</p>',
                'created_at' => '2022-05-10 11:21:40',
                'updated_at' => '2022-05-10 11:23:37',
            ),
            117 => 
            array (
                'id' => 118,
                'table_name' => 'faqs',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,',
                'created_at' => '2022-05-10 11:26:18',
                'updated_at' => '2022-05-10 11:26:18',
            ),
            118 => 
            array (
                'id' => 119,
                'table_name' => 'faqs',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Где я могу получить это?  Есть много вариантов переходов Лорема Ипсума, но большинство из них подверглись некоторым изменениям с помощью введенного юмора или случайных слов, которые кажутся неубедительными.',
                'created_at' => '2022-05-10 11:26:18',
                'updated_at' => '2022-05-10 11:26:18',
            ),
            119 => 
            array (
                'id' => 120,
                'table_name' => 'faqs',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;">Where does it come from?</h2>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
                'created_at' => '2022-05-10 11:26:18',
                'updated_at' => '2022-05-10 11:26:18',
            ),
            120 => 
            array (
                'id' => 121,
                'table_name' => 'faqs',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => '<p>Где я могу получить это?</p>
<p>Есть много вариантов переходов Лорема Ипсума, но большинство из них подверглись некоторым изменениям с помощью введенного юмора или случайных слов, которые кажутся неубедительными. Если вы собираетесь использовать ссылку Lorem Ipsum, вам нужно убедиться, что в середине текста скрыто что-то смущающее. Все генераторы Lorem Ipsum в Интернете имеют тенденцию дублировать предопределенные части, когда это необходимо, и это первый настоящий генератор в Интернете. Он использует словарь из более чем 200 латинских слов, чтобы создать разумно выглядящий Lorem Ipsum, и комбинирует несколько типовых структур предложений. Таким образом, созданный Lorem Ipsum всегда свободен от повторов, привнесенного юмора или нехарактерных слов и так далее. это бесплатно.</p>',
                'created_at' => '2022-05-10 11:26:18',
                'updated_at' => '2022-05-10 11:26:18',
            ),
            121 => 
            array (
                'id' => 122,
                'table_name' => 'faqs',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Where can I get some?',
                'created_at' => '2022-05-10 11:27:26',
                'updated_at' => '2022-05-10 11:27:26',
            ),
            122 => 
            array (
                'id' => 123,
                'table_name' => 'faqs',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Где я могу получить это?',
                'created_at' => '2022-05-10 11:27:26',
                'updated_at' => '2022-05-10 11:27:26',
            ),
            123 => 
            array (
                'id' => 124,
                'table_name' => 'faqs',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p>Where can I get some?</p>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words etc.</p>',
                'created_at' => '2022-05-10 11:27:26',
                'updated_at' => '2022-05-10 11:27:26',
            ),
            124 => 
            array (
                'id' => 125,
                'table_name' => 'faqs',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p>Где я могу получить это?</p>
<p>Есть много вариантов переходов Лорема Ипсума, но большинство из них подверглись некоторым изменениям с помощью введенного юмора или случайных слов, которые кажутся неубедительными. Если вы собираетесь использовать ссылку Lorem Ipsum, вам нужно убедиться, что в середине текста скрыто что-то смущающее. Все генераторы Lorem Ipsum в Интернете имеют тенденцию дублировать предопределенные части, когда это необходимо, и это первый настоящий генератор в Интернете. Он использует словарь из более чем 200 латинских слов, чтобы создать разумно выглядящий Lorem Ipsum, и комбинирует несколько типовых структур предложений. Таким образом, созданный Lorem Ipsum всегда свободен от повторов, привнесенного юмора или нехарактерных слов и так далее. это бесплатно.</p>',
                'created_at' => '2022-05-10 11:27:26',
                'updated_at' => '2022-05-10 11:27:26',
            ),
            125 => 
            array (
                'id' => 126,
                'table_name' => 'supremecourts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Supreme Court of the Nakhchivan Autonomous Republic - 90',
                'created_at' => '2022-05-10 12:18:52',
                'updated_at' => '2022-05-10 12:18:52',
            ),
            126 => 
            array (
                'id' => 127,
                'table_name' => 'supremecourts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Верховный суд Нахчыванской Автономной Республики - 90',
                'created_at' => '2022-05-10 12:18:52',
                'updated_at' => '2022-05-10 12:18:52',
            ),
            127 => 
            array (
                'id' => 128,
                'table_name' => 'supremecourts',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'supreme-court-of-the-nakhchivan-autonomous-republic-90',
                'created_at' => '2022-05-10 12:18:52',
                'updated_at' => '2022-05-10 12:18:52',
            ),
            128 => 
            array (
                'id' => 129,
                'table_name' => 'supremecourts',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'verhovnyj-sud-nahchyvanskoj-avtonomnoj-respubliki-90',
                'created_at' => '2022-05-10 12:18:52',
                'updated_at' => '2022-05-10 12:18:52',
            ),
            129 => 
            array (
                'id' => 130,
                'table_name' => 'supremecourts',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p>Content en</p>',
                'created_at' => '2022-05-10 12:18:52',
                'updated_at' => '2022-05-10 12:18:52',
            ),
            130 => 
            array (
                'id' => 131,
                'table_name' => 'supremecourts',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p>Content ru</p>',
                'created_at' => '2022-05-10 12:18:52',
                'updated_at' => '2022-05-10 12:18:52',
            ),
            131 => 
            array (
                'id' => 132,
                'table_name' => 'supremecourts',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Order of the Chairman of the Supreme Assembly of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-10 12:21:32',
                'updated_at' => '2022-05-10 12:21:32',
            ),
            132 => 
            array (
                'id' => 133,
                'table_name' => 'supremecourts',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Распоряжение Председателя Верховного Собрания Нахчыванской Автономной Республики',
                'created_at' => '2022-05-10 12:21:32',
                'updated_at' => '2022-05-10 12:21:32',
            ),
            133 => 
            array (
                'id' => 134,
                'table_name' => 'supremecourts',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'order-of-the-chairman-of-the-supreme-assembly-of-the-nakhchivan-autonomous-republic',
                'created_at' => '2022-05-10 12:21:32',
                'updated_at' => '2022-05-10 12:21:32',
            ),
            134 => 
            array (
                'id' => 135,
                'table_name' => 'supremecourts',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'rasporyazhenie-predsedatelya-verhovnogo-sobraniya-nahchyvanskoj-avtonomnoj-respubliki',
                'created_at' => '2022-05-10 12:21:32',
                'updated_at' => '2022-05-10 12:21:32',
            ),
            135 => 
            array (
                'id' => 136,
                'table_name' => 'supremecourts',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; text-align: center; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-indent: 1cm;"><span style="color: #000000; font-family: Times New Roman, serif;"><span style="font-size: 21.3333px;"><strong>Order of the Chairman of the Supreme Assembly of the Nakhchivan Autonomous Republic on awarding employees of the Supreme Court of the Nakhchivan Autonomous Republic</strong></span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; text-align: center; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-indent: 1cm;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;">Guided by paragraph 21 of Part II of Article 5 of the Constitution of the Nakhchivan Autonomous Republic <span style="box-sizing: border-box; font-weight: bold;">I decide:</span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;">For effective activities in the judiciary and civil service in the Nakhchivan Autonomous Republic:</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;">Quliyev V&uuml;qar Kərim oğluna</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;">Mirzəyev İlqar Məhərrəm oğluna &ndash;&nbsp;</span><span style="color: #000000; font-family: Times New Roman, serif;"><span style="font-size: 17.3333px;"><strong>Honorary title "Honored Lawyer";</strong></span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;">Vəliyev Yunis Əziz oğluna &ndash;&nbsp;</span><span style="color: #000000; font-family: Times New Roman, serif;"><span style="font-size: 17.3333px;"><strong>Honorary title "Honored Civil Servant";</strong></span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;">Seyidova Xasa Seyidəli qızına &ndash;&nbsp;</span><span style="color: #000000; font-family: Times New Roman, serif;"><span style="font-size: 17.3333px;"><strong>To award the badge "For valiant work".</strong></span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: right;"><span style="box-sizing: border-box; font-weight: bold;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 18.4px; font-family: \'Times New Roman\', serif;">Vasif TALIBOV</span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: right;"><span style="box-sizing: border-box; font-weight: bold;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 18.4px; font-family: \'Times New Roman\', serif;">Chairman of the Supreme Assembly of the Nakhchivan Autonomous Republic</span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: right;"><em style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 13pt; line-height: 18.4px; font-family: \'Times New Roman\', serif;">Nakhchivan city, October 2, 2015</span></em></p>',
                'created_at' => '2022-05-10 12:21:32',
                'updated_at' => '2022-05-10 12:21:32',
            ),
            136 => 
            array (
                'id' => 137,
                'table_name' => 'supremecourts',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => '<p>Content ru</p>',
                'created_at' => '2022-05-10 12:21:32',
                'updated_at' => '2022-05-10 12:21:32',
            ),
            137 => 
            array (
                'id' => 138,
                'table_name' => 'supremecourts',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'HONORARY DECREE OF THE SUPREME ASSEMBLY OF THE NAKHCHIVAN AUTONOMOUS REPUBLIC',
                'created_at' => '2022-05-10 12:22:29',
                'updated_at' => '2022-05-10 12:22:29',
            ),
            138 => 
            array (
                'id' => 139,
                'table_name' => 'supremecourts',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'ПОЧЕТНЫЙ ДЕКРЕТ ВЕРХОВНОГО СОБРАНИЯ НАХЧЫВАНСКОЙ АВТОНОМНОЙ РЕСПУБЛИКИ',
                'created_at' => '2022-05-10 12:22:29',
                'updated_at' => '2022-05-10 12:22:29',
            ),
            139 => 
            array (
                'id' => 140,
                'table_name' => 'supremecourts',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'honorary-decree-of-the-supreme-assembly-of-the-nakhchivan-autonomous-republic',
                'created_at' => '2022-05-10 12:22:29',
                'updated_at' => '2022-05-10 12:22:29',
            ),
            140 => 
            array (
                'id' => 141,
                'table_name' => 'supremecourts',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'pochetnyj-dekret-verhovnogo-sobraniya-nahchyvanskoj-avtonomnoj-respubliki',
                'created_at' => '2022-05-10 12:22:29',
                'updated_at' => '2022-05-10 12:22:29',
            ),
            141 => 
            array (
                'id' => 142,
                'table_name' => 'supremecourts',
                'column_name' => 'content',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Times New Roman\', serif; text-align: center;"><img class="decree-img" style="box-sizing: border-box; border: 0px; vertical-align: middle; width: 150px; height: 160px;" src="http://alimehkemetest.nakhchivan.az/storage/courts/January2022/gerb.png" alt="" /></p>
<div class="decree-info" style="box-sizing: border-box; color: #333333; font-family: \'Times New Roman\', serif; text-align: center;">
<h1 class="decree-title" style="box-sizing: border-box; font-size: 30px; margin: 30px 0px; line-height: 1.1; font-family: inherit; color: #548dd4;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI<br style="box-sizing: border-box;" />ALİ MƏCLİSİNİN</h1>
<h1 class="decree-titles" style="box-sizing: border-box; font-size: 36px; margin: 30px 0px; font-weight: 500; line-height: 1.1; font-family: inherit; color: #ff0000;">FƏXRİ FƏRMANI<br style="box-sizing: border-box;" />№ 48</h1>
<p class="decree-black" style="box-sizing: border-box; margin: 30px 0px; font-size: 20px; font-style: italic;">Nax&ccedil;ıvan Muxtar Respublikasının<br style="box-sizing: border-box;" />Ali Məhkəməsi səmərəli<br style="box-sizing: border-box;" />fəaliyyətinə g&ouml;rə</p>
<p class="decree-blue" style="box-sizing: border-box; margin: 30px 0px; color: #548dd4; font-size: 22px;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI<br style="box-sizing: border-box;" />ALİ MƏCLİSİNİN<br style="box-sizing: border-box;" />FƏXRİ FƏRMANI İLƏ TƏLTİF EDİLMİŞDİR</p>
<p class="decree-endblack" style="box-sizing: border-box; margin: 0px 50px 10px 0px; font-size: 20px; text-align: right;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI<br style="box-sizing: border-box;" />ALİ MƏCLİSİNİN SƏDRİ: VASİF TALIBOV</p>
<p class="decree-endblack end" style="box-sizing: border-box; margin: 0px 50px 10px 0px; text-align: right;">02 oktyabr 2015-ci il</p>
</div>',
                'created_at' => '2022-05-10 12:22:29',
                'updated_at' => '2022-05-10 12:22:29',
            ),
            142 => 
            array (
                'id' => 143,
                'table_name' => 'supremecourts',
                'column_name' => 'content',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => '<p>Content ru</p>',
                'created_at' => '2022-05-10 12:22:29',
                'updated_at' => '2022-05-10 12:22:29',
            ),
            143 => 
            array (
                'id' => 144,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Constitution, Codes and Laws',
                'created_at' => '2022-05-10 12:37:21',
                'updated_at' => '2022-05-10 12:37:21',
            ),
            144 => 
            array (
                'id' => 145,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'Конституция, кодексы и законы',
                'created_at' => '2022-05-10 12:37:21',
                'updated_at' => '2022-05-10 12:37:21',
            ),
            145 => 
            array (
                'id' => 146,
                'table_name' => 'legalacts',
                'column_name' => 'link',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => '\\constitution',
                'created_at' => '2022-05-10 12:37:21',
                'updated_at' => '2022-05-10 12:37:21',
            ),
            146 => 
            array (
                'id' => 147,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'constitution-codes-and-laws',
                'created_at' => '2022-05-10 12:37:21',
                'updated_at' => '2022-05-10 12:37:21',
            ),
            147 => 
            array (
                'id' => 148,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'konstituciya-kodeksy-i-zakony',
                'created_at' => '2022-05-10 12:37:21',
                'updated_at' => '2022-05-10 12:37:21',
            ),
            148 => 
            array (
                'id' => 149,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Decrees and Orders',
                'created_at' => '2022-05-10 12:39:08',
                'updated_at' => '2022-05-10 12:39:08',
            ),
            149 => 
            array (
                'id' => 150,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Указы и распоряжения',
                'created_at' => '2022-05-10 12:39:08',
                'updated_at' => '2022-05-10 12:39:08',
            ),
            150 => 
            array (
                'id' => 151,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'decrees-and-orders',
                'created_at' => '2022-05-10 12:39:08',
                'updated_at' => '2022-05-10 12:39:08',
            ),
            151 => 
            array (
                'id' => 152,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'ukazy-i-rasporyazheniya',
                'created_at' => '2022-05-10 12:39:08',
                'updated_at' => '2022-05-10 12:39:08',
            ),
            152 => 
            array (
                'id' => 153,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Decisions of the Milli Majlis',
                'created_at' => '2022-05-10 12:39:57',
                'updated_at' => '2022-05-10 12:39:57',
            ),
            153 => 
            array (
                'id' => 154,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Решения Милли Меджлиса',
                'created_at' => '2022-05-10 12:39:57',
                'updated_at' => '2022-05-10 12:39:57',
            ),
            154 => 
            array (
                'id' => 155,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'decisions-of-the-milli-majlis',
                'created_at' => '2022-05-10 12:39:57',
                'updated_at' => '2022-05-10 12:39:57',
            ),
            155 => 
            array (
                'id' => 156,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'resheniya-milli-medzhlisa',
                'created_at' => '2022-05-10 12:39:57',
                'updated_at' => '2022-05-10 12:39:57',
            ),
            156 => 
            array (
                'id' => 157,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Decisions of the Constitutional Court',
                'created_at' => '2022-05-10 12:40:48',
                'updated_at' => '2022-05-10 12:40:48',
            ),
            157 => 
            array (
                'id' => 158,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Решения Конституционного суда',
                'created_at' => '2022-05-10 12:40:48',
                'updated_at' => '2022-05-10 12:40:48',
            ),
            158 => 
            array (
                'id' => 159,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'decisions-of-the-constitutional-court',
                'created_at' => '2022-05-10 12:40:48',
                'updated_at' => '2022-05-10 12:40:48',
            ),
            159 => 
            array (
                'id' => 160,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'resheniya-konstitucionnogo-suda',
                'created_at' => '2022-05-10 12:40:48',
                'updated_at' => '2022-05-10 12:40:48',
            ),
            160 => 
            array (
                'id' => 161,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Plenum Decisions of the Supreme Court',
                'created_at' => '2022-05-10 12:41:38',
                'updated_at' => '2022-05-10 12:41:38',
            ),
            161 => 
            array (
                'id' => 162,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Решения Пленума Верховного Суда',
                'created_at' => '2022-05-10 12:41:38',
                'updated_at' => '2022-05-10 12:41:38',
            ),
            162 => 
            array (
                'id' => 163,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'plenum-decisions-of-the-supreme-court',
                'created_at' => '2022-05-10 12:41:38',
                'updated_at' => '2022-05-10 12:41:38',
            ),
            163 => 
            array (
                'id' => 164,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'resheniya-plenuma-verhovnogo-suda',
                'created_at' => '2022-05-10 12:41:38',
                'updated_at' => '2022-05-10 12:41:38',
            ),
            164 => 
            array (
                'id' => 165,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Legal acts of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-10 12:42:20',
                'updated_at' => '2022-05-10 12:42:20',
            ),
            165 => 
            array (
                'id' => 166,
                'table_name' => 'legalacts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Правовые акты Нахчыванской Автономной Республики',
                'created_at' => '2022-05-10 12:42:20',
                'updated_at' => '2022-05-10 12:42:20',
            ),
            166 => 
            array (
                'id' => 167,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'legal-acts-of-the-nakhchivan-autonomous-republic',
                'created_at' => '2022-05-10 12:42:20',
                'updated_at' => '2022-05-10 12:42:20',
            ),
            167 => 
            array (
                'id' => 168,
                'table_name' => 'legalacts',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'pravovye-akty-nahchyvanskoj-avtonomnoj-respubliki',
                'created_at' => '2022-05-10 12:42:20',
                'updated_at' => '2022-05-10 12:42:20',
            ),
            168 => 
            array (
                'id' => 169,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 35,
                'locale' => 'en',
                'value' => 'CONSTITUTION OF THE REPUBLIC OF AZERBAIJAN',
                'created_at' => '2022-05-10 12:49:45',
                'updated_at' => '2022-05-10 12:49:45',
            ),
            169 => 
            array (
                'id' => 170,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 35,
                'locale' => 'ru',
                'value' => 'КОНСТИТУЦИЯ АЗЕРБАЙДЖАНСКОЙ РЕСПУБЛИКИ',
                'created_at' => '2022-05-10 12:49:45',
                'updated_at' => '2022-05-10 12:49:45',
            ),
            170 => 
            array (
                'id' => 171,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 35,
                'locale' => 'en',
                'value' => 'constitution-of-the-republic-of-azerbaijan',
                'created_at' => '2022-05-10 12:49:45',
                'updated_at' => '2022-05-10 12:49:45',
            ),
            171 => 
            array (
                'id' => 172,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 35,
                'locale' => 'ru',
                'value' => 'konstituciya-azerbajdzhanskoj-respubliki',
                'created_at' => '2022-05-10 12:49:45',
                'updated_at' => '2022-05-10 12:49:45',
            ),
            172 => 
            array (
                'id' => 173,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 34,
                'locale' => 'en',
                'value' => 'Constitution of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-10 12:50:34',
                'updated_at' => '2022-05-10 12:50:34',
            ),
            173 => 
            array (
                'id' => 174,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 34,
                'locale' => 'ru',
                'value' => 'Конституция Нахчыванской Автономной Республики',
                'created_at' => '2022-05-10 12:50:34',
                'updated_at' => '2022-05-10 12:50:34',
            ),
            174 => 
            array (
                'id' => 175,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 34,
                'locale' => 'en',
                'value' => 'constitution-of-the-nakhchivan-autonomous-republic',
                'created_at' => '2022-05-10 12:50:34',
                'updated_at' => '2022-05-10 12:50:34',
            ),
            175 => 
            array (
                'id' => 176,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 34,
                'locale' => 'ru',
                'value' => 'konstituciya-nahchyvanskoj-avtonomnoj-respubliki',
                'created_at' => '2022-05-10 12:50:34',
                'updated_at' => '2022-05-10 12:50:34',
            ),
            176 => 
            array (
                'id' => 177,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 33,
                'locale' => 'en',
                'value' => 'FAMILY CODE',
                'created_at' => '2022-05-10 12:51:13',
                'updated_at' => '2022-05-10 12:51:13',
            ),
            177 => 
            array (
                'id' => 178,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 33,
                'locale' => 'ru',
                'value' => 'СЕМЕЙНЫЙ КОДЕКС',
                'created_at' => '2022-05-10 12:51:13',
                'updated_at' => '2022-05-10 12:51:13',
            ),
            178 => 
            array (
                'id' => 179,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 33,
                'locale' => 'en',
                'value' => 'family-code',
                'created_at' => '2022-05-10 12:51:13',
                'updated_at' => '2022-05-10 12:51:13',
            ),
            179 => 
            array (
                'id' => 180,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 33,
                'locale' => 'ru',
                'value' => 'semejnyj-kodeks',
                'created_at' => '2022-05-10 12:51:13',
                'updated_at' => '2022-05-10 12:51:13',
            ),
            180 => 
            array (
                'id' => 181,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 32,
                'locale' => 'en',
                'value' => 'CRIMINAL CODE',
                'created_at' => '2022-05-10 12:51:50',
                'updated_at' => '2022-05-10 12:51:50',
            ),
            181 => 
            array (
                'id' => 182,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 32,
                'locale' => 'ru',
                'value' => 'УГОЛОВНЫЙ КОДЕКС',
                'created_at' => '2022-05-10 12:51:50',
                'updated_at' => '2022-05-10 12:51:50',
            ),
            182 => 
            array (
                'id' => 183,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 32,
                'locale' => 'en',
                'value' => 'criminal-code',
                'created_at' => '2022-05-10 12:51:50',
                'updated_at' => '2022-05-10 12:51:50',
            ),
            183 => 
            array (
                'id' => 184,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 32,
                'locale' => 'ru',
                'value' => 'ugolovnyj-kodeks',
                'created_at' => '2022-05-10 12:51:50',
                'updated_at' => '2022-05-10 12:51:50',
            ),
            184 => 
            array (
                'id' => 185,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 31,
                'locale' => 'en',
                'value' => 'CRIMINAL PROCEDURAL CODE',
                'created_at' => '2022-05-10 12:52:26',
                'updated_at' => '2022-05-10 12:52:26',
            ),
            185 => 
            array (
                'id' => 186,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 31,
                'locale' => 'ru',
                'value' => 'УГОЛОВНО-ПРОЦЕССУАЛЬНЫЙ КОДЕКС',
                'created_at' => '2022-05-10 12:52:26',
                'updated_at' => '2022-05-10 12:52:26',
            ),
            186 => 
            array (
                'id' => 187,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 31,
                'locale' => 'en',
                'value' => 'criminal-procedural-code',
                'created_at' => '2022-05-10 12:52:26',
                'updated_at' => '2022-05-10 12:52:26',
            ),
            187 => 
            array (
                'id' => 188,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 31,
                'locale' => 'ru',
                'value' => 'ugolovno-processualnyj-kodeks',
                'created_at' => '2022-05-10 12:52:26',
                'updated_at' => '2022-05-10 12:52:26',
            ),
            188 => 
            array (
                'id' => 189,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'EXECUTION CODE OF PENALTIES',
                'created_at' => '2022-05-10 12:53:03',
                'updated_at' => '2022-05-10 12:53:03',
            ),
            189 => 
            array (
                'id' => 190,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 30,
                'locale' => 'ru',
                'value' => 'ИСПОЛНИТЕЛЬНЫЙ КОДЕКС ШТРАФОВ',
                'created_at' => '2022-05-10 12:53:03',
                'updated_at' => '2022-05-10 12:53:03',
            ),
            190 => 
            array (
                'id' => 191,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'execution-code-of-penalties',
                'created_at' => '2022-05-10 12:53:03',
                'updated_at' => '2022-05-10 12:53:03',
            ),
            191 => 
            array (
                'id' => 192,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 30,
                'locale' => 'ru',
                'value' => 'ispolnitelnyj-kodeks-shtrafov',
                'created_at' => '2022-05-10 12:53:03',
                'updated_at' => '2022-05-10 12:53:03',
            ),
            192 => 
            array (
                'id' => 193,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 29,
                'locale' => 'en',
                'value' => 'LABOR CODE',
                'created_at' => '2022-05-10 12:53:41',
                'updated_at' => '2022-05-10 12:53:41',
            ),
            193 => 
            array (
                'id' => 194,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 29,
                'locale' => 'ru',
                'value' => 'ТРУДОВОЙ КОДЕКС',
                'created_at' => '2022-05-10 12:53:41',
                'updated_at' => '2022-05-10 12:53:41',
            ),
            194 => 
            array (
                'id' => 195,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 29,
                'locale' => 'en',
                'value' => 'labor-code',
                'created_at' => '2022-05-10 12:53:41',
                'updated_at' => '2022-05-10 12:53:41',
            ),
            195 => 
            array (
                'id' => 196,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 29,
                'locale' => 'ru',
                'value' => 'trudovoj-kodeks',
                'created_at' => '2022-05-10 12:53:41',
                'updated_at' => '2022-05-10 12:53:41',
            ),
            196 => 
            array (
                'id' => 197,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => 'CUSTOMS CODE',
                'created_at' => '2022-05-10 12:54:16',
                'updated_at' => '2022-05-10 12:54:16',
            ),
            197 => 
            array (
                'id' => 198,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 28,
                'locale' => 'ru',
                'value' => 'ТАМОЖЕННЫЙ КОДЕКС',
                'created_at' => '2022-05-10 12:54:16',
                'updated_at' => '2022-05-10 12:54:16',
            ),
            198 => 
            array (
                'id' => 199,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => 'customs-code',
                'created_at' => '2022-05-10 12:54:16',
                'updated_at' => '2022-05-10 12:54:16',
            ),
            199 => 
            array (
                'id' => 200,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 28,
                'locale' => 'ru',
                'value' => 'tamozhennyj-kodeks',
                'created_at' => '2022-05-10 12:54:16',
                'updated_at' => '2022-05-10 12:54:16',
            ),
            200 => 
            array (
                'id' => 201,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => 'THE CODE OF ADMINISTRATIVE OFFENCES',
                'created_at' => '2022-05-10 12:54:56',
                'updated_at' => '2022-05-10 12:54:56',
            ),
            201 => 
            array (
                'id' => 202,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 27,
                'locale' => 'ru',
                'value' => 'КОДЕКС ОБ АДМИНИСТРАТИВНЫХ ПРАВОНАРУШЕНИЯХ',
                'created_at' => '2022-05-10 12:54:56',
                'updated_at' => '2022-05-10 12:54:56',
            ),
            202 => 
            array (
                'id' => 203,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => 'the-code-of-administrative-offences',
                'created_at' => '2022-05-10 12:54:56',
                'updated_at' => '2022-05-10 12:54:56',
            ),
            203 => 
            array (
                'id' => 204,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 27,
                'locale' => 'ru',
                'value' => 'kodeks-ob-administrativnyh-pravonarusheniyah',
                'created_at' => '2022-05-10 12:54:56',
                'updated_at' => '2022-05-10 12:54:56',
            ),
            204 => 
            array (
                'id' => 205,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 26,
                'locale' => 'en',
                'value' => 'ADMINISTRATIVE PROCEDURAL CODE',
                'created_at' => '2022-05-10 12:55:54',
                'updated_at' => '2022-05-10 12:55:54',
            ),
            205 => 
            array (
                'id' => 206,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 26,
                'locale' => 'ru',
                'value' => 'АДМИНИСТРАТИВНО-ПРОЦЕССУАЛЬНЫЙ КОДЕКС',
                'created_at' => '2022-05-10 12:55:54',
                'updated_at' => '2022-05-10 12:55:54',
            ),
            206 => 
            array (
                'id' => 207,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 26,
                'locale' => 'en',
                'value' => 'administrative-procedural-code',
                'created_at' => '2022-05-10 12:55:54',
                'updated_at' => '2022-05-10 12:55:54',
            ),
            207 => 
            array (
                'id' => 208,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 26,
                'locale' => 'ru',
                'value' => 'administrativno-processualnyj-kodeks',
                'created_at' => '2022-05-10 12:55:54',
                'updated_at' => '2022-05-10 12:55:54',
            ),
            208 => 
            array (
                'id' => 209,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 25,
                'locale' => 'en',
                'value' => 'FOREST CODE',
                'created_at' => '2022-05-10 13:08:10',
                'updated_at' => '2022-05-10 13:08:10',
            ),
            209 => 
            array (
                'id' => 210,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 25,
                'locale' => 'ru',
                'value' => 'ЛЕСНОЙ КОДЕКС',
                'created_at' => '2022-05-10 13:08:10',
                'updated_at' => '2022-05-10 13:08:10',
            ),
            210 => 
            array (
                'id' => 211,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 25,
                'locale' => 'en',
                'value' => 'forest-code',
                'created_at' => '2022-05-10 13:08:10',
                'updated_at' => '2022-05-10 13:08:10',
            ),
            211 => 
            array (
                'id' => 212,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 25,
                'locale' => 'ru',
                'value' => 'lesnoj-kodeks',
                'created_at' => '2022-05-10 13:08:10',
                'updated_at' => '2022-05-10 13:08:10',
            ),
            212 => 
            array (
                'id' => 213,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 24,
                'locale' => 'en',
                'value' => 'HOUSING CODE',
                'created_at' => '2022-05-10 13:08:53',
                'updated_at' => '2022-05-10 13:08:53',
            ),
            213 => 
            array (
                'id' => 214,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 24,
                'locale' => 'ru',
                'value' => 'ЖИЛИЩНЫЙ КОДЕКС',
                'created_at' => '2022-05-10 13:08:53',
                'updated_at' => '2022-05-10 13:08:53',
            ),
            214 => 
            array (
                'id' => 215,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 24,
                'locale' => 'en',
                'value' => 'housing-code',
                'created_at' => '2022-05-10 13:08:53',
                'updated_at' => '2022-05-10 13:08:53',
            ),
            215 => 
            array (
                'id' => 216,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 24,
                'locale' => 'ru',
                'value' => 'zhilishnyj-kodeks',
                'created_at' => '2022-05-10 13:08:53',
                'updated_at' => '2022-05-10 13:08:53',
            ),
            216 => 
            array (
                'id' => 217,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 23,
                'locale' => 'en',
                'value' => 'MIGRATION CODE',
                'created_at' => '2022-05-10 13:09:35',
                'updated_at' => '2022-05-10 13:09:35',
            ),
            217 => 
            array (
                'id' => 218,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 23,
                'locale' => 'ru',
                'value' => 'КОД МИГРАЦИИ',
                'created_at' => '2022-05-10 13:09:35',
                'updated_at' => '2022-05-10 13:09:35',
            ),
            218 => 
            array (
                'id' => 219,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 23,
                'locale' => 'en',
                'value' => 'migration-code',
                'created_at' => '2022-05-10 13:09:35',
                'updated_at' => '2022-05-10 13:09:35',
            ),
            219 => 
            array (
                'id' => 220,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 23,
                'locale' => 'ru',
                'value' => 'kod-migracii',
                'created_at' => '2022-05-10 13:09:35',
                'updated_at' => '2022-05-10 13:09:35',
            ),
            220 => 
            array (
                'id' => 221,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 22,
                'locale' => 'en',
                'value' => 'CIVIL CODE',
                'created_at' => '2022-05-10 13:10:13',
                'updated_at' => '2022-05-10 13:10:13',
            ),
            221 => 
            array (
                'id' => 222,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 22,
                'locale' => 'ru',
                'value' => 'ГРАЖДАНСКИЙ КОДЕКС',
                'created_at' => '2022-05-10 13:10:13',
                'updated_at' => '2022-05-10 13:10:13',
            ),
            222 => 
            array (
                'id' => 223,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 22,
                'locale' => 'en',
                'value' => 'civil-code',
                'created_at' => '2022-05-10 13:10:13',
                'updated_at' => '2022-05-10 13:10:13',
            ),
            223 => 
            array (
                'id' => 224,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 22,
                'locale' => 'ru',
                'value' => 'grazhdanskij-kodeks',
                'created_at' => '2022-05-10 13:10:13',
                'updated_at' => '2022-05-10 13:10:13',
            ),
            224 => 
            array (
                'id' => 225,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 16,
                'locale' => 'en',
                'value' => 'LAND CODE',
                'created_at' => '2022-05-10 13:10:51',
                'updated_at' => '2022-05-10 13:10:51',
            ),
            225 => 
            array (
                'id' => 226,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 16,
                'locale' => 'ru',
                'value' => 'ЗЕМЕЛЬНЫЙ КОДЕКС',
                'created_at' => '2022-05-10 13:10:51',
                'updated_at' => '2022-05-10 13:10:51',
            ),
            226 => 
            array (
                'id' => 227,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 16,
                'locale' => 'en',
                'value' => 'land-code',
                'created_at' => '2022-05-10 13:10:51',
                'updated_at' => '2022-05-10 13:10:51',
            ),
            227 => 
            array (
                'id' => 228,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 16,
                'locale' => 'ru',
                'value' => 'zemelnyj-kodeks',
                'created_at' => '2022-05-10 13:10:51',
                'updated_at' => '2022-05-10 13:10:51',
            ),
            228 => 
            array (
                'id' => 229,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 17,
                'locale' => 'en',
                'value' => 'COMMERCIAL SHIPPING CODE',
                'created_at' => '2022-05-10 13:11:29',
                'updated_at' => '2022-05-10 13:11:29',
            ),
            229 => 
            array (
                'id' => 230,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 17,
                'locale' => 'ru',
                'value' => 'КОММЕРЧЕСКИЙ КОД ДОСТАВКИ',
                'created_at' => '2022-05-10 13:11:29',
                'updated_at' => '2022-05-10 13:11:29',
            ),
            230 => 
            array (
                'id' => 231,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 17,
                'locale' => 'en',
                'value' => 'commercial-shipping-code',
                'created_at' => '2022-05-10 13:11:29',
                'updated_at' => '2022-05-10 13:11:29',
            ),
            231 => 
            array (
                'id' => 232,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 17,
                'locale' => 'ru',
                'value' => 'kommercheskij-kod-dostavki',
                'created_at' => '2022-05-10 13:11:29',
                'updated_at' => '2022-05-10 13:11:29',
            ),
            232 => 
            array (
                'id' => 233,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 18,
                'locale' => 'en',
                'value' => 'URBAN PLANNING AND CONSTRUCTION CODE',
                'created_at' => '2022-05-10 13:12:12',
                'updated_at' => '2022-05-10 13:12:12',
            ),
            233 => 
            array (
                'id' => 234,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 18,
                'locale' => 'ru',
                'value' => 'ГРАДОСТРОИТЕЛЬНЫЙ НОРМ ПЛАНИРОВАНИЯ И СТРОИТЕЛЬСТВА',
                'created_at' => '2022-05-10 13:12:12',
                'updated_at' => '2022-05-10 13:12:12',
            ),
            234 => 
            array (
                'id' => 235,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 18,
                'locale' => 'en',
                'value' => 'urban-planning-and-construction-code',
                'created_at' => '2022-05-10 13:12:12',
                'updated_at' => '2022-05-10 13:12:12',
            ),
            235 => 
            array (
                'id' => 236,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 18,
                'locale' => 'ru',
                'value' => 'gradostroitelnyj-norm-planirovaniya-i-stroitelstva',
                'created_at' => '2022-05-10 13:12:12',
                'updated_at' => '2022-05-10 13:12:12',
            ),
            236 => 
            array (
                'id' => 237,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 19,
                'locale' => 'en',
                'value' => 'WATER CODE',
                'created_at' => '2022-05-10 13:12:48',
                'updated_at' => '2022-05-10 13:12:48',
            ),
            237 => 
            array (
                'id' => 238,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 19,
                'locale' => 'ru',
                'value' => 'ВОДНЫЙ КОД',
                'created_at' => '2022-05-10 13:12:48',
                'updated_at' => '2022-05-10 13:12:48',
            ),
            238 => 
            array (
                'id' => 239,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 19,
                'locale' => 'en',
                'value' => 'water-code',
                'created_at' => '2022-05-10 13:12:48',
                'updated_at' => '2022-05-10 13:12:48',
            ),
            239 => 
            array (
                'id' => 240,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 19,
                'locale' => 'ru',
                'value' => 'vodnyj-kod',
                'created_at' => '2022-05-10 13:12:48',
                'updated_at' => '2022-05-10 13:12:48',
            ),
            240 => 
            array (
                'id' => 241,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 20,
                'locale' => 'en',
                'value' => 'ELECTION CODE',
                'created_at' => '2022-05-10 13:13:23',
                'updated_at' => '2022-05-10 13:13:23',
            ),
            241 => 
            array (
                'id' => 242,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 20,
                'locale' => 'ru',
                'value' => 'ИЗБИРАТЕЛЬНЫЙ КОДЕКС',
                'created_at' => '2022-05-10 13:13:23',
                'updated_at' => '2022-05-10 13:13:23',
            ),
            242 => 
            array (
                'id' => 243,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 20,
                'locale' => 'en',
                'value' => 'election-code',
                'created_at' => '2022-05-10 13:13:23',
                'updated_at' => '2022-05-10 13:13:23',
            ),
            243 => 
            array (
                'id' => 244,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 20,
                'locale' => 'ru',
                'value' => 'izbiratelnyj-kodeks',
                'created_at' => '2022-05-10 13:13:23',
                'updated_at' => '2022-05-10 13:13:23',
            ),
            244 => 
            array (
                'id' => 245,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 21,
                'locale' => 'en',
                'value' => 'CODE OF CIVIL PROCEDURE',
                'created_at' => '2022-05-10 13:13:57',
                'updated_at' => '2022-05-10 13:13:57',
            ),
            245 => 
            array (
                'id' => 246,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 21,
                'locale' => 'ru',
                'value' => 'ГРАЖДАНСКИЙ ПРОЦЕССУАЛЬНЫЙ КОДЕКС',
                'created_at' => '2022-05-10 13:13:57',
                'updated_at' => '2022-05-10 13:13:57',
            ),
            246 => 
            array (
                'id' => 247,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 21,
                'locale' => 'en',
                'value' => 'code-of-civil-procedure',
                'created_at' => '2022-05-10 13:13:57',
                'updated_at' => '2022-05-10 13:13:57',
            ),
            247 => 
            array (
                'id' => 248,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 21,
                'locale' => 'ru',
                'value' => 'grazhdanskij-processualnyj-kodeks',
                'created_at' => '2022-05-10 13:13:57',
                'updated_at' => '2022-05-10 13:13:57',
            ),
            248 => 
            array (
                'id' => 249,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 15,
                'locale' => 'en',
                'value' => 'TAX CODE',
                'created_at' => '2022-05-10 13:14:48',
                'updated_at' => '2022-05-10 13:14:48',
            ),
            249 => 
            array (
                'id' => 250,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 15,
                'locale' => 'ru',
                'value' => 'НАЛОГОВЫЙ КОДЕКС',
                'created_at' => '2022-05-10 13:14:48',
                'updated_at' => '2022-05-10 13:14:48',
            ),
            250 => 
            array (
                'id' => 251,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 15,
                'locale' => 'en',
                'value' => 'tax-code',
                'created_at' => '2022-05-10 13:14:48',
                'updated_at' => '2022-05-10 13:14:48',
            ),
            251 => 
            array (
                'id' => 252,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 15,
                'locale' => 'ru',
                'value' => 'nalogovyj-kodeks',
                'created_at' => '2022-05-10 13:14:48',
                'updated_at' => '2022-05-10 13:14:48',
            ),
            252 => 
            array (
                'id' => 253,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 14,
                'locale' => 'en',
                'value' => 'Constitutional Law of the Republic of Azerbaijan on Normative Legal Acts',
                'created_at' => '2022-05-10 13:15:24',
                'updated_at' => '2022-05-10 13:15:24',
            ),
            253 => 
            array (
                'id' => 254,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 14,
                'locale' => 'ru',
                'value' => 'Конституционный закон Азербайджанской Республики о нормативных правовых актах',
                'created_at' => '2022-05-10 13:15:24',
                'updated_at' => '2022-05-10 13:15:24',
            ),
            254 => 
            array (
                'id' => 255,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 14,
                'locale' => 'en',
                'value' => 'constitutional-law-of-the-republic-of-azerbaijan-on-normative-legal-acts',
                'created_at' => '2022-05-10 13:15:24',
                'updated_at' => '2022-05-10 13:15:24',
            ),
            255 => 
            array (
                'id' => 256,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 14,
                'locale' => 'ru',
                'value' => 'konstitucionnyj-zakon-azerbajdzhanskoj-respubliki-o-normativnyh-pravovyh-aktah',
                'created_at' => '2022-05-10 13:15:24',
                'updated_at' => '2022-05-10 13:15:24',
            ),
            256 => 
            array (
                'id' => 257,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'Law of the Republic of Azerbaijan on the Constitutional Court',
                'created_at' => '2022-05-10 13:16:00',
                'updated_at' => '2022-05-10 13:16:00',
            ),
            257 => 
            array (
                'id' => 258,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 13,
                'locale' => 'ru',
                'value' => 'Закон Азербайджанской Республики о Конституционном Суде',
                'created_at' => '2022-05-10 13:16:00',
                'updated_at' => '2022-05-10 13:16:00',
            ),
            258 => 
            array (
                'id' => 259,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'law-of-the-republic-of-azerbaijan-on-the-constitutional-court',
                'created_at' => '2022-05-10 13:16:00',
                'updated_at' => '2022-05-10 13:16:00',
            ),
            259 => 
            array (
                'id' => 260,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 13,
                'locale' => 'ru',
                'value' => 'zakon-azerbajdzhanskoj-respubliki-o-konstitucionnom-sude',
                'created_at' => '2022-05-10 13:16:00',
                'updated_at' => '2022-05-10 13:16:00',
            ),
            260 => 
            array (
                'id' => 261,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => 'Law of the Republic of Azerbaijan on the Judicial-Legal Council',
                'created_at' => '2022-05-10 13:16:48',
                'updated_at' => '2022-05-10 13:16:48',
            ),
            261 => 
            array (
                'id' => 262,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'ru',
                'value' => 'Закон Азербайджанской Республики о Судебно-правовом совете',
                'created_at' => '2022-05-10 13:16:48',
                'updated_at' => '2022-05-10 13:16:48',
            ),
            262 => 
            array (
                'id' => 263,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => 'law-of-the-republic-of-azerbaijan-on-the-judicial-legal-council',
                'created_at' => '2022-05-10 13:16:48',
                'updated_at' => '2022-05-10 13:16:48',
            ),
            263 => 
            array (
                'id' => 264,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 12,
                'locale' => 'ru',
                'value' => 'zakon-azerbajdzhanskoj-respubliki-o-sudebno-pravovom-sovete',
                'created_at' => '2022-05-10 13:16:48',
                'updated_at' => '2022-05-10 13:16:48',
            ),
            264 => 
            array (
                'id' => 265,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => 'Law of the Republic of Azerbaijan on Courts and Judges',
                'created_at' => '2022-05-10 13:17:33',
                'updated_at' => '2022-05-10 13:17:33',
            ),
            265 => 
            array (
                'id' => 266,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'ru',
                'value' => 'Закон Азербайджанской Республики о судах и судьях',
                'created_at' => '2022-05-10 13:17:33',
                'updated_at' => '2022-05-10 13:17:33',
            ),
            266 => 
            array (
                'id' => 267,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => 'law-of-the-republic-of-azerbaijan-on-courts-and-judges',
                'created_at' => '2022-05-10 13:17:33',
                'updated_at' => '2022-05-10 13:17:33',
            ),
            267 => 
            array (
                'id' => 268,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 11,
                'locale' => 'ru',
                'value' => 'zakon-azerbajdzhanskoj-respubliki-o-sudah-i-sudyah',
                'created_at' => '2022-05-10 13:17:33',
                'updated_at' => '2022-05-10 13:17:33',
            ),
            268 => 
            array (
                'id' => 269,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'Law of the Republic of Azerbaijan on Civil Service',
                'created_at' => '2022-05-10 13:18:12',
                'updated_at' => '2022-05-10 13:18:12',
            ),
            269 => 
            array (
                'id' => 270,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'ru',
                'value' => 'Закон Азербайджанской Республики о государственной службе',
                'created_at' => '2022-05-10 13:18:12',
                'updated_at' => '2022-05-10 13:18:12',
            ),
            270 => 
            array (
                'id' => 271,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'law-of-the-republic-of-azerbaijan-on-civil-service',
                'created_at' => '2022-05-10 13:18:12',
                'updated_at' => '2022-05-10 13:18:12',
            ),
            271 => 
            array (
                'id' => 272,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 10,
                'locale' => 'ru',
                'value' => 'zakon-azerbajdzhanskoj-respubliki-o-gosudarstvennoj-sluzhbe',
                'created_at' => '2022-05-10 13:18:12',
                'updated_at' => '2022-05-10 13:18:12',
            ),
            272 => 
            array (
                'id' => 273,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'Law of the Republic of Azerbaijan on Executive Officers',
                'created_at' => '2022-05-10 13:18:51',
                'updated_at' => '2022-05-10 13:18:51',
            ),
            273 => 
            array (
                'id' => 274,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => 'Закон Азербайджанской Республики об исполнительных должностных лицах',
                'created_at' => '2022-05-10 13:18:51',
                'updated_at' => '2022-05-10 13:18:51',
            ),
            274 => 
            array (
                'id' => 275,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'law-of-the-republic-of-azerbaijan-on-executive-officers',
                'created_at' => '2022-05-10 13:18:51',
                'updated_at' => '2022-05-10 13:18:51',
            ),
            275 => 
            array (
                'id' => 276,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => 'zakon-azerbajdzhanskoj-respubliki-ob-ispolnitelnyh-dolzhnostnyh-licah',
                'created_at' => '2022-05-10 13:18:51',
                'updated_at' => '2022-05-10 13:18:51',
            ),
            276 => 
            array (
                'id' => 277,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Law of the Republic of Azerbaijan on State Duty',
                'created_at' => '2022-05-10 13:19:33',
                'updated_at' => '2022-05-10 13:19:33',
            ),
            277 => 
            array (
                'id' => 278,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'Закон Азербайджанской Республики о государственной пошлине',
                'created_at' => '2022-05-10 13:19:33',
                'updated_at' => '2022-05-10 13:19:33',
            ),
            278 => 
            array (
                'id' => 279,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'law-of-the-republic-of-azerbaijan-on-state-duty',
                'created_at' => '2022-05-10 13:19:33',
                'updated_at' => '2022-05-10 13:19:33',
            ),
            279 => 
            array (
                'id' => 280,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'zakon-azerbajdzhanskoj-respubliki-o-gosudarstvennoj-poshline',
                'created_at' => '2022-05-10 13:19:33',
                'updated_at' => '2022-05-10 13:19:33',
            ),
            280 => 
            array (
                'id' => 281,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Instructions on clerical work in the courts of the Republic of Azerbaijan',
                'created_at' => '2022-05-10 13:20:10',
                'updated_at' => '2022-05-10 13:20:10',
            ),
            281 => 
            array (
                'id' => 282,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'Инструкция по делопроизводству в судах Азербайджанской Республики',
                'created_at' => '2022-05-10 13:20:10',
                'updated_at' => '2022-05-10 13:20:10',
            ),
            282 => 
            array (
                'id' => 283,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'instructions-on-clerical-work-in-the-courts-of-the-republic-of-azerbaijan',
                'created_at' => '2022-05-10 13:20:10',
                'updated_at' => '2022-05-10 13:20:10',
            ),
            283 => 
            array (
                'id' => 284,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'instrukciya-po-deloproizvodstvu-v-sudah-azerbajdzhanskoj-respubliki',
                'created_at' => '2022-05-10 13:20:10',
                'updated_at' => '2022-05-10 13:20:10',
            ),
            284 => 
            array (
                'id' => 285,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'Law of the Republic of Azerbaijan on Enforcement',
                'created_at' => '2022-05-10 13:21:05',
                'updated_at' => '2022-05-10 13:21:05',
            ),
            285 => 
            array (
                'id' => 286,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'Закон Азербайджанской Республики об исполнении',
                'created_at' => '2022-05-10 13:21:05',
                'updated_at' => '2022-05-10 13:21:05',
            ),
            286 => 
            array (
                'id' => 287,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'law-of-the-republic-of-azerbaijan-on-enforcement',
                'created_at' => '2022-05-10 13:21:05',
                'updated_at' => '2022-05-10 13:21:05',
            ),
            287 => 
            array (
                'id' => 288,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'zakon-azerbajdzhanskoj-respubliki-ob-ispolnenii',
                'created_at' => '2022-05-10 13:21:05',
                'updated_at' => '2022-05-10 13:21:05',
            ),
            288 => 
            array (
                'id' => 289,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Decrees and Orders',
                'created_at' => '2022-05-10 13:21:44',
                'updated_at' => '2022-05-10 13:21:44',
            ),
            289 => 
            array (
                'id' => 290,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Указы и распоряжения',
                'created_at' => '2022-05-10 13:21:44',
                'updated_at' => '2022-05-10 13:21:44',
            ),
            290 => 
            array (
                'id' => 291,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'decrees-and-orders',
                'created_at' => '2022-05-10 13:21:44',
                'updated_at' => '2022-05-10 13:21:44',
            ),
            291 => 
            array (
                'id' => 292,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'ukazy-i-rasporyazheniya',
                'created_at' => '2022-05-10 13:21:44',
                'updated_at' => '2022-05-10 13:21:44',
            ),
            292 => 
            array (
                'id' => 293,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Decisions of the Milli Majlis',
                'created_at' => '2022-05-10 13:22:23',
                'updated_at' => '2022-05-10 13:22:23',
            ),
            293 => 
            array (
                'id' => 294,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Решения Милли Меджлиса',
                'created_at' => '2022-05-10 13:22:23',
                'updated_at' => '2022-05-10 13:22:23',
            ),
            294 => 
            array (
                'id' => 295,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'decisions-of-the-milli-majlis',
                'created_at' => '2022-05-10 13:22:23',
                'updated_at' => '2022-05-10 13:22:23',
            ),
            295 => 
            array (
                'id' => 296,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'resheniya-milli-medzhlisa',
                'created_at' => '2022-05-10 13:22:23',
                'updated_at' => '2022-05-10 13:22:23',
            ),
            296 => 
            array (
                'id' => 297,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Decisions of the Constitutional Court',
                'created_at' => '2022-05-10 13:22:59',
                'updated_at' => '2022-05-10 13:22:59',
            ),
            297 => 
            array (
                'id' => 298,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Решения Конституционного суда',
                'created_at' => '2022-05-10 13:22:59',
                'updated_at' => '2022-05-10 13:22:59',
            ),
            298 => 
            array (
                'id' => 299,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'decisions-of-the-constitutional-court',
                'created_at' => '2022-05-10 13:22:59',
                'updated_at' => '2022-05-10 13:22:59',
            ),
            299 => 
            array (
                'id' => 300,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'resheniya-konstitucionnogo-suda',
                'created_at' => '2022-05-10 13:22:59',
                'updated_at' => '2022-05-10 13:22:59',
            ),
            300 => 
            array (
                'id' => 301,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Plenum Decisions of the Supreme Court',
                'created_at' => '2022-05-10 13:23:40',
                'updated_at' => '2022-05-10 13:23:40',
            ),
            301 => 
            array (
                'id' => 302,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Решения Пленума Верховного Суда',
                'created_at' => '2022-05-10 13:23:40',
                'updated_at' => '2022-05-10 13:23:40',
            ),
            302 => 
            array (
                'id' => 303,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'plenum-decisions-of-the-supreme-court',
                'created_at' => '2022-05-10 13:23:40',
                'updated_at' => '2022-05-10 13:23:40',
            ),
            303 => 
            array (
                'id' => 304,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'resheniya-plenuma-verhovnogo-suda',
                'created_at' => '2022-05-10 13:23:40',
                'updated_at' => '2022-05-10 13:23:40',
            ),
            304 => 
            array (
                'id' => 305,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Legal acts of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-10 13:24:20',
                'updated_at' => '2022-05-10 13:24:20',
            ),
            305 => 
            array (
                'id' => 306,
                'table_name' => 'constitutions',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Правовые акты Нахчыванской Автономной Республики',
                'created_at' => '2022-05-10 13:24:20',
                'updated_at' => '2022-05-10 13:24:20',
            ),
            306 => 
            array (
                'id' => 307,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'legal-acts-of-the-nakhchivan-autonomous-republic',
                'created_at' => '2022-05-10 13:24:20',
                'updated_at' => '2022-05-10 13:24:20',
            ),
            307 => 
            array (
                'id' => 308,
                'table_name' => 'constitutions',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'pravovye-akty-nahchyvanskoj-avtonomnoj-respubliki',
                'created_at' => '2022-05-10 13:24:20',
                'updated_at' => '2022-05-10 13:24:20',
            ),
            308 => 
            array (
                'id' => 309,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 120,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            309 => 
            array (
                'id' => 310,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 121,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            310 => 
            array (
                'id' => 311,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 122,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            311 => 
            array (
                'id' => 312,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 123,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            312 => 
            array (
                'id' => 313,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 124,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            313 => 
            array (
                'id' => 314,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 125,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            314 => 
            array (
                'id' => 315,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 126,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            315 => 
            array (
                'id' => 316,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => 'Decisionpresidium',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            316 => 
            array (
                'id' => 317,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => 'Decisionpresidia',
                'created_at' => '2022-05-10 13:27:31',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            317 => 
            array (
                'id' => 318,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'Decision N1 2015',
                'created_at' => '2022-05-10 13:28:29',
                'updated_at' => '2022-05-10 13:28:29',
            ),
            318 => 
            array (
                'id' => 319,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 13,
                'locale' => 'ru',
                'value' => 'Решение №1 2015 г.',
                'created_at' => '2022-05-10 13:28:29',
                'updated_at' => '2022-05-10 13:28:29',
            ),
            319 => 
            array (
                'id' => 320,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'decision-n1-2015',
                'created_at' => '2022-05-10 13:28:29',
                'updated_at' => '2022-05-10 13:28:29',
            ),
            320 => 
            array (
                'id' => 321,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 13,
                'locale' => 'ru',
                'value' => 'reshenie-1-2015-g',
                'created_at' => '2022-05-10 13:28:29',
                'updated_at' => '2022-05-10 13:28:29',
            ),
            321 => 
            array (
                'id' => 322,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;"><strong style="box-sizing: border-box;">NАХ&Ccedil;IVАN &nbsp;MUХTАR &nbsp;RЕSPUBL</strong><strong style="box-sizing: border-box;">İKАSI En</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;"><strong style="box-sizing: border-box;">АL</strong><strong style="box-sizing: border-box;">İ&nbsp; MƏHKƏMƏS</strong><strong style="box-sizing: border-box;">İ &nbsp;RƏYАSƏT &nbsp;HЕYƏT</strong><strong style="box-sizing: border-box;">İN</strong><strong style="box-sizing: border-box;">İN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;"><strong style="box-sizing: border-box;">Q Ə R А R I&nbsp; № 1</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; line-height: 20.4px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 13 fevral 2015-ciil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nах&ccedil;ıvаn şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; line-height: 20.4px;">Nах&ccedil;ıvаn Muхtаr Rеspublikаsı Аli Məhkəməsinin Rəyаsət Hеyəti аşаğı&shy;dаkı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 9pt; line-height: 20.4px;">Аli Məhkəmənin sədri R.R.S&uuml;lеymаnоvun sədrliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 9pt; line-height: 20.4px;"><span style="box-sizing: border-box; letter-spacing: -0.2pt;">m</span><span style="box-sizing: border-box; letter-spacing: -0.2pt;">&uuml;lki kоllеgiyаnın sədri&nbsp;</span><span style="box-sizing: border-box; letter-spacing: -0.2pt;">vəzifəsini icra edən&nbsp;</span><span style="box-sizing: border-box; letter-spacing: -0.2pt;">Ə.K.Аllаhvеrdiyеvin,</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 9pt; line-height: 20.4px;">inzibati-iqtisadikоllеgiyаnın sədri vəzifəsini icra edən Y.S.Qurbanovun,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 9pt; line-height: 20.4px;"><span style="box-sizing: border-box; letter-spacing: -0.2pt;">hərbi kоllеgiyаnın sədri vəzifəsini icra edən Q.N.Məmmədovun iştirаkları ilə</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; line-height: 20.4px;">Аli Məhkəmənin sədri R.R.S&uuml;lеymаnоvun2014-c&uuml; ildə Nах&ccedil;ıvаn Muхtаr&nbsp;<span style="box-sizing: border-box; letter-spacing: -0.2pt;">Rеspublikаsının Аli Məhkəməsi, muхtаr rеspublikаnın iхtisаslаşdırılmış, şəhər</span>&nbsp;və rаyоn məhkəmələri tərəfindən ədаlət m&uuml;hаkiməsinin həyаtа kе&ccedil;irilməsi, vətəndаşlаrın h&uuml;quq və аzаdlıqlаrının qоrunmаsı, h&uuml;quqi maarifləndirmə sаhəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsini, məruzə ilə əlаqədаr &ccedil;ıхışlаrı dinləyib m&uuml;zаkirə еdərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;"><strong style="box-sizing: border-box;">Q ə r а r а&nbsp;&nbsp;&nbsp; а l ı r :</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; line-height: 20.4px;">1. Nах&ccedil;ıvаn Muхtаr Rеspublikаsı Аli Məhkəməsinin sədri R.R.S&uuml;lеymа&shy;nо&shy;vun2014-c&uuml;ildə Nах&ccedil;ıvаn Muхtаr Rеspublikаsının Аli Məhkəməsi, muх&shy;tаr rеspublikаnın iхtisаslаşdırılmış, şəhər və rаyоn məhkəmələri tərəfindən ədаlət m&uuml;hаkiməsinin həyаtа kе&ccedil;irilməsi, vətəndаşlаrın h&uuml;quq və аzаdlıqlаrı&shy;nın qоrunmаsı, h&uuml;quqi maarifləndirməsаhəsində g&ouml;r&uuml;lm&uuml;ş işlər hаqqındа məruzəsi nəzərə аlınsın.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; line-height: 20.4px;">2. Muхtаr rеspublikаnın iхtisаslаşdırılmış məhkəmələrə, şəhər və rаyоn məhkəmələrinə t&ouml;vsiyə оlunsun ki:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; line-height: 20.4px;">- cari ildə işlərə bахılаrkən Аzərbаycаn Rеspublikаsının Kоnstitusiyаsın&shy;dа təsbit еdilmiş əsаs insаn və vətəndаş h&uuml;quq və аzаdlıqlаrının qоrunmаsı, qаnunvеriciliyin tələblərinə riаyət еdilməsi istiqаmətində fəaliyyətlərini daha da g&uuml;cləndirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; line-height: 20.4px;">- vətəndаşlаrdаn dахil оlmuş ərizə və şikаyətlərə, şifаhi m&uuml;rаciətlərə &ldquo;Vətəndаşlаrın m&uuml;rаciətlərinə bахılmаsı qаydаsı hаqqındа&rdquo; Аzərbаycаn Rеs&shy;publikаsı Qаnununun tələblərinə uyğun оlаrаq bахılmаsını təmin еtsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; line-height: 20.4px;">- səyyаri məhkəmə iclаslаrının kе&ccedil;irilməsinə, qаnunvеriciliyə gətirilən yеniliklərlə bаğlı əhаli аrаsındа h&uuml;quqi mааrifləndirmə işinin gеnişləndiril&shy;məsinə, məhkəmələrdə fəaliyyət g&ouml;stərən kitаbхаnаlаrın qаnunvеricilik аkt&shy;lаrı və h&uuml;quq ədəbiyyatı ilə zənginləşdirilməsinə, еləcə də qаnunvеriciliyin sistеmləşdirilməsi işinin təşkilinə х&uuml;susi diqqət yеtirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; line-height: 20.4px;"><span style="box-sizing: border-box; letter-spacing: -0.2pt;">- &ldquo;Аzərbаycаn Rеspublikаsının məhkəmələrində kаrg&uuml;zаrlığın аpаrılmаsınа</span>&nbsp;dаir Təlimаt&rdquo;а uyğun оlаrаq məhkəmələrdə kаrg&uuml;zаrlığın аpаrılmаsı işinin təkmilləşdirilməsinə, əmək və icrа intizаmınа dаhа ciddi əməl оlunmаsınа х&uuml;susi diqqət yеtirsinlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center; line-height: 20.4px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; line-height: 20.4px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong style="box-sizing: border-box;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; S Ə D R : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RАMİZ &nbsp;S&Uuml;LЕYMАNОV</strong></p>',
                'created_at' => '2022-05-10 13:28:29',
                'updated_at' => '2022-05-10 13:28:29',
            ),
            322 => 
            array (
                'id' => 323,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 13,
                'locale' => 'ru',
                'value' => '<p>Ru content</p>',
                'created_at' => '2022-05-10 13:28:29',
                'updated_at' => '2022-05-10 13:28:29',
            ),
            323 => 
            array (
                'id' => 324,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => 'Decision N2 2014',
                'created_at' => '2022-05-10 13:30:08',
                'updated_at' => '2022-05-10 13:30:08',
            ),
            324 => 
            array (
                'id' => 325,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'ru',
                'value' => 'Решение №2 2014 г.',
                'created_at' => '2022-05-10 13:30:08',
                'updated_at' => '2022-05-10 13:30:08',
            ),
            325 => 
            array (
                'id' => 326,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => 'decision-n2-2014',
                'created_at' => '2022-05-10 13:30:08',
                'updated_at' => '2022-05-10 13:30:08',
            ),
            326 => 
            array (
                'id' => 327,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 12,
                'locale' => 'ru',
                'value' => 'reshenie-2-2014-g',
                'created_at' => '2022-05-10 13:30:08',
                'updated_at' => '2022-05-10 13:30:08',
            ),
            327 => 
            array (
                'id' => 328,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R &nbsp;I &nbsp; &nbsp; &nbsp;&Nu; 2</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;14 iyul 2014-c&uuml; il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nах&ccedil;ıvаn şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nах&ccedil;ıvаn Muхtаr Rеspublikаsı Аli Məhkəməsinin Rəyаsət Hеyəti аşаğıdаkı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Аli Məhkəmənin sədri R.R.S&uuml;lеymаnоvun sədrliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">m&uuml;lki kоllеgiyаnın sədri vəzifəsini icra edən Ə.K.Аllаhvеrdiyеvin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">hərbi kоllеgiyаnın sədri vəzifəsini icra edən Q.N.Məmmədovun iştirаkları ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Аli Məhkəmənin sədri R.R.S&uuml;lеymаnоvun 2014-c&uuml; ilin birinci yarısında Nах&ccedil;ıvаn Muхtаr Rеspublikаsının Аli Məhkəməsi, muхtаr rеspublikаnın iхtisаslаşdırılmış, şəhər və rаyоn məhkəmələri tərəfindən ədаlət m&uuml;hаkiməsinin həyаtа kе&ccedil;irilməsi, vətəndаşlаrın h&uuml;quq və аzаdlıqlаrının qоrunmаsı, h&uuml;quqi maarifləndirmə sаhəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsini, məruzə ilə əlаqədаr &ccedil;ıхışlаrı dinləyib m&uuml;zаkirə еdərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">Q ə r а r а &nbsp; &nbsp;а l ı r :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Nах&ccedil;ıvаn Muхtаr Rеspublikаsı Аli Məhkəməsinin sədri R.R.S&uuml;lеymаnоvun 2014-c&uuml; ilin birinci yarısında Nах&ccedil;ıvаn Muхtаr Rеspublikаsının Аli Məhkəməsi, muхtаr rеspublikаnın iхtisаslаşdırılmış, şəhər və rаyоn məhkəmələri tərəfindən ədаlət m&uuml;hаkiməsinin həyаtа kе&ccedil;irilməsi, vətəndаşlаrın h&uuml;quq və аzаdlıqlаrının qоrunmаsı, h&uuml;quqi maarifləndirmə sаhəsində g&ouml;r&uuml;lm&uuml;ş işlər hаqqındа məruzəsi nəzərə аlınsın.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Muхtаr rеspublikаnın iхtisаslаşdırılmış, şəhər və rаyоn məhkəmələrinə t&ouml;vsiyə оlunsun ki:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Cari ilin ikinci yarısında işlərə bахılаrkən Аzərbаycаn Rеspublikаsının Kоnstitusiyаsındа təsbit еdilmiş əsаs insаn və vətəndаş h&uuml;quq və аzаdlıqlаrının qоrunmаsı, qаnunvеriciliyin tələblərinə riаyət еdilməsi istiqаmətində fəaliyyətlərini daha da g&uuml;cləndirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Vətəndаşlаrdаn dахil оlmuş ərizə və şikаyətlərə, şifаhi m&uuml;rаciətlərə &ldquo;Vətəndаşlаrın m&uuml;rаciətlərinə bахılmаsı qаydаsı hаqqındа&rdquo; Аzərbаycаn Rеspublikаsı Qаnununun tələblərinə uyğun оlаrаq bахılmаsını təmin еtsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Səyyаri məhkəmə iclаslаrının kе&ccedil;irilməsinə, qаnunvеriciliyə gətirilən yеniliklərlə bаğlı əhаli аrаsındа h&uuml;quqi mааrifləndirmə işinin gеnişləndirilməsinə, qаnun pоzuntulаrının аrаdаn qаldırılmаsı &uuml;&ccedil;&uuml;n х&uuml;susi qərаrlаrın &ccedil;ıхаrılmаsınа, məhkəmələrdə fəaliyyət g&ouml;stərən kitаbхаnаlаrın qаnunvеricilik аktlаrı və h&uuml;quq ədəbiyyatı ilə zənginləşdirilməsinə, еləcə də qаnunvеriciliyin sistеmləşdirilməsi işinin təşkilinə х&uuml;susi diqqət yеtirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- &ldquo;Аzərbаycаn Rеspublikаsının məhkəmələrində kаrg&uuml;zаrlığın аpаrılmаsınа dаir Təlimаt&rdquo;а uyğun оlаrаq məhkəmələrdə kаrg&uuml;zаrlığın və stаtistik təhlilin аpаrılmаsı işinin təkmilləşdirilməsinə, əmək və icrа intizаmınа dаhа ciddi əməl оlunmаsınа х&uuml;susi diqqət yеtirsinlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; S Ə D R : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RАMİZ &nbsp;S&Uuml;LЕYMАNОV</p>',
                'created_at' => '2022-05-10 13:30:08',
                'updated_at' => '2022-05-10 13:30:08',
            ),
            328 => 
            array (
                'id' => 329,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => 'Decision N3 2013',
                'created_at' => '2022-05-10 13:30:52',
                'updated_at' => '2022-05-10 13:30:52',
            ),
            329 => 
            array (
                'id' => 330,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'ru',
                'value' => 'Решение №3 2013 г.',
                'created_at' => '2022-05-10 13:30:52',
                'updated_at' => '2022-05-10 13:30:52',
            ),
            330 => 
            array (
                'id' => 331,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => 'decision-n3-2013',
                'created_at' => '2022-05-10 13:30:52',
                'updated_at' => '2022-05-10 13:30:52',
            ),
            331 => 
            array (
                'id' => 332,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 11,
                'locale' => 'ru',
                'value' => 'reshenie-3-2013-g',
                'created_at' => '2022-05-10 13:30:52',
                'updated_at' => '2022-05-10 13:30:52',
            ),
            332 => 
            array (
                'id' => 333,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R &nbsp;I &nbsp; &nbsp; &nbsp;&Nu; 3</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; 26 &nbsp;iyul &nbsp;2013-c&uuml; il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nах&ccedil;ıvаn şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nах&ccedil;ıvаn Muхtаr Rеspublikаsı Аli Məhkəməsinin Rəyаsət Hеyəti аşаğıdаkı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Аli Məhkəmənin sədri R.R.S&uuml;lеymаnоvun sədrliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">m&uuml;lki işlər &uuml;zrə kоllеgiyаnın sədri vəzifəsini icra edən Ə.K.Аllаhvеrdiyеvin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">inzibati-iqtisadi kоllеgiyаnın sədri vəzifəsini icra edən Y.S.Qurbanovun,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">hərbi kollegiyanın sədri vəzifəsini icra edən Q.N.Məmmədovun iştirаkları ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Аli Məhkəmənin Rəyasət Heyətinin 26 iyul 2013-c&uuml; il tarixdə ke&ccedil;irilən iclasının g&uuml;ndəliyində duran &ldquo;Nax&ccedil;ıvan Muхtаr Rеspublikаsı Ali Məhkəməsində 30 iyul 2012-ci il tarixdən ictimai əsaslarla fəaliyyət g&ouml;stərən &ldquo;Məlumat&not;lan&not;dırma mərkəzi&rdquo;nin yeni tər&not;kibdə təsdiq edilməsi&rdquo; məsələsini m&uuml;zаkirə еdərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;Q ə r а r а &nbsp; &nbsp; а l ı r:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;1. Məlumatlandırma mərkəzi&rdquo;nin iş&ccedil;i heyəti ictimai əsaslarla Ali Məhkəmə Aparatı-nın iş&ccedil;ilərindən aşağıdakı yeni tərkibdə təsdiq olunsun:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;&ldquo;Məlumatlandırma mərkəzi&rdquo;nin fəaliyyətinə məsul şəxs:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Xəlilov Yunis Fərman oğlu &ndash; Aparatın rəhbəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;İş&ccedil;i Heyəti:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Əliyev Mehdi Ədalət oğlu - mətbuat və ictimaiyyətlə əlaqələr &uuml;zrə baş məsləhət&ccedil;i;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Əliyev Əjdər Zahid oğlu &ndash; &nbsp;Vətəndaşların qəbulu və məktublara baxılması ş&ouml;bəsinin məsləhət&ccedil;isi.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">S Ə D R : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RАMİZ S&Uuml;LЕYMАNОV</p>',
                'created_at' => '2022-05-10 13:30:52',
                'updated_at' => '2022-05-10 13:30:52',
            ),
            333 => 
            array (
                'id' => 334,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'Decision N2 2013',
                'created_at' => '2022-05-10 13:31:26',
                'updated_at' => '2022-05-10 13:31:26',
            ),
            334 => 
            array (
                'id' => 335,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'ru',
                'value' => 'Решение №2 2013 г.',
                'created_at' => '2022-05-10 13:31:26',
                'updated_at' => '2022-05-10 13:31:26',
            ),
            335 => 
            array (
                'id' => 336,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'decision-n2-2013',
                'created_at' => '2022-05-10 13:31:26',
                'updated_at' => '2022-05-10 13:31:26',
            ),
            336 => 
            array (
                'id' => 337,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 10,
                'locale' => 'ru',
                'value' => 'reshenie-2-2013-g',
                'created_at' => '2022-05-10 13:31:26',
                'updated_at' => '2022-05-10 13:31:26',
            ),
            337 => 
            array (
                'id' => 338,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R &nbsp;I &nbsp; &nbsp; &nbsp;&Nu; 2</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">26 &nbsp;iyul 2013-c&uuml; il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nах&ccedil;ıvаn şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nах&ccedil;ıvаn Muхtаr Rеspublikаsı Аli Məhkəməsinin Rəyаsət Hеyəti аşаğıdаkı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Аli Məhkəmənin sədri R.R.S&uuml;lеymаnоvun sədrliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">m&uuml;lki kоllеgiyаnın sədri vəzifəsini icra edən Ə.K.Аllаhvеrdiyеvin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">inzibati-iqtisadi kоllеgiyаnın sədri vəzifəsini icra edən Y.S.Qurbanovun,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">hərbi kоllеgiyаnın sədri vəzifəsini icra edən Q.N.Məmmədovun iştirаkları ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Аli Məhkəmənin sədri R.R.S&uuml;lеymаnоvun 2013-c&uuml; ilin birinci yarısında Nах&ccedil;ıvаn Muхtаr Rеspublikаsının Аli Məhkəməsi, muхtаr rеspublikаnın iхtisаslаşdırılmış, şəhər və rаyоn məhkəmələri tərəfindən ədаlət m&uuml;hаkimə-sinin həyаtа kе&ccedil;irilməsi, vətəndаşlаrın h&uuml;quq və аzаdlıqlаrının qоrunmаsı, h&uuml;quqi maarifləndirmə sаhəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsini, məruzə ilə əlаqədаr &ccedil;ıхışlаrı dinləyib m&uuml;zаkirə еdərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;Q ə r а r а &nbsp; &nbsp;а l ı r :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;1. Nах&ccedil;ıvаn Muхtаr Rеspublikаsı Аli Məhkəməsinin sədri R.R.S&uuml;lеymа-nоvun 2013-c&uuml; ilin birinci yarısında Nах&ccedil;ıvаn Muхtаr Rеspublikаsının Аli Məhkəməsi, muхtаr rеspublikаnın iхtisаslаşdırılmış, şəhər və rаyоn məhkə-mələri tərəfindən ədаlət m&uuml;hаkiməsinin həyаtа kе&ccedil;irilməsi, vətəndаşlаrın h&uuml;quq və аzаdlıqlаrının qоrunmаsı, h&uuml;quqi maarifləndirmə sаhəsində g&ouml;r&uuml;l-m&uuml;ş işlər hаqqındа məruzəsi nəzərə аlınsın.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Muхtаr rеspublikаnın iхtisаslаşdırılmış, şəhər və rаyоn məhkəmələrinə t&ouml;vsiyə оlunsun ki:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Cari ilin ikinci yarısında işlərə bахılаrkən Аzərbаycаn Rеspublikаsının Kоnstitusiyаsındа təsbit еdilmiş əsаs insаn və vətəndаş h&uuml;quq və аzаdlıq-lаrının qоrunmаsı, qаnunvеriciliyin tələblərinə riаyət еdilməsi istiqаmətində fəaliyyətlərini daha da g&uuml;cləndirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Vətəndаşlаrdаn dахil оlmuş ərizə və şikаyətlərə, şifаhi m&uuml;rаciətlərə &ldquo;Vətəndаşlаrın m&uuml;rаciətlərinə bахılmаsı qаydаsı hаqqındа&rdquo; Аzərbаycаn Rеs-publikаsı Qаnununun tələblərinə uyğun оlаrаq bахılmаsını təmin еtsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Səyyаri məhkəmə iclаslаrının kе&ccedil;irilməsinə, qаnunvеriciliyə gətirilən yеniliklərlə bаğlı əhаli аrаsındа h&uuml;quqi mааrifləndirmə işinin gеnişləndirilmə-sinə, məhkəmələrdə fəaliyyət g&ouml;stərən kitаbхаnаlаrın qаnunvеricilik аktlаrı və h&uuml;quq ədəbiyyatı ilə zənginləşdirilməsinə, еləcə də qаnunvеriciliyin sistеmləşdirilməsi işinin təşkilinə х&uuml;susi diqqət yеtirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Azərbaycan Respublikasının Ədliyyə Nazirliyi Kollegiyasının 29 noyabr 2011-ci il tarixli 3-N n&ouml;mrəli Qərarı ilə təsdiq edilmiş &ldquo;Аzərbаycаn Rеspub-likаsının məhkəmələrində kаrg&uuml;zаrlığın аpаrılmаsınа dаir Təlimаt&rdquo;а uyğun оlаrаq məhkəmələrdə kаrg&uuml;zаrlığın və stаtistik təhlilin аpаrılmаsı işinin tək-milləşdirilməsinə, əmək və icrа intizаmınа dаhа ciddi əməl оlunmаsınа х&uuml;susi diqqət yеtirsinlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;S Ə D R : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RАMİZ &nbsp;S&Uuml;LЕYMАNОV</p>',
                'created_at' => '2022-05-10 13:31:26',
                'updated_at' => '2022-05-10 13:31:26',
            ),
            338 => 
            array (
                'id' => 339,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'Decision N1 2013',
                'created_at' => '2022-05-10 13:32:08',
                'updated_at' => '2022-05-10 13:32:08',
            ),
            339 => 
            array (
                'id' => 340,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => 'Решение №1 2013 г.',
                'created_at' => '2022-05-10 13:32:08',
                'updated_at' => '2022-05-10 13:32:08',
            ),
            340 => 
            array (
                'id' => 341,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'decision-n1-2013',
                'created_at' => '2022-05-10 13:32:08',
                'updated_at' => '2022-05-10 13:32:08',
            ),
            341 => 
            array (
                'id' => 342,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => 'reshenie-1-2013-g',
                'created_at' => '2022-05-10 13:32:08',
                'updated_at' => '2022-05-10 13:32:08',
            ),
            342 => 
            array (
                'id' => 343,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R &nbsp;I &nbsp; &nbsp; &nbsp;&Nu; 1</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">16 &nbsp;yanvar 2013-c&uuml; il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti aşağıdakı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Ali Məhkəmənin sədri R.R.S&uuml;leymanovun sədrliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">m&uuml;lki kollegiyanın sədri vəzifəsini icra edən Ə.K.Allahverdiyevin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">inzibati-iqtisadi kollegiyanın sədri vəzifəsini icra edən Y.S.Qurbanovun,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">hərbi kollegiyanın sədri vəzifəsini icra edən Q.N.Məmmədovun iştirakları ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Ali Məhkəmənin sədri R.R.S&uuml;leymanovun 2012-ci ildə Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması, h&uuml;quqi maarifləndirmə sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsini, məruzə ilə əlaqədar &ccedil;ıxışları dinləyib m&uuml;zakirə edərək&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">Q ə r a r a &nbsp; &nbsp;a l ı r :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin sədri R.R.S&uuml;leymanovun 2012-ci ildə Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması, h&uuml;quqi maarifləndirmə sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsi nəzərə alınsın.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;2. Muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələrinə t&ouml;vsiyə olunsun ki:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- 22 dekabr 2012-ci il tarixdə ke&ccedil;irilmiş d&ouml;rd&uuml;nc&uuml; &ccedil;ağırış Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinin altıncı sessiyasında m&uuml;stəqil Azərbaycanın qurucusu Ulu &ouml;ndər Heydər Əliyevin 90 illik yubileyi ilə əlaqədar 2013-c&uuml; ilin Nax&ccedil;ıvan Muxtar Respublikasında Heydər Əliyev ili elan olması nəzərə alınmaqla bu il Azərbaycan xalqının &uuml;mummilli lideri Heydər Əliyevin 90 illik yubileyinə həsr olunmuş tədbirlər ke&ccedil;irilməsini təmin etsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Cari ildə işlərə baxılarkən Azərbaycan Respublikasının Konstitusiyasında təsbit edilmiş əsas insan və vətəndaş h&uuml;quq və azadlıqlarının qorunması, qanunvericiliyin tələblərinə riayət edilməsi istiqamətində fəaliyyətlərini daha da g&uuml;cləndirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Vətəndaşlardan daxil olmuş ərizə və şikayətlərə, şifahi m&uuml;raciətlərə Vətəndaşların m&uuml;raciətlərinə baxılması qaydası haqqında Azərbaycan Respublikası Qanununun tələblərinə uyğun olaraq baxılmasını təmin etsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Səyyari məhkəmə iclaslarının ke&ccedil;irilməsinə, qanunvericiliyə gətirilən yeniliklərlə bağlı əhali arasında h&uuml;quqi maarifləndirmə işinin genişləndirilməsinə, məhkəmələrdə fəaliyyət g&ouml;stərən kitabxanaların qanunvericilik aktları və h&uuml;quq ədəbiyyatı ilə zənginləşdirilməsinə, eləcə də qanunvericiliyin sistemləşdirilməsi işinin təşkilinə x&uuml;susi diqqət yetirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Azərbaycan Respublikasının məhkəmələrində karg&uuml;zarlığın aparılmasına dair Təlimata uyğun olaraq məhkəmələrdə karg&uuml;zarlığın və statistik təhlilin aparılması işinin təkmilləşdirilməsinə, əmək və icra intizamına daha ciddi əməl olunmasına x&uuml;susi diqqət yetirsinlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">S Ə D R : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RAMİZ &nbsp;S&Uuml;LEYMANOV</p>',
                'created_at' => '2022-05-10 13:32:08',
                'updated_at' => '2022-05-10 13:32:08',
            ),
            343 => 
            array (
                'id' => 344,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'Decision N3 2012',
                'created_at' => '2022-05-10 13:32:56',
                'updated_at' => '2022-05-10 13:32:56',
            ),
            344 => 
            array (
                'id' => 345,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'Решение №3 2012 г.',
                'created_at' => '2022-05-10 13:32:56',
                'updated_at' => '2022-05-10 13:32:56',
            ),
            345 => 
            array (
                'id' => 346,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'decision-n3-2012',
                'created_at' => '2022-05-10 13:32:56',
                'updated_at' => '2022-05-10 13:32:56',
            ),
            346 => 
            array (
                'id' => 347,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'reshenie-3-2012-g',
                'created_at' => '2022-05-10 13:32:56',
                'updated_at' => '2022-05-10 13:32:56',
            ),
            347 => 
            array (
                'id' => 348,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><span style="font-size: 14pt;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><span style="font-size: 14pt;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><span style="font-size: 14pt;"><strong style="box-sizing: border-box;">Q Ə R A R &nbsp;I &nbsp; &nbsp; &nbsp;&Nu; 3</strong></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp; &nbsp; 30 &nbsp;iyul 2012-ci il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan şəhəri</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti aşağıdakı tərkibdə:</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">Ali Məhkəmənin sədri R.R.S&uuml;leymanovun sədrliyi,</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">m&uuml;lki işlər &uuml;zrə kollegiyanın sədri vəzifəsini icra edən Ə.K.Allahverdiyevin,</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">inzibati-iqtisadi kollegiyanın sədri vəzifəsini icra edən Y.S.Qurbanovun,</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">hərbi kollegiyanın sədri vəzifəsini icra edən Q.N.Məmmədovun iştirakları ilə</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">Ali Məhkəmənin Rəyasət Heyətinin 30 iyul 2012-ci il tarixdə ke&ccedil;irilən iclasının g&uuml;ndəliyində duran Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsində Məlumatlandırma mərkəzinin yaradılması məsələsini m&uuml;zakirə edərək</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong><span style="font-size: 14pt;">Q ə r a r a &nbsp; &nbsp; a l ı r :&nbsp;</span></strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsində Məlumatlandırma mərkəzi yaradılsın.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">2. Məlumatlandırma mərkəzinin iş&ccedil;i heyəti ictimai əsaslarla Ali Məhkəmə Aparatının iş&ccedil;ilərindən aşağıdakı tərkibdə təsdiq olunsun:</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;Məlumatlandırma mərkəzinin fəaliyyətinə məsul şəxs:</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">Xəlilov Yunis Fərman oğlu - Aparatın rəhbəri</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">İş&ccedil;i Heyəti:</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">Eminova Rahidə Mirmurtuz qızı - Vətəndaşların qəbulu və məktublara baxılması ş&ouml;bəsinin m&uuml;diri;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">Səfərov Daşqın Yaqub oğlu - Analitik və qanunvericiliyin sistemləşdirilməsi ş&ouml;bəsinin m&uuml;diri</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">Əliyev Mehdi Ədalət oğlu - mətbuat və ictimaiyyətlə əlaqələr &uuml;zrə baş məsləhət&ccedil;i;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">Qurbanova G&uuml;lay Əjdər qızı - hakim k&ouml;mək&ccedil;isi;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="font-size: 14pt;">S Ə D R : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RAMİZ S&Uuml;LEYMANOV</span></p>',
                'created_at' => '2022-05-10 13:32:56',
                'updated_at' => '2022-05-10 13:32:56',
            ),
            348 => 
            array (
                'id' => 349,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Decision N2 2012',
                'created_at' => '2022-05-10 13:33:29',
                'updated_at' => '2022-05-10 13:33:29',
            ),
            349 => 
            array (
                'id' => 350,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'Решение №2 2012 г.',
                'created_at' => '2022-05-10 13:33:29',
                'updated_at' => '2022-05-10 13:33:29',
            ),
            350 => 
            array (
                'id' => 351,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'decision-n2-2012',
                'created_at' => '2022-05-10 13:33:29',
                'updated_at' => '2022-05-10 13:33:29',
            ),
            351 => 
            array (
                'id' => 352,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'reshenie-2-2012-g',
                'created_at' => '2022-05-10 13:33:29',
                'updated_at' => '2022-05-10 13:33:29',
            ),
            352 => 
            array (
                'id' => 353,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R &nbsp;I &nbsp; &nbsp; &nbsp;&Nu; 2</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; 30 &nbsp;iyul 2012-ci il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti aşağıdakı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Ali Məhkəmənin sədri R.R.S&uuml;leymanovun sədrliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">m&uuml;lki kollegiyanın sədri vəzifəsini icra edən Ə.K.Allahverdiyevin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">inzibati-iqtisadi kollegiyanın sədri vəzifəsini icra edən Y.S.Qurbanovun,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">hərbi kollegiyanın sədri vəzifəsini icra edən Q.N.Məmmədovun iştirakları ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Ali Məhkəmənin sədri R.R.S&uuml;leymanovun 2012-ci ilin birinci yarısında Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması, h&uuml;quqi maarifləndirmə sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsini, məruzə ilə əlaqədar &ccedil;ıxışları dinləyib m&uuml;zakirə edərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;Q ə r a r a &nbsp; &nbsp;a l ı r :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin sədri R.R.S&uuml;leymanovun 2012-ci ilin birinci yarısında Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması, h&uuml;quqi maarifləndirmə sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsi nəzərə alınsın.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələrinə t&ouml;vsiyə olunsun ki:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Cari ilin ikinci yarısında işlərə baxılarkən Azərbaycan Respublikasının Konstitusiyasında təsbit edilmiş əsas insan və vətəndaş h&uuml;quq və azadlıqlarının qorunması, qanunvericiliyin tələblərinə riayət edilməsi istiqamətində fəaliyyətlərini daha da g&uuml;cləndirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Vətəndaşlardan daxil olmuş ərizə və şikayətlərə, şifahi m&uuml;raciətlərə Vətəndaşların m&uuml;raciətlərinə baxılması qaydası haqqında Azərbaycan Respublikası Qanununun tələblərinə uyğun olaraq baxılmasını təmin etsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Azərbaycan Respublikası Ədliyyə naziri və Azərbaycan Respublikası Ali Məhkəməsinin sədri tərəfindən 30 avqust 2007-ci il tarixdə təsdiq olunmuş Azərbaycan Respublikasının məhkəmələrində karg&uuml;zarlığın aparılmasına dair Təlimata uyğun olaraq məhkəmələrdə statistika və karg&uuml;zarlığın aparılması işinin təkmilləşdirilməsinə, əmək və icra intizamına daha ciddi əməl olunmasına x&uuml;susi diqqət yetirsinlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">S Ə D R : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RAMİZ &nbsp;S&Uuml;LEYMANOV</p>',
                'created_at' => '2022-05-10 13:33:29',
                'updated_at' => '2022-05-10 13:33:29',
            ),
            353 => 
            array (
                'id' => 354,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'On verification and approval of the results of the elections to the Supreme Assembly of the Nakhchivan Autonomous Republic held on July 15, 2012',
                'created_at' => '2022-05-10 13:34:11',
                'updated_at' => '2022-05-10 13:34:11',
            ),
            354 => 
            array (
                'id' => 355,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'О проверке и утверждении результатов выборов в Верховное Собрание Нахчыванской Автономной Республики, состоявшихся 15 июля 2012 года',
                'created_at' => '2022-05-10 13:34:11',
                'updated_at' => '2022-05-10 13:34:11',
            ),
            355 => 
            array (
                'id' => 356,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'on-verification-and-approval-of-the-results-of-the-elections-to-the-supreme-assembly-of-the-nakhchivan-autonomous-republic-held-on-july-15-2012',
                'created_at' => '2022-05-10 13:34:11',
                'updated_at' => '2022-05-10 13:34:11',
            ),
            356 => 
            array (
                'id' => 357,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'o-proverke-i-utverzhdenii-rezultatov-vyborov-v-verhovnoe-sobranie-nahchyvanskoj-avtonomnoj-respubliki-sostoyavshihsya-15-iyulya-2012-goda',
                'created_at' => '2022-05-10 13:34:11',
                'updated_at' => '2022-05-10 13:34:11',
            ),
            357 => 
            array (
                'id' => 358,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər &uuml;zrə 15 iyul 2012ci il tarixdə ke&ccedil;irilmiş se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsinə dair</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">&nbsp;NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R I</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; 20 iyul 2012-ci il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti Ramiz Rəhim oğlu S&uuml;leymanovun sədrliyi ilə, Rəyasət Heyətinin &uuml;zvləri Yusifəli S&uuml;leyman oğlu Qur-banov və Qabil Neymət oğlu Məmmədovdan ibarət tərkibdə, Azər Yusif oğlu Nuriyevin katibliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının sədri Qasımov Məhərrəm Əli oğlunun, sədr m&uuml;avini Qədimov Əli Tofiq oğlunun, katibi Eyvazov Elnur Həsənəli oğlunun, &uuml;zvlər Kazımov Anar Altay oğlunun, Həsənov Tural D&uuml;nyanur oğlu və Bayramova Vahidə Vahid qızının,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; M&uuml;təxəssislər Nax&ccedil;ıvan Muxtar Respublikası D&ouml;vlət Statistika Komitəsinin əməkdaşları Məmmədov Telman Vəli oğlunun, Qurbanov Cavanşir Məmməd oğlunun və Bağırov H&uuml;seyn Fərəməz oğlunun iştirakı ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsinə uyğun olaraq Rəyasət Heyətinin iclasında konstitusiya icraatı qaydasında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 15 iyul 2012-ci il tarixdə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsi haqqında işə baxaraq hakim Yusifəli S&uuml;leyman oğlu Qurbanovun məruzəsini, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının sədri Qasımov Məhərrəm Əli oğlunun &ccedil;ıxışını və m&uuml;təxəssislərin arayışını dinləyib m&uuml;zakirə edərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; M &Uuml; Ə Y Y Ə N &nbsp; E T D İ :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 5-ci maddəsinin 2-ci hissəsinin 1-ci bəndinə, &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 8.1-ci maddəsinə və &laquo;20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin təyin edilməsi haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin &laquo;17&raquo; may 2012-ci il tarixli Sərəncamına əsasən 15 iyul 2012-ci il tarixdə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər ke&ccedil;irilmişdir.&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 93.1-ci maddəsinə uyğun olaraq Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsinə Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən 17 iyul 2012-ci il tarixdə 20 saylı Yarımca se&ccedil;ki dairəsinin və 9 məntəqə se&ccedil;ki komissiyasının 15 iyul 2012-ci il tarixdə tərtib edilmiş se&ccedil;kilərin nəticələri haqqında protokolları, həm&ccedil;inin se&ccedil;kinin &uuml;mumi yekunlarının m&uuml;əyyənləşdirilməsinə dair Mərkəzi Se&ccedil;ki Komissiyasının 17 iyul 2012-ci il tarixli SQ-3/2012 n&ouml;mrəli qərarı və protokolu təqdim edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Təqdim edilmiş se&ccedil;kilərin &uuml;mumi yekunları haqqında sənədlərdə 15 iyul 2012-ci il tarixdə 20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə 9 se&ccedil;ki məntəqəsində Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri &ouml;z əksini tapmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Se&ccedil;kilərin &uuml;mumi yekunları haqqında təqdim edilmiş sənədlərdən məlum olur ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər &uuml;zrə 20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə passiv se&ccedil;ki h&uuml;ququ olan 3 nəfər Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən deputatlığa namizəd kimi qeydə alınmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Səsvermə g&uuml;n&uuml; Nax&ccedil;ıvan Muxtar Respublikası &uuml;zrə 20 saylı Yarımca se&ccedil;ki dairəsinin 9 se&ccedil;ki məntəqəsində səsvermə ke&ccedil;irilmişdir.&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Se&ccedil;ki sənədləri yoxlanılarkən m&uuml;əyyən edilmişdir ki, Nax&ccedil;ıvan Muxtar Respub-likası &uuml;zrə Ali Məclisə əlavə se&ccedil;kilərin ke&ccedil;irilməsi &uuml;&ccedil;&uuml;n yaradılmış 20 saylı Yarımca se&ccedil;ki dairəsini əhatə edən 9 se&ccedil;ki məntəqəsi &uuml;zrə aktiv se&ccedil;ki h&uuml;ququ olan 6437 se&ccedil;ici &uuml;mumi se&ccedil;ici siyahılarına daxil edilmiş, onlardan 4094 nəfəri, yəni 63.6 faizi səsvermədə iştirak etmişdir. Səsvermədə iştirak etmiş se&ccedil;icilərin 4094 nəfəri bilavasitə se&ccedil;ki məntəqələrində səs vermişlər. Se&ccedil;ki qutularında aşkar edilən b&uuml;lletenlərdən 4051 se&ccedil;ki b&uuml;lleteni, yəni 98.9 faizi etibarlı hesab edilmiş, 43 b&uuml;lleten, yəni 1.1 faizi isə etibarsız hesab edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Məntəqələr &uuml;zrə se&ccedil;ki g&uuml;n&uuml; 2343 ədəd istifadə edilməmiş se&ccedil;ki b&uuml;lletenləri mən-təqə se&ccedil;ki komissiyaları tərəfindən ləğv edilmişdir. G&ouml;stərilənlər &laquo;Nax&ccedil;ıvan Muxtar Res-publikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 88-89-cu maddələrinin tələblərinə uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin yekunlarına dair təqdim olunmuş sənədlərin təhlilindən g&ouml;r&uuml;n&uuml;r ki, Muxtar Respublikanın ərazisində yaradılmış 9 se&ccedil;ki məntəqəsində 15 iyul 2012-ci il tarixdə se&ccedil;kilərin ke&ccedil;irilməsi zamanı aşkarlığı təmin etmək məqsədi ilə &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikasının Qanununun 37-41-ci maddələrinin tələblərinə uyğun olaraq namizədin vəkil etdiyi 1 nəfər şəxs, 2 nəfər səlahiyyətli n&uuml;mayəndə və 18 nəfər m&uuml;şahidə&ccedil;i se&ccedil;kilərin gedişini və səslərin hesablanmasını izləmişlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən təqdim olunmuş, həm&ccedil;inin Ali Məhkəmə tərəfindən tələb edilmiş sənədlərin, habelə cəlb olunmuş m&uuml;təxəssislərin arayışının təhlili g&ouml;stərir ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri barədə protokolları, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının 16 iyul 2012-ci il tarixli protokolu və onlara əlavə edilmiş sənədlər &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikasının Qanununa uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Ona g&ouml;rə də Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin yekunları təsdiq edilməlidir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Beləliklə, Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti g&ouml;stərilənlərə əsaslanıb Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsini, &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 93.1-ci və 93.4-c&uuml; maddələrini rəhbər tutaraq&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Q Ə R A R A &nbsp; &nbsp; &nbsp; A L I R:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 15 iyul 2012-ci il tarixdə ke&ccedil;irilmiş 20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə əlavə se&ccedil;kilərin nəticələri təsdiq edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Qərar elan olunduğu g&uuml;ndən q&uuml;vvəyə minir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">3. Qərar &laquo;Şərq qapısı&raquo; qəzetində dərc edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">4. Qərar qətidir, he&ccedil; bir orqan tərəfindən ləğv edilə, dəyişdirilə və yaxud rəsmi təfsir edilə bilməz.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sədrlik edən: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ramiz S&uuml;leymanov</p>',
                'created_at' => '2022-05-10 13:34:11',
                'updated_at' => '2022-05-10 13:34:11',
            ),
            358 => 
            array (
                'id' => 359,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'On verification and approval of the results of the by-elections to the Supreme Assembly of the Nakhchivan Autonomous Republic held in Charchibogan Constituency No. 6 on October 2, 2011',
                'created_at' => '2022-05-10 13:34:49',
                'updated_at' => '2022-05-10 13:34:49',
            ),
            359 => 
            array (
                'id' => 360,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'О проверке и утверждении результатов довыборов в Верховное Собрание Нахчыванской Автономной Республики, проведенных по Чарчибоганскому избирательному округу № 6 2 октября 2011 года',
                'created_at' => '2022-05-10 13:34:49',
                'updated_at' => '2022-05-10 13:34:49',
            ),
            360 => 
            array (
                'id' => 361,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'on-verification-and-approval-of-the-results-of-the-by-elections-to-the-supreme-assembly-of-the-nakhchivan-autonomous-republic-held-in-charchibogan-constituency-no-6-on-october-2-2011',
                'created_at' => '2022-05-10 13:34:49',
                'updated_at' => '2022-05-10 13:34:49',
            ),
            361 => 
            array (
                'id' => 362,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'o-proverke-i-utverzhdenii-rezultatov-dovyborov-v-verhovnoe-sobranie-nahchyvanskoj-avtonomnoj-respubliki-provedennyh-po-charchiboganskomu-izbiratelnomu-okrugu-6-2-oktyabrya-2011-goda',
                'created_at' => '2022-05-10 13:34:49',
                'updated_at' => '2022-05-10 13:34:49',
            ),
            362 => 
            array (
                'id' => 363,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 02 oktyabr 2011-ci il tarixdə ke&ccedil;irilmiş 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə əlavə se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsinə dair</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">&nbsp;</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">&nbsp;</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R I</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp;11 oktyabr 2011-ci il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti Ramiz Rəhim oğlu S&uuml;leymanovun sədrliyi ilə, Rəyasət Heyətinin &uuml;zvləri Əli Kərim oğlu Allahverdiyev və Qabil Neymət oğlu Məmmədovdan ibarət tərkibdə, Azər Yusif oğlu Nuriyevin katibliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının &nbsp;sədri Qasımov Məhərrəm Əli oğlunun, sədr m&uuml;avini Qədimov Əli Tofiq oğlunun, katibi Eyvazov Elnur Həsənəli oğlunun, &uuml;zvlər Kazımov Anar Altay oğlunun, H&uuml;seynov Tural Cəmaləddin oğlunun, Həsənov Tural D&uuml;nyanur oğlunun və Bayramova Vahidə Vahid qızının,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;M&uuml;təxəssislər, Nax&ccedil;ıvan Muxtar Respublikası D&ouml;vlət Statistika Komitəsinin əməkdaşları Məmmədov Telman Vəli oğlunun, Qurbanov Cavanşir Məmməd oğlunun və Əsgərov Rəhim Əsgər oğlunun iştirakı ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsinə uyğun olaraq Rəyasət Heyətinin iclasında konstitusiya icraatı qaydasında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 02 oktyabr 2011-ci il tarixdə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsi haqqında işə baxaraq hakim Qabil Neymət oğlu Məmmədovun məruzəsini, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının sədri Məhərrəm Əli oğlu Qasımovun &ccedil;ıxışını və m&uuml;təxəssislərin arayışını dinləyib m&uuml;zakirə edərək &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">M &Uuml; Ə Y Y Ə N &nbsp; E T D İ :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 5-ci maddəsinin 2-ci hissəsinin 1-ci bəndinə, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 8.1-ci maddəsinə və 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin təyin edilməsi haqqında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin &laquo; 04 &raquo; avqust 2011-ci il tarixli Fərmanına əsasən 02 oktyabr 2011-ci il tarixdə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər ke&ccedil;irilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 93.1-ci maddəsinə uyğun olaraq Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsinə Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən 05 oktyabr 2011-ci il tarixdə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsinin və 8 məntəqə se&ccedil;ki komissiyasının 02 oktyabr 2011-ci ildə tərtib edilmiş se&ccedil;kilərin nəticələri haqqında protokolları, həm&ccedil;inin se&ccedil;kinin &uuml;mumi yekunlarının m&uuml;əyyənləşdirilməsinə dair Mərkəzi Se&ccedil;ki Komissiyasının 04 oktyabr 2011-ci il tarixli SQ-3/2011 n&ouml;mrəli qərarı və protokolu təqdim edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Təqdim edilmiş se&ccedil;kilərin &uuml;mumi yekunları haqqında sənədlərdə 02 oktyabr 2011-ci il tarixdə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə 8 se&ccedil;ki məntəqəsində Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri &ouml;z əksini tapmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Se&ccedil;kilərin &uuml;mumi yekunları haqqında təqdim edilmiş sənədlərdən məlum olur ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər &uuml;zrə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə passiv se&ccedil;ki h&uuml;ququ olan 3 nəfər Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən deputatlığa namizəd kimi qeydə alınmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Səsvermə g&uuml;n&uuml; Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər &nbsp; &uuml;zrə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki &nbsp;dairəsinin 8 se&ccedil;ki məntəqəsində səsvermə ke&ccedil;irilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Se&ccedil;ki sənədləri yoxlanılarkən m&uuml;əyyən edilmişdir ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin ke&ccedil;irilməsi &uuml;&ccedil;&uuml;n yaradılmış 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsini əhatə edən 8 se&ccedil;ki məntəqəsi &uuml;zrə aktiv se&ccedil;ki h&uuml;ququ olan 5451 se&ccedil;ici &uuml;mumi se&ccedil;ici siyahılarına daxil edilmiş, onlardan 3120 nəfəri, yəni 57.2 faizi səsvermədə iştirak etmişdir. Səsvermədə iştirak etmiş se&ccedil;icilərin 3120 nəfəri bilavasitə se&ccedil;ki məntəqələrində səs vermişlər. Se&ccedil;ki qutularında aşkar edilən b&uuml;lletenlərdən 3118 se&ccedil;ki b&uuml;lleteni, yəni 99.9 faizi etibarlı hesab edilmiş, 2 b&uuml;lleten, yəni 0.1 faizi isə etibarsız hesab edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Məntəqələr &uuml;zrə se&ccedil;ki g&uuml;n&uuml; 3 ədəd korlanmış, 2328 ədəd isə istifadə edilməmiş se&ccedil;ki b&uuml;lletenləri məntəqə se&ccedil;ki komissiyaları tərəfindən ləğv edilmişdir. G&ouml;stərilənlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 88-89-cu maddələrinin tələblərinə uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin yekunlarına dair təqdim olunmuş sənədlərin təhlilindən g&ouml;r&uuml;n&uuml;r ki, 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsinin ərazisində yaradılmış 8 se&ccedil;ki məntəqəsində 02 oktyabr 2011-ci il tarixdə se&ccedil;kilərin ke&ccedil;irilməsi zamanı aşkarlığı təmin etmək məqsədi ilə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə &nbsp;se&ccedil;kilər &nbsp;haqqında &nbsp;Nax&ccedil;ıvan &nbsp;Muxtar &nbsp;Respublikasının &nbsp;Qanununun 37-39-cu maddələrinin tələblərinə uyğun olaraq 16 nəfər yerli m&uuml;şahidə&ccedil;ilər se&ccedil;kilərin gedişini və səslərin hesablanmasını izləmişlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən təqdim olunmuş, həm&ccedil;inin Ali Məhkəmə tərəfindən tələb edilmiş sənədlərin, habelə cəlb olunmuş m&uuml;təxəssislərin arayışının təhlili g&ouml;stərir ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri barədə protokolları, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının 04 oktyabr 2011-ci il tarixli &nbsp;protokolu və onlara əlavə edilmiş sənədlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikasının &nbsp;Qanununa uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Ona g&ouml;rə də 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin yekunları təsdiq edilməlidir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">G&ouml;stərilənlərə əsasən, Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsini, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası &nbsp;Qanununun 93.1-ci və 93.4-c&uuml; maddələrini rəhbər tutaraq &nbsp; &nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">Q Ə R A R A &nbsp; A L I R :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə 02 oktyabr 2011-ci ildə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri təsdiq edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Qərar elan olunduğu g&uuml;ndən q&uuml;vvəyə minir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">3. Qərar &laquo;Şərq qapısı&raquo; qəzetində dərc edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">4. Qərar qətidir, he&ccedil; bir orqan tərəfindən ləğv edilə, dəyişdirilə və yaxud rəsmi təfsir edilə bilməz.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">Sədrlik edən:- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ramiz &nbsp;S&uuml;leymanov</p>',
                'created_at' => '2022-05-10 13:34:49',
                'updated_at' => '2022-05-10 13:34:49',
            ),
            363 => 
            array (
                'id' => 364,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Decision № 2 2011',
                'created_at' => '2022-05-10 13:35:25',
                'updated_at' => '2022-05-10 13:35:25',
            ),
            364 => 
            array (
                'id' => 365,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Решение № 2 2011 г.',
                'created_at' => '2022-05-10 13:35:25',
                'updated_at' => '2022-05-10 13:35:25',
            ),
            365 => 
            array (
                'id' => 366,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'decision-2-2011',
                'created_at' => '2022-05-10 13:35:25',
                'updated_at' => '2022-05-10 13:35:25',
            ),
            366 => 
            array (
                'id' => 367,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'reshenie-2-2011-g',
                'created_at' => '2022-05-10 13:35:25',
                'updated_at' => '2022-05-10 13:35:25',
            ),
            367 => 
            array (
                'id' => 368,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN &nbsp;MUXTAR &nbsp;RESPUBLİKASI</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">ALİ &nbsp;MƏHKƏMƏSİ &nbsp;RƏYASƏT &nbsp;HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R I &nbsp;№ 2</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">02 fevral &nbsp;2011-ci il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti aşağıdakı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Ali Məhkəmənin sədri R.R.S&uuml;leymanovun sədrliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">m&uuml;lki işlər &uuml;zrə kollegiyanın sədri vəzifəsini icra edən Ə.K.Allahverdiyevin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">inzibati-iqtisadi kollegiyanın sədri vəzifəsini icra edən Y.S.Qurbanovun iştirakı ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Ali Məhkəmənin Rəyasət Heyətinin 02 fevral 2011-ci il tarixdə ke&ccedil;irilən iclasının g&uuml;ndəliyində duran &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin nəşri olan &laquo;B&uuml;lleten&raquo;in Redaksiya Heyətinin yeni tərkibinin təsdiq olunması&raquo; &nbsp;məsələsini m&uuml;zakirə edərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">Q ə r a r a &nbsp; &nbsp;a l ı r :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin nəşri olan &laquo;B&uuml;lleten&raquo;in Redaksiya Heyəti aşağıdakı yeni tərkibdə təsdiq olunsun:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">B&uuml;lletenin buraxılışına məsul şəxs:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">S&uuml;leymanov Ramiz Rəhim oğlu</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Redaksiya Heyəti:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Allahverdiyev Əli Kərim oğlu;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Qurbanov Yusifəli S&uuml;leyman oğlu;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Mirzəyev İlqar Məhərrəm oğlu;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Quliyev V&uuml;qar Kərim oğlu;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Əliyev Mehdi Ədalət oğlu;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Qurbanova G&uuml;lay Əjdər qızı;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">B&uuml;lletenin məsul katibi:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">Xəlilov Yunis Fərman oğlu</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; outline: none !important;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; S Ə D R : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RAMİZ &nbsp;S&Uuml;LEYMANOV</p>',
                'created_at' => '2022-05-10 13:35:25',
                'updated_at' => '2022-05-10 13:35:25',
            ),
            368 => 
            array (
                'id' => 369,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Decision of the Presidium of the Supreme Court of the Nakhchivan Autonomous Republic dated November 19, 2010 on verification and approval of the results of the elections held on November 7, 2010 on elections to the Supreme Assembly of Nakhchivan AR',
                'created_at' => '2022-05-10 13:36:07',
                'updated_at' => '2022-05-10 13:36:07',
            ),
            369 => 
            array (
                'id' => 370,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Постановление Президиума Верховного Суда Нахчыванской Автономной Республики от 19 ноября 2010 года о проверке и утверждении результатов состоявшихся 7 ноября 2010 года выборов в Верховное Собрание Нахчыванской АР',
                'created_at' => '2022-05-10 13:36:07',
                'updated_at' => '2022-05-10 13:36:07',
            ),
            370 => 
            array (
                'id' => 371,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'decision-of-the-presidium-of-the-supreme-court-of-the-nakhchivan-autonomous-republic-dated-november-19-2010-on-verification-and-approval-of-the-results-of-the-elections-held-on-november-7-2010-on-elections-to-the-supreme-assembly-of-nakhchivan-ar',
                'created_at' => '2022-05-10 13:36:07',
                'updated_at' => '2022-05-10 13:36:07',
            ),
            371 => 
            array (
                'id' => 372,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'postanovlenie-prezidiuma-verhovnogo-suda-nahchyvanskoj-avtonomnoj-respubliki-ot-19-noyabrya-2010-goda-o-proverke-i-utverzhdenii-rezultatov-sostoyavshihsya-7-noyabrya-2010-goda-vyborov-v-verhovnoe-sobranie-nahchyvanskoj-ar',
                'created_at' => '2022-05-10 13:36:07',
                'updated_at' => '2022-05-10 13:36:07',
            ),
            372 => 
            array (
                'id' => 373,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => '<h1 class="" style="box-sizing: border-box; margin: 0px 0px 25px; font-size: 24.48px; font-family: Arial, sans-serif; font-weight: normal; line-height: 34.272px; color: #5e502f; padding: 30px 0px 14px; text-rendering: optimizelegibility; border-top: 1px dotted #bbbbbb; border-bottom: 1px dotted #bbbbbb; letter-spacing: -0.3px;">Nax&ccedil;ıvan MR Ali Məclisinə se&ccedil;kilər &uuml;zrə 07 noyabr 2010-cu il tarixdə ke&ccedil;irilmiş se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsinə dair Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyətinin 19 noyabr 2010-cu il tarixli qərarı</h1>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər &uuml;zrə 07 noyabr 2010-cu il tarixdə ke&ccedil;irilmiş se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsinə dair</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">&nbsp;</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALI MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">&nbsp;</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R I</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp;19 noyabr 2010-cu il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti Ramiz Rəhim oğlu S&uuml;leymanovun sədrliyi ilə, Rəyasət Heyətinin &uuml;zvləri Əli Kərim oğlu Allahverdiyev və Yusifəli S&uuml;leyman oğlu Qurbanovdan ibarət tərkibdə, Azər Yusif oğlu Nuriyevin katibliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının &nbsp;sədri Qasımov Məhərrəm Əli oğlunun, sədr m&uuml;avini Qədimov Əli Tofiq oğlunun, katibi Eyvazov Elnur Həsənəli oğlunun, &uuml;zvlər Kazımov Anar Altay oğlunun, H&uuml;seynov Tural Cəmaləddin oğlunun, Həsənov Tural D&uuml;nyanur oğlu və Bayramova Vahidə Vahid qızının,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; M&uuml;təxəssislər, Nax&ccedil;ıvan Muxtar Respublikası D&ouml;vlət Statistika Komitəsinin əməkdaşları Məmmədov Telman Vəli oğlunun, Qurbanov Cavanşir Məmməd oğlunun və Əsgərov Rəhim Əsgər oğlunun iştirakı ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsinə uyğun olaraq Rəyasət Heyətinin iclasında konstitusiya icraatı qaydasında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 7 noyabr 2010-cu il tarixdə ke&ccedil;irilmiş se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsi haqqında işə baxaraq hakim Əli Kərim oğlu Allahverdiyevin məruzəsini, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının &nbsp;sədri Qasımov Məhərrəm Əli oğlunun &ccedil;ıxışını və m&uuml;təxəssislərin arayışını dinləyib m&uuml;zakirə edərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; M &Uuml; Ə Y Y Ə N &nbsp; E T D İ :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 5-ci maddəsinin 2-ci hissəsinin 1-ci bəndinə, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 8.1-ci maddəsinə və Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilərin təyin edilməsi haqqında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin &laquo; 04 &raquo; sentyabr 2010-cu il tarixli Fərmanına &nbsp;əsasən 07 noyabr 2010-cu il tarixdə Nax&ccedil;ıvan Muxtar Respublikasında Ali Məclisə se&ccedil;kilər ke&ccedil;irilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 93.1-ci maddəsinə uyğun olaraq Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsinə Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən 15 noyabr 2010-cu il tarixdə 45 se&ccedil;ki dairəsinin və 316 məntəqə se&ccedil;ki komissiyasının 7 noyabr 2010-cu ildə tərtib edilmiş se&ccedil;kilərin nəticələri haqqında protokolları, həm&ccedil;inin se&ccedil;kinin &uuml;mumi yekunlarının m&uuml;əyyənləşdirilməsinə dair Mərkəzi Se&ccedil;ki Komissiyasının 15 noyabr 2010-cu il tarixli SQ-7/2010 n&ouml;mrəli qərarı və protokolu təqdim edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Təqdim edilmiş &nbsp;se&ccedil;kilərin &uuml;mumi yekunları haqqında sənədlərdə 7 noyabr 2010-cu il tarixdə 45 se&ccedil;ki dairəsi &uuml;zrə 316 se&ccedil;ki məntəqəsində Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə ke&ccedil;irilmiş se&ccedil;kilərin nəticələri &ouml;z əksini tapmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Se&ccedil;kilərin &uuml;mumi yekunları haqqında təqdim edilmiş sənədlərdən məlum olur ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər &uuml;zrə 45 se&ccedil;ki dairəsi &uuml;zrə passiv se&ccedil;ki h&uuml;ququ olan &nbsp;140 nəfər Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən deputatlığa namizəd kimi qeydə alınmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Səsvermə g&uuml;n&uuml; Nax&ccedil;ıvan Muxtar Respublikası &uuml;zrə 45 se&ccedil;ki dairəsinin 316 se&ccedil;ki məntəqəsində səsvermə ke&ccedil;irilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Se&ccedil;ki sənədləri yoxlanılarkən m&uuml;əyyən edilmişdir ki, Nax&ccedil;ıvan Muxtar Respublikası &uuml;zrə Ali Məclisə se&ccedil;kilərin ke&ccedil;irilməsi &uuml;&ccedil;&uuml;n yaradılmış 45 se&ccedil;ki dairəsini əhatə edən 316 se&ccedil;ki məntəqəsi &uuml;zrə aktiv se&ccedil;ki h&uuml;ququ olan 256317 se&ccedil;ici &uuml;mumi se&ccedil;ici siyahılarına daxil edilmiş, onlardan 174780 nəfəri, yəni 68.2 faizi səsvermədə iştirak etmişdir. Səsvermədə iştirak etmiş se&ccedil;icilərin &nbsp;174579 nəfəri bilavasitə se&ccedil;ki məntəqələrində, 201 nəfəri isə qanunun tələbinə uyğun olaraq səsvermə otağından kənarda səs vermişlər. Se&ccedil;ki qutularında aşkar edilən b&uuml;lletenlərdən 171633 se&ccedil;ki b&uuml;lleteni, yəni 98.2 faizi etibarlı hesab edilmiş, 3147 b&uuml;lleten, yəni 1.8 faizi isə etibarsız hesab edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Məntəqələr &uuml;zrə se&ccedil;ki g&uuml;n&uuml; 21 ədəd korlanmış, 81503 ədəd isə istifadə edilməmiş se&ccedil;ki b&uuml;lletenləri məntəqə se&ccedil;ki komissiyaları tərəfindən ləğv edilmişdir. G&ouml;stərilənlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 88-89-cu maddələrinin tələblərinə uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilərin yekunlarına dair təqdim olunmuş sənədlərin təhlilindən g&ouml;r&uuml;n&uuml;r ki, Muxtar Respublikanın ərazisində yaradılmış 316 seski məntəqəsində 7 noyabr 2010-cu il tarixdə se&ccedil;kilərin ke&ccedil;irilməsi zamanı aşkarlığı təmin etmək məqsədi ilə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikasının Qanununun 37-41-ci maddələrinin tələblərinə uyğun olaraq namizədlərin vəkil etdiyi 127 nəfər şəxs, 273 nəfər yerli m&uuml;şahidə&ccedil;i, həm&ccedil;inin 33 nəfər beynəlxalq və 32 nəfər m&uuml;xtəlif siyasi partiyaların m&uuml;şahidə&ccedil;iləri se&ccedil;kilərin gedişini və səslərin hesablanmasını izləmişlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən təqdim olunmuş, həm&ccedil;inin Ali Məhkəmə tərəfindən tələb edilmiş sənədlərin, habelə cəlb olunmuş m&uuml;təxəssislərin arayışının təhlili g&ouml;stərir ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 45 se&ccedil;ki dairəsi &uuml;zrə ke&ccedil;irilmiş se&ccedil;kilərin nəticələri barədə protokolları, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının 15 noyabr 2010-cu il tarixli &nbsp;protokolu və onlara əlavə edilmiş sənədlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikasının &nbsp;Qanununa uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Ona g&ouml;rə də Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilərin yekunları təsdiq edilməlidir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Beləliklə, Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti g&ouml;stərilənlərə əsaslanıb Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsini, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası &nbsp;Qanununun 93.1-ci və 93.4-c&uuml; maddələrini rəhbər tutaraq &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Q Ə R A R A &nbsp; A L I R &nbsp;:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 07 noyabr 2010-cu ildə ke&ccedil;irilmiş 45 se&ccedil;ki dairəsi &uuml;zrə se&ccedil;kilərin nəticələri b&uuml;t&ouml;vl&uuml;kdə təsdiq edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Qərar elan olunduğu g&uuml;ndən q&uuml;vvəyə minir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">3. Qərar &laquo;Şərq qapısı&raquo; qəzetində dərc edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">4. Qərar qətidir, he&ccedil; bir orqan tərəfindən ləğv edilə, dəyişdirilə və yaxud rəsmi &nbsp; &nbsp;təfsir edilə bilməz.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">&nbsp; &nbsp; &nbsp; S Ə D R :- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RAMİZ &nbsp;S&Uuml;LEYMANOV</p>',
                'created_at' => '2022-05-10 13:36:07',
                'updated_at' => '2022-05-10 13:36:07',
            ),
            373 => 
            array (
                'id' => 374,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Decision № 2 2009',
                'created_at' => '2022-05-10 13:37:06',
                'updated_at' => '2022-05-10 13:37:06',
            ),
            374 => 
            array (
                'id' => 375,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Решение № 2 2009 г.',
                'created_at' => '2022-05-10 13:37:06',
                'updated_at' => '2022-05-10 13:37:06',
            ),
            375 => 
            array (
                'id' => 376,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'decision-2-2009',
                'created_at' => '2022-05-10 13:37:06',
                'updated_at' => '2022-05-10 13:37:06',
            ),
            376 => 
            array (
                'id' => 377,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'reshenie-2-2009-g',
                'created_at' => '2022-05-10 13:37:06',
                'updated_at' => '2022-05-10 13:37:06',
            ),
            377 => 
            array (
                'id' => 378,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN &nbsp;MUXTAR &nbsp;RESPUBLİKASI</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">ALİ &nbsp;MƏHKƏMƏSİ &nbsp;RƏYASƏT &nbsp;HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R I &nbsp;№ 1</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">12 yanvar &nbsp;2009-cu il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti aşağıdakı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Ali Məhkəmənin sədri R.R.S&uuml;leymanovun sədrliyi ilə,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">m&uuml;lki işlər &uuml;zrə kollegiyanın &nbsp; &nbsp; &nbsp; &nbsp;sədri Ə.K.Allahverdiyevin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">hərbi məhkəmələrin işləri &uuml;zrə kollegiyanın sədri H.Q.Nəsibovun iştirakı ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Ali Məhkəmənin sədri R.R.S&uuml;leymanovun 2008-ci ildə Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsini, məruzə ilə əlaqədar &ccedil;ıxışları dinləyib m&uuml;zakirə edərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">Q ə r a r a &nbsp; &nbsp;a l ı r :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Ali Məhkəmənin sədri R.R.S&uuml;leymanovun 2008-ci ilin birinci yarısında Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsi nəzərə alınsın.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Muxtar Respublikanın ixtisaslaşırılmış, şəhər və rayon məhkəmələrinə t&ouml;vsiyyə olunsun ki;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- N&ouml;vbəti ildə işlərə baxılarkən Azərbaycan Respublikasının Konstitusiyasında təsbit edilmiş əsas insan və vətəndaş h&uuml;quq və azadlıqlarının qorunması, qanunvericiliyin tələblərinə riayət edilməsi istiqamətində əməli tədbirlər g&ouml;rs&uuml;nlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Vətəndaşlardan daxil olmuş ərizə və şikayətlərə, şifahi m&uuml;raciətlərə Azərbaycan Respublikasının &laquo;Vətəndaşların m&uuml;raciətlərinə baxılması qaydası haqqında&raquo; Qanunun tələblərinə uyğun olaraq baxılmasını təmin etsinlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Azərbaycan Respublikası Ədliyyə naziri və Azərbaycan Respublikası Ali Məhkəməsinin sədri tərəfindən 30 avqust 2007-ci il tarixdə təsdiq olunmuş &laquo;Azərbaycan Respublikasının məhkəmələrində &nbsp;karg&uuml;zarlığın aparılmasına dair Təlimat&raquo;a uyğun olaraq məhkəmələrdə statistika və karg&uuml;zarlığın aparılması işinin təkmilləşdirilməsinə, əmək və icra intizamına daha ciddi əməl olunmasına x&uuml;susi diqqət yetirsinlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">S Ə D R :- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RAMİZ &nbsp;S&Uuml;LEYMANOV</p>',
                'created_at' => '2022-05-10 13:37:06',
                'updated_at' => '2022-05-10 13:37:06',
            ),
            378 => 
            array (
                'id' => 379,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Decision № 1 2009',
                'created_at' => '2022-05-10 13:37:44',
                'updated_at' => '2022-05-10 13:37:44',
            ),
            379 => 
            array (
                'id' => 380,
                'table_name' => 'decisionpresidia',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Решение № 1 2009 г.',
                'created_at' => '2022-05-10 13:37:44',
                'updated_at' => '2022-05-10 13:37:44',
            ),
            380 => 
            array (
                'id' => 381,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'decision-1-2009',
                'created_at' => '2022-05-10 13:37:44',
                'updated_at' => '2022-05-10 13:37:44',
            ),
            381 => 
            array (
                'id' => 382,
                'table_name' => 'decisionpresidia',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'reshenie-1-2009-g',
                'created_at' => '2022-05-10 13:37:44',
                'updated_at' => '2022-05-10 13:37:44',
            ),
            382 => 
            array (
                'id' => 383,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN &nbsp;MUXTAR &nbsp;RESPUBLİKASI&nbsp;<span style="box-sizing: border-box; line-height: 1.3em;">ALİ &nbsp;MƏHKƏMƏSİ &nbsp;RƏYASƏT &nbsp;HEYƏTİNİN</span></strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R I &nbsp;№ 1</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">21 iyul &nbsp;2009-cu il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti aşağıdakı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; line-height: 1.3em;">Ali Məhkəmənin sədri R.R.S&uuml;leymanovun sədrliyi ilə,</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">m&uuml;lki işlər &uuml;zrə kollegiyanın sədri Ə.K.Allahverdiyevin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">hərbi məhkəmələrin işləri &uuml;zrə kollegiyanın sədri H.Q.Nəsibovun iştirakı ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;<span style="box-sizing: border-box; line-height: 1.3em;">Ali Məhkəmənin sədri R.R.S&uuml;leymanovun 2009-cu ilin birinci yarısında Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsini, Nax&ccedil;ıvan MR Vəkillər Kollegiyasına hakim &uuml;zv&uuml;n se&ccedil;ilməsinə dair məlumatını, məruzə və ikinci məsələ haqqında &ccedil;ıxışları dinləyib</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">Q ə r a r a &nbsp; &nbsp; a l ı r:-</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; line-height: 1.3em;">1.Ali Məhkəmənin sədri R.R.S&uuml;leymanovun 2009-cu ilin birinci yarısında Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsi nəzərə alınsın.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; line-height: 1.3em;">2.Muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələrinə t&ouml;vsiyyə olunsun ki:</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; line-height: 1.3em;">- n&ouml;vbəti ildə işlərə baxılarkən Azərbaycan Respublikasının Konstitusiyasında təsbit edilmiş əsas insan və vətəndaş h&uuml;quq və azadlıqlarının g&ouml;zlənilməsini, qanunvericiliyin tələblərinə riayət olunmasını təmin etsinlər;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; line-height: 1.3em;">- vətəndaşlardan daxil olmuş ərizə və şikayətlərə, şifahi m&uuml;raciətlərə baxılmasını &laquo;Vətəndaşların m&uuml;raciətlərinə baxılması qaydası haqqında&raquo; Azərbaycan Respublikası Qanununun tələblərinə uyğun olaraq həyata ke&ccedil;irsinlər;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; line-height: 1.3em;">- Azərbaycan Respublikası Ədliyyə naziri və Azərbaycan Respublikası Ali Məhkəməsinin sədri tərəfindən 30 avqust 2007-ci il tarixdə təsdiq olunmuş &laquo;Azərbaycan Respublikasının məhkəmələrində karg&uuml;zarlığın aparılmasına dair Təlimat&raquo;a uyğun olaraq məhkəmələrdə statistika və karg&uuml;zarlığın aparılması işinin təkmilləşdirilməsinə, əmək və icra intizamına ciddi əməl olunmasına diqqət yetirsinlər.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; line-height: 1.3em;">3. &laquo;Nax&ccedil;ıvan Muxtar Respublikası Vəkillər Kollegiyası haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 5-ci maddəsinin III hissəsinə əsasən Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin hakimi Qurbanov Yusifəli S&uuml;leyman oğlu Nax&ccedil;ıvan Muxtar Respublikası Vəkillər Kollegiyası Vəkillərin İxtisas Komissiyasının &uuml;zv&uuml; təyin edilsin.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;<span style="box-sizing: border-box; line-height: 1.3em;">&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">S Ə D R: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RAMİZ S&Uuml;LEYMANOV&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">&nbsp;</p>',
                'created_at' => '2022-05-10 13:37:44',
                'updated_at' => '2022-05-10 13:37:44',
            ),
            383 => 
            array (
                'id' => 384,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 13:44:05',
                'updated_at' => '2022-05-10 13:44:05',
            ),
            384 => 
            array (
                'id' => 385,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-10 13:44:05',
                'updated_at' => '2022-05-10 13:44:05',
            ),
            385 => 
            array (
                'id' => 386,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 13:44:05',
                'updated_at' => '2022-05-10 13:44:05',
            ),
            386 => 
            array (
                'id' => 387,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 101,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 13:44:05',
                'updated_at' => '2022-05-10 13:44:05',
            ),
            387 => 
            array (
                'id' => 388,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 102,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 13:44:05',
                'updated_at' => '2022-05-10 13:44:05',
            ),
            388 => 
            array (
                'id' => 389,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 31,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 13:44:05',
                'updated_at' => '2022-05-10 13:44:05',
            ),
            389 => 
            array (
                'id' => 390,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 32,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 13:44:05',
                'updated_at' => '2022-05-10 13:44:05',
            ),
            390 => 
            array (
                'id' => 393,
                'table_name' => 'news',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'THE COLLECTIVE OF THE SUPREME COURT OF THE NAKHCHIVAN AUTONOMOUS REPUBLIC AND THE COLLECTIVE OF SPECIALIZED COURTS IN THE MUSEUM DAYS. NATIONAL VALUES',
                'created_at' => '2022-05-10 13:47:55',
                'updated_at' => '2022-05-11 06:00:53',
            ),
            391 => 
            array (
                'id' => 394,
                'table_name' => 'news',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'КОЛЛЕКТИВ ВЕРХОВНОГО СУДА НАХЧЫВАНСКОЙ АВТОНОМНОЙ РЕСПУБЛИКИ И КОЛЛЕКТИВ СПЕЦИАЛИЗИРОВАННЫХ СУДОВ В ДНИ МУЗЕЯ НАЦИОНАЛЬНЫЕ ЦЕННОСТИ',
                'created_at' => '2022-05-10 13:47:55',
                'updated_at' => '2022-05-11 06:00:53',
            ),
            392 => 
            array (
                'id' => 395,
                'table_name' => 'news',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'the-collective-of-the-supreme-court-of-the-nakhchivan-autonomous-republic-and-the-collective-of-specialized-courts-in-the-museum-days-national-values',
                'created_at' => '2022-05-10 13:47:55',
                'updated_at' => '2022-05-11 06:00:53',
            ),
            393 => 
            array (
                'id' => 396,
                'table_name' => 'news',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'kollektiv-verhovnogo-suda-nahchyvanskoj-avtonomnoj-respubliki-i-kollektiv-specializirovannyh-sudov-v-dni-muzeya-nacionalnye-cennosti',
                'created_at' => '2022-05-10 13:47:55',
                'updated_at' => '2022-05-11 06:00:53',
            ),
            394 => 
            array (
                'id' => 397,
                'table_name' => 'news',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 1cm;"><span style="font-family: Times New Roman, serif;"><span style="font-size: 18.6667px;">content en</span></span></p>',
                'created_at' => '2022-05-10 13:47:55',
                'updated_at' => '2022-05-11 06:00:53',
            ),
            395 => 
            array (
                'id' => 398,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 133,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 13:52:01',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            396 => 
            array (
                'id' => 399,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 134,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 13:52:01',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            397 => 
            array (
                'id' => 400,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 135,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 13:52:01',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            398 => 
            array (
                'id' => 401,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 136,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 13:52:01',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            399 => 
            array (
                'id' => 402,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 137,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 13:52:01',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            400 => 
            array (
                'id' => 403,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 138,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 13:52:01',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            401 => 
            array (
                'id' => 404,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'Report',
                'created_at' => '2022-05-10 13:52:01',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            402 => 
            array (
                'id' => 405,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'Reports',
                'created_at' => '2022-05-10 13:52:01',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            403 => 
            array (
                'id' => 406,
                'table_name' => 'reports',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Statistics on divorce cases in May 2017',
                'created_at' => '2022-05-10 13:52:43',
                'updated_at' => '2022-05-10 13:52:43',
            ),
            404 => 
            array (
                'id' => 407,
                'table_name' => 'reports',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Статистика разводов в мае 2017 года',
                'created_at' => '2022-05-10 13:52:43',
                'updated_at' => '2022-05-10 13:52:43',
            ),
            405 => 
            array (
                'id' => 408,
                'table_name' => 'reports',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'statistics-on-divorce-cases-in-may-2017',
                'created_at' => '2022-05-10 13:52:43',
                'updated_at' => '2022-05-10 13:52:43',
            ),
            406 => 
            array (
                'id' => 409,
                'table_name' => 'reports',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'statistika-razvodov-v-mae-2017-goda',
                'created_at' => '2022-05-10 13:52:43',
                'updated_at' => '2022-05-10 13:52:43',
            ),
            407 => 
            array (
                'id' => 410,
                'table_name' => 'reports',
                'column_name' => 'content',
                'foreign_key' => 4,
                'locale' => 'en',
            'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; font-size: 15pt; line-height: 23px; font-family: \'Times New Roman\', serif;">&nbsp; Nax&ccedil;ıvan&nbsp; Muxtar&nbsp; Respublikası rayon (şəhər) məhkəmələri tərəfindən 2017-ci ilin may ayı ərzində nikahın pozulması tələbinə dair 22 işə baxılaraq iddialar təmin edilmişdir. Baxılan işlərin rayon (şəhər) məhkəmələri &uuml;zrə b&ouml;lg&uuml;s&uuml; aşağıdakı kimi olmuşdur:</span></p>
<table style="border-spacing: 0px; border-collapse: collapse; max-width: 100%; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; border: none; outline: none !important;" border="1" cellspacing="0" cellpadding="0">
<tbody style="box-sizing: border-box; outline: none !important;">
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border: 1pt solid windowtext;" width="387"><strong style="box-sizing: border-box;"><em style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Məhkəmənin adı</span></em></strong></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: none;" width="387"><strong style="box-sizing: border-box;"><em style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">İşlərin sayı</span></em></strong></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Nax&ccedil;ıvan Şəhər Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">3</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Babək Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">3</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Şərur Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">4</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Culfa&nbsp; Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">1</span></td>
</tr>
<tr style="box-sizing: border-box; outline: none !important;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Şahbuz Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; outline: none !important;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">2</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Kəngərli Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">2</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Ordubad Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">6</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Sədərək Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">1</span></td>
</tr>
</tbody>
</table>',
                'created_at' => '2022-05-10 13:52:43',
                'updated_at' => '2022-05-10 13:52:43',
            ),
            408 => 
            array (
                'id' => 411,
                'table_name' => 'reports',
                'column_name' => 'content',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => '<p>Content ru</p>',
                'created_at' => '2022-05-10 13:52:43',
                'updated_at' => '2022-05-10 13:52:43',
            ),
            409 => 
            array (
                'id' => 412,
                'table_name' => 'reports',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Statistics on divorce cases in June 2017',
                'created_at' => '2022-05-10 13:54:36',
                'updated_at' => '2022-05-10 13:54:36',
            ),
            410 => 
            array (
                'id' => 413,
                'table_name' => 'reports',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Статистика разводов в июне 2017 года',
                'created_at' => '2022-05-10 13:54:36',
                'updated_at' => '2022-05-10 13:54:36',
            ),
            411 => 
            array (
                'id' => 414,
                'table_name' => 'reports',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'statistics-on-divorce-cases-in-june-2017',
                'created_at' => '2022-05-10 13:54:36',
                'updated_at' => '2022-05-10 13:54:36',
            ),
            412 => 
            array (
                'id' => 415,
                'table_name' => 'reports',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'statistika-razvodov-v-iyune-2017-goda',
                'created_at' => '2022-05-10 13:54:36',
                'updated_at' => '2022-05-10 13:54:36',
            ),
            413 => 
            array (
                'id' => 416,
                'table_name' => 'reports',
                'column_name' => 'content',
                'foreign_key' => 5,
                'locale' => 'en',
            'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; font-size: 15pt; line-height: 23px; font-family: \'Times New Roman\', serif;">&nbsp; Nax&ccedil;ıvan&nbsp; Muxtar&nbsp; Respublikası rayon (şəhər) məhkəmələri tərəfindən 2017-ci ilin iyun ayı ərzində nikahın pozulması tələbinə dair 33 işə baxılaraq iddialar təmin edilmişdir. Baxılan işlərin rayon (şəhər) məhkəmələri &uuml;zrə b&ouml;lg&uuml;s&uuml; aşağıdakı kimi olmuşdur:</span></p>
<table style="border-spacing: 0px; border-collapse: collapse; max-width: 100%; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; border: none;" border="1" cellspacing="0" cellpadding="0">
<tbody style="box-sizing: border-box;">
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border: 1pt solid windowtext;" width="387"><strong style="box-sizing: border-box;"><em style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Məhkəmənin adı</span></em></strong></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: none;" width="387"><strong style="box-sizing: border-box;"><em style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">İşlərin sayı</span></em></strong></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Nax&ccedil;ıvan Şəhər Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">9</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Babək Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">7</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Şərur Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">9</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Culfa&nbsp; Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">2</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Kəngərli Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">2</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Ordubad Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">3</span></td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">Sədərək Rayon Məhkəməsi</span></td>
<td style="box-sizing: border-box; padding: 0cm 5.4pt; width: 232.2pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext;" width="387"><span style="box-sizing: border-box; font-size: 15pt; font-family: \'Times New Roman\', serif;">1</span></td>
</tr>
</tbody>
</table>',
                'created_at' => '2022-05-10 13:54:36',
                'updated_at' => '2022-05-10 13:54:36',
            ),
            414 => 
            array (
                'id' => 417,
                'table_name' => 'reports',
                'column_name' => 'content',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => '<p>content ru</p>',
                'created_at' => '2022-05-10 13:54:36',
                'updated_at' => '2022-05-10 13:54:36',
            ),
            415 => 
            array (
                'id' => 418,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 127,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 16:28:55',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            416 => 
            array (
                'id' => 419,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 128,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 16:28:55',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            417 => 
            array (
                'id' => 420,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 129,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 16:28:55',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            418 => 
            array (
                'id' => 421,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 130,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 16:28:55',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            419 => 
            array (
                'id' => 422,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 131,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 16:28:55',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            420 => 
            array (
                'id' => 423,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 132,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 16:28:55',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            421 => 
            array (
                'id' => 424,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => 'Speech',
                'created_at' => '2022-05-10 16:28:55',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            422 => 
            array (
                'id' => 425,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => 'Speeches',
                'created_at' => '2022-05-10 16:28:55',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            423 => 
            array (
                'id' => 426,
                'table_name' => 'speeches',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Output 2',
                'created_at' => '2022-05-10 16:30:03',
                'updated_at' => '2022-05-10 16:30:03',
            ),
            424 => 
            array (
                'id' => 427,
                'table_name' => 'speeches',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Выход 2',
                'created_at' => '2022-05-10 16:30:03',
                'updated_at' => '2022-05-10 16:30:03',
            ),
            425 => 
            array (
                'id' => 428,
                'table_name' => 'speeches',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'output-2',
                'created_at' => '2022-05-10 16:30:03',
                'updated_at' => '2022-05-10 16:30:03',
            ),
            426 => 
            array (
                'id' => 429,
                'table_name' => 'speeches',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'vyhod-2',
                'created_at' => '2022-05-10 16:30:03',
                'updated_at' => '2022-05-10 16:30:03',
            ),
            427 => 
            array (
                'id' => 430,
                'table_name' => 'speeches',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<div id="Inner" style="margin: 0px auto; padding: 0px; width: 960px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: center;">
<div id="Content" style="margin: 0px; padding: 0px; position: relative;">
<div id="Translation" style="margin: 0px 28.7917px; padding: 0px; text-align: left;">
<h3 style="margin: 15px 0px; padding: 0px; font-size: 14px;"><span style="font-size: 14pt;">1914 translation by H. Rackham</span></h3>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;"><span style="font-size: 14pt;">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</span></p>
<h3 style="margin: 15px 0px; padding: 0px; font-size: 14px;"><span style="font-size: 14pt;">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</span></h3>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;"><span style="font-size: 14pt;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</span></p>
<h3 style="margin: 15px 0px; padding: 0px; font-size: 14px;"><span style="font-size: 14pt;">1914 translation by H. Rackham</span></h3>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;"><span style="font-size: 14pt;">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</span></p>
</div>
</div>
<hr style="margin: 0px; padding: 0px; clear: both; border: 0px; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));" />
<div class="boxed" style="margin: 10px 28.7917px; padding: 0px; clear: both;"><span style="font-size: 14pt;"><a style="margin: 0px; padding: 0px; color: #000000; text-decoration-line: none;" href="mailto:help@lipsum.com">help@lipsum.com</a></span><br style="margin: 0px; padding: 0px;" /><span style="font-size: 14pt;"><a style="margin: 0px; padding: 0px; color: #000000; text-decoration-line: none;" href="https://www.lipsum.com/privacy.pdf" target="_blank" rel="noopener">Privacy Policy</a></span></div>
<p>&nbsp;</p>
</div>',
                'created_at' => '2022-05-10 16:30:03',
                'updated_at' => '2022-05-10 16:30:03',
            ),
            428 => 
            array (
                'id' => 431,
                'table_name' => 'speeches',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => '<p>&Ccedil;ıxış content ru</p>',
                'created_at' => '2022-05-10 16:30:03',
                'updated_at' => '2022-05-10 16:30:03',
            ),
            429 => 
            array (
                'id' => 432,
                'table_name' => 'speeches',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Output 1',
                'created_at' => '2022-05-10 16:30:51',
                'updated_at' => '2022-05-10 16:30:51',
            ),
            430 => 
            array (
                'id' => 433,
                'table_name' => 'speeches',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Выход 1',
                'created_at' => '2022-05-10 16:30:51',
                'updated_at' => '2022-05-10 16:30:51',
            ),
            431 => 
            array (
                'id' => 434,
                'table_name' => 'speeches',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'output-1',
                'created_at' => '2022-05-10 16:30:51',
                'updated_at' => '2022-05-10 16:30:51',
            ),
            432 => 
            array (
                'id' => 435,
                'table_name' => 'speeches',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'vyhod-1',
                'created_at' => '2022-05-10 16:30:51',
                'updated_at' => '2022-05-10 16:30:51',
            ),
            433 => 
            array (
                'id' => 436,
                'table_name' => 'speeches',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
            'value' => '<p><span style="font-size: 14pt;"><a class="speech-link" style="box-sizing: border-box; color: black; text-decoration-line: none; margin: 0px; padding: 0px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;">Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the class.</a></span></p>
<p><span style="font-size: 14pt;">Lorem</span></p>
<div id="Inner" style="margin: 0px auto; padding: 0px; width: 960px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: center;">
<div id="Content" style="margin: 0px; padding: 0px; position: relative;">
<div id="Translation" style="margin: 0px 28.7917px; padding: 0px; text-align: left;">
<h3 style="margin: 15px 0px; padding: 0px; font-size: 14px;">1914 translation by H. Rackham</h3>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
<h3 style="margin: 15px 0px; padding: 0px; font-size: 14px;">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
<h3 style="margin: 15px 0px; padding: 0px; font-size: 14px;">1914 translation by H. Rackham</h3>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
</div>
</div>
<hr style="margin: 0px; padding: 0px; clear: both; border: 0px; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));" />
<div class="boxed" style="margin: 10px 28.7917px; padding: 0px; clear: both;"><a style="margin: 0px; padding: 0px; color: #000000; text-decoration-line: none;" href="mailto:help@lipsum.com">help@lipsum.com</a><br style="margin: 0px; padding: 0px;" /><a style="margin: 0px; padding: 0px; color: #000000; text-decoration-line: none;" href="https://www.lipsum.com/privacy.pdf" target="_blank" rel="noopener">Privacy Policy</a></div>
<p>&nbsp;</p>
</div>
<p><span style="font-size: 14pt;">Lorem</span></p>
<p><span style="font-size: 14pt;">Lorem</span></p>',
                'created_at' => '2022-05-10 16:30:51',
                'updated_at' => '2022-05-10 16:30:51',
            ),
            434 => 
            array (
                'id' => 437,
                'table_name' => 'speeches',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p>Content ru</p>',
                'created_at' => '2022-05-10 16:30:51',
                'updated_at' => '2022-05-10 16:30:51',
            ),
            435 => 
            array (
                'id' => 438,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 147,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            436 => 
            array (
                'id' => 439,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 148,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            437 => 
            array (
                'id' => 440,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 149,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            438 => 
            array (
                'id' => 441,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 150,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            439 => 
            array (
                'id' => 442,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 151,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            440 => 
            array (
                'id' => 443,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 152,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            441 => 
            array (
                'id' => 444,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 153,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            442 => 
            array (
                'id' => 445,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 33,
                'locale' => 'en',
                'value' => 'Article',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            443 => 
            array (
                'id' => 446,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 33,
                'locale' => 'en',
                'value' => 'Articles',
                'created_at' => '2022-05-10 16:51:00',
                'updated_at' => '2022-05-10 16:51:00',
            ),
            444 => 
            array (
                'id' => 447,
                'table_name' => 'articles',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Article 1',
                'created_at' => '2022-05-10 16:52:09',
                'updated_at' => '2022-05-10 16:52:09',
            ),
            445 => 
            array (
                'id' => 448,
                'table_name' => 'articles',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Статья 1',
                'created_at' => '2022-05-10 16:52:09',
                'updated_at' => '2022-05-10 16:52:09',
            ),
            446 => 
            array (
                'id' => 449,
                'table_name' => 'articles',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'article-1',
                'created_at' => '2022-05-10 16:52:09',
                'updated_at' => '2022-05-10 16:52:09',
            ),
            447 => 
            array (
                'id' => 450,
                'table_name' => 'articles',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'statya-1',
                'created_at' => '2022-05-10 16:52:09',
                'updated_at' => '2022-05-10 16:52:09',
            ),
            448 => 
            array (
                'id' => 451,
                'table_name' => 'articles',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p>Article en</p>',
                'created_at' => '2022-05-10 16:52:09',
                'updated_at' => '2022-05-10 16:54:05',
            ),
            449 => 
            array (
                'id' => 452,
                'table_name' => 'articles',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p>Статья ru</p>',
                'created_at' => '2022-05-10 16:54:05',
                'updated_at' => '2022-05-10 16:54:05',
            ),
            450 => 
            array (
                'id' => 453,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 161,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 17:00:28',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            451 => 
            array (
                'id' => 454,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 162,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 17:00:28',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            452 => 
            array (
                'id' => 455,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 163,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 17:00:28',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            453 => 
            array (
                'id' => 456,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 165,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 17:00:28',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            454 => 
            array (
                'id' => 457,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 166,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 17:00:28',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            455 => 
            array (
                'id' => 458,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 167,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 17:00:28',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            456 => 
            array (
                'id' => 459,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 36,
                'locale' => 'en',
                'value' => 'Educationmaterial',
                'created_at' => '2022-05-10 17:00:28',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            457 => 
            array (
                'id' => 460,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 36,
                'locale' => 'en',
                'value' => 'Educationmaterials',
                'created_at' => '2022-05-10 17:00:28',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            458 => 
            array (
                'id' => 461,
                'table_name' => 'educationmaterials',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Educational materials 2',
                'created_at' => '2022-05-10 17:01:46',
                'updated_at' => '2022-05-10 17:01:46',
            ),
            459 => 
            array (
                'id' => 462,
                'table_name' => 'educationmaterials',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Учебные материалы 2',
                'created_at' => '2022-05-10 17:01:46',
                'updated_at' => '2022-05-10 17:01:46',
            ),
            460 => 
            array (
                'id' => 463,
                'table_name' => 'educationmaterials',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'educational-materials-2',
                'created_at' => '2022-05-10 17:01:46',
                'updated_at' => '2022-05-10 17:01:46',
            ),
            461 => 
            array (
                'id' => 464,
                'table_name' => 'educationmaterials',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'uchebnye-materialy-2',
                'created_at' => '2022-05-10 17:01:46',
                'updated_at' => '2022-05-10 17:01:46',
            ),
            462 => 
            array (
                'id' => 465,
                'table_name' => 'educationmaterials',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<h1 style="margin: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 70px; line-height: 90px; color: #000000; text-align: center;">Lorem Ipsum</h1>
<h4 style="margin: 10px 10px 5px; padding: 0px; font-weight: 400; line-height: 18px; text-align: center; font-style: italic; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h4>
<h5 style="margin: 5px 10px 20px; padding: 0px; font-weight: 400; font-size: 12px; line-height: 14px; text-align: center; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</h5>
<hr style="margin: 0px; padding: 0px; clear: both; border: 0px; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: center;" />
<div id="Content" style="margin: 0px; padding: 0px; position: relative; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: center;">
<div class="boxed" style="margin: 10px 28.7917px; padding: 0px; clear: both;">
<div id="lipsum" style="margin: 0px; padding: 0px; text-align: justify;">
<p style="margin: 0px 0px 15px; padding: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis semper semper justo. Nulla venenatis molestie ipsum quis ultricies. Cras sed tincidunt augue. Vivamus quis magna interdum ante ultricies finibus. Pellentesque at nisi volutpat, pulvinar nunc sit amet, interdum mi. Integer eros turpis, semper vitae enim in, volutpat elementum eros. Donec vitae orci non magna laoreet iaculis. Cras at justo vitae tellus tempor dignissim sed nec neque. Nulla interdum sit amet risus non iaculis. Etiam a orci vitae diam fringilla aliquam. Vestibulum quis velit malesuada elit sodales lacinia. Maecenas ut egestas ipsum. Aenean ac odio vitae ligula venenatis posuere. Suspendisse potenti. Vestibulum non sagittis nibh.</p>
<p style="margin: 0px 0px 15px; padding: 0px;">Nulla venenatis laoreet mauris vestibulum accumsan. Aliquam id gravida nisi, id varius ipsum. Nullam ut fermentum felis, sed condimentum ipsum. Cras eget luctus ipsum. Suspendisse tempus sodales molestie. Cras nibh velit, commodo ac vehicula eget, interdum eget elit. Cras mollis interdum erat et feugiat. Maecenas faucibus viverra lorem ut molestie. Nullam at odio eget eros vehicula convallis. Vivamus ultrices magna non nibh interdum varius.</p>
<p style="margin: 0px 0px 15px; padding: 0px;">Vivamus at augue nibh. Integer tempus efficitur ex, vitae euismod velit commodo id. Sed rhoncus fringilla nibh, vel ornare sem tristique id. In pharetra justo a arcu lacinia blandit at eu tellus. Morbi accumsan urna ut lacus faucibus, in faucibus nunc porta. Etiam pretium eleifend nibh non tincidunt. Curabitur imperdiet vulputate volutpat. Sed dictum tellus ultricies orci dictum egestas. Duis interdum tristique lorem quis molestie. Morbi ultrices elementum turpis, eu sodales diam porta sed.</p>
<p style="margin: 0px 0px 15px; padding: 0px;">Etiam ac libero ligula. Fusce ac ex sed lacus pellentesque tristique. Donec ipsum tortor, scelerisque in lectus vel, egestas pellentesque nunc. Aenean enim orci, bibendum in auctor vitae, malesuada ut lacus. Donec et vehicula elit, sed consectetur tortor. Sed lorem arcu, lacinia ut aliquam in, tempor et augue. Proin quis semper lacus. Praesent ante lorem, bibendum id blandit vel, tristique a velit. Praesent eleifend venenatis purus eu consectetur. Aliquam pulvinar justo nec iaculis congue. Integer bibendum vitae tellus nec semper. Phasellus vitae ante consequat, lacinia nibh eu, feugiat dolor.</p>
<p style="margin: 0px 0px 15px; padding: 0px;">Aliquam erat volutpat. Integer nibh purus, consequat quis elit accumsan, facilisis imperdiet turpis. Nulla tincidunt, purus nec cursus aliquam, leo sem consectetur nulla, non fringilla ex mi vitae massa. Sed a nisi erat. Vivamus eu dolor eu ante sagittis scelerisque. Morbi non venenatis libero. Nunc vitae aliquet ante, eget consequat tellus. Sed sagittis bibendum nunc euismod efficitur. Morbi sodales in orci et mollis. Donec luctus faucibus condimentum. Duis euismod euismod ornare. Quisque facilisis massa sed vulputate porttitor. Aliquam suscipit mattis ligula nec venenatis. Nunc maximus turpis neque, posuere pretium ante vestibulum sed.</p>
</div>
</div>
</div>',
                'created_at' => '2022-05-10 17:01:46',
                'updated_at' => '2022-05-10 17:01:46',
            ),
            463 => 
            array (
                'id' => 466,
                'table_name' => 'educationmaterials',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => '<p>Учебные материалы 2 ru</p>',
                'created_at' => '2022-05-10 17:01:46',
                'updated_at' => '2022-05-10 17:01:46',
            ),
            464 => 
            array (
                'id' => 467,
                'table_name' => 'educationmaterials',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Educational materials 1',
                'created_at' => '2022-05-10 17:02:54',
                'updated_at' => '2022-05-10 17:02:54',
            ),
            465 => 
            array (
                'id' => 468,
                'table_name' => 'educationmaterials',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Учебные материалы 2',
                'created_at' => '2022-05-10 17:02:54',
                'updated_at' => '2022-05-10 17:02:54',
            ),
            466 => 
            array (
                'id' => 469,
                'table_name' => 'educationmaterials',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'educational-materials-1',
                'created_at' => '2022-05-10 17:02:54',
                'updated_at' => '2022-05-10 17:02:54',
            ),
            467 => 
            array (
                'id' => 470,
                'table_name' => 'educationmaterials',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'uchebnye-materialy-2',
                'created_at' => '2022-05-10 17:02:54',
                'updated_at' => '2022-05-10 17:02:54',
            ),
            468 => 
            array (
                'id' => 471,
                'table_name' => 'educationmaterials',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<div style="margin: 0px 14.3958px 0px 28.7917px; padding: 0px; width: 436.792px; float: left; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">
<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">What is Lorem Ipsum?</h2>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div style="margin: 0px 28.7917px 0px 14.3958px; padding: 0px; width: 436.792px; float: right; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">
<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">Why do we use it?</h2>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
</div>
<p>&nbsp;</p>
<div style="margin: 0px 14.3958px 0px 28.7917px; padding: 0px; width: 436.792px; float: left; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">
<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">Where does it come from?</h2>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
</div>',
                'created_at' => '2022-05-10 17:02:54',
                'updated_at' => '2022-05-10 17:02:54',
            ),
            469 => 
            array (
                'id' => 472,
                'table_name' => 'educationmaterials',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p>content ru</p>',
                'created_at' => '2022-05-10 17:02:54',
                'updated_at' => '2022-05-10 17:02:54',
            ),
            470 => 
            array (
                'id' => 473,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 154,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            471 => 
            array (
                'id' => 474,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 155,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            472 => 
            array (
                'id' => 475,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 156,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            473 => 
            array (
                'id' => 476,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 157,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            474 => 
            array (
                'id' => 477,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 158,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            475 => 
            array (
                'id' => 478,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 159,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            476 => 
            array (
                'id' => 479,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 160,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            477 => 
            array (
                'id' => 480,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 35,
                'locale' => 'en',
                'value' => 'Measure',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            478 => 
            array (
                'id' => 481,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 35,
                'locale' => 'en',
                'value' => 'Measures',
                'created_at' => '2022-05-10 17:09:14',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            479 => 
            array (
                'id' => 482,
                'table_name' => 'measures',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Measures 1',
                'created_at' => '2022-05-10 17:10:45',
                'updated_at' => '2022-05-10 17:10:45',
            ),
            480 => 
            array (
                'id' => 483,
                'table_name' => 'measures',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Меры 1',
                'created_at' => '2022-05-10 17:10:45',
                'updated_at' => '2022-05-10 17:10:45',
            ),
            481 => 
            array (
                'id' => 484,
                'table_name' => 'measures',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'measures-1',
                'created_at' => '2022-05-10 17:10:45',
                'updated_at' => '2022-05-10 17:10:45',
            ),
            482 => 
            array (
                'id' => 485,
                'table_name' => 'measures',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'mery-1',
                'created_at' => '2022-05-10 17:10:45',
                'updated_at' => '2022-05-10 17:10:45',
            ),
            483 => 
            array (
                'id' => 486,
                'table_name' => 'measures',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p>Tədbirlər1 content en</p>',
                'created_at' => '2022-05-10 17:10:45',
                'updated_at' => '2022-05-10 17:10:45',
            ),
            484 => 
            array (
                'id' => 487,
                'table_name' => 'measures',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p>Tədbirlər1 content ru</p>',
                'created_at' => '2022-05-10 17:10:45',
                'updated_at' => '2022-05-10 17:10:45',
            ),
            485 => 
            array (
                'id' => 488,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 168,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 17:27:49',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            486 => 
            array (
                'id' => 489,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 169,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 17:27:49',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            487 => 
            array (
                'id' => 490,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 170,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 17:27:49',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            488 => 
            array (
                'id' => 491,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 172,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 17:27:49',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            489 => 
            array (
                'id' => 492,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 173,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 17:27:49',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            490 => 
            array (
                'id' => 493,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 174,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 17:27:49',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            491 => 
            array (
                'id' => 494,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 37,
                'locale' => 'en',
                'value' => 'Supremecourt',
                'created_at' => '2022-05-10 17:27:49',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            492 => 
            array (
                'id' => 495,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 37,
                'locale' => 'en',
                'value' => 'Supremecourts',
                'created_at' => '2022-05-10 17:27:49',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            493 => 
            array (
                'id' => 496,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 182,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            494 => 
            array (
                'id' => 497,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 183,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            495 => 
            array (
                'id' => 498,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 184,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            496 => 
            array (
                'id' => 499,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 185,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            497 => 
            array (
                'id' => 500,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 186,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            498 => 
            array (
                'id' => 501,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 187,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            499 => 
            array (
                'id' => 502,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 188,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
        ));
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 503,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 39,
                'locale' => 'en',
                'value' => 'Appeal',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            1 => 
            array (
                'id' => 504,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 39,
                'locale' => 'en',
                'value' => 'Appeals',
                'created_at' => '2022-05-10 17:34:19',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            2 => 
            array (
                'id' => 505,
                'table_name' => 'appeals',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'PROCEDURE FOR APPEALING APPEALS TO CIVIL AND COMMERCIAL COLLEGES',
                'created_at' => '2022-05-10 17:35:29',
                'updated_at' => '2022-05-10 17:35:29',
            ),
            3 => 
            array (
                'id' => 506,
                'table_name' => 'appeals',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'ПОРЯДОК ПОДАЧИ АПЕЛЛЯЦИЙ В ГРАЖДАНСКИЕ И КОММЕРЧЕСКИЕ КОЛЛЕДЖИ',
                'created_at' => '2022-05-10 17:35:29',
                'updated_at' => '2022-05-10 17:35:29',
            ),
            4 => 
            array (
                'id' => 507,
                'table_name' => 'appeals',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'procedure-for-appealing-appeals-to-civil-and-commercial-colleges',
                'created_at' => '2022-05-10 17:35:29',
                'updated_at' => '2022-05-10 17:35:29',
            ),
            5 => 
            array (
                'id' => 508,
                'table_name' => 'appeals',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'poryadok-podachi-apellyacij-v-grazhdanskie-i-kommercheskie-kolledzhi',
                'created_at' => '2022-05-10 17:35:29',
                'updated_at' => '2022-05-10 17:35:29',
            ),
            6 => 
            array (
                'id' => 509,
                'table_name' => 'appeals',
                'column_name' => 'content',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => '<p>Appeal en content</p>',
                'created_at' => '2022-05-10 17:35:29',
                'updated_at' => '2022-05-10 17:35:29',
            ),
            7 => 
            array (
                'id' => 510,
                'table_name' => 'appeals',
                'column_name' => 'content',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => '<p>Appeal ru content</p>',
                'created_at' => '2022-05-10 17:35:29',
                'updated_at' => '2022-05-10 17:35:29',
            ),
            8 => 
            array (
                'id' => 511,
                'table_name' => 'appeals',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'PROCEDURE FOR APPEALING APPEALS TO THE ADMINISTRATIVE COLLEGE',
                'created_at' => '2022-05-10 17:37:28',
                'updated_at' => '2022-05-10 17:37:28',
            ),
            9 => 
            array (
                'id' => 512,
                'table_name' => 'appeals',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'ПОРЯДОК ПОДАЧИ АПЕЛЛЯЦИЙ В АДМИНИСТРАТИВНУЮ КОЛЛЕДЖ',
                'created_at' => '2022-05-10 17:37:28',
                'updated_at' => '2022-05-10 17:37:28',
            ),
            10 => 
            array (
                'id' => 513,
                'table_name' => 'appeals',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'procedure-for-appealing-appeals-to-the-administrative-college',
                'created_at' => '2022-05-10 17:37:28',
                'updated_at' => '2022-05-10 17:37:28',
            ),
            11 => 
            array (
                'id' => 514,
                'table_name' => 'appeals',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'poryadok-podachi-apellyacij-v-administrativnuyu-kolledzh',
                'created_at' => '2022-05-10 17:37:28',
                'updated_at' => '2022-05-10 17:37:28',
            ),
            12 => 
            array (
                'id' => 515,
                'table_name' => 'appeals',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<p>content en</p>',
                'created_at' => '2022-05-10 17:37:28',
                'updated_at' => '2022-05-10 17:37:28',
            ),
            13 => 
            array (
                'id' => 516,
                'table_name' => 'appeals',
                'column_name' => 'content',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => '<p>content ru</p>',
                'created_at' => '2022-05-10 17:37:28',
                'updated_at' => '2022-05-10 17:37:28',
            ),
            14 => 
            array (
                'id' => 517,
                'table_name' => 'appeals',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'PROCEDURE FOR APPEALING TO THE CRIMINAL COLLEGE',
                'created_at' => '2022-05-10 17:39:46',
                'updated_at' => '2022-05-10 17:39:46',
            ),
            15 => 
            array (
                'id' => 518,
                'table_name' => 'appeals',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'ПОРЯДОК ОБРАЩЕНИЯ В СУДЕБНУЮ КОЛЛЕДЖЮ',
                'created_at' => '2022-05-10 17:39:46',
                'updated_at' => '2022-05-10 17:39:46',
            ),
            16 => 
            array (
                'id' => 519,
                'table_name' => 'appeals',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'procedure-for-appealing-to-the-criminal-college',
                'created_at' => '2022-05-10 17:39:46',
                'updated_at' => '2022-05-10 17:39:46',
            ),
            17 => 
            array (
                'id' => 520,
                'table_name' => 'appeals',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'poryadok-obrasheniya-v-sudebnuyu-kolledzhyu',
                'created_at' => '2022-05-10 17:39:46',
                'updated_at' => '2022-05-10 17:39:46',
            ),
            18 => 
            array (
                'id' => 521,
                'table_name' => 'appeals',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p>content en</p>',
                'created_at' => '2022-05-10 17:39:46',
                'updated_at' => '2022-05-10 17:39:46',
            ),
            19 => 
            array (
                'id' => 522,
                'table_name' => 'appeals',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p>content ru</p>',
                'created_at' => '2022-05-10 17:39:46',
                'updated_at' => '2022-05-10 17:39:46',
            ),
            20 => 
            array (
                'id' => 523,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Petition',
                'created_at' => '2022-05-10 17:54:04',
                'updated_at' => '2022-05-18 12:46:04',
            ),
            21 => 
            array (
                'id' => 524,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Заявления',
                'created_at' => '2022-05-10 17:54:04',
                'updated_at' => '2022-05-18 12:46:04',
            ),
            22 => 
            array (
                'id' => 525,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Complaints',
                'created_at' => '2022-05-10 17:54:51',
                'updated_at' => '2022-05-10 17:54:51',
            ),
            23 => 
            array (
                'id' => 526,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Жалобы',
                'created_at' => '2022-05-10 17:54:51',
                'updated_at' => '2022-05-10 17:54:51',
            ),
            24 => 
            array (
                'id' => 527,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Solicitations',
                'created_at' => '2022-05-10 17:55:45',
                'updated_at' => '2022-05-18 12:47:26',
            ),
            25 => 
            array (
                'id' => 528,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Ходатайство',
                'created_at' => '2022-05-10 17:55:45',
                'updated_at' => '2022-05-18 12:47:26',
            ),
            26 => 
            array (
                'id' => 529,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Claim Petitions',
                'created_at' => '2022-05-10 17:56:27',
                'updated_at' => '2022-05-18 12:44:46',
            ),
            27 => 
            array (
                'id' => 530,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Исковые заявления',
                'created_at' => '2022-05-10 17:56:27',
                'updated_at' => '2022-05-18 12:44:46',
            ),
            28 => 
            array (
                'id' => 531,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Objections',
                'created_at' => '2022-05-10 17:57:27',
                'updated_at' => '2022-05-10 17:57:27',
            ),
            29 => 
            array (
                'id' => 532,
                'table_name' => 'exampledocuments',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Протесты',
                'created_at' => '2022-05-10 17:57:27',
                'updated_at' => '2022-05-18 12:47:54',
            ),
            30 => 
            array (
                'id' => 533,
                'table_name' => 'electronlibraries',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Presidential Library',
                'created_at' => '2022-05-10 18:03:02',
                'updated_at' => '2022-05-10 18:03:02',
            ),
            31 => 
            array (
                'id' => 534,
                'table_name' => 'electronlibraries',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Президентская библиотека',
                'created_at' => '2022-05-10 18:03:02',
                'updated_at' => '2022-05-10 18:03:02',
            ),
            32 => 
            array (
                'id' => 535,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 199,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 18:03:25',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            33 => 
            array (
                'id' => 536,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 200,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 18:03:25',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            34 => 
            array (
                'id' => 537,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 201,
                'locale' => 'en',
                'value' => 'Link',
                'created_at' => '2022-05-10 18:03:25',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            35 => 
            array (
                'id' => 538,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 204,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-10 18:03:25',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            36 => 
            array (
                'id' => 539,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 202,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 18:03:25',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            37 => 
            array (
                'id' => 540,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 203,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 18:03:25',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            38 => 
            array (
                'id' => 541,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 42,
                'locale' => 'en',
                'value' => 'Electronlibrary',
                'created_at' => '2022-05-10 18:03:25',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            39 => 
            array (
                'id' => 542,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 42,
                'locale' => 'en',
                'value' => 'Electronlibraries',
                'created_at' => '2022-05-10 18:03:25',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            40 => 
            array (
                'id' => 543,
                'table_name' => 'electronlibraries',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Nakhchivan Autonomous Republic Library',
                'created_at' => '2022-05-10 18:04:34',
                'updated_at' => '2022-05-10 18:04:34',
            ),
            41 => 
            array (
                'id' => 544,
                'table_name' => 'electronlibraries',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Библиотека Нахчыванской Автономной Республики',
                'created_at' => '2022-05-10 18:04:34',
                'updated_at' => '2022-05-10 18:04:34',
            ),
            42 => 
            array (
                'id' => 545,
                'table_name' => 'electronlibraries',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Electronic database of the Supreme Court of Nakhchivan AR',
                'created_at' => '2022-05-10 18:06:05',
                'updated_at' => '2022-05-10 18:06:05',
            ),
            43 => 
            array (
                'id' => 546,
                'table_name' => 'electronlibraries',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Электронная база данных Верховного суда Нахчыванской АР',
                'created_at' => '2022-05-10 18:06:05',
                'updated_at' => '2022-05-10 18:06:05',
            ),
            44 => 
            array (
                'id' => 547,
                'table_name' => 'electronlibraries',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Azerbaijan National Library',
                'created_at' => '2022-05-10 18:08:37',
                'updated_at' => '2022-05-10 18:08:37',
            ),
            45 => 
            array (
                'id' => 548,
                'table_name' => 'electronlibraries',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Азербайджанская национальная библиотека',
                'created_at' => '2022-05-10 18:08:37',
                'updated_at' => '2022-05-10 18:08:37',
            ),
            46 => 
            array (
                'id' => 549,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'WARSAW DECLARATION',
                'created_at' => '2022-05-10 18:13:50',
                'updated_at' => '2022-05-10 18:13:50',
            ),
            47 => 
            array (
                'id' => 550,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'ВАРШАВСКАЯ ДЕКЛАРАЦИЯ',
                'created_at' => '2022-05-10 18:13:50',
                'updated_at' => '2022-05-10 18:13:50',
            ),
            48 => 
            array (
                'id' => 551,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'RECOMMENDATION ON EXECUTION OF COURT DECISIONS',
                'created_at' => '2022-05-10 18:14:30',
                'updated_at' => '2022-05-10 18:14:30',
            ),
            49 => 
            array (
                'id' => 552,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'РЕКОМЕНДАЦИЯ ПО ИСПОЛНЕНИЮ СУДЕБНЫХ РЕШЕНИЙ',
                'created_at' => '2022-05-10 18:14:30',
                'updated_at' => '2022-05-10 18:14:30',
            ),
            50 => 
            array (
                'id' => 553,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'CONVENTION ON THE PROTECTION OF HUMAN RIGHTS AND BASIC FREEDOMS',
                'created_at' => '2022-05-10 18:18:20',
                'updated_at' => '2022-05-10 18:18:20',
            ),
            51 => 
            array (
                'id' => 554,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'КОНВЕНЦИЯ О ЗАЩИТЕ ПРАВ ЧЕЛОВЕКА И ОСНОВНЫХ СВОБОД',
                'created_at' => '2022-05-10 18:18:20',
                'updated_at' => '2022-05-10 18:18:20',
            ),
            52 => 
            array (
                'id' => 555,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'CHARTER OF THE COUNCIL OF EUROPE',
                'created_at' => '2022-05-10 18:18:52',
                'updated_at' => '2022-05-10 18:18:52',
            ),
            53 => 
            array (
                'id' => 556,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'УСТАВ СОВЕТА ЕВРОПЫ',
                'created_at' => '2022-05-10 18:18:52',
                'updated_at' => '2022-05-10 18:18:52',
            ),
            54 => 
            array (
                'id' => 557,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Council of Europe CONVENTION ON HUMAN TRAFFICKING AND EXPLANATORY REPORT',
                'created_at' => '2022-05-10 18:19:24',
                'updated_at' => '2022-05-10 18:19:24',
            ),
            55 => 
            array (
                'id' => 558,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'КОНВЕНЦИЯ Совета Европы О ТОРГОВЛЕ ЛЮДЬМИ И ПОЯСНИТЕЛЬНЫЙ ДОКЛАД',
                'created_at' => '2022-05-10 18:19:24',
                'updated_at' => '2022-05-10 18:19:24',
            ),
            56 => 
            array (
                'id' => 559,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'EUROPEAN SOCIAL CHARTER',
                'created_at' => '2022-05-10 18:19:58',
                'updated_at' => '2022-05-10 18:19:58',
            ),
            57 => 
            array (
                'id' => 560,
                'table_name' => 'internationaldocuments',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'ЕВРОПЕЙСКАЯ СОЦИАЛЬНАЯ ХАРТИЯ',
                'created_at' => '2022-05-10 18:19:58',
                'updated_at' => '2022-05-10 18:19:58',
            ),
            58 => 
            array (
                'id' => 561,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Sharur District Court',
                'created_at' => '2022-05-10 18:25:22',
                'updated_at' => '2022-05-10 18:25:22',
            ),
            59 => 
            array (
                'id' => 562,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Шарурский районный суд',
                'created_at' => '2022-05-10 18:25:22',
                'updated_at' => '2022-05-10 18:25:22',
            ),
            60 => 
            array (
                'id' => 563,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Shahbuz District Court',
                'created_at' => '2022-05-10 18:28:40',
                'updated_at' => '2022-05-10 18:28:40',
            ),
            61 => 
            array (
                'id' => 564,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'Шахбузский районный суд',
                'created_at' => '2022-05-10 18:28:40',
                'updated_at' => '2022-05-10 18:28:40',
            ),
            62 => 
            array (
                'id' => 565,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'Kangarli District Court',
                'created_at' => '2022-05-10 18:29:22',
                'updated_at' => '2022-05-10 18:29:22',
            ),
            63 => 
            array (
                'id' => 566,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'ru',
                'value' => 'Кенгерлинский районный суд',
                'created_at' => '2022-05-10 18:29:22',
                'updated_at' => '2022-05-10 18:29:22',
            ),
            64 => 
            array (
                'id' => 567,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Nakhchivan AR Court of Grave Crimes',
                'created_at' => '2022-05-10 18:29:56',
                'updated_at' => '2022-05-10 18:29:56',
            ),
            65 => 
            array (
                'id' => 568,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Суд по тяжким преступлениям Нахчыванской АР',
                'created_at' => '2022-05-10 18:29:56',
                'updated_at' => '2022-05-10 18:29:56',
            ),
            66 => 
            array (
                'id' => 569,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Nakhchivan AR Military Court',
                'created_at' => '2022-05-10 18:30:26',
                'updated_at' => '2022-05-10 18:30:26',
            ),
            67 => 
            array (
                'id' => 570,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Военный суд Нахчыванской АР',
                'created_at' => '2022-05-10 18:30:26',
                'updated_at' => '2022-05-10 18:30:26',
            ),
            68 => 
            array (
                'id' => 571,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Nakhchivan AR Administrative Court',
                'created_at' => '2022-05-10 18:31:10',
                'updated_at' => '2022-05-10 18:31:10',
            ),
            69 => 
            array (
                'id' => 572,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Административный суд Нахчыванской АР',
                'created_at' => '2022-05-10 18:31:10',
                'updated_at' => '2022-05-10 18:31:10',
            ),
            70 => 
            array (
                'id' => 573,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => 'Sadarak District Court',
                'created_at' => '2022-05-10 18:31:52',
                'updated_at' => '2022-05-10 18:31:52',
            ),
            71 => 
            array (
                'id' => 574,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'ru',
                'value' => 'Садаракский районный суд',
                'created_at' => '2022-05-10 18:31:52',
                'updated_at' => '2022-05-10 18:31:52',
            ),
            72 => 
            array (
                'id' => 575,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Ordubad District Court',
                'created_at' => '2022-05-10 18:32:24',
                'updated_at' => '2022-05-10 18:32:24',
            ),
            73 => 
            array (
                'id' => 576,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Ордубадский районный суд',
                'created_at' => '2022-05-10 18:32:24',
                'updated_at' => '2022-05-10 18:32:24',
            ),
            74 => 
            array (
                'id' => 577,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'Nakhchivan City Court',
                'created_at' => '2022-05-10 18:33:07',
                'updated_at' => '2022-05-10 18:33:07',
            ),
            75 => 
            array (
                'id' => 578,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => 'Нахчыванский городской суд',
                'created_at' => '2022-05-10 18:33:07',
                'updated_at' => '2022-05-10 18:33:07',
            ),
            76 => 
            array (
                'id' => 579,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Nakhchivan AR Commercial Court',
                'created_at' => '2022-05-10 18:34:15',
                'updated_at' => '2022-05-10 18:34:15',
            ),
            77 => 
            array (
                'id' => 580,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'Хозяйственный суд Нахчыванской АР',
                'created_at' => '2022-05-10 18:34:15',
                'updated_at' => '2022-05-10 18:34:15',
            ),
            78 => 
            array (
                'id' => 581,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'Julfa District Court',
                'created_at' => '2022-05-10 18:34:56',
                'updated_at' => '2022-05-10 18:34:56',
            ),
            79 => 
            array (
                'id' => 582,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'Джульфинский районный суд',
                'created_at' => '2022-05-10 18:34:56',
                'updated_at' => '2022-05-10 18:34:56',
            ),
            80 => 
            array (
                'id' => 583,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => 'Babek District Court',
                'created_at' => '2022-05-10 18:35:34',
                'updated_at' => '2022-05-10 18:35:34',
            ),
            81 => 
            array (
                'id' => 584,
                'table_name' => 'nmrcourts',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'ru',
                'value' => 'Бабекский районный суд',
                'created_at' => '2022-05-10 18:35:34',
                'updated_at' => '2022-05-10 18:35:34',
            ),
            82 => 
            array (
                'id' => 585,
                'table_name' => 'services',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Electronic library',
                'created_at' => '2022-05-10 18:39:46',
                'updated_at' => '2022-05-10 18:39:46',
            ),
            83 => 
            array (
                'id' => 586,
                'table_name' => 'services',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Электронная библиотека',
                'created_at' => '2022-05-10 18:39:46',
                'updated_at' => '2022-05-10 18:39:46',
            ),
            84 => 
            array (
                'id' => 587,
                'table_name' => 'services',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Examples of publications',
                'created_at' => '2022-05-10 18:40:40',
                'updated_at' => '2022-05-10 18:40:40',
            ),
            85 => 
            array (
                'id' => 588,
                'table_name' => 'services',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Примеры публикаций',
                'created_at' => '2022-05-10 18:40:40',
                'updated_at' => '2022-05-10 18:40:40',
            ),
            86 => 
            array (
                'id' => 589,
                'table_name' => 'services',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Samples of Documents',
                'created_at' => '2022-05-10 18:41:21',
                'updated_at' => '2022-05-18 12:42:21',
            ),
            87 => 
            array (
                'id' => 590,
                'table_name' => 'services',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Образцы документов',
                'created_at' => '2022-05-10 18:41:21',
                'updated_at' => '2022-05-18 12:42:21',
            ),
            88 => 
            array (
                'id' => 591,
                'table_name' => 'services',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Court Fees Calculator',
                'created_at' => '2022-05-10 18:42:04',
                'updated_at' => '2022-05-18 12:41:38',
            ),
            89 => 
            array (
                'id' => 592,
                'table_name' => 'services',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Калькулятор судебных пошлин',
                'created_at' => '2022-05-10 18:42:04',
                'updated_at' => '2022-05-18 12:41:38',
            ),
            90 => 
            array (
                'id' => 593,
                'table_name' => 'contacts',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Admission schedule',
                'created_at' => '2022-05-10 18:54:23',
                'updated_at' => '2022-05-10 18:54:23',
            ),
            91 => 
            array (
                'id' => 594,
                'table_name' => 'contacts',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'График приема',
                'created_at' => '2022-05-10 18:54:23',
                'updated_at' => '2022-05-10 18:54:23',
            ),
            92 => 
            array (
                'id' => 595,
                'table_name' => 'contacts',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Apply online',
                'created_at' => '2022-05-10 18:55:06',
                'updated_at' => '2022-05-10 18:55:06',
            ),
            93 => 
            array (
                'id' => 596,
                'table_name' => 'contacts',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Подать заявку онлайн',
                'created_at' => '2022-05-10 18:55:06',
                'updated_at' => '2022-05-10 18:55:06',
            ),
            94 => 
            array (
                'id' => 597,
                'table_name' => 'contacts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Contact',
                'created_at' => '2022-05-10 18:56:22',
                'updated_at' => '2022-05-10 18:56:22',
            ),
            95 => 
            array (
                'id' => 598,
                'table_name' => 'contacts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Контакт',
                'created_at' => '2022-05-10 18:56:22',
                'updated_at' => '2022-05-10 18:56:22',
            ),
            96 => 
            array (
                'id' => 599,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Court Fees Payment',
                'created_at' => '2022-05-10 19:00:54',
                'updated_at' => '2022-05-18 12:39:14',
            ),
            97 => 
            array (
                'id' => 600,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Оплата судебных пошлин',
                'created_at' => '2022-05-10 19:00:54',
                'updated_at' => '2022-05-18 12:39:14',
            ),
            98 => 
            array (
                'id' => 601,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Judgements',
                'created_at' => '2022-05-10 19:01:30',
                'updated_at' => '2022-05-18 12:40:47',
            ),
            99 => 
            array (
                'id' => 602,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'Судебные Постановления',
                'created_at' => '2022-05-10 19:01:30',
                'updated_at' => '2022-05-18 12:40:47',
            ),
            100 => 
            array (
                'id' => 603,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'The procedure for filing a cassation appeal',
                'created_at' => '2022-05-10 19:02:15',
                'updated_at' => '2022-05-18 12:35:58',
            ),
            101 => 
            array (
                'id' => 604,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Процедура подачи кассационной жалобы',
                'created_at' => '2022-05-10 19:02:15',
                'updated_at' => '2022-05-18 12:35:58',
            ),
            102 => 
            array (
                'id' => 605,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Enter to the e-cabinet',
                'created_at' => '2022-05-10 19:02:50',
                'updated_at' => '2022-05-18 12:36:40',
            ),
            103 => 
            array (
                'id' => 606,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Войти в электронный кабинет',
                'created_at' => '2022-05-10 19:02:50',
                'updated_at' => '2022-05-18 12:36:40',
            ),
            104 => 
            array (
                'id' => 607,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Cases',
                'created_at' => '2022-05-10 19:03:24',
                'updated_at' => '2022-05-18 12:39:54',
            ),
            105 => 
            array (
                'id' => 608,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Судебные дела',
                'created_at' => '2022-05-10 19:03:24',
                'updated_at' => '2022-05-18 12:39:54',
            ),
            106 => 
            array (
                'id' => 609,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'The procedure for filing an appeal',
                'created_at' => '2022-05-10 19:05:44',
                'updated_at' => '2022-05-18 12:34:29',
            ),
            107 => 
            array (
                'id' => 610,
                'table_name' => 'forpersons',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Процедура подачи апелляции',
                'created_at' => '2022-05-10 19:05:44',
                'updated_at' => '2022-05-18 12:34:29',
            ),
            108 => 
            array (
                'id' => 611,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 104,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-10 19:14:57',
                'updated_at' => '2022-05-10 19:14:57',
            ),
            109 => 
            array (
                'id' => 612,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 105,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-10 19:14:57',
                'updated_at' => '2022-05-10 19:14:57',
            ),
            110 => 
            array (
                'id' => 613,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 106,
                'locale' => 'en',
                'value' => 'Content',
                'created_at' => '2022-05-10 19:14:57',
                'updated_at' => '2022-05-10 19:14:57',
            ),
            111 => 
            array (
                'id' => 614,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 107,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-10 19:14:57',
                'updated_at' => '2022-05-10 19:14:57',
            ),
            112 => 
            array (
                'id' => 615,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 108,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-10 19:14:57',
                'updated_at' => '2022-05-10 19:14:57',
            ),
            113 => 
            array (
                'id' => 616,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 24,
                'locale' => 'en',
                'value' => 'Faq',
                'created_at' => '2022-05-10 19:14:57',
                'updated_at' => '2022-05-10 19:14:57',
            ),
            114 => 
            array (
                'id' => 617,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 24,
                'locale' => 'en',
                'value' => 'Faqs',
                'created_at' => '2022-05-10 19:14:57',
                'updated_at' => '2022-05-10 19:14:57',
            ),
            115 => 
            array (
                'id' => 618,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 90,
                'locale' => 'en',
                'value' => 'Design and Programming Nakhchivan Autonomous Republic Ministry of Communications and New Technologies',
                'created_at' => '2022-05-10 19:45:57',
                'updated_at' => '2022-05-14 12:37:53',
            ),
            116 => 
            array (
                'id' => 619,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 90,
                'locale' => 'ru',
                'value' => 'Дизайн и Программирование Министерство Связи и Новых Технологий Нахчыванской Автономной Республики',
                'created_at' => '2022-05-10 19:45:57',
                'updated_at' => '2022-05-14 12:37:53',
            ),
            117 => 
            array (
                'id' => 620,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 27,
                'locale' => 'ru',
                'value' => 'Id',
                'created_at' => '2022-05-11 05:36:37',
                'updated_at' => '2022-05-11 05:36:37',
            ),
            118 => 
            array (
                'id' => 621,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 30,
                'locale' => 'ru',
                'value' => 'Image',
                'created_at' => '2022-05-11 05:36:37',
                'updated_at' => '2022-05-11 05:36:37',
            ),
            119 => 
            array (
                'id' => 622,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 28,
                'locale' => 'ru',
                'value' => 'Title',
                'created_at' => '2022-05-11 05:36:37',
                'updated_at' => '2022-05-11 05:36:37',
            ),
            120 => 
            array (
                'id' => 623,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 101,
                'locale' => 'ru',
                'value' => 'Slug',
                'created_at' => '2022-05-11 05:36:37',
                'updated_at' => '2022-05-11 05:36:37',
            ),
            121 => 
            array (
                'id' => 624,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 102,
                'locale' => 'ru',
                'value' => 'Content',
                'created_at' => '2022-05-11 05:36:37',
                'updated_at' => '2022-05-11 05:36:37',
            ),
            122 => 
            array (
                'id' => 625,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 31,
                'locale' => 'ru',
                'value' => 'Created At',
                'created_at' => '2022-05-11 05:36:37',
                'updated_at' => '2022-05-11 05:36:37',
            ),
            123 => 
            array (
                'id' => 626,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 32,
                'locale' => 'ru',
                'value' => 'Updated At',
                'created_at' => '2022-05-11 05:36:37',
                'updated_at' => '2022-05-11 05:36:37',
            ),
            124 => 
            array (
                'id' => 629,
                'table_name' => 'news',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p>content ru</p>',
                'created_at' => '2022-05-11 05:39:15',
                'updated_at' => '2022-05-11 06:00:53',
            ),
            125 => 
            array (
                'id' => 630,
                'table_name' => 'news',
                'column_name' => 'read_more',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Read more',
                'created_at' => '2022-05-11 05:39:15',
                'updated_at' => '2022-05-11 05:39:15',
            ),
            126 => 
            array (
                'id' => 631,
                'table_name' => 'news',
                'column_name' => 'read_more',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'читать дальше',
                'created_at' => '2022-05-11 05:39:15',
                'updated_at' => '2022-05-11 06:00:53',
            ),
            127 => 
            array (
                'id' => 632,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 147,
                'locale' => 'ru',
                'value' => 'Id',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            128 => 
            array (
                'id' => 633,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 148,
                'locale' => 'ru',
                'value' => 'Title',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            129 => 
            array (
                'id' => 634,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 149,
                'locale' => 'ru',
                'value' => 'Slug',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            130 => 
            array (
                'id' => 635,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 150,
                'locale' => 'ru',
                'value' => 'Image',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            131 => 
            array (
                'id' => 636,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 151,
                'locale' => 'ru',
                'value' => 'Content',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            132 => 
            array (
                'id' => 637,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 152,
                'locale' => 'ru',
                'value' => 'Created At',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            133 => 
            array (
                'id' => 638,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 153,
                'locale' => 'ru',
                'value' => 'Updated At',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            134 => 
            array (
                'id' => 639,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 33,
                'locale' => 'ru',
                'value' => 'Article',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            135 => 
            array (
                'id' => 640,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 33,
                'locale' => 'ru',
                'value' => 'Articles',
                'created_at' => '2022-05-11 05:56:32',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            136 => 
            array (
                'id' => 641,
                'table_name' => 'applyonlines',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Правила написания письма в Верховный суд Нахчыванской АР',
                'created_at' => '2022-05-11 08:08:44',
                'updated_at' => '2022-05-11 08:08:44',
            ),
            137 => 
            array (
                'id' => 642,
                'table_name' => 'applyonlines',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Rules of writing a letter to the Supreme Court of Nakhchivan AR',
                'created_at' => '2022-05-11 08:08:44',
                'updated_at' => '2022-05-11 08:08:44',
            ),
            138 => 
            array (
                'id' => 643,
                'table_name' => 'applyonlines',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'pravila-napisaniya-pisma-v-verhovnyj-sud-nahchyvanskoj-ar',
                'created_at' => '2022-05-11 08:08:44',
                'updated_at' => '2022-05-11 08:08:44',
            ),
            139 => 
            array (
                'id' => 644,
                'table_name' => 'applyonlines',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'rules-of-writing-a-letter-to-the-supreme-court-of-nakhchivan-ar',
                'created_at' => '2022-05-11 08:08:44',
                'updated_at' => '2022-05-11 08:08:44',
            ),
            140 => 
            array (
                'id' => 645,
                'table_name' => 'applyonlines',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p class="letter-title text-center" style="box-sizing: border-box; margin: 34px 0px; padding: 0px; text-align: center; font-size: 24px; font-weight: bold; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 16px; text-align: justify;">BEFORE APPLYING IN ADDRESS TO THE SUPREME COURT OF THE NAKHCHIVAN AUTONOMOUS REPUBLIC, PLEASE READ THE RULES:</span></p>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;">
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">1. Appeals sent in electronic form through the official website of the Supreme Court of the Nakhchivan Autonomous Republic shall be received by the General Department of the Supreme Court of the Nakhchivan Autonomous Republic and referred to the Law of the Azerbaijan Republic &ldquo;On Citizens\' Appeals&rdquo; dated September 30, 2015 No. 1308-IVQ. Approved by Presidential Decree No. 950 of June 23, 2016 Registered and reviewed in accordance with the "Rules of clerical work".</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">2. It is important to answer the form correctly before writing the text.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">3. The text must be compiled in the alphabet of the language in which it is written, it must not be written in capital or lowercase letters, it must be divided into sentences, and the rules of using punctuation marks must be followed.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">4. The appeal should be written in clear and fluent sentences.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">5. Ethical rules must be observed when applying. The application will not be answered if rude expressions are used or the author does not provide accurate information about himself.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">6. Dear website users! Given the nature of large data flow processing, please respect some of the limitations:</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">The time for sending electronic data from one source is limited to 1-5 minutes, depending on the load on the server.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">The text of the e-application should not exceed 1,500 characters.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">The e-application must not contain attachments. Letters with long text, copies of documents, photos and other allowed attachments should be sent to the E-mail address of the Supreme Court of the Nakhchivan Autonomous Republic or to this address by regular mail:</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">Nakhchivan city, AZ 7000, Ataturk street 19, Supreme Court of Nakhchivan Autonomous Republic.</span></div>
</div>',
                'created_at' => '2022-05-11 08:08:44',
                'updated_at' => '2022-05-11 08:12:08',
            ),
            141 => 
            array (
                'id' => 646,
                'table_name' => 'applyonlines',
                'column_name' => 'button',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'To apply',
                'created_at' => '2022-05-11 08:08:44',
                'updated_at' => '2022-05-11 08:12:08',
            ),
            142 => 
            array (
                'id' => 647,
                'table_name' => 'applyonlines',
                'column_name' => 'content',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => '<p class="letter-title text-center" style="box-sizing: border-box; margin: 34px 0px; padding: 0px; text-align: center; font-size: 24px; font-weight: bold; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 16px; text-align: justify;">ПРЕЖДЕ ЧЕМ ПОДАТЬ ОБРАЩЕНИЕ В ВЕРХОВНЫЙ СУД НАХЧЫВАНСКОЙ АВТОНОМНОЙ РЕСПУБЛИКИ, ПРОСИМ ОЗНАКОМИТЬСЯ С ПРАВИЛАМИ:</span></p>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;">
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">1. Обращения, направленные в электронной форме через официальный сайт Верховного суда Нахчыванской Автономной Республики, принимаются Главным управлением Верховного суда Нахчыванской Автономной Республики и ссылаются на Закон Азербайджанской Республики &laquo;Об обращениях граждан&raquo;. от 30.09.2015 № 1308-IVQ Утвержден Указом Президента № 950 от 23.06.2016 Зарегистрировано и рассмотрено в соответствии с &laquo;Правилами делопроизводства&raquo;.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">2. Важно правильно ответить на форму перед написанием текста.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">3. Текст должен быть составлен в алфавите того языка, на котором он написан, не должен быть написан прописными или строчными буквами, должен быть разбит на предложения, при этом должны быть соблюдены правила употребления знаков препинания.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">4. Обращение должно быть написано четкими и беглыми предложениями.</span></div>
<div class="letter-first text-justify" style="box-sizing: border-box; margin: 0px; padding: 0px; text-align: justify; font-size: 15px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><span style="font-size: 14pt;">5. При обращении необходимо соблюдать этические правила. На заявку не будет дан ответ, если используются нецензурные выражения или автор не предоставляет достоверную информацию о себе.</span></div>
<ul style="box-sizing: border-box; padding: 0px; margin: 0px;">
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14pt;">6. Уважаемые пользователи сайта! Учитывая характер обработки больших потоков данных, соблюдайте некоторые ограничения:</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14pt;">Время отправки электронных данных из одного источника ограничено 1-5 минутами в зависимости от нагрузки на сервер.</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14pt;">Текст электронного заявления не должен превышать 1500 знаков.</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14pt;">Электронное заявление не должно содержать вложений. Письма с подробным текстом, копиями документов, фотографиями и другими разрешенными вложениями следует направлять на адрес электронной почты Верховного суда Нахчыванской Автономной Республики или на этот адрес обычной почтой:</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 13px; list-style: circle;"><span style="color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14pt;">г. Нахчыван, AZ 7000, улица Ататюрка 19, Верховный Суд Нахчыванской Автономной Республики.</span></li>
</ul>
</div>',
                'created_at' => '2022-05-11 08:12:08',
                'updated_at' => '2022-05-11 08:12:08',
            ),
            143 => 
            array (
                'id' => 648,
                'table_name' => 'applyonlines',
                'column_name' => 'button',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Применять',
                'created_at' => '2022-05-11 08:12:08',
                'updated_at' => '2022-05-11 08:12:08',
            ),
            144 => 
            array (
                'id' => 649,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Dashboard',
                'created_at' => '2022-05-11 08:43:26',
                'updated_at' => '2022-05-13 18:56:14',
            ),
            145 => 
            array (
                'id' => 650,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Панель управления',
                'created_at' => '2022-05-11 08:43:26',
                'updated_at' => '2022-05-13 18:56:14',
            ),
            146 => 
            array (
                'id' => 651,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 40,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-11 08:59:13',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            147 => 
            array (
                'id' => 652,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 41,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-11 08:59:13',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            148 => 
            array (
                'id' => 653,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 103,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-11 08:59:13',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            149 => 
            array (
                'id' => 654,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 42,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-11 08:59:13',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            150 => 
            array (
                'id' => 655,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 43,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-11 08:59:13',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            151 => 
            array (
                'id' => 656,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 44,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-11 08:59:13',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            152 => 
            array (
                'id' => 657,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Contact',
                'created_at' => '2022-05-11 08:59:13',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            153 => 
            array (
                'id' => 658,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Contacts',
                'created_at' => '2022-05-11 08:59:13',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            154 => 
            array (
                'id' => 659,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 45,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-11 09:00:23',
                'updated_at' => '2022-05-11 09:00:23',
            ),
            155 => 
            array (
                'id' => 660,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 46,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-11 09:00:23',
                'updated_at' => '2022-05-11 09:00:23',
            ),
            156 => 
            array (
                'id' => 661,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 47,
                'locale' => 'en',
                'value' => 'Link',
                'created_at' => '2022-05-11 09:00:23',
                'updated_at' => '2022-05-11 09:00:23',
            ),
            157 => 
            array (
                'id' => 662,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 48,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-11 09:00:23',
                'updated_at' => '2022-05-11 09:00:23',
            ),
            158 => 
            array (
                'id' => 663,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 49,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-11 09:00:23',
                'updated_at' => '2022-05-11 09:00:23',
            ),
            159 => 
            array (
                'id' => 664,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'Forperson',
                'created_at' => '2022-05-11 09:00:23',
                'updated_at' => '2022-05-11 09:00:23',
            ),
            160 => 
            array (
                'id' => 665,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'Forpeople',
                'created_at' => '2022-05-11 09:00:23',
                'updated_at' => '2022-05-11 09:00:23',
            ),
            161 => 
            array (
                'id' => 666,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 62,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-11 10:10:06',
                'updated_at' => '2022-05-11 10:10:06',
            ),
            162 => 
            array (
                'id' => 667,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 63,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-11 10:10:06',
                'updated_at' => '2022-05-11 10:10:06',
            ),
            163 => 
            array (
                'id' => 668,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 64,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-11 10:10:06',
                'updated_at' => '2022-05-11 10:10:06',
            ),
            164 => 
            array (
                'id' => 669,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 65,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-11 10:10:06',
                'updated_at' => '2022-05-11 10:10:06',
            ),
            165 => 
            array (
                'id' => 670,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 16,
                'locale' => 'en',
                'value' => 'Lang',
                'created_at' => '2022-05-11 10:10:06',
                'updated_at' => '2022-05-11 10:10:06',
            ),
            166 => 
            array (
                'id' => 671,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 16,
                'locale' => 'en',
                'value' => 'Langs',
                'created_at' => '2022-05-11 10:10:06',
                'updated_at' => '2022-05-11 10:10:06',
            ),
            167 => 
            array (
                'id' => 672,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 56,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-11 10:11:20',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            168 => 
            array (
                'id' => 673,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 57,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-11 10:11:20',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            169 => 
            array (
                'id' => 674,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 58,
                'locale' => 'en',
                'value' => 'Link',
                'created_at' => '2022-05-11 10:11:20',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            170 => 
            array (
                'id' => 675,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 59,
                'locale' => 'en',
                'value' => 'Status',
                'created_at' => '2022-05-11 10:11:20',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            171 => 
            array (
                'id' => 676,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 60,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-11 10:11:20',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            172 => 
            array (
                'id' => 677,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 61,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-11 10:11:20',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            173 => 
            array (
                'id' => 678,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 15,
                'locale' => 'en',
                'value' => 'Nmrcourt',
                'created_at' => '2022-05-11 10:11:20',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            174 => 
            array (
                'id' => 679,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 15,
                'locale' => 'en',
                'value' => 'Nmrcourts',
                'created_at' => '2022-05-11 10:11:20',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            175 => 
            array (
                'id' => 680,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 50,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-11 10:12:34',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            176 => 
            array (
                'id' => 681,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 53,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-11 10:12:34',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            177 => 
            array (
                'id' => 682,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 54,
                'locale' => 'en',
                'value' => 'Link',
                'created_at' => '2022-05-11 10:12:34',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            178 => 
            array (
                'id' => 683,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 55,
                'locale' => 'en',
                'value' => 'Icon',
                'created_at' => '2022-05-11 10:12:34',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            179 => 
            array (
                'id' => 684,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 51,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-11 10:12:34',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            180 => 
            array (
                'id' => 685,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 52,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-11 10:12:34',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            181 => 
            array (
                'id' => 686,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 14,
                'locale' => 'en',
                'value' => 'Service',
                'created_at' => '2022-05-11 10:12:34',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            182 => 
            array (
                'id' => 687,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 14,
                'locale' => 'en',
                'value' => 'Services',
                'created_at' => '2022-05-11 10:12:34',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            183 => 
            array (
                'id' => 688,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 66,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-11 10:13:20',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            184 => 
            array (
                'id' => 689,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 67,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-11 10:13:20',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            185 => 
            array (
                'id' => 690,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 68,
                'locale' => 'en',
                'value' => 'Link',
                'created_at' => '2022-05-11 10:13:20',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            186 => 
            array (
                'id' => 691,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 69,
                'locale' => 'en',
                'value' => 'Status',
                'created_at' => '2022-05-11 10:13:20',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            187 => 
            array (
                'id' => 692,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 70,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-11 10:13:20',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            188 => 
            array (
                'id' => 693,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 71,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-11 10:13:20',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            189 => 
            array (
                'id' => 694,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 17,
                'locale' => 'en',
                'value' => 'Usefullink',
                'created_at' => '2022-05-11 10:13:20',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            190 => 
            array (
                'id' => 695,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 17,
                'locale' => 'en',
                'value' => 'Usefullinks',
                'created_at' => '2022-05-11 10:13:20',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            191 => 
            array (
                'id' => 696,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 51,
                'locale' => 'en',
                'value' => 'General Information',
                'created_at' => '2022-05-11 10:16:36',
                'updated_at' => '2022-05-11 10:16:36',
            ),
            192 => 
            array (
                'id' => 697,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 51,
                'locale' => 'ru',
                'value' => 'Главная Информация',
                'created_at' => '2022-05-11 10:16:36',
                'updated_at' => '2022-05-11 10:16:36',
            ),
            193 => 
            array (
                'id' => 698,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 47,
                'locale' => 'en',
                'value' => 'Chairman of the court',
                'created_at' => '2022-05-11 10:17:19',
                'updated_at' => '2022-05-11 10:17:19',
            ),
            194 => 
            array (
                'id' => 699,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 47,
                'locale' => 'ru',
                'value' => 'председатель суда',
                'created_at' => '2022-05-11 10:17:19',
                'updated_at' => '2022-05-11 10:17:19',
            ),
            195 => 
            array (
                'id' => 700,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 52,
                'locale' => 'ru',
                'value' => 'Президиум',
                'created_at' => '2022-05-11 10:18:00',
                'updated_at' => '2022-05-11 10:18:00',
            ),
            196 => 
            array (
                'id' => 701,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 56,
                'locale' => 'ru',
                'value' => 'Cудьи',
                'created_at' => '2022-05-11 10:18:34',
                'updated_at' => '2022-05-11 10:18:34',
            ),
            197 => 
            array (
                'id' => 702,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 57,
                'locale' => 'en',
                'value' => 'The structure of the court',
                'created_at' => '2022-05-11 10:19:10',
                'updated_at' => '2022-05-11 10:19:10',
            ),
            198 => 
            array (
                'id' => 703,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 57,
                'locale' => 'ru',
                'value' => 'Структура суда',
                'created_at' => '2022-05-11 10:19:10',
                'updated_at' => '2022-05-11 10:19:10',
            ),
            199 => 
            array (
                'id' => 704,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 58,
                'locale' => 'en',
                'value' => 'Judicial apparatus',
                'created_at' => '2022-05-11 10:20:11',
                'updated_at' => '2022-05-11 10:20:11',
            ),
            200 => 
            array (
                'id' => 705,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 58,
                'locale' => 'ru',
                'value' => 'Судебный аппарат',
                'created_at' => '2022-05-11 10:20:11',
                'updated_at' => '2022-05-11 10:20:11',
            ),
            201 => 
            array (
                'id' => 706,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 59,
                'locale' => 'en',
                'value' => 'Supreme Court - 90',
                'created_at' => '2022-05-11 10:20:45',
                'updated_at' => '2022-05-11 10:20:45',
            ),
            202 => 
            array (
                'id' => 707,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 59,
                'locale' => 'ru',
                'value' => 'Верховный суд - 90',
                'created_at' => '2022-05-11 10:20:45',
                'updated_at' => '2022-05-11 10:20:45',
            ),
            203 => 
            array (
                'id' => 708,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 48,
                'locale' => 'en',
                'value' => 'Legal acts',
                'created_at' => '2022-05-11 10:21:50',
                'updated_at' => '2022-05-11 10:21:50',
            ),
            204 => 
            array (
                'id' => 709,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 48,
                'locale' => 'ru',
                'value' => 'Правовые акты',
                'created_at' => '2022-05-11 10:21:50',
                'updated_at' => '2022-05-11 10:21:50',
            ),
            205 => 
            array (
                'id' => 710,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 60,
                'locale' => 'en',
                'value' => 'Legal acts of the Republic of Azerbaijan',
                'created_at' => '2022-05-11 10:22:35',
                'updated_at' => '2022-05-11 10:22:35',
            ),
            206 => 
            array (
                'id' => 711,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 60,
                'locale' => 'ru',
                'value' => 'Правовые акты Азербайджанской Республики',
                'created_at' => '2022-05-11 10:22:35',
                'updated_at' => '2022-05-11 10:22:35',
            ),
            207 => 
            array (
                'id' => 712,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 61,
                'locale' => 'en',
                'value' => 'Legal acts of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-11 10:23:05',
                'updated_at' => '2022-05-11 10:23:05',
            ),
            208 => 
            array (
                'id' => 713,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 61,
                'locale' => 'ru',
                'value' => 'Правовые акты Нахчыванской Автономной Республики',
                'created_at' => '2022-05-11 10:23:05',
                'updated_at' => '2022-05-11 10:23:05',
            ),
            209 => 
            array (
                'id' => 714,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 62,
                'locale' => 'en',
                'value' => 'International legal documents',
                'created_at' => '2022-05-11 10:23:42',
                'updated_at' => '2022-05-11 10:23:42',
            ),
            210 => 
            array (
                'id' => 715,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 62,
                'locale' => 'ru',
                'value' => 'Международно-правовые документы',
                'created_at' => '2022-05-11 10:23:42',
                'updated_at' => '2022-05-11 10:23:42',
            ),
            211 => 
            array (
                'id' => 716,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 53,
                'locale' => 'en',
                'value' => 'Court documents',
                'created_at' => '2022-05-11 10:24:18',
                'updated_at' => '2022-05-11 10:24:18',
            ),
            212 => 
            array (
                'id' => 717,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 53,
                'locale' => 'ru',
                'value' => 'Судебные документы',
                'created_at' => '2022-05-11 10:24:18',
                'updated_at' => '2022-05-11 10:24:18',
            ),
            213 => 
            array (
                'id' => 718,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 63,
                'locale' => 'en',
                'value' => 'Decisions of the presidium',
                'created_at' => '2022-05-11 10:24:56',
                'updated_at' => '2022-05-11 10:24:56',
            ),
            214 => 
            array (
                'id' => 719,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 63,
                'locale' => 'ru',
                'value' => 'Решения президиума',
                'created_at' => '2022-05-11 10:24:56',
                'updated_at' => '2022-05-11 10:24:56',
            ),
            215 => 
            array (
                'id' => 720,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 64,
                'locale' => 'ru',
                'value' => 'Судебные акты',
                'created_at' => '2022-05-11 10:25:32',
                'updated_at' => '2022-05-11 10:25:32',
            ),
            216 => 
            array (
                'id' => 721,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 65,
                'locale' => 'ru',
                'value' => 'Решения Европейского суда по правам человека',
                'created_at' => '2022-05-11 10:26:07',
                'updated_at' => '2022-05-11 10:26:07',
            ),
            217 => 
            array (
                'id' => 722,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 49,
                'locale' => 'en',
                'value' => 'Press Service',
                'created_at' => '2022-05-11 10:26:43',
                'updated_at' => '2022-05-11 10:26:43',
            ),
            218 => 
            array (
                'id' => 723,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 49,
                'locale' => 'ru',
                'value' => 'Пресс-служба',
                'created_at' => '2022-05-11 10:26:43',
                'updated_at' => '2022-05-11 10:26:43',
            ),
            219 => 
            array (
                'id' => 724,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 66,
                'locale' => 'ru',
                'value' => 'Новости',
                'created_at' => '2022-05-11 10:27:20',
                'updated_at' => '2022-05-11 10:27:20',
            ),
            220 => 
            array (
                'id' => 725,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 67,
                'locale' => 'ru',
                'value' => 'Отчеты',
                'created_at' => '2022-05-11 10:27:53',
                'updated_at' => '2022-05-11 10:27:53',
            ),
            221 => 
            array (
                'id' => 726,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 68,
                'locale' => 'ru',
                'value' => 'Выступления',
                'created_at' => '2022-05-11 10:28:54',
                'updated_at' => '2022-05-11 10:28:54',
            ),
            222 => 
            array (
                'id' => 727,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 69,
                'locale' => 'ru',
                'value' => 'Фотоматериалы',
                'created_at' => '2022-05-11 10:29:28',
                'updated_at' => '2022-05-11 10:29:28',
            ),
            223 => 
            array (
                'id' => 728,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 70,
                'locale' => 'ru',
                'value' => 'Видео материалы',
                'created_at' => '2022-05-11 10:30:05',
                'updated_at' => '2022-05-11 10:30:05',
            ),
            224 => 
            array (
                'id' => 729,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 71,
                'locale' => 'ru',
                'value' => 'Статьи',
                'created_at' => '2022-05-11 10:30:39',
                'updated_at' => '2022-05-11 10:30:39',
            ),
            225 => 
            array (
                'id' => 730,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 55,
                'locale' => 'en',
                'value' => 'LEGAL EDUCATION',
                'created_at' => '2022-05-11 10:31:11',
                'updated_at' => '2022-05-11 10:31:11',
            ),
            226 => 
            array (
                'id' => 731,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 55,
                'locale' => 'ru',
                'value' => 'ЮРИДИЧЕСКОЕ ОБРАЗОВАНИЕ',
                'created_at' => '2022-05-11 10:31:11',
                'updated_at' => '2022-05-11 10:31:11',
            ),
            227 => 
            array (
                'id' => 732,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 72,
                'locale' => 'ru',
                'value' => 'Вопрос и ответ',
                'created_at' => '2022-05-11 10:31:47',
                'updated_at' => '2022-05-11 10:31:47',
            ),
            228 => 
            array (
                'id' => 733,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 73,
                'locale' => 'ru',
                'value' => 'Образовательные материалы',
                'created_at' => '2022-05-11 10:32:42',
                'updated_at' => '2022-05-11 10:32:42',
            ),
            229 => 
            array (
                'id' => 734,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 74,
                'locale' => 'ru',
                'value' => 'События',
                'created_at' => '2022-05-11 10:33:22',
                'updated_at' => '2022-05-11 10:33:22',
            ),
            230 => 
            array (
                'id' => 735,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 241,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            231 => 
            array (
                'id' => 736,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 242,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            232 => 
            array (
                'id' => 737,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 243,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            233 => 
            array (
                'id' => 738,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 244,
                'locale' => 'en',
                'value' => 'Link',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            234 => 
            array (
                'id' => 739,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 245,
                'locale' => 'en',
                'value' => 'College',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            235 => 
            array (
                'id' => 740,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 246,
                'locale' => 'en',
                'value' => 'Status',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            236 => 
            array (
                'id' => 741,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 247,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            237 => 
            array (
                'id' => 742,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 248,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            238 => 
            array (
                'id' => 743,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 48,
                'locale' => 'en',
                'value' => 'Apparatus',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            239 => 
            array (
                'id' => 744,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 48,
                'locale' => 'en',
                'value' => 'Apparatuses',
                'created_at' => '2022-05-12 05:57:17',
                'updated_at' => '2022-05-12 05:57:17',
            ),
            240 => 
            array (
                'id' => 745,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 241,
                'locale' => 'ru',
                'value' => 'Id',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            241 => 
            array (
                'id' => 746,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 242,
                'locale' => 'ru',
                'value' => 'Title',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            242 => 
            array (
                'id' => 747,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 243,
                'locale' => 'ru',
                'value' => 'Slug',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            243 => 
            array (
                'id' => 748,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 244,
                'locale' => 'ru',
                'value' => 'Link',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            244 => 
            array (
                'id' => 749,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 245,
                'locale' => 'ru',
                'value' => 'College',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            245 => 
            array (
                'id' => 750,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 246,
                'locale' => 'ru',
                'value' => 'Status',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            246 => 
            array (
                'id' => 751,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 247,
                'locale' => 'ru',
                'value' => 'Created At',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            247 => 
            array (
                'id' => 752,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 248,
                'locale' => 'ru',
                'value' => 'Updated At',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            248 => 
            array (
                'id' => 753,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 48,
                'locale' => 'ru',
                'value' => 'Apparatus',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            249 => 
            array (
                'id' => 754,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 48,
                'locale' => 'ru',
                'value' => 'Apparatuses',
                'created_at' => '2022-05-12 05:57:51',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            250 => 
            array (
                'id' => 755,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Deputy Chairman of the Supreme Court',
                'created_at' => '2022-05-12 10:26:06',
                'updated_at' => '2022-05-12 10:26:06',
            ),
            251 => 
            array (
                'id' => 756,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'Заместитель Председателя Верховного суда',
                'created_at' => '2022-05-12 10:26:06',
                'updated_at' => '2022-05-12 10:26:06',
            ),
            252 => 
            array (
                'id' => 757,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'deputy-chairman-of-the-supreme-court',
                'created_at' => '2022-05-12 10:26:06',
                'updated_at' => '2022-05-12 10:26:06',
            ),
            253 => 
            array (
                'id' => 758,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'zamestitel-predsedatelya-verhovnogo-suda',
                'created_at' => '2022-05-12 10:26:06',
                'updated_at' => '2022-05-12 10:26:06',
            ),
            254 => 
            array (
                'id' => 759,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Chairman of the Supreme Court',
                'created_at' => '2022-05-12 10:26:57',
                'updated_at' => '2022-05-12 10:26:57',
            ),
            255 => 
            array (
                'id' => 760,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'Председатель Верховного суда',
                'created_at' => '2022-05-12 10:26:57',
                'updated_at' => '2022-05-12 10:26:57',
            ),
            256 => 
            array (
                'id' => 761,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'chairman-of-the-supreme-court',
                'created_at' => '2022-05-12 10:26:57',
                'updated_at' => '2022-05-12 10:26:57',
            ),
            257 => 
            array (
                'id' => 762,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'predsedatel-verhovnogo-suda',
                'created_at' => '2022-05-12 10:26:57',
                'updated_at' => '2022-05-12 10:26:57',
            ),
            258 => 
            array (
                'id' => 763,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'The structure of the Supreme Court of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-12 10:27:40',
                'updated_at' => '2022-05-12 10:27:40',
            ),
            259 => 
            array (
                'id' => 764,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'Структура Верховного суда Нахчыванской Автономной Республики',
                'created_at' => '2022-05-12 10:27:40',
                'updated_at' => '2022-05-12 10:27:40',
            ),
            260 => 
            array (
                'id' => 765,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'the-structure-of-the-supreme-court-of-the-nakhchivan-autonomous-republic',
                'created_at' => '2022-05-12 10:27:40',
                'updated_at' => '2022-05-12 10:27:40',
            ),
            261 => 
            array (
                'id' => 766,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'struktura-verhovnogo-suda-nahchyvanskoj-avtonomnoj-respubliki',
                'created_at' => '2022-05-12 10:27:40',
                'updated_at' => '2022-05-12 10:27:40',
            ),
            262 => 
            array (
                'id' => 767,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Judicial apparatus',
                'created_at' => '2022-05-12 10:30:02',
                'updated_at' => '2022-05-12 10:30:02',
            ),
            263 => 
            array (
                'id' => 768,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Судебный аппарат',
                'created_at' => '2022-05-12 10:30:02',
                'updated_at' => '2022-05-12 10:30:02',
            ),
            264 => 
            array (
                'id' => 769,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'judicial-apparatus',
                'created_at' => '2022-05-12 10:30:02',
                'updated_at' => '2022-05-12 10:30:02',
            ),
            265 => 
            array (
                'id' => 770,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'sudebnyj-apparat',
                'created_at' => '2022-05-12 10:30:02',
                'updated_at' => '2022-05-12 10:30:02',
            ),
            266 => 
            array (
                'id' => 771,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Civil board',
                'created_at' => '2022-05-12 10:32:17',
                'updated_at' => '2022-05-12 10:32:17',
            ),
            267 => 
            array (
                'id' => 772,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Гражданский совет',
                'created_at' => '2022-05-12 10:32:17',
                'updated_at' => '2022-05-12 10:32:17',
            ),
            268 => 
            array (
                'id' => 773,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'civil-board',
                'created_at' => '2022-05-12 10:32:17',
                'updated_at' => '2022-05-12 10:32:17',
            ),
            269 => 
            array (
                'id' => 774,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'grazhdanskij-sovet',
                'created_at' => '2022-05-12 10:32:17',
                'updated_at' => '2022-05-12 10:32:17',
            ),
            270 => 
            array (
                'id' => 775,
                'table_name' => 'apparatuses',
                'column_name' => 'college',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => '1',
                'created_at' => '2022-05-12 10:32:17',
                'updated_at' => '2022-05-12 10:32:17',
            ),
            271 => 
            array (
                'id' => 776,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Commercial board',
                'created_at' => '2022-05-12 10:32:49',
                'updated_at' => '2022-05-12 10:32:49',
            ),
            272 => 
            array (
                'id' => 777,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Коммерческая доска',
                'created_at' => '2022-05-12 10:32:49',
                'updated_at' => '2022-05-12 10:32:49',
            ),
            273 => 
            array (
                'id' => 778,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'commercial-board',
                'created_at' => '2022-05-12 10:32:49',
                'updated_at' => '2022-05-12 10:32:49',
            ),
            274 => 
            array (
                'id' => 779,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'kommercheskaya-doska',
                'created_at' => '2022-05-12 10:32:49',
                'updated_at' => '2022-05-12 10:32:49',
            ),
            275 => 
            array (
                'id' => 780,
                'table_name' => 'apparatuses',
                'column_name' => 'college',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '1',
                'created_at' => '2022-05-12 10:32:49',
                'updated_at' => '2022-05-12 10:32:49',
            ),
            276 => 
            array (
                'id' => 781,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Administrative board',
                'created_at' => '2022-05-12 10:33:25',
                'updated_at' => '2022-05-12 10:33:25',
            ),
            277 => 
            array (
                'id' => 782,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Административный совет',
                'created_at' => '2022-05-12 10:33:25',
                'updated_at' => '2022-05-12 10:33:25',
            ),
            278 => 
            array (
                'id' => 783,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'administrative-board',
                'created_at' => '2022-05-12 10:33:25',
                'updated_at' => '2022-05-12 10:33:25',
            ),
            279 => 
            array (
                'id' => 784,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'administrativnyj-sovet',
                'created_at' => '2022-05-12 10:33:25',
                'updated_at' => '2022-05-12 10:33:25',
            ),
            280 => 
            array (
                'id' => 785,
                'table_name' => 'apparatuses',
                'column_name' => 'college',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => '1',
                'created_at' => '2022-05-12 10:33:25',
                'updated_at' => '2022-05-12 10:33:25',
            ),
            281 => 
            array (
                'id' => 786,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Criminal board',
                'created_at' => '2022-05-12 10:40:53',
                'updated_at' => '2022-05-12 10:40:53',
            ),
            282 => 
            array (
                'id' => 787,
                'table_name' => 'apparatuses',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Криминальная коллегия',
                'created_at' => '2022-05-12 10:40:53',
                'updated_at' => '2022-05-12 10:40:53',
            ),
            283 => 
            array (
                'id' => 788,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'criminal-board',
                'created_at' => '2022-05-12 10:40:53',
                'updated_at' => '2022-05-12 10:40:53',
            ),
            284 => 
            array (
                'id' => 789,
                'table_name' => 'apparatuses',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'kriminalnaya-kollegiya',
                'created_at' => '2022-05-12 10:40:53',
                'updated_at' => '2022-05-12 10:40:53',
            ),
            285 => 
            array (
                'id' => 790,
                'table_name' => 'apparatuses',
                'column_name' => 'college',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => '1',
                'created_at' => '2022-05-12 10:40:53',
                'updated_at' => '2022-05-12 10:40:53',
            ),
            286 => 
            array (
                'id' => 791,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'News',
                'created_at' => '2022-05-12 12:16:20',
                'updated_at' => '2022-05-12 12:17:20',
            ),
            287 => 
            array (
                'id' => 792,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Новости',
                'created_at' => '2022-05-12 12:17:20',
                'updated_at' => '2022-05-12 12:17:20',
            ),
            288 => 
            array (
                'id' => 793,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Видео материалы',
                'created_at' => '2022-05-12 12:21:13',
                'updated_at' => '2022-05-12 12:21:13',
            ),
            289 => 
            array (
                'id' => 794,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Video materials',
                'created_at' => '2022-05-12 12:21:13',
                'updated_at' => '2022-05-12 12:21:13',
            ),
            290 => 
            array (
                'id' => 795,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Usefull Links',
                'created_at' => '2022-05-12 12:22:11',
                'updated_at' => '2022-05-12 12:22:11',
            ),
            291 => 
            array (
                'id' => 796,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Полезные ссылки',
                'created_at' => '2022-05-12 12:22:11',
                'updated_at' => '2022-05-12 12:22:11',
            ),
            292 => 
            array (
                'id' => 797,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Courts of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-12 12:24:13',
                'updated_at' => '2022-05-12 12:24:13',
            ),
            293 => 
            array (
                'id' => 798,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Суды Нахчыванской Автономной Республики',
                'created_at' => '2022-05-12 12:24:13',
                'updated_at' => '2022-05-12 12:24:13',
            ),
            294 => 
            array (
                'id' => 799,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Supreme Court - 90',
                'created_at' => '2022-05-12 12:25:46',
                'updated_at' => '2022-05-12 12:25:46',
            ),
            295 => 
            array (
                'id' => 800,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Верховный суд - 90',
                'created_at' => '2022-05-12 12:25:46',
                'updated_at' => '2022-05-12 12:25:46',
            ),
            296 => 
            array (
                'id' => 801,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'For citizens',
                'created_at' => '2022-05-12 12:27:23',
                'updated_at' => '2022-05-12 12:27:23',
            ),
            297 => 
            array (
                'id' => 802,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'Для граждан',
                'created_at' => '2022-05-12 12:27:23',
                'updated_at' => '2022-05-12 12:27:23',
            ),
            298 => 
            array (
                'id' => 803,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 255,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-12 12:34:32',
                'updated_at' => '2022-05-12 12:34:32',
            ),
            299 => 
            array (
                'id' => 804,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 256,
                'locale' => 'en',
                'value' => 'Key',
                'created_at' => '2022-05-12 12:34:32',
                'updated_at' => '2022-05-12 12:34:32',
            ),
            300 => 
            array (
                'id' => 805,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 257,
                'locale' => 'en',
                'value' => 'Text',
                'created_at' => '2022-05-12 12:34:32',
                'updated_at' => '2022-05-12 12:34:32',
            ),
            301 => 
            array (
                'id' => 806,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 258,
                'locale' => 'en',
                'value' => 'Status',
                'created_at' => '2022-05-12 12:34:32',
                'updated_at' => '2022-05-12 12:34:32',
            ),
            302 => 
            array (
                'id' => 807,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 259,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-12 12:34:32',
                'updated_at' => '2022-05-12 12:34:32',
            ),
            303 => 
            array (
                'id' => 808,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 260,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-12 12:34:32',
                'updated_at' => '2022-05-12 12:34:32',
            ),
            304 => 
            array (
                'id' => 811,
                'table_name' => 'adres',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Address',
                'created_at' => '2022-05-12 13:15:14',
                'updated_at' => '2022-05-12 13:15:14',
            ),
            305 => 
            array (
                'id' => 812,
                'table_name' => 'adres',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Адрес',
                'created_at' => '2022-05-12 13:15:14',
                'updated_at' => '2022-05-12 13:15:14',
            ),
            306 => 
            array (
                'id' => 813,
                'table_name' => 'adres',
                'column_name' => 'adres',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Nakhchivan city, AZ 7000, Ataturk street 19',
                'created_at' => '2022-05-12 13:15:14',
                'updated_at' => '2022-05-12 13:15:14',
            ),
            307 => 
            array (
                'id' => 814,
                'table_name' => 'adres',
                'column_name' => 'adres',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'г. Нахчыван, AZ 7000, улица Ататюрка 19',
                'created_at' => '2022-05-12 13:15:14',
                'updated_at' => '2022-05-12 13:15:14',
            ),
            308 => 
            array (
                'id' => 815,
                'table_name' => 'adres',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Phone',
                'created_at' => '2022-05-12 13:18:21',
                'updated_at' => '2022-05-12 13:18:21',
            ),
            309 => 
            array (
                'id' => 816,
                'table_name' => 'adres',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Телефон',
                'created_at' => '2022-05-12 13:18:21',
                'updated_at' => '2022-05-12 13:18:21',
            ),
            310 => 
            array (
                'id' => 817,
                'table_name' => 'adres',
                'column_name' => 'adres',
                'foreign_key' => 2,
                'locale' => 'en',
            'value' => ' (036) 544-61-77',
                'created_at' => '2022-05-12 13:18:21',
                'updated_at' => '2022-05-12 13:18:21',
            ),
            311 => 
            array (
                'id' => 818,
                'table_name' => 'adres',
                'column_name' => 'adres',
                'foreign_key' => 2,
                'locale' => 'ru',
            'value' => ' (036) 544-61-77',
                'created_at' => '2022-05-12 13:18:21',
                'updated_at' => '2022-05-12 13:18:21',
            ),
            312 => 
            array (
                'id' => 819,
                'table_name' => 'adres',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Fax',
                'created_at' => '2022-05-12 13:19:56',
                'updated_at' => '2022-05-12 13:19:56',
            ),
            313 => 
            array (
                'id' => 820,
                'table_name' => 'adres',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Факс',
                'created_at' => '2022-05-12 13:19:56',
                'updated_at' => '2022-05-12 13:19:56',
            ),
            314 => 
            array (
                'id' => 821,
                'table_name' => 'adres',
                'column_name' => 'adres',
                'foreign_key' => 3,
                'locale' => 'en',
            'value' => '(036) 550-12-7',
                'created_at' => '2022-05-12 13:19:56',
                'updated_at' => '2022-05-12 13:19:56',
            ),
            315 => 
            array (
                'id' => 822,
                'table_name' => 'adres',
                'column_name' => 'adres',
                'foreign_key' => 3,
                'locale' => 'ru',
            'value' => '(036) 550-12-7',
                'created_at' => '2022-05-12 13:19:56',
                'updated_at' => '2022-05-12 13:19:56',
            ),
            316 => 
            array (
                'id' => 823,
                'table_name' => 'adres',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'E-mail',
                'created_at' => '2022-05-12 13:21:32',
                'updated_at' => '2022-05-12 13:21:32',
            ),
            317 => 
            array (
                'id' => 824,
                'table_name' => 'adres',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Электронная почта',
                'created_at' => '2022-05-12 13:21:32',
                'updated_at' => '2022-05-12 13:21:32',
            ),
            318 => 
            array (
                'id' => 825,
                'table_name' => 'adres',
                'column_name' => 'adres',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'alimehkeme@nakhchivan.az',
                'created_at' => '2022-05-12 13:21:32',
                'updated_at' => '2022-05-12 13:21:32',
            ),
            319 => 
            array (
                'id' => 826,
                'table_name' => 'adres',
                'column_name' => 'adres',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'alimehkeme@nakhchivan.az',
                'created_at' => '2022-05-12 13:21:32',
                'updated_at' => '2022-05-12 13:21:32',
            ),
            320 => 
            array (
                'id' => 827,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 261,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            321 => 
            array (
                'id' => 828,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 262,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            322 => 
            array (
                'id' => 829,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 263,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            323 => 
            array (
                'id' => 830,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 264,
                'locale' => 'en',
                'value' => 'Link',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            324 => 
            array (
                'id' => 831,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 265,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            325 => 
            array (
                'id' => 832,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 266,
                'locale' => 'en',
                'value' => 'Adres',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            326 => 
            array (
                'id' => 833,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 267,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            327 => 
            array (
                'id' => 834,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 268,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            328 => 
            array (
                'id' => 835,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 51,
                'locale' => 'en',
                'value' => 'Adre',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            329 => 
            array (
                'id' => 836,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 51,
                'locale' => 'en',
                'value' => 'Adres',
                'created_at' => '2022-05-12 13:32:16',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            330 => 
            array (
                'id' => 837,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Roles',
                'created_at' => '2022-05-13 05:22:57',
                'updated_at' => '2022-05-13 18:56:45',
            ),
            331 => 
            array (
                'id' => 838,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Роли',
                'created_at' => '2022-05-13 05:22:57',
                'updated_at' => '2022-05-13 18:56:45',
            ),
            332 => 
            array (
                'id' => 839,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Users',
                'created_at' => '2022-05-13 05:23:45',
                'updated_at' => '2022-05-13 19:16:24',
            ),
            333 => 
            array (
                'id' => 840,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Пользователи',
                'created_at' => '2022-05-13 05:23:45',
                'updated_at' => '2022-05-13 19:16:24',
            ),
            334 => 
            array (
                'id' => 841,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Media',
                'created_at' => '2022-05-13 05:24:38',
                'updated_at' => '2022-05-13 05:24:38',
            ),
            335 => 
            array (
                'id' => 842,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Media',
                'created_at' => '2022-05-13 05:24:38',
                'updated_at' => '2022-05-13 05:55:39',
            ),
            336 => 
            array (
                'id' => 843,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Toolbar',
                'created_at' => '2022-05-13 05:25:16',
                'updated_at' => '2022-05-13 19:17:19',
            ),
            337 => 
            array (
                'id' => 844,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Панель инструментов',
                'created_at' => '2022-05-13 05:25:16',
                'updated_at' => '2022-05-13 19:17:19',
            ),
            338 => 
            array (
                'id' => 845,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Menu Builder',
                'created_at' => '2022-05-13 05:25:54',
                'updated_at' => '2022-05-13 05:25:54',
            ),
            339 => 
            array (
                'id' => 846,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => 'Menu builder',
                'created_at' => '2022-05-13 05:25:54',
                'updated_at' => '2022-05-13 05:57:46',
            ),
            340 => 
            array (
                'id' => 847,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Database',
                'created_at' => '2022-05-13 05:26:33',
                'updated_at' => '2022-05-13 19:17:59',
            ),
            341 => 
            array (
                'id' => 848,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'База данных',
                'created_at' => '2022-05-13 05:26:33',
                'updated_at' => '2022-05-13 19:17:59',
            ),
            342 => 
            array (
                'id' => 849,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'Compass',
                'created_at' => '2022-05-13 05:27:02',
                'updated_at' => '2022-05-13 19:18:26',
            ),
            343 => 
            array (
                'id' => 850,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'Компас',
                'created_at' => '2022-05-13 05:27:02',
                'updated_at' => '2022-05-13 19:18:26',
            ),
            344 => 
            array (
                'id' => 851,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'Settings',
                'created_at' => '2022-05-13 05:27:41',
                'updated_at' => '2022-05-13 19:19:21',
            ),
            345 => 
            array (
                'id' => 852,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'ru',
                'value' => 'Корректировки',
                'created_at' => '2022-05-13 05:27:41',
                'updated_at' => '2022-05-13 19:19:21',
            ),
            346 => 
            array (
                'id' => 853,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 80,
                'locale' => 'en',
                'value' => 'Languages',
                'created_at' => '2022-05-13 05:28:11',
                'updated_at' => '2022-05-13 19:20:01',
            ),
            347 => 
            array (
                'id' => 854,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 80,
                'locale' => 'ru',
                'value' => 'Языки',
                'created_at' => '2022-05-13 05:28:11',
                'updated_at' => '2022-05-13 19:20:01',
            ),
            348 => 
            array (
                'id' => 855,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 83,
                'locale' => 'en',
                'value' => 'Contact',
                'created_at' => '2022-05-13 05:28:38',
                'updated_at' => '2022-05-13 19:20:45',
            ),
            349 => 
            array (
                'id' => 856,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 83,
                'locale' => 'ru',
                'value' => 'Контакт',
                'created_at' => '2022-05-13 05:28:38',
                'updated_at' => '2022-05-13 19:20:45',
            ),
            350 => 
            array (
                'id' => 857,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 84,
                'locale' => 'en',
                'value' => 'For Persons',
                'created_at' => '2022-05-13 05:29:10',
                'updated_at' => '2022-05-13 19:21:21',
            ),
            351 => 
            array (
                'id' => 858,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 84,
                'locale' => 'ru',
                'value' => 'Для граждан',
                'created_at' => '2022-05-13 05:29:10',
                'updated_at' => '2022-05-13 19:21:21',
            ),
            352 => 
            array (
                'id' => 859,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 85,
                'locale' => 'en',
                'value' => 'Services',
                'created_at' => '2022-05-13 05:29:39',
                'updated_at' => '2022-05-13 19:27:41',
            ),
            353 => 
            array (
                'id' => 860,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 85,
                'locale' => 'ru',
                'value' => 'Услуги',
                'created_at' => '2022-05-13 05:29:39',
                'updated_at' => '2022-05-13 19:27:41',
            ),
            354 => 
            array (
                'id' => 861,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 86,
                'locale' => 'en',
                'value' => 'NMR Courts',
                'created_at' => '2022-05-13 05:30:33',
                'updated_at' => '2022-05-13 19:28:43',
            ),
            355 => 
            array (
                'id' => 862,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 86,
                'locale' => 'ru',
                'value' => 'Суды ЯМР',
                'created_at' => '2022-05-13 05:30:33',
                'updated_at' => '2022-05-13 19:28:43',
            ),
            356 => 
            array (
                'id' => 863,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 93,
                'locale' => 'en',
                'value' => 'Dynamic pages',
                'created_at' => '2022-05-13 05:31:05',
                'updated_at' => '2022-05-13 19:29:31',
            ),
            357 => 
            array (
                'id' => 864,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 93,
                'locale' => 'ru',
                'value' => 'Динамические страницы',
                'created_at' => '2022-05-13 05:31:05',
                'updated_at' => '2022-05-13 19:29:31',
            ),
            358 => 
            array (
                'id' => 865,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'BREAD',
                'created_at' => '2022-05-13 05:32:17',
                'updated_at' => '2022-05-13 05:32:17',
            ),
            359 => 
            array (
                'id' => 866,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => 'Bread',
                'created_at' => '2022-05-13 05:32:17',
                'updated_at' => '2022-05-13 05:32:17',
            ),
            360 => 
            array (
                'id' => 867,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 88,
                'locale' => 'en',
                'value' => 'Usefullinks',
                'created_at' => '2022-05-13 05:33:13',
                'updated_at' => '2022-05-13 05:33:13',
            ),
            361 => 
            array (
                'id' => 868,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 88,
                'locale' => 'ru',
                'value' => 'Полезные ссылки',
                'created_at' => '2022-05-13 05:33:13',
                'updated_at' => '2022-05-13 05:33:13',
            ),
            362 => 
            array (
                'id' => 869,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 94,
                'locale' => 'en',
                'value' => 'Faq',
                'created_at' => '2022-05-13 05:33:50',
                'updated_at' => '2022-05-13 19:30:00',
            ),
            363 => 
            array (
                'id' => 870,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 94,
                'locale' => 'ru',
                'value' => 'Часто задаваемые вопросы',
                'created_at' => '2022-05-13 05:33:50',
                'updated_at' => '2022-05-13 19:30:00',
            ),
            364 => 
            array (
                'id' => 871,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 95,
                'locale' => 'en',
                'value' => 'International legal documents',
                'created_at' => '2022-05-13 05:34:30',
                'updated_at' => '2022-05-13 19:30:32',
            ),
            365 => 
            array (
                'id' => 872,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 95,
                'locale' => 'ru',
                'value' => 'Международно-правовые документы',
                'created_at' => '2022-05-13 05:34:30',
                'updated_at' => '2022-05-13 19:30:32',
            ),
            366 => 
            array (
                'id' => 873,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 96,
                'locale' => 'en',
                'value' => 'Legal acts of the Republic of Azerbaijan',
                'created_at' => '2022-05-13 05:35:12',
                'updated_at' => '2022-05-13 19:31:05',
            ),
            367 => 
            array (
                'id' => 874,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 96,
                'locale' => 'ru',
                'value' => 'Правовые акты Азербайджанской Республики',
                'created_at' => '2022-05-13 05:35:12',
                'updated_at' => '2022-05-13 19:31:05',
            ),
            368 => 
            array (
                'id' => 875,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 97,
                'locale' => 'en',
                'value' => 'Decisions of the presidium',
                'created_at' => '2022-05-13 05:35:43',
                'updated_at' => '2022-05-13 19:31:37',
            ),
            369 => 
            array (
                'id' => 876,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 97,
                'locale' => 'ru',
                'value' => 'Решения президиума',
                'created_at' => '2022-05-13 05:35:43',
                'updated_at' => '2022-05-13 19:31:37',
            ),
            370 => 
            array (
                'id' => 877,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 98,
                'locale' => 'en',
                'value' => 'Speeches',
                'created_at' => '2022-05-13 05:36:37',
                'updated_at' => '2022-05-13 19:32:07',
            ),
            371 => 
            array (
                'id' => 878,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 98,
                'locale' => 'ru',
                'value' => 'Выступления',
                'created_at' => '2022-05-13 05:36:37',
                'updated_at' => '2022-05-13 19:32:07',
            ),
            372 => 
            array (
                'id' => 879,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 99,
                'locale' => 'en',
                'value' => 'Reports',
                'created_at' => '2022-05-13 05:36:58',
                'updated_at' => '2022-05-13 19:32:39',
            ),
            373 => 
            array (
                'id' => 880,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 99,
                'locale' => 'ru',
                'value' => 'Oтчеты',
                'created_at' => '2022-05-13 05:36:58',
                'updated_at' => '2022-05-13 19:32:39',
            ),
            374 => 
            array (
                'id' => 881,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 100,
                'locale' => 'en',
                'value' => 'Photo gallery',
                'created_at' => '2022-05-13 05:37:33',
                'updated_at' => '2022-05-13 19:33:09',
            ),
            375 => 
            array (
                'id' => 882,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 100,
                'locale' => 'ru',
                'value' => 'Фотогалерея',
                'created_at' => '2022-05-13 05:37:33',
                'updated_at' => '2022-05-13 19:33:09',
            ),
            376 => 
            array (
                'id' => 883,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 101,
                'locale' => 'en',
                'value' => 'Video qalereya',
                'created_at' => '2022-05-13 05:38:47',
                'updated_at' => '2022-05-13 06:04:53',
            ),
            377 => 
            array (
                'id' => 884,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 101,
                'locale' => 'ru',
                'value' => 'Video qalereya',
                'created_at' => '2022-05-13 05:38:47',
                'updated_at' => '2022-05-13 06:04:53',
            ),
            378 => 
            array (
                'id' => 885,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 102,
                'locale' => 'en',
                'value' => 'Articles',
                'created_at' => '2022-05-13 05:39:11',
                'updated_at' => '2022-05-13 19:40:13',
            ),
            379 => 
            array (
                'id' => 886,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 102,
                'locale' => 'ru',
                'value' => 'Статьи',
                'created_at' => '2022-05-13 05:39:11',
                'updated_at' => '2022-05-13 19:40:13',
            ),
            380 => 
            array (
                'id' => 887,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 103,
                'locale' => 'en',
                'value' => 'Events',
                'created_at' => '2022-05-13 05:41:24',
                'updated_at' => '2022-05-13 19:40:49',
            ),
            381 => 
            array (
                'id' => 888,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 103,
                'locale' => 'ru',
                'value' => 'События',
                'created_at' => '2022-05-13 05:41:24',
                'updated_at' => '2022-05-13 19:40:49',
            ),
            382 => 
            array (
                'id' => 889,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 104,
                'locale' => 'en',
                'value' => 'Educational materials',
                'created_at' => '2022-05-13 05:45:22',
                'updated_at' => '2022-05-13 19:41:29',
            ),
            383 => 
            array (
                'id' => 890,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 104,
                'locale' => 'ru',
                'value' => 'Образовательные материалы',
                'created_at' => '2022-05-13 05:45:22',
                'updated_at' => '2022-05-13 19:41:29',
            ),
            384 => 
            array (
                'id' => 891,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 105,
                'locale' => 'en',
                'value' => 'Supreme Court-90',
                'created_at' => '2022-05-13 05:46:00',
                'updated_at' => '2022-05-13 19:39:41',
            ),
            385 => 
            array (
                'id' => 892,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 105,
                'locale' => 'ru',
                'value' => 'Верховный суд-90',
                'created_at' => '2022-05-13 05:46:00',
                'updated_at' => '2022-05-13 19:39:41',
            ),
            386 => 
            array (
                'id' => 893,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 107,
                'locale' => 'en',
                'value' => 'Decisions of the presidium',
                'created_at' => '2022-05-13 05:46:55',
                'updated_at' => '2022-05-13 19:38:49',
            ),
            387 => 
            array (
                'id' => 894,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 107,
                'locale' => 'ru',
                'value' => 'Решения президиума',
                'created_at' => '2022-05-13 05:46:55',
                'updated_at' => '2022-05-13 19:38:49',
            ),
            388 => 
            array (
                'id' => 895,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 108,
                'locale' => 'en',
                'value' => 'Examples of documents',
                'created_at' => '2022-05-13 05:47:42',
                'updated_at' => '2022-05-13 19:37:58',
            ),
            389 => 
            array (
                'id' => 896,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 108,
                'locale' => 'ru',
                'value' => 'Примеры документов',
                'created_at' => '2022-05-13 05:47:42',
                'updated_at' => '2022-05-13 19:37:58',
            ),
            390 => 
            array (
                'id' => 897,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 109,
                'locale' => 'en',
                'value' => 'Examples of publications',
                'created_at' => '2022-05-13 05:48:14',
                'updated_at' => '2022-05-13 19:37:26',
            ),
            391 => 
            array (
                'id' => 898,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 109,
                'locale' => 'ru',
                'value' => 'Примеры публикаций',
                'created_at' => '2022-05-13 05:48:14',
                'updated_at' => '2022-05-13 19:37:26',
            ),
            392 => 
            array (
                'id' => 899,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 110,
                'locale' => 'en',
                'value' => 'Electronic library',
                'created_at' => '2022-05-13 05:48:40',
                'updated_at' => '2022-05-13 19:36:53',
            ),
            393 => 
            array (
                'id' => 900,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 110,
                'locale' => 'ru',
                'value' => 'Электронная библиотека',
                'created_at' => '2022-05-13 05:48:40',
                'updated_at' => '2022-05-13 19:36:53',
            ),
            394 => 
            array (
                'id' => 901,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 111,
                'locale' => 'en',
                'value' => 'Electronic database of the Supreme Court of Nakhchivan AR',
                'created_at' => '2022-05-13 05:50:57',
                'updated_at' => '2022-05-13 19:36:23',
            ),
            395 => 
            array (
                'id' => 902,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 111,
                'locale' => 'ru',
                'value' => 'Электронная база данных Верховного суда Нахчыванской АР',
                'created_at' => '2022-05-13 05:50:57',
                'updated_at' => '2022-05-13 19:36:23',
            ),
            396 => 
            array (
                'id' => 903,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 112,
                'locale' => 'en',
                'value' => 'Constitution',
                'created_at' => '2022-05-13 05:51:28',
                'updated_at' => '2022-05-13 19:35:44',
            ),
            397 => 
            array (
                'id' => 904,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 112,
                'locale' => 'ru',
                'value' => 'Конституция',
                'created_at' => '2022-05-13 05:51:28',
                'updated_at' => '2022-05-13 19:35:44',
            ),
            398 => 
            array (
                'id' => 905,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 113,
                'locale' => 'en',
                'value' => 'News',
                'created_at' => '2022-05-13 05:51:53',
                'updated_at' => '2022-05-13 19:35:15',
            ),
            399 => 
            array (
                'id' => 906,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 113,
                'locale' => 'ru',
                'value' => 'Новости',
                'created_at' => '2022-05-13 05:51:53',
                'updated_at' => '2022-05-13 19:35:15',
            ),
            400 => 
            array (
                'id' => 907,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 114,
                'locale' => 'en',
                'value' => 'How to write a letter',
                'created_at' => '2022-05-13 05:52:34',
                'updated_at' => '2022-05-13 19:34:41',
            ),
            401 => 
            array (
                'id' => 908,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 114,
                'locale' => 'ru',
                'value' => 'Как написать письмо',
                'created_at' => '2022-05-13 05:52:34',
                'updated_at' => '2022-05-13 19:34:41',
            ),
            402 => 
            array (
                'id' => 909,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 116,
                'locale' => 'en',
                'value' => 'Judicial apparatus',
                'created_at' => '2022-05-13 05:53:49',
                'updated_at' => '2022-05-13 19:34:11',
            ),
            403 => 
            array (
                'id' => 910,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 116,
                'locale' => 'ru',
                'value' => 'Судебный аппарат',
                'created_at' => '2022-05-13 05:53:49',
                'updated_at' => '2022-05-13 19:34:11',
            ),
            404 => 
            array (
                'id' => 911,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 119,
                'locale' => 'en',
                'value' => 'Adress',
                'created_at' => '2022-05-13 05:54:23',
                'updated_at' => '2022-05-13 19:33:44',
            ),
            405 => 
            array (
                'id' => 912,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 119,
                'locale' => 'ru',
                'value' => 'Адрес',
                'created_at' => '2022-05-13 05:54:23',
                'updated_at' => '2022-05-13 19:33:44',
            ),
            406 => 
            array (
                'id' => 913,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'News',
                'created_at' => '2022-05-13 08:12:57',
                'updated_at' => '2022-05-13 08:12:57',
            ),
            407 => 
            array (
                'id' => 914,
                'table_name' => 'translates',
                'column_name' => 'text',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'News ru',
                'created_at' => '2022-05-13 08:12:57',
                'updated_at' => '2022-05-13 08:12:57',
            ),
            408 => 
            array (
                'id' => 915,
                'table_name' => 'news',
                'column_name' => 'read_more',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'as',
                'created_at' => '2022-05-13 12:05:06',
                'updated_at' => '2022-05-13 12:05:06',
            ),
            409 => 
            array (
                'id' => 922,
                'table_name' => 'news',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'vhgvh',
                'created_at' => '2022-05-13 12:45:07',
                'updated_at' => '2022-05-13 12:45:07',
            ),
            410 => 
            array (
                'id' => 923,
                'table_name' => 'news',
                'column_name' => 'content',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => '<p>bhvg</p>',
                'created_at' => '2022-05-13 12:45:07',
                'updated_at' => '2022-05-13 12:45:07',
            ),
            411 => 
            array (
                'id' => 924,
                'table_name' => 'news',
                'column_name' => 'read_more',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'nkj',
                'created_at' => '2022-05-13 12:45:07',
                'updated_at' => '2022-05-13 12:45:07',
            ),
            412 => 
            array (
                'id' => 925,
                'table_name' => 'news',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'vhgvh',
                'created_at' => '2022-05-13 12:45:33',
                'updated_at' => '2022-05-13 12:45:33',
            ),
            413 => 
            array (
                'id' => 926,
                'table_name' => 'news',
                'column_name' => 'content',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => '<p>bhvg</p>',
                'created_at' => '2022-05-13 12:45:33',
                'updated_at' => '2022-05-13 12:45:33',
            ),
            414 => 
            array (
                'id' => 927,
                'table_name' => 'news',
                'column_name' => 'read_more',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'nkj',
                'created_at' => '2022-05-13 12:45:33',
                'updated_at' => '2022-05-13 12:45:33',
            ),
            415 => 
            array (
                'id' => 928,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 121,
                'locale' => 'en',
                'value' => 'Supreme Court of the Nakhchivan Autonomous Republic',
                'created_at' => '2022-05-14 12:53:55',
                'updated_at' => '2022-05-14 12:53:55',
            ),
            416 => 
            array (
                'id' => 929,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 121,
                'locale' => 'ru',
                'value' => 'Верховный Суд Нахчыванской Автономной Республики',
                'created_at' => '2022-05-14 12:53:55',
                'updated_at' => '2022-05-14 12:53:55',
            ),
            417 => 
            array (
                'id' => 930,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 122,
                'locale' => 'en',
                'value' => 'Search',
                'created_at' => '2022-05-14 13:02:22',
                'updated_at' => '2022-05-14 13:02:22',
            ),
            418 => 
            array (
                'id' => 931,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 122,
                'locale' => 'ru',
                'value' => 'Поиск',
                'created_at' => '2022-05-14 13:02:22',
                'updated_at' => '2022-05-14 13:02:22',
            ),
            419 => 
            array (
                'id' => 932,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R &nbsp;I &nbsp; &nbsp; &nbsp;&Nu; 2</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; 30 &nbsp;iyul 2012-ci il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti aşağıdakı tərkibdə:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Ali Məhkəmənin sədri R.R.S&uuml;leymanovun sədrliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">m&uuml;lki kollegiyanın sədri vəzifəsini icra edən Ə.K.Allahverdiyevin,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">inzibati-iqtisadi kollegiyanın sədri vəzifəsini icra edən Y.S.Qurbanovun,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">hərbi kollegiyanın sədri vəzifəsini icra edən Q.N.Məmmədovun iştirakları ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;Ali Məhkəmənin sədri R.R.S&uuml;leymanovun 2012-ci ilin birinci yarısında Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması, h&uuml;quqi maarifləndirmə sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsini, məruzə ilə əlaqədar &ccedil;ıxışları dinləyib m&uuml;zakirə edərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;Q ə r a r a &nbsp; &nbsp;a l ı r :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin sədri R.R.S&uuml;leymanovun 2012-ci ilin birinci yarısında Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi, muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələri tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi, vətəndaşların h&uuml;quq və azadlıqlarının qorunması, h&uuml;quqi maarifləndirmə sahəsində g&ouml;r&uuml;lm&uuml;ş işlər haqqında məruzəsi nəzərə alınsın.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Muxtar respublikanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələrinə t&ouml;vsiyə olunsun ki:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Cari ilin ikinci yarısında işlərə baxılarkən Azərbaycan Respublikasının Konstitusiyasında təsbit edilmiş əsas insan və vətəndaş h&uuml;quq və azadlıqlarının qorunması, qanunvericiliyin tələblərinə riayət edilməsi istiqamətində fəaliyyətlərini daha da g&uuml;cləndirsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Vətəndaşlardan daxil olmuş ərizə və şikayətlərə, şifahi m&uuml;raciətlərə Vətəndaşların m&uuml;raciətlərinə baxılması qaydası haqqında Azərbaycan Respublikası Qanununun tələblərinə uyğun olaraq baxılmasını təmin etsinlər;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">- Azərbaycan Respublikası Ədliyyə naziri və Azərbaycan Respublikası Ali Məhkəməsinin sədri tərəfindən 30 avqust 2007-ci il tarixdə təsdiq olunmuş Azərbaycan Respublikasının məhkəmələrində karg&uuml;zarlığın aparılmasına dair Təlimata uyğun olaraq məhkəmələrdə statistika və karg&uuml;zarlığın aparılması işinin təkmilləşdirilməsinə, əmək və icra intizamına daha ciddi əməl olunmasına x&uuml;susi diqqət yetirsinlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">S Ə D R : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RAMİZ &nbsp;S&Uuml;LEYMANOV</p>',
                'created_at' => '2022-05-15 16:51:27',
                'updated_at' => '2022-05-15 16:51:27',
            ),
            420 => 
            array (
                'id' => 933,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 6,
                'locale' => 'ru',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər &uuml;zrə 15 iyul 2012ci il tarixdə ke&ccedil;irilmiş se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsinə dair</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">&nbsp;NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R I</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; 20 iyul 2012-ci il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti Ramiz Rəhim oğlu S&uuml;leymanovun sədrliyi ilə, Rəyasət Heyətinin &uuml;zvləri Yusifəli S&uuml;leyman oğlu Qur-banov və Qabil Neymət oğlu Məmmədovdan ibarət tərkibdə, Azər Yusif oğlu Nuriyevin katibliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının sədri Qasımov Məhərrəm Əli oğlunun, sədr m&uuml;avini Qədimov Əli Tofiq oğlunun, katibi Eyvazov Elnur Həsənəli oğlunun, &uuml;zvlər Kazımov Anar Altay oğlunun, Həsənov Tural D&uuml;nyanur oğlu və Bayramova Vahidə Vahid qızının,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; M&uuml;təxəssislər Nax&ccedil;ıvan Muxtar Respublikası D&ouml;vlət Statistika Komitəsinin əməkdaşları Məmmədov Telman Vəli oğlunun, Qurbanov Cavanşir Məmməd oğlunun və Bağırov H&uuml;seyn Fərəməz oğlunun iştirakı ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsinə uyğun olaraq Rəyasət Heyətinin iclasında konstitusiya icraatı qaydasında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 15 iyul 2012-ci il tarixdə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsi haqqında işə baxaraq hakim Yusifəli S&uuml;leyman oğlu Qurbanovun məruzəsini, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının sədri Qasımov Məhərrəm Əli oğlunun &ccedil;ıxışını və m&uuml;təxəssislərin arayışını dinləyib m&uuml;zakirə edərək</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; M &Uuml; Ə Y Y Ə N &nbsp; E T D İ :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 5-ci maddəsinin 2-ci hissəsinin 1-ci bəndinə, &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 8.1-ci maddəsinə və &laquo;20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin təyin edilməsi haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin &laquo;17&raquo; may 2012-ci il tarixli Sərəncamına əsasən 15 iyul 2012-ci il tarixdə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər ke&ccedil;irilmişdir.&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 93.1-ci maddəsinə uyğun olaraq Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsinə Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən 17 iyul 2012-ci il tarixdə 20 saylı Yarımca se&ccedil;ki dairəsinin və 9 məntəqə se&ccedil;ki komissiyasının 15 iyul 2012-ci il tarixdə tərtib edilmiş se&ccedil;kilərin nəticələri haqqında protokolları, həm&ccedil;inin se&ccedil;kinin &uuml;mumi yekunlarının m&uuml;əyyənləşdirilməsinə dair Mərkəzi Se&ccedil;ki Komissiyasının 17 iyul 2012-ci il tarixli SQ-3/2012 n&ouml;mrəli qərarı və protokolu təqdim edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Təqdim edilmiş se&ccedil;kilərin &uuml;mumi yekunları haqqında sənədlərdə 15 iyul 2012-ci il tarixdə 20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə 9 se&ccedil;ki məntəqəsində Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri &ouml;z əksini tapmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Se&ccedil;kilərin &uuml;mumi yekunları haqqında təqdim edilmiş sənədlərdən məlum olur ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər &uuml;zrə 20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə passiv se&ccedil;ki h&uuml;ququ olan 3 nəfər Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən deputatlığa namizəd kimi qeydə alınmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Səsvermə g&uuml;n&uuml; Nax&ccedil;ıvan Muxtar Respublikası &uuml;zrə 20 saylı Yarımca se&ccedil;ki dairəsinin 9 se&ccedil;ki məntəqəsində səsvermə ke&ccedil;irilmişdir.&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Se&ccedil;ki sənədləri yoxlanılarkən m&uuml;əyyən edilmişdir ki, Nax&ccedil;ıvan Muxtar Respub-likası &uuml;zrə Ali Məclisə əlavə se&ccedil;kilərin ke&ccedil;irilməsi &uuml;&ccedil;&uuml;n yaradılmış 20 saylı Yarımca se&ccedil;ki dairəsini əhatə edən 9 se&ccedil;ki məntəqəsi &uuml;zrə aktiv se&ccedil;ki h&uuml;ququ olan 6437 se&ccedil;ici &uuml;mumi se&ccedil;ici siyahılarına daxil edilmiş, onlardan 4094 nəfəri, yəni 63.6 faizi səsvermədə iştirak etmişdir. Səsvermədə iştirak etmiş se&ccedil;icilərin 4094 nəfəri bilavasitə se&ccedil;ki məntəqələrində səs vermişlər. Se&ccedil;ki qutularında aşkar edilən b&uuml;lletenlərdən 4051 se&ccedil;ki b&uuml;lleteni, yəni 98.9 faizi etibarlı hesab edilmiş, 43 b&uuml;lleten, yəni 1.1 faizi isə etibarsız hesab edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Məntəqələr &uuml;zrə se&ccedil;ki g&uuml;n&uuml; 2343 ədəd istifadə edilməmiş se&ccedil;ki b&uuml;lletenləri mən-təqə se&ccedil;ki komissiyaları tərəfindən ləğv edilmişdir. G&ouml;stərilənlər &laquo;Nax&ccedil;ıvan Muxtar Res-publikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 88-89-cu maddələrinin tələblərinə uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin yekunlarına dair təqdim olunmuş sənədlərin təhlilindən g&ouml;r&uuml;n&uuml;r ki, Muxtar Respublikanın ərazisində yaradılmış 9 se&ccedil;ki məntəqəsində 15 iyul 2012-ci il tarixdə se&ccedil;kilərin ke&ccedil;irilməsi zamanı aşkarlığı təmin etmək məqsədi ilə &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikasının Qanununun 37-41-ci maddələrinin tələblərinə uyğun olaraq namizədin vəkil etdiyi 1 nəfər şəxs, 2 nəfər səlahiyyətli n&uuml;mayəndə və 18 nəfər m&uuml;şahidə&ccedil;i se&ccedil;kilərin gedişini və səslərin hesablanmasını izləmişlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən təqdim olunmuş, həm&ccedil;inin Ali Məhkəmə tərəfindən tələb edilmiş sənədlərin, habelə cəlb olunmuş m&uuml;təxəssislərin arayışının təhlili g&ouml;stərir ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri barədə protokolları, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının 16 iyul 2012-ci il tarixli protokolu və onlara əlavə edilmiş sənədlər &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikasının Qanununa uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Ona g&ouml;rə də Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin yekunları təsdiq edilməlidir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; Beləliklə, Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti g&ouml;stərilənlərə əsaslanıb Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsini, &laquo;Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında&raquo; Nax&ccedil;ıvan Muxtar Respublikası Qanununun 93.1-ci və 93.4-c&uuml; maddələrini rəhbər tutaraq&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Q Ə R A R A &nbsp; &nbsp; &nbsp; A L I R:</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 15 iyul 2012-ci il tarixdə ke&ccedil;irilmiş 20 saylı Yarımca se&ccedil;ki dairəsi &uuml;zrə əlavə se&ccedil;kilərin nəticələri təsdiq edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Qərar elan olunduğu g&uuml;ndən q&uuml;vvəyə minir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">3. Qərar &laquo;Şərq qapısı&raquo; qəzetində dərc edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">4. Qərar qətidir, he&ccedil; bir orqan tərəfindən ləğv edilə, dəyişdirilə və yaxud rəsmi təfsir edilə bilməz.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sədrlik edən: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ramiz S&uuml;leymanov</p>',
                'created_at' => '2022-05-15 16:51:42',
                'updated_at' => '2022-05-15 16:51:42',
            ),
            421 => 
            array (
                'id' => 934,
                'table_name' => 'decisionpresidia',
                'column_name' => 'content',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 02 oktyabr 2011-ci il tarixdə ke&ccedil;irilmiş 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə əlavə se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsinə dair</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">&nbsp;</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">RƏYASƏT HEYƏTİNİN</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">&nbsp;</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;"><strong style="box-sizing: border-box;">Q Ə R A R I</strong></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp;11 oktyabr 2011-ci il &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nax&ccedil;ıvan şəhəri</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti Ramiz Rəhim oğlu S&uuml;leymanovun sədrliyi ilə, Rəyasət Heyətinin &uuml;zvləri Əli Kərim oğlu Allahverdiyev və Qabil Neymət oğlu Məmmədovdan ibarət tərkibdə, Azər Yusif oğlu Nuriyevin katibliyi,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının &nbsp;sədri Qasımov Məhərrəm Əli oğlunun, sədr m&uuml;avini Qədimov Əli Tofiq oğlunun, katibi Eyvazov Elnur Həsənəli oğlunun, &uuml;zvlər Kazımov Anar Altay oğlunun, H&uuml;seynov Tural Cəmaləddin oğlunun, Həsənov Tural D&uuml;nyanur oğlunun və Bayramova Vahidə Vahid qızının,</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;M&uuml;təxəssislər, Nax&ccedil;ıvan Muxtar Respublikası D&ouml;vlət Statistika Komitəsinin əməkdaşları Məmmədov Telman Vəli oğlunun, Qurbanov Cavanşir Məmməd oğlunun və Əsgərov Rəhim Əsgər oğlunun iştirakı ilə</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsinə uyğun olaraq Rəyasət Heyətinin iclasında konstitusiya icraatı qaydasında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 02 oktyabr 2011-ci il tarixdə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələrinin yoxlanılması və təsdiq edilməsi haqqında işə baxaraq hakim Qabil Neymət oğlu Məmmədovun məruzəsini, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının sədri Məhərrəm Əli oğlu Qasımovun &ccedil;ıxışını və m&uuml;təxəssislərin arayışını dinləyib m&uuml;zakirə edərək &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">M &Uuml; Ə Y Y Ə N &nbsp; E T D İ :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 5-ci maddəsinin 2-ci hissəsinin 1-ci bəndinə, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 8.1-ci maddəsinə və 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin təyin edilməsi haqqında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin &laquo; 04 &raquo; avqust 2011-ci il tarixli Fərmanına əsasən 02 oktyabr 2011-ci il tarixdə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər ke&ccedil;irilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 93.1-ci maddəsinə uyğun olaraq Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsinə Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən 05 oktyabr 2011-ci il tarixdə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsinin və 8 məntəqə se&ccedil;ki komissiyasının 02 oktyabr 2011-ci ildə tərtib edilmiş se&ccedil;kilərin nəticələri haqqında protokolları, həm&ccedil;inin se&ccedil;kinin &uuml;mumi yekunlarının m&uuml;əyyənləşdirilməsinə dair Mərkəzi Se&ccedil;ki Komissiyasının 04 oktyabr 2011-ci il tarixli SQ-3/2011 n&ouml;mrəli qərarı və protokolu təqdim edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Təqdim edilmiş se&ccedil;kilərin &uuml;mumi yekunları haqqında sənədlərdə 02 oktyabr 2011-ci il tarixdə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə 8 se&ccedil;ki məntəqəsində Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri &ouml;z əksini tapmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Se&ccedil;kilərin &uuml;mumi yekunları haqqında təqdim edilmiş sənədlərdən məlum olur ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər &uuml;zrə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə passiv se&ccedil;ki h&uuml;ququ olan 3 nəfər Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən deputatlığa namizəd kimi qeydə alınmışdır.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Səsvermə g&uuml;n&uuml; Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilər &nbsp; &uuml;zrə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki &nbsp;dairəsinin 8 se&ccedil;ki məntəqəsində səsvermə ke&ccedil;irilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Se&ccedil;ki sənədləri yoxlanılarkən m&uuml;əyyən edilmişdir ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin ke&ccedil;irilməsi &uuml;&ccedil;&uuml;n yaradılmış 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsini əhatə edən 8 se&ccedil;ki məntəqəsi &uuml;zrə aktiv se&ccedil;ki h&uuml;ququ olan 5451 se&ccedil;ici &uuml;mumi se&ccedil;ici siyahılarına daxil edilmiş, onlardan 3120 nəfəri, yəni 57.2 faizi səsvermədə iştirak etmişdir. Səsvermədə iştirak etmiş se&ccedil;icilərin 3120 nəfəri bilavasitə se&ccedil;ki məntəqələrində səs vermişlər. Se&ccedil;ki qutularında aşkar edilən b&uuml;lletenlərdən 3118 se&ccedil;ki b&uuml;lleteni, yəni 99.9 faizi etibarlı hesab edilmiş, 2 b&uuml;lleten, yəni 0.1 faizi isə etibarsız hesab edilmişdir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Məntəqələr &uuml;zrə se&ccedil;ki g&uuml;n&uuml; 3 ədəd korlanmış, 2328 ədəd isə istifadə edilməmiş se&ccedil;ki b&uuml;lletenləri məntəqə se&ccedil;ki komissiyaları tərəfindən ləğv edilmişdir. G&ouml;stərilənlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası Qanununun 88-89-cu maddələrinin tələblərinə uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin yekunlarına dair təqdim olunmuş sənədlərin təhlilindən g&ouml;r&uuml;n&uuml;r ki, 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsinin ərazisində yaradılmış 8 se&ccedil;ki məntəqəsində 02 oktyabr 2011-ci il tarixdə se&ccedil;kilərin ke&ccedil;irilməsi zamanı aşkarlığı təmin etmək məqsədi ilə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə &nbsp;se&ccedil;kilər &nbsp;haqqında &nbsp;Nax&ccedil;ıvan &nbsp;Muxtar &nbsp;Respublikasının &nbsp;Qanununun 37-39-cu maddələrinin tələblərinə uyğun olaraq 16 nəfər yerli m&uuml;şahidə&ccedil;ilər se&ccedil;kilərin gedişini və səslərin hesablanmasını izləmişlər.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyası tərəfindən təqdim olunmuş, həm&ccedil;inin Ali Məhkəmə tərəfindən tələb edilmiş sənədlərin, habelə cəlb olunmuş m&uuml;təxəssislərin arayışının təhlili g&ouml;stərir ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri barədə protokolları, Nax&ccedil;ıvan Muxtar Respublikası Mərkəzi Se&ccedil;ki Komissiyasının 04 oktyabr 2011-ci il tarixli &nbsp;protokolu və onlara əlavə edilmiş sənədlər Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikasının &nbsp;Qanununa uyğundur.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">Ona g&ouml;rə də 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə əlavə se&ccedil;kilərin yekunları təsdiq edilməlidir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">G&ouml;stərilənlərə əsasən, Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Rəyasət Heyəti Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16-cı maddəsini, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə se&ccedil;kilər haqqında Nax&ccedil;ıvan Muxtar Respublikası &nbsp;Qanununun 93.1-ci və 93.4-c&uuml; maddələrini rəhbər tutaraq &nbsp; &nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: center;">Q Ə R A R A &nbsp; A L I R :</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">1. Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinə 6 saylı &Ccedil;ər&ccedil;iboğan se&ccedil;ki dairəsi &uuml;zrə 02 oktyabr 2011-ci ildə ke&ccedil;irilmiş əlavə se&ccedil;kilərin nəticələri təsdiq edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">2. Qərar elan olunduğu g&uuml;ndən q&uuml;vvəyə minir.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">3. Qərar &laquo;Şərq qapısı&raquo; qəzetində dərc edilsin.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">4. Qərar qətidir, he&ccedil; bir orqan tərəfindən ləğv edilə, dəyişdirilə və yaxud rəsmi təfsir edilə bilməz.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; outline: none !important;">Sədrlik edən:- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ramiz &nbsp;S&uuml;leymanov</p>',
                'created_at' => '2022-05-15 16:53:05',
                'updated_at' => '2022-05-15 16:53:05',
            ),
            422 => 
            array (
                'id' => 935,
                'table_name' => 'news',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Hüquqşünaslıq ixtisası üzrə təhsil alan tələbələr üçün “Təqsirsizlik prezumpsiyasında trasologiya, mövcud problemlər, yol verilən nöqsanlar və həlli üsulları” mövzusunda təlim keçilib',
                'created_at' => '2022-05-15 18:15:36',
                'updated_at' => '2022-05-15 18:15:36',
            ),
            423 => 
            array (
                'id' => 936,
                'table_name' => 'news',
                'column_name' => 'content',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 35.45pt;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';">Mayın 11-də Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin və Nax&ccedil;ıvan D&ouml;vlət Universitetinin birgə təşkilat&ccedil;ılığı ilə Universitetin Beynəlxalq m&uuml;nasibətlər və h&uuml;quq fak&uuml;ltəsinin h&uuml;quqş&uuml;naslıq ixtisası &uuml;zrə təhsil alan tələbələri &uuml;&ccedil;&uuml;n &ldquo;Təqsirsizlik prezumpsiyasında trasologiya, m&ouml;vcud problemlər, yol verilən n&ouml;qsanlar və həlli &uuml;sulları&rdquo; m&ouml;vzusunda təlim ke&ccedil;ilib. Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Cinayət Kollegiyasının sədri İlqar Mirzəyev tərəfindən ke&ccedil;ilən təlimdə Ali Məhkəmənin M&uuml;lki Kollegiyasının sədri vəzifəsini icra edən Əli Allahverdiyev və Kommersiya Kollegiyasının sədri Əhliman Xıdırov iştirak etmişlər.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 35.45pt;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';">Tədbiri giriş s&ouml;z&uuml; ilə a&ccedil;an Universitetin Beynəlxalq m&uuml;nasibətlər və h&uuml;quq fak&uuml;ltəsinin dekanı Yusif H&uuml;seynov Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin ali və orta ixtisas təhsili m&uuml;əssisələrində ixtisasların m&uuml;vafiq təşkilatlara hamiliyə verilməsi ilə bağlı m&uuml;vafiq sərəncamlarına uyğun olaraq ke&ccedil;irilən bu c&uuml;r tədbirlərin tələbələrin ixtisaslı kadrlar kimi yetişdirilməsində əhəmiyyətini vurğulayıb.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 35.45pt;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';"><img style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin: 5px; float: right;" src="http://www.supremecourt.nakhchivan.az/images/news/11.05.2022%20(1).JPG" alt="11.05.2022 (1)" width="300" height="200" />Əli Allahverdiyev tədbir iştirak&ccedil;ılarını salamlayaraq həyata ke&ccedil;irilən təlimin tələbələrin cinayət h&uuml;ququ sahəsinə olan maraqlarının daha da artmasına xidmət etməklə yanaşı, cinayətlərin məhkəməyəqədərki tədqiqatı barədə onlarda zəruri biliklərin formalaşmasına t&ouml;hfə verəcəyini bildirib, gələcəyin gənc h&uuml;quqş&uuml;naslarına uğur arzulayıb.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 35.45pt;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';">M&ouml;vzu ətrafında hazırlanmış slayd m&uuml;şayiəti ilə ke&ccedil;irilən təlimdə iştirak&ccedil;ılara təqsirsizlik prezumpsiyası, həmin prinsipin tarixi və qanunvericiliyimizdəki yeri barədə geniş məlumat verildikdən sonra trаsоlоgiyаnın predmeti, əsaslandığı еlmi m&uuml;ddəаlаr, trasologiyada izlərin qrup təsnifatları ətraflı izah olunub.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 35.45pt;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';">Təlimdə iştirak&ccedil;ılar həm&ccedil;inin insan şəxsiyyətinin eyniləşdirilməsi məqsədilə aparılan daktiloskopik qeydiyyat, DNT tədqiqatının k&ouml;məyi ilə şəxsiyyətin eyniləşdirilməsi metodu ilə yanaşı аyаq və аyаqqаbı izinin еkspеrtizаsı, insаn diş, dоdаq və dırnаq izlərinin еkspеrtizаları, sındırmа аlət və vаsitələri izlərinin еkspеrtizаsı (mехаnоskоpik еkspеrtizа) ilə bağlı ətraflı məlumatlandırılmışlar.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 35.45pt;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';"><img style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin: 5px; float: left;" src="http://www.supremecourt.nakhchivan.az/images/news/11.05.2022.JPG" alt="11.05.2022" width="300" height="200" />Qeyd olunmuşdur ki, trasologiya həmişə ən perspektivli b&ouml;lmə olmuşdur. Məhkəmə təcr&uuml;bəsinin təhlili g&ouml;stərir ki, cinayətlərin b&ouml;y&uuml;k əksəriyyəti cinayətkarın ətraf m&uuml;hitlə fəal qarşılıqlı əlaqədə olduğu zaman baş verir. Əvvəlcə kriminalist texnikanın formalaşması zamanı iz təlimi əsas və həlledici rol oynayırdı. Hazırda kriminalistik texnika trasologiyanın indiki konsepsiyasını, onun a&ccedil;ılmamış potensialını, təkmilləşdirilmiş &uuml;sullarını və izlərin aşkar edilməsi və təsbit edilməsi &uuml;zrə son metodları yalnız tədris fənni kimi təkmilləşdirmir, həm də bunun nəticəsi olaraq cinayətlərin aşkarlanmasının səmərəliliyini artırır. Cinayətkarlığın və onun dinamikasının artımının m&uuml;şahidə olunduğu son illərdə cinayət m&uuml;hakimə icraatında elm və texnikanın nailiyyətlərinin əsas bələd&ccedil;isi olan kriminalistika və məhkəmə ekspertizalarının formalaşmasına və təkmilləşdirilməsinə daha &ccedil;ox zərurət var.<span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px;">&nbsp;<img style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin: 5px; float: right;" src="http://www.supremecourt.nakhchivan.az/images/news/11.05.2022%20(4).JPG" alt="11.05.2022 (4)" width="300" height="200" /></span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 35.45pt;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';">Təlimin gedişində iştirak&ccedil;ıları maraqlandıran suallar cavablandırılmış, m&ouml;vzu ətrafında fikir m&uuml;badiləsi aparılmışdır.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 35.45pt;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';">Sonda trasoloji ekspertizaların tətbiq edildiyi Robert Şvartz cinayəti barədə &ldquo;İstintaq təcr&uuml;bəsi, izin sirri&rdquo; sənədli filmi n&uuml;mayiş olunub.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px 210px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px 210px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;">&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px 210px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';"><strong style="box-sizing: border-box;"><em style="box-sizing: border-box;">Nax&ccedil;ıvan Muxtar Respublikası</em></strong></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px 210px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; outline: none !important;"><strong style="box-sizing: border-box;"><em style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14pt; line-height: 21.4667px; font-family: \'Times New Roman\', \'serif\';">Ali Məhkəməsinin mətbuat xidməti</span></em></strong></p>',
                'created_at' => '2022-05-15 18:15:36',
                'updated_at' => '2022-05-15 18:15:36',
            ),
            424 => 
            array (
                'id' => 937,
                'table_name' => 'news',
                'column_name' => 'read_more',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Ardını oxu',
                'created_at' => '2022-05-15 18:15:36',
                'updated_at' => '2022-05-15 18:15:36',
            ),
            425 => 
            array (
                'id' => 938,
                'table_name' => 'apparatuses',
                'column_name' => 'link',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Allahverdiyev-li-Krim-oglu_428',
                'created_at' => '2022-05-15 18:16:41',
                'updated_at' => '2022-05-15 18:16:41',
            ),
            426 => 
            array (
                'id' => 939,
                'table_name' => 'apparatuses',
                'column_name' => 'college',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => '1',
                'created_at' => '2022-05-15 18:16:41',
                'updated_at' => '2022-05-15 18:16:41',
            ),
            427 => 
            array (
                'id' => 940,
                'table_name' => 'apparatuses',
                'column_name' => 'link',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'http://127.0.0.1:8000/structure',
                'created_at' => '2022-05-15 18:18:25',
                'updated_at' => '2022-05-15 18:18:25',
            ),
            428 => 
            array (
                'id' => 941,
                'table_name' => 'apparatuses',
                'column_name' => 'link',
                'foreign_key' => 8,
                'locale' => 'ru',
                'value' => 'http://127.0.0.1:8000/structure',
                'created_at' => '2022-05-15 18:18:25',
                'updated_at' => '2022-05-15 18:18:25',
            ),
            429 => 
            array (
                'id' => 942,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Civil board',
                'created_at' => '2022-05-18 07:15:43',
                'updated_at' => '2022-05-18 07:15:43',
            ),
            430 => 
            array (
                'id' => 943,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Гражданский совет',
                'created_at' => '2022-05-18 07:15:43',
                'updated_at' => '2022-05-18 07:21:33',
            ),
            431 => 
            array (
                'id' => 944,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Acting Chairman of the Board',
                'created_at' => '2022-05-18 07:15:43',
                'updated_at' => '2022-05-18 07:21:33',
            ),
            432 => 
            array (
                'id' => 945,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Исполняющий обязанности Председателя Правления',
                'created_at' => '2022-05-18 07:15:43',
                'updated_at' => '2022-05-18 07:21:33',
            ),
            433 => 
            array (
                'id' => 946,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Allahverdiyev Əli Kərim oğlu',
                'created_at' => '2022-05-18 07:15:43',
                'updated_at' => '2022-05-18 07:15:43',
            ),
            434 => 
            array (
                'id' => 947,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'Allahverdiyev Əli Kərim oğlu',
                'created_at' => '2022-05-18 07:15:43',
                'updated_at' => '2022-05-18 07:15:43',
            ),
            435 => 
            array (
                'id' => 948,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Commercial board',
                'created_at' => '2022-05-18 07:22:57',
                'updated_at' => '2022-05-18 07:22:57',
            ),
            436 => 
            array (
                'id' => 949,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Коммерческая доска',
                'created_at' => '2022-05-18 07:22:57',
                'updated_at' => '2022-05-18 07:22:57',
            ),
            437 => 
            array (
                'id' => 950,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Chairman of the Board:',
                'created_at' => '2022-05-18 07:22:57',
                'updated_at' => '2022-05-18 07:22:57',
            ),
            438 => 
            array (
                'id' => 951,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Председатель правления:',
                'created_at' => '2022-05-18 07:22:57',
                'updated_at' => '2022-05-18 07:22:57',
            ),
            439 => 
            array (
                'id' => 952,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'Xıdırov Əhliman Mehman oğlu',
                'created_at' => '2022-05-18 07:22:57',
                'updated_at' => '2022-05-18 07:22:57',
            ),
            440 => 
            array (
                'id' => 953,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 1,
                'locale' => 'ru',
                'value' => 'Xıdırov Əhliman Mehman oğlu',
                'created_at' => '2022-05-18 07:22:57',
                'updated_at' => '2022-05-18 07:22:57',
            ),
            441 => 
            array (
                'id' => 954,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Administrative board',
                'created_at' => '2022-05-18 07:24:11',
                'updated_at' => '2022-05-18 07:24:11',
            ),
            442 => 
            array (
                'id' => 955,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Административный совет',
                'created_at' => '2022-05-18 07:24:11',
                'updated_at' => '2022-05-18 07:24:11',
            ),
            443 => 
            array (
                'id' => 956,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Acting Chairman of the Board',
                'created_at' => '2022-05-18 07:24:11',
                'updated_at' => '2022-05-18 07:24:11',
            ),
            444 => 
            array (
                'id' => 957,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Исполняющий обязанности Председателя Правления',
                'created_at' => '2022-05-18 07:24:11',
                'updated_at' => '2022-05-18 07:24:11',
            ),
            445 => 
            array (
                'id' => 958,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Qurbanov Yusifəli Süleyman oğlu',
                'created_at' => '2022-05-18 07:24:11',
                'updated_at' => '2022-05-18 07:24:11',
            ),
            446 => 
            array (
                'id' => 959,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 3,
                'locale' => 'ru',
                'value' => 'Qurbanov Yusifəli Süleyman oğlu',
                'created_at' => '2022-05-18 07:24:11',
                'updated_at' => '2022-05-18 07:24:11',
            ),
            447 => 
            array (
                'id' => 960,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Criminal board',
                'created_at' => '2022-05-18 07:25:11',
                'updated_at' => '2022-05-18 07:25:11',
            ),
            448 => 
            array (
                'id' => 961,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Криминальная коллегия',
                'created_at' => '2022-05-18 07:25:11',
                'updated_at' => '2022-05-18 07:25:11',
            ),
            449 => 
            array (
                'id' => 962,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Chairman of the Board:',
                'created_at' => '2022-05-18 07:25:11',
                'updated_at' => '2022-05-18 07:25:11',
            ),
            450 => 
            array (
                'id' => 963,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Председатель правления:',
                'created_at' => '2022-05-18 07:25:11',
                'updated_at' => '2022-05-18 07:25:11',
            ),
            451 => 
            array (
                'id' => 964,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Mirzəyev İlqar Məhərrəm oğlu',
                'created_at' => '2022-05-18 07:25:11',
                'updated_at' => '2022-05-18 07:25:11',
            ),
            452 => 
            array (
                'id' => 965,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 2,
                'locale' => 'ru',
                'value' => 'Mirzəyev İlqar Məhərrəm oğlu',
                'created_at' => '2022-05-18 07:25:11',
                'updated_at' => '2022-05-18 07:25:11',
            ),
            453 => 
            array (
                'id' => 966,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Chairman of the Supreme Court',
                'created_at' => '2022-05-18 07:26:18',
                'updated_at' => '2022-05-18 07:26:18',
            ),
            454 => 
            array (
                'id' => 967,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'Председатель Верховного суда',
                'created_at' => '2022-05-18 07:26:18',
                'updated_at' => '2022-05-18 07:26:18',
            ),
            455 => 
            array (
                'id' => 968,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Chairman of the Supreme Court',
                'created_at' => '2022-05-18 07:26:18',
                'updated_at' => '2022-05-18 07:26:18',
            ),
            456 => 
            array (
                'id' => 969,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'Председатель Верховного суда',
                'created_at' => '2022-05-18 07:26:18',
                'updated_at' => '2022-05-18 07:26:18',
            ),
            457 => 
            array (
                'id' => 970,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Ali Məhkəmənin sədri',
                'created_at' => '2022-05-18 07:26:18',
                'updated_at' => '2022-05-18 07:26:18',
            ),
            458 => 
            array (
                'id' => 971,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 7,
                'locale' => 'ru',
                'value' => 'Ali Məhkəmənin sədri',
                'created_at' => '2022-05-18 07:26:18',
                'updated_at' => '2022-05-18 07:26:18',
            ),
            459 => 
            array (
                'id' => 972,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Deputy Chairman of the Supreme Court',
                'created_at' => '2022-05-18 07:27:28',
                'updated_at' => '2022-05-18 07:27:28',
            ),
            460 => 
            array (
                'id' => 973,
                'table_name' => 'apparats',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Заместитель Председателя Верховного суда',
                'created_at' => '2022-05-18 07:27:28',
                'updated_at' => '2022-05-18 07:27:28',
            ),
            461 => 
            array (
                'id' => 974,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Deputy Chairman of the Supreme Court',
                'created_at' => '2022-05-18 07:27:28',
                'updated_at' => '2022-05-18 07:27:28',
            ),
            462 => 
            array (
                'id' => 975,
                'table_name' => 'apparats',
                'column_name' => 'position',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Заместитель Председателя Верховного суда',
                'created_at' => '2022-05-18 07:27:28',
                'updated_at' => '2022-05-18 07:27:28',
            ),
            463 => 
            array (
                'id' => 976,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Ali Məhkəmənin sədr müavini',
                'created_at' => '2022-05-18 07:27:28',
                'updated_at' => '2022-05-18 07:27:28',
            ),
            464 => 
            array (
                'id' => 977,
                'table_name' => 'apparats',
                'column_name' => 'member',
                'foreign_key' => 5,
                'locale' => 'ru',
                'value' => 'Ali Məhkəmənin sədr müavini',
                'created_at' => '2022-05-18 07:27:28',
                'updated_at' => '2022-05-18 07:27:28',
            ),
            465 => 
            array (
                'id' => 978,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 128,
                'locale' => 'en',
                'value' => 'The Court',
                'created_at' => '2022-05-18 18:09:53',
                'updated_at' => '2022-05-19 05:46:00',
            ),
            466 => 
            array (
                'id' => 979,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 128,
                'locale' => 'ru',
                'value' => 'Суд',
                'created_at' => '2022-05-18 18:09:53',
                'updated_at' => '2022-05-19 05:45:03',
            ),
            467 => 
            array (
                'id' => 980,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 129,
                'locale' => 'en',
                'value' => 'About the Court ',
                'created_at' => '2022-05-18 18:10:46',
                'updated_at' => '2022-05-18 18:10:46',
            ),
            468 => 
            array (
                'id' => 981,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 129,
                'locale' => 'ru',
                'value' => 'О Суде',
                'created_at' => '2022-05-18 18:10:46',
                'updated_at' => '2022-05-18 18:10:46',
            ),
            469 => 
            array (
                'id' => 982,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 130,
                'locale' => 'en',
                'value' => 'The Chairman of the Court',
                'created_at' => '2022-05-18 18:11:24',
                'updated_at' => '2022-05-18 18:11:24',
            ),
            470 => 
            array (
                'id' => 983,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 130,
                'locale' => 'ru',
                'value' => 'Председатель Суда',
                'created_at' => '2022-05-18 18:11:24',
                'updated_at' => '2022-05-18 18:11:24',
            ),
            471 => 
            array (
                'id' => 984,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 131,
                'locale' => 'en',
                'value' => 'Presidium ',
                'created_at' => '2022-05-18 18:12:23',
                'updated_at' => '2022-05-18 18:12:23',
            ),
            472 => 
            array (
                'id' => 985,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 131,
                'locale' => 'ru',
                'value' => 'Президиум ',
                'created_at' => '2022-05-18 18:12:23',
                'updated_at' => '2022-05-18 18:12:23',
            ),
            473 => 
            array (
                'id' => 986,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 132,
                'locale' => 'en',
                'value' => 'Judges',
                'created_at' => '2022-05-18 18:13:02',
                'updated_at' => '2022-05-18 18:13:02',
            ),
            474 => 
            array (
                'id' => 987,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 132,
                'locale' => 'ru',
                'value' => 'Судьи ',
                'created_at' => '2022-05-18 18:13:02',
                'updated_at' => '2022-05-18 18:13:02',
            ),
            475 => 
            array (
                'id' => 988,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 133,
                'locale' => 'en',
                'value' => 'The structure of the Court ',
                'created_at' => '2022-05-18 18:13:36',
                'updated_at' => '2022-05-18 18:13:36',
            ),
            476 => 
            array (
                'id' => 989,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 133,
                'locale' => 'ru',
                'value' => 'Структура Суда ',
                'created_at' => '2022-05-18 18:13:36',
                'updated_at' => '2022-05-18 18:13:36',
            ),
            477 => 
            array (
                'id' => 990,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 134,
                'locale' => 'en',
                'value' => 'Registry of the Court',
                'created_at' => '2022-05-18 18:14:26',
                'updated_at' => '2022-05-18 18:14:26',
            ),
            478 => 
            array (
                'id' => 991,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 134,
                'locale' => 'ru',
                'value' => 'Аппарат Верховного Суда',
                'created_at' => '2022-05-18 18:14:26',
                'updated_at' => '2022-05-18 18:14:26',
            ),
            479 => 
            array (
                'id' => 992,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 135,
                'locale' => 'en',
                'value' => 'Legal documents',
                'created_at' => '2022-05-18 18:15:07',
                'updated_at' => '2022-05-18 18:15:07',
            ),
            480 => 
            array (
                'id' => 993,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 135,
                'locale' => 'ru',
                'value' => 'Правовые документы',
                'created_at' => '2022-05-18 18:15:07',
                'updated_at' => '2022-05-18 18:15:07',
            ),
            481 => 
            array (
                'id' => 994,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 136,
                'locale' => 'en',
                'value' => 'Legal acts of Azerbaijan Republic',
                'created_at' => '2022-05-19 05:49:42',
                'updated_at' => '2022-05-19 05:49:42',
            ),
            482 => 
            array (
                'id' => 995,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 136,
                'locale' => 'ru',
                'value' => 'Правовые документы Азербайджанской Республики',
                'created_at' => '2022-05-19 05:49:42',
                'updated_at' => '2022-05-19 05:49:42',
            ),
            483 => 
            array (
                'id' => 996,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 137,
                'locale' => 'en',
                'value' => 'İnternational Legal documents ',
                'created_at' => '2022-05-19 05:51:40',
                'updated_at' => '2022-05-19 05:51:40',
            ),
            484 => 
            array (
                'id' => 997,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 137,
                'locale' => 'ru',
                'value' => 'Международные правовые документы ',
                'created_at' => '2022-05-19 05:51:40',
                'updated_at' => '2022-05-19 05:51:40',
            ),
            485 => 
            array (
                'id' => 998,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 138,
                'locale' => 'en',
                'value' => 'Court Documents',
                'created_at' => '2022-05-19 05:52:36',
                'updated_at' => '2022-05-19 05:52:36',
            ),
            486 => 
            array (
                'id' => 999,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 138,
                'locale' => 'ru',
                'value' => 'Судебные документы',
                'created_at' => '2022-05-19 05:52:36',
                'updated_at' => '2022-05-19 05:52:36',
            ),
            487 => 
            array (
                'id' => 1000,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 139,
                'locale' => 'en',
                'value' => 'The Decisions of Presidium',
                'created_at' => '2022-05-19 05:54:08',
                'updated_at' => '2022-05-19 05:54:08',
            ),
            488 => 
            array (
                'id' => 1001,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 139,
                'locale' => 'ru',
                'value' => 'Постановления Президиум',
                'created_at' => '2022-05-19 05:54:08',
                'updated_at' => '2022-05-19 05:54:08',
            ),
            489 => 
            array (
                'id' => 1002,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 140,
                'locale' => 'en',
                'value' => 'Judgements',
                'created_at' => '2022-05-19 05:54:41',
                'updated_at' => '2022-05-19 05:54:41',
            ),
            490 => 
            array (
                'id' => 1003,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 140,
                'locale' => 'ru',
                'value' => 'Судебные Постановления',
                'created_at' => '2022-05-19 05:54:41',
                'updated_at' => '2022-05-19 07:44:31',
            ),
            491 => 
            array (
                'id' => 1004,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 141,
                'locale' => 'en',
                'value' => 'The judgements of the European Court on Human Rights',
                'created_at' => '2022-05-19 05:55:28',
                'updated_at' => '2022-05-19 05:55:28',
            ),
            492 => 
            array (
                'id' => 1005,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 141,
                'locale' => 'ru',
                'value' => 'Постановления Европейского Суда по Правам Человека',
                'created_at' => '2022-05-19 05:55:28',
                'updated_at' => '2022-05-19 05:55:28',
            ),
            493 => 
            array (
                'id' => 1006,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 142,
                'locale' => 'en',
                'value' => 'Press Service',
                'created_at' => '2022-05-19 05:56:14',
                'updated_at' => '2022-05-19 05:56:14',
            ),
            494 => 
            array (
                'id' => 1007,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 142,
                'locale' => 'ru',
                'value' => 'Пресс-служба',
                'created_at' => '2022-05-19 05:56:14',
                'updated_at' => '2022-05-19 05:56:14',
            ),
            495 => 
            array (
                'id' => 1008,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 143,
                'locale' => 'en',
                'value' => 'News',
                'created_at' => '2022-05-19 05:56:49',
                'updated_at' => '2022-05-19 05:56:49',
            ),
            496 => 
            array (
                'id' => 1009,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 143,
                'locale' => 'ru',
                'value' => 'Новости',
                'created_at' => '2022-05-19 05:56:49',
                'updated_at' => '2022-05-19 05:56:49',
            ),
            497 => 
            array (
                'id' => 1010,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 144,
                'locale' => 'en',
                'value' => 'Photo gallery',
                'created_at' => '2022-05-19 05:57:37',
                'updated_at' => '2022-05-19 05:57:37',
            ),
            498 => 
            array (
                'id' => 1011,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 144,
                'locale' => 'ru',
                'value' => 'Фотогалерея',
                'created_at' => '2022-05-19 05:57:37',
                'updated_at' => '2022-05-19 05:57:37',
            ),
            499 => 
            array (
                'id' => 1012,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 145,
                'locale' => 'en',
                'value' => 'Video gallery',
                'created_at' => '2022-05-19 05:58:18',
                'updated_at' => '2022-05-19 05:58:18',
            ),
        ));
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1013,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 145,
                'locale' => 'ru',
                'value' => 'Видео галерея',
                'created_at' => '2022-05-19 05:58:18',
                'updated_at' => '2022-05-19 05:58:18',
            ),
            1 => 
            array (
                'id' => 1014,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 146,
                'locale' => 'en',
                'value' => 'Legal information',
                'created_at' => '2022-05-19 06:00:21',
                'updated_at' => '2022-05-19 06:00:21',
            ),
            2 => 
            array (
                'id' => 1015,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 146,
                'locale' => 'ru',
                'value' => 'легальная информация',
                'created_at' => '2022-05-19 06:00:21',
                'updated_at' => '2022-05-19 06:00:21',
            ),
            3 => 
            array (
                'id' => 1016,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 147,
                'locale' => 'en',
                'value' => 'Events',
                'created_at' => '2022-05-19 06:01:04',
                'updated_at' => '2022-05-19 06:01:04',
            ),
            4 => 
            array (
                'id' => 1017,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 147,
                'locale' => 'ru',
                'value' => 'События',
                'created_at' => '2022-05-19 06:01:04',
                'updated_at' => '2022-05-19 06:01:04',
            ),
            5 => 
            array (
                'id' => 1018,
                'table_name' => 'apparats',
                'column_name' => 'link',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Allahverdiyev-li-Krim-oglu_428',
                'created_at' => '2022-05-20 06:24:38',
                'updated_at' => '2022-05-20 06:24:38',
            ),
            6 => 
            array (
                'id' => 1019,
                'table_name' => 'apparats',
                'column_name' => 'link',
                'foreign_key' => 4,
                'locale' => 'ru',
                'value' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Allahverdiyev-li-Krim-oglu_428',
                'created_at' => '2022-05-20 06:24:38',
                'updated_at' => '2022-05-20 06:24:38',
            ),
            7 => 
            array (
                'id' => 1020,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'Mulki kollegiya',
                'created_at' => '2022-05-20 06:29:38',
                'updated_at' => '2022-05-20 06:29:38',
            ),
            8 => 
            array (
                'id' => 1021,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => 'Mulki kollegiya',
                'created_at' => '2022-05-20 06:29:38',
                'updated_at' => '2022-05-20 06:29:38',
            ),
            9 => 
            array (
                'id' => 1022,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => '<p>Mulki kollegiya content</p>',
                'created_at' => '2022-05-20 06:29:38',
                'updated_at' => '2022-05-20 06:29:38',
            ),
            10 => 
            array (
                'id' => 1023,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => '<p>Mulki kollegiya content</p>',
                'created_at' => '2022-05-20 06:29:38',
                'updated_at' => '2022-05-20 06:29:38',
            ),
            11 => 
            array (
                'id' => 1024,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'mulki-kollegiya',
                'created_at' => '2022-05-20 06:29:38',
                'updated_at' => '2022-05-20 06:29:38',
            ),
            12 => 
            array (
                'id' => 1025,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 9,
                'locale' => 'ru',
                'value' => 'mulki-kollegiya',
                'created_at' => '2022-05-20 06:29:38',
                'updated_at' => '2022-05-20 06:29:38',
            ),
        ));
        
        
    }
}