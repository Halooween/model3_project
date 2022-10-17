@extends('layout.main')

@section('content')
<section>
    <main role="main" class="container">

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 form">
                        <h2 class="mt-5 create">Create Category</h2>
                        <form action="{{ route('category.store') }}" method="post" >
                            @csrf 
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" class="form-control " >
                            </div>
    
                            <input type="submit" name="create" class="btn btn-primary" value="Submit">
                            <a href="{{ route('category.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
        </main>
    
</section>
@endsection
   


