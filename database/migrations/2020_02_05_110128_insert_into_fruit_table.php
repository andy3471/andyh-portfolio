<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertIntoFruitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('fruits')->insert([
            ['name' => 'Acai'],
            ['name' => 'Akee'],
            ['name' => 'Apple'],
            ['name' => 'Apricot'],
            ['name' => 'Avocado'],
            ['name' => 'Banana'],
            ['name' => 'Bilberry'],
            ['name' => 'Blackberry'],
            ['name' => 'Blackcurrant'],
            ['name' => 'Black sapote'],
            ['name' => 'Blueberry'],
            ['name' => 'Boysenberry'],
            ['name' => 'Buddhas hand (fingered citron)'],
            ['name' => 'Cactus pear'],
            ['name' => 'Crab apple'],
            ['name' => 'Currant'],
            ['name' => 'Cherry'],
            ['name' => 'Cherimoya (Custard Apple)'],
            ['name' => 'Chico fruit'],
            ['name' => 'Cloudberry'],
            ['name' => 'Coconut'],
            ['name' => 'Cranberry'],
            ['name' => 'Damson'],
            ['name' => 'Date'],
            ['name' => 'Dragonfruit (or Pitaya)'],
            ['name' => 'Durian'],
            ['name' => 'Elderberry'],
            ['name' => 'Feijoa'],
            ['name' => 'Fig'],
            ['name' => 'Goji berry'],
            ['name' => 'Gooseberry'],
            ['name' => 'Grape'],
            ['name' => 'Raisin'],
            ['name' => 'Grapefruit'],
            ['name' => 'Guava'],
            ['name' => 'Honeyberry'],
            ['name' => 'Huckleberry'],
            ['name' => 'Jabuticaba'],
            ['name' => 'Jackfruit'],
            ['name' => 'Jambul'],
            ['name' => 'Japanese plum'],
            ['name' => 'Jostaberry'],
            ['name' => 'Jujube'],
            ['name' => 'Juniper berry'],
            ['name' => 'Kiwano (horned melon)'],
            ['name' => 'Kiwifruit'],
            ['name' => 'Kumquat'],
            ['name' => 'Lemon'],
            ['name' => 'Lime'],
            ['name' => 'Loganberry'],
            ['name' => 'Loquat'],
            ['name' => 'Longan'],
            ['name' => 'Lychee'],
            ['name' => 'Mango'],
            ['name' => 'Mangosteen'],
            ['name' => 'Marionberry'],
            ['name' => 'Melon'],
            ['name' => 'Cantaloupe'],
            ['name' => 'Honeydew'],
            ['name' => 'Watermelon'],
            ['name' => 'Miracle fruit'],
            ['name' => 'Mulberry'],
            ['name' => 'Nectarine'],
            ['name' => 'Nance'],
            ['name' => 'Orange'],
            ['name' => 'Blood orange'],
            ['name' => 'Clementine'],
            ['name' => 'Mandarine'],
            ['name' => 'Tangerine'],
            ['name' => 'Papaya'],
            ['name' => 'Passionfruit'],
            ['name' => 'Peach'],
            ['name' => 'Pear'],
            ['name' => 'Persimmon'],
            ['name' => 'Plantain'],
            ['name' => 'Plum'],
            ['name' => 'Prune (dried plum)'],
            ['name' => 'Pineapple'],
            ['name' => 'Pineberry'],
            ['name' => 'Plumcot (or Pluot)'],
            ['name' => 'Pomegranate'],
            ['name' => 'Pomelo'],
            ['name' => 'Purple mangosteen'],
            ['name' => 'Quince'],
            ['name' => 'Raspberry'],
            ['name' => 'Salmonberry'],
            ['name' => 'Rambutan (or Mamin Chino)'],
            ['name' => 'Redcurrant'],
            ['name' => 'Salal berry'],
            ['name' => 'Salak'],
            ['name' => 'Satsuma'],
            ['name' => 'Soursop'],
            ['name' => 'Star apple'],
            ['name' => 'Star fruit'],
            ['name' => 'Strawberry'],
            ['name' => 'Surinam cherry'],
            ['name' => 'Tamarillo'],
            ['name' => 'Tamarind'],
            ['name' => 'Tangelo'],
            ['name' => 'Tayberry'],
            ['name' => 'Ugli fruit'],
            ['name' => 'White currant'],
            ['name' => 'White sapote'],
            ['name' => 'Yuzu'],
            ['name' => 'Bell pepper'],
            ['name' => 'Chile pepper'],
            ['name' => 'Corn kernel'],
            ['name' => 'Cucumber'],
            ['name' => 'Eggplant'],
            ['name' => 'Jalapeño'],
            ['name' => 'Olive'],
            ['name' => 'Pea'],
            ['name' => 'Pumpkin'],
            ['name' => 'Squash'],
            ['name' => 'Tomato'],
            ['name' => 'Zucchini']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('fruits')->truncate();
    }
}
