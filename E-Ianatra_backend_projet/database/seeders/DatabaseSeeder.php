<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Créer 3 instructeurs
        for ($i = 1; $i <= 3; $i++) {
            User::create([
                'name' => "Instructeur $i",
                'email' => "inst$i@lms.com",
                'password' => Hash::make('password'),
                'role' => 'instructor',
            ]);
        }

        // 2. Créer 5 cours
        for ($i = 1; $i <= 5; $i++) {
            $course = Course::create([
                'title' => "Cours Numéro $i",
                'description' => "Description détaillée du cours $i.",
                'thumbnail' => "image$i.jpg"
            ]);

            // 3. Créer 4 leçons par cours (5*4 = 20 leçons)
            for ($j = 1; $j <= 4; $j++) {
                Lesson::create([
                    'course_id' => $course->id,
                    'title' => "Leçon $j",
                    'content' => "Contenu de la leçon $j",
                    'video_url' => "https://youtube.com/embed/vid$j"
                ]);
            }
        }
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> fae5a4d92c7863bcf53d80dcafd02265eed86465
    }
}
