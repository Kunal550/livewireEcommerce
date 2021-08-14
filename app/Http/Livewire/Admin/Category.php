<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category as Categories;

class Category extends Component
{
    // public $categories, $name, $is_active, $description, $category_id;
    // public $updateCategory = false;

    // protected $listeners = [
    //     'deleteCategory'=>'destroy'
    // ];

    // // Validation Rules
    // protected $rules = [
    //     'name'=>'required',
    //     //'slug'=>'required',
    //     'is_active'=>'required',
    //     'description'=>'required'
    // ];

    // public function render()
    // {
    //     $this->categories = Categories::select('id','name','description')->get();
    //     return view('livewire.admin.category');
    //     //return view('livewire.admin.home');
    // }

    // public function resetFields(){
    //     $this->name = '';
    //     $this->description = '';
    //     $this->slug = '';
    //     $this->is_active = '';
    // }

    // public function store(){

    //     // Validate Form Request
    //     $this->validate();

    //     try{
    //         // Create Category
    //         Categories::create([
    //             'name'=>$this->name,
    //             'slug'=>$this->name,
    //             'is_active'=>$this->is_active,
    //             'description'=>$this->description
    //         ]);
    
    //         // Set Flash Message
    //         session()->flash('success','Category Created Successfully!!');

    //         // Reset Form Fields After Creating Category
    //         $this->resetFields();
    //     }catch(\Exception $e){
    //         // Set Flash Message
    //         session()->flash('error','Something goes wrong while creating category!!');

    //         // Reset Form Fields After Creating Category
    //         $this->resetFields();
    //     }
    // }

    // public function edit($id){
    //     $category = Categories::findOrFail($id);
    //     $this->name = $category->name;
    //     $this->slug = $category->name;
    //     $this->is_active = $category->is_active;
    //     $this->description = $category->description;
    //     $this->category_id = $category->id;
    //     $this->updateCategory = true;
    // }

    // public function cancel()
    // {
    //     $this->updateCategory = false;
    //     $this->resetFields();
    // }

    // public function update(){

    //     // Validate request
    //     $this->validate();

    //     try{

    //         // Update category
    //         Categories::find($this->category_id)->fill([
    //             'name'=>$this->name,
    //             'slug'=>$this->name,
    //             'is_active'=>$this->is_active,
    //             'description'=>$this->description
    //         ])->save();

    //         session()->flash('success','Category Updated Successfully!!');
    
    //         $this->cancel();
    //     }catch(\Exception $e){
    //         session()->flash('error','Something goes wrong while updating category!!');
    //         $this->cancel();
    //     }
    // }

    // public function destroy($id){
    //     try{
    //         Categories::find($id)->delete();
    //         session()->flash('success',"Category Deleted Successfully!!");
    //     }catch(\Exception $e){
    //         session()->flash('error',"Something goes wrong while deleting category!!");
    //     }
    // }

    public $categories, $name, $description,  $categories_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->categories = Categories::all();
        return view('livewire.admin.category');
        //->layout('layouts.adminBase');

    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->description = '';
        //$this->slug = '';
    }
    
    public function store()
    {
        return $this->name;
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        Categories::updateOrCreate(['id' => $this->categories_id], [
            'name' => $this->name,
            'description' => $this->description,
            //'slug'=>$this->name,
        ]);

        session()->flash('message', $this->categories_id ? 'categories updated.' : 'categories created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $categories = Categories::findOrFail($id);
        $this->categories_id = $id;
        $this->name = $categories->name;
        //$this->slug = $categories->name;
        $this->description = $categories->description;
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        Categories::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }

    
}
