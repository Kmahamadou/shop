@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter un nouveau produit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Ajout Produit</li>
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
              <div class="card-header">
                <h3 class="card-title">Descriptions</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{!! route('item.store') !!}" method="POST" role="form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom ***</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nom du produit" required>
                  </div>{{-- 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Code produit ***</label>
                    <input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div> --}}
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prix d'achat ***</label>
                    <input type="text" name="purchase_price" class="form-control" id="exampleInputPassword1" placeholder="Prix d'achat" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prix de vente ***</label>
                    <input type="text" name="retail_price" class="form-control" id="exampleInputPassword1" placeholder="Prix de vente" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">TVA</label>
                    <input type="text" name="vat" class="form-control" id="exampleInputPassword1" placeholder="TAX: TVA">
                  </div>
                  <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            <option value="">Categorie Produit</option>
                          @foreach($categories as $category)
                            <option value="{!! $category->slug !!}">{!! $category->name !!}</option>
                          @endforeach
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantité ***</label>
                    <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Quantité à Ajouter" required>
                  </div>
                  <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Description du produit ..."></textarea>
                    </div>
                  {{-- <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choisissez l'image</label>
                      </div>
                    </div>
                  </div> --}}
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
              </form>
              <!-- Form End -->


            </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </section>
    <!-- /.content -->
</div>
@endsection