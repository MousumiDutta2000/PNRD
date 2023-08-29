<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserHistoryTrigger extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER after_users_update
            AFTER UPDATE ON users FOR EACH ROW
            BEGIN
                INSERT INTO user_history (name, email, email_verified_at, password, userID, level_id, role_id, created_at, updated_at)
                VALUES (OLD.name, OLD.email, OLD.email_verified_at, OLD.password, OLD.userID, OLD.level_id, OLD.role_id, OLD.updated_at, NOW());
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER after_users_update');
    }
}
