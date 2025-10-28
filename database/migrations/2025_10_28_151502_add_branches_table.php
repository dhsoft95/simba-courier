<?php
// database/migrations/xxxx_add_branches_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Create branches table (exact match to external)
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->text('address')->nullable();
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('region_id', 255);
            $table->string('entry_by', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->bigInteger('managed_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('branches');
    }
};
