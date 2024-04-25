<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Question::create([
            'name' => 'Say something about Netizens Technologies.',
            'type' => 'descriptive',
            'options' => null
        ]);
        \App\Models\Question::create([
            'name' => 'Say something about yourself.',
            'type' => 'descriptive',
            'options' => null
        ]);
        \App\Models\Question::create([
            'name' => 'Which PHP frameworks you learn from here?',
            'type' => 'MCQ',
            'options' => ['CodeIgniter', 'Laravel', 'Yii', 'CakePHP']
        ]);
        \App\Models\Question::create([
            'name' => 'Which Frontend Techs you learn from here?',
            'type' => 'MCQ',
            'options' => ['React', 'Javascript', 'Angular', 'Alpine.JS']
        ]);
        \App\Models\Question::create([
            'name' => 'How Many Years of experience do you have in PHP ?',
            'type' => 'choice',
            'options' => ['fresher', '1 Year', '2 Years', '3+ Years']
        ]);
        \App\Models\Question::create([
            'name' => 'How Many Years of experience do you have in Managment ?',
            'type' => 'choice',
            'options' => ['fresher', '1 Year', '2 Years', '3+ Years']
        ]);
        \App\Models\Question::create([
            'name' => 'Enter your name',
            'type' => 'short',
            'options' => null
        ]);
        \App\Models\Question::create([
            'name' => 'Enter your favourite tech',
            'type' => 'short',
            'options' => null
        ]);
        \App\Models\Question::create([
            'name' => 'Enter your birth date',
            'type' => 'date',
            'options' => null
        ]);
        \App\Models\Question::create([
            'name' => 'Enter your aniversary date',
            'type' => 'date',
            'options' => null
        ]);
    }
}
