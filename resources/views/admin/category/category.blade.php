@extends('admin.layouts.app')

@section('main-content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1>
	      Text Editors
	      <small>Advanced form element</small>
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	      <li><a href="#">Forms</a></li>
	      <li class="active">Editors</li>
	    </ol>
	  </section>

	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Titles</h3>
	          </div>
	    		@include('includes.messages')      
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('category.store') }}" method="post">
	          {{ csrf_field() }}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <label for="name">Category title</label>
	                <input type="text" class="form-control" id="name" name="name" placeholder="Category Title">
	              </div>

	              <div class="form-group">
	                <label for="slug">Category Slug</label>
	                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
	              </div>

				  <div class="form-group">
	                <label for="slug">Category description</label>
	                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
	              </div>

				  <div class="form-group">
	                <label for="slug">Category color</label>
	                <input type="color" class="form-control" id="color" name="color" placeholder="Color" style="width: 45px;">
	              </div>
				  <div class="form-group">
                    <label for="image">Category image</label>
                    <input type="file" name="image" id="image">
                  </div>

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Submit</button>
	              <a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
	            </div>
	            	
	            </div>
					
				</div>

	          </form>
	        </div>
	        <!-- /.box -->

	        
	      </div>
	      <!-- /.col-->
	    </div>
	    <!-- ./row -->
	  </section>
	  <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
@endsection