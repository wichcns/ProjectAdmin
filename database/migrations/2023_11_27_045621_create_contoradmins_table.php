<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContoradminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contoradmins', function (Blueprint $table) {
            $table->id();
            $table->string('name_th')->comment('ชื่อภาษาไทย');
            $table->string('lastname_th')->comment('นามสกุลภาษาไทย');
            $table->string('name_en')->comment('ชื่อภาษาอังกฤษ');
            $table->string('lastname_en')->comment('นามสกุลภาษาอังกฤษ');
            $table->string('address')->comment('ที่อยู่');
            $table->string('phone')->comment('เบอร์โทรศัพท์');
            $table->string('username')->comment('ชื่อรหัส');
            $table->string('password')->comment('รหัสผ่าน');
            $table->string('email')->comment('อีเมล');
            $table->string('age')->comment('อายุ');
            $table->string('sex')->comment('เพศ');            
            $table->timestamps();
            $table->bigInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contoradmins');
    }
}
