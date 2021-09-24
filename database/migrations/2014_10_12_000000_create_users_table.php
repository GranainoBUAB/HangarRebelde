<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->boolean('isAdmin')->default(false);
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('dni')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('membership_number')->nullable();
            $table->string('address')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('notes')->nullable();
            $table->boolean('canReserve')->nullable();

            $table->string('deliveryName')->nullable();
            $table->string('deliverySurname')->nullable();
            $table->string('deliveryAddress')->nullable();
            $table->string('deliveryZipCode')->nullable();
            $table->string('deliveryCity')->nullable();
            $table->string('deliveryRegion')->nullable();
            $table->string('deliveryCountry')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
