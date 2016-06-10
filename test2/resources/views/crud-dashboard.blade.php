@extends('layouts.master')

@section('content')
	@include('includes.message-block')
	<div class="row">
    <div class="col l4 s12">
    	{!! Form::open(array('route' => 'category.create')) !!}
	    	<h4>Add branch</h3>
	      <div class="input-field">
	      	{!! Form::text('category_name', null, ['id' => 'category_name']) !!}
	        <label for="branch_name">Branch Name</label>
	      </div>
	      {!! Form::label('Parent name') !!}<br />
				{!! Form::select('parent_name', $parent_name, null, ['class' => 'browser-default']);
				!!}
				{!! Form::token(); !!}
			  <br>
	      {!! Form::submit('Submit!', ['class' => 'btn apolloGreen']); !!}
      {!! Form::close() !!}
    </div> <!-- END col s6 -->
    <div class="col l8 s12">
    	<h4>List of categories</h4>

    	<table class="highlight hoverable">
        <thead>
          <tr>
              <th data-field="mainID">Main ID</th>
              <th data-field="categoryName">Category name</th>
              <th data-field="idOfParent">ID of parent</th>
              <th></th>
              <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
          <tr class="categories" data-categoryid="{{ $category->id }}">
            <td>{{ $category->id }}</td>
            <td>{{ $category->category_name }}</td>
            <td>{{ $category->parent_id }}</td>
            <td><a href="#!" class="editCategory">Edit</a></td>
            <td><a href="{{ route('categories.delete', ['category_id' => $category->id]) }}">Delete</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="editModal" class="modal">
    <div class="modal-content">
      {!! Form::open() !!}
        <h4>Edit branch</h3>
        <div class="input-field">
          {!! Form::text('edit_category_name', null, ['id' => 'edit_category_name']) !!}
        </div>
        {!! Form::label('Parent name') !!}<br />
        {!! Form::select('parent_name', $parent_name, null, ['class' => 'browser-default']);
        !!}
      {!! Form::close() !!}
    </div>
    <div class="modal-footer">
      <button type="button" id="modal_save_categories" class="btn-flat waves-effect waves-light">Update branch</button>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>
  </div>

  <script type="text/javascript">
     var token = '{{ Session::token() }}';
     var urlEdit = '{{ route('categories.edit') }}';
  </script>

@endsection