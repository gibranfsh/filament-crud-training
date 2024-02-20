<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Website Redesign',
                'description' => 'Redesign of corporate website for Acme Corporation.',
                'platform' => 'Website',
                'status' => 'ON_PROGRESS',
                'start_date' => now(),
                'end_date' => now()->addDays(30),
                'client_id' => 1, // Assume client with ID 1 exists (Acme Corporation)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Development of a mobile app for Tech Innovations Ltd.',
                'platform' => 'Mobile',
                'status' => 'ON_PROGRESS',
                'start_date' => now(),
                'end_date' => now()->addDays(45),
                'client_id' => 2, // Assume client with ID 2 exists (Tech Innovations Ltd.)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Global Marketing Campaign',
                'description' => 'Launch of a global marketing campaign for Global Solutions Inc.',
                'platform' => 'Website',
                'status' => 'CANCELLED',
                'start_date' => now(),
                'end_date' => now()->addDays(60),
                'client_id' => 3, // Assume client with ID 3 exists (Global Solutions Inc.)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Innovate ERP System',
                'description' => 'Implementation of an ERP system for Innovate Industries.',
                'platform' => 'Desktop',
                'status' => 'ON_HOLD',
                'start_date' => now(),
                'end_date' => now()->addDays(90),
                'client_id' => 4, // Assume client with ID 4 exists (Innovate Industries)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Digital Marketing Strategy Desktop App',
                'description' => 'Development of a comprehensive digital marketing strategy for Digital Ventures LLC.',
                'platform' => 'Desktop',
                'status' => 'ON_PROGRESS',
                'start_date' => now(),
                'end_date' => now()->addDays(45),
                'client_id' => 5, // Assume client with ID 5 exists (Digital Ventures LLC)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Elite E-commerce Platform',
                'description' => 'Creation of an e-commerce platform for Elite Enterprises.',
                'platform' => 'Website',
                'status' => 'ON_PROGRESS',
                'start_date' => now(),
                'end_date' => now()->addDays(120),
                'client_id' => 6, // Assume client with ID 6 exists (Elite Enterprises)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Synergy CRM Implementation',
                'description' => 'Implementation of a CRM system for Synergy Systems.',
                'platform' => 'Desktop',
                'status' => 'ON_PROGRESS',
                'start_date' => now(),
                'end_date' => now()->addDays(60),
                'client_id' => 7, // Assume client with ID 7 exists (Synergy Systems)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'NexGen AI Project',
                'description' => 'Development of an artificial intelligence project for NexGen Technologies.',
                'platform' => 'Desktop',
                'status' => 'ON_PROGRESS',
                'start_date' => now(),
                'end_date' => now()->addDays(150),
                'client_id' => 8, // Assume client with ID 8 exists (NexGen Technologies)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Future Solutions Mobile App',
                'description' => 'Development of a mobile app for Future Solutions Co.',
                'platform' => 'Mobile',
                'status' => 'ON_PROGRESS',
                'start_date' => now(),
                'end_date' => now()->addDays(30),
                'client_id' => 9, // Assume client with ID 9 exists (Future Solutions Co.)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Visionary Ventures Blockchain Project',
                'description' => 'Implementation of a blockchain project for Visionary Ventures.',
                'platform' => 'Website',
                'status' => 'ON_HOLD',
                'start_date' => now(),
                'end_date' => now()->addDays(180),
                'client_id' => 10, // Assume client with ID 10 exists (Visionary Ventures)
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
