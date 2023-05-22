@include('header')
    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Catálogo</h6>
                <h1>Productos exportables</h1>
            </div>
            <div id="contenedor_productos" class="row" >
               
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
   

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
        <script type="text/javascript">
        /*get data products*/
        $(document).ready(function () {
                 
let productos = [
  {
    "titulo": "Diii Zaallil",
    "descripcion": "",
    "foto": "foto_zaallir.png",
    "unidad": ""
  },
  {
    "titulo": "DON GALO, MEZCAL",
    "descripcion": "",
    "foto": "foto_dongalomezcal.png",
    "unidad": ""
  },
  {
    "titulo": "Mezcal Local",
    "descripcion": "",
    "foto": "foto_mezcallocal.png",
    "unidad": "Kg"
  },
  {
    "titulo": "Salchita",
    "descripcion": "",
    "foto": "foto_salchita.png",
    "unidad": "Kg"
  },
  {
    "titulo": "Amor a oaxaca",
    "descripcion": "",
    "foto": "foto_amoraoaxaca.png",
    "unidad": ""
  },
   {
    "titulo": "pepemiel",
    "descripcion": "",
    "foto": "foto_pepemiel.png",
    "unidad": ""
  },];
                    $.each(productos, function(index, element) {
                        console.log(element);
                        $('#contenedor_productos').append(
                            '<div class="col-lg-4 col-md-6 mb-4">'
                            + '<div class="service-item bg-white text-center mb-2 py-5 px-4">'
                            + '<h5 class="mb-2">'+ element.titulo +'</h5>'
                            + '<img src="img/productos/'+element.foto+'" width="150px">'
                            + '<p class="m-0">'+ element.descripcion + '</p>'
                            + '<br>'
                            + ' <button class="btn btn-primary type="">Contactar</button>'
                            + '</div>'
                            + '</div>'
                            );
                        });
        });
        
        
    </script>
@include('footer')