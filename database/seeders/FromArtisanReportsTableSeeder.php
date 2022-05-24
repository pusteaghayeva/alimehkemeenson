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
                'content' => '<table style="height: 80px; width: 56.6265%; border-collapse: collapse; border-color: black;" border="1">
<tbody>
<tr style="height: 40px;">
<td style="width: 16.6667%; height: 40px;">a</td>
<td style="width: 16.6667%; height: 40px;">b</td>
<td style="width: 16.6667%; height: 40px;">c</td>
<td style="width: 16.6667%; height: 40px;">d</td>
<td style="width: 16.6667%; height: 40px;">e</td>
<td style="width: 16.6667%; height: 40px;">f</td>
</tr>
<tr style="height: 40px;">
<td style="width: 16.6667%; height: 40px;">&nbsp;</td>
<td style="width: 16.6667%; height: 40px;">&nbsp;</td>
<td style="width: 16.6667%; height: 40px;">&nbsp;</td>
<td style="width: 16.6667%; height: 40px;">&nbsp;</td>
<td style="width: 16.6667%; height: 40px;">&nbsp;</td>
<td style="width: 16.6667%; height: 40px;">&nbsp;</td>
</tr>
</tbody>
</table>',
                'created_at' => '2022-05-07 07:05:00',
                'updated_at' => '2022-05-23 17:21:54',
            ),
        ));
        
        
    }
}