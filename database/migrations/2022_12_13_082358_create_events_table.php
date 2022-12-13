<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('name');
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->integer('limit');
            $table->date('date');
            $table->string('location');
            $table->integer('status');
            $table->timestamps();
        });
        //aktív (0), eltörölt, pl. rossz idő miatt (1), lejárt (2)
        Event::create(['name'=>'Balaton Sound', 'agency_id'=>1,'limit'=>1000,'date'=>'2022.01.01','location'=>'Balaton','status'=>0]);
        Event::create(['name'=>'Efott', 'agency_id'=>2,'limit'=>2000,'date'=>'2022.02.02','location'=>'Siófok','status'=>1]);
        Event::create(['name'=>'Fel akasztom magam', 'agency_id'=>3,'limit'=>100,'date'=>'2022.03.03','location'=>'Budapest','status'=>2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
