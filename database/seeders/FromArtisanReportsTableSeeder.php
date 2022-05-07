<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanReportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reports')->delete();
        
        \DB::table('reports')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => '2017-ci ilin may ayı ərzində nikahın pozulması tələbinə dair işlər üzrə statistik məlumat',
                'slug' => '2017-ci-ilin-may-ayi-rzind-nikahin-pozulmasi-t-l-bin-dair-isl-r-uzr-statistik-m-lumat',
            'content' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; font-size: 15pt; line-height: 23px; font-family: \'Times New Roman\', serif;">&nbsp; Nax&ccedil;ıvan&nbsp; Muxtar&nbsp; Respublikası rayon (şəhər) məhkəmələri tərəfindən 2017-ci ilin may ayı ərzində nikahın pozulması tələbinə dair 22 işə baxılaraq iddialar təmin edilmişdir. Baxılan işlərin rayon (şəhər) məhkəmələri &uuml;zrə b&ouml;lg&uuml;s&uuml; aşağıdakı kimi olmuşdur:</span></p>
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
                'created_at' => '2022-05-07 07:05:00',
                'updated_at' => '2022-05-07 07:05:51',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => '2017-ci ilin iyun ayı ərzində nikahın pozulması tələbinə dair işlər üzrə statistik məlumat',
                'slug' => '2017-ci-ilin-iyun-ayi-rzind-nikahin-pozulmasi-t-l-bin-dair-isl-r-uzr-statistik-m-lumat',
            'content' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify;"><span style="box-sizing: border-box; font-size: 15pt; line-height: 23px; font-family: \'Times New Roman\', serif;">&nbsp; Nax&ccedil;ıvan&nbsp; Muxtar&nbsp; Respublikası rayon (şəhər) məhkəmələri tərəfindən 2017-ci ilin iyun ayı ərzində nikahın pozulması tələbinə dair 33 işə baxılaraq iddialar təmin edilmişdir. Baxılan işlərin rayon (şəhər) məhkəmələri &uuml;zrə b&ouml;lg&uuml;s&uuml; aşağıdakı kimi olmuşdur:</span></p>
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
                'created_at' => '2022-05-07 07:09:00',
                'updated_at' => '2022-05-07 07:10:15',
            ),
        ));
        
        
    }
}