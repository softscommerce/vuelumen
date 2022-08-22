<?php

use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mongodb';
    public function up()
    {
        Schema::connection($this->connection)
            ->table('product_brands', function (Blueprint $collection)
            {
                $collection->index('pbid');
                $collection->index('name');
                $collection->index('slug');
                $collection->index('description');
                $collection->index('image');
                $collection->index('status');
            });
//        Schema::create('product_brands', function (Blueprint $table) {
//            $table->id();
//            $table->string('name')->nullable();
//            $table->string('slug')->nullable();
//            $table->string('description')->nullable();
//            $table->string('image')->nullable();
//            $table->tinyInteger('status')->default(1);
//            $table->timestamps();
//        });
    }

    public function down()
    {
//        Schema::dropIfExists('product_brands');

        Schema::connection($this->connection)
            ->table('product_brands', function (Blueprint $collection)
            {
                $collection->drop();
            });
    }
};
