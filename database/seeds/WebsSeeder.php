<?php

use Illuminate\Database\Seeder;

use App\Web;

class WebsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Web::create(['nombre'=>'Ebay','url'=>'www.ebay.es']);
        Web::create(['nombre'=>'Mil anuncios','url'=>'www.vibbo.com']);
        Web::create(['nombre'=>'Wallapop','url'=>'www.wallapop.com']);
    }
}
