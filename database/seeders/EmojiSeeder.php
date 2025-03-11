<?php

namespace Database\Seeders;

use App\Models\Emoji;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmojiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emojis = [
            ['name' => 'Smiling Face', 'image' => 'https://em-content.zobj.net/source/apple/354/smiling-face-with-smiling-eyes_1f60a.png'],
            ['name' => 'Thumbs Up', 'image' => 'https://em-content.zobj.net/source/apple/354/thumbs-up_1f44d.png'],
            ['name' => 'Heart', 'image' => 'https://em-content.zobj.net/source/apple/354/red-heart_2764-fe0f.png'],
            ['name' => 'Fire', 'image' => 'https://em-content.zobj.net/source/apple/354/fire_1f525.png'],
            ['name' => 'Rocket', 'image' => 'https://em-content.zobj.net/source/apple/354/rocket_1f680.png']
        ];

        foreach ($emojis as $emoji) {
            $model = new Emoji();
            $model->name = $emoji['name'];
            $model->image = $emoji['image'];
            $model->save();
        }
    }
}
