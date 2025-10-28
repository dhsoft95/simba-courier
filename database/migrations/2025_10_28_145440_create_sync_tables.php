<?php
// database/migrations/xxxx_create_sync_tables.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Create customers table
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('incharge')->nullable();
            $table->text('address')->nullable();
            $table->string('order_no')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('image')->nullable();
            $table->string('entry_by')->nullable();
            $table->timestamps();
        });

        // Create tb_users table (matching your User model)
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('user_type')->default('user');
            $table->rememberToken();
            $table->timestamps();

            $table->index('customer_id');
            $table->index('user_type');
        });

        // Create pickups table
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('initiator_id')->nullable();
            $table->string('pickup_code')->nullable();
            $table->string('waybill')->nullable();
            $table->text('item_description')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->date('collection_date')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->string('pickup_point')->nullable();
            $table->string('fleet_type')->nullable();
            $table->string('dropping_point')->nullable();
            $table->text('status_description')->nullable();
            $table->string('entry_by')->nullable();
            $table->boolean('notification')->default(false);
            $table->timestamps();

            $table->index('initiator_id');
            $table->index('waybill');
        });

        // Create shipments table
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('shipment_key')->nullable();
            $table->string('waybill')->nullable();
            $table->date('shipment_date')->nullable();
            $table->text('pickup_address')->nullable();
            $table->datetime('pickup_time')->nullable();
            $table->unsignedBigInteger('source_branch_id')->nullable();
            $table->string('pickup_reference')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->text('scenarios')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->string('destination')->nullable();
            $table->text('item_description')->nullable();
            $table->unsignedBigInteger('transporter_id')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->unsignedBigInteger('dispatch_id')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->date('receiving_date')->nullable();
            $table->text('receiver_signature')->nullable();
            $table->string('delivered_by')->nullable();
            $table->text('delivery_boy_signature')->nullable();
            $table->text('image_proof')->nullable();
            $table->text('remarks')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->string('grn')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->string('shipment_type')->nullable();
            $table->string('entry_by')->nullable();
            $table->string('loaded_by')->nullable();
            $table->datetime('receiving_time')->nullable();
            $table->timestamps();

            $table->index('customer_id');
            $table->index('waybill');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipments');
        Schema::dropIfExists('pickups');
        Schema::dropIfExists('tb_users');
        Schema::dropIfExists('customers');
    }
};
