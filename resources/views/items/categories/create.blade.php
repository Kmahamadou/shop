@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter un nouveau Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Ajout Categorie</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">

		<div class="row clearfix">
	        <div class="col-lg-12">
	            <div class="card">
	                <div class="body">
	                    @include('layouts.messages')
	                    <!-- form start -->
              <form action="{!! route('category.store') !!}" method="POST" role="form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom de categorie***</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nom du produit" required>
                  </div>{{-- 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Code produit ***</label>
                    <input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div> --}}
                  <div class="form-group">
                    <label for="exampleInputPassword1">Code Categorie***</label>
                    <input type="text" name="slug" class="form-control" id="exampleInputPassword1" placeholder="Prix d'achat" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
              </form>
              <!-- Form End -->
	                </div>
	            </div>
	        </div>
    	</div>
    </div>
</div>
</div>
</div>
</section>

    </div>
@endsection