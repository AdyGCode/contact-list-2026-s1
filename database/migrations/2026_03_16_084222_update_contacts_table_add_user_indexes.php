<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::table('contacts', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\User::class);
            $table->index(['family_name', 'given_name'], 'full_name_fg_index');
            $table->index(['given_name', 'family_name'], 'full_name_gf_index');
            $table->index(['nickname'], 'nickname_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropIndex([
                'full_name_fg_index',
                'full_name_gf_index',
                'nickname_index',
            ]);
        });
    }
};
