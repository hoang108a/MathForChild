@extends('frontend.layouts.Home')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade mycarousel" data-ride="carousel" data-interval="1500">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner list-slide-item" >

            <div class="carousel-item active" >
                <img class="d-block w-100 img-slide" src="{{asset('frontend/images/1.jpg')}}" alt="First slide">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100 img-slide" src="{{asset('frontend/images/5.jpg')}}" alt="Second slide">
                <div class="carousel-caption">
                    <div class="container content">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100 img-slide" src="{{asset('frontend/images/6.jpeg')}}" alt="Third slide">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-slide" src="{{asset('frontend/images/7.jpeg')}}" alt="Third slide">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-slide" src="{{asset('frontend/images/6.jpeg')}}" alt="Third slide">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-success">
                        <th scope="row">1</th>
                        <td>Trần Kim Phong </td>
                        <td>2A9</td>
                        <td>1220</td>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">2</th>
                        <td>Trần Thái Sơn</td>
                        <td>2A9</td>
                        <td>1009</td>
                    </tr>
                    <tr class="table-danger">
                        <th scope="row">3</th>
                        <td>Nguyễn Hải Anh</td>
                        <td>2A9</td>
                        <td>990</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container"><hr></div>

    <!-- hết table ranking -->
  

    <!-- Thông báo -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <h3><span style="color: blue; font-size: 34px">&#10072 </span>Thông báo</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="thongbao">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h3> Thông báo </h3>
                            <p class="lead"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hết thông báo -->
@endsection
