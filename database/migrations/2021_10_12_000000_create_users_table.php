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
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->string('profession')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->timestamp('date_of_start')->nullable();
            $table->timestamp('date_of_end')->nullable();
            $table->tinyInteger('agreement')->default(1);
            $table->enum('role', ['Админ', 'Наблюдатель', 'Промо-участник', 'Участник', 'Вип-участник'])->default('Наблюдатель');
            $table->text('user_description')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreignId('tariff_id')->nullable()->constrained();
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
