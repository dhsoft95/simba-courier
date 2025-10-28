<?php
// database/migrations/xxxx_fix_tables_to_match_external_structure.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Drop existing tables to recreate with correct structure
        Schema::dropIfExists('shipments');
        Schema::dropIfExists('pickups');
        Schema::dropIfExists('tb_users');
        Schema::dropIfExists('customers');

        // Create customers table (exact match)
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('incharge', 255);
            $table->text('address')->nullable();
            $table->string('order_no', 255)->nullable();
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('country', 255);
            $table->string('image', 255);
            $table->string('entry_by', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // Create tb_users table (exact match)
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->nullable();
            $table->string('username', 100);
            $table->string('password', 64);
            $table->string('email', 100);
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('avatar', 100)->nullable();
            $table->tinyInteger('active')->unsigned()->nullable();
            $table->tinyInteger('login_attempt')->default(0);
            $table->dateTime('last_login')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->string('reminder', 64)->nullable();
            $table->string('activation', 50)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->integer('last_activity')->nullable();
            $table->text('config')->nullable();
            $table->string('company_name', 255)->nullable();
            $table->text('address')->nullable();
            $table->string('city', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('license_no', 255)->nullable();
            $table->date('license_exp_date')->nullable();
            $table->string('user_type', 255)->nullable();
            $table->string('entry_by', 255)->nullable();
            $table->string('customer_id', 255)->nullable();
            $table->string('driver_id', 255)->nullable();
        });

        // Create pickups table (exact match)
        Schema::create('pickups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('initiator_id', 255);
            $table->string('pickup_code', 255);
            $table->string('waybill', 255)->nullable();
            $table->text('item_description')->nullable();
            $table->string('driver_id', 255)->nullable();
            $table->string('collection_date', 30)->nullable();
            $table->string('quantity', 255)->nullable();
            $table->string('weight', 255)->nullable();
            $table->string('status_id', 255)->default('Initiated');
            $table->string('pickup_point', 255)->nullable();
            $table->string('fleet_type', 255)->nullable();
            $table->string('dropping_point', 255)->nullable();
            $table->text('status_description')->nullable();
            $table->string('entry_by', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('notification', 255)->default('unassigned');
        });

        // Create shipments table (exact match)
        Schema::create('shipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shipment_key', 255);
            $table->string('waybill', 255)->nullable();
            $table->string('shipment_date', 255)->nullable();
            $table->string('pickup_address', 255)->nullable();
            $table->string('pickup_time', 255)->nullable();
            $table->string('source_branch_id', 255)->nullable();
            $table->string('pickup_reference', 255)->nullable();
            $table->string('customer_id', 255)->nullable();
            $table->string('scenarios', 255)->nullable();
            $table->string('branch_id', 255)->nullable();
            $table->string('agent_id', 255)->nullable();
            $table->string('destination', 255)->nullable();
            $table->text('item_description')->nullable();
            $table->string('transporter_id', 255)->nullable();
            $table->string('driver_id', 255)->nullable();
            $table->string('quantity', 255)->nullable();
            $table->string('dispatch_id', 255)->nullable();
            $table->string('receiver_name', 255)->nullable();
            $table->string('receiver_phone', 255)->nullable();
            $table->string('receiving_date', 40)->nullable();
            $table->string('receiver_signature', 255)->nullable();
            $table->string('delivered_by', 255)->nullable();
            $table->string('delivery_boy_signature', 255)->nullable();
            $table->string('image_proof', 255)->nullable();
            $table->string('remarks', 255)->nullable();
            $table->string('weight', 255)->nullable();
            $table->string('grn', 255)->nullable();
            $table->string('status_id', 255)->nullable();
            $table->string('shipment_type', 255)->nullable();
            $table->string('entry_by', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('loaded_by', 255)->nullable();
            $table->string('receiving_time', 255)->nullable();
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
