<?php

class PagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pages')->delete();

        DB::table('pages')->insert( array(
            array(
                'title'      => 'اتصل بنا',
                'slug'       => 'contact',
                'content'    => 'هنا نموذج من صفحة الاتصال بنا',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'title'      => 'من نحن',
                'slug'       => 'about',
                'content'    => 'هنا نموذج من صفحة من نحن',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )
        ));
    }

}
