@extends('layouts.app')

@section('content')
    <x-navbar sum="{{$sumAndQuantity['sum']}}" quantity="{{$sumAndQuantity['quantity']}}"/>

    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-column flex-md-row mt-5 align-items-center align-items-md-start">


                <div class="ct-imgShow">
                    <a href="{{ route('show', ['id' => $product->id]) }}">
                    <img class="imgShow" src="{{ asset('storage') . '/' . $product->image1 }}" id = 'foto' name="image1" alt=""></a>
                    <br/>
                    <br/>
                    <button type="text" class="input-group-text" onclick = replaceImage();> + Imagenes</button>
                    

                <script type = "text/javascript">

                function replaceImage()
                {
                    var image =  document.getElementById('foto');
                    image.src = "id"
                } 
                /* replaceImage(); */

                </script>

                </div>


                <div class="card-body p-0 mx-md-4 my-4 my-md-0 ct-infoShow">
                    <h5 class="card-title font-weight-bold txtTitleShow">{{ $product->title }}</h5>
                    <div class="d-flex flex-row flex-wrap align-items-center">
                        <h6 class="extraShow font-weight-bold mr-2"></h6>
                        <p class="card-title extraShow font-weight-bold txtPriceShow">{{ $product->price }} &#8364 </p>
                        @if($product->isAvailable)
                        <h6 class="extraShow font-weight-bold mx-2"> | Disponible: Sí</h6>
                        <h6 class="extraShow font-weight-bold mx-2"> | Añadir al carrito</h6>
                        
                        <a class="icoCardShowAvailable" href="{{ route('addCart', ['product_id'=>$product->id]) }}">
                            <img class="icoCard m-1 mb-2" src="{{url('/img/shopping-cart.svg')}}" alt="Flaticon">
                        </a>

                        @else
                        <h6 class="extraShow font-weight-bold mx-2"> | No Disponible: No</h6>
                        <h6 class="extraShow font-weight-bold mx-2"> | Añadir al carrito</h6>
                        <img class="icoCardShowNoAvailable m-1 mb-2" src="{{url('/img/cartNoAvailable.svg')}}" alt="Flaticon">
                        @endif

                        @if($product->canReserve && Auth::check() && Auth::user()->canReserve)
                        {{-- <h6 class="extraShow font-weight-bold mx-2"> | Reservar</h6> --}}
                        <h6 class="extraShow font-weight-bold mx-2"> | </h6>
                        <button type="text" class="input-group-text ml-2">Reservar</button></a>
                        @endif

                    </div>
                    <h6 class="card-title font-weight-bold mt-3">Autores:</h6>
                    <div class="d-flex flex-row flex-wrap align-items-center">
                        <a href="{{ route('viewByAuthor', ['author'=>$product->author1]) }}" class="text-reset"><h6 class="extraShow mr-1">{{ $product->author1 }}  </h6></a>

                        @if($product->author2)

                        <a href="{{ route('viewByAuthor', ['author'=>$product->author2]) }}" class="text-reset"><h6 class="extraShow mr-1">,  {{ $product->author2 }}  </h6></a>

                        @endif

                        @if($product->author3)

                        <a href="{{ route('viewByAuthor', ['author'=>$product->author3]) }}" class="text-reset"><h6 class="extraShow mr-1">,  {{ $product->author3}}  </h6></a>

                        @endif

                        @if($product->author4)

                        <a href="{{ route('viewByAuthor', ['author'=>$product->author4]) }}" class="text-reset"><h6 class="extraShow mr-1">,  {{ $product->author4}}  </h6></a>

                        @endif

                        @if($product->author5)

                        <a href="{{ route('viewByAuthor', ['author'=>$product->author5]) }}" class="text-reset"><h6 class="extraShow mr-1">,  {{ $product->author5}}  </h6></a>

                        @endif

                        @if($product->author6)

                        <a href="{{ route('viewByAuthor', ['author'=>$product->author6]) }}" class="text-reset"><h6 class="extraShow mr-1">,  {{ $product->author6}}  </h6></a>

                        @endif

                    </div>
                    <p class="card-title">{{ $product->author }}</p>
                    <h6 class="card-title font-weight-bold">Editorial:</h6>
                    <p class="card-title">{{ $product->editorial }}</p>
                    <h6 class="card-title font-weight-bold">Descripción:</h6>
                    <p class="card-title">{{$product->description}}</p>
                    <div class="d-flex flex-row flex-wrap align-items-center">
                        <h6 class="extraShow font-weight-bold mr-2">ISBN</h6>
                        <p class="card-title extraShow">{{ $product->isbn }}</p>
                        <h6 class="extraShow font-weight-bold mx-2"> | Categoría Principal:</h6>
                        <p class="card-title extraShow">{{ $product->categoryMain }}</p>
                    </div>
                    <div class="d-flex flex-wrap flex-row mt-3">


                        <img class="m-1" src="{{ asset('storage') . '/' . $product->image1 }}" width=90 alt="">


                        <a href="{{ route('show', ['id' => $product->id]) }}">
                        <img class="m-1" src="{{ asset('storage') . '/' . $product->image2 }}"  href="{{ route('show', ['id' => $product->id]) }}" id ='foto2' name="image2" width=90 alt=""></a>

                        <script type = "text/javascript">

                            function replaceImage()
                            {
                                var image =  document.getElementById('foto');
                                image.src = "$product->id"
                            } 
            
                            </script>


                        <img class="m-1" src="{{ asset('storage') . '/' . $product->image3 }}" name="image3" width=90 alt="">



                        <div class="d-flex flex-column justify-content-end m-1">
                            <div class="d-flex flex-row align-items-center flex-wrap">
                                <h6 class="extraShow font-weight-bold">Formato:</h6>
                                <p class="card-title extraShow">{{ $product->format }}</p>
                            </div>
                            <div class="d-flex flex-row align-items-center flex-wrap">
                                <h6 class="extraShow font-weight-bold">Páginas:</h6>
                                <p class="card-title extraShow">{{ $product->pages }}</p>
                            </div>
                            <div class="d-flex flex-row align-items-center flex-wrap">

                                @if($product->tag1)
                                <h6 class="extraShow font-weight-bold">Etiquetas:</h6>
                                <a href="{{ route('viewByTag', ['tag'=>$product->tag1]) }}" class="text-reset"><h6 class="extraShow mr-1"> {{ $product->tag1}}  </h6></a>
                                @endif

                                @if($product->tag2)
                                <a href="{{ route('viewByTag', ['tag'=>$product->tag2]) }}" class="text-reset"><h6 class="extraShow mr-1"> , {{ $product->tag2}}  </h6></a>
                                @endif

                                @if($product->tag3)
                                <a href="{{ route('viewByTag', ['tag'=>$product->tag3]) }}" class="text-reset"><h6 class="extraShow mr-1"> , {{ $product->tag3}}  </h6></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if(Auth::check() && Auth::user()->isadmin())
                <div class="input-group mb-3">
                    <a href="{{ route('edit', ['id'=>$product->id]) }}"><button type="text" class="input-group-text">Editar</button></a>
                    <form action="{{ route('delete', ['id'=>$product->id]) }}" method="post">
                    @method('delete')
                    @csrf
                        <input type="submit" class="input-group-text ml-2" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto? {{ $product->title }}')" value="Eliminar">
                    </form>
                </div>
            @endif

            <div class="d-flex justify-content-center align-items-center mt-5">
                <h2 class="card-title font-weight-bold txtTitleShow">Productos relacionados</h2>
            </div>
            <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
                @foreach ($productrelations as $productrelation)
                <div class="ct-product m-lg-4 m-3">
                    <div class="ct-img">
                        <a href="{{ route('show', ['id' => $productrelation->id]) }}">
                            <img class="imgCard" src="{{ asset('storage') . '/' . $productrelation->image1 }}" alt="">
                        </a>
                    </div>
                    <div class="ct-info d-flex flex-row align-items-center p-1">
                        <div class="ct-txt d-flex flex-column justify-content-center">
                            <div class="txtTitle d-flex flex-row align-items-center">
                                <p class="txtInfoTitle text-truncate m-0">{{ $productrelation->title }} </p>
                            </div>
                            <p class="txtPrice">{{ $productrelation->price }} &#8364</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="separator">|</div>
                        </div>
                        @if ($productrelation->isAvailable == 1)
                            <a href="{{ route('addCart', ['product_id'=>$productrelation->id]) }}">
                                <img class="icoCard ml-2" src="{{url('/img/shopping-cart.svg')}}" alt="Flaticon">
                            </a>
                        @else
                            <img class="icoCardNoAvailable ml-2" src="{{url('/img/cartNoAvailable.svg')}}" alt="Flaticon">
                        @endif
                    </div>
                    @if(Auth::check() && Auth::user()->isadmin())
                        <div class="input-group mb-3">
                            <a href="{{ route('edit', ['id'=>$productrelation->id]) }}"><button type="text" class="input-group-text">Editar</button></a>
                            <form action="{{ route('delete', ['id'=>$productrelation->id])}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" class="input-group-text ml-2" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto? {{ $productrelation->title }}')" value="Eliminar">
                            </form>
                        </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
