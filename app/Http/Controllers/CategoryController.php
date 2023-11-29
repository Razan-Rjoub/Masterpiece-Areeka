<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        $store = Category::with('store')->get();

        return view('Admin.category.category', compact('category', 'store'));
    }

    public function create()
    {
        $store = Store::all();
        return view('Admin.category.Addcategory')->with('store', $store);
    }

    public function store(Request $request)
    {
        $request->validate([
            'categoryname' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',

        ]);
        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/category/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/category/'), $filename);
        }
        Category::create([
            'name' => $request->categoryname,
            'image' => $filename,
            'store_id' => $request->store_id,
        ]);
        Alert::success('success', 'category Added Successfully');
        return redirect('/category');
    }


    public function show(Category $category)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);
        $store = Store::all();
        return view('Admin.category.edit', compact('category', 'store'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categoryname' => 'required|string',

        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/category/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/category/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($request->image);
        }
        $data['name'] = $request->categoryname;

        Category::where(['id' => $id])->update(
            $data
        );
        Alert::success('success', 'category Updated Successfully');
        return redirect('category');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        Category::destroy($id);
        Alert::success('success', 'Category Deleted Successfully');
        return redirect('category');
    }
}