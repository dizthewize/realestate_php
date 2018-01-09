<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISeovsesnhit191000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 4,
          'bath' => 3,
          'description' => 'Beautiful Tri-level home located in highly desired neighborhood. Featuring 4 bedrooms and 2 1/2 baths with almost 2000 square feet. Light and bright kitchen with tile flooring and stainless steel appliances. Beautiful backyard with covered patio and sparkling pool just in time for summer!',
          'price' => 399900
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISz05ec420zsf7.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 5,
          'bath' => 4.5,
          'description' => 'Wow! What a property! Country living right in the heart of the City! This home has many nice features to include beautiful kitchen with solid surface counters, oversized refrigerator, dual dishwashers, small kitchenette upstairs, plus two master suites, unfinished basement, downstairs master bedroom, two separate laundry areas.',
          'price' => 779000
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISu4fbg7pd5htc0000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 4,
          'bath' => 3,
          'description' => 'Beautiful immaculate almost new single story home. Completely modern designer finishes and features including all white kitchen, stainless appliances, plantation shutters, amazing granite and stone work throughout. This one will not last long, must see. No Hoa or Mello Roos.',
          'price' => 524900
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISirwegsijvzkz0000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 3,
          'bath' => 2,
          'description' => 'Lovely Family Park with Clubhouse, Pool and Park. Large home in park with many updates. Make an offer! Probate Sale!!!!! Opportunity for immediate equity.',
          'price' => 80000
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISuwg3t6fw8vea0000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 3,
          'bath' => 3,
          'description' => 'Beautiful 2 story home with 3 bed/2.5bath. Spacious kitchen with corian countertops. Upgraded laminated wood floors throughout. Whole house fan, loft, huge master bedroom.',
          'price' => 419000
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/IS6um3jda8b0lk1000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 4,
          'bath' => 3,
          'description' => 'This home is nestled between mature Oak trees and greenbelt on .25 acres in the wonderful community St. Andrews Court. Enjoy this well cared for home that features large kitchen with island, formal dining, plantation shutters, 4 bed/3 bath(one of each downstairs).',
          'price' => 475000
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISme9bt7wf2xpe0000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 3,
          'bath' => 3,
          'description' => 'Amazing Home Tucked Away in a Beautiful End of the Road Cul-De-Sac! Fabulous Floor Plan Features Formal Living & Dining Rm, Great Rm Style Family Rm + Dining Area + Large Kitchen. Huge Laundry Room w/Cabinets & Sink.Three Large Bedrooms, Master Bdrm w/Retreat - Perfect for Nursery or Private Space. Jack & Jill Bathrm w/Separate Vanities/Sinks.',
          'price' => 429000
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISq98ek2srdpqx1000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 4,
          'bath' => 2,
          'description' => 'This 1551 square foot single family home has 4 bedrooms and 2.0 bathrooms. It is located at 8341 Bramble Tree Way Citrus Heights, California.',
          'price' => 319000
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISu00xjjek3bbc0000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 3,
          'bath' => 2,
          'description' => 'You wont want to miss this great home. Lovingly cared for by its owners there is high attention to detail. Will never be a backyard neighbor to insure your privacy in this tranquil fenced backyard.',
          'price' => 329000
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISy3tcfco7lfl30000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 4,
          'bath' => 3,
          'description' => 'Great layout, vaulted ceilings, formal living and dining areas. Spacious kitchen, Granite counter tops laminate/ tile flooring, open family room with fireplace. Very nice lot with mature landscape. RV ACCESS Close to the American River and Folsom Lake. Prime location, this home is a must see!',
          'price' => 455999
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/ISecqcp9b7htej1000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 4,
          'bath' => 2,
          'description' => 'This former model home has only had one owner! Lovingly cared for, located in a friendly, quiet neighborhood on a hard-to-find corner lot with RV access, beautiful stamped concrete and workshop/shed in the backyard, this charming home is move-in ready with a great floor plan and many unexpected features.',
          'price' => 394500
        ]);

        DB::table('properties')->insert([
          'imagePath' => 'https://photos.zillowstatic.com/p_f/IS6u24i1aokj1f0000000000.jpg',
          'title' => 'HOUSE FOR SALE',
          'bed' => 3,
          'bath' => 2,
          'description' => 'Ready to Move in. Seller has done a great job of making this house a home. Newer flooring, lighting, upgraded granite counter tops and landscaping. Open floor plan off of the kitchen could be a family room or formal dining. Vaulted ceiling in living/dining room and master bed.',
          'price' => 250750
        ]);
    }
}
