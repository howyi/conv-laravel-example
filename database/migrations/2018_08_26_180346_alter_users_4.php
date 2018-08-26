<?php

use Illuminate\Database\Migrations\Migration;

class AlterUsers4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = <<<SQL
ALTER TABLE `users`
  CHANGE `onamae` `name` varchar(255) NOT NULL COMMENT '';
SQL;
        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = <<<SQL
ALTER TABLE `users`
  CHANGE `name` `onamae` varchar(255) NOT NULL COMMENT '';
SQL;
        DB::statement($sql);
    }
}

