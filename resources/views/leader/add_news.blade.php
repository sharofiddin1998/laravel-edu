<x-layouts.admin>
    @slot('title')
    Leader ma'lumotlarini qo'shish
    @endslot
<div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Add Leader </h4>
                           <ol class="breadcrumb p-0 m-0">
                              {{-- <li>
                                 <a href="#">Leader</a>
                              </li> --}}
                              <li>
                                <a href="{{ route('leaders.index') }}">Manage Leader</a>
                       </li>
                              <li class="active">
                                 Add Leader
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
                  {{-- <div class="row">
                     <div class="col-sm-6">
                        <!---Success Message--->

                        <div class="alert alert-success" role="alert">
                           <strong>Well done!</strong>
                        </div>


                        <div class="alert alert-danger" role="alert">
                           <strong>Oh snap!</strong>
                        </div>

                     </div>
                  </div> --}}

                              <form action="{{ route('leaders.store')}}" method="POST" class="row" enctype="multipart/form-data">
                                @csrf
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Position</label>
                                    <input type="text" class="form-control" id="posttitle" name="position" placeholder="Position" required>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select class="form-control" name="category_id"  required>
                                       <option value="">Select Category </option>
                                       @foreach ( $categories as $category)
                                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                                       @endforeach
                                    </select>
                                 </div>

                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" class="form-control" id="posttitle" name="fullname" placeholder="Full Name" required>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" id="posttitle" name="phone" placeholder="Phone" required>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="card-box">
                                          <h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
                                          <input type="file" class="form-control" id="postimage" name="photo"  >
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Days</label>
                                    <input type="text" class="form-control" id="posttitle" name="day" placeholder="Days" required>
                                 </div>
                                 <button type="submit" name="submit" class="btn btn-custom waves-effect waves-light btn-md">Save</button>
                              </form>
               </div>
            </div>
</x-layouts.admin>
