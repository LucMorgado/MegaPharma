<div class="bg-danger container position-relative">
	<div id="carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner p-2">
    <div class="carousel-item active">
      <img src="{{ asset('images/banner-ex.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/banner-ex.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/banner-ex.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Proximo</span>
  </button>
</div>	

</div>

<style type="text/css">
	
	.carousel{ 
		position: absolute;
		right: 0;
		top: -100px;
		height: 400px;
		width: 60%;
		padding-left: 20%;
		background-color: #eee;
		box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
	 }
	 .carousel-control-next-icon{ 

	 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%235a8d96'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
	}

	.carousel-inner{ width: 80%;height: calc(100% - 0.5rem); }

	.carousel-item { height: 100%; }

	 
</style>