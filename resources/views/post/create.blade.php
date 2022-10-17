@extends('layout.main')

@section('content')
<section>
    <main role="main"  class="container-fluid flex-fill">

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 form">
                        <h2 class="mt-5 create">Create Post</h2>
                        <form action="{{ route('post.store') }}" method="post" >
                            @csrf 
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control " value="" >
                            </div>
                            <div class="form-group">
                                <div class="radio">Status<br>
                                    <label><input type="radio" name="status" value="1" checked> active</label>
                                    <label><input type="radio" name="status" value="0"> offline</label>
                                </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" placeholder="write something.." ></textarea>
                            </div>
    
                            <div class="form-group">
                                <label>select Categories:</label><br/>
    
                                @foreach ($datas as $categories)
    
                                <input type="checkbox" name="categories[]" value="{{ $categories->id }}" > {{ $categories->category }} <br/>
                                @endforeach
     
                            </div>
    
                            <input type="submit" name="create" class="btn btn-primary" value="Submit">
                            <a href="{{ route('post.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
        </main>
</section>
    
@endsection


