<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::updateOrCreate(
            ['program_id' => 1],
            [
                'program_name_th' => 'หลักสูตรวิศวกรรมซอฟต์แวร์',
                'program_name_en' => 'Software Engineering Program',
                'degree_th' => 'วิศวกรรมศาสตรบัณฑิต',
                'degree_en' => 'Bachelor of Engineering',
                'credits_required' => 120,
                'language_th' => 'ภาษาไทย',
                'tuition_fee' => 50000.00,
                'curriculum_year' => 2025,
            ]
        );
    }
}