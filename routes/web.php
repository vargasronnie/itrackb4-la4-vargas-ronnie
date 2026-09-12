<?php

use App\Http\Controllers\RecipesController;

Route::get('/recipes', [RecipesController::class, 'index'])->name('recipes.index');
Route::get('/recipes/filter', [RecipesController::class, 'filter'])->name('recipes.filter');
Route::get('/recipes/featured', [RecipesController::class, 'featured'])->name('recipes.featured');
Route::get('/recipes/{id}', [RecipesController::class, 'show'])->name('recipes.show');