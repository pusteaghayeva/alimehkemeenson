<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanEducationmaterialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('educationmaterials')->delete();
        
        \DB::table('educationmaterials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Maarifləndirici materiallar 1',
                'slug' => 'maarifl-ndirici-materiallar-1',
                'content' => '<div style="margin: 0px 14.3958px 0px 28.7917px; padding: 0px; width: 436.792px; float: left; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">
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
                'created_at' => '2022-05-06 08:04:00',
                'updated_at' => '2022-05-06 08:12:55',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Maarifləndirici materiallar 2',
                'slug' => 'maarifl-ndirici-materiallar-2',
                'content' => '<h1 style="margin: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 70px; line-height: 90px; color: #000000; text-align: center;">Lorem Ipsum</h1>
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
                'created_at' => '2022-05-07 07:49:00',
                'updated_at' => '2022-05-07 07:49:00',
            ),
        ));
        
        
    }
}