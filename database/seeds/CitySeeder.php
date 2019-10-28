<?php

use Illuminate\Database\Seeder;
use App\City as City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
        $cities = [
                 [ 'city' => 'Adana','city_code'=>'01','phone_code'=>'322' ],
                 [ 'city' => 'Adıyaman','city_code'=>'02','phone_code'=>'416' ],
                 [ 'city' => 'Afyonkarahisar','city_code'=>'03','phone_code'=>'272' ],
                 [ 'city' => 'Ağrı','city_code'=>'04','phone_code'=>'472' ],
                 [ 'city' => 'Aksaray','city_code'=>'68','phone_code'=>'382' ],
                 [ 'city' => 'Amasya','city_code'=>'05','phone_code'=>'358' ],
                 [ 'city' => 'Ankara','city_code'=>'06','phone_code'=>'312' ],
                 [ 'city' => 'Antalya' ,'city_code'=>'07','phone_code'=>'242'],
                 [ 'city' => 'Ardahan' ,'city_code'=>'75','phone_code'=>'478'],
                 [ 'city' => 'Artvin' ,'city_code'=>'08','phone_code'=>'466' ],
                 [ 'city' => 'Aydın'  ,'city_code'=>'09','phone_code'=>'256'],
                 [ 'city' => 'Balıkesir'  ,'city_code'=>'10','phone_code'=>'266'],
                 [ 'city' => 'Bartın'  ,'city_code'=>'74','phone_code'=>'378'],
                 [ 'city' => 'Batman'  ,'city_code'=>'72','phone_code'=>'488'],
                 [ 'city' => 'Bayburt'  ,'city_code'=>'69','phone_code'=>'458'],
                 [ 'city' => 'Bilecik'  ,'city_code'=>'11','phone_code'=>'228'],
                 [ 'city' => 'Bingöl' ,'city_code'=>'12','phone_code'=>'426' ],
                 [ 'city' => 'Bitlis' ,'city_code'=>'13','phone_code'=>'434' ],
                 [ 'city' => 'Bolu' ,'city_code'=>'14','phone_code'=>'374' ],
                 [ 'city' => 'Burdur' ,'city_code'=>'15','phone_code'=>'248' ],
                 [ 'city' => 'Bursa' ,'city_code'=>'16','phone_code'=>'224' ],
                 [ 'city' => 'Çanakkale' ,'city_code'=>'17','phone_code'=>'286' ],
                 [ 'city' => 'Çankırı' ,'city_code'=>'18','phone_code'=>'376' ],
                 [ 'city' => 'Çorum' ,'city_code'=>'19','phone_code'=>'364' ],
                 [ 'city' => 'Denizli' ,'city_code'=>'20','phone_code'=>'258' ],
                 [ 'city' => 'Diyarbakır' ,'city_code'=>'21','phone_code'=>'412' ],
                 [ 'city' => 'Düzce' ,'city_code'=>'81','phone_code'=>'380' ],
                 [ 'city' => 'Edirne' ,'city_code'=>'22','phone_code'=>'284' ],
                 [ 'city' => 'Elazığ' ,'city_code'=>'23','phone_code'=>'424' ],
                 [ 'city' => 'Erzincan' ,'city_code'=>'24','phone_code'=>'446' ],
                 [ 'city' => 'Erzurum' ,'city_code'=>'25','phone_code'=>'442' ],
                 [ 'city' => 'Eskişehir' ,'city_code'=>'26','phone_code'=>'222' ],
                 [ 'city' => 'Gaziantep' ,'city_code'=>'27','phone_code'=>'342' ],
                 [ 'city' => 'Giresun' ,'city_code'=>'28','phone_code'=>'454' ],
                 [ 'city' => 'Gümüşhane' ,'city_code'=>'29','phone_code'=>'456' ],
                 [ 'city' => 'Hakkari' ,'city_code'=>'30','phone_code'=>'438' ],
                 [ 'city' => 'Hatay' ,'city_code'=>'31','phone_code'=>'326' ],
                 [ 'city' => 'Iğdır' ,'city_code'=>'76','phone_code'=>'476' ],
                 [ 'city' => 'Isparta' ,'city_code'=>'32','phone_code'=>'324' ],
                 [ 'city' => 'İstanbul' ,'city_code'=>'34','phone_code'=>'212' ],
                 [ 'city' => 'İzmir' ,'city_code'=>'35','phone_code'=>'232' ],
                 [ 'city' => 'Kahramanmaraş' ,'city_code'=>'46','phone_code'=>'344' ],
                 [ 'city' => 'Karabük' ,'city_code'=>'78','phone_code'=>'370' ],
                 [ 'city' => 'Karaman' ,'city_code'=>'70','phone_code'=>'338' ],
                 [ 'city' => 'Kars' ,'city_code'=>'36','phone_code'=>'474' ],
                 [ 'city' => 'Kastamonu' ,'city_code'=>'37','phone_code'=>'366' ],
                 [ 'city' => 'Kayseri' ,'city_code'=>'38','phone_code'=>'352' ],
                 [ 'city' => 'Kırıkkale' ,'city_code'=>'71','phone_code'=>'318' ],
                 [ 'city' => 'Kırklareli' ,'city_code'=>'39','phone_code'=>'288' ],
                 [ 'city' => 'Kırşehir' ,'city_code'=>'40','phone_code'=>'386' ],
                 [ 'city' => 'Kilis' ,'city_code'=>'79','phone_code'=>'348' ],
                 [ 'city' => 'Kocaeli' ,'city_code'=>'41','phone_code'=>'262' ],
                 [ 'city' => 'Konya' ,'city_code'=>'42','phone_code'=>'332' ],
                 [ 'city' => 'Kütahya' ,'city_code'=>'43','phone_code'=>'274' ],
                 [ 'city' => 'Malatya' ,'city_code'=>'44','phone_code'=>'422' ],
                 [ 'city' => 'Manisa' ,'city_code'=>'45','phone_code'=>'236' ],
                 [ 'city' => 'Mardin' ,'city_code'=>'47','phone_code'=>'482' ],
                 [ 'city' => 'Mersin' ,'city_code'=>'33','phone_code'=>'324' ],
                 [ 'city' => 'Muğla' ,'city_code'=>'48','phone_code'=>'252' ],
                 [ 'city' => 'Muş' ,'city_code'=>'49','phone_code'=>'436' ],
                 [ 'city' => 'Nevşehir' ,'city_code'=>'50','phone_code'=>'384' ],
                 [ 'city' => 'Niğde' ,'city_code'=>'51','phone_code'=>'388' ],
                 [ 'city' => 'Ordu' ,'city_code'=>'52','phone_code'=>'452' ],
                 [ 'city' => 'Osmaniye' ,'city_code'=>'80','phone_code'=>'328' ],
                 [ 'city' => 'Rize' ,'city_code'=>'53','phone_code'=>'464' ],
                 [ 'city' => 'Sakarya' ,'city_code'=>'54','phone_code'=>'264' ],
                 [ 'city' => 'Samsun' ,'city_code'=>'55','phone_code'=>'362' ],
                 [ 'city' => 'Siirt' ,'city_code'=>'56','phone_code'=>'484' ],
                 [ 'city' => 'Sinop' ,'city_code'=>'57','phone_code'=>'368' ],
                 [ 'city' => 'Sivas' ,'city_code'=>'58','phone_code'=>'346' ],
                 [ 'city' => 'Şanlıurfa' ,'city_code'=>'63','phone_code'=>'414' ],
                 [ 'city' => 'Şırnak' ,'city_code'=>'73','phone_code'=>'486' ],
                 [ 'city' => 'Tekirdağ' ,'city_code'=>'59','phone_code'=>'282' ],
                 [ 'city' => 'Tokat' ,'city_code'=>'60','phone_code'=>'356' ],
                 [ 'city' => 'Trabzon' ,'city_code'=>'61','phone_code'=>'462' ],
                 [ 'city' => 'Tunceli' ,'city_code'=>'62','phone_code'=>'428' ],
                 [ 'city' => 'Uşak' ,'city_code'=>'64','phone_code'=>'276' ],
                 [ 'city' => 'Van' ,'city_code'=>'65','phone_code'=>'432' ],
                 [ 'city' => 'Yalova' ,'city_code'=>'77','phone_code'=>'226' ],
                 [ 'city' => 'Yozgat' ,'city_code'=>'66','phone_code'=>'354' ],
                 [ 'city' => 'Zonguldak' ,'city_code'=>'67','phone_code'=>'372' ]
               ];
        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
