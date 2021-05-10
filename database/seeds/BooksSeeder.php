<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Android Of Death',
            'description' => 'Sed ut consequat dolor. Curabitur iaculis tincidunt auctor. Suspendisse potenti. Praesent vitae purus nec neque suscipit luctus at ac purus. Fusce sed egestas mi. Duis ut sem ullamcorper, convallis arcu sit amet, pretium neque. Etiam nec arcu leo. Donec non vulputate odio. Morbi vehicula tortor sed tincidunt ullamcorper.',
            'user_id' => '1'
        ]);
        DB::table('books')->insert([
            'title' => 'Clone Of The Crash',
            'description' => 'Suspendisse accumsan elementum suscipit. Suspendisse egestas sapien leo, non laoreet nisl commodo a. Vestibulum nisi ipsum, dapibus sit amet cursus vel, rutrum eget dui. Phasellus mollis ante bibendum aliquet blandit. Morbi ac eleifend nibh, at sodales felis. Suspendisse tempor vestibulum hendrerit. Nullam ultricies aliquam orci ut eleifend.',
            'user_id' => '1'
        ]);
        DB::table('books')->insert([
            'title' => 'Soldiers Of The Galaxy',
            'description' => 'Curabitur malesuada vehicula lobortis. Mauris ut tincidunt nisl. Curabitur varius, metus eget ultrices malesuada, risus enim tristique magna, a congue leo purus nec libero. Vivamus lobortis tincidunt justo, at imperdiet nulla. Donec malesuada porttitor dui, a sagittis sapien tincidunt at. Quisque vitae tincidunt justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam ut ipsum sollicitudin, molestie urna ut, dignissim massa.',
            'user_id' => '1'
        ]);
        DB::table('books')->insert([
            'title' => 'Medics And Spies',
            'description' => 'Etiam id augue mollis, dignissim magna et, fermentum ligula. Sed accumsan urna id nisi auctor, vel tincidunt metus scelerisque. Sed dapibus sem eget nulla iaculis iaculis. Quisque ut cursus nisl, vitae cursus justo. Curabitur aliquet molestie eros ac dictum. Proin ultrices orci quis ligula suscipit, ullamcorper scelerisque turpis tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam varius ipsum in leo vulputate vestibulum. Nunc consectetur augue a dolor tempor pretium. Donec et eleifend dolor, nec molestie lectus.',
            'user_id' => '2'
        ]);
        DB::table('books')->insert([
            'title' => 'Dependent On Robots',
            'description' => 'Aenean at massa aliquam, elementum neque a, rhoncus ipsum. Aenean ullamcorper vel diam nec convallis. Nam interdum, erat id vulputate tincidunt, nunc risus facilisis nunc, sit amet vulputate ex lacus sit amet enim. Fusce vitae nisi ornare purus aliquam feugiat non gravida mi. Suspendisse potenti. Nam hendrerit facilisis dolor, sit amet ultrices elit. In diam lorem, interdum sed ligula vel, commodo faucibus odio. Pellentesque vel viverra urna. Praesent eu velit et lectus ultrices imperdiet sodales eget mauris.',
            'user_id' => '2'
        ]);
        DB::table('books')->insert([
            'title' => 'Kittens In Space',
            'description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam euismod luctus libero, vel lacinia lectus elementum a. Mauris ornare eget turpis eu ullamcorper. Donec aliquam egestas nunc. Donec facilisis dolor non eleifend facilisis. Aliquam quis nisi ipsum. Integer molestie tincidunt metus sit amet interdum. Vivamus nec volutpat leo.',
            'user_id' => '2'
        ]);
        DB::table('books')->insert([
            'title' => 'Train Of The Moon',
            'description' => 'Curabitur sollicitudin est ligula, eget ornare massa molestie nec. Morbi in eros ex. Cras tempor nulla ac nibh convallis suscipit. Vestibulum nisi ex, eleifend quis lacus vel, consectetur commodo arcu. Nam at tempor lorem. Curabitur ac tellus eros. Donec nulla massa, maximus eget sapien dignissim, commodo molestie mi. Ut sed fringilla elit. Cras mollis libero quis ante sagittis maximus.',
            'user_id' => '2'
        ]);
        DB::table('books')->insert([
            'title' => 'Pigs Of Dreams',
            'description' => 'Integer risus quam, consectetur non risus ut, rutrum condimentum massa. Vivamus eu mattis est, eget luctus nunc. Donec hendrerit arcu non gravida commodo. Morbi elementum tortor ac justo efficitur molestie. Cras sit amet gravida ante, accumsan congue est. Proin faucibus aliquet purus sit amet rutrum. Aliquam ornare at turpis ac porta.',
            'user_id' => '3'
        ]);
        DB::table('books')->insert([
            'title' => 'Puppy Of My Dreams',
            'description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam at posuere felis. Nunc elementum tristique velit eu volutpat. Suspendisse potenti. Nullam at commodo dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc laoreet purus eget ligula ultrices luctus. In ac bibendum ex, non rutrum est.',
            'user_id' => '3'
        ]);
    }
}
