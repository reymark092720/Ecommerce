<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
          
    </head>
    <body>
      <x-header />
      <div class="container py-5">
        <div class="row fs-5">
          <div class="col align-self-center"><h1 className='fw-bolder'>NEW CLOTHES,<br /> NEW <br /> PASSION</h1>
            <p class='border-start p-2 w-75'>“Never wear anything that panics the cat.” “Looking good isn't self-importance;
              it's self-respect.” “Dressing well is a form of good manners.” “The boor covers himself, the rich man or the fool adorns himself,
              and the elegant man gets dressed.”</p>
              <button type="button" class="btn btn-danger mt-3 w-100">SHOP NOW!</button>
          </div>
          <div class="col">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img style="height: 500px" src="https://images.pexels.com/photos/581087/pexels-photo-581087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img style="height: 500px" src="https://images.pexels.com/photos/581339/pexels-photo-581339.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img style="height: 500px" src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          
        </div>
      </div>
    </body>
</html>
