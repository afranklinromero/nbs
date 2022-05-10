<?php


use Illuminate\Database\Seeder;
use App\Modelos\Blog;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i<=5; $i++){
            factory(Blog::class, 1)->create(['imagen' => $i . '.png', 'documentopdf' => $i . '.pdf']);
        }
        
    }
}
