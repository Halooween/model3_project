@extends('layout.main')

 @section('content')   
    <section>
        <main role="main"  class="container-fluid flex-fill">

            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-5 mb-3 clearfix">
                                <h2 class="pull-left">Category_Post</h2>
        
                            </div>
        
                            <table class="table table-bordered table-striped " id="table_id">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Post</th>
                                    </tr>
                                </thead>
        
                                <tbody>
        
                                    @foreach ($datas as $category)
                                  
                                    <tr>
                                        <td>{{ $category->category }}</td>
                                        
                                        <td>
                                            <ul  style="list-style: none;">
                                                @foreach ($category->post as $posts)
                                                <li>
                                                    {{ $posts->title }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
        
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
