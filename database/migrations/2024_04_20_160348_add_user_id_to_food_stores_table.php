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
        Schema::table('food_stores', function (Blueprint $table) {
            if (!Schema::hasColumn('food_stores', 'user_id')) {
                // Add the user_id column without the foreign key constraint
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }
        });

        // Get the first user
        $user = \App\Models\User::first();

        if ($user) {
            // Update the existing rows to have the user_id of the first user
            \App\Models\FoodStore::query()->update(['user_id' => $user->id]);
        }

        Schema::table('food_stores', function (Blueprint $table) {
            // Make the user_id column non-nullable
            $table->unsignedBigInteger('user_id')->nullable(false)->change();

            // Add the foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('food_stores', function (Blueprint $table) {
            //
        });
    }
};
