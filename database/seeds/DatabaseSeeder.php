<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();*/

        for ($i = 0; $i < 10; $i++) {
            DB::table('categories')->insert([
                'category_name' => str_random(10),
                'category_description' => str_random(500),
            ]);
        }

        $categories = DB::table('categories')->select("category_name")->get();

        $categoriesArray = [];

        foreach($categories as $cat){
            $categoriesArray[] = $cat->category_name;
        }

        for ($i = 0; $i < 50; $i++) {
            $ii = rand(0, 9);
            DB::table('posts')->insert([
                'post_name' => str_random(60),
                'post_category' => $categoriesArray[$ii],
                'post_date' => time(),
                'post_preview' => "Lorem ipsum dolor sit amet, usu odio labitur delicatissimi in. An vim agam clita tempor,
                 ignota noster delicatissimi cum ad, ex luptatum quaestio usu. Ius dolor suscipit et, mel in mollis oportere.
                 Cu quo congue audire, ex dicat quaeque invidunt vim. Brute simul ea vix, mea cu elit suscipit. Dictas
                 abhorreant interesset ei nec, tritani tibique vel in.",

                'post_body' => "Lorem ipsum dolor sit amet, usu odio labitur delicatissimi in. An vim agam clita tempor,
                 ignota noster delicatissimi cum ad, ex luptatum quaestio usu. Ius dolor suscipit et, mel in mollis oportere.
                 Cu quo congue audire, ex dicat quaeque invidunt vim. Brute simul ea vix, mea cu elit suscipit. Dictas
                 abhorreant interesset ei nec, tritani tibique vel in.
                 Aperiri praesent delicatissimi mei ea, detraxit honestatis ei est. An nonumy sanctus nec. Usu elit everti no.
                 Quis bonorum sensibus eu eum. Ea his perpetua elaboraret.
                 Quando everti feugait ne mea, vix dolor corrumpit cu. Stet clita laboramus ei pro. In sea odio sanctus
                 suscipiantur, ius graece timeam ut, atqui deseruisse temporibus mel eu. Et quot populo accusam mel, te
                 sea sumo reque albucius. Per detraxit aliquando at, homero prodesset vix ut, eum expetenda comprehensam in.
                 Ius ut inani utamur liberavisse, eligendi suscipit officiis ut nam, eruditi albucius in sit. Enim choro
                 quo an, nihil vulputate voluptatum an sed, cum molestiae expetendis ne. Tollit petentium similique qui no.
                 Ad laboramus abhorreant qui. Est lorem inermis assueverit an. Ut soluta timeam scaevola usu.
                 Eu epicuri sensibus mea, elit iriure sapientem vix ut. Officiis eleifend ex sea, labitur nominavi
                 comprehensam at pro. Te vix mentitum salutatus, iisque voluptatum ei qui. At mel clita maiorum, eu nam
                 repudiare torquatos, cum te reque velit. At his utinam soluta molestie.",

            ]);
        }

    }
}
