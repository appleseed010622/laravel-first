<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sign_users', function (Blueprint $table) {
            $table->id();
            $table->date('contract_date');
            $table->string('name_front');
            $table->string('name_back');
            $table->string('full_name');
            $table->string('furigana_front');
            $table->string('furigana_back');
            $table->date('birth');
            $table->string('post_code');
            $table->string('address');
            $table->string('tel');
            $table->string('mobile1');
            $table->string('mobile2')->nullable();;
            $table->date('construction');
            $table->date('payment');
            $table->string('method');
            $table->string('contract');
            $table->string('select');
            $table->longText('warranty')->nullable();;
            $table->longText('memo')->nullable();;
            $table->longText('photos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sign_users');
    }

}
