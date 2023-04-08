<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Authors;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Authors::factory(1)->create();
        Blog::factory(10)->create();

        Authors::create([
            'name'=>'Delvina',
            'slug' => 'delvina']);
            
        Authors::create([
            'name'=>'Samuel',
            'slug' => 'samuel']);

        Blog::create([
            'title' => 'Haunted Mansion Adventure',
            'authors_id' => 1,
            'slug' => 'haunted-mansion-adventure',
            'excerpt' => 'Lena had always been drawn to the abandoned mansion at the edge of town. Its once-grand facade was now dilapidated, and rumors abounded of the terrible things that had happened within its walls. But Lena could not resist the call of adventure. She gathered her courage and made her way to the mansion entrance, her heart pounding in her chest.',
            'body' => 'Lena had always been drawn to the abandoned mansion at the edge of town. Its once-grand facade was now dilapidated, and rumors abounded of the terrible things that had happened within its walls. But Lena could not resist the call of adventure. She gathered her courage and made her way to the mansion entrance, her heart pounding in her chest.<br>As she stepped inside, Lena felt a shiver run down her spine. The air was thick with the scent of dust and decay. Every creak of the floorboards echoed through the empty rooms. Lena explored the mansion for hours, uncovering hidden passages and forgotten treasures. But as the sun began to set and the shadows grew longer, Lena realized that she was not alone in the mansion. Something was watching her, lurking in the darkness. Lena heart raced as she tried to find her way back to the entrance, but the mansion seemed to twist and turn around her, leading her deeper into its haunted halls.']);
            
            Blog::create([
            'title' => 'Best Day Of My Life',
            'authors_id' => 2,
            'slug' => 'best-day-of-my-life',
            'excerpt' => 'Maggie woke up to the sound of the alarm clock, feeling groggy and tired. She dragged herself out of bed and made her way to the kitchen to start her morning routine. As she sipped her coffee, she looked out the window and noticed the beautiful sunrise. The sky was painted in shades of pink and orange, and the sun was just beginning to peek through the clouds. It was a serene moment that made Maggie feel grateful for another day.',
            'body' => 'Maggie woke up to the sound of the alarm clock, feeling groggy and tired. She dragged herself out of bed and made her way to the kitchen to start her morning routine. As she sipped her coffee, she looked out the window and noticed the beautiful sunrise. The sky was painted in shades of pink and orange, and the sun was just beginning to peek through the clouds. It was a serene moment that made Maggie feel grateful for another day. As she got ready for work, Maggie could not shake off the feeling that today was going to be different. She had a sense of anticipation and excitement, like something great was about to happen. Little did she know, her day was going to take a surprising turn that would change her life forever.']); 
            
            Blog::create([
            'title' => 'River Sanctuary',
            'authors_id' => 1,
            'slug' => 'river-sanctuary',
            'excerpt' => 'The sun had just begun to set behind the mountains as Sarah made her way down the dirt path towards the river. She had been coming to this spot since she was a little girl, but it never lost its magic. As she reached the clearing, she took a deep breath, inhaling the scent of pine and fresh water. She sat down on a large rock and watched as the water rushed by, feeling the stress of the day slip away with each passing moment. This was her sanctuary, her place of peace, and she knew that no matter what life threw her way, she could always find solace here.',
            'body' => 'The sun had just begun to set behind the mountains as Sarah made her way down the dirt path towards the river. She had been coming to this spot since she was a little girl, but it never lost its magic. As she reached the clearing, she took a deep breath, inhaling the scent of pine and fresh water. She sat down on a large rock and watched as the water rushed by, feeling the stress of the day slip away with each passing moment. This was her sanctuary, her place of peace, and she knew that no matter what life threw her way, she could always find solace here. As the sky turned shades of pink and orange, Sarah closed her eyes and let the sounds of nature wash over her. She heard the chirping of birds, the rustling of leaves in the wind, and the distant howl of a lone wolf. She felt the cool breeze on her skin, and the warmth of the sun on her face. For a brief moment, everything else faded away, and she was left with the simple beauty of the world around her. As the last light of day disappeared, Sarah knew that she would leave this place feeling rejuvenated and ready to face whatever challenges lay ahead. She stood up, took one last look at the river, and began the walk back home, grateful for the peace and serenity that nature had provided her once again.']);
    }
}
