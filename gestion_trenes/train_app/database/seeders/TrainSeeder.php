<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([

            [
                'name' => 'Locomotora a vapor',
                'passengers' => '200',
                'year' => '1950',
                'train_type_id' => '1'
            ],
            [
                'name' => 'Tren de pasajeros',
                'passengers' => '400',
                'year' => '1976',
                'train_type_id' => '3'
            ],
            [
                'name' => 'Tren de mercancías',
                'passengers' => '40',
                'year' => '1910',
                'train_type_id' => '2'
            ],
            [
                'name' => 'Tren de ganado',
                'passengers' => '50',
                'year' => '1915',
                'train_type_id' => '2'
            ],
            [
                'name' => 'Tren blindado',
                'passengers' => '100',
                'year' => '1999',
                'train_type_id' => '3'
            ]

        ]);
    }
}





/*
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('passengers');
            $table->year('year');
            $table->unsignedBigInteger('train_type_id');
            //It's a foreign key
            $table->foreign('train_type_id')->references('id')->on('train_types');
            $table->timestamps();
        });
    }
*/