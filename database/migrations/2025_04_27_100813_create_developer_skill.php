<?php

use App\Models\Developer;
use App\Models\Skill;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('developer_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Developer::class);
            $table->foreignIdFor(Skill::class)->constrained()->onDelete('cascade');
            $table->integer('level')->default('3');
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('developer_skill');
    }
};
