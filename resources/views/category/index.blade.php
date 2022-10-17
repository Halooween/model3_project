@extends('layout.main')
  
@section('content')
<section>
    <main role="main"  class="container-fluid flex-fill">

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">Category</h2>
                            <a href="{{ route('category.create')}}" class="btn btn-success pull-right">add new category </a>                       
    
                        </div>
    
                        <table class="table table-bordered table-striped " id="table_id">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
    
                            <tbody>
    
                                @foreach ($datas as $category)
                              
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->category }}</td>
    
                                 </tr>
                                @endforeach   
                            </tbody> 
                           
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </main>
</section>
  
@endsection


