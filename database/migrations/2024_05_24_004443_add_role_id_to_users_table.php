<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Role;

class AddRoleIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade')->after('id')->default(1);
        });
        Role::create(['id' => 1, 'name' => 'Admin', 'created_at' => now(),]);
        Role::create(['id' => 2, 'name' => 'User', 'created_at' => now(),]);
        Role::create(['id' => 3, 'name' => 'Guest', 'created_at' => now(),]);
        User::create(['role_id' => 1, 'type_user' => 1, 'username' => 'admin1', 'name' => 'admin','email' => 'admin@themesbrand.com','password' => Hash::make('12345678'),'email_verified_at'=>'2022-01-02 17:04:58','created_at' => now(),]);     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });
    }
}