<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanConstitutionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('constitutions')->delete();
        
        \DB::table('constitutions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'constitutions\\May2022\\kIjyME7uN4WBY69GjXK8.png',
                'title' => 'NaxÇıvan Muxtar Respublİkasının hÜquqİ aktları',
                'slug' => 'naxcivan-muxtar-respubli-kasinin-huquqi-aktlari',
                'link' => 'http://huquqiaktlar.nakhchivan.az/Akts.aspx',
                'created_at' => '2022-05-06 12:55:00',
                'updated_at' => '2022-05-06 13:30:21',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'constitutions\\May2022\\oebOYT71hkIufZoiAUXg.png',
                'title' => 'Alİ Məhkəmənİn Plenum Qərarları',
                'slug' => 'ali-m-hk-m-ni-n-plenum-q-rarlari',
                'link' => 'http://supremecourt.gov.az/category/view/16',
                'created_at' => '2022-05-06 13:07:00',
                'updated_at' => '2022-05-06 13:29:53',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'constitutions\\May2022\\LSIpnsvIDKaG2AZ1OfwT.png',
                'title' => 'Konstİtusİya Məhkəməsİnİn Qərarları',
                'slug' => 'konsti-tusi-ya-m-hk-m-si-ni-n-q-rarlari',
                'link' => 'http://www.constcourt.gov.az/az/decisions',
                'created_at' => '2022-05-06 13:09:00',
                'updated_at' => '2022-05-06 13:31:42',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => 'constitutions\\May2022\\Bf81Yl3aLFJwgyXIv3ZX.png',
                'title' => 'Mİllİ Məclİsİn Qərarları',
                'slug' => 'mi-lli-m-cli-si-n-q-rarlari',
                'link' => 'https://www.meclis.gov.az/cat-qanun.php?cat=72&lang=az',
                'created_at' => '2022-05-06 13:09:00',
                'updated_at' => '2022-05-06 13:32:09',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => 'constitutions\\May2022\\LPSPay8YgruGpqqppPIp.png',
                'title' => 'Fərman və Sərəncamlar',
                'slug' => 'f-rman-v-s-r-ncamlar',
                'link' => 'https://president.az/az/documents/category/decrees',
                'created_at' => '2022-05-06 13:10:12',
                'updated_at' => '2022-05-06 13:10:12',
            ),
            5 => 
            array (
                'id' => 6,
                'image' => 'constitutions\\May2022\\VdCRIlfuLJwEexaDHsCc.png',
                'title' => 'Azərbaycan Respublİkasının məhkəmələrİndə kargÜzarlığın aparılmasına daİr Təlİmat',
                'slug' => 'az-rbaycan-respubli-kasinin-m-hk-m-l-ri-nd-karguzarligin-aparilmasina-dai-r-t-li-mat',
                'link' => 'https://e-qanun.az/framework/22869',
                'created_at' => '2022-05-06 13:10:00',
                'updated_at' => '2022-05-06 13:26:32',
            ),
            6 => 
            array (
                'id' => 7,
                'image' => 'constitutions\\May2022\\iUwYCaiEDU5QzwfzCztR.png',
                'title' => 'DÖvlət rÜsumu haqqında Azərbaycan Respublİkasının Qanunu',
                'slug' => 'dovl-t-rusumu-haqqinda-az-rbaycan-respubli-kasinin-qanunu',
                'link' => 'https://e-qanun.az/framework/2860',
                'created_at' => '2022-05-06 13:11:00',
                'updated_at' => '2022-05-06 13:26:55',
            ),
            7 => 
            array (
                'id' => 8,
                'image' => 'constitutions\\May2022\\Vsa8oi6W9FZXNenriZNk.png',
                'title' => 'İcra haqqında Azərbaycan Respublİkasının Qanunu',
                'slug' => 'i-cra-haqqinda-az-rbaycan-respubli-kasinin-qanunu',
                'link' => 'https://e-qanun.az/framework/1406',
                'created_at' => '2022-05-06 13:11:00',
                'updated_at' => '2022-05-06 13:27:13',
            ),
            8 => 
            array (
                'id' => 9,
                'image' => 'constitutions\\May2022\\qYoDOxudoD8E120VzDZB.png',
                'title' => 'İcra məmurları haqqında Azərbaycan Respublİkasının Qanunu',
                'slug' => 'i-cra-m-murlari-haqqinda-az-rbaycan-respubli-kasinin-qanunu',
                'link' => 'https://e-qanun.az/framework/256',
                'created_at' => '2022-05-06 13:11:00',
                'updated_at' => '2022-05-06 13:28:33',
            ),
            9 => 
            array (
                'id' => 10,
                'image' => 'constitutions\\May2022\\IaIkdxxoLEPi8K5fX0GR.png',
                'title' => 'DÖvlət qulluĞu haqqında Azərbaycan Respublİkasının Qanunu',
                'slug' => 'dovl-t-qullugu-haqqinda-az-rbaycan-respubli-kasinin-qanunu',
                'link' => 'https://e-qanun.az/framework/4481',
                'created_at' => '2022-05-06 13:12:00',
                'updated_at' => '2022-05-06 13:28:12',
            ),
            10 => 
            array (
                'id' => 11,
                'image' => 'constitutions\\May2022\\PdPCIJnXf26Z81RlMInf.png',
                'title' => 'Məhkəmələr və hakİmlər haqqında Azərbaycan Respublİkasının Qanunu',
                'slug' => 'm-hk-m-l-r-v-haki-ml-r-haqqinda-az-rbaycan-respubli-kasinin-qanunu',
                'link' => 'https://e-qanun.az/framework/3933',
                'created_at' => '2022-05-06 13:12:00',
                'updated_at' => '2022-05-06 13:29:04',
            ),
            11 => 
            array (
                'id' => 12,
                'image' => 'constitutions\\May2022\\rlk4Tfljig8xDjYMM9h9.png',
                'title' => 'Məhkəmə-HÜquq Şurası haqqında Azərbaycan Respublİkasının Qanunu',
                'slug' => 'm-hk-m-huquq-surasi-haqqinda-az-rbaycan-respubli-kasinin-qanunu',
                'link' => 'https://e-qanun.az/framework/7303',
                'created_at' => '2022-05-06 13:12:00',
                'updated_at' => '2022-05-06 13:27:36',
            ),
            12 => 
            array (
                'id' => 13,
                'image' => 'constitutions\\May2022\\jXCEsvYnmI5JDQhKLBIB.png',
                'title' => 'Konstİtusİya Məhkəməsİ haqqında Azərbaycan Respublİkasının Qanunu',
                'slug' => 'konsti-tusi-ya-m-hk-m-si-haqqinda-az-rbaycan-respubli-kasinin-qanunu',
                'link' => 'https://e-qanun.az/framework/5404',
                'created_at' => '2022-05-06 13:13:00',
                'updated_at' => '2022-05-06 13:26:04',
            ),
            13 => 
            array (
                'id' => 14,
                'image' => 'constitutions\\May2022\\zGfjoxnPrFkhlhWHYRu4.png',
                'title' => 'Normatİv hÜquqİ aktlar haqqında Azərbaycan Respublİkasının Konstİtusİya Qanunu',
                'slug' => 'normati-v-huquqi-aktlar-haqqinda-az-rbaycan-respubli-kasinin-konsti-tusi-ya-qanunu',
                'link' => 'https://e-qanun.az/framework/21300',
                'created_at' => '2022-05-06 13:13:00',
                'updated_at' => '2022-05-06 13:25:29',
            ),
            14 => 
            array (
                'id' => 15,
                'image' => 'constitutions\\May2022\\I9ZJKUm4Qhx5VLA85geA.png',
                'title' => 'VERGİ MƏCƏLLƏSİ',
                'slug' => 'vergi-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46948',
                'created_at' => '2022-05-06 13:14:54',
                'updated_at' => '2022-05-06 13:14:54',
            ),
            15 => 
            array (
                'id' => 16,
                'image' => 'constitutions\\May2022\\htRsJoZXahENSpjkGcNN.png',
                'title' => 'TORPAQ MƏCƏLLƏSİ',
                'slug' => 'torpaq-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46942',
                'created_at' => '2022-05-06 13:15:18',
                'updated_at' => '2022-05-06 13:15:18',
            ),
            16 => 
            array (
                'id' => 17,
                'image' => 'constitutions\\May2022\\KMGI9Q1jQfP42XsIZi72.png',
                'title' => 'TİCARƏT GƏMİÇİLİYİ MƏCƏLLƏSİ',
                'slug' => 'ti-car-t-g-mi-ci-li-yi-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/4355',
                'created_at' => '2022-05-06 13:15:43',
                'updated_at' => '2022-05-06 13:15:43',
            ),
            17 => 
            array (
                'id' => 18,
                'image' => 'constitutions\\May2022\\5PIwNzXLroImzMoxJf5v.png',
                'title' => 'ŞƏHƏRSALMA VƏ TİKİNTİ MƏCƏLLƏSİ',
                'slug' => 's-h-rsalma-v-ti-ki-nti-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46958',
                'created_at' => '2022-05-06 13:16:07',
                'updated_at' => '2022-05-06 13:16:07',
            ),
            18 => 
            array (
                'id' => 19,
                'image' => 'constitutions\\May2022\\K3ul8pRtAvvnuhiy2SwT.png',
                'title' => 'SU MƏCƏLLƏSİ',
                'slug' => 'su-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46940',
                'created_at' => '2022-05-06 13:16:29',
                'updated_at' => '2022-05-06 13:16:29',
            ),
            19 => 
            array (
                'id' => 20,
                'image' => 'constitutions\\May2022\\TJBxfiRfGbEuR7bGj8tl.png',
                'title' => 'SEÇKİ MƏCƏLLƏSİ',
                'slug' => 'secki-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46953',
                'created_at' => '2022-05-06 13:16:53',
                'updated_at' => '2022-05-06 13:16:53',
            ),
            20 => 
            array (
                'id' => 21,
                'image' => 'constitutions\\May2022\\T15uczvBxVPYyUwhlhtP.png',
                'title' => 'MÜLKİ PROSESSUAL MƏCƏLLƏ',
                'slug' => 'mulki-prosessual-m-c-ll',
                'link' => 'https://e-qanun.az/framework/46945',
                'created_at' => '2022-05-06 13:17:16',
                'updated_at' => '2022-05-06 13:17:16',
            ),
            21 => 
            array (
                'id' => 22,
                'image' => 'constitutions\\May2022\\IBbMNsiOR7rn9dUl0GEK.png',
                'title' => 'MÜLKİ MƏCƏLLƏ',
                'slug' => 'mulki-m-c-ll',
                'link' => 'https://e-qanun.az/framework/46944',
                'created_at' => '2022-05-06 13:17:40',
                'updated_at' => '2022-05-06 13:17:40',
            ),
            22 => 
            array (
                'id' => 23,
                'image' => 'constitutions\\May2022\\AYEbexdkakXIgJM4RLoi.png',
                'title' => 'MİQRASİYA MƏCƏLLƏSİ',
                'slug' => 'mi-qrasi-ya-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46959',
                'created_at' => '2022-05-06 13:18:05',
                'updated_at' => '2022-05-06 13:18:05',
            ),
            23 => 
            array (
                'id' => 24,
                'image' => 'constitutions\\May2022\\Yvkgz1NUTiFtHS9XGKXs.png',
                'title' => 'MƏNZİL MƏCƏLLƏSİ',
                'slug' => 'm-nzi-l-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46955',
                'created_at' => '2022-05-06 13:18:27',
                'updated_at' => '2022-05-06 13:18:27',
            ),
            24 => 
            array (
                'id' => 25,
                'image' => 'constitutions\\May2022\\ef0m7h84XVypGM44TLi4.png',
                'title' => 'MEŞƏ MƏCƏLLƏSİ',
                'slug' => 'mes-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46941',
                'created_at' => '2022-05-06 13:18:51',
                'updated_at' => '2022-05-06 13:18:51',
            ),
            25 => 
            array (
                'id' => 26,
                'image' => 'constitutions\\May2022\\b41gIYOHm6YRK4XYYigf.png',
                'title' => 'İNZİBATİ PROSESSUAL MƏCƏLLƏ',
                'slug' => 'i-nzi-bati-prosessual-m-c-ll',
                'link' => 'https://e-qanun.az/framework/46956',
                'created_at' => '2022-05-06 13:19:12',
                'updated_at' => '2022-05-06 13:19:12',
            ),
            26 => 
            array (
                'id' => 27,
                'image' => 'constitutions\\May2022\\LzWbNqgTgsG5Zh9nhQDk.png',
                'title' => 'İNZİBATİ XƏTALAR MƏCƏLLƏSİ',
                'slug' => 'i-nzi-bati-x-talar-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46960',
                'created_at' => '2022-05-06 13:19:36',
                'updated_at' => '2022-05-06 13:19:36',
            ),
            27 => 
            array (
                'id' => 28,
                'image' => 'constitutions\\May2022\\wtnDBhx9EYjhTB9ULahH.png',
                'title' => 'GÖMRÜK MƏCƏLLƏSİ',
                'slug' => 'gomruk-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46957',
                'created_at' => '2022-05-06 13:20:01',
                'updated_at' => '2022-05-06 13:20:01',
            ),
            28 => 
            array (
                'id' => 29,
                'image' => 'constitutions\\May2022\\GnoxzqnucEac4fxTT9Og.png',
                'title' => 'ƏMƏK MƏCƏLLƏSİ',
                'slug' => 'm-k-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46943',
                'created_at' => '2022-05-06 13:20:24',
                'updated_at' => '2022-05-06 13:20:24',
            ),
            29 => 
            array (
                'id' => 30,
                'image' => 'constitutions\\May2022\\AusOaRfgRuJ4LDKXK42n.png',
                'title' => 'CƏZALARIN İCRASI MƏCƏLLƏSİ',
                'slug' => 'c-zalarin-i-crasi-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46951',
                'created_at' => '2022-05-06 13:20:47',
                'updated_at' => '2022-05-06 13:20:47',
            ),
            30 => 
            array (
                'id' => 31,
                'image' => 'constitutions\\May2022\\qC64Ipgh2U7KBh8hH48b.png',
                'title' => 'CİNAYƏT-PROSESSUAL MƏCƏLLƏ',
                'slug' => 'ci-nay-t-prosessual-m-c-ll',
                'link' => 'https://e-qanun.az/framework/46950',
                'created_at' => '2022-05-06 13:21:10',
                'updated_at' => '2022-05-06 13:21:10',
            ),
            31 => 
            array (
                'id' => 32,
                'image' => 'constitutions\\May2022\\MxPUjqqDOuEbYv2gMyPj.png',
                'title' => 'CİNAYƏT MƏCƏLLƏSİ',
                'slug' => 'ci-nay-t-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46947',
                'created_at' => '2022-05-06 13:21:34',
                'updated_at' => '2022-05-06 13:21:34',
            ),
            32 => 
            array (
                'id' => 33,
                'image' => 'constitutions\\May2022\\U64kUDdjupZYLZytzweF.png',
                'title' => 'AİLƏ MƏCƏLLƏSİ',
                'slug' => 'ai-l-m-c-ll-si',
                'link' => 'https://e-qanun.az/framework/46946',
                'created_at' => '2022-05-06 13:21:00',
                'updated_at' => '2022-05-06 13:24:47',
            ),
            33 => 
            array (
                'id' => 34,
                'image' => 'constitutions\\May2022\\KWvxlv360nUv4kWDxZQn.png',
                'title' => 'Naxçıvan Muxtar Respublİkasının Konstİtusİyası',
                'slug' => 'naxcivan-muxtar-respubli-kasinin-konsti-tusi-yasi',
                'link' => 'https://e-qanun.az/framework/1755',
                'created_at' => '2022-05-06 13:22:00',
                'updated_at' => '2022-05-06 13:24:39',
            ),
            34 => 
            array (
                'id' => 35,
                'image' => 'constitutions\\May2022\\6zXcrgHEN1OBs4kUl7RN.png',
                'title' => 'Azərbaycan Respublİkası Konstİtusİyası',
                'slug' => 'az-rbaycan-respubli-kasi-konsti-tusi-yasi',
                'link' => 'https://e-qanun.az/framework/897',
                'created_at' => '2022-05-06 13:22:00',
                'updated_at' => '2022-05-06 13:24:08',
            ),
        ));
        
        
    }
}