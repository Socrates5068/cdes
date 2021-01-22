@include('layout')

@section('denuncias')
{{-- Ventana emegente --}}
<div class="container">
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="popup" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Titulo</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
             {{-- <img src="https://www.hogar.mapfre.es/media/2018/09/hamburguesa-sencilla.jpg" alt=""> --}}
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                  <div class="item active">
                      <img src="https://www.hogar.mapfre.es/media/2018/09/hamburguesa-sencilla.jpg"
                      alt="" style="width: 800px">
                  </div>
                  <div class="item">
                      bbb
                      <img src="images/image-2.jpeg" alt="">
                  </div>
                  <div class="item">
                      ccc
                      <img src="images/image-3.jpeg" alt="">
                  </div>
              </div>
          
              <!-- Controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> --}}
      </div>
    </div>
  </div>
</div>      
<script>
  $("#popup").modal();      
</script>
@endsection