<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;


class NeighborhoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    use PostgisTrait;
    
    public function run()
    {
        $neighborhood_file = file_get_contents(realpath(__DIR__ .'/neighborhood.json'));
        $neighborhood_data = json_decode($neighborhood_file, true);

        function addLatLong ($string)
        {
            return json_decode($string, true);
        }

        foreach ( $neighborhood_data as &$neighborhood ) {

            $latLong = addLatLong($neighborhood["center"]);
            // print_r($latLong);

            DB::table('neighborhoods')->insert([
                'name' => $neighborhood["neighborhood"],
                'borough' => $neighborhood["borough"],
                // 'center' => new Point($latLong[0],$latLong[1]),
                'tags' => ($neighborhood['tags'] ? $neighborhood['tags'] : null),
                'summary' => ($neighborhood['summary'] ? $neighborhood['summary'] : null),
            ]);
            // print_r($neighborhood["center"]);
            // echo gettype($neighborhood["center"]);
        }
    }
}
