<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->tinyInteger('vip')->default(0);
            $table->smallInteger("permission")->default(2); //0: admin felhasználó, 1:ügynökség, 2: normál felhasználó,
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['name'=>'Halász József','email'=>'jancsi@gmail.com','vip'=>1]);
        User::create(['name'=>'Kukac Sándor','email'=>'sanyi@gmail.com']);
        User::create(['name'=>'Folyékony Szilárd','email'=>'szili@gmail.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
