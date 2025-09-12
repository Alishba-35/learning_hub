// FileName: database/migrations/YYYY_MM_DD_HHMMSS_add_user_info_to_videos_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::table('videos', function (Blueprint $table) {
        $table->string('url')->nullable()->after('file'); // Make url nullable
    });
}

public function down()
{
    Schema::table('videos', function (Blueprint $table) {
        $table->dropColumn('url');
    });
}


    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::table('videos', function (Blueprint $table) {
    //         $table->dropForeign(['user_id']);
    //         $table->dropColumn(['user_id', 'uploaded_by']);
    //     });
    // }
};