<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => "2024-12-21",
                'price' => 25.50,
                'train_id' => 2,
                'ticket_type_id' => 3
            ],
            [
                'date' => "2023-06-28",
                'price' => 15.50,
                'train_id' => 1,
                'ticket_type_id' => 1
            ],
            [
                'date' => "2023-02-14",
                'price' => 50.50,
                'train_id' => 3,
                'ticket_type_id' => 2
            ]
        ]);
    }
}


/*
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('price');

            $table->unsignedBigInteger('train_id');
            $table->foreign('train_id')->references('id')->on('trains');

            $table->unsignedBigInteger('ticket_type_id');
            $table->foreign('ticket_type_id')->references('id')->on('ticket_types');

            $table->timestamps();
        });
    }

*/
