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
                   [ 'city_name' => 'Adana' ],
                   [ 'city_name' => 'Adıyaman' ],
                   [ 'city_name' => 'Afyonkarahisar' ],
                   [ 'city_name' => 'Ağrı' ],
                   [ 'city_name' => 'Aksaray' ],
                   [ 'city_name' => 'Amasya' ],
                   [ 'city_name' => 'Ankara' ],
                   [ 'city_name' => 'Antalya' ],
                   [ 'city_name' => 'Ardahan' ],
                   [ 'city_name' => 'Artvin' ],
                   [ 'city_name' => 'Aydın' ],
                   [ 'city_name' => 'Balıkesir' ],
                   [ 'city_name' => 'Bartın' ],
                   [ 'city_name' => 'Batman' ],
                   [ 'city_name' => 'Bayburt' ],
                   [ 'city_name' => 'Bilecik' ],
                   [ 'city_name' => 'Bingöl' ],
                   [ 'city_name' => 'Bitlis' ],
                   [ 'city_name' => 'Bolu' ],
                   [ 'city_name' => 'Burdur' ],
                   [ 'city_name' => 'Bursa' ],
                   [ 'city_name' => 'Çanakkale' ],
                   [ 'city_name' => 'Çankırı' ],
                   [ 'city_name' => 'Çorum' ],
                   [ 'city_name' => 'Denizli' ],
                   [ 'city_name' => 'Diyarbakır' ],
                   [ 'city_name' => 'Düzce' ],
                   [ 'city_name' => 'Edirne' ],
                   [ 'city_name' => 'Elazığ' ],
                   [ 'city_name' => 'Erzincan' ],
                   [ 'city_name' => 'Erzurum' ],
                   [ 'city_name' => 'Eskişehir' ],
                   [ 'city_name' => 'Gaziantep' ],
                   [ 'city_name' => 'Giresun' ],
                   [ 'city_name' => 'Gümüşhane' ],
                   [ 'city_name' => 'Hakkari' ],
                   [ 'city_name' => 'Hatay' ],
                   [ 'city_name' => 'Iğdır' ],
                   [ 'city_name' => 'Isparta' ],
                   [ 'city_name' => 'İstanbul' ],
                   [ 'city_name' => 'İzmir' ],
                   [ 'city_name' => 'Kahramanmaraş' ],
                   [ 'city_name' => 'Karabük' ],
                   [ 'city_name' => 'Karaman' ],
                   [ 'city_name' => 'Kars' ],
                   [ 'city_name' => 'Kastamonu' ],
                   [ 'city_name' => 'Kayseri' ],
                   [ 'city_name' => 'Kırıkkale' ],
                   [ 'city_name' => 'Kırklareli' ],
                   [ 'city_name' => 'Kırşehir' ],
                   [ 'city_name' => 'Kilis' ],
                   [ 'city_name' => 'Kocaeli' ],
                   [ 'city_name' => 'Konya' ],
                   [ 'city_name' => 'Kütahya' ],
                   [ 'city_name' => 'Malatya' ],
                   [ 'city_name' => 'Manisa' ],
                   [ 'city_name' => 'Mardin' ],
                   [ 'city_name' => 'Mersin' ],
                   [ 'city_name' => 'Muğla' ],
                   [ 'city_name' => 'Muş' ],
                   [ 'city_name' => 'Nevşehir' ],
                   [ 'city_name' => 'Niğde' ],
                   [ 'city_name' => 'Ordu' ],
                   [ 'city_name' => 'Osmaniye' ],
                   [ 'city_name' => 'Rize' ],
                   [ 'city_name' => 'Sakarya' ],
                   [ 'city_name' => 'Samsun' ],
                   [ 'city_name' => 'Siirt' ],
                   [ 'city_name' => 'Sinop' ],
                   [ 'city_name' => 'Sivas' ],
                   [ 'city_name' => 'Şanlıurfa' ],
                   [ 'city_name' => 'Şırnak' ],
                   [ 'city_name' => 'Tekirdağ' ],
                   [ 'city_name' => 'Tokat' ],
                   [ 'city_name' => 'Trabzon' ],
                   [ 'city_name' => 'Tunceli' ],
                   [ 'city_name' => 'Uşak' ],
                   [ 'city_name' => 'Van' ],
                   [ 'city_name' => 'Yalova' ],
                   [ 'city_name' => 'Yozgat' ],
                   [ 'city_name' => 'Zonguldak' ]
                 ];
        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
