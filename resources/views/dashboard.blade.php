@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ma Boutique</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Autre</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      	<div class="row">
      		<div class="col-md-4">
		      <a href="{!! route('item.index') !!}" class="stretched-link">
		        <div class="card" style="width: 30rem;">
		          <img class="bd-placeholder-img" width="300" height="160" src="{{ URL::to('images/stock.jpg')}}" >
		          <div class="card-body">
		            <p class="card-text" ><h3 class="text-center"><b>PRODUITS EN STOCK </b> </h3></p>
		          </div>
		        </div>
		      </a>
		    </div>

		    <div class="col-md-4" style='border:solid 1px padDing:0px'>
		      <a href="{!! route('item.create') !!}" class="stretched-link">
		        <div class="card" style="width: 30rem;">
		          <img class="bd-placeholder-img" width="300" height="160" src="{{ URL::to('images/liste.png')}}" >
		          <div class="card-body">
		            <p class="card-text" ><h3 class="text-center"> <b>NOUVEAUX PRODUITS</b> </h3></p>
		          </div>
		        </div>
		      </a>
		    </div>

		    <div class="col-md-4" style='border:solid 1px margin-right:2px'>
		      <a href="#" class="stretched-link">
		        <div class="card" style="width: 30rem;">
		          <img class="bd-placeholder-img" width="300" height="160" src="{{ URL::to('images/vente.jpg')}}" >
		          <div class="card-body">
		            <p class="card-text" ><h3 class="text-center"><b> VENTE </b> </h3></p>
		          </div>
		        </div>
		      </a > 
		    </div>

		    <div class="col-md-4" style="margin-top:20px">
		      <a href="#" class="stretched-link">
		        <div class="card" style="width: 30rem;">
		          <img class="bd-placeholder-img" width="300" height="160" src="{{ URL::to('images/facture.jpg')}}" >
		          <div class="card-body">
		            <p class="card-text" ><h3 class="text-center"> <b> FACTURE </b> </h3></p>
		          </div>
		        </div>
		      </a>
		    </div>

		    <div class="col-md-4" style="margin-top:20px">
		      <a href="{!! route('category.create') !!}" class="stretched-link">
		        <div class="card" style="width: 30rem;">
		          <img class="bd-placeholder-img" width="300" height="160" src="{{ URL::to('images/types.jpg')}}" >
		          <div class="card-body">
		              <p class="card-text" ><h3 class="text-center"><b>NOUVEAUX TYPES PRODUITS</b> </h3></p>
		          </div>
		        </div>
		      </a>
		    </div>

		    <div class="col-md-4" style="margin-top:20px">
		      <a href="#" class="stretched-link">
		        <div class="card" style="width: 30rem;">
		          <img class="bd-placeholder-img" width="300" height="160" src="{{ URL::to('images/historique.png')}}" >
		          <div class="card-body">
		            <p class="card-text" ><h3 class="text-center"> <b> HISTORIQUE DES VENTES </b> </h3></p>
		          </div>
		        </div>
		      </a>
		    </div>
    	</div>
</div>
</section>

</div>

{{--     <div class="card-deck">
		  <div class="card">
		    <img class="card-img-top" src="{{ URL::to('images/stock.jpg')}}" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="{{ URL::to('images/liste.png')}}" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="{{ URL::to('images/vente.jpg')}}" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>

		<div class="card-deck">
		  <div class="card">
		    <img class="card-img-top" src="{{ URL::to('images/facture.jpg')}}" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="{{ URL::to('images/types.jpg')}}" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="{{ URL::to('images/historique.png')}}" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div> --}}
@endsection