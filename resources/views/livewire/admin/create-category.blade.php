{{--  <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1"
                            class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
</div>
<div class="mb-4">
    <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
    <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="exampleFormControlInput2" wire:model="description" placeholder="Enter description"></textarea>
    @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
</div>
</div>
<div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
        <button wire:click.prevent="store()" type="button"
            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Store
        </button>
    </span>
    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
        <button wire:click="closeModalPopover()" type="button"
            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Close
        </button>
    </span>
</div>
</form>
</div>
</div>
</div> --}}


{{--  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Responsive model</h4>
        <!-- sample modal content -->
        <div id="categoryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-body">
                        <form>
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1"
                                        class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                                    @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
</div>
<div class="mb-4">
    <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
    <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="exampleFormControlInput2" wire:model="description" placeholder="Enter description"></textarea>
    @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
</div>
</div>
<div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
        <button wire:click.prevent="store()" type="button"
            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Store
        </button>
    </span>
    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
        <button wire:click="closeModalPopover()" type="button"
            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Close
        </button>
    </span>
</div>
</form>
</form>
</div>
</div>
</div>
</div>
<!-- /.modal -->
<img src="../assets/images/alert/model.png" alt="default" data-toggle="modal" data-target="#responsive-modal"
    class="model_img img-responsive" />
</div>
</div> --}}


<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store()">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title"
                            wire:model="name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Description:</label>
                        <textarea type="text" class="form-control" id="exampleFormControlInput2"
                            wire:model="description" placeholder="Enter Body"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>

            </div>
        </div>
    </div>
</div>