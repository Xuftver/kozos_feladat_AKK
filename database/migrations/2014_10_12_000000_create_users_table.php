<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
            $table->string('password');
            $table->tinyInteger('vip')->default(0);
            $table->smallInteger("permission")->default(2); //0: admin felhasználó, 1:ügynökség, 2: normál felhasználó,
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['name'=>'Halász József','email'=>'jancsi@gmail.com','password'=>Hash::make('Aa123456@'),'vip'=>1]);
        User::create(['name'=>'Kukac Sándor','email'=>'sanyi@gmail.com','password'=>Hash::make('Aa123456@')]);
        User::create(['name'=>'Folyékony Szilárd','email'=>'szili@gmail.com','password'=>Hash::make('Aa123456@')]);
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
