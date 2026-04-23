<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryWebController extends Controller
{
    public function index()
    {
        // Cargar categorías con algunos productos ejemplo y conteo
        $all = Category::withCount('products')
            ->with(['products' => function($q) { $q->take(3); }])
            ->orderBy('name')
            ->get();

        $footballTypes = ['turf','tf','speed','studs'];
        $runningTypes = ['trail','grip'];

        $football = $all->filter(function($cat) use ($footballTypes) {
            return $cat->products->contains(function($p) use ($footballTypes) {
                return in_array($p->boot_type, $footballTypes);
            }) || str_contains(strtolower($cat->name), 'nike') || str_contains(strtolower($cat->name), 'adidas') || str_contains(strtolower($cat->name), 'puma');
        });

        $running = $all->filter(function($cat) use ($runningTypes) {
            return $cat->products->contains(function($p) use ($runningTypes) {
                return in_array($p->boot_type, $runningTypes);
            }) || str_contains(strtolower($cat->name), 'salomon') || str_contains(strtolower($cat->name), 'on running');
        });

        // Otros: los que no estén en football ni running
        $others = $all->diff($football)->diff($running);

        return view('categories.index', compact('football','running','others'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index')->with('success', 'Categoría creada correctamente.');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('categories.index')->with('success', 'Categoría actualizada.');
    }

    public function destroy(Category $category)
    {
        // Si hay productos asociados, desasociarlos antes de borrar la categoría
        $hasProducts = $category->products()->exists();
        if ($hasProducts) {
            $category->products()->update(['category_id' => null]);
        }

        $category->delete();

        $message = $hasProducts
            ? 'Categoría eliminada. Los productos asociados han sido desasociados.'
            : 'Categoría eliminada.';

        return redirect()->route('categories.index')->with('success', $message);
    }
}
