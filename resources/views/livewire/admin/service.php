<main id="main" class="main">

   <div class="pagetitle">
     <h1>Dashboard</h1>
     <nav>
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
         <li class="breadcrumb-item active">Add New Category</li>
       </ol>
     </nav>
   </div><!-- End Page Title -->

   <section class="section dashboard">
  <div class="row">
       <div class="col-lg-6">
         <div class="card">
           <div class="card-header">
             <div class="row">
                 <div class="col-md-6"> <h5 class="card-title">Edit Category</h5></div>
                 <div class="col-md-6 text-end">
                     <a href="{{route('admin.service_categories')}}" class="btn btn-info pull-right">All Categories</a>
                 </div>
             </div>
           </div>
           <div class="card-body">
             @if(Session::has('message'))
               <div class="alert alert-success" role="alert">
                   {{Session::get('message')}}
               </div>
             @endif
             <!-- Multi Columns Form -->
             <form class="row g-3" wire:submit.prevent="createNewCategory">
                 @csrf
                 <div class="form-group">
                     <label for="name" class="col-sm-3 control-label">Category Name: </label>
                     <div class="col-sm-9">
                         <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug">
                         @error('name') <p class="text-danger">{{@message}}</p> @enderror
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="name" class="col-sm-3 control-label">Category Slug: </label>
                     <div class="col-sm-9">
                         <input type="text" class="form-control" name="slug" wire:model="slug">
                          @error('slug') <p class="text-danger">{{@message}}</p> @enderror
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="name" class="col-sm-3 control-label">Category Image: </label>
                     <div class="col-sm-9">
                         <input type="file" class="form-control-file" name="image" wire:model="image">
                          @error('image') <p class="text-danger">{{@message}}</p> @enderror
                          @if($image)
                            <img src="{{$image->temporaryUrl()}}" width="50px"/>
                          @endif
                     </div>
                 </div>
               <div class="text-center">
                 <button type="submit" class="btn btn-primary pull-right">Add</button>
                 <button type="reset" class="btn btn-danger">Reset</button>
               </div>
             </form><!-- End Multi Columns Form -->

           </div>
         </div>
       </div>
     </div>
   </section>

 </main><!-- End #main -->
