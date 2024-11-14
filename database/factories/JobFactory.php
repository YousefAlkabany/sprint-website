<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images=[
            'https://static.wixstatic.com/media/e19aad_8196734ad3ec49d4a8bb07e6f927c3f1~mv2.jpg/v1/crop/x_125,y_0,w_750,h_750/fill/w_270,h_270,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e19aad_8196734ad3ec49d4a8bb07e6f927c3f1~mv2.jpg',
            'https://www.bworldonline.com/wp-content/uploads/2022/08/office-room.jpg',
            'https://cdn.pixabay.com/photo/2022/08/12/03/28/buildings-7380728_1280.jpg',
            'https://assets.themuse.com/uploaded/companies/15000142/about_modules/112530/588024e8-a030-4cab-b329-3c72254f8029.jpg',

        ];
        return [
            'title'=>fake()->jobTitle(),
            'employer_id'=>Employer::Factory(),
            'salary'=>'50,000',
            'url'=>$images[rand(0, count($images)-1)],
        ];
    }
}
