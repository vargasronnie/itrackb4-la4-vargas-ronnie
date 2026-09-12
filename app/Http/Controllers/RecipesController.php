<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    private function recipes()
    {
        return [
            ['id' => 1, 'name' => 'Chicken Adobo', 'description' => 'Braised chicken in soy sauce, vinegar and garlic.', 'cook_time' => 45],
            ['id' => 2, 'name' => 'Garlic Fried Rice', 'description' => 'Day-old rice fried with garlic and a pinch of salt.', 'cook_time' => 10],
            ['id' => 3, 'name' => 'Sinigang na Baboy', 'description' => 'Sour pork soup with tamarind and vegetables.', 'cook_time' => 60],
            ['id' => 4, 'name' => 'Tortang Talong', 'description' => 'Grilled eggplant omelet, pan-fried until golden.', 'cook_time' => 20],
            ['id' => 5, 'name' => 'Halo-Halo', 'description' => 'Shaved ice dessert with mixed sweets and milk.', 'cook_time' => 15],
        ];
    }

   
    public function index()
    {
        $recipes = $this->recipes();

        return view('recipes.index', ['recipes' => $recipes]);
    }

   
    public function show($id)
    {
        $recipe = collect($this->recipes())->firstWhere('id', (int) $id);

        if (! $recipe) {
            abort(404);
        }

        return view('recipes.show', ['recipe' => $recipe]);
    }

   
    public function filter()
    {
        $recipes = collect($this->recipes())
            ->filter(fn ($recipe) => $recipe['cook_time'] <= 20)
            ->values()
            ->all();

        return view('recipes.filter', ['recipes' => $recipes]);
    }

    
    public function featured()
    {
        $recipe = $this->recipes()[0];

        return view('recipes.featured', ['recipe' => $recipe]);
    }
}