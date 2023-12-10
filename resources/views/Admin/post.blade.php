@extends('Admin.header')

@section('admin-title')
Posts
@endsection

@section('admin-content')

<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>

                      <tbody>
                      @foreach ($post as $item)
                          
                      <tr>
                          <td class='id'>  {{ $item['post_id'] }} </td>
                          <td>{{ $item['post_title'] }}</td>
                          <td>{{ $item['category'] }}</td>
                          <td>{{ $item['created_at'] }}</td>
                          <td>{{ $item['user_id'] }}</td>
                          <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                          <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        
                        @endforeach
                      </tbody>
                  </table>

                  {{ $post->links() }}
                  {{-- <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul> --}}
              </div>
          </div>
      </div>
  </div>

@endsection