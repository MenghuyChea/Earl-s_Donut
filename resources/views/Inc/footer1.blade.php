</div>
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/popper.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
<script type="text/javascript" src="js/mdb.min.js">
    $(document).ready(function() {
// SideNav Button Initialization
        $(".button-collapse").sideNav2();
// SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);
    });
</script>
</body>
</html>
