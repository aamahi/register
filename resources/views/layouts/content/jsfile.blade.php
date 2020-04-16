
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('admin/js/owl.carousel.js')}}" ></script>
<script src="{{asset('admin/js/jquery.customSelect.min.js')}}" ></script>
<script src="{{asset('admin/js/respond.min.js')}}" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--data table-->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<!--common script for all pages-->
<script src="{{asset('admin/js/common-scripts5e1f.js')}}?v=2"></script>
<!--toastr-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{--<script src="{{asset('admin/assets/toastr-master/toastr.js')}}"></script>--}}
<!--script for this page-->
<script src="{{asset('admin/js/sparkline-chart.js')}}"></script>
<script src="{{asset('admin/js/easy-pie-chart.js')}}"></script>
<script src="{{asset('admin/js/count.js')}}"></script>
<script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'primary':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
    @endif

    $('.delete').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
</script>

<script>


    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>

</body>
</html>
