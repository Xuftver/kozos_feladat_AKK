<?php

use App\Models\Agency;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id("agency_id");
            $table->string("name");
            $table->string("country");
            $table->string("type");
            $table->timestamps();
        });

        Agency::create(["name" => "Glamour", "country" => "Magyar", "type" => "Divat"]);
        Agency::create(["name" => "CNN", "country" => "USA", "type" => "Hír"]);
        Agency::create(["name" => "Oscar", "country" => "USA", "type" => "Film"]);
        Agency::create(["name" => "Fifa-Aranylabda", "country" => "Francia", "type" => "Foci"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
};
