<div>
    <style type="text/css">
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>

      <main id="main" class="main">
        <div class="pagetitle">
           <div class="d-flex justify-content-between" >
               <div class="col-lg-6">
                  <h1>Dashboard</h1>
                  <nav>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                      <li class="breadcrumb-item active">All Categeries</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-lg-6" style="align-content: right;align-items: right;display: flex; justify-content: right;">

                </div>
               </div>
          </div>
        <div>
        <!-- End Page Title -->

        <section class="section dashboard">

                <div class="col-12">
                  <div class="card recent-sales overflow-auto">
                    <div class="card-header">
                      <div class="row ">
                          <div class="col-lg-6">
                                <h5 class="card-title">All Categeries</h5>
                          </div>
                          <div class="col-lg-6 text-end">
                              <a href="{{route('admin.add_service_category')}}" class="btn btn-info">Add New</a>
                          </div>
                      </div>
                    </div>
                    <div class="card-body border-0">

                      <table class="table table-borderless datatable g-3">
                        <thead>
                            <tr>
                              <th scope="col" class="text-uppercase">Category Id</th>
                              <th scope="col" class="text-uppercase">Category Image</th>
                              <th scope="col" class="text-uppercase">Category Name</th>
                              <th scope="col" class="text-uppercase">Slug</th>
                              <th scope="col" class="text-uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($scategories as $scategory)
                             <tr>
                               <td>{{$scategory->id}}</td>
                               <td><img src="{{asset('images/categories')}}/{{$scategory->image}}" width="50px"></td>
                               <td>{{$scategory->name}}</td>
                               <td>{{$scategory->slug}}</td>
                              <td>
                                <button type="submit" class="btn btn-sm btn-success">Active</button>
                                <a class="" href="#"></a><button type="submit" class="btn btn-sm btn-info">Edit</button>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                              </td>
                            </tr>
                           @endforeach
                        </tbody>
                      </table>
                      {{$scategories->links()}}
                    </div>
                  </div>
                </div>
        </section>

      </main><!-- End #main -->

</div>
